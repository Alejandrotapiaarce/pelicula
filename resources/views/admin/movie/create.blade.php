@extends('admin.app')
@section('content')
    <form action="{{ route('movie.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese Titulo de la Pelicula:
            </label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="">
                Genero:
            </label>
            <input type="text" class="form-control" name="gender">
        </div>
        <div class="form-group">
            <label for="">
                Idioma:
            </label>
            <input type="text" class="form-control" name="language">
        </div>
        <div class="form-group">
            <label for="">
                Año de Produccion:
            </label>
            <input type="text" class="form-control" name="production">
        </div>
        <div class="form-group">
            <label for="">
               Duracion:
            </label>
            <input type="text" class="form-control" name="duration">
        </div>
        <div class="form-group">
            <label for="">
               Calificacion:
            </label>
            <input type="text" class="form-control" name="qualification">
        </div>
        <div class="form-group">
            <label for="">
               Año de Estreno:
            </label>
            <input type="date" class="form-control" name="premiere">
        </div>
        <div class="form-group">
            <label for="">
               Resumen:
            </label>
            <input type="text" class="form-control" name="summary">
        </div>
        <div class="form-group">
            <label for="">
               Actor:
            </label>
            <select name="actor_id" class="custom-select">
                @foreach ($actors as $actor)
                    <option value="{{ $actor->id }}">
                        {{ $actor->name }}
                    </option>     
                @endforeach
               
            </select>
        </div>
        <div class="form-group">
            <label for="">
               Elije una Categoria:
            </label>
            <select name="category_id" class="custom-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>     
                @endforeach
               
            </select>
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection