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

//Guest Views
//Welcome for all users
Route::get('/welcome', function () {
    return view('welcome');
});

// Landing page
Route::get('/', function () {
    return view('dashboard');
});

Route::resource('/intern' , 'InternController');

//Application form
Route::get('/application', function () {
    return view('dashboard');
});

// Auth views
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//Post application data

//Attache Views
//View Attache Progress

//Add progress

//Post progress

//Supervisor views
//View all my attaches

//View one attache(Progress)
//post remark form in same view??

//Post remark

//HR views
//View all applications Table

//View one applications information(Modal)

//Accept or reject application (Post)
//send email to applicant








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
