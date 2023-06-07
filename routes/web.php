<?php

use App\Jobs\TestingJob;
use App\Models\Country;
use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     $user = User::with('phone')->get();
//     return $user;
// });

// Route::get('/user', function () {
//     $user = User::with('role')->get();
//     return $user;
// });

Route::get('/user', function () {
    $user = Country::with('post')->get();
    TestingJob::dispatchAfterResponse($user);
    return $user;
});