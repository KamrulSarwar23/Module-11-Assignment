<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],

        ]);

        $products = DB::table('products')->insert([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        toastr()->success('Product Added successfully!');
        return redirect()->route('products.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = DB::table('products')->find($id);
        return view('admin.product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
        ]);

        $products = DB::table('products')->where('id', $id)->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        toastr()->success('Product Updated successfully!');
        return redirect()->route('products.index');
    }


    public function delete(string $id)
    {
        $product = DB::table('products')->where('id', $id)->delete();
        toastr()->success('Product Deleted successfully!');
        return redirect()->route('products.index');
    }

    public function manageSale()
    {
        $products = DB::table('products')->get();
        return view('admin.product.sale', compact('products'));
    }

    public function updateSale(string $quantity, Request $request)
    {
        // Get the product by quantity
        $product = DB::table('products')->where('quantity', $quantity)->first();

        if ($product->quantity >= $request->sale_qty) {
            $newQuantity = max(0, $product->quantity - $request->sale_qty);

            DB::table('products')->where('quantity', $quantity)->update([
                'quantity' => $newQuantity,
            ]);
        }
        toastr()->success('Sale successfully!');
        return redirect()->route('manage.sale');
    }
}
