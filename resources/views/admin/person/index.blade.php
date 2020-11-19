@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de Clientes') }}
                    <a href="{{ route('person.create') }}">Nuevo cliente</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>apellido</td>
                                <td>Fecha nacimiento</td>
                                <td>Telefono</td>
                                <td>Direccion</td>
                                <td>Ciudad</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($people as $person)
                                <tr>
                                    <td>{{ $person->id }}</td>
                                    <td>{{ $person->name }}</td>
                                    <td>{{ $person->lastname }}</td>
                                    <td>{{ $person->birth }}</td>
                                    <td>{{ $person->phone }}</td>
                                    <td>{{ $person->address }}</td>
                                    <td>{{ $person->city }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('person.edit',$person) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('person.destroy',$person) }}" method="POST">
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