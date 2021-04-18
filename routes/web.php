<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LocalizationController;

//use App\Mail\WelcomeMail;
//use Illuminate\Support\Facades\Mail;


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
Route::get('index', function(){
    return view('onlineshop/onlineshop');
})->name('onlineshop');

Route::post('feedback',[FeedbackController::class, 'index'])->name('feedback');
Route::get('/{lang}', [LocalizationController::class,'index']);

Route::get('mail/send', 'App\Http\Controllers\MailController@sending')->name('sending');

