<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\ElectronicController;
use App\Http\Controllers\PropertyController;


use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateProductController;

use App\Http\Controllers\DeleteController;


// get random post
Route::get('getPost', [HomeController::class, 'getPost']);

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
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post("register", [UserController::class, 'register']);

// Route::get('user-profile', [UserController::class, 'profile']);

Route::middleware('auth:api')->group(function() {
    Route::get('user-profile', [UserController::class, 'profile']);
});

// route hehe example
Route::get("data", [hehe::class, 'getData']);

// reset password
Route::post('reset-password/{token}', [ForgotPasswordController::class, 'reset']);

// contact us 
Route::post('contact-us', [ContactController::class, 'contact']);

// Route::get('clothes/details/{id}', [ClothesController::class, 'details']);

// Route::get('login', [UserController::class, 'login']);

// forgot password
Route::post('forgot-password', [ForgotPasswordController::class, 'forgotPassword']);



Route::get('search', [CarsController::class, 'search']);

// cars
Route::get('cars', [CarsController::class, 'cars']);
Route::get('cars/details/{id}',[CarsController::class, 'details']);

// clothes
Route::get('clothes', [ClothesController::class, 'clothes']);
Route::get('clothes/details/{id}',[ClothesController::class, 'details']);

//furniture
Route::get('furniture', [FurnitureController::class, 'furniture']);
Route::get('furniture/details/{id}', [FurnitureController::class, 'details']);

// electronic
Route::get('electronic', [ElectronicController::class, 'electronic']);
Route::get('electronic/details/{id}', [ElectronicController::class, 'details']);

// property
Route::get('property', [PropertyController::class, 'property']);
Route::get('property/details/{id}', [PropertyController::class, 'details']);

// create product
Route::post('post/car', [SellController::class, 'CarPost']);
Route::post('update/car/{id}', [UpdateProductController::class, 'updateCarsPost']);
Route::get('update/car/{id}', [UpdateProductController::class, 'updateCars']);
Route::delete('delete/car/{id}', [DeleteController::class, 'deleteCars']);


Route::post('post/clothes', [SellController::class, 'ClothesPost']);
Route::post('update/clothes/{id}', [UpdateProductController::class, 'updateClothesPost']);
Route::get('update/clothes/{id}', [UpdateProductController::class, 'updateClothes']);
Route::delete('delete/clothes/{id}', [DeleteController::class, 'deleteClothes']);

Route::post('post/furniture', [SellController::class, 'FurniturePost']);
Route::post('update/furniture/{id}', [UpdateProductController::class, 'updateFurniturePost']);
Route::get('update/furniture/{id}', [UpdateProductController::class, 'updateFurniture']);
Route::delete('delete/furniture/{id}', [DeleteController::class, 'deleteFurniture']);

Route::post('post/property', [SellController::class, 'PropertyPost']);
Route::post('update/property/{id}', [UpdateProductController::class, 'updatePropertyPost']);
Route::get('update/property/{id}', [UpdateProductController::class, 'updateProperty']);
Route::delete('delete/property/{id}', [DeleteController::class, 'deleteProperty']);

Route::post('post/electronic', [SellController::class, 'ElectronicPost']);
Route::post('update/electronic/{id}', [UpdateProductController::class, 'updateElectronicPost']);
Route::get('update/electronic/{id}', [UpdateProductController::class, 'updateElectronic']);
Route::delete('delete/electronic/{id}', [DeleteController::class, 'deleteElectronic']);



Route::get('products', [ProfileController::class, 'products']);
Route::post('update-profile', [ProfileController::class, 'updateProfile']);

Route::get('user-profile/products/{id}',[ProfileController::class, 'products']);