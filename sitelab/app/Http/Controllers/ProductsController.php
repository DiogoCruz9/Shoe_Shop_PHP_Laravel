<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Order;
use Stripe\Charge;
use Stripe\Stripe;
use Mail;


class ProductsController extends Controller
{
    public function getIndex(){
        $products = Products::all();
        return view('shop.index', ['products' => $products]);
    }
/*
    public function searchProducts(Request $request){
        $results = Products::where('title', 'like', '%'.$request->search.'%')
            ->orWhere('description', 'like', '%'.$request->search.'%')
            ->orderBy('title', 'desc')
            ->get();

        return view('search_results', ['results'=>$results, 'keyword'=>$request->keyword]);
    }
*/


    public function searchProducts(Request $request){
        $products = Products::where('title', 'like', '%'.$request->search.'%')
            ->orWhere('description', 'like', '%'.$request->search.'%')
            ->get();
        return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
        $product= Products::find($id); //buscar o produto via id

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);


        if (count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public  function getCart(){
        if (!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public  function getCheckout(){
        if (!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);

    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_z6dtNHbQDShuZX6DG0aTIJHK');

        try{
            $charge = Charge::create(array(
                    "amount"=>$cart->totalPrice * 100,
                    "currency"=> "eur",
                    "source"=>  'tok_visa', //$request->input('stripeToken'),
                    "description"=>'Teste'
            ));

            $order = new Order();
            $order->cart=serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);

        }catch (\Exception $e){
            return redirect()->route('checkout')->with('error',$e->getMessage());
        }



        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased');

    }

    public function getContact(){
        return view('shop.contact');
    }

    public function postContact(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'subject'=>'min:3',
            'message'=>'min:10']);

        $data =array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function ($message) use ($data){
            $message->from($data['email']);
            $message->to('pedroramalho604@gmail.com');
            $message->subject($data['subject']);

        });

        //Session::flash();
        return redirect()->route('product.index')->with('success', 'Your Email was sent!');
    }



    public function getAbout(){
        return view('shop.about');
    }




}
