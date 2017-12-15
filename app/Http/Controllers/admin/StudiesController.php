<?php

namespace App\Http\Controllers\admin;

use App\studies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudiesController extends Controller
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
         $title = "Etudes";
        return view('admin/studies',compact('title'));
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
     * @param  \App\studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function show(studies $studies)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function edit(studies $studies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studies $studies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function destroy(studies $studies)
    {
        //
    }
}
