<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	$people = ['Hoang','Huy','Nguyen'];
//     return view('welcome',compact('people'));
//     // return view('view')->withPeople($people);
// });


// Route::get('about', function () {
//     return view('page.about'); //resoure/views/page/about.blade.php 
// });

Route::get('/','PagesController@home');
Route::get('about','PagesController@about');
