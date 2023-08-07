<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ESendController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\LavelChartController;
use App\Http\Controllers\Admin\LevelChartController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RewardController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderImageController;
use App\Http\Controllers\Admin\UploadLogoController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('admin/login', [HomeController::class, 'loginform']);
Route::post('adminlogincheck', [HomeController::class, 'adminlogin_check'])->name('admin.login.check');
Route::post('userlogincheck', [HomeController::class, 'userlogin_check'])->name('user.login.check');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin/login', [HomeController::class, 'loginform']);

Route::get('/', function () {
    return view('welcome');
});
Route::post('/user_register', [App\Http\Controllers\usersController::class, 'register'])->name('user.register');
Route::get('/thankyou', [App\Http\Controllers\usersController::class, 'thankyou'])->name('register.thankyou');
Route::get('/check_sponser', [App\Http\Controllers\usersController::class, 'check_sponser'])->name('checkSp');


Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\usersController::class, 'profile'])->name('user.profile');
    Route::get('/edit_profile', [App\Http\Controllers\usersController::class, 'edit_profile'])->name('user.edit_profile');
    Route::get('/change_pass', [App\Http\Controllers\usersController::class, 'password'])->name('user.password');
    Route::get('/team_list', [App\Http\Controllers\usersController::class, 'team_list'])->name('user.team_list');
    Route::get('/direct_list', [App\Http\Controllers\usersController::class, 'direct_list'])->name('user.direct_list');
    Route::get('/invest', [App\Http\Controllers\usersController::class, 'invest'])->name('user.invest');
    Route::get('/invest_details', [App\Http\Controllers\usersController::class, 'invest_details'])->name('user.invest_details');
    Route::get('/tickets', [App\Http\Controllers\usersController::class, 'tickets'])->name('user.tickets');
    Route::get('/create_ticket', [App\Http\Controllers\usersController::class, 'create_ticket'])->name('user.create_ticket');
    Route::get('/direct_bonus', [App\Http\Controllers\usersController::class, 'direct_bonus'])->name('user.direct_bonus');
    Route::get('/wallet_details', [App\Http\Controllers\usersController::class, 'wallet_details'])->name('user.wallet_details');
    Route::get('/transactions', [App\Http\Controllers\usersController::class, 'transactions'])->name('user.transactions');
    Route::get('/withdraw_details', [App\Http\Controllers\usersController::class, 'withdraw_details'])->name('user.withdraw_details');

    Route::prefix('admin')->middleware('is_admin')->group(function () {
        Route::resource('home', AdminHomeController::class);
        Route::resource('users', UserController::class);
        Route::resource('reward', RewardController::class);
        Route::resource('e-send', ESendController::class);
        Route::resource('support', SupportController::class);
        Route::resource('change-password', ChangePasswordController::class);
        Route::resource('product', ProductController::class);
        Route::resource('slider-images', SliderImageController::class);
        Route::resource('upload-logo', UploadLogoController::class);
        Route::resource('setting', SettingController::class);
        Route::resource('news', NewsController::class);
        Route::resource('level-chart', LevelChartController::class);
    });
});
