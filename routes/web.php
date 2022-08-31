<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => '1',
                'title' => 'Listing One',
                'desc' => 'Donec et molestie nisi. Nunc posuere venenatis eleifend.
             Aenean finibus ante quis euismod dignissim. Sed leo leo, dignissim 
             vel porttitor eget, gravida at massa. Cras ut porttitor ligula. 
             Sed mollis, ante sed scelerisque porttitor, tellus turpis laoreet 
             erat, viverra egestas sapien dui ullamcorper lectus.'
            ],
            [
                'id' => '2',
                'title' => 'Listing Two',
                'desc' => 'Donec et molestie nisi. Nunc posuere venenatis eleifend.
             Aenean finibus ante quis euismod dignissim. Sed leo leo, dignissim 
             vel porttitor eget, gravida at massa. Cras ut porttitor ligula. 
             Sed mollis, ante sed scelerisque porttitor, tellus turpis laoreet 
             erat, viverra egestas sapien dui ullamcorper lectus.'
            ]
        ]

    ]);
});


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