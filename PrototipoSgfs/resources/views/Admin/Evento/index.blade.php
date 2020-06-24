@extends('layouts.Admin.appD');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento</title>
</head>
<body>
    @section('navegacion')
        <div class="container-fluid">
            <main class="page-content">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                @endif

                <br>
                <div class="container-fluid">
                    <div id="box">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('eventos.create')}}"><button class="btn btn-outline-dark ">Registrar</button></a>
                                <br>
                                </div>
                                    <br>

                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <table id="tbl_eventos" class="table" style="width: 100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Descripcion</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Imagen</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="/js/datatables.min.js"></script>
    <script>
        $("#tbl_eventos").DataTable({
        processing: true,
        serverSide: true,
        ajax: '/eventos/listar',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'nombre', name: 'nombre'},
            {data: 'descripcion', name: 'descripcion'},
            {data: 'estado', name: 'estado'},
            {data: 'imagen', name: 'imagen', orderable: false, searchable: false},
            {data: 'editar', name: 'editar', orderable: false, searchable: false},
            {data: 'Reporte', name: 'Reporte', orderable: false, searchable: false},
        ]
    });
    </script>
    @endsection
</body>
</html>
