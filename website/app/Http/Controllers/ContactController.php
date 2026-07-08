<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = contact::all();
        
        return view('pages.admin.contacts.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'address' => 'required|string|max:255',
        'phone1' => 'required|string|max:255',
        'phone2' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'map' => 'required|string|max:255',
       ]);

     
       contact::create([
        'address' => $request->input('address'),
       'phone1' => $request->input('phone1'),
       'phone2' => $request->input('phone2'),
       'email' => $request->input('email'),
       'map' => $request->input('map'),
       
       ]);

       return redirect()->route('contact.index')->with('success', 'contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
