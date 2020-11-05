@extends('admin.app')
@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">
                Ingrese el nombre de la categoria:
            </label>
            <input type="text" class="form-control" name="name">
        </div>
        <button class="btn btn-primary">Guardar categoria</button>
    </form>
@endsection