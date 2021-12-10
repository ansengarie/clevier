<?php

namespace App\Http\Controllers;

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
        return view('pages/frontend/products', [
            'title' => 'Products',
            'active' => 'products'
        ]);
    }

    public function categories(Request $request)
    {

        return view('pages/frontend/categories', [
            'title' => 'Categories',
            'active' => 'categories'
        ]);
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
