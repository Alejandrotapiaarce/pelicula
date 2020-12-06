@extends('admin.app')
@section('content')
    <form action="{{ route('opinion.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese Nombre:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">
                Fecha del Comentario:
            </label>
            <input type="date" class="form-control" name="commentary_date">
        </div>
        <div class="form-group">
            <label for="">
                Calificacion:
            </label>
            <input type="text" class="form-control" name="qualification">
        </div>
        <div class="form-group">
            <label for="">
                Ingrese Su Comentario:
            </label>
            <input type="text" class="form-control" name="commentary">
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection