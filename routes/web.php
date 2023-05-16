<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
Route::get('/', function() {
  return view('listings', [
    'heading' => 'Latest Listings',
    'listings' => Listing::all()
  ]); //now data is coming from our model
});

//Single listing

Route::get('/listings/{listing}', function(Listing $listing) {

  return view('listing', [
    'listing' => $listing
  ]);
});