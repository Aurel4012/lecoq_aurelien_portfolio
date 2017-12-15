<?php

namespace App\Http\Controllers\admin;

use App\who_i_am;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WoiController extends Controller
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
     * @param  \App\who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function show(who_i_am $who_i_am)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function edit(who_i_am $who_i_am)
    {
        $title = "Who i am";
        return view('admin/who_i_am',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, who_i_am $who_i_am)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function destroy(who_i_am $who_i_am)
    {
        //
    }
}
