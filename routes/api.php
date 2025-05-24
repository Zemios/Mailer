<?php

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/send-mail', [MailController::class, 'send'])
    ->middleware('throttle:5,60');

Route::get('/ping', fn()=> 'pong');