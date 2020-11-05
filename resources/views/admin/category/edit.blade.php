@extends('admin.app')
@section('content')
<form action="{{ route('category.update',$category) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">
            Ingrese el nombre de la categoria:
        </label>
        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
    </div>
    <button class="btn btn-primary">Actualizar categoria</button>
</form>
    
@endsection