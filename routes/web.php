<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'UsersController@login')->name('login');
Route::get('/register', 'UsersController@register')->name('register');
Route::post('/register', 'UsersController@register')->name('register');




// Admin Routes
// Route::get('/admin', 'AdminController@home')->name('Admin Login');
// Route::get('/admin/login', 'AdminController@index')->name('Admin Login');
// Route::post('/admin/login', 'AdminController@index')->name('Admin Login');
// Route::get('/admin/dashboard', 'AdminController@dashboard')->name('Admin Dashboard');
// Route::get('/admin/resources', 'AdminController@resources')->name('Admin Resources');
// Route::get('/admin/users', 'UsersController@usersList')->name('Users Listing');
// Route::get('/admin/updateuser/{id}', 'UsersController@userUpdate')->name('Update User');
// Route::post('/admin/updateuser/{id}', 'UsersController@userUpdate')->name('Update User');

// Route::get('/admin/vendors', 'UsersController@vendorList')->name('Vendors Listing');
// Route::get('/admin/updatevendor/{id}', 'UsersController@vendorUpdate')->name('Update Vendor');
// Route::post('/admin/updatevendor/{id}', 'UsersController@vendorUpdate')->name('Update Vendor');

// Route::get('/admin/user/{id}', 'AdminController@userdetails')->name('Users Details');
// Route::get('/admin/approve/{id}', 'AdminController@approve')->name('Users Approve');
// Route::post('/admin/approve/{id}', 'AdminController@approve')->name('Users Approve');


// Route::post('/admin/logout', 'AdminController@logout')->name('Admin Logout');
