<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ShowOrdersController;
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
    Route::post('/', [LoginController::class, 'login'])->name('login');
});

Route::get('/logout', [LoginController::class, 'logout'])->name("logout");
Route::get('/', [LoginController::class, 'home'])->middleware('auth')->name('home');

Route::group(['prefix' => 'AddProduct','middleware' => ['admin','auth']], function () {
    Route::get('/', [AddProductController::class, 'Add'])->name('AddProduct');
    Route::post('/', [AddProductController::class, 'Additem'])->name('Additem');
});
Route::group(['prefix' => 'order','middleware' => 'auth' ], function () {
  
    Route::get('/{item_id}', [orderController::class, 'index']);
    Route::post('/',[orderController::class,'itemMenu'])->name('itemMenu');

});
Route::group(['prefix' => 'orders','middleware' => 'auth' ], function () {
    Route::get('/', [ShowOrdersController::class, 'orders'])->name('orders');
    Route::get('/{id}/{status}',[ShowOrdersController::class,'updateOrderStatus'])->name('orders.updateOrderStatus');
    Route::delete('/{id}',[ShowOrdersController::class,'destroy'])->name('destroy');
});
Route::group(['prefix' => 'menu', 'middleware' => 'auth'], function () {
    Route::get('/', [menuController::class, 'index'])->name('menu');
    // Route::post('/', [menuController::class, 'itemMenu']);
});
Route::group(['prefix'=>'contact', 'middleware' => 'auth'], function(){
    Route::get('/',[ContactController::class, 'index'])->name('contact');
    Route::post('/',[ContactController::class, 'store'])->name('store');
});
Route::group(['prefix'=>'about','middleware'=>'auth'],function(){
    Route::get('/',[AboutController::class,'index'])->name('about');

});