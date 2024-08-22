<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::All();
        return response()->json([
            'message'=>'all products showed successfully',
            'products'=>$products
        ]);    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->All(),[
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price' => 'required|numeric', 
            'image' => 'required|string', 
            'code' => 'required|string',
            'category_id' => 'required|integer' 
        ]);
        if ($validator->fails()){
            return response()->json(['errors'=>$validator->errors()],422);
        }
        $product=Product::create($validator->validated());
        return response()->json([
            'message' => 'Product addedd successfully',
            'product' => $product,
        ]);    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
