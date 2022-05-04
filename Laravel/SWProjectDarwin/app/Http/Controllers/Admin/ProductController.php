<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            //    'image_name' => 'mimes:jpeg,bmp,png',
                'name_drone' => 'required',
                'battery' =>'required|max:500',
                'motors' => 'required|max:500',
                'the_flight_controller' => 'required|max:500',
                'receiver' =>'required|max:500',
                'image_location' => 'file|image'
            ]);

            $product_image= $request->file('product_image');
            $filename = $product_image->hashName();

            $path = $product_image->storeAs('public/images', $filename);

            // if validation passes create the new book
            $product = new Product();
            $product->name_drone = $request->input('name_drone');
            $product->battery = $request->input('battery');
            $product->motors = $request->input('motors');
            $product->the_flight_controller = $request->input('the_flight_controller');
            $product->receiver = $request->input('receiver');
            $product->image_location =  $filename;
            $product->save();



            return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);

        return view('user.products.show', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrfail($id);
        $products->delete();

        return view('admin.product.edit', [
            'product' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              // first get the existing product that the user is update
              $product = Product::findOrFail($id);
              $request->validate([
                'name_drone' => 'required',
                'battery' =>'required|max:500',
                'motors' => 'required|max:500',
                'the_flight_controller' => 'required|max:500',
                'receiver' =>'required|max:500',
                'image_location' => 'file|image'
              ]);

              // if validation passes then update existing product
              $product->name_drone = $request->input('name_drone');
              $product->battery = $request->input('battery');
              $product->motors = $request->input('motors');
              $product->the_flight_controller = $request->input('the_flight_controller');
              $product->receiver = $request->input('receiver');
              $product->save();

              return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrfail($id);
        $products->delete();

        return redirect()->route('admin.product.index');
    }
}
