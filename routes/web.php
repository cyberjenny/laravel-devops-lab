<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'This is my custom homepage text.';
});

Route::get('/test', function () {
    return 'This is my custom test route text.';
});
