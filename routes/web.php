<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articulosController;

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
    return view('index');
});



Route::get('/home', function () {
    return view('home');
});




Route::get('/postear', function () {
    return view('postear');
});


Route::get('/publicaciones', function () {

    $request = Request::create('/api/articulos/', 'GET');
    $response = Route::dispatch($request);
    $users = $response;

   
    $data = '[{  
        "d1":24,
        "d2":"Client1",
        "Balance1":null,
        "Balance2":null
    }]';


    return view ('publicaciones', ['users' =>  json_decode($data, true) ]);

    
});
