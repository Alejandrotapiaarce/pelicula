@extends('admin.app')
@section('content')
    <form action="{{ route('game.update',$game) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">
                Ingrese Nombre del Juego:
            </label>
            <input type="text" class="form-control" name="name" value="{{ $game->name }}">
        </div>
        <div class="form-group">
            <label for="">
                Tipo del Juego:
            </label>
            <input type="text" class="form-control" name="type" value="{{ $game->type }} ">
        </div>
        <div class="form-group">
            <label for="">
                Año del Juego:
            </label>
            <input type="text" class="form-control" name="game_year" value="{{ $game->game_year }} ">
        </div>
        <div class="form-group">
            <label for="">
                Requerimiento del Juego:
            </label>
            <input type="text" class="form-control" name="requirements" value="{{ $game->requirements }} ">
        </div>
        <div class="form-group">
            <label for="">
               Plataforma:
            </label>
            <input type="text" class="form-control" name="platform" value="{{ $game->platform }} ">
        </div>
        <div class="form-group">
            <label for="">
               Elije una Categoria:
            </label>
            <select name="category_id" class="custom-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id ==$game->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>     
                @endforeach
               
            </select>
        </div>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection