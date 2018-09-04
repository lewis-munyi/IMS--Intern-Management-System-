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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

//Route::get('/super', function () {
//    $allusers = DB::table('users')->get();
//    return view('/super/dashboard') -> with('response', compact($allusers));
//});
Route::get('/super', 'UsersController@index');

//Route::resource('/super', 'AddAdministratorsController');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/test', function () {
    return view('super/test');
});

Route::get('/signup', function (){
    return view('auth/register2');
});
Route::get('mail/send', 'Mailcontroller@send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('super', [
    'uses' => 'UsersController@store'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
