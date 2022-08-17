<?php

use Damoon\Blog\Http\Controllers\api\v1\AdminController;
use Damoon\Tools\Custom\Route\Route;

Route::prefix('api/v1/admin/blog')->middleware(['api', 'auth:sanctum'])->controller(AdminController::class)->group(function (){
    Route::get('/', 'collect');
});
