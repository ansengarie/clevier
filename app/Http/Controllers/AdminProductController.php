<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/dashboard/admin-products/index', [
            'title' => 'All Furniture',
            'active' => 'all-products',
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $admin_product)
    {
        if (auth()->user()->is_admin == 0) {
            abort(403);
        }

        return view('pages.dashboard.admin-products.edit', [
            'active' => 'all-products',
            'admin_product' => $admin_product,
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
    public function update(Request $request, Product $admin_product)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if ($request->slug != $admin_product->slug) {
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

        Product::where('id', $admin_product->id)
            ->update($validatedData);

        return redirect('dashboard/admin-products/')->with('success', 'Products has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $admin_product)
    {
        if ($admin_product->image) {
            Storage::delete($admin_product->image);
        }
        Product::destroy($admin_product->id);

        return redirect('dashboard/admin-products/')->with('success', 'product has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
