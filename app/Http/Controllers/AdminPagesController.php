<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{
    public function index(){
    	return view('admin.index');
    }
    public function create(){
    	return view('admin.create');
    }
    public function manage(){
      $products=Product::orderBy('id','desc')->get();
    	return view('admin.manage')->with('products',$products);
    }
    public function store(Request $request)
    {

      $request->validate([
          'title' => 'required|max:191',
          'description' => 'required',
          'quantity' => 'required|numeric',
          'price' => 'required|numeric',
      ]);
      $product=new Product();
      $product->title=$request->title;
      $product->description=$request->description;
      $product->price=$request->price;
      $product->quantity=$request->quantity;
      $product->category_id=1;
      $product->brand_id=1;
      $product->admin_id=1;
      $product->slug=str_slug($request->title);
      $product->save();

      // if ($request->hasFile('product_image')) {
      //   $image=$request->file('product_image');
      //   $img=time().'.'.$image->getClientOriginalExtension();
      //   $location=public_path('images/products/'.$img);
      //   Image::make($image)->save($location);
      //
      //   $product_image=new ProductImage;
      //   $product_image->product_id=$product->id;
      //   $product_image->image=$img;
      //   $product_image->save();
      //
      // }

      if(count($request->product_image)>0){

        foreach ($request->product_image as $image) {
          $img=time().uniqid().'.'.$image->getClientOriginalExtension();
          $location=public_path('images/products/'.$img);
          Image::make($image)->save($location);

          $product_image=new ProductImage;
          $product_image->product_id=$product->id;
          $product_image->image=$img;
          $product_image->save();

        }
      }

      return redirect()->route('admin.create');

    }
}
