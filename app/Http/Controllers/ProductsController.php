<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'featured' => 'required|image',
            'description' => 'required',
            'price' => 'required|numeric'

        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/products',$featured_new_name);

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'featured' => 'uploads/products/' . $featured_new_name,
            'slug' => str_slug($request->title),
            'views' => 0
        ]);

        Session::flash('success', 'Product created');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);

        $product = Product::find($id);

        if($request->hasFile('featured'))
        {

            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/products',$featured_new_name);

            $product->featured = 'uploads/products/'.$featured_new_name;

        }

        $product->title = $request->title;
        $product->slug = str_slug($request->title);
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        Session::flash('success', 'Product updated');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if(file_exists($product->featured)){
            unlink($product->featured);
        }

        $product->delete();

        Session::flash('success', 'Product Deleted');

        return redirect()->route('products.index');
    }
}
