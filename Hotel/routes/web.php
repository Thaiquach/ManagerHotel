<?php

use App\Http\Controllers\DiscountController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'hotels' => HotelController::class
]);

Route::resources([
    'guests' => GuestController::class
]);

Route::resources([
    'discounts' => DiscountController::class
]);
Route::resources([
    'rooms' => RoomController::class
]);