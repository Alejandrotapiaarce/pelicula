@extends('admin.app')
@section('content')
    <form action="{{ route('actor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Actor:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Lugar de Nacimiento:
            </label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Fecha de Nacimiento:
            </label>
            <input type="date" class="form-control" name="birth">
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection