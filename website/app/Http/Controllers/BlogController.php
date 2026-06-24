<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.admin.blogs.index', compact('blogs'));
    }
    public function create()
    {
        return view('pages.admin.blogs.create');
    }
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $imagePath = null;
       if($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('blog_images', 'public');
       }

       Blog::create([
        'title' => $request->input('title'),
        'desc' => $request->input('description'),
        'img' => $imagePath,
       ]);

       return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    public function view($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.blogs.view', compact('blog'));
    }
    public function edit( $id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.blogs.edit', compact('blog'));
    }
    public function update( Request $request,$id){
        
        $blog = Blog::findOrFail($id);
        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $imagePath = $blog->img; // Keep the existing image path if no new image is uploaded
       if($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('blog_images', 'public');
        $blog->update(['img' => $imagePath]); // Update the image path in the database
       }

       $blog->update([
        'title' => $request->input('title'),
        'desc' => $request->input('description'),
        
       ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }
}
