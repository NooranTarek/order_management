<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::All();
        return response()->json([
            'message'=>'all categories showed successfully',
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->All(),[
            'name'=>'required|string|max:255',
            'description'=>'nullable|string'
        ]);

        if ($validator->fails()){
            return response()->json(['errors'=>$validator->errors()],422);
        }
        $category=Category::create($validator->validated());
        return response()->json([
            'message' => 'Category addedd successfully',
            'category' => $category,
        ]);
        } 

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
    
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
    
        return response()->json($category);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
        'name' => 'string|max:255',
        'description' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }
    $category=Category::find($id);
    if (!$category){
        return response()->json(['message'=>'category not found to update']);
    }
    $category->update($validator->validated());
    return response()->json([
        'message' => 'Category updated successfully',
        'category' => $category,
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category){
            return response()->json(['message'=>'category not found to delete']);
        }
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
    public function deleteAllCategories()
    {
        Category::query()->delete();
        return response()->json('All categories deleted successfully');
    }
    
}
