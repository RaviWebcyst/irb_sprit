<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ESendController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
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
});
