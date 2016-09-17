<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('tasks');
});

Route::post('/tasks',function(Request $request){
	$validator = Validator::make($request->all(),[
		'name' => 'required|max:255',
		]);

	if ($validator->fails()){
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$task = new Task;
	$task->name = $request->name;
	$task->save();

	return redirect('/');
});

Route::delete('/tasks/{id}',function($id){

});