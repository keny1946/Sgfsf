<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
</head>
<body>
    <?php $__env->startSection('navegacion'); ?>
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Servicios</h3>
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
                    <a href="<?php echo e(url('servicios/create')); ?>"><button class="btn btn-outline-dark">Registrar</button></a>
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
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($servicio->id); ?></td>
                                <td><?php echo e($servicio->Nombre); ?></td>
                                <td><?php echo e($servicio->Descripcion); ?></td>
                                <td><?php echo e($servicio->Valor); ?></td>
                                <td><?php echo e($servicio->Estado); ?></td>
                                <td>
                                <a class="btn btn-light" href="/servicios/<?php echo e($servicio->id); ?>/edit">Editar</a>

                                </td>
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

<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/Admin/Servicios/index.blade.php ENDPATH**/ ?>