<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$todolist = TodoList::find(2);
	var_dump($todolist->name);
	//return View::make('hello');
});

Route::get('/todolists', function()
{
	$todolists = TodoList::all();
	foreach($todolists as $todolist)
		echo $todolist->name . "<br />";
});
