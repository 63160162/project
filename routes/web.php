<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
//Route::resource('home',HomeController::class);
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('home.create');
Route::post('home/create', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::get ('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('home/{id}/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('home/{id}/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('home/{id}/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');