<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function show($id) {
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }

    public function createProduct(Request $request) {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'category' => 'required|string|max:255',
        'image' => 'required|string|max:255',
    ]);

    $product = Product::create([
        'product_name' => $validatedData['name'],
        'product_description' => $validatedData['description'],
        'product_price' => $validatedData['price'],
        'product_stock' => $validatedData['stock'],
        'product_category' => $validatedData['category'],
        'product_image' => $validatedData['image'],
    ]);

        return redirect()->route('products.show', ['id' => $product->id])
            ->with('message', 'Product created successfully!');
    }

    public function updateProduct(Request $request) {
      $request->validate([
        'product_name' => 'required|string|max:50',
        'product_price' => 'required|numeric',
        'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'product_description' => 'nullable|string|max:255',
        'product_category' => 'required|string|max:50',
        'product_stock' => 'required|integer',
      ]);

      $product = Product::find($request->id);
      $product->product_name = $request->product_name;
      $product->product_price = $request->product_price;
      $product->product_category = $request->product_category;
      $product->product_stock = $request->product_stock;
      $product->product_description = $request->product_description;
      if ($request->hasFile('product_image')) {
        $imagePath = $request->file('product_image')->store('product_images', 'public');
        $product->product_image = $imagePath;
      }

      $product->save();

      return redirect()->route('show', ['id' => $product->id])
          ->with('message', 'Product updated successfully!');
    }

    public function deleteProduct(Request $request) {
      $product = Product::find($request->id);
      $product->delete();

      return redirect()->route('index')
          ->with('message', 'Product deleted successfully!');
    }
}
