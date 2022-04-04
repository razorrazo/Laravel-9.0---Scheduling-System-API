<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------|
| API Routes                                                               |
|--------------------------------------------------------------------------|
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|------------------------------------------------------------------------------------------------|
|                                                                                                |
|                                            STUDENT                                             |
|                                                                                                |
|------------------------------------------------------------------------------------------------|
|
|
|
|
*/
    //Student Routes
    //Get all Students
    Route::get('students', [StudentController::class,'index']);
    //Get student by id
    Route::get('students/{id}', [StudentController::class,'show']);
    //Create an Student
    Route::post('students', [StudentController::class,'store']);
    //Edit an Student
    Route::put('students/{id}', [StudentController::class,'update']);
    //Delete an student
    Route::delete('students/{id}', [StudentController::class,'destroy']);
    //Get all Students with classes
    Route::get('studentsclasses', [StudentController::class,'indexclasses']);
    //Filtered Students by classes sending id parameter
    Route::get('students_filter_by_classes/{id}', [StudentController::class,'filterclasses']);





/*
|------------------------------------------------------------------------------------------------|
|                                                                                                |
|                                            CLASS                                               |
|                                                                                                |
|------------------------------------------------------------------------------------------------|
|
|
|
|
*/
    //Classes Routes
    //Get all Classes
    Route::get('groups', [GroupController::class,'index']);
    //Get class by id
    Route::get('groups/{id}', [GroupController::class,'show']);
    //Create a Class
    Route::post('groups', [GroupController::class,'store']);
    //Edit a Class
    Route::put('groups/{id}', [GroupController::class,'update']);
    //Delete a Class
    Route::delete('groups/{id}', [GroupController::class,'destroy']);
    //Get all Groups with students
    Route::get('classestudents', [GroupController::class,'indexclasses']);
    //Filtered Classes
    //Filtered Students by classes sending id parameter
    Route::get('classes_filter_by_students/{id}', [GroupController::class,'filterclasses']);
