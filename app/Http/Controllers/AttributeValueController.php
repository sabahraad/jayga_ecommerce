<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttributeValue;
use Illuminate\Support\Facades\Validator;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AttributeValue::with('attribute')->get();
        if($data->isEmpty()){
            return response()->json([
                'message' => 'No attribute values found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'List of all attribute values',
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
            'attribute_id' => 'required|exists:attributes,id',
            'value' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 422);
        }

        $AttributeValue = AttributeValue::create($request->only('attribute_id', 'value'));
        $data = AttributeValue::with('attribute')->find($AttributeValue->id);

        return response()->json([
            'message' => 'Attribute value created successfully',
            'data' => $data,
            'status' => 201
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = AttributeValue::with('attribute')->find($id);
        if(!$data){
            return response()->json([
                'message' => 'Attribute value not found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'Attribute value found',
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
            'value' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 422);
        }

        $attributeValue = AttributeValue::find($id);

        if (!$attributeValue) {
            return response()->json([
                'message' => 'Attribute value not found',
                'status' => 404
            ]);
        }

        $attributeValue->update($request->only('value'));

        return response()->json([
            'message' => 'Attribute value updated successfully',
            'data' => $attributeValue,
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = AttributeValue::find($id);
        if($data === null){
            return response()->json([
                'message' => 'Attribute value not found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            $data->delete();
            return response()->json([
                'message' => 'Attribute value deleted successfully',
                'data' => [],
                'status' => 200
            ]);
        }
    }
}
