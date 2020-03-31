<?php

Route::get('/', function () {
    return view('inicio');
});
Route::get('/Producto', function () {
    return view('productos');
});
Route::get('/Contactenos', function () {
   return view('contactenos');
});
Route::get('/Eventos', function () {
    return view('eventos');
});
Route::get('/somos', function () {
    return view('QuienesSomos');
});

Route::get('/AdminUsuarios', function () {
    return view('Admin.usuarios');
});
Route::get('/AdminCliente', function(){
    return view('Admin.Cliente');
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
//Route::get('/empleado/create','empleadosController@create');
//Route::get('/empleado/{id}','empleadosController@show');
//Route::post('/empleado/store','empleadosController@store');
Route::get('/empleado/{empleados}/edit','empleadosController@edit');
Route::put('/empleado/{empleados}','empleadosController@update');
Route::delete('/empleado/{id}', 'empleadosController@destroy');
Route::resource('Empleado', 'empleadosController');


//Servicios
Route::get('/servicios','ServiciosController@index');
Route::get('/servicios/{servicios}/edit','ServiciosController@edit');
Route::PATCH('/servicios/{id}/update','ServiciosController@update');
Route::resource('servicios', 'ServiciosController');

//Insumos
Route::get('/insumos','InsumosController@index');
Route::get('/insumos/{id}/edit','InsumosController@edit');
Route::PATCH('/insumos/{id}/update','InsumosController@update');
Route::resource('insumos','InsumosController');

