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

Route::get('/', function () {
    $comics = config('comics.comics');

    return view('home', compact('comics'));
})->name('homepage');


Route::get('/products/{comic}', function($id){
    $comics = config('comics.comics');

    if($id>=0 && $id < count($comics)){
        $comic = $comics[$id];
        return view('products.show', compact('comic'));
    }else{
        abort('404');
    }
})->name('products.show');