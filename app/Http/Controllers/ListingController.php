<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // get and show all listings
    public function index()
    {

        // $tag_query = request('tag');
        // simplePaginate(2)

        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(6)
        ]);
    }


    // get and show all listings
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show listing create form
    public function create()
    {
        return view('listings.create');
    }


    // save a new listing to the db
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['email', 'required'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // dd($request->all());
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
