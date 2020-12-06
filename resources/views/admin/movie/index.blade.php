@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de Peliculas') }}
                    <a href="{{ route('movie.create') }}">Nuevo Pelicula</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Titulo</td>
                                <td>Genero</td>
                                <td>Idioma</td>
                                <td>Año de Produccion</td>
                                <td>Duracion</td>
                                <td>Calificacion</td>
                                <td>Fecha de Estreno</td>
                                <td>Resumen</td>
                                <td>Actor</td>
                                <td>Categoria</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{ $movie->id }}</td>
                                    <td>{{ $movie->title }}</td>
                                    <td>{{ $movie->gender }}</td>
                                    <td>{{ $movie->language }}</td>
                                    <td>{{ $movie->production }}</td>
                                    <td>{{ $movie->duration }}</td>
                                    <td>{{ $movie->qualification }}</td>
                                    <td>{{ $movie->premiere }}</td>
                                    <td>{{ $movie->summary }}</td>
                                    <td>{{ $movie->actor->name }}</td>
                                    <td>{{ $movie->category->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('movie.edit',$movie) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('movie.destroy',$movie) }}" method="POST">
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