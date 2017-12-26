<?php

namespace App\Http\Controllers\admin;

use App\Model\Studies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudiesController extends Controller
{
    

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
     * @param  \App\Model\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function show(Studies $studies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function edit(Studies $studies)
    {
        $title = "Etudes";
        return view('admin/studies',compact('title')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studies $studies)
    {
         $studies = new Studies($request->except('csrf_token'));
         $studies->id_user = $request->user()->id;
        $studies->save();
        $messageflash = "Données Etudes sauvegardées!";
        return view('admin/home',compact('messageflash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studies $studies)
    {
        //
    }
}
