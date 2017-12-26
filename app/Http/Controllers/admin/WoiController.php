<?php

namespace App\Http\Controllers\admin;

use App\Model\Who_i_am;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Who_I_AmFormRequest;
class WoiController extends Controller
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
     * @param  \App\Model\Who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function show(Who_i_am $who_i_am)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $who_i_am)
    {
        $title = "Who i am";
        return view('admin/who_i_am',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function update(Who_I_AmFormRequest $request, Who_i_am $who_i_am)
    {
         $who_i_am = new Who_i_am($request->except('csrf_token'));
         $who_i_am->id_user = $request->user()->id;
         // dd($who_i_am->id_user);
        // sauvegarde bdd
        $who_i_am->save();
        $messageflash = "Données Qui suis Je? sauvegardées!";
        return view('admin/home',compact('messageflash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Who_i_am  $who_i_am
     * @return \Illuminate\Http\Response
     */
    public function destroy(Who_i_am $who_i_am)
    {
        //
    }
}
