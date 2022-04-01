<?php

// use App\Http\Controllers\BarangController;
use App\Http\Controllers\Manager\Crud\BarangController as CrudBarangController;
use App\Http\Controllers\Manager\Crud\MejaController as CrudMejaController;
use App\Http\Controllers\Manager\DashboardContoller as AdminDashboardContoller;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});
// Route::redirect('/','/login');
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('manajer/dashboard');
// Route::post();
// Route::put();
// Route::delete();
Route::name('manager.')->prefix('manager')->group(function(){
    Route::resource('dashboard',AdminDashboardContoller::class)->middleware(['auth','role:manager']);
    Route::resource('meja',CrudMejaController::class)->middleware(['auth','role:manager']);
    Route::resource('barang',CrudBarangController::class)->middleware(['auth','role:manager']);
});