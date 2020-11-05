@extends('admin.app')
@section('content')
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Producto:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese la cantidad del Producto:
            </label>
            <input type="text" class="form-control" name="quantity">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese el precio del Producto:
            </label>
            <input type="text" class="form-control" name="price">
        </div>
        <button class="btn btn-primary">Guardar Producto</button>
    </form>
@endsection