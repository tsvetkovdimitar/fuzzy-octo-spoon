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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    
    return view('welcome');

//    if(Auth::check()){
//
//        return "The user is logged in";
//
//    }

//    $username = 'kim';
//    $password = '123456Kim';
//
//    if(Auth::attempt(['username'=>$username, 'password'=>$password])){
//
//        return redirect()->intended('/admin');
//
//    }

//Auth::logout();

});

Route::get('/test', function(){

    echo "TEST TEST TEST";

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
