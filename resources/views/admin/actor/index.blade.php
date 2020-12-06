@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de actores') }}
                    <a href="{{ route('actor.create') }}">Nuevo actor</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>ciudad</td>
                                <td>Fecha de Nacimiento</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actors as $actor)
                                <tr>
                                    <td>{{ $actor->id }}</td>
                                    <td>{{ $actor->name }}</td>
                                    <td>{{ $actor->city }}</td>
                                    <td>{{ $actor->birth }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('actor.edit',$actor) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('actor.destroy',$actor) }}" method="POST">
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