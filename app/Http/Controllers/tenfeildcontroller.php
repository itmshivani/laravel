<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\tenfeild;
use\Validator;

class tenfeildcontroller extends Controller
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
        return view("movie.tenfeild");
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
              
              "Username"=>"required",
              "Password"=>"required",
              "Email"=>"required",
              "Contact"=>"required",
              "College"=>"required",
              "Degree"=>"required",
              "Address"=>"required",
              "School"=>"required",
              "Hobby"=>"required",
              "City"=>"required"
              
        ],[
               "Username.required"=>"username is needed",
               "Password.required"=>"password is needed",
               "Email.required"=>"email should be needed",
               "Contact.required"=>"contact should be needed",
               "College.required"=>"college should be needed",
               "Degree.required"=>"degree should be needed",
               "Address.required"=>"address should be needed",
               "School.required"=>"school should be needed",
               "Hobby.required"=>"hobby should be needed",
               "City.required"=>"city should be needed",
               



        ])->validate();

        $obj=new tenfeild;
        $obj->Username =$request->Username;
        $obj->Password=$request->Password;
        $obj->Email=$request->Email;
        $obj->Contact=$request->Contact;
        $obj->College=$request->College;
        $obj->Degree=$request->Degree;
        $obj->Address=$request->Address;
        $obj->School=$request->School;
        $obj->Hobby=$request->Hobby;
        $obj->City=$request->City;
        
        $is_saved=$obj->save();
        dd($obj);
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
