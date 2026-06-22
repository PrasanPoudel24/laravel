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
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.blogs.edit', compact('blog'));
    }
}
