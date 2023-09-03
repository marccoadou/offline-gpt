<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\Api\V1\Vonage\InboundSmsController;
use Illuminate\Support\Facades\Route;


Route::post('v1/inbound-sms', InboundSmsController::class);
