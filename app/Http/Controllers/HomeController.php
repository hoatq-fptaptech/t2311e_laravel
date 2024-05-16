<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $products = [
            [
                "name"=> "Meat",
                "image"=> "images/product-1.jpg"
            ],
            [
                "name"=> "Banana",
                "image"=> "images/product-2.jpg"
            ],
            [
                "name"=> "Grape",
                "image"=> "images/product-4.jpg"
            ]
        ];
        $categories = [
            [
                "id"=>1,
                "name"=> "Fruit"
            ],
            [
                "id"=>2,
                "name"=> "Vegestable"
            ]
        ];
        return view('welcome',compact("products"));
    }

    public function about_us(){
        return view("about-us");
    }
}
