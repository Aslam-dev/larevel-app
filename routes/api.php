<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CurdController;

Route::post ('$storedata',[CurdController::class, 'storedata']);