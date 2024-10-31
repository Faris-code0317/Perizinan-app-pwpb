<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\KelasController;
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


Route::middleware(['guest'])->group(function(){

    Route::get('/',[SesiController::class, 'index'])->name('login');
Route::post('/',[SesiController::class, 'login']);

});
Route::get('/home',function(){
    return redirect('/admin');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/koordinator',[AdminController::class,'koordinator'])->middleware(('userAkses:koordinator'));
    Route::get('/admin/operator',[AdminController::class,'operator'])->middleware(('userAkses:operator'));
    // Route::get('/admin/operatorcw',[AdminController::class,'operatorcw'])->middleware(('userAkses:operatorcw'));
    Route::get('/logout',[SesiController::class,'logout']);

});
Route::resource('admin/kelas', KelasController::class);
Route::get('admin/datakelas', [KelasController::class, 'index'])->name('data.kelas');


