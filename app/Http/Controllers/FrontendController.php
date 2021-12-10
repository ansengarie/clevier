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
        $products = Product::latest()->filter(request(['products', 'title', 'active']))->paginate(9)->withQueryString();
        $title = 'Products';
        $active = 'products';

        return view('pages/frontend/products', compact('products', 'title', 'active'));
    }

    public function categories(Request $request)
    {
        $categories = Category::query()->get();
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

    public function details(Request $request)
    {
        return view('pages/frontend/details', [
            'title' => 'Details',
            'active' => 'details'
        ]);
    }
}
