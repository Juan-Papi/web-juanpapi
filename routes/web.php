<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalController;
use Illuminate\Support\Facades\Auth;

//use App\Http\Controllers\loginController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',principalController::class);

//Route::get('login',[loginController::class,'show'])->name('login.show');
/*Route::get('login', function () {
    return view('welcome');
});*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/tables', function () {
    return view('pages.tables');
})->name('tables');

Route::get('/virtual-reality', function () {
    return view('pages.virtual-reality');
})->name('virtual-reality');

Route::get('/rtl', function () {
    return view('pages.rtl');
})->name('rtl');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/sign-in', function () {
    return view('pages.sign-in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('pages.sign-up');
})->name('sign-up');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/billing', function () {
    return view('pages.billing');
})->name('billing');
