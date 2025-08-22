<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Signature\SignatureController;
use App\Modules\DashboardCustomer\DashboardController;

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
    return view('dashboard');
});
route::get('/signature', function (){
    return view('signature');
});

Route::prefix('dashboard')->as('dashboard.')->controller(DashboardController::class)->group(function(){
route::get('/', 'findAll')->name('findAll');
});

Route::prefix('signature')->as('signature.')->controller(SignatureController::class)->group(function(){
route::get('/', 'findAll')->name('findAll');
});

