<?php

namespace App\Http\Controllers\admin;

use App\Model\Techno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TechnoController extends Controller
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
    public function create(Request $request, Techno $techno)
    {
         $techno = new Techno($request->except('csrf_token'));
        
         $techno->id_user = $request->user()->id;
         // dd('test');
         $fname = Storage::disk('upload_tech')->put('', $request->logo_tech);
        // $fname = Storage::putFileAs('jsstandard', new File('/uploads'), $request->logo_tech->getClientOriginalName());

        $techno->logo_tech = $request->logo_tech->getClientOriginalName();
        // sauvegarde bdd
        $techno->save();
        $messageflash = "Données Techno crées!";
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
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function show(Techno $techno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function edit(Techno $techno)
    {
        $title = "Techno";
        $techno = Techno::all();
        return view('admin/techno',compact('title','techno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Techno $techno)
    {
         $techno = new Techno($request->except('csrf_token'));
        
         $techno->id_user = $request->user()->id;
         // $file = $request->logo_tech->getClientOriginalName();
         $fname = Storage::disk('upload_tech')->put('', $request->logo_tech);

         $techno->logo_tech = $fname;
         // $techno->logo_tech = $request->logo_tech->getClientOriginalName();

         

  
        // sauvegarde bdd
        $techno->save();
        $messageflash = "Données Techno sauvegardées!";
        return view('admin/home',compact('messageflash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\techno  $techno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Techno $id)
    {
       $id->delete();      
       $messageflash = "Données technologies supprimées!";
        return view('admin/home',compact('messageflash'));
    }
}
