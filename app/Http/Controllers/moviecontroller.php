<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;
use Validator;

class moviecontroller extends Controller
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
        return view("movie.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=validator::make($request->all(),[
              
              "name"=>"required",
              "quantity"=>"required",
              "description"=>"required"
        ],[
               "name.required"=>"name is needed",
               "quantity.required"=>"quantity is needed",
               "description.required"=>"description should be needed"



        ])->validate();

        $obj=new movie;
        $obj->name =$request->name;
        $obj->quantity=$request->quantity;
        $obj->description=$request->description;
       
        $is_saved=$obj->save();
        dd($obj);

        //if($is_saved){
            //session()->flash("studentmessage","student has been inserted");

             //return view("movie")        }

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
        //
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
        //
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
