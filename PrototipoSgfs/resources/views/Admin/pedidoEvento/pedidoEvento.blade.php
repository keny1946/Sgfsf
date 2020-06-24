@extends('layouts.Admin.appD')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedido de Eventos</title>
</head>
<body>

    @section('navegacion')
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Pedido Eventos</h3>
                        <br>
                </div>
            </div>
<br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="tbl_pedido" class="table" style="width: 100%">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Evento</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Fecha</th>
                            <th scope="col"></th>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="/js/datatables.min.js"></script>
    <script>
           $("#tbl_pedido").DataTable({
        processing: true,
        serverSide: true,
        ajax: '/pedidoevento/listar',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'nombre', name: 'nombre'},
            {data: 'evento', name: 'evento'},
            {data: 'Nombre', name: 'Nombre'},
            {data: 'descripcion', name: 'descripcion'},
            {data: 'valor', name: 'valor'},
            {data: 'fecha', name: 'fecha'},
            {data: 'reporte', name: 'reporte', orderable: false, searchable: false}
        ]
    });
    </script>
    @endsection
</body>
