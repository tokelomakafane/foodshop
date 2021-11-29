<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\MenuItemController;
use App\Http\Controllers\Backend\Restaurant\RestaurantController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin',[AdminController::class,'index'])->name('admin');

Route::get('/restaurant/add',[RestaurantController::class,'addrestaurant'])->name('add.restaurant');

Route::post('/restaurant/store',[RestaurantController::class,'storerestaurant'])->name('store.restaurant');

Route::get('/restaurant/view',[RestaurantController::class,'viewrestaurant'])->name('view.restaurant');




Route::get('/menu/view',[MenuController::class,'viewmenu'])->name('view.menu');
Route::get('/menu/add',[MenuController::class,'addmenu'])->name('add.menu');
Route::post('/menu/store',[MenuController::class,'storemenu'])->name('store.menu');

Route::get('/menuitem/view',[MenuItemController::class,'viewmenuitem'])->name('view.menuitem');
Route::get('/menuitem/add',[MenuItemController::class,'addmenuitem'])->name('add.menuitem');
Route::post('/menuitem/store',[MenuItemController::class,'storemenuitem'])->name('store.menuitem');
Route::get('/getCity', [MenuController::class,'getCity'])->name('changestatus');


Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('/resturant',[FrontendController::class,'restaurantslist'])->name('restaurantslist');
Route::get('/menu/{id}',[FrontendController::class,'menu'])->name('restaurantsmenu');
Route::get('/menuitem/{id}',[FrontendController::class,'menuitem'])->name('menuitem');


Route::get('/addtocart/{id}',[FrontendController::class,'addtocart'])->name('addtocart');
Route::get('/cart/view/',[FrontendController::class,'Cart'])->name('cart');

Route::post('/updatecart/{id}',[FrontendController::class,'updatecart'])->name('updatecart');
Route::get('/removeproduct/{id}',[FrontendController::class,'removeproduct'])->name('removeproduct');
