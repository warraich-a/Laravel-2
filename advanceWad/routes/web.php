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
        return view('home');
    }
});
Route::get('/home', function () {
    if(!session()->has('data'))
    {
        return redirect('login');
    }
    else{
        return view('home');
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

/*Route::post('/register1', 'RegisterController@insert');

/*Route::post('/login', 'login@login');*/
/*Route::post('/login', 'RegisterController@login');*/



Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
Auth::routes();
Route::post('/home', [
    'uses' => 'loginController@login',
    'as' => 'home'
]);

Route::post('/register', [
    'uses' => 'RegisterController@insert',
    'as' => 'register1'
]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', function () {
        return view('home');
    })->name('home');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
Route::get('/profile/{user}', 'ProfileController@show')->name('users.profile');

Route::get('/profile', function (){
    if(!session()->has('data'))
    {
        return redirect('login');
    }
    else{
        return view('user.profile');
    }


});
