<?php use Illuminate\Http\Request;use Illuminate\Support\Facades\Route;Route::group(['prefix'=>'auth'],function(){Route::post('/registro','AuthController@registro');Route::post('/login','AuthController@login');Route::post('/cambiar','AuthController@cambiar');Route::post('/establecer','AuthController@establecer');Route::post('/datos','AuthController@datos');Route::group(['middleware'=>'auth:api'],function(){Route::get('user','AuthController@user');});});