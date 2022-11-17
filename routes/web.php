<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DownloadsController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('mydashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware('auth','role:admin')->group(function(){
    Route::get('/admin',function(){
        return view('admin.dashboard_admin');
    });
});

Route::get('/download',[DownloadsController::class,'getDownload']);

Route::get('/cours',[CourseController::class,'index']);

Route::get('/categories',[CategoryController::class,'index']);

Route::get('/categorie/add',[CategoryController::class,'add']);

Route::post('/categorie/add',[CategoryController::class,'store']);

Route::get('/categories/all',[CategoryController::class,'all']);

Route::get('/categorie/delete/{id}',[CategoryController::class,'delete'])->name('categoriedelete');

Route::post('/cours/add',[CourseController::class,'store']);

Route::get('/cours/add',[CourseController::class,'add']);

Route::get('/cours/all',[CourseController::class,'showAll']);

Route::get('/cours/delete/{id}',[CourseController::class,'delete'])->name('coursdelete');

Route::get('/user/all',[UserController::class,'showAll']);

Route::post('/user/delete/{id}',[UserController::class,'delete'])->name('userdelete');