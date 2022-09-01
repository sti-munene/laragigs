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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


Route::get('/', [ListingController::class, 'index']);

// show create lisiting form
Route::get('/listings/create', [ListingController::class, 'create']);

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// update a listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// delete a listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// save a new listing to the db
Route::post('/listings', [ListingController::class, 'store']);

// get single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// Single listing
// Route::get('/listing/{id}', function ($id) {
//     $listing =  Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     }

//     return abort('404');
// });


// Route model binding
// Route::get('/listing/{listing}', function (Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);
// });

/*

// Example route
Route::get('/foo', function () {
    return response('Hello world', 200, [
        'Content-Type' => 'text/plain',
        'Foo' => 'bar',
    ]);
});

// Working with variables in the url
// set the constraint to allow only numbers btw 1 and 9 using regex
Route::get('/posts/{id}/', function ($id) {

    // using ddd to debug
    // ddd($id);

    return response('Post ' . $id, 200, [
        'Content-Type' => 'text/plain',
        'Foo' => 'bar',
    ]);
})->where('id', '[0-9]+');

// Working with query params
Route::get('/search', function (Request $request) {

    // dd($request);
    return $request->name;
});

*/