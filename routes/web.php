<?php

use App\Http\Controllers\Taskcontroller;
use Illuminate\Support\Facades\Route;
use App\http\controllers\Taskscontroller;


 Route::get('/', [Taskcontroller::class ,'index']);
 Route::post('/store',[Taskcontroller::class,'store']); 
 Route::delete('delete/{id}',[Taskcontroller::class,'delete']);
 Route::post('update/{id}',[Taskcontroller::class,'update']);    