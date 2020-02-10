<?php

namespace App;



class Cart{
    public $items = null ; //isto serve para dividir os items por grupos
    //ou seja, se eu quiser 2 botas e 1 sapatilhas, em vez de aparecer 1+1+1, aparece 2 + 1

    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
    }


    public function add($item, $id){

        //configurar um novo item, ou seja primeiro com as linhas a seguir
        $storedItem = ['qty' => 0,
                       'price'=>$item->price,
                       'item' => $item]; //servirá para os grupos, para nao tar a adicionar 2 da mesma coisa

        if($this->items){ //verificar se ja ha items no array
            if (array_key_exists($id, $this->items)){ //verificar se ja existe o item que eu quero adicionar
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }

    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -=  $this->items[$id]['item']['price'];

        if ($this->items[$id]['qty'] <= 0 ){
            unset($this->items[$id]);
        }
    }

    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'] ;
        $this->totalPrice -=  $this->items[$id]['price'];
        unset($this->items[$id]);
    }

}
