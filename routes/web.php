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
    $data = [
        'headerList' => [
            'page1',
            'page2',
            'page3',
            'page4'
        ],
        'homePagelink' => 'Return to Home'
    ];
    return view('home', $data);
})->name('home');
