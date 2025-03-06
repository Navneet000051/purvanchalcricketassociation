<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
Route::post('/me', [AuthController::class, 'me'])->name('me');

Route::get('/get_category',[ApiController::class,'getCategory']);
Route::get('/get_language',[ApiController::class,'getLanguage']);

Route::get('/get_products',[ApiController::class,'getProductApi']);
Route::get('/get_product_details/{product_id?}',[ApiController::class,'getProductDetail']);
Route::get('category_by_product/{category}',[ApiController::class,'categoryByProduct']);
Route::get('filterByCategories/{categories}',[ApiController::class,'filterByCategories']);
Route::get('/products/search', [ApiController::class, 'searchText']);
Route::get('/filter/price', [ApiController::class, 'filterByprice']);
Route::get('/list_cart_data', [ApiController::class, 'getCartData']);
Route::get('/suggestions', [ApiController::class, 'suggest']);
Route::get('/get_states',[ApiController::class,'getStates']);
Route::get('/products/search', [ApiController::class, 'searchText']);

Route::post('/categoryByProduct_filter', [ApiController::class, 'categoryByProduct_filter']);


Route::middleware('auth:api')->group(function () {

Route::post('/add_to_cart', [ApiController::class, 'addToCart']);
Route::post('/update_cart_item', [ApiController::class, 'updateCartItem']);
Route::post('/remove_product_from_cart', [ApiController::class, 'removeFromCart']);

Route::post('/get_cities',[ApiController::class,'getCityByState']);
Route::post('/add_shiping_address',[ApiController::class,'addShipingAddress']);
Route::post('/show_shiping_address',[ApiController::class,'showShippingAddress']);
Route::post('/update_shiping_address', [ApiController::class, 'updateShippingAddress']);
Route::post('/delete_shiping_address', [ApiController::class, 'deleteShippingAddress']);


}); 



