@extends('admin.app')
@section('content')
    <form action="{{ route('opinion.store') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese Nombre:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $opinion->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Fecha del Comentario:
            </label>
            <input type="date" class="form-control" name="commentary_date" value="{{ $opinion->commentary_date }}">
        </div>
        <div class="form-group">
            <label for="">
                Calificacion:
            </label>
            <input type="text" class="form-control" name="qualification" value="{{ $opinion->qualification }}">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Su Comentario:
            </label>
            <input type="text" class="form-control" name="commentary" value="{{ $opinion->commentary }}">
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>
@endsection