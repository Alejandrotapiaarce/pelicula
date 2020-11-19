@extends('admin.app')
@section('content')
    <form action="{{ route('person.update',$person) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Cliente:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $person->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese el Apellido del Cliente:
            </label>
            <input type="text" class="form-control" name="lastname" value="{{ $person->lastname }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Fecha de Nacimiento:
            </label>
            <input type="date" class="form-control" name="birth" value="{{ $person->birth }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Su Telefono:
            </label>
            <input type="text" class="form-control" name="phone" value="{{ $person->phone }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Direccion
            </label>
            <input type="text" class="form-control" name="address" value="{{ $person->address }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Ciudad:
            </label>
            <input type="text" class="form-control" name="city" value="{{ $person->city }}">
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection