<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ESendController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\RewardController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\UserController;
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

 Route::get('/', function () {
    return view('welcome');
});
Route::post('/user_register', [App\Http\Controllers\usersController::class, 'register'])->name('user.register');
Route::get('/thankyou', [App\Http\Controllers\usersController::class, 'thankyou'])->name('register.thankyou');
Route::get('/check_sponser', [App\Http\Controllers\usersController::class, 'check_sponser'])->name('checkSp');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\usersController::class, 'profile'])->name('user.profile');
Route::get('/edit_profile', [App\Http\Controllers\usersController::class, 'edit_profile'])->name('user.edit_profile');
Route::get('/change_pass', [App\Http\Controllers\usersController::class, 'password'])->name('user.password');

Route::prefix('admin')->middleware('is_admin')->group(function () {
Route::resource('home', AdminHomeController::class);
Route::resource('users', UserController::class);
Route::resource('reward', RewardController::class);
Route::resource('e-send', ESendController::class);
Route::resource('support', SupportController::class);
Route::resource('change-password', ChangePasswordController::class);
Route::resource('product', ProductController::class);
});
