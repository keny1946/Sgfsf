<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insumos</title>
</head>
<body>
    <?php $__env->startSection('navegacion'); ?>
    <main class="page-content">
        <div class="container-fluid">
    <div id="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3 class="text-center">Insumos</h3>
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
                    <a href="<?php echo e(route('insumos.create')); ?>"><button class="btn btn-outline-dark">Registrar</button></a>
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
                            <th>#id</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th></th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $insumos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insumo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                <img src="<?php echo e(asset('storage/'.$insumo->Foto)); ?>" class="img-thumbnail img-fluid" alt="" width="120">
                                </td>
                                <td><?php echo e($insumo->Nombre); ?></td>
                                <td><?php echo e($insumo->Valor); ?></td>
                                <td><?php echo e($insumo->Descripcion); ?></td>
                                <td><?php echo e($insumo->Estado); ?></td>
                                <td>

                                <a href="/insumos/<?php echo e($insumo->id); ?>/edit"><button class="btn btn-outline-dark">Editar</button></a></td>

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

<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/Admin/Insumos/index.blade.php ENDPATH**/ ?>