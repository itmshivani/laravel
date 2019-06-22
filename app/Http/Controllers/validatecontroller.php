<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\myform2;

class validatecontroller extends Controller
{
   public function myform()
   {
   	return view("form.myform");
   }

   public function submitmyform(Request $request)
   {
   	$this->validate($request,[
   		"name"=>"required",
   		"quantity"=>"required",
   		"description"=>"required"
   	],[
   		"name.required"=>"name should be filled",
   		"quantity.required"=>"quantity should be filled",
   		"description.min"=>"length should be more than 8"
   	]);
   
   print_r($request->all());
   }

   public function myform2()
   {
   	return view("form.myform2");
   }

   public function submitmyform2(myform2 $request)
   {
   	print_r($request->all());
   }
}
