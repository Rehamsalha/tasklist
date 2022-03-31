<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function(){
$name = 'Mohammed';
$age = 25;
//$tasks=[
    //'task 1',
    //'task 2',
    //'task 3'
//];

$tasks= [
'1'=>'Task1',
'2' =>'Task2',
'3' => 'Task3'
];






//return view('about', [
  //  'name' => $name,
    //'age' => $age

//]);

//return view ('about') ->with('name' ,$name) ->with('age', $age);
return view ('about', compact('tasks'));
});

Route::get('/task/{id}', function($id){
    $tasks= [
        '1'=>'Task1',
        '2' =>'Task2',
        '3' => 'Task3'
        ];
        $task = $tasks[$id];   
        return view('task', compact('task'));
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::post('/contact', function () {

    $name =$_POST['name'];
    return view('contact_us', compact('name'));
});

Route::get('/reham', function () {
    return view('rehamss');
});
Route::post('/reham', function () {
    $name =$_POST['name'];
    return view('contact_us', compact('name'));
});