<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validate2controller extends Controller
{
   public function myform3()
   {
   	return view("form.myform3");
   }

   public function submitmyform3(Request $request)
   {
   	$this->validate($request,[
   		"name"=>"required",
   		"email"=>"required",
   		"place"=>"required"
   	],[
   		"name.required"=>"name should be filled",
   		"email.required"=>"email should be filled",
   		"place.min"=>"length should be more than 60"
   	]);
       print_r($request->all());
    }
}


