<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dbcontroller extends Controller
{
    public function insert()
    {
    	$data= DB::table('child')->insert(['name'=>'shivani','place'=>'gwl','address'=>'ind','roll'=>1234,'pin'=>12345]);
    	echo $data;
    }

    public function showdata()
    {
    	//$data=DB::table('child')->get();
    	//echo $data;

    	//$data=DB::table('child')->orderby('id','desc')->get();
    	//echo $data;

    	//$data=DB::table('child')->where(['id'=>3])->get();
    	//echo $data;

    	//$data=DB::table('child')->where(['id'=>3])->first();
    	//print_r($data);

    	//echo $data=DB::table('child')->where(['id'=>3])->delete();
    	
        echo $data=DB::table('child')->where(['id'=>4])->update(['name'=>'shivam','place'=>'india','address'=>'i','roll'=>123,'pin'=>1233]);

        echo $data=DB::table('child')->count();
                    
        echo $data=DB::table('child')->pluck('name');

        $data=DB::table('child')->select('name','place')->get();
        print_r($data);


    }
}
