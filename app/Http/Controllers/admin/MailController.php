<?php

namespace App\Http\Controllers\admin;

use App\mails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// retourne la liste des mails
    {
         $title = "Liste de mails";
        return view('admin/mail_list',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(mails $mails)//retourne un mail
    {
             $title = "Lecture de mails";
        return view('admin/mail_read',compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mails  $mails
     * @return \Illuminate\Http\Response
     */
    public function edit(mails $mails)
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
    public function update(Request $request, mails $mails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mails  $mails
     * @return \Illuminate\Http\Response
     */
    public function destroy(mails $mails)
    {
        //
    }
}
