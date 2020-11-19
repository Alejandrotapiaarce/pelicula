@extends('admin.app')
@section('content')
    <form action="{{ route('shipping.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el Pais Destinario:
            </label>
            <input type="text" class="form-control" name="pais">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Direccion de Envio:
            </label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="form-group">
            <label for="">
                Fecha del envio:
            </label>
            <input type="date" class="form-control" name="shipping_date">
        </div>
        <button class="btn btn-primary">Guardar Envio</button>
    </form>
@endsection