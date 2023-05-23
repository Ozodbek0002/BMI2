<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RouteController,
    UserController,
    SearchController,
    AdminController,
};



Route::get('/', [RouteController::class,'main'])->name('main');
Route::get('/mahallalar', [RouteController::class,'mahallalar'])->name('mahallalar');

//Route::get('/dashboard', function () {
//    return view('admin.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
Route::get('/', [AdminController::class,'dashboard'])->name('dashboard');
Route::resource('users', UserController::class)->name('index', 'users');


Route::post('SearchUsers',[SearchController::class, 'SearchUsers'])->name('SearchUsers');


});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
