<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <?php $__env->startSection('navegacion'); ?>
    <main class="page-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="/AdminEmpleado">
                        <button id="Op" class="btn btn-outline-dark" type="submit">
                            <img id="im" src="https://pngimage.net/wp-content/uploads/2018/05/empleados-icono-png-7.png"/>
                        </button>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/AdminCliente">
                        <button id="Op" class="btn btn-outline-dark" type="submit">
                            <img id="im" src="https://image.flaticon.com/icons/png/512/72/72648.png"/>
                            <h6>Clientes</h6>
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
  </main>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/Admin/usuarios.blade.php ENDPATH**/ ?>