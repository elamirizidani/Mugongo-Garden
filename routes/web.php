<?php


use App\Http\Controllers\BookPlaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\BuyFlowersController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookRoomController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\StripeController;

//admin
use App\Http\Controllers\admin\ManageController;
use App\Http\Controllers\admin\FlowerReportController;


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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/flower', FlowerController::class);
Route::resource('/buyflowers', BuyFlowersController::class);

Route::resource('/rooms', RoomsController::class);
Route::resource('/bookRoom', BookRoomController::class);

Route::resource('/events', EventController::class );
Route::resource('/bookPlace', BookPlaceController::class);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);


//pay

Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');



Route::group(['middleware' => ['guest']], function() {
    

    

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    Route::resource('/flowers', FlowerController::class);

    Route::resource('/room', RoomsController::class);
    Route::resource('/event', EventController::class );


    //manage
    Route::resource('/manage', ManageController::class);

    Route::resource('/flowersReport', FlowerReportController::class);


    
});