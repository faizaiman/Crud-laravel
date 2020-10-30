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

Route::get('/student','StudentController@index');
Route::get('/student/add','StudentController@add');
Route::post('/student/create','StudentController@create');
Route::get('/student/{id}/edit','StudentController@edit');
Route::post('/student/{id}/update','studentController@update');
Route::get('/student/{id}/delete','studentController@delete');



Route::get('/course','CourseController@index');
Route::get('/course/add','CourseController@add');
Route::post('/course/create','CourseController@create');
Route::get('/course/{id}/edit','CourseController@edit');
Route::post('/course/{id}/update','CourseController@update');
Route::get('/course/{id}/delete','CourseController@delete');


Route::get('/mark','MarkController@index');
Route::get('/mark/add','MarkController@add');
Route::post('/mark/create','MarkController@create');
Route::get('/mark/{id}/edit','MarkController@edit');
Route::post('/mark/{id}/update','MarkController@update');
Route::get('/mark/{id}/delete','MarkController@delete');
Route::get('/mark/search','MarkController@search');

Route::get('findCourse','MarkController@findCourse');
Route::get('findmark','MarkController@findmark');
