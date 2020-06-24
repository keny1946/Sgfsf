;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>

<body>
    <?php $__env->startSection('navegacion'); ?>
        <main class="page-content">
            <?php if($errors->any()): ?>
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



                                <form method="POST" action="/empleado/<?php echo e($empleados->id); ?>/update " >
                                    <?php echo method_field('PATCH'); ?>
                                  <?php echo e(csrf_field()); ?>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombres</label>
                                        <input type="text" id="Nombres" name="Nombres" placeholder="<?php echo e($empleados->Nombres); ?>" value="<?php echo e($empleados->Nombres); ?>" class="form-control" <?php echo e(old('Nombres')); ?> onkeypress="return soloLetras(event)">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Apellidos</label>
                                          <input type="text" id="Apellidos" name="Apellidos" placeholder="<?php echo e($empleados->Apellidos); ?>" value="<?php echo e($empleados->Apellidos); ?>" name="apellidos" class="form-control" <?php echo e(old('Apellidos')); ?> onkeypress="return soloLetras(event)">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Tipo de Documento</label>
                                            <select id="IdTipoDocumento" name="IdTipoDocumento" class="form-control">
                                              <?php $__currentLoopData = $tipodocumento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($dato->id); ?>" name="tipodocumento"><?php echo e($dato->Nombre); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">NroDocumento</label>
                                          <input type="text" id="NroDocumento" name="NroDocumento" value="<?php echo e($empleados->NroDocumento); ?>" placeholder="<?php echo e($empleados->NroDocumento); ?>" class="form-control" <?php echo e(old('NroDocumento')); ?>>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Telefono</label>
                                          <input type="text" id="Telefono" name="Telefono" class="form-control" value="<?php echo e($empleados->Telefono); ?>" placeholder="<?php echo e($empleados->Telefono); ?>" <?php echo e(old('NroDocumento')); ?>>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Estado</label>
                                            <select id="estado" name="estado" class="form-control">
                                                <option value="activo" name="tipodocumento">Activo</option>
                                                <option value="inactivo" name="tipodocumento">Inactivo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" id="Email" name="Email" class="form-control" value="<?php echo e($empleados->Email); ?>" placeholder="<?php echo e($empleados->Email); ?>" <?php echo e(old('Email')); ?>>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Contraseña</label>
                                      <input type="password" id="Clave"  name="Clave" class="form-control" value="<?php echo e($empleados->Clave); ?>" placeholder="<?php echo e($empleados->Clave); ?>" <?php echo e(old('Contraseña')); ?>>
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

<?php echo $__env->make('layouts.Admin.appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/Admin/EditarEmpleado.blade.php ENDPATH**/ ?>