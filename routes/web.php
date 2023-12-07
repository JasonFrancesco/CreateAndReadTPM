<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HakimController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//not best practice
// Route::get('/home' , function () {
//     $a = "Yang Mulia majelis Hakim Konstitusi Benz";
//     return view('home',[
//         "message" => $a
//     ]);
// });

//cara best practicenya
Route::get('/home', [HomeController::class, 'home']); 


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/jual', function () {
//     return view('page_jual_beli.jual_page');
// });

// Route::get('/beli', function () {
//     return view('page_jual_beli.beli_page');
// });

//Page khusus create hakim
Route::get('/hakim', [HakimController::class,'redirectToCreateHakimPage']); 

//page khusus post data create hakim
Route::post('/post-create-hakim',[HakimController::class, 'createHakim']);