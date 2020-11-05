@extends('admin.app')
@section('content')
    <form action="{{ route('product.update',$product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Producto:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese la cantidad del Producto:
            </label>
            <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese el precio del Producto:
            </label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
        </div>
        <button class="btn btn-primary">Actualizar Producto</button>
    </form>
@endsection