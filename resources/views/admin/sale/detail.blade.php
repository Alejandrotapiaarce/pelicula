@extends('admin.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>{{ __('Detalle de Venta') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="border shadow p-3">
                                    <h5 class="text-center">Datos del cliente</h5>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Nombre del cliente:</td>
                                                <th>{{ $sale-> name }}</th>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Fecha de la venta:</td>
                                                <th>{{ $sale->sale_date }}</th>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Costo de la venta:</td>
                                                <th>{{ $sale->cost }}</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="border shadow p-3">
                                    <h5 class="text-center">Datos de la venta</h5>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Nombre</td>
                                            <td>Tipo</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sale->product as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>Producto</td>
                                            </tr>
                                        @endforeach
                                        @foreach($sale->game as $game)
                                            <tr>
                                                <td>{{ $game->id }}</td>
                                                <td>{{ $game->name }}</td>
                                                <td>Juego</td>
                                            </tr>
                                        @endforeach
                                        @foreach($sale->serie as $serie)
                                            <tr>
                                                <td>{{ $serie->id }}</td>
                                                <td>{{ $serie->name }}</td>
                                                <td>Serie</td>
                                            </tr>
                                        @endforeach
                                        @foreach($sale->movie as $movie)
                                            <tr>
                                                <td>{{ $movie->id }}</td>
                                                <td>{{ $movie->title }}</td>
                                                <td>Pelicula</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="body"></div> --}}
            </div>
        </div>
    </div>
@endsection
