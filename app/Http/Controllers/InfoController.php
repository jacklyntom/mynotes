<?php

namespace App\Http\Controllers;
use App\infos;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
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
      $infos =infos::all();
        return view('create',['infoarray'=>$infos]);
        
     return view('create');
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
        $content=$request->input('content');
     
        DB::table('infos')->insert(
            ['name' => $name, 'content' => $content]
        
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
        $infos = \App\Infos::find($id);

        return view("editinfo",['infoarray'=>$infos]);
        
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
        $infos = \App\infos::find($id);
        $name= $request->input('name');
        $content= $request->input('content');
        $infos->name=$name;
        $infos->content=$content;
        $infos->save();
      return  redirect("home");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $infos =infos::find($id);
    
        $infos->delete();
        return  redirect("home");
    }
}
