<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// EP = End Point
// V = View

Route::get('/', function () {
    return view('welcome');
});

// EP contact, V contact, fixed/static parameter
Route::view('/contact', 'contact', ['name' => 'Panji', 'phone' => '0812xxxxxxxx']);

// Redirecting
Route::get('contact-mock', function () {
    return "lolololol";
});
Route::redirect('/contact2', '/contact-mock');

// Parameter URL
Route::get('users/{id}', function ($id) {
    return 'User dengan id : '.$id;
});

// Pass param to view 
Route::get('product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});

// Grouping/prefix
Route::prefix('administrator')->group(function() {
    Route::get('/admin-profile', function() {
        return 'admin.profile';
    });
    Route::get('/admin-contact', function() {
        return 'admin.contact';
    });
});