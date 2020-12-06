@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de Ventas') }}
                    <a href="{{ route('sale.create') }}">Nueva Venta</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Costo</td>
                                <td>Fecha</td>
                                <td>Serie </td>
                                <td>Juego</td>
                                <td>Pelicula</td>
                                <td>Producto</td>
                                <td>Envio</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                                <tr>
                                    <td>{{ $sale->id }}</td>
                                    <td>{{ $sale->name }}</td>
                                    <td>{{ $sale->cost }}</td>
                                    <td>{{ $sale->sale_date }}</td>
                                    <td>{{ $sale->serie->name }}</td>
                                    <td>{{ $sale->game->name }}</td>
                                    <td>{{ $sale->movie->name }}</td>
                                    <td>{{ $sale->product->name }}</td>
                                    <td>{{ $sale->shipping->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('sale.edit',$sale) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('sale.destroy',$sale) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="badge badge-danger" style="border: none;">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection