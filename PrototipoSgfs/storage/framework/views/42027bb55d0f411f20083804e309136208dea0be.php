<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php $__env->startSection('links'); ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
       <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
          
       </ul>
    </div>
 
  <div id="page-content-wrapper">
    <div class="container-fluid xyz">
       <div class="row">
          <div class="col-lg-12">
            <div class="col">
                <div class="item">
                  <form id="box">
                      <div class="container">
                          <div class="row">
                              <div class="col-12">
                                  <input placeholder="Buscar" id="buscar" type="text" class="form-control <?php $__errorArgs = ['buscar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="buscar" value="<?php echo e(old('buscar')); ?>" autocomplete="buscar" autofocus>
                                  
                                  <button class="btn btn-outline-dark">Buscar</button>
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
                                      <button class="btn tbn-outline-dark">Borrar</button>
                                  <button class="btn tbn-outline-dark">Editar</button>
                                  <button class="btn tbn-outline-dark">Reporte</button>
                                  </td>
                                </tr>
                                
                              </tbody>
                            </table>
                        </div>
                    </div>
                </form>
                </div>
                
              </div>
          </div>
       </div>
    </div>
 </div>
 <div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
     <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
        
        <li>
           <a href="/Empleado"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Empleado</a>
        </li>
        <li>
           <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Cliente</a>
        </li>
        <li>
           <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>Productos</a>
        </li>
        <li>
           <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Insumos</a>
        </li>
        <li>
           <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Servicios</a>
        </li>
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Eventos</a>
       </li>
     </ul>
  </div>
</div>
  <?php $__env->stopSection(); ?>
  
</body>
</html>

  
     <!-- /#sidebar-wrapper -->
     <!-- Page Content -->
  
     <!-- /#page-content-wrapper -->
  <!-- /#wrapper -->
  <!-- jQuery -->
  

</html>
<?php echo $__env->make('../layouts/Admin/appD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/admin/empleado.blade.php ENDPATH**/ ?>