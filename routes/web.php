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


Auth::routes();


Route::get('/index', function () {
    return view('index');
});

Auth::routes();


Route::post('super', [
    'uses' => 'UsersController@store'
]);

Route::get('/super', 'UsersController@index');

//Route::resource('/super', 'AddAdministratorsController');

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/test', function(){
    return view('school.dashboard') -> with('response', "Enter your email address here. Your student's report will be sent to this address");
});


Route::get('/signup', function (){
    return view('auth/register2');
});


Route::get('mail/send', 'Mailcontroller@send');


Route::get('/login2', function (){
    return view('auth/login2');
});


//Route::resource('notes', 'NotesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/test', [
    'uses' => 'schoolsupervisorController@sendMail'
]);


Route::get('/test2', function (){
    return view('mail.studentreport');
});

Route::get('redirect', 'RedirectController@index');





Route::get('/schoolsupervisor', function () {
    return view('schoolsupervisor');
});


Route::get('/progress', function () {
    return view('progress');
});


//Route::get('/super', function () {
//    $allusers = DB::table('users')->get();
//    return view('/super/dashboard') -> with('response', compact($allusers));
//});

// Route::get('/test', function () {
//     return view('super/test');
// });