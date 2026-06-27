<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('pages.admin.banner.index', compact('banner'));
    }
    public function create()
    {
        return view('pages.admin.banner.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'subtitle'=>'required|string|max:255',
        'description'=>'required|string|max:255',
        'buttonlink'=>'required|string|max:255',
        'link'=>'required|string|max:255',
        ]);
        $imagepath=null;
        if($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('blog_images', 'public');
       }
       Banner::create([
        'title' => $request->input('title'),
        'desc' => $request->input('description'),
        'img' => $imagePath,
        'subtitle'=>$request->input('subtitle'),
        'buttonlink'=>$request->input('buttonlink'),
        'link'=>$$request->input('link'),
       ]);
       return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }
}
