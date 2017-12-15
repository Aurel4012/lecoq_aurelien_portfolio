<?php

namespace App\Http\Controllers\admin;

use App\experiences;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperiencesController extends Controller
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
    public function index()
    {
         $title = "Edit Expériences";
        return view('admin/experiences',compact('title'));
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
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function show(experiences $experiences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function edit(experiences $experiences)
    {
              $title = "Edit Expériences";
        return view('admin/edit_experiences',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, experiences $experiences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(experiences $experiences)
    {
        //
    }
}
