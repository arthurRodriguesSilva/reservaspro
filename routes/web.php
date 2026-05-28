<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSiteController;

Route::get('/', [WebSiteController::class, 'home']);
Route::get('/reservas/create', [WebSiteController::class, 'create']);
Route::post('/reservas/salvar', [WebSiteController::class, 'store']);
Route::get('/reservas', [WebSiteController::class, 'index']);