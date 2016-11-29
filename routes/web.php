<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Mail\GtMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function () {
	
	Mail::to('j.ngomnze@gabontelecom.ga')->send(new GtMail);
	
	return view('welcome');
});
