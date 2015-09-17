<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('', function () {
	return redirect('home');
});


Route::group(['middleware' => 'auth'], function () {

	Route::group(['prefix' => 'sugestoes', 'as' => 'improvement.'], function () {
		Route::get('', ['as' => 'index', 'uses' => 'ImprovementController@index']);
		Route::get('excluidos', ['as' => 'onlyTrashed', 'uses' => 'ImprovementController@onlyTrashed']);
		Route::get('novo', ['as' => 'create', 'uses' => 'ImprovementController@create']);
		Route::post('inserir', ['as' => 'store', 'uses' => 'ImprovementController@store']);
		Route::get('editar/{id}', ['as' => 'edit', 'uses' => 'ImprovementController@edit']);
		Route::post('atualizar/{id}', ['as' => 'update', 'uses' => 'ImprovementController@update']);
		Route::get('excluir/{id}', ['as' => 'destroy', 'uses' => 'ImprovementController@destroy']);
		Route::get('restaurar/{id}', ['as' => 'restore', 'uses' => 'ImprovementController@restore']);
	});

	Route::group(['prefix' => 'portecliente', 'as' => 'customerSize.'], function () {
		Route::get('', ['as' => 'index', 'uses' => 'CustomerSizeController@index']);
		Route::get('excluidos', ['as' => 'onlyTrashed', 'uses' => 'CustomerSizeController@onlyTrashed']);
		Route::get('novo', ['as' => 'create', 'uses' => 'CustomerSizeController@create']);
		Route::post('inserir', ['as' => 'store', 'uses' => 'CustomerSizeController@store']);
		Route::get('editar/{id}', ['as' => 'edit', 'uses' => 'CustomerSizeController@edit']);
		Route::post('atualizar/{id}', ['as' => 'update', 'uses' => 'CustomerSizeController@update']);
		Route::get('excluir/{id}', ['as' => 'destroy', 'uses' => 'CustomerSizeController@destroy']);
		Route::get('restaurar/{id}', ['as' => 'restore', 'uses' => 'CustomerSizeController@restore']);
	});

	Route::group(['prefix' => 'importancia', 'as' => 'importance.'], function () {
		Route::get('', ['as' => 'index', 'uses' => 'ImportanceController@index']);
		Route::get('excluidos', ['as' => 'onlyTrashed', 'uses' => 'ImportanceController@onlyTrashed']);
		Route::get('novo', ['as' => 'create', 'uses' => 'ImportanceController@create']);
		Route::post('inserir', ['as' => 'store', 'uses' => 'ImportanceController@store']);
		Route::get('editar/{id}', ['as' => 'edit', 'uses' => 'ImportanceController@edit']);
		Route::post('atualizar/{id}', ['as' => 'update', 'uses' => 'ImportanceController@update']);
		Route::get('excluir/{id}', ['as' => 'destroy', 'uses' => 'ImportanceController@destroy']);
		Route::get('restaurar/{id}', ['as' => 'restore', 'uses' => 'ImportanceController@restore']);
	});

	Route::group(['prefix' => 'dificuldade', 'as' => 'difficulty.'], function () {
		Route::get('', ['as' => 'index', 'uses' => 'DifficultyController@index']);
		Route::get('excluidos', ['as' => 'onlyTrashed', 'uses' => 'DifficultyController@onlyTrashed']);
		Route::get('novo', ['as' => 'create', 'uses' => 'DifficultyController@create']);
		Route::post('inserir', ['as' => 'store', 'uses' => 'DifficultyController@store']);
		Route::get('editar/{id}', ['as' => 'edit', 'uses' => 'DifficultyController@edit']);
		Route::post('atualizar/{id}', ['as' => 'update', 'uses' => 'DifficultyController@update']);
		Route::get('excluir/{id}', ['as' => 'destroy', 'uses' => 'DifficultyController@destroy']);
		Route::get('restaurar/{id}', ['as' => 'restore', 'uses' => 'DifficultyController@restore']);
	});

});
