<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itmcontroller extends Controller
{
    public function itm()
    {
    	//echo "itm";
    	return view(itm);
    }
}
