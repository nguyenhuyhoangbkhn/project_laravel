<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function home(){
    	$people = ['Hoang','Huy','Nguyen'];
 	    return view('welcome',compact('people'));

    }
    public function about(){
	    return view('page.about'); //resoure/views/page/about.blade.php 
    }
}
