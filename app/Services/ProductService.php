<?php
namespace App\Services;
use App\Models\Product;
use App\Models\Category;

class ProductService
{
    public function getProducts($request)
    {

        $query = Product::with('category');
        if ($request->filled('search')) {
            $query = $query->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('category_id')) {
            $query = $query->where('category_id', $request->category_id);
        }

        return $query->paginate(5);
    }
    public function getCategories()
    {
        return Category::all();
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function find(Product $product)
    {
        return $product;
    }

    public function update(Product $product, array $data)
    {
        return $product->update($data);
    }

    public function delete(Product $product)
    {
        return $product->delete();
    }
}