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
        $products = Product::with('category')->get();
        return response()->json([
            'message' => 'All products retrieved successfully',
            'products' => $products
        ]);  
    }

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
    public function show($id)
    {
        $product=Product::with('category')->find($id);
        if (!$product){
            return response()->json(['message'=>'Product not found'],404);
        }
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png', // Image is optional
            'code' => 'string',
            'category_id' => 'integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $imageUrl = $product->image;
            if ($request->hasFile('image')) {
            try {
                $uploadedFile = cloudinary()->upload($request->file('image')->getRealPath());
                $imageUrl = $uploadedFile->getSecurePath();
            } catch (\Exception $e) {
                return response()->json(['error' => 'Image upload failed: ' . $e->getMessage()], 500);
            }
        }
    
        $updateData = $request->only(['title', 'description', 'price', 'code', 'category_id']);
        $updateData['image'] = $imageUrl;
   
        $product->update($updateData);
    
        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product,
        ]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
