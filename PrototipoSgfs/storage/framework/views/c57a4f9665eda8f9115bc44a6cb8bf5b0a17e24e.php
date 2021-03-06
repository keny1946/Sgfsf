;
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
                            <form method="POST" action="<?php echo e(url('/servicios')); ?>" role="form">

                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" name="Nombre" id="Nombre" class="form-control <?php echo e($errors->has('Nombre') ? 'is-invalid':''); ?>" value="<?php echo e(old('Nombre')); ?>" onkeypress="return soloLetras(event)">
                                            <?php echo $errors->first('Nombre', '<div class="invalid-feedback">:message</div>'); ?>

                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Descripcion</label>
                                            <input type="text" id="Descripcion" name="Descripcion" class="form-control <?php echo e($errors->has('Descripcion') ? 'is-invalid':''); ?>" value="<?php echo e(old('Descripcion')); ?>">
                                            <?php echo $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>'); ?>

                                          </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Valor</label>
                                            <input type="text" id="Valor" name="Valor" class="form-control <?php echo e($errors->has('Valor') ? 'is-invalid':''); ?>" value="<?php echo e(old('Valor')); ?>">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Estado</label>
                                            <select id="Estado" name="Estado" class="form-control">
                                                <option value="activo">Activo</option>
                                                <option value="inactivo">Inactivo</option>
                                            </select>
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

<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/Admin/Servicios/create.blade.php ENDPATH**/ ?>