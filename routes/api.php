<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/mueler/53366/all', [CrudController::class, 'all']);
Route::get('/mueler/53366/index/{id}', [CrudController::class, 'index']);
Route::post('/mueler/53366/create', [CrudController::class, 'create']);
Route::put('/mueler/53366/edit/{id}', [CrudController::class, 'edit']);
Route::delete('/mueler/53366/remove/{id}', [CrudController::class, 'remove']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
