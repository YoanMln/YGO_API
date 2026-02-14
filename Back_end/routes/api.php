<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CardController;

Route::get('/cards', [CardController::class, 'index']);
