<?php

namespace App\Http\Controllers\admin;

use App\Model\Experiences;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ExperiencesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = "Edit Expériences";
         $experiences = Experiences::all();
        return view('admin/experiences',compact('title','experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Experiences $experiences)
    {
        $experiences = new Experiences($request->except('csrf_token'));
        
         $experiences->id_user = $request->user()->id;

         $fname = Storage::disk('upload_exp')->put('', $request->file_exp);
        $experiences->file_exp = $request->file_exp->getClientOriginalName();
        // sauvegarde bdd
        $experiences->save();
        $messageflash = "Données Expériences crée!";
        return view('admin/home',compact('messageflash'));
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
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function show(Experiences $experiences)
    {
        $title = "Edit Expériences";
        $exp = Experiences::all();
        return view('admin/edit_experiences',compact('title','exp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function edit(Experiences $id)
    {
              $title = "Edit Expériences";
              $experiences = Experiences::find($id);
        return view('admin/edit_experiences',compact('title','experiences'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experiences $experiences)
    {
         $experiences = new Experiences($request->except('csrf_token'));
        
         $experiences->id_user = $request->user()->id;
         $originalfname = $request->file_exp->getClientOriginalName();
         $fname = Storage::disk('upload_exp')->put('', $request->file_exp);
        $experiences->file_exp = $request->file_exp->getClientOriginalName();
        // sauvegarde bdd
        $experiences->save();
        $messageflash = "Données Expériences sauvegardées!";
        return view('admin/home',compact('messageflash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experiences $id)
    {
       $id->delete();    
       $messageflash = "Experience supprimée!";
       return view('admin/home',compact('messageflash'));
    }
}
