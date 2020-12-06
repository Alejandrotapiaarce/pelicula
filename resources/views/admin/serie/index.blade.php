@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de Series') }}
                    <a href="{{ route('serie.create') }}">Nuevo Serie</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Temporada</td>
                                <td>Idioma</td>
                                <td>Capitulos</td>
                                <td>Estreno</td>
                                <td>Genero</td>
                                <td>Categoria</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($series as $serie)
                                <tr>
                                    <td>{{ $serie->id }}</td>
                                    <td>{{ $serie->name }}</td>
                                    <td>{{ $serie->season }}</td>
                                    <td>{{ $serie->language }}</td>
                                    <td>{{ $serie->chapter }}</td>
                                    <td>{{ $serie->premiere }}</td>
                                    <td>{{ $serie->gender }}</td>
                                    <td>{{ $serie->category->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('serie.edit',$serie) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('serie.destroy',$serie) }}" method="POST">
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
                    <div class="fb-like" data-href="https://google.com" data-width="1000" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection