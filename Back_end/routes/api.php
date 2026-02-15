<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CardController;

Route::apiResource('cards', CardController::class);
