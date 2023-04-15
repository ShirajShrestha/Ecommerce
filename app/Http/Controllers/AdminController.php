<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function category(){

        $data = category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){

        $data = new category;
        $data->category=$request->category_name;
        $data->save();
        return redirect()->back()->with('message','Category added successfully');
    }

    public function delete_category($id){
        $data = category::find($id);
        $data -> delete();
        return redirect()->back()->with('message','Category deleted successfully');
    }

    public function add_products(){

        $categorys = category::all();
        return view('admin.product', compact('categorys'));
    }

    public function add_product(Request $request){

        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category = $request->category;

        $image = $request->image;
        $imageName=time().'.'. $image->getClientOriginalExtension();
        $request->image->move('products',$imageName);
        $product->image=$imageName;
         
        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }
}
