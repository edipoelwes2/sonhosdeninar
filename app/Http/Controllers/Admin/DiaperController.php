<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Product, Category, Brand, Size};
use App\Http\Requests\Admin\Product as ProductRequest;
use Illuminate\Http\Request;

class DiaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $diapers = Product::where('category_id', 1)->get();
        return view('admin.products.diapers.index', [
            'diapers' => $diapers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.diapers.form', [
            'category' => Category::where('id', 1)->first(),
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
        $DiaperCreate = Product::create($request->all());
        
        return redirect()->route('admin.diapers.edit', [
            'diaper' => $DiaperCreate->id,
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
        $diaper = Product::where('id', $id)->first();
        
        return view('admin.products.diapers.form', [
            'diaper' => $diaper,
            'category' => Category::where('id', 1)->first(),
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
        $diaper = Product::where('id', $id)->first();
        $diaper->update($request->all());

        return redirect()->route('admin.diapers.edit', [
            'diaper' => $diaper->id,
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
