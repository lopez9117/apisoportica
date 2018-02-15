<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'v1','middleware' => 'cors'], function(){

	//Route::get('/', 'ContentController@index')->name('index');

	//Route::post('/store', 'ContentController@store')->name('store');

	Route::get('/newsletter', 'NewsleterController@index');

	Route::get('/createnewsletter', 'NewsleterController@create');

	Route::put('/newsletter',['as' =>'newsletter','uses' => 'NewsleterController@store']);

	
});


Route::get('/contacto', ['as' =>'contacto','uses' => 'ContactController@index']);
	
Route::put('/contacto', 'ContactController@store');


