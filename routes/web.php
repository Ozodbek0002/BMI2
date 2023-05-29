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


//User
Route::get('/', [RouteController::class,'main'])->name('main'); // asosiy sahifa
Route::get('/mahallalar', [RouteController::class,'mahallalar'])->name('mahallalar'); // mahallalar ro'yxati
Route::get('/passport/{id}', [RouteController::class,'passport'])->name('passport'); // mahallaning passporti
Route::get('/report/{id}', [RouteController::class,'report'])->name('report'); // mahallaning hisoboti




//Admin
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
Route::post('SearchInformation',[SearchController::class, 'SearchInformation'])->name('SearchInformation');
Route::post('SearchEmployments',[SearchController::class, 'SearchEmployments'])->name('SearchEmployments');
Route::post('SearchStatuses',[SearchController::class, 'SearchStatuses'])->name('SearchStatuses');
Route::post('SearchIndicators',[SearchController::class, 'SearchIndicators'])->name('SearchIndicators');
Route::post('SearchEnvironments',[SearchController::class, 'SearchEnvironments'])->name('SearchEnvironments');


});




require __DIR__.'/auth.php';
