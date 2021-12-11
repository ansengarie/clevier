<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()->inRandomOrder()->limit(6)->get();
        $title = 'Home';
        $active = 'home';

        return view('pages/frontend/home', compact('products', 'title', 'active'));
    }

    public function products(Request $request)
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        $products = Product::latest()->filter(request(['products', 'category']))->paginate(9)->withQueryString();
        $title = 'All Products' . $title;
        $active = 'products';

        return view('pages/frontend/products', compact('title', 'products', 'title', 'active'));
    }

    public function categories(Request $request)
    {
        $categories = Category::all();
        $title = 'Categories';
        $active = 'categories';


        return view('pages/frontend/categories', compact(['categories', 'title', 'active']));
    }

    public function about(Request $request)
    {
        return view('pages/frontend/about', [
            'title' => 'About',
            'active' => 'about'
        ]);
    }

    public function details(Product $product)
    {
        $recommendations = Product::query()->inRandomOrder()->limit(5)->get();
        $title = 'Details';
        $active = 'details';

        return view('pages/frontend/details', compact(['recommendations', 'product', 'title', 'active']));
    }
}
