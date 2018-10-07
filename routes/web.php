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

    Route::get('/landingpage', function () {
        return view('landing');
    })->name('landingpage');

    Route::get('/school', function () {
        return view('school.dashboard');
    })->name('school');

//      HR Dashboard
    Route::get('/hr', 'ApplicationController@index')->name('hr');

    //Application approval
    Route::get('/hr/applications/{application}', 'ApplicationController@application')->name('application');

    //View documents
    Route::get('/hr/applications/{application}/documents', 'ApplicationController@viewDocument' );

    //Accept application
    Route::put('/hr/applications/{application}/accept', 'ApplicationController@acceptApplication')->name('accept');

    //Reject Application
    Route::put('/hr/applications/{application}/reject', 'ApplicationController@rejectApplication')->name('reject');
    

//    Intern route
    Route::resource('/intern' , 'InternController');

//    Attache routes
    Route::get('/attache','LogsController@index')->name('attache');
    Route::get('/getLogs', 'LogsController@index')->name('getLogs');
    Route::post('submitProgress', 'LogsController@store')->name("submitProgress");
//    Application form
    Route::get('/application', function () {
        return view('application');
    })->name('application');

    Route::post('/application', 'ApplicationController@store')->name('apply');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/list-applications', function () {
        return view('hr.applications');
    })->name('applications');

    Route::get('/admin', function () {
        return view('boss.dashboard');
    })->name('admin');

    Route::get('/interns', function () {
        return view('boss.interns');
    })->name('interns');



    Route::get('/test', function () {
        return view('super_admin.test');
    })->name('test');

    Route::get('/super', function () {
        return view('super_admin.dashboard');
    })->name('superadmin');

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

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
