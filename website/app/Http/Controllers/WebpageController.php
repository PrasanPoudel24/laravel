<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function blogs(){
        $sample=[
            [
                'id'=>1,
                'name'=> 'test1',
                'des'=>'Hello this is test 1',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRAzEs1J77CUEubmHA7jLxSRLZGzjFY6Iaw&s'
            ],
             [
                'id'=>2,
                'name'=> 'test2',
                'des'=>'Hello this is test 2',
                'img'=>'https://i.pinimg.com/564x/dc/60/48/dc604813612e35ebe561ea6f3e0bdd60.jpg'
            ],

        ];
        $data=[
            [
                'id'=>1,
                'name'=> 'Education',
                'des'=>'Education is the key',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRAzEs1J77CUEubmHA7jLxSRLZGzjFY6Iaw&s'
            ],
             [
                'id'=>2,
                'name'=> 'Australia',
                'des'=>'Australia',
                'img'=>'https://i.pinimg.com/564x/dc/60/48/dc604813612e35ebe561ea6f3e0bdd60.jpg'
            ],

        ];

    return view ('pages.blogmain',compact('sample','data'));
    }
    public function contacts(){
        $product=[
            [
                'id'=>1,
                'name'=> 'America',
                'des'=>'Education is the key',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRAzEs1J77CUEubmHA7jLxSRLZGzjFY6Iaw&s'
            ],
             [
                'id'=>2,
                'name'=> 'Australia',
                'des'=>'Australia',
                'img'=>'https://i.pinimg.com/564x/dc/60/48/dc604813612e35ebe561ea6f3e0bdd60.jpg'
            ],

        ];

        return view('pages.contact',compact('product'));
    }
    public function blogdetail($id){
        $sample=[
            [
                'id'=>1,
                'name'=> 'test1',
                'des'=>'Hello this is test 1',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRAzEs1J77CUEubmHA7jLxSRLZGzjFY6Iaw&s'
            ],
             [
                'id'=>2,
                'name'=> 'test2',
                'des'=>'Hello this is test 2',
                'img'=>'https://i.pinimg.com/564x/dc/60/48/dc604813612e35ebe561ea6f3e0bdd60.jpg'
            ],

        ];
        
        $service=null;
        foreach($sample as $item)
            if($item['id']==$id){
                $service=$item;
                break;
            }
        if(!$service){
            abort(404);
        }
        return view('pages.blogdetail',compact('service'));
    }
     public function home(){
        $product=[
            [
                'id'=>1,
                'name'=> 'America',
                'des'=>'Education is the key',
                'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRAzEs1J77CUEubmHA7jLxSRLZGzjFY6Iaw&s'
            ],
             [
                'id'=>2,
                'name'=> 'Australia',
                'des'=>'Australia',
                'img'=>'https://i.pinimg.com/564x/dc/60/48/dc604813612e35ebe561ea6f3e0bdd60.jpg'
            ],

        ];
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

    return view ('pages.home',compact('product','sample','branddata','immidata','brandcountry'));
    }
    
}
