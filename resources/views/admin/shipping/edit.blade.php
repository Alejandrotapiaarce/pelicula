@extends('admin.app')
@section('content')
    <form action="{{ route('shipping.update',$shipping) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese el Pais Destinario:
            </label>
            <input type="text" class="form-control" name="pais" value="{{ $shipping->pais }}" >
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Direccion de Envio:
            </label>
            <input type="text" class="form-control" name="address" value="{{ $shipping->address }}">
        </div>
        <div class="form-group">
            <label for="">
                Fecha del envio:
            </label>
            <input type="date" class="form-control" name="shipping_date" value="{{ $shipping->shipping_date }}">
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>
@endsection