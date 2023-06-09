<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
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

// Common Resource Routes:
// index - show all listings
// show - show a single listing
// create - show form to create new Listing
// store - store new listing
// edit - show form to edit listing
// 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
  return response('<h1>Hello world</h1>', 200) 
    -> header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
  ddd($id);
  return response('Post ' . $id);
}) ->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
  return $request->name . ' ' . $request->city;
});

//All listings
Route::get('/', [ListingController::class, 'index']);

//Single listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);