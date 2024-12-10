<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

Route::get('/', [todoController::class,'index' ])->name("home");
Route::get('/add', function () {
    return view('Add_todo');
})->name("addtodo");
// name  is used for route name
Route::get('/edit/{id}', [todoController::class,"edit" ])->name("todoEdit");
// delete todo
Route::get('/delete/{id}',[todoController::class,'delete'])->name("todoDelete");

//make route to send data when addtodo
Route::post('/add',[todoController::class,'store'])->name("todoAdd");

// UPDATE Data
Route::post('/update',[todoController::class,'update'])->name("todoUpdate");
