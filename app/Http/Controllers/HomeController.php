<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function index()
    {
        //get all products from the mobile category
        $cat = Category::find(2);
        $products = $cat -> products;
        return view('index',compact('products'));

      
    }

    public function about(){
        return view('about');
    }
}
