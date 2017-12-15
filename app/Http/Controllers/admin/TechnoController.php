<?php

namespace App\Http\Controllers\admin;

use App\techno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnoController extends Controller
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
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function show(techno $techno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function edit(techno $techno)
    {
        $title = "Techno";
        return view('admin/techno',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, techno $techno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function destroy(techno $techno)
    {
        //
    }
}
