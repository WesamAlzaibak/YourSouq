<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $productQuery->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$category_id =0;
       Pruduct::query()->create([
           $name = $request->input('name'),
           $price = $request->input('price'),
           $description = $request->input('description'),
           $expire_date = $request->input('expire_date'),
           $quantity = $request->input('quantity'),
           $img_url = $request->input('img_url')
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $category_id = $request->query('category_id');
$price_from = $request->query('price_from');
$price_to = $request->query('price_to');
$productQuery = Product::query();
if ($category_id){
       $productQuery->where('category_id' ,$category_id);
}
if ($price_from ){
       $productQuery->where('price' , '>=', $price_from);
}
if ($price_to ){
       $productQuery->where('price' , '<', $price_to );
}
$products = $productQuery->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
