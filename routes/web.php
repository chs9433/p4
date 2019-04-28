<?php

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

Route::get('/', 'AppController@login');

Route::get('/form/create/project', 'AppController@create');
Route::get('/form/load/project', 'AppController@load');
Route::get('/form/load/pm-tools', 'AppController@loadPMTools');
Route::post('/app/action/create', 'AppController@processProjectCreationRequest');
Route::post('/process/form/login', 'AppController@processFormLogin');
