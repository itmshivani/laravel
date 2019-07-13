<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;
use Validator;

class CController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = crud::orderBy("id","desc")->get();
        return view('layouts.table',compact("cruds"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// print_r($request->file("image"));
        $file=$request->file("image");
        // echo "File Name:".$file->getClientOriginalName()."<br/>";
        // echo "File extension:".$file->getClientOriginalExtension()."<br/>";
        // echo "File real path:".$file->getRealPath()."<br/>";
        // echo "File size:".$file->getSize()."<br/>";
        // echo "File Mime Type:".$file->getMimeType();
        // die;

        if($request->hasFile("image")){
            $file=$request->file("image");
            $file->move("upload/",$file->getClientOriginalName());
        }



 $data=Validator::make($request->all(),["name"=>"required|max:255","email"=>"required|max:255|unique:cruds|email"],["name.required"=>"name is needed","email.required"=>"email is needed","email.email"=>"Email should be valid"])->Validate();


         $obj=new crud();

          $obj->name = $request->name;
           $obj->address = $request->address;
            $obj->email = $request->email;
              $obj->phone = $request->phone;
              $obj->image = $file->getClientOriginalName();

             $is_saved = $obj->save();

            if($is_saved){
                session()->flash("Message","Student has been Inserted");
            }

            return redirect("crud/create");
             // $cruds = crud::orderBy("id","desc")->get();
             // return view('layouts.table',compact("cruds"));
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

       
        $crud= crud::find($id);
        return view("layouts.edit",compact("crud"));
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
        $obj = crud::find($id);
        $obj->name = $request->name;
           $obj->address = $request->address;
            $obj->email = $request->email;
              $obj->phone = $request->phone;

              $is_saved = $obj->save();

            if($is_saved){
                session()->flash("Message","Student has been Updated");
            }
            return redirect("crud/{$obj->id}/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $obj = crud::find($id);
         $is_deleted = $obj->delete();

         if($is_deleted){
                session()->flash("Message","Student Record has been Deleted");
            }
            return redirect("crud");

    }
}
