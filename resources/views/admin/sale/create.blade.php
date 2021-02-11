@extends('admin.app')
@section('content')
    <form action="{{ route('sale.store') }}" method="POST" id="form_venta">
        @csrf
        <div class="card border shadow p-4">
            <h2>Registro de Venta</h2>
            <hr>
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">
                            Ingrese Nombre Cliente:
                        </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">
                            Ingrese el Costo Total
                        </label>
                        <input type="number" class="form-control" name="cost">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">
                            Fecha:
                        </label>
                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}" name="sale_date">
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col border shadow rounded p-2 mr-2">
                    <h4>Juegos</h4>
                    <hr>
                    <div class="row">
                        <div class="col mr-2">
                            <div class="form-group">
                                <label for="">Juego</label>
                                <select id="selectJuego" onchange="obtenerJuego(this)" class="custom-select">
                                    <option selected disabled>Seleccione...</option>
                                    @foreach ($games as $game)
                                        <option value="{{ $game->id }}">
                                            {{ $game->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" id="precioJuego">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control" id="cantidadJuego">
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary atajo btn-block" type="button" onclick="setJuego()">
                                Añadir Juego
                            </button>
                        </div>
                    </div>
                    <table class="table table-bordered" id="tabla-juego">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Sub - Total</th>
                        </tr>
                        </thead>
                        <tbody id="juego"></tbody>
                        <tfoot>
                        <tr>
                            <th colspan="4" class="text-center">Total a pagar:</th>
                            <th class="text-center totalJuego">0</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col border shadow rounded p-2">
                    <h4>Peliculas</h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Pelicula</label>
                                <select id="selectPelicula" onchange="obtenerPelicula(this)" class="custom-select">
                                    <option selected disabled>Seleccione...</option>
                                    @foreach ($movies as $movie)
                                        <option value="{{ $movie->id }}">
                                            {{ $movie->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" id="precioPelicula">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control" id="cantidadPelicula">
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary atajo btn-block" type="button" onclick="setPelicula()">
                                Añadir Pelicula
                            </button>
                        </div>
                    </div>
                    <table class="table table-bordered" id="tabla-pelicula">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Sub - Total</th>
                        </tr>
                        </thead>
                        <tbody id="pelicula"></tbody>
                        <tfoot>
                        <tr>
                            <th colspan="4" class="text-center">Total a pagar:</th>
                            <th class="text-center totalPelicula">0</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col border shadow rounded p-2 mr-2 mt-4">
                    <h4>Series</h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Serie</label>
                                <select id="selectSerie" onchange="obtenerSerie(this)" class="custom-select">
                                    <option selected disabled>Seleccione...</option>
                                    @foreach ($series as $serie)
                                        <option value="{{ $serie->id }}">
                                            {{ $serie->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" id="precioSerie">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control" id="cantidadSerie">
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary atajo btn-block" type="button" onclick="setSerie()">
                                Añadir Serie
                            </button>
                        </div>
                    </div>
                    <table class="table table-bordered" id="tabla-serie">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Sub - Total</th>
                        </tr>
                        </thead>
                        <tbody id="serie"></tbody>
                        <tfoot>
                        <tr>
                            <th colspan="4" class="text-center">Total a pagar:</th>
                            <th class="text-center totalSerie">0</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col border shadow rounded p-2 mt-4">
                    <h4>Productos</h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Producto</label>
                                <select id="selectProducto" onchange="obtenerProducto(this)" class="custom-select">
                                    <option selected disabled>Seleccione...</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" id="precioProducto">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control" id="cantidadProducto">
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary atajo btn-block" type="button" onclick="setProducto()">
                                Añadir Producto
                            </button>
                        </div>
                    </div>
                    <table class="table table-bordered" id="tabla-producto">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Sub - Total</th>
                        </tr>
                        </thead>
                        <tbody id="producto"></tbody>
                        <tfoot>
                        <tr>
                            <th colspan="4" class="text-center">Total a pagar:</th>
                            <th class="text-center totalProducto">0</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit" onclick="datos()">Registrar venta</button>
    </form>
@endsection

@push('styles')

@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        async function obtenerProducto(id) {
            var url = "{{ route('api.products', ['id' => 'temp']) }}";
            url = url.replace('temp', id.value);
            const result = await $.ajax({
                url: url,
                type: "GET",
                success: function (data) {
                    document.getElementById('precioProducto').value = data.price;
                    document.getElementById('cantidadProducto').value = data.quantity;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('error');
                }
            });
        }

        async function obtenerJuego(id) {
            var url = "{{ route('api.games', ['id' => 'temp']) }}";
            url = url.replace('temp', id.value);
            const result = await $.ajax({
                url: url,
                type: "GET",
                success: function (data) {
                    document.getElementById('precioJuego').value = data.price;
                    document.getElementById('cantidadJuego').value = data.quantity;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('error');
                }
            });
        }

        async function obtenerSerie(id) {
            var url = "{{ route('api.series', ['id' => 'temp']) }}";
            url = url.replace('temp', id.value);
            const result = await $.ajax({
                url: url,
                type: "GET",
                success: function (data) {
                    document.getElementById('precioSerie').value = data.price;
                    document.getElementById('cantidadSerie').value = data.quantity;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('error');
                }
            });
        }

        async function obtenerPelicula(id) {
            var url = "{{ route('api.movies', ['id' => 'temp']) }}";
            url = url.replace('temp', id.value);
            const result = await $.ajax({
                url: url,
                type: "GET",
                success: function (data) {
                    document.getElementById('precioPelicula').value = data.price;
                    document.getElementById('cantidadPelicula').value = data.quantity;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('error');
                }
            });
        }

        async function setJuego() {
            var selectJuego = document.getElementById("selectJuego");
            // obtenemos todo el tbody de la tabla
            var contenedor = $("#juego").html();
            // usamos la ruta de laravel y la guardamos en la url
            var url = "{{ route('api.games', ['id' => 'temp']) }}";
            // reemplazamo temp con id del producto del select
            url = url.replace('temp', selectJuego.value);
            // usamos ajax para consumir la api desde laravel
            const resultado = await $.ajax({
                url: url,
                type: "GET",
                success: function(data){
                    console.log(data);
                    var html = '';
                    html += '<tr>' +
                        '<td class="id">' + data.id + '</td>' +
                        '<td>' + data.name + '</td>' +
                        '<td class="cantidad">' + document.getElementById("precioJuego").value + '</td>' +
                        '<td class="text-center">' + document.getElementById("cantidadJuego").value + '</td>' +
                        '<td class="text-center">' + (document.getElementById("precioJuego").value * document.getElementById("cantidadJuego").value) + '</td>' +
                        '</tr>';
                    $('#juego').html(contenedor + html);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('error');
                }
            });
            var suma = 0;
            $('#juego tr').each(function () {
                suma += parseInt($(this).find('td').eq(4).text() || 0, 10) //numero de la celda 3
            });
            document.querySelector(".totalJuego").innerText = suma;
        }

        async function setPelicula() {
            var selectPelicula = document.getElementById("selectPelicula");
            // obtenemos todo el tbody de la tabla
            var contenedor = $("#pelicula").html();
            // usamos la ruta de laravel y la guardamos en la url
            var url = "{{ route('api.movies', ['id' => 'temp']) }}";
            // reemplazamo temp con id del producto del select
            url = url.replace('temp', selectPelicula.value);
            // usamos ajax para consumir la api desde laravel
            const resultado = await $.ajax({
                url: url,
                type: "GET",
                success: function(data){
                    var html = '';
                    html += '<tr>' +
                        '<td class="id">' + data.id + '</td>' +
                        '<td>' + data.title + '</td>' +
                        '<td class="cantidad">' + document.getElementById("precioPelicula").value + '</td>' +
                        '<td class="text-center">' + document.getElementById("cantidadPelicula").value + '</td>' +
                        '<td class="text-center">' + (document.getElementById("precioPelicula").value * document.getElementById("cantidadPelicula").value) + '</td>' +
                        '</tr>';
                    $('#pelicula').html(contenedor + html);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('error');
                }
            });
            var suma = 0;
            $('#pelicula tr').each(function () {
                suma += parseInt($(this).find('td').eq(4).text() || 0, 10) //numero de la celda 3
            });
            document.querySelector(".totalPelicula").innerText = suma;
        }

        async function setSerie() {
            var selectSerie = document.getElementById("selectSerie");
            // obtenemos todo el tbody de la tabla
            var contenedor = $("#serie").html();
            // usamos la ruta de laravel y la guardamos en la url
            var url = "{{ route('api.series', ['id' => 'temp']) }}";
            // reemplazamo temp con id del producto del select
            url = url.replace('temp', selectSerie.value);
            // usamos ajax para consumir la api desde laravel
            const resultado = await $.ajax({
                url: url,
                type: "GET",
                success: function(data){
                    var html = '';
                    html += '<tr>' +
                        '<td class="id">' + data.id + '</td>' +
                        '<td>' + data.name + '</td>' +
                        '<td class="cantidad">' + document.getElementById("precioSerie").value + '</td>' +
                        '<td class="text-center">' + document.getElementById("cantidadSerie").value + '</td>' +
                        '<td class="text-center">' + (document.getElementById("precioSerie").value * document.getElementById("cantidadSerie").value) + '</td>' +
                        '</tr>';
                    $('#serie').html(contenedor + html);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('error');
                }
            });
            var suma = 0;
            $('#serie tr').each(function () {
                suma += parseInt($(this).find('td').eq(4).text() || 0, 10) //numero de la celda 3
            });
            document.querySelector(".totalSerie").innerText = suma;
        }

        async function setProducto() {
            var selectProducto = document.getElementById("selectProducto");
            // obtenemos todo el tbody de la tabla
            var contenedor = $("#producto").html();
            // usamos la ruta de laravel y la guardamos en la url
            var url = "{{ route('api.products', ['id' => 'temp']) }}";
            // reemplazamo temp con id del producto del select
            url = url.replace('temp', selectProducto.value);
            // usamos ajax para consumir la api desde laravel
            const resultado = await $.ajax({
                url: url,
                type: "GET",
                success: function(data){
                    var html = '';
                    html += '<tr>' +
                        '<td class="id">' + data.id + '</td>' +
                        '<td>' + data.name + '</td>' +
                        '<td class="cantidad text-center">' + document.getElementById("precioProducto").value + '</td>' +
                        '<td class="venta text-center">' + document.getElementById("cantidadProducto").value + '</td>' +
                        '<td class="total text-center">' + (document.getElementById("precioProducto").value * document.getElementById("cantidadProducto").value) + '</td>' +
                        '</tr>';
                    $('#producto').html(contenedor + html);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('error');
                }
            });
            var suma = 0;
            $('#producto tr').each(function () {
                suma += parseInt($(this).find('td').eq(4).text() || 0, 10) //numero de la celda 3
            });
            document.querySelector(".totalProducto").innerText = suma;
        }

        function datos() {
            let filaId = [];
            document.querySelectorAll('#tabla-producto tbody tr').forEach(function (e) {
                filaId.push(e.querySelector('.id').innerText);
            });

            let filaId1 = [];
            document.querySelectorAll('#tabla-pelicula tbody tr').forEach(function (e) {
                filaId1.push(e.querySelector('.id').innerText);
            });

            let filaId2 = [];
            document.querySelectorAll('#tabla-juego tbody tr').forEach(function (e) {
                filaId2.push(e.querySelector('.id').innerText);
            });

            let filaId3 = [];
            document.querySelectorAll('#tabla-serie tbody tr').forEach(function (e) {
                filaId3.push(e.querySelector('.id').innerText);
            });

            //aquí instanciamos al componente padre
            var padre = document.getElementById("form_venta");
            //aquí agregamos el componente de tipo input
            var producto = document.createElement("input");
            //aquí indicamos que es un input de tipo text
            producto.type = 'hidden';
            producto.value = filaId;
            producto.name = 'productos[]';
            //y por ultimo agreamos el componente creado al padre
            padre.appendChild(producto);

            //aquí agregamos el componente de tipo input
            var pelicula = document.createElement("input");
            //aquí indicamos que es un input de tipo text
            pelicula.type = 'hidden';
            pelicula.value = filaId1;
            pelicula.name = 'peliculas[]';
            //y por ultimo agreamos el componente creado al padre
            padre.appendChild(pelicula);

            //aquí agregamos el componente de tipo input
            var juego = document.createElement("input");
            //aquí indicamos que es un input de tipo text
            juego.type = 'hidden';
            juego.value = filaId2;
            juego.name = 'juegos[]';
            //y por ultimo agreamos el componente creado al padre
            padre.appendChild(juego);

            //aquí agregamos el componente de tipo input
            var serie = document.createElement("input");
            //aquí indicamos que es un input de tipo text
            serie.type = 'hidden';
            serie.value = filaId;
            serie.name = 'series[]';
            //y por ultimo agreamos el componente creado al padre
            padre.appendChild(serie);

            //aquí agregamos el componente de tipo input
            var totalVenta = document.createElement("input");
            //aquí indicamos que es un input de tipo text
            totalVenta.type = 'hidden';
            totalVenta.value = 1;
            totalVenta.name = 'total_venta';
            //y por ultimo agreamos el componente creado al padre
            padre.appendChild(totalVenta);

        }

    </script>
@endpush
