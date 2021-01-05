<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signups;
use App\Http\Controllers\downloadspdf;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\LiveSearch;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckStatus;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\PostGuzzleController;


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


Route::get('/signup', function () {
    return view('signup');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login/facebook', [signups::class,'redirectToProvider']);
Route::get('/login/facebook/callback', [signups::class,'handleProviderCallback']);

Route::Resource ('products','ProductsController');




Route::get('/invoice', [downloadspdf::class,'index']);
Route::get('/invoice/pdf', [downloadspdf::class,'pdf']);


 Route::get('/laravel-json', [JsonController::class,'index']);
 Route::post('/store-json', [JsonController::class,'store']);



Route::get('/live_search', [LiveSearch::class,'index']);
 Route::get('/live_search/action', [LiveSearch::class,'action'])->name('live_search.action');


Route::middleware([CheckStatus::class])->group(function(){

Route::get('home', [HomeController::class,'home']);

});


Route::get('/sendemail', [SendEmailController::class,'index']);
Route::post('/sendemail', [SendEmailController::class,'send']);



Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login', [loginController::class,'action']);
Route::get('/logout', [logoutController::class,'index'])->name('logout');
Route::group(['middleware'=>['sess']], function(){

    Route::get('/admin', [adminController::class,'index'])->name('admin');
  
    
	
});


Route::Resource ('employees','employeeController');


Route::get('posts',[PostGuzzleController::class,'index']);
Route::get('posts/store', [PostGuzzleController::class, 'store' ]);



Route::get('/fblogin', function () {
    return view('fblogin');
});


Route::resource('customers','customersController');