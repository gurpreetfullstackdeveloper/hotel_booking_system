# hotel_booking_system
It explains relationships in hotel booking system in Laravel

The Hotel Booking System is a web-based application built using Laravel that allows users to browse available hotels and rooms, make bookings, and manage reservations. This system is designed to handle hotel listings, room availability, user authentication, and booking management efficiently.

php artisan make:model Hotel -m
php artisan make:model Room -m
php artisan make:model Booking -m
php artisan make:model User -m


php artisan make:controller HotelController
php artisan make:controller RoomController
php artisan make:controller BookingController

=======================================================

routes/api.php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::get('/hotels', [HotelController::class, 'index']);
Route::get('/hotels/{id}', [HotelController::class, 'show']);
Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/book', [BookingController::class, 'bookRoom']);
});


