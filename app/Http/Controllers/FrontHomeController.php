<?php

namespace App\Http\Controllers;

use App\Model\Emails;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

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
    
    public function envoiMails(ContactRequest $request)
    {
      
         $mails = new Emails($request->except('csrf_token'));
         $mails->id_user = $request->user()->id;
         // dd($mails);
         $mails->save();
         $title = "Contact";
         $messageflash = "Email envoyé! Merci";
         return view('contact',compact('title','messageflash'));
    }
}
