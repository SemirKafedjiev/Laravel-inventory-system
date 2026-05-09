<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ProductService $service)
    {
        $products = $service->getProducts($request);
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProductService $service)
    {
        $categories = $service->getCategories();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     Product::create([
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'quantity' => $request->quantity,
    //         'category_id' => $request->category_id,
    //     ]);

    //     return redirect('/products/create')->with('success', 'Продуктът е добавен');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Product $product)
    // {
    //     $categories = Category::all();
    //     return view('products.edit', compact('product', 'categories'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Product $product)
    // {
    //     $product->update([
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'quantity' => $request->quantity,
    //         'category_id' => $request->category_id
    //     ]);

    //     return redirect('products')->with('success', 'Продуктът е обновен');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
     public function store(Request $request, ProductService $service)
    {
        $service->create($request->all());

        return redirect('/products')->with('success', 'Добавен продукт');
    }

    public function edit(Product $product, ProductService $service)
    {
        $categories = $service->getCategories();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Product $product ,Request $request,  ProductService $service)
    {
        $service->update($product, $request->all());

        return redirect('/products')->with('success', 'Обновен продукт');
    }

    public function destroy(Product $product,cd ProductService $service)
    {
        $service->delete($product);

        return redirect('/products')->with('success', 'Изтрит продукт');
    }
}
