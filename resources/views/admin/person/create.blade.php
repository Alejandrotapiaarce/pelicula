@extends('admin.app')
@section('content')
    <form action="{{ route('person.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Cliente:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese el Apellido del Cliente:
            </label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Fecha de Nacimiento:
            </label>
            <input type="date" class="form-control" name="birth">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Su Telefono:
            </label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Direccion
            </label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Ciudad:
            </label>
            <input type="text" class="form-control" name="city">
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection