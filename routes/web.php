<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route for Admin Dashboard (Accessible without login)
Route::get('/admin/dashboard', function () {
    return view('admin/admindashboard'); // Matches resources/views/admindashboard.blade.php
});


