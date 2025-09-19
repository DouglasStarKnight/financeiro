<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Descricao\DescricaoController;
use App\Modules\Request\RequestController;
use App\Modules\DashboardCustomer\DashboardController;

Route::prefix('dashboard')->as('dashboard.')->controller(DashboardController::class)->group(function(){
route::get('/', 'findAll')->name('findAll');
});
Route::prefix('descricao')->as('descricao.')->controller(DescricaoController::class)->group(function(){
route::get('/', 'findAll')->name('index');
route::post('/create', 'create')->name('create');
});

Route::prefix('request')->as('request.')->controller(RequestController::class)->group(function(){
route::get('/', 'findAll')->name('findAll');
});

