<?php

namespace App\Http\Controllers;

use App\Product;
use App\Post;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
        $newProducts = Product::orderBy('id','desc')->take(12)->get();

        $popularProducts = Product::orderBy('views','desc')->take(12)->get();

        return view('front.index')->with([
            'newProducts' => $newProducts,
            'popularProducts' => $popularProducts
        ]);
    }

    public function store()
    {
        $popularProducts = Product::orderBy('views','desc')->take(5)->get();
        $allProducts = Product::orderBy('id','desc')->paginate(12);

        return view('front.shop')->with([
            'popularProducts' => $popularProducts,
            'allProducts' => $allProducts
        ]);
    }

    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();

        $product->views = $product->views + 1;
        $product->save();

        //dd($product);

        $popularProducts = Product::orderBy('views','desc')->take(5)->get();

        return view('front.product')->with([
            'popularProducts' => $popularProducts,
            'product' => $product
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBY('id','desc')->paginate(12);
        return view('front.blog')->with([
            'posts' => $posts
        ]);
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('front.single')->with([
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contactStore(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email',
            'contact_message' => 'required'

        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'contact_message' => $request->contact_message
        );

        Mail::send('emails.contact', $data, function ($msg) use ($data)
        {

            $msg->from($data['email']);

            $msg->to('su[pport@store.com');

            $msg->subject('New Enquiry Message From The Website');

        });

        Session::flash('success', 'Message Delivered, We would get back to you soon. Thanks');

        return redirect()->back();

    }

}
