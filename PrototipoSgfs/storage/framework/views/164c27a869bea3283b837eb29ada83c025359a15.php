<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
    <?php $__env->startSection('navegacion'); ?>
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Empleado</h3>
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
                    <a href="<?php echo e(route('Empleado.create')); ?>"><button class="btn btn-outline-dark">Registrar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Numero Documento</th>
                            <th scope="col">Tipo Documento</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row"><?php echo e($dato->id); ?></th>
                            <td><?php echo e($dato->Nombres); ?></td>
                            <td><?php echo e($dato->Apellidos); ?></td>
                            <td><?php echo e($dato->NroDocumento); ?></td>
                            <td><?php echo e($dato->idTipoDocumento); ?></td>
                            <td><?php echo e($dato->Email); ?></td>
                            <td><?php echo e($dato->Telefono); ?></td>
                            <td><?php echo e($dato->estado); ?></td>
                                <td>
                                <a href="/empleado/<?php echo e($dato->id); ?>/edit"><button class="btn btn-outline-dark">Editar</button></a></td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/Admin/Empleado.blade.php ENDPATH**/ ?>