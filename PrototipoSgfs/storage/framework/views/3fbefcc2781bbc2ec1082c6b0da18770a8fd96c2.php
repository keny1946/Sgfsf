;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Insumo</title>
</head>

<body>
    <?php $__env->startSection('navegacion'); ?>
        <main class="page-content">
            <?php if(count($errors)>0): ?>
                <div class="alert alert-danger" role="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
                 </div>
             <?php endif; ?>
            <div class="container-fluid">
                <div id="box">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <form method="POST" action="<?php echo e(route('insumos.store')); ?>" role="form">

                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" id="Nombre" name="Nombre" class="form-control <?php echo e($errors->has('Nombre')?'is-invalid':''); ?>" value="<?php echo e(old('Nombres')); ?>">
                                            <?php echo $errors->first('Nombre','<div class="invalid-feedback">:message</div>'); ?>

                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                            <input type="text" id="Descripcion" name="Descripcion" class="form-control <?php echo e($errors->has('Nombre')?'is-invalid':''); ?>" value="<?php echo e(old('Descripcion')); ?>">
                                            <?php echo $errors->first('Descripcion','<div class="invalid-feedback">:message</div>'); ?>

                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Valor</label>
                                            <input type="text" id="Valor" name="Valor" class="form-control <?php echo e($errors->has('Valor')?'is-invalid':''); ?>" value="<?php echo e(old('Apellidos')); ?>">
                                            <?php echo $errors->first('Valor','<div class="invalid-feedback">:message</div>'); ?>

                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputState">Estado</label>
                                            <select id="Estado" name="Estado" class="form-control">
                                                <option>--Seleccione el estado--</option>
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Foto</label>
                                            <input type="file" class="form-control <?php echo e($errors->has('Foto')?'is-invalid':''); ?>" name="Foto" id="Foto" value="">
                                            <?php echo $errors->first('Foto','<div class="invalid-feedback">:message</div>'); ?>

                                          </div>

                                    </div>
                                    <input type="submit" class="btn btn-outline-dark btn-block" value="Registrar">
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/Admin/Insumos/create.blade.php ENDPATH**/ ?>