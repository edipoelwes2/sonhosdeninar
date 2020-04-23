<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Brand, Category, Product};
use App\Http\Requests\Admin\Product as ProductRequest;
use Illuminate\Http\Request;

class WipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.products.wipes.index', [
            'wipes' => Product::where('category_id', 2)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.products.wipes.form', [

            'category' => Category::where('id', 2)->first(),
            'brands' => Brand::all(['id', 'name']),

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
        $productCreate = Product::create($request->all());

        return redirect()->route('admin.wipes.edit', [
            'wipe' => $productCreate->id,
        ])->with(['color' => 'green', 'message' => 'Produco cadastrado com sucesso"']);
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

        return view('admin.products.wipes.form', [
            'wipe' => Product::where('id', $id)->first(),
            'category' => Category::where('id', 2)->first(),
            'brands' => Brand::all(['id', 'name']),

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
        $wipe = Product::where('id', $id)->first();
        $wipe->update($request->all());

        return redirect()->route('admin.wipes.edit', [
            'wipe' => $wipe->id,
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
