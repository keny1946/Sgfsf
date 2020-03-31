<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Empleado</title>
</head>
<body>
    <main class="page-content">
        <div class="container-fluid">
            <div id="box">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nombres</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Apellidos</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Numero de documento</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputState">Tipo Documento</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Seleccionar</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Correo Electronico</label>
                                    <input type="email" class="form-control" id="inputZip">
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Telefono</label>
                                    <input type="tel" class="form-control" id="inputZip">
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Contraseña</label>
                                    <input type="password" class="form-control" id="inputZip">
                                  </div>
                                </div>
                                
                                <button type="submit" class="btn btn-outline-dark">Registrar</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/Admin/RegistrarEmpleado.blade.php ENDPATH**/ ?>