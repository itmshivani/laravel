<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fiftheen;
use Validator;

class fiftheencontroller extends Controller
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
        return view("movie.fiftheen");
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
              "City"=>"required",
              "Company"=>"required",
              "Fathername"=>"required",
              "Mothername"=>"required",
              "Pincode"=>"required",
              "State"=>"required"
              
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
               "Company.required"=>"company should be needed",
               "Fathername.required"=>"Fathername should be needed",
               "Mothername.required"=>"Mothername should be needed",
               "Pincode.required"=>"Pincode should be needed",
               "State.required"=>"State should be needed",
               



        ])->validate();

        $obj=new fiftheen;
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
        $obj->Company=$request->Company;
        $obj->Fathername=$request->Fathername;
        $obj->Mothername=$request->Mothername;
        $obj->Pincode=$request->Pincode;
        $obj->State=$request->State;
        
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
