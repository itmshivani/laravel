<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class array1controller extends Controller
{
    public function usingarray()
    {
    	//echo "itm";
    	//return view('itm');

    	$data1=['vikas','shivani','rahul'];

    	$name="pninfosys";
    	return view('usingarray',array('data1' =>$data1, 'name'=>$name));
    

    //compact array
    
    //return view('usingarray',compact('data1','name'));


    	//with
    	//return view('usingarray')->with(['data1'=>$data1,'name'=>$name]);

    	//withname
    	//return view('usingarray')->withdata1($data1)->withname($name);
  }
}
