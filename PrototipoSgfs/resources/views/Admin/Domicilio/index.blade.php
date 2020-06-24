@extends('layouts.Admin.appD')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domicilio</title>
</head>
<body>
    @section('navegacion')
    <main class="page-content">
    <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Domicilio</h3>
                        <input type="text" class="form-control" placeholder="Buscar">
                        <br>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <button class="btn"><img id="icon" src="https://i.ya-webdesign.com/images/buscar-imagenes-png-4.png" /></button>
                    </div>
                    <div class="col-4">
                    <a href="{{route('domicilio.create')}}"><button class="btn btn-outline-dark">Registrar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="tbl_domicilio" class="table" style="width: 100%">
                        <thead class="thead-dark">
                          <tr>
                            <th>#id</th>
                            <th>Ciudad</th>
                            <th>Direccion</th>
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
           $("#tbl_domicilio").DataTable({
        processing: true,
        serverSide: true,
        ajax: '/domicilio/listar',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'Ciudad', name: 'Ciudad'},
            {data: 'Direccion', name: 'Direccion'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false}
        ]
    });
    </script>
    @endsection
</body>
</html>
