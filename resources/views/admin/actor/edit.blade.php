@extends('admin.app')
@section('content')
    <form action="{{ route('actor.update',$actor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese el nombre del Actor:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $actor->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese lugar de Nacimiento:
            </label>
            <input type="text" class="form-control" name="city" value="{{ $actor->city }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Fecha de Nacimiento:
            </label>
            <input type="date" class="form-control" name="birth" value="{{ $actor->birth }}">
        </div>
        <button class="btn btn-primary">Actualizar Datos</button>
    </form>
@endsection