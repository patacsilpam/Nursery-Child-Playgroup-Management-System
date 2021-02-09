<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurseryController;
use App\Http\Controllers\SessionController;
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
//Route::get('createAccount',[NurseryController::class,'CreateAccount']);
//Route::get('/login',[NurseryController::class,'LoginNursery']);
Route::get('/index',[NurseryController::class,'Dashboard']);// display dashboard
Route::get('/register',[NurseryController::class,'Register']);//display register
Route::get('/information',[NurseryController::class,'Information']);//display information
Route::get('/parents',[NurseryController::class,'Parents']);//display parents
Route::post('/register',[NurseryController::class, 'insertData']);//insert data
Route::post('/addChild',[NurseryController::class,'AddChild']);
Route::get('/information{ChildID}',[NurseryController::class,'deleteDataNursery']);//delete table
Route::get('/edit',[NurseryController::class,'editChildView']);
Route::get('/edit{ChildID}',[NurseryController::class,'editDataNursery']);
Route::post('/edit{ChildID}',[NurseryController::class,'updateDataChildren']);
Route::get('/parents{ParentID}',[NurseryController::class,'deleteDataParents']);//delete parentsview
Route::get('/updateParents',[NurseryController::class,'editParentsView']);
Route::get('/updateParents{ParentID}',[NurseryController::class,'editDataParents']); //edit the value for parents
Route::post('/updateParents{ParentID}',[NurseryController::class,'updateDataParents']);//updating dataParents
Route::get('/viewChildrenInfo{ChildID}{ParentID}',[NurseryController::class,'viewChildren']);
Route::get('/search',[NurseryController::class,'Search']);
Route::get('/searchParents',[NurseryController::class,'SearchParents']);


Route::get('session',[SessionController::class,'Session']);
Route::post('session',[SessionController::class,'insertSessionData']);
Route::get('session',[SessionController::class,'displaySession']);
Route::get('session{sessionID}',[SessionController::class,'deleteSession']);
Route::get('updateSession',[SessionController::class,'editDisplaySessions']);
Route::get('updateSession{sessionID}',[SessionController::class,'editSession']);
Route::post('updateSession{sessionID}',[SessionController::class,'updateSession']);
//Route::get('/viewParentsInformation{ParentID}',[NurseryController::class,'viewParents']);

//Route::get('createAccount',[NurseryController::class,'createAccount']);
//Route::get('login',[LoginController::class,'Login']);


