<?php

/*
 *
 *
 * Guest views
 *
 *
 *
 */

//Welcome for all users
Route::get('/welcome', function () {
    return view('welcome');
});

// Landing page
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
});


/*
 *
 * Auth views
 *
 *
 */
// Auth views
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 *
 * Auth group
 *
 *
 */
Route::group(['middleware'=>'auth'],function(){

//      HR Dashboard
    Route::get('/hr', function (){
        return view('hr.dashboard');
    })->name('hr');

//    Intern route
    Route::resource('/intern' , 'InternController');

//Application form
    Route::get('/application', function () {
        return view('application');
    });
    Route::get('/list-applications', function () {
        return view('hr.applications');
    });



});


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
