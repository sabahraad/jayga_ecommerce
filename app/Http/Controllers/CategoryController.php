<?php

namespace App\Http\Controllers;

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
        $data = Category::all();

        if($data->isEmpty()){
            return response()->json([
                'message' => 'No categories found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'List of all categories',
                'data' => $data,
                'status' => 200
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 422);
        }

        $data = Category::create($request->only('name'));

        return response()->json([
            'message' => 'Category created successfully',
            'data' => $data,
            'status' => 201
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Category::find($id);

        if($data === null){
            return response()->json([
                'message' => 'Category not found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'Category found',
                'data' => $data,
                'status' => 200
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 422);
        }

        $data = Category::find($id);
        if($data === null){
            return response()->json([
                'message' => 'Category not found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            $data->name = $request->name;
            $data->save();
            return response()->json([
                'message' => 'Category updated successfully',
                'data' => $data,
                'status' => 200
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        if($data === null){
            return response()->json([
                'message' => 'Category not found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            $data->delete();
            return response()->json([
                'message' => 'Category deleted successfully',
                'data' => [],
                'status' => 200
            ]);
        }
    }
}
