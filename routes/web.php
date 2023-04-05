<?php

use App\Http\Controllers\MailController;
use App\Mail\WelcomeMail;
use App\Mail\StockControlMail;
use Illuminate\Support\Facades\Mail;
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


Route::get('/email', function () {
    Mail::to('info@dan.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/stock', function () {
    Mail::to('info@dan.com')->send(new StockControlMail());
    return new StockControlMail();
});





Route::get('/mailsend', [MailController::class, 'sendMail'] 
);