@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de productos') }}
                    <a href="{{ route('product.create') }}">Nueva producto</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>cantidad</td>
                                <td>precio</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('product.edit',$product) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('product.destroy',$product) }}" method="POST">
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