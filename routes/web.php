<?php

use App\Http\Controllers\backend\EducationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/admin', function () {
    return view('backend.pages.index');
});
Route::get('/admin/education', function () {
    return view('backend.pages.education');
});


Route::post('/admin/add-education',[EducationController::class,'add_education']);
Route::get('/get-educationsinfo',[EducationController::class,'get_educations']);
Route::get('/get-getdemo',[EducationController::class,'demoResponse']);



