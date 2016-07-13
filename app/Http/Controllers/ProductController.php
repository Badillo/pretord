<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products    = Product::with('category', 'collection', 'type')->get();
        $categories  = Category::all();
        $collections = Collection::all();

        return view('admin.products', ['products' => $products, 'categories' => $categories, 'collections' => $collections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product                = new Product();
        $product->name          = $request->input('name');
        $product->description   = $request->input('description');
        $product->price         = $request->input('price');
        $product->isOffer       = $request->input('isOffer');
        $product->isDuo         = $request->input('isDuo');
        $product->type_id       = $request->input('type');
        $product->category_id   = $request->input('category');
        $product->collection_id = $request->input('collection');
        
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $product->image = 'img/products/' . $request->file('image')->getClientOriginalName();
                $product_image  = $request->file('image');
                $product_image->move('img/products', $product_image->getClientOriginalName());
            }
        } 
        $product->save();

        $products = Product::with('category', 'collection', 'type')->get();

        return response()->json(['products' => $products], 200);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $product = Product::find($request->input('id'));
        $product->delete();

        $products = Product::with('category', 'collection', 'type')->get();

        return response()->json(['products' => $products], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product                = Product::find($request->input('id'));
        $product->name          = $request->input('name');
        $product->description   = $request->input('description');
        $product->price         = $request->input('price');
        $product->isOffer       = $request->input('isOffer');
        $product->isDuo         = $request->input('isDuo');
        $product->type_id       = $request->input('type');
        $product->category_id   = $request->input('category');
        $product->collection_id = $request->input('collection');
        
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $product->image = 'img/products/' . $request->file('image')->getClientOriginalName();
                $product_image  = $request->file('image');
                $product_image->move('img/products', $product_image->getClientOriginalName());
            }
        } 
        $product->save();

        $products = Product::with('category', 'collection', 'type')->get();

        return response()->json(['products' => $products], 200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
