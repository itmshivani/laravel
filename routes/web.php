<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('itm','array1controller@usingarray');
//Route::get('shivani','array1controller@usingarray');
//Route::get('shivani','conditioncontroller@aif');
//Route::get('shivani','conditioncontroller@aelse');
//Route::get('shivani','conditioncontroller@aelseif');
//Route::get('shivani','conditioncontroller@aisset');
//Route::get('shivani','conditioncontroller@aempty');
//Route::get('shivani','conditioncontroller@aunless');
//Route::get('shivani','conditioncontroller@loopindex');
//Route::get('shivani','conditioncontroller@bfor');
//Route::get('shivani','conditioncontroller@bforeach');
//Route::get('shivani','conditioncontroller@bforelse');
//Route::get('shivani','conditioncontroller@bwhile')
//Route::get('itm','infosyscontroller@info');
//Route::get('reg' ,'registrationcontroller@reg');
//Route::get('shivani','array3controller@array3');
//Route::get('shivani','dbcontroller@insert');
//Route::get('shiva','dbcontroller@showdata');


//validate
//Route::get('shiv','productcontroller@insertorm');
//Route::get('shiv','productcontroller@insertorm2');
//Route::get('shiv','validatecontroller@myform');
//Route::post('submitmyform','validatecontroller@submitmyform');
//Route::get('shivani','validatecontroller@myform2');
//Route::post('submitmyform2','validatecontroller@submitmyform2');
//Route::get('infosys','validate2controller@myform3');
//Route::post('submitmyform3','validate2controller@submitmyform3');

//resouce
//Route::resource("movie","moviecontroller");

Route::resource("clip","clipcontroller");