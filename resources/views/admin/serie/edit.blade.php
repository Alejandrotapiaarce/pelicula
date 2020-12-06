@extends('admin.app')
@section('content')
    <form action="{{ route('serie.update',$serie) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese Nombre de la Serie:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $serie->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Temporada:
            </label>
            <input type="text" class="form-control" name="season" value="{{ $serie->season }} ">
        </div>
        <div class="form-group">
            <label for="">
                Idioma:
            </label>
            <input type="text" class="form-control" name="language" value="{{ $serie->language }} ">
        </div>
        <div class="form-group">
            <label for="">
                Capitulo:
            </label>
            <input type="text" class="form-control" name="chapter" value="{{ $serie->chapter }} ">
        </div>
        <div class="form-group">
            <label for="">
               Año de Estreno:
            </label>
            <input type="text" class="form-control" name="premiere" value="{{ $serie->premiere }} ">
        </div>
        <div class="form-group">
            <label for="">
               Genero:
            </label>
            <input type="text" class="form-control" name="gender" value="{{ $serie->gender }} ">
        </div>
        <div class="form-group">
            <label for="">
               Elije una Categoria:
            </label>
            <select name="category_id" class="custom-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id ==$serie->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>     
                @endforeach
               
            </select>
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>
@endsection