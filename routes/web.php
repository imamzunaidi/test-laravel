<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataInventoriController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);

Route::get('/home', function(){
    return redirect('/admin/home');
});
Route::get('/logout', [SesiController::class, 'logout']);
Route::get('/admin/home',[HomeController::class, 'index']);
Route::get('/admin/user',[HomeController::class, 'user']);
Route::get('/admin/user',[HomeController::class, 'getUser'])->name('user.getuser');
Route::get('/user',[UserController::class, 'index'])->name('user.index');
Route::get('/admin/contact',[ContactController::class, 'index']);
Route::get('/admin/profile',[profileController::class, 'index']);
Route::get('/admin/datacpu',[DatacpuController::class, 'index']);

Route::get('/admin.index',[DataInventoriController::class,'index']);
Route::get('/admin.create',[DataInventoriController::class, 'create']);
Route::post('index,store',[DataInventoriController::class, 'store']) -> name('/admin.index');
Route::get('/delete/{id}',[MahasiswaController::class, 'destroy']) -> name('delete-index');
Route::get('/edit/{id}',[MahasiswaController::class, 'edit']) -> name('edit');
Route::post('/update/{id}',[MahasiswaController::class, 'update']) -> name('update-edit');
