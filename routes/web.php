<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-email', function () {
    Mail::raw('Test email dari Laravel + MailPit', function ($msg) {
        $msg->to('test@example.com')->subject('Test Subject');
    });

    return 'Email sent!';
});
