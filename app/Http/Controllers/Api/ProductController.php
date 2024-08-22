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
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric', 
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'code' => 'required|string',
            'category_id' => 'required|integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No image uploaded'], 422);
        }
        
        if ($request->hasFile('image')) {
            $uploadedFile = cloudinary()->upload($request->file('image')->getRealPath());
            $imageUrl = $uploadedFile->getSecurePath();
        }
    
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageUrl, 
            'code' => $request->code,
            'category_id' => $request->category_id,
        ]);
    
        return response()->json([
            'message' => 'Product added successfully',
            'product' => $product,
        ]); 
     }

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
