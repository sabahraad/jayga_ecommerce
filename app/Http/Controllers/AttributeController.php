<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;
use Illuminate\Support\Facades\Validator;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Attribute::with('values')->get();

        if($data->isEmpty()){
            return response()->json([
                'message' => 'No attributes found',
                'data' => [],
                'status' => 404
            ]);
        }else{
            return response()->json([
                'message' => 'List of all attributes',
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

        $attribute = Attribute::create($request->only('name'));
        
        if ($request->has('values')) {
            foreach ($request->values as $value) {
                $attribute->values()->create(['value' => $value]);
            }
        }

        $data = Attribute::with('values')->find($attribute->id);

        return response()->json([
            'message' => 'Attribute created successfully',
            'data' => $data,
            'status' => 201
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Attribute::with('values')->find($id);

        if($data){
            return response()->json([
                'message' => 'Attribute found',
                'data' => $data,
                'status' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Attribute not found',
                'data' => [],
                'status' => 404
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

        $data = Attribute::find($id);

        if($data){
            $data->name = $request->name;
            $data->save();
            if ($request->has('values')) {
                $data->values()->delete();
                foreach ($request->values as $value) {
                    $data->values()->create(['value' => $value]);
                }
            }

            return response()->json([
                'message' => 'Attribute updated successfully',
                'data' => $data,
                'status' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Attribute not found',
                'data' => [],
                'status' => 404
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Attribute::find($id);

        if($data){
            $data->delete();
            return response()->json([
                'message' => 'Attribute deleted successfully',
                'data' => [],
                'status' => 200
            ]);
        }else{        
            return response()->json([
                'message' => 'Attribute not found',
                'data' => [],
                'status' => 404
            ]);
        }
    }
}
