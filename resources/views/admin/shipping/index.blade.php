@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Lista de envios') }}
                    <a href="{{ route('shipping.create') }}">Nuevo Envio</a>
                </div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>pais</td>
                                <td>direccion</td>
                                <td>fecha de envio</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shippings as $shipping)
                                <tr>
                                    <td>{{ $shipping->id }}</td>
                                    <td>{{ $shipping->pais}}</td>
                                    <td>{{ $shipping->address }}</td>
                                    <td>{{ $shipping->shipping_date }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('shipping.edit',$shipping) }}" class="badge badge-success mr-3">Editar</a>
                                            <form action="{{ route('shipping.destroy',$shipping) }}" method="POST">
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