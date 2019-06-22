<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conditioncontroller extends Controller
{
    public function aif()
    {
    	$name="pninfosys";
    	return view("condition.if",compact('name'));
    }

   public function aelse()
    {
    	$name="shivani";
    	return view("condition.aelse",compact('name'));
    }

    public function aelseif()
    {
    	$name="infosys";
    	return view("condition.aelseif",compact('name'));
    }

      public function aisset()
    {
    	$name="pninfosys";
    	return view("condition.aisset",compact('name'));
    }

    public function aempty()
    {
    	$name="pninfosys";
    	return view("condition.aempty",compact('name'));
    }

    public function aunless()
    {
    	$name=["pninfosys"];
        
    	return view("condition.aunless",compact('name'));
    }

    //loop

    public function bfor()
    {
    	$name="online web tutor";
    	$names=[];
    	return view("loop.for");
    }
    public function bforeach()
    {
    	$name="online web tutor";
    	$names=["vikas","jain","mohit"];
    	return view("loop.foreach",compact('name','names'));
    }
    public function bforelse()
    {
    	$name="online web tutor";
    	$names=["vikas","jain","mohit"];
    	$names=[];
    	return view("loop.forelse",compact('name','names'));

}

    	 public function bwhile()
    {
    	$name="online web tutor";
    	$names=[];
    	return view("loop.while",compact('name','names'));
    }

    public function loopindex()
    {
    	$name="online web tutor";
    	$names=["vikas","jain","mohit"];
    	return view("loop.loopindex",compact('name','names'));
    }

}
