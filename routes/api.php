<?php

use App\Http\Controllers\ApiContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::GET('/kechuri',[ApiContoller::class,'getListening']);

Route::GET('/speaking/{level}',[ApiContoller::class,'getSpeaking']);
Route::GET('/writing/{level}',[ApiContoller::class,'getWriting']);
Route::GET('/reading/{level}',[ApiContoller::class,'getReading']);
//Route::GET('/writing',[ApiContoller::class,'getWriting']);

Route::GET('/employee',[ApiContoller::class,'getEmployee']);
Route::POST('/speakingpost',[ApiContoller::class,'insertQuestion']);
