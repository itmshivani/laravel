<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; //model name

class productcontroller extends Controller
{
	public function insertorm()
	{
		//echo"orm";
		$product=new product();//model ka object bnana hota h
		$product->name="demo product2";
		$product->quantity=15;
		$product->description="this is my sample";
		//$product->save();
		$data=$product->save(); //save method table

		//print_r($data); //return value
		//echo"<pre>";
		//print_r($product); //return id
		print_r($product['id']); //get array
		exit();
	}

	public function insertorm2()
	{
		//echo"vikas";
		//fillable use
		$product=new product([

		"name"=>"demo productn 5",
		"quantity"=>20,
		"description"=>"hwlleo"

	]);

$product->save();

// $product =product::create([

// "name"=>"demo productn 5",
// "quantity"=>20,
//"description"=>"hwlleo"

//]);
	}

    
}
