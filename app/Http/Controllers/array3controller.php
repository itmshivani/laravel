<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class array3controller extends Controller
{
    public function array3()
    {
    	$data1=['vikas','shivani','infosys']

    	$info1="pninfosys";

    	return view('array3',array('data1' =>$data1, 'info1'=>$info1));
    }
}
