<?php

Route::get('/', function () {
    return view('inicio');
});
Route::get('/Contactenos', function () {
   return view('contactenos');
});

Route::get('/somos', function () {
    return view('QuienesSomos');
});


Route::get('/AdminEmpleado', function () {
    return view('Admin.Empleado');
});
Route::get('/RegistrarEmpleado', function () {
    return view('Admin.RegistrarEmpleado');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');


    //Empleado
    Route::get('/empleado','empleadosController@index');
    Route::POST('/empleado/guardar','empleadosController@store');
    Route::get('/empleado/listar','empleadosController@listar');
    Route::get('/empleado/{empleados}/edit','empleadosController@edit');
    Route::patch('/empleado/{id}/update','empleadosController@update');
    Route::resource('Empleado', 'empleadosController');


    //Servicios
    Route::get('/servicios','ServiciosController@index');
    Route::get('/servicios/listar','ServiciosController@listar');
    Route::get('/servicios/{servicios}/edit','ServiciosController@edit');
    Route::PATCH('/servicios/{id}/update','ServiciosController@update');
    Route::resource('servicios', 'ServiciosController');

    //Insumos
    Route::get('/insumos','InsumosController@index');
    Route::get('/insumos/listar','InsumosController@listar');
    Route::get('/insumos/{id}/edit','InsumosController@edit');
    Route::PATCH('/insumos/{id}/update','InsumosController@update');
    Route::get('/insumos/registro','InsumosController@ingresoInsumos');
    Route::resource('insumos','InsumosController');

    //Domicilio
    Route::get('/domicilio','DomicilioController@index');
    Route::get('/domicilio/{domicilio}/edit','DomicilioController@edit');
    Route::get('/domicilio/listar','DomicilioController@listar');
    Route::patch('/domicilio/{id}/update','DomicilioController@update');
    Route::resource('domicilio', 'DomicilioController');

    //Producto
    Route::get('/Adminproducto','ProductoController@index');
    Route::get('/producto/listar','ProductoController@listar');
    Route::get('/productoCreate','ProductoController@create');
    Route::get('/producto/{producto}/edit','ProductoController@edit');
    Route::patch('/producto/{id}/update','ProductoController@update');
    Route::get('producto/registro','ProductoController@ingresoProducto');
    Route::resource('producto', 'ProductoController');

    //Pedido
    Route::get('/pedido','PedidoController@index');
    Route::get('/pedido/listar','PedidoController@listar');
    Route::get('/pedido/{pedido}/info','PedidoController@info');
    Route::resource('/pedido','PedidoController');

    //Cliente
    Route::get('/cliente','ClienteController2@index');
    Route::get('/cliente/listar','ClienteController2@listar');
    Route::get('/cliente/{id}/Estado','ClienteController2@cambiarEstado');

    //Eventos
    Route::get('/adminEventos','EventosController@index');
    Route::get('/eventos/{id}/editar','EventosController@edit');
    Route::get('/eventos/listar','EventosController@listar');
    Route::patch('/eventos/{id}/actualizar','EventosController@update');
    Route::resource('eventos', 'EventosController');

    //Pedido Eventos
    Route::get('/pedidoeventos','AdminPedidoEventoController@index');
    Route::get('/pedidoevento/listar','AdminPedidoEventoController@listar');

//Reportes
Route::get('/cliente/reporte','ReportesController@reporteCliente');
Route::get('/producto/reporte','ReportesController@reporteProducto');
Route::get('/insumos/reporte','ReportesController@reporteInsumos');
Route::get('/pedido/{id}/reporte','ReportesController@reportePedido');
Route::get('/evento/{id}/reporte','ReportesController@reporteEvento');

//Rol
Route::get('/rol','AdminController@index');

//Compra Producto
Route::get('/producto','CompraProductos@index');
Route::get('/producto/{id}/compra','CompraProductos@PedirProducto');
Route::POST('/producto/{producto}/store','CompraProductos@GuardarProducto')->name('producto.guardar');

//Reserva eventos
Route::get('/Eventos','PedidoEventoController@index');
Route::get('/eventos/{id}/reserva','PedidoEventoController@verEvento');
Route::POST('/eventos/{id}/registrar','PedidoEventoController@store');
Route::resource('pedidoEvento', 'PedidoEventoController');
