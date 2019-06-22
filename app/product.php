<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class product extends Model
{

	//insert 2 method use
	protected $fillable=["name","quantity","description"]; 
   
}
