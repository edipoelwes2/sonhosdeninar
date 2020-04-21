<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Product, Stock};
use App\Http\Requests\Admin\Stock as StockRequest;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stocks.index', [
            'stocks' => Stock::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stocks.form', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockRequest $request)
    {
        $stockCreate = Stock::create($request->all());

        return redirect()->route('admin.stocks.edit', [
            'stock' => $stockCreate->id,
        ])->with(['color' => 'green', 'message' => 'Entrada cadastrada com sucesso!']);
        
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
        $stock = Stock::where('id', $id)->first();

        return view('admin.stocks.form', [
            'products' => Product::all(),
            'stock' => $stock,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StockRequest $request, $id)
    {
        $stock = Stock::where('id', $id)->first();
        $stock->update($request->all());

        return redirect()->route('admin.stocks.edit', [
            'stock' => $stock->id,
        ])->with(['color' => 'green', 'message' => 'Entrada atualizada com sucesso!']);
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
