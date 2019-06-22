<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function reg()
    {
    	//echo "registration";
    	return view("form");
    }
}
