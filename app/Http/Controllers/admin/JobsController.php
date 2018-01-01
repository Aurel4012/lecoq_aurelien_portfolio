<?php

namespace App\Http\Controllers\admin;

use App\Model\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Model\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
          $title = "Emplois";
        $jobs = Jobs::all();
        return view('admin/jobs',compact('title','jobs')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
       $job = new Jobs($request->except('csrf_token'));
         $job->id_user = $request->user()->id;
        $job->save();
        $messageflash = "Données emplois sauvegardées!";
        return view('admin/home',compact('messageflash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $id)
    {
        $id->delete();    
       $messageflash = "Job supprimé!";
       return view('admin/home',compact('messageflash'));
    }
}
