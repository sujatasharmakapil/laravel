<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\BrowsershotController;
use App\Http\Controllers\helpController;
use App\Http\Controllers\helpingController;


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

Route::get('/insertion1', [helpingController::class,'insertion1']);
Route::post('/insertion1', [helpingController::class,'do_insertion1']);

Route::get('/showing1', [helpingController::class,'do_showing1']);
Route::post('/showing1', [helpingController::class,'do_showing1']);


Route::get('/insertion', [helpController::class,'insertion']);
Route::post('/insertion', [helpController::class,'do_insertion']);

Route::get('/showing', [helpController::class,'do_showing']);
Route::post('/showing', [helpController::class,'do_showing']);
  
Route::get('/add', [InfoController::class,'add1']);
Route::post('/add', [InfoController::class,'do_add1']);
Route::get('/get', [InfoController::class,'get1']);

Route::get('/insert', [InfoController::class,'insert']);
Route::post('/insert', [InfoController::class,'do_insert']);

Route::get('/get-data', [InfoController::class,'get_data']);
Route::post('/get-data', [InfoController::class,'do_get_data']);



Route::get('/contact', [InfoController::class,'contact']);

Route::post('/contact', [InfoController::class,'do_contact']);

Route::get('/profile', [InfoController::class,'profile']);

Route::delete('/profile', [InfoController::class, 'delete']);

Route::post('/profile', [InfoController::class,'update']);

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

// Route::get('/screenshot', [InfoController::class,'screenshot']);

Route::get('/test-screenshot', [BrowsershotController::class, 'screenshotGoogle']);


?>






