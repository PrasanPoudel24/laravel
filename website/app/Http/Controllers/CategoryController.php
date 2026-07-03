<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::all();
        return view('pages.admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $request->validate([
        'name' => 'required|string|max:255',
       
       ]);

       category::create([
        'name' => $request->input('name'),
       ]);

       return redirect()->route('category.index')->with('success', 'category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {   
        
        //$category=Category::findOrFail($category) resource use so no need to write this
        return view('pages.admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        
        $request->validate([
        'name' => 'required|string|max:255',
        
       ]);


       $category->update([
        'name' => $request->input('name'),
        
       ]);

        return redirect()->route('category.index')->with('success', 'category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //$category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'category deleted successfully.');
    }
}
