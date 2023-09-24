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
    return view('welcome');
});

Route::get('/Hanadi', function () {
    return view('new.Hanadi');
});

Route::get('contact', function () {
    $name=reqest("n");
    return $name;
});



    Route::get('/category/{id}', function ($id) {
        $cats=[
            1=>"games",
            2=>"tools",
            3=>"books"
        ];
        return view ('category',[
            'cat'=>$cats[$id]??"notfound"
        ]);

        
});


