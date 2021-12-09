<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return view('pages/frontend/home', [
            'title' => 'Home',
            'active' => 'home'
        ]);
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
