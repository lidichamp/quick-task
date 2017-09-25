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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/project/', 'ProjectController@getview')->name('project');
    Route::get('/addproject/', 'ProjectController@storeProject')->name('addproject');
    Route::post('/addproject/', 'ProjectController@storeProject')->name('addproject');
    Route::get('/addtask/', 'TaskController@getAdd')->name('addtask');
    Route::get('/showtaskup/', 'TaskController@ShowProjectAscending')->name('showtaskup');
    Route::get('/showtaskdown/', 'TaskController@ShowProjectDescending')->name('showtaskdown');
    Route::post('/storetask/', 'TaskController@storeTask')->name('storetask');
    Route::post('/addtask/', 'TaskController@getAdd')->name('addtask');
    Route::get('/viewproject/', 'ProjectController@ShowProject')->name('viewproject');
    Route::get('/getproject{id}/', 'ProjectController@getProject')->name('getproject');
    Route::get('/complete{id}/', 'TaskController@complete')->name('complete');
    Route::get('/getprojectasc{id}/', 'ProjectController@getProjectascending')->name('getprojectasc');
    Route::get('/viewtask/', 'TaskController@ShowProject')->name('viewtask');
    Route::get('/editproject{id}/', 'ProjectController@editProject')->name('editproject');
    Route::get('/addupdate/{id}/', 'ProjectController@UpdateProject')->name('addupdate');
    Route::get('/deleteproject/{id}/', 'ProjectController@getDelete')->name('deleteproject');
    Route::get('/edittask{id}/', 'TaskController@edittask')->name('edittask');
    Route::get('/updatetask/{id}/', 'TaskController@Updatetask')->name('updatetask');
    Route::get('/viewmovetask{id}/', 'TaskController@viewmovetask')->name('viewmovetask');
    Route::get('/movetask/{id}/', 'TaskController@movetask')->name('movetask');
    Route::get('/deletetask/{id}/', 'TaskController@getDelete')->name('deletetask');
    Route::get('/notifications', 'TaskController@notifications');
   
    
});