<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Game;
use App\Models\Serie;
use App\Models\Movie;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales= Sale::all();
        return view('admin.sale.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games=Game::all();
        $series=Serie::all();
        $movies=Movie::all();
        $shippings=Shipping::all();
        $products=Product::all();
        return view('admin.sale.create',compact('games','series','movies','products','shippings'));
    }

    public function detail($id)
    {
        return view('admin.sale.detail', [
            'sale' => Sale::find($id)
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
        $juegos = explode(',' , $request->juegos[0]);
        $peliculas = explode(',' , $request->peliculas[0]);
        $series = explode(',' , $request->series[0]);
        $productos = explode(',' , $request->productos[0]);
        $venta = new Sale();
        $venta->name = $request->name;
        $venta->cost = $request->cost;
        $venta->sale_date = $request->sale_date;
        $venta->save();
        if ( $request->juegos[0] ) {
            $venta->game()->attach($juegos);
        }
        if ( $request->peliculas[0] ) {
            $venta->movie()->attach($peliculas);
        }
        if ( $request->series[0] ) {
            $venta->serie()->attach($series);
        }
        if ( $request->productos[0] ) {
            $venta->product()->attach($productos);
        }
        return redirect()->route('sale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
