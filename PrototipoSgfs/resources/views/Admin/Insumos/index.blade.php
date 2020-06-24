@extends('layouts.Admin.appD')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insumos</title>
</head>
<body>
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
                        <h3 class="text-center">Insumos</h3>
                        <br>
                </div>
            </div>


            <br>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                    <a href="{{route('insumos.create')}}"><button class="btn btn-outline-dark">Registrar</button></a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                            Ingresar Entradas
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ingresar Insumos</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/insumos/registro" role="form">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Insumos</label>
                                        <select name="insumos" id="insumos" id="inputState" class="form-control">
                                          <option selected>--Seleccionar Insumo--</option>
                                          @foreach ($insumos as $item)
                                            <option value="{{$item->id}}" >{{$item->Nombre}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Cantidad a ingresar</label>
                                        <input class="form-control" type="number" id="cantidad" name="cantidad" />
                                    </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                  <button type="submit"  class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="tbl_insumos" class="table" style="width: 100%">
                        <thead class="thead-dark">
                          <tr>
                            <th>#id</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
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
           $("#tbl_insumos").DataTable({
        processing: true,
        serverSide: true,
        ajax: '/insumos/listar',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'Foto', name: 'Foto', orderable: false, searchable: false},
            {data: 'Nombre', name: 'Nombre'},
            {data: 'Valor', name: 'Valor'},
            {data: 'Descripcion', name: 'Descripcion'},
            {data: 'cantidad', name: 'cantidad'},
            {data: 'Estado', name: 'Estado'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false}
        ]
    });
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    </script>
    @endsection

</body>
</html>
