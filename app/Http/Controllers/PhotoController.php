<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\photos;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
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
        $photos =photos::all();
        // return view('create',['photoarray'=>$photos]);

            return view('photocreate',['photoarray'=>$photos]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    
        $note_name = $request->input('note_name');
        $file = $request->file('photo');
        $path = $request->photo->store('pics','public');
        DB::table('photos')->insert(
            ['note_name' => $note_name, 'photo_url' => $path]
        
        ); 
        return redirect("home");


       
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $photos = \App\photos::find($id);
         return view("editphoto",['photo'=>$photos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photos = \App\photos::find($id);
        $note_name= $request->input('note_name');
        $path = $request->photo->store('pics','public');
        $photos->note_name=$note_name;
        $photos->photo_url=$path;
        $photos->save();
      return  redirect("photos/create");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
