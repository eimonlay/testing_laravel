<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $home_name = "This is Home Page";
      return view('home',compact('home_name'));
    }

    public function phpPage()
    {
    	$data  = array(
    		"lesson1" => "This is Php Lesson1" , 
    		"lesson2" => "This is Php Lesson2" ,
    		"lesson3" => "This is Php Lesson3" ,
    	);

    	return view('php' ,compact('data'));
    }


       public function jsPage()
    {
    	$data  = array(
    		"lesson1" => "This is js Lesson1" , 
    		"lesson2" => "This is js Lesson2" ,
    		"lesson3" => "This is js Lesson3" ,
    	);

    	return view('js' ,compact('data'));
    }
}
