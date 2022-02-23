<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Fachri Setiadi',
        'lahir'=>'Bandung, 29 Agustus 2004',
        'hobi'=>'Futsal',
        'jk'=>'laki laki',
        'agama'=>'islam',
        'alamat'=>'Komplek rama biru',
        'telp'=>'923984723874',
        'email'=>'fachrisetadi@gmail.coom',
        'photo'=>''
    ];
    return view('biodata',$data);
});
Route::get('/list', [BiodataController::class, 'index']);
Route::get('/list', [BiodataController::class, 'index']);