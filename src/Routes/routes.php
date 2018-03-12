<?php

/*
|--------------------------------------------------------------------------
| Routes for Forum package
|--------------------------------------------------------------------------
*/

Route::get('forum', 'Vikingdesign\Forum\Controllers\ForumController@index')->name('forum');

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});