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




// აიდით ვიღებ დინამიურ როუთს რომელიც ფუნქციას გადაეცემა პარამეტრად , ვაბრუნებ მეორე ფეიჯის კომპონენტს
// ვიუში მეორე არგუმენტად ვწერ ასოციაციურ მასივს რომლის key value შეესაბამება ფუნქციით მიღებულ პარამეტრს
// ამ ასოციაციურ მასივს ვიღებთ იმ კომპონენტში რომელსაც ვაბრუნებთ , და ასოციაციური მასივიდან კი ამომგვაქვს 
// ცვლადის სახით რომელიც შეესაბამება მიღებულ როუთს და ვბეჭდავთ


Route::get('/{id}', function ($id) {
    return view('name', [
        'name' => $id,
    ]);
});