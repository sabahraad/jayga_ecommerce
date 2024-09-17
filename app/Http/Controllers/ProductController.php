<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('category', 'attributes','attributeValues')->get();
        if($data->isEmpty()){
            return response()->json([
                'message' => 'No products found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'List of all products',
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
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'attributes' => 'array',
            'attributes.*.id' => 'integer|exists:attributes,id',
            'attributes.*.values' => 'array',
            'attributes.*.values.*' => 'integer|exists:attribute_values,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // Handle image upload if present
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = 'storage/'.$request->file('image')->store('images', 'public');
        }

        // Create the product
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        // Attach attributes and their values
        foreach ($request->input('attributes') as $attribute) {
            foreach ($attribute['values'] as $value) {
                DB::table('product_attribute_value')->insert([
                    'product_id' => $product->id,
                    'attribute_id' => $attribute['id'],
                    'attribute_value_id' => $value
                ]);
            }
        }

        $data = Product::with('category', 'attributes','attributeValues')->find($product->id);

        return response()->json([
            'message' => 'Product created successfully',
            'data' => $data,
            'status' => 201
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Product::with('category', 'attributes','attributeValues')->find($id);

        if($data === null){
            return response()->json([
                'message' => 'Product not found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'Product found',
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
        dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'attributes' => 'array',
            'attributes.*.id' => 'integer|exists:attributes,id',
            'attributes.*.values' => 'array',
            'attributes.*.values.*' => 'integer|exists:attribute_values,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $product = Product::find($id);

        if($product === null){
            return response()->json([
                'message' => 'Product not found',
                'data' => [],
                'status' => 404
            ]);
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = 'storage/'.$request->file('image')->store('images', 'public');
        }

        $product->update($request->only('name', 'price', 'category_id',$imagePath));

        // Update the product's attributes
        $attributeValues = [];
        if ($request->has('attributes')) {
            foreach ($request->input('attributes') as $attribute) {
                foreach ($attribute['values'] as $valueId) {
                    $attributeValues[$valueId] = ['attribute_id' => $attribute['id']];
                }
            }
            // Sync the attribute values with the product
            $product->attributes()->sync($attributeValues);
        }

        $data = Product::with('category', 'attributes','attributeValues')->find($id);

        return response()->json([
            'message' => 'Product updated successfully',
            'data' => $data,
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        if($data === null){
            return response()->json([
                'message' => 'Product not found',
                'data' => [],
                'status' => 404
            ]);
        }else{          
            $data->delete();
            return response()->json([
                'message' => 'Product deleted successfully',
                'data' => [],
                'status' => 200
            ]);
        }
    }
}
