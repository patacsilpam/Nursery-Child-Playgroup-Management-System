<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nurseryController;
use App\Http\Controllers\ImageController;
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

Route::get('/dashboard',[nurseryController::class,'dashboard']);
Route::get('/laravelController',[ImageController::class,'laravelController']);







/*
Route::get('/', function () {
    return view('teamSrp/home');
});
Route::get('/login', function () {
    return view('teamSrp/login');
});
Route::get('/register', function () {
    return view('teamSrp/register');
});
Route::get('/contact', function () {
    return view('teamSrp/contact');
});
Route::get('/about', function () {
    return view('teamSrp/about');
});
//weppage team srp
Route::get('/home', function () {
    return view('WebPage-TeamSrp/home');
});
Route::get('/contact', function () {
    return view('WebPage-TeamSrp/contact');
});
Route::get('/about', function () {
    return view('WebPage-TeamSrp/about');
});
Route::get('/login', function () {
    return view('WebPage-TeamSrp/login');
});
Route::get('/register', function () {
    return view('WebPage-TeamSrp/register');
});
Route::get('/output1/{id}{k}', function ($id,$k){
	$id = 1;
	$k = 0;
	$text = array("Happy", "New", "Year");
	for($i=0; $i<=$id; $i++){
		echo $text [$i];
		echo " ";
		for ($x=2; $x>=$k  ; $x--) { 
			echo $text [$x];
			echo " ";
		}
	}
});

Route::get('/data/{fname?}{lname?}{conNumber?}{gender?}{motto?}', function ($fname ="Pamela",$lname ="Patacsil",$conNumber ="09174371664",$gender ="Female",$motto ="Sorrow is better than laughter: for by the sadness of the countenance the heart is made better. Ecclesiates 7:3 KJV "){
	return view ('data', ['Fname' => $fname,'Lname' => $lname, 'ConNumber' => $conNumber, 'Gender' => $gender,'Motto' => $motto]);
});
*/
/*
Route::get('/index', function(){
	return view ('Nursery/index');
});
Route::get('/register', function(){
	return view ('Nursery/register');
});*/
