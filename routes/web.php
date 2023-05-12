<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["as"=>"mission.","prefix"=>"Missions"],function(){
   Route::get("/",[\App\Http\Controllers\MissionController::class,"Index"])->name("list"); // Missions.list
   Route::get("/Add",[\App\Http\Controllers\MissionController::class,"Add"])->name("Add"); // Missions.list
   Route::get("/Details/{id}",[\App\Http\Controllers\MissionController::class,"Details"])->name("details"); // Missions.list
   Route::post("/Store",[\App\Http\Controllers\MissionController::class,"Store"])->name("store"); // Missions.list
});

Route::group(["as"=>"Constat.","prefix"=>"Constat"],function() {
    Route::post("/Store/{id}",[\App\Http\Controllers\ConstatController::class,"Add"])->name("Add"); // Missions.list
});