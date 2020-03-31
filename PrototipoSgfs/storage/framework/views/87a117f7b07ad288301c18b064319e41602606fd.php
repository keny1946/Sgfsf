;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empleado</title>
</head>
<?php if($errors->any()): ?>
  <div class="alert alert-danger" role="alert">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  </div>    
<?php endif; ?>
<body>
    <?php $__env->startSection('navegacion'); ?>
        <main class="page-content">
            <div class="container-fluid">
                <div id="box">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="<?php echo e(url('/empleado/store')); ?>">
                                  <?php echo e(csrf_field()); ?>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombres</label>
                                            <input type="text" id="nombres" name="nombres" class="form-control" <?php echo e(old('Nombres')); ?>>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Apellidos</label>
                                            <input type="text" id="apellidos" name="apellidos" class="form-control" <?php echo e(old('Apellidos')); ?>>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Tipo de Documento</label>
                                            <select id="tipodocumento" name="tipodocumento" class="form-control">
                                              <?php $__currentLoopData = $tipodocumento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($dato->id); ?>" name="tipodocumento"><?php echo e($dato->Nombre); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">NroDocumento</label>
                                            <input type="text" id="nrodocumento" name="nrodocumento" class="form-control" <?php echo e(old('NroDocumento')); ?>>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Telefono</label>
                                            <input type="text" id="telefono" name="telefono" class="form-control" <?php echo e(old('NroDocumento')); ?>>
                                          </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" <?php echo e(old('Email')); ?>>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Contraseña</label>
                                        <input type="password" id="clave" name="clave" class="form-control" <?php echo e(old('Contraseña')); ?>>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-dark btn-block">Registrar</button>
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
<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/Admin/CrearEmpleado.blade.php ENDPATH**/ ?>