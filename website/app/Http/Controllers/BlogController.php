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
}
