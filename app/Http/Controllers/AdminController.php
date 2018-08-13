<?php

namespace App\Http\Controllers;

use App\Product;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $posts = Post::all()->take(10);
        $products = Product::all()->take(10);

        return view('admin.dashboard')->with(['posts' => $posts,'products' => $products]);
    }

}
