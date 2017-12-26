<?php

namespace App\Http\Controllers\admin;

use App\Model\Emails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactRequest;

class MailController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// retourne la liste des mails
    {
         $title = "Liste de mails";
         $maillist = Emails::all();
         // dd($maillist);
        return view('admin/mail_list',compact('title','maillist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormContactRequest $request)
    {  
        $mails = new Emails($request->except('csrf_token'));
        
        $mails->save();
        $messageflash = "Email envoyé! Merci";
        return view('contact',compact('messageflash'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mails  $mails
     * @return \Illuminate\Http\Response
     */
    public function show(Emails $id)//retourne un mail
    {
             $title = "Lecture de mails";
              $mail = Emails::find($id);
             
        return view('admin/mail_read',compact('title','mail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mails  $mails
     * @return \Illuminate\Http\Response
     */
    public function edit(Emails $mails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mails  $mails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emails $mails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mails  $mails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emails $id)
    {
       $id->delete();  
       $title = "Lecture de mails";    
       $messageflash = "Email supprimé!";
       $maillist = Emails::all();
        return view('admin/mail_list',compact('title','messageflash','maillist'));
    }
}
