<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function index()
    {
        //to get only flutter
        $product = Product::find(2);
         $cat = $product->category;
        //get all products from the mobile category
        //$cat = Category::find(2);
       // $products = $cat -> products;
        return view('index',compact('cat'));

      
    }

    public function about(){
        return view('about');
    }
}
