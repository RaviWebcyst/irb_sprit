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
Route::get('/products',[App\Http\Controllers\frontController::class, 'products'])->name('products');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/branch', function () {
    return view('branch');
})->name('branch');
Route::get('/about', function () {
    return view('about');
})->name('about');

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
Route::post('/store_invest', [App\Http\Controllers\usersController::class, 'store_invest'])->name('invest.store');
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
});

});
