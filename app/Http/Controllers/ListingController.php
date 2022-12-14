<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    /// Show all listings
    public function index(){
        return view('listings.index',[
            'listings'=> Listing::latest()->filter(request(['tag','search']))->get(),
        ]);
    }

    /// Show single listing
    public function show(Listing $listing){
        return view('listings.show',[
            'listing'=> $listing
        ]);
    }

    // Show create form
    public function create(){
        return view('listings.create');
    }

    // Store form data
    public function store(Request $request){
       // dd($request->all());

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required',Rule::unique('listings','company')],
            'location' => 'required',
            'email'=>'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);

        return redirect('/')->with('message','Listing created successfully!');
    }

}
