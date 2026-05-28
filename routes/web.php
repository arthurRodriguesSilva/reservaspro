<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSiteController;
use Illuminate\Support\Facades\Artisan;

Route::get('/rodar-migrations', function() {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return 'Banco de dados atualizado com sucesso!';
    } catch (\Exception $e) {
        return 'Erro ao rodar as migrations: ' . $e->getMessage();
    }
});

Route::get('/', [WebSiteController::class, 'home']);
Route::get('/reservas/create', [WebSiteController::class, 'create']);
Route::post('/reservas/salvar', [WebSiteController::class, 'store']);
Route::get('/reservas', [WebSiteController::class, 'index']);