<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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


Route::post('/contact', function(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'phone' => 'required',
        'email' => 'required:email',
        'message'=> 'required'
    ]);

    if ($validator->fails()) {
        return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
    }

    $name    = $request->input('name');
    $phone   = $request->input('phone');
    $email   = $request->input('email');
    $message =  $request->input('message');

        echo" testing phase";

})->name('/contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
