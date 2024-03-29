<?php
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('mail', function () {
    $mail= new SendMail;
    //Mail::to($request->user())->send(new MailableClass);
    Mail::to('fan@example.com')->send($mail);
});

Route::post('send','mailController@send');
Route::get('email','mailController@email');