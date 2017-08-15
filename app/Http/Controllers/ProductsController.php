<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($category_id=false)
     {

         $categories = \App\Category::all();
         $query = Product::visibles();
         if($category_id){
           $query->where('category_id',$category_id);
         }
         $products = $query->get();

         $products = Product::with('category')->paginate(6);

         return view('products.index', compact('products', 'categories'));
     }

    public function byCategory($slug)
    {
        $products = Category::where('slug', $slug)->first()->products()->paginate(6);
        return view('products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         $categories = Category::all();
         return view('products.create', compact('categories'));
     }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
        $product = \Auth::user()->products()->create($request->all());
        return redirect('products');

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Product $product)
     {
        return view('products.show', compact('product'));
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Product $product)
     {
       $categories = \App\Category::all();
       return view('products.edit', compact('categories', 'product'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Product $product)
     {
         $product->update($request->all());
         return redirect('products');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Product $product)
     {
         foreach ($product->images as $image) {
           //borrar los archivo imagen
           \Storage::delete($image->src);
           //borrar las filas imagen
           $image->delete();
         }
         //pasar el product a inactivo
         $product->visible = 0;
         $product->save();

         return redirect('products');
     }

     public function images(Request $request, $id)
     {

         $product = Product::find($id);
         $file = $request->file('file');
         $ext = $file->extension();
         $name = uniqid();
         $file->storeAs('products'.$product->id, $name.'.'.$ext);

         $image = new \App\Image(['src' => 'products'.$product->id.'/'.$name.'.'.$ext]);
         $product->images()->save($image);

         return redirect('products');

       }

}
