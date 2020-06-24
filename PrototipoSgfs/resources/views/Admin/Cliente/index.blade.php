@extends('layouts.Admin.appD')
@section('navegacion')
<main class="page-content">
    <div class="container-fluid">
        @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                @endif
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Cliente</h3>
                        <br>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-danger" href="/cliente/reporte">Generar Reporte</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="tbl_cliente" class="table" style="width: 100%">
                        <thead class="thead-dark">
                          <tr>
                            <th>#id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Estado</th>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="/js/datatables.min.js"></script>
    <script>
           $("#tbl_cliente").DataTable({
        processing: true,
        serverSide: true,
        ajax: '/cliente/listar',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'nombre', name: 'nombre'},
            {data: 'apellido', name: 'apellido'},
            {data: 'email', name: 'email'},
            {data: 'telefono', name: 'telefono'},
            {data: 'estado', name: 'estado'},
            {data: 'Estado', name: 'Estado', orderable: false, searchable: false},
        ]
    });

    </script>
@endsection
