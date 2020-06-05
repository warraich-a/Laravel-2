<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    if(!session()->has('data'))
    {
        return redirect('login');
    }
    else{
        return view('welcome');
    }
});

Route::get('/logout', function () {
    session()->forget('data');
    return redirect('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register', 'RegisterController@insert');

/*Route::post('/login', 'login@login');*/
Route::post('/login', 'RegisterController@login');


