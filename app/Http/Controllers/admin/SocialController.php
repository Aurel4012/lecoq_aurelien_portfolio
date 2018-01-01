<?php

namespace App\Http\Controllers\admin;

use App\Model\Social_network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    

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
    public function create(Request $request, Social_network $social_network)
    {
         $social_network = new Social_network($request->except('csrf_token'));
        
         $social_network->id_user = $request->user()->id;

         $fname = Storage::disk('upload_sn')->put('', $request->logo_sn);
        $social_network->logo_sn = $request->logo_sn->getClientOriginalName();
        // sauvegarde bdd
        $social_network->save();
        $messageflash = "Données social_network crées!";
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
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function show(Social_network $social_network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function edit(Social_network $social_network)
    {
         $title = "Réseaux Sociaux";
         $sn = Social_network::all();
        return view('admin/social',compact('title','sn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social_network $social_network)
    {
         $social_network = new Social_network($request->except('csrf_token'));
        
         $social_network->id_user = $request->user()->id;
         $fname = Storage::disk('upload_sn')->put('', $request->logo_sn);
        // $social_network->logo_sn = $request->logo_sn->getClientOriginalName();

        // sauvegarde bdd
        $social_network->save();
        $messageflash = "Données social_network sauvegardées!";
        return view('admin/home',compact('messageflash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\social_network  $social_network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social_network $id)
    {
        
   
        $id->delete();      
       $messageflash = "Données social_network supprimées!";
        return view('admin/home',compact('messageflash'));
    }
}
