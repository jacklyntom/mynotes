<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\videos;

use Illuminate\Http\Request;

class videoController extends Controller
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
         $videos =videos::all();
    

        return view('videocreate',['videoarray'=>$videos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= $request->input('name');
        $video_url= $request->input('video_url');
        DB::table('videos')->insert(
            ['name' => $name, 'video_url' => $video_url]
        
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
     $videos = \App\videos::find($id);
     return view("editvideo",['videoarray'=>$videos]);
        
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
        $videos = \App\videos::find($id);
        $name= $request->input('name');
        $video_url=$request->input('video_url');
        $videos->name=$name;
        $videos->video_url=$video_url;
        $videos->save();
      return  redirect("videos/create");

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
