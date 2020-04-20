<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Product, Category, Brand, Size};
use App\Http\Requests\Admin\Product as ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        $products = Product::where('category_id', 1)->get();

        // dd($products);
        
        return view('admin.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.form', [
            'categories' => Category::all(['id', 'name']),
            'brands' => Brand::all(['id', 'name']),
            'sizes' => Size::all(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $ProductCreate = Product::create($request->all());
        
        return redirect()->route('admin.products.edit', [
            'product' => $ProductCreate->id,
        ])->with(['color' => 'green', 'message' => 'Produto cadastrado com sucesso!']);
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
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        
        return view('admin.products.form', [
            'product' => $product,
            'categories' => Category::all(['id', 'name']),
            'brands' => Brand::all(['id', 'name']),
            'sizes' => Size::all(['id', 'name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::where('id', $id)->first();
        // $product->fill($request->all());
        $product->update($request->all());

        return redirect()->route('admin.products.edit', [
            'product' => $product->id,
        ])->with(['color' => 'green', 'message' => 'Produto atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
