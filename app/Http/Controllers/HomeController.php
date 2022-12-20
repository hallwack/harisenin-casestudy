<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::with('asset')->latest()->take(4)->get();
        $categories = new Category();
        return view('pages.home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function category()
    {
        $categories = Category::join('assets', 'categories.asset_id', 'assets.id')->get();
        return view('pages.category', ['categories' => $categories]);
    }

    public function product()
    {
        $products = Product::with('asset')->latest()->get();
        return view('pages.product', ['products' => $products]);
    }

    public function details($slug)
    {
        $product = Product::with('asset')->where('product_slug', $slug)->firstOrFail();
        return view('pages.product-detail', ['product' => $product]);
    }
}
