<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //da
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd ini ngecek apakah post yang kita input masuk
        // dd($request);

        $this->validate($request, [
            'name' => 'required|min:5',
            'price' => 'required|min:1',
            'stock' => 'required|min:1'
        ]);

        // Hanya menyertakan kolom-kolom yang diperlukan

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        //Cara yang dikasih
        // $product = new Product;
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->stock = $request->stock;
        // $product->save();


        // Redirect ke route dengan nama 'product.index'
        return redirect()->route('product')->with(['success' => "Product $product->name Save Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productid = Product::find($id);
        return view('product.edit', compact('productid'));
        // dd($productid);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'price' => 'required|min:1',
            'stock' => 'required|min:1'
        ]);

        $productupdt = Product::find($id);
        $productupdt->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        //Cara yang dikasih
        // $productupdt = Product::find($id);
        // $productupdt = new Product;
        // $productupdt->name = $request->name;
        // $productupdt->price = $request->price;
        // $productupdt->stock = $request->stock;
        // $productupdt->save();

        return redirect()->route('product')->with(['success' => "Product $productupdt->name Success Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdlt = Product::find($id);
        $name = $productdlt->name;
        $productdlt->delete();

        return redirect()->route('product')->with(['success' => "Product $name Delete"]);
    }
}