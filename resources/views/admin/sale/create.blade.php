@extends('admin.app')
@section('content')
<form action="{{ route('sale.store') }}" method="POST">
    @csrf
<div class="">
   
       
            <div class="card border shadow p-4">

                <div class="form-group">
                    <label for="">
                        Ingrese Nombre Cliente:
                    </label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">
                        Ingrese el Costo
                    </label>
                    <input type="text" class="form-control" name="gender">
                </div>
                <div class="form-group">
                    <label for="">
                        Fecha:
                    </label>
                    <input type="text" class="form-control" name="language">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary">
                                    Añadir Juego
                                </button>
                            </div>
                        </div>
                     
                     
                      
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary">
                            Añadir Serie
                        </button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary">
                            Añadir Pelicula
                        </button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary">
                            Añadir Producto
                        </button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>precio</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <button class="btn btn-primary btn-block">Guardar</button> 
   
</div>
    </form>
@endsection