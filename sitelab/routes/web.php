<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
        'uses' => 'ProductsController@getIndex',
        'as'=> 'product.index'
] //tenho de meter um . porque nao é uma diretoria global, index ta dentro duma pasta shop
);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductsController@getAddToCart',
    'as'=> 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductsController@getCart',
    'as'=> 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductsController@getCheckout',
    'as'=> 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductsController@postCheckout',
    'as'=> 'checkout',
    'middleware' => 'auth'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductsController@getReduceByOne',
    'as'=> 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductsController@getRemoveItem',
    'as'=> 'product.remove'
]);

Route::post('/', [
    'uses' => 'ProductsController@searchProducts',
    'as'=>'product.search'
]);


Route::get('/contact',[
    'uses' => 'ProductsController@getContact',
    'as' => 'contact'
]);

Route::post('/contact',[
    'uses' => 'ProductsController@postContact',
    'as' => 'contact'
]);



Route::group(['prefix'=>'user'], function(){

    Route::group(['middleware'=>'guest'], function (){

        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as'=> 'user.signup'
            //'middleware'=> 'guest' //so pessoas que nao tao autenticadas é que podem fazer sign up
        ]);

        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as'=> 'user.signup'
        ]);

        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as'=> 'user.signin'
        ]);

        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as'=> 'user.signin'
        ]);
    });

    Route::group(['middleware'=>'auth'], function (){

        Route::get('/profile',[
            'uses' => 'UserController@getProfile',
            'as'=> 'user.profile'
            //'middleware'=> 'auth' //só users que tao autenticados é que podem aceder ao perfil
        ]);

        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as'=> 'user.logout'
        ]);
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
