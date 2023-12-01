<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\Backend\SocialServiceController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\PortfolioImageController;
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
//Route::get('/',function(){
//return view('construction');
//});
Auth::routes(['login'=>false,'home'=>false,'register'=>false]);
Route::get('/',[FrontendController::class,'frontendPage'])->name('frontend.home');
Route::get('/jamana_login',[\App\Http\Controllers\Auth\LoginController::class,'loginPage'])->name('backend.login');
Route::post('/jamana_login',[\App\Http\Controllers\Auth\LoginController::class,'adminLogin'])->name('backend.jamana_login');
Route::get('/jamana_register',[\App\Http\Controllers\Auth\RegisterController::class,'registerPage'])->name('backend.register');
Route::post('/jamana_register',[\App\Http\Controllers\Auth\RegisterController::class,'adminRegister'])->name('backend.jamana_register');
Route::get('/login', function () {
    abort(404);
});
Route::get('/register', function () {
    abort(404);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/jamana_home',function(){
    return view('home');
    })->name('backend.home');
    //setting route
    Route::get('backend/setting/trash', [SettingController::class, 'trash'])->name('backend.setting.trash');
    Route::delete('backend/setting/permanentDelete/{id}', [SettingController::class, 'permanentDelete'])->name('backend.setting.permanentDelete');
    Route::get('backend/setting/restore/{id}', [SettingController::class, 'restore'])->name('backend.setting.restore');
    Route::resource('backend/setting', SettingController::class)->names('backend.setting');
    //social_services route
    Route::get('backend/social_medias/trash', [SocialServiceController::class, 'trash'])->name('backend.social_medias.trash');
    Route::delete('backend/social_medias/permanentDelete/{id}', [SocialServiceController::class, 'permanentDelete'])->name('backend.social_medias.permanentDelete');
    Route::get('backend/social_medias/restore/{id}', [SocialServiceController::class, 'restore'])->name('backend.social_medias.restore');
    Route::resource('backend/social_medias', SocialServiceController::class)->names('backend.social_medias');
    //teams route
    Route::get('backend/teams/trash', [TeamController::class, 'trash'])->name('backend.teams.trash');
    Route::delete('backend/teams/permanentDelete/{id}', [TeamController::class, 'permanentDelete'])->name('backend.teams.permanentDelete');
    Route::get('backend/teams/restore/{id}', [TeamController::class, 'restore'])->name('backend.teams.restore');
    Route::resource('backend/teams', TeamController::class)->names('backend.teams');
    //portfolio images
    Route::get('backend/portfolio_images/trash', [PortfolioImageController::class, 'trash'])->name('backend.portfolio_images.trash');
    Route::delete('backend/portfolio_images/permanentDelete/{id}', [PortfolioImageController::class, 'permanentDelete'])->name('backend.portfolio_images.permanentDelete');
    Route::get('backend/portfolio_images/restore/{id}', [PortfolioImageController::class, 'restore'])->name('backend.portfolio_images.restore');
    Route::resource('backend/portfolio_images', PortfolioImageController::class)->names('backend.portfolio_images');
});
