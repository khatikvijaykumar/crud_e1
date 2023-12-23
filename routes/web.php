<?php

use App\Http\Controllers\usercontrol;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[usercontrol::class,'fetch_logic_home'])->name('home');

Route::get('/view/{id}',[usercontrol::class,'logic_see'])->name('home.view');

Route::get('/addpage',function (){
    return view('inser');
})->name('home.addpage');

Route::post('/add',[usercontrol::class,'logic_insert_data'])->name('home.add');


Route::get('/updatepage/{id}',[usercontrol::class,'fetch_logic_updatepage'])->name('home.updatepage');

Route::post('/update/{id}',[usercontrol::class,'logic_update'])->name('home.update');

Route::get('/delete{id}',[usercontrol::class,'logic_delete'])->name('home.delete');
