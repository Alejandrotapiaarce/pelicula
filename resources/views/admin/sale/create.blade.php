@extends('admin.app')
@section('content')
<form action="{{ route('sale.store') }}" method="POST">
    @csrf
<div class="row justify-content-between">
   
        <div class="col-6">
            <div class="card border shadow p-4">

                <div class="form-group">
                    <label for="">
                        Ingrese Nombre Cliente:
                    </label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">
                        Ingrese el Costo
                    </label>
                    <input type="text" class="form-control" name="gender">
                </div>
                <div class="form-group">
                    <label for="">
                        Fecha:
                    </label>
                    <input type="text" class="form-control" name="language">
                </div>
                <div class="form-group">
                    <label for="">
                        Series:
                    </label>
                    <input type="text" class="form-control" name="production">
                </div>
                <div class="form-group">
                    <label for="">
                       Juego:
                    </label>
                    <input type="text" class="form-control" name="duration">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card border shadow p-4">

                <div class="form-group">
                    <label for="">
                       Pelicula:
                    </label>
                    <input type="text" class="form-control" name="qualification">
                </div>
                <div class="form-group">
                    <label for="">
                       Envio:
                    </label>
                    <select class="basic-multiple custom-select" name="states[]" multiple="multiple">
                        <option value="cu">cuchara</option>
                        <option value="pl">plato</option>
                        <option value="ta">tasa</option>
                        <option value="si">silla</option>
                        <option value="me">mesa</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-block">Guardar</button>
            </div>
        </div>   
   
</div>
    </form>
@endsection