<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'npm' => '2327240091', 
        'nama' => 'Meilisa Apriyani'
    ];
    return view('home', $data);
});
