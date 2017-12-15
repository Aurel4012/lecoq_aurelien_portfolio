<?php

namespace App\Http\Controllers\admin;

use App\social_network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
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
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function show(social_network $social_network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function edit(social_network $social_network)
    {
         $title = "Réseaux Sociaux";
        return view('admin/social',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, social_network $social_network)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function destroy(social_network $social_network)
    {
        //
    }
}
