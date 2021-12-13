<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/dashboard/products/index', [
            'title' => 'My Furniture',
            'active' => 'my-furniture',
            'products' => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/dashboard/products/create', [
            'categories' => Category::all(),
            'active' =>  'my-furniture'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:3024',
            'description' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Product::create($validatedData);
        return redirect('/dashboard/products/')->with('success', 'New product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   
        if ($product->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('pages.dashboard.products.show', [
            'active' => 'my-furniture',
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if ($product->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('pages.dashboard.products.edit', [
            'active' => 'my-furniture',
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('products-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect('dashboard/products/')->with('success', 'Products has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);

        return redirect('dashboard/products/')->with('success', 'product has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
