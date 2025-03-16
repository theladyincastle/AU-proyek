<?php

use Illuminate\Support\Facades\Route;
use App\Models\Story;


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
    return view('pages.home', [ // Sesuaikan path dengan folder "pages"
        'stories' => Story::latest()->take(6)->get(),
        'latestStories' => Story::latest()->take(5)->get()
    ]);
})->name('home');
