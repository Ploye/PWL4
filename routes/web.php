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
//-------------PErtemuan 6----------------------
// Route::get('/greeting', function () {
//     return view('greeting',['name'=>'pwl']);
// });


// Route::get('/', function () {
//      return view('tryblade.child');
//  });

//  Route::get('/user/{name}','UserController@show');

// Route::resource('photos','PhotoController');




     Route::get('/',function(){
         return view ('welcome');
    });
//Pertemuan 7
    Route::resource('mhs','MahasiswaController'); 
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
  

    Route::prefix('/admin')->group(function(){
        //LoginRoutes
        Route::get('/login','Auth\LoginController@showAdminLoginForm')->name('admin.login');
        Route::post('/login','Auth\LoginController@adminLogin')->name('admin.login.submit');
        Route::post('/logout','Auth\LoginController@logout')->name('admin.logout');
    
        //Register Routes
        Route::get('/register', 'Auth\RegisterController@showAdminRegisterForm')->name('admin.register');
        Route::post('/register', 'Auth\RegisterController@createAdmin')->name('admin.register.submit');
    
        // Dashboard Routes
        Route::get('/dashboard','Admin\HomeController@index')->name('admin.home');
    });
    