@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de Juego') }}
                    <a href="{{ route('game.create') }}">Nuevo Juego</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Tipo</td>
                                <td>Año</td>
                                <td>Requerimiento</td>
                                <td>Plataforma</td>
                                <td>Catogoria</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{ $game->id }}</td>
                                    <td>{{ $game->name }}</td>
                                    <td>{{ $game->type }}</td>
                                    <td>{{ $game->game_year }}</td>
                                    <td>{{ $game->requirements }}</td>
                                    <td>{{ $game->platform }}</td>
                                    <td>{{ $game->category->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('game.edit',$game) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('game.destroy',$game) }}" method="POST">
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