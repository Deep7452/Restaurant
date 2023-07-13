<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\shopingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::group(['prefix' => '/registration'], function () {
    Route::get('/', [RegistrationController::class, 'index']);
    Route::post('/', [RegistrationController::class, 'store']);
}); 
Route::group(['prefix' => '/login'], function () {
    Route::get('/', [LoginController::class, 'showLoginForm']);
    Route::post('/', [LoginController::class, 'login']);
});

Route::get('/logout', [LoginController::class, 'logout'])->name("logout");
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::group(['prefix' => 'shoping'], function () {
    Route::get('/', [shopingController::class, 'showShoping'])->name('shoping');
});
Route::group(['prefix' => 'order'], function () {
    Route::get('/', [orderController::class, 'order'])->name('order');
    Route::get('/{item_id}', [orderController::class, 'index']);
    Route::post('/',[orderController::class,'itemMenu'])->name('itemMenu');

});
Route::group(['prefix' => 'menu'], function () {
    Route::get('/', [menuController::class, 'index'])->name('menu');
    Route::post('/', [menuController::class, 'itemMenu']);
});
Route::group(['prefix'=>'reservation'], function(){
    Route::get('/',[ReservationController::class, 'index'])->name('reservation');
    Route::post('/',[ReservationController::class, 'store'])->name('store');
});