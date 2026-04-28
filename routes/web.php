<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('newsc', function () {
	return view('newscopy');
});

Route::get('pert4', function () {
	return view('pertemuan4');
});

Route::get('respon', function () {
	return view('responsive');
});

Route::get('typography', function () {
	return view('tugastypography');
});

Route::get('index', function () {
	return view('index');
});

Route::get('linktree1', function () {
	return view('linktree');
});

Route::get('linktreec', function () {
	return view('linktreecopy');
});
