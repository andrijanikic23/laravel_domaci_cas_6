<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $marks = \App\Models\MarksModel::all();
    return view("welcome", compact('marks'));
});

Route::view("/add-mark", "add_grade");

Route::post("/add-user-grade", [\App\Http\Controllers\MarksController::class, 'add_grade']);