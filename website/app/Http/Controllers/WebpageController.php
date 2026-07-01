<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use app\Auth\Blogcontroller;
use App\Models\Blog;
use App\Models\Banner;
use app\Auth\Bannercontroller;


class WebpageController extends Controller
{
    public function blogs(){
        $blog = Blog::all();
    
        return view('pages.blogmain', compact('blog'));
    }

    public function contacts(){
       $services = Service::all();

        return view('pages.contact',compact('services'));
    }
    public function blogdetail(Service $service){
        return view('pages.blogdetail', compact('service'));
    }

    public function home(){
      $services = Service::all();
          $sample=[
            [
                'id'=>1,
                'name'=> 'About page 1',
                'des'=>'This is about page one',
                'img'=>'https://bat.com.np/wp-content/uploads/2025/04/1081-300x300.jpg'
            ],
             [
                'id'=>2,
                'name'=> 'About page 2',
                'des'=>'This is about page 2 ',
                'img'=>'https://thumbs.dreamstime.com/b/vibrant-pixelated-background-showcasing-nepal-s-iconic-landmarks-elements-including-temples-mountains-cultural-symbols-346723025.jpg'
            ],

        ];
     $immidata=[
            [
                'id'=>1,
                'name'=> 'Nepal',
                'img'=>'https://static.vecteezy.com/system/resources/thumbnails/049/546/766/small/stunning-high-resolution-nature-and-landscape-backgrounds-breathtaking-scenery-in-hd-free-photo.jpg'
            ],
             [
                'id'=>2,
                'name'=> 'India',
                'img'=>'https://rukminim2.flixcart.com/image/480/480/jlcmavk0/flag/z/j/z/national-flag-indiana-home-original-imaf8hwrrhvycqbm.jpeg?q=90'
            ],

        ];
        $branddata=[
            [
                'id'=>1,
                'name'=> 'Tribhuwan University',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI7DuvTXYAKvlZhxaNnOoFYzCFsmBpcT80Vw&s'
            ],
             [
                'id'=>2,
                'name'=> 'purvanchal university',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGMGO7AAk1PtRBqcBVFBnEUq5irEIKBa9aEg&s'
            ],

        ];
          $brandcountry=[
            [
                'id'=>1,
                'name'=> 'USA'
            ],
             [
                'id'=>2,
                'name'=> 'UK',
                
            ],

        ];
        $banner=Banner::all();
        

    return view ('pages.home',compact('sample','branddata','immidata','brandcountry','services','banner'));
    }
    
}
