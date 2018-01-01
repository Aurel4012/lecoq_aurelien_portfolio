<?php

namespace App\Http\Controllers;
use App\Model\Jobs;
use App\Model\Experiences;
use App\Model\Social_network;
use App\Model\Who_i_am;
use App\Model\Studies;
use App\Model\Techno;
use App\Model\Emails;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class FrontHomeController extends Controller
{
   public function index(){
   	 $title    = "Aurélien Lecoq";
      $woiam   = Who_i_am::all();
      $studies = Studies::orderBy('begin_date_stud','desc')->get();
      $techno  = Techno::all();
      $sn      = Social_network::all();
      $jobs    = Jobs::orderBy('begin_date_job','desc')->get();
   	return view('welcome',compact('title','woiam','studies','techno','sn','jobs'));
   }
   public function portfolio(){
   	 $title = "Aurélien Lecoq";

$exp   = Experiences::all();


$response = Experiences::timeline_json($exp);//appel de la function qui genere le json depuis la bdd

   	return view('portfolio',compact('title','response'));
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
