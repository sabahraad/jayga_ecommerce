<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class indexController extends Controller
{
    public function index()
    {
        $category = Category::paginate(3);
        $data = Product::with('category', 'attributes','attributeValues')->get();
        return view('index',compact('data','category'));
    }

    public function addProduct(){
        return view('addProduct');
    }

    public function addCategory(){
        return view('addCategory');
    }

    public function storeCategory(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = Category::create($request->only('name'));

        return redirect()->route('showCategory')->with('success','Category Added Successfully');
    }

    public function showCategory(){
        $data = Category::all();
        return view('showCategory');
    }
}
