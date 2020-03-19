<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index()
 
    	{//dd("Hello from receipe page");
    	$data =Receipe::all();
    	return view('home',compact('data'));
    }
}
?>
