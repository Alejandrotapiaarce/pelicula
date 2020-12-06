@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de Opiniones') }}
                    <a href="{{ route('opinion.create') }}">Opinion</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Fecha comentario</td>
                                <td>Calificacion</td>
                                <td>Comentario</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($opinions as $opinion)
                                <tr>
                                    <td>{{ $opinion->id }}</td>
                                    <td>{{ $opinion->name }}</td>
                                    <td>{{ $opinion->commentary_date }}</td>
                                    <td>{{ $opinion->qualification }}</td>
                                    <td>{{ $opinion->commentary }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('opinion.edit',$opinion) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('opinion.destroy',$opinion) }}" method="POST">
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