<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::with('category')->get();
        return view('pages.admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('pages.admin.products.create',compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
         $request->validate([
            'name'=> 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'category_id'=> 'required|string'
        ]);
        $imagePath =null;
        if($request->hasFile('image')){
            $imagePath=$request ->file('image')->store('blog_images','public');
        }
        Product::create([
            'name' => $request->input('name'),
            'image' => $imagePath,
            'category_id' => $request->input('category_id')
        ]);
        return redirect()->route('product.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
