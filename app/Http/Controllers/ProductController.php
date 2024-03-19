<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Rendering Product page
        return Inertia::render('Admin/Products/Index', [
            'products' => Product::all(),
            // 'pastries' => Product::where('category', 'pastries')->get(),
            // 'hotbakes' => Product::where('category', 'hotbakes')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Admin/Products/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'category' => 'required|string|max:255',
            'productName' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
        ]);
        Product::create([
            'category' => $request->category,
            'productName' => $request->productName,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        sleep(1);

        return Redirect::route('products.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        sleep(1);

        return Redirect::route('products.index');
    }
}
