<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Downloadcontroller extends Controller
{
    public function downfun(){

    	$downloads=DB::table('cruds')->get();
    	return view('download.viewfile',compact('downloads'));

    }
}
