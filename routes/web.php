<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RouteController,
    UserController,
    SearchController,
    AdminController,
    VillageController,
    MahallaController,
    InformationsController,
    IndicatorsController,
    EmploymentController,
    SocialStatusController,
    EnvironmentController,

};



Route::get('/', [RouteController::class,'main'])->name('main');
Route::get('/mahallalar', [RouteController::class,'mahallalar'])->name('mahallalar');


Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
Route::get('/', [AdminController::class,'dashboard'])->name('dashboard');
Route::resource('mahallas', MahallaController::class)->name('index', 'mahallas');
Route::resource('users', UserController::class)->name('index', 'users');
Route::resource('informations', InformationsController::class)->name('index', 'informations');
Route::resource('employments', EmploymentController::class)->name('index', 'employments');
Route::resource('statuses', SocialStatusController::class)->name('index', 'statuses');
Route::resource('indicators', IndicatorsController::class)->name('index', 'indicators');
Route::resource('environments', EnvironmentController::class)->name('index', 'environments');


Route::post('SearchUsers',[SearchController::class, 'SearchUsers'])->name('SearchUsers');
Route::post('SearchMahallas',[SearchController::class, 'SearchMahallas'])->name('SearchMahallas');


});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
