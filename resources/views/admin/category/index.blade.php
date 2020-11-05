@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de categorias') }}
                    <a href="{{ route('category.create') }}">Nueva categoria</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('category.edit',$category) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('category.destroy',$category) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="badge badge-danger" style="border: none;">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
