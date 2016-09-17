<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('tasks');
});

Route::post('/tasks',function(Request $request){

});

Route::delete('/tasks/{id}',function($id){

});