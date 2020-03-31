<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
    <?php $__env->startSection('navbar'); ?>
    <div class="site-wrap">
    <header>
        <div class="breadcrumbs">
          <a href="#0/"><?php echo e(__('Empleado')); ?></a>
        </div>
      </header>
      <form id="box">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input placeholder="Buscar" id="buscar" type="text" class="form-control <?php $__errorArgs = ['buscar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="buscar" value="<?php echo e(old('buscar')); ?>" required autocomplete="buscar" autofocus>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-dark">Buscar</button>
                    </div>
                    <div class="col-2">
                        <a href="/registrarEmpleado"><button class="btn btn-outline-dark">Registrar</button></a>
                    </div>
                </div>
            </div>
      </form>
      <form id="box">
          <div class="container">
              <div class="col-12">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Tipo Documento</th>
                        <th scope="col">Numero de documento</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Jhoan Sebastian</td>
                        <td>Duque Zapata</td>
                        <td>CC</td>
                        <td>1000439946</td>
                        <td>Empleado</td>
                        <td>3197806869</td>
                        <td>jhoan1113@hotmail.com</td>
                        <td>
                            <button>Borrar</button>
                        <button>Editar</button>
                        <button>Reporte</button>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
              </div>
          </div>
      </form>
    <?php $__env->stopSection(); ?>
    </div>
</body>
</html>
<?php echo $__env->make('../layouts/Admin/appD.blade.php', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/admin/Empleado.blade.php ENDPATH**/ ?>