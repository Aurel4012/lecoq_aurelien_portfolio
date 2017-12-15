<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
   public function index(){
   	 $title = "Aurélien Lecoq";
   	return view('welcome',compact('title'));
   }
   public function portfolio(){
   	 $title = "Aurélien Lecoq";
   	return view('portfolio',compact('title'));
   }
   public function contact(){
   	 $title = "Aurélien Lecoq";
   	return view('contact',compact('title'));
   }
}
