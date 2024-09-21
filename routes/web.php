<?php

use App\Http\Controllers\DataPaginationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataPaginationController::class,'index']);
