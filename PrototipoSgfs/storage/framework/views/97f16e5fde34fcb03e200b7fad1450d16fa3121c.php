<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/css/admin/dashboard.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="#">Capullitos</a>
            <div id="close-sidebar">
              <i class="fas fa-times"></i>
            </div>
          </div>

          <!-- sidebar-header  -->
          <div class="sidebar-search">
            <div>
              <div class="input-group">
                <input type="text" class="form-control search-menu" placeholder="Search...">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar-search  -->
          <div class="sidebar-menu">
            <ul>
              <li class="header-menu">
                <span>Menu</span>
              </li>
              <li class="sidebar-dropdown">
              <a href="/empleado">
                  <span>Empleado</span>
                </a>
              </li>
              <li class="sidebar-dropdown">
                <a href="/AdminUsuarios">
                    <span>Cliente</span>
                  </a>
                </li>
              <li class="sidebar-dropdown">
                <a href="/servicios">
                  <span>Servicios</span>
                </a>
              </li>
              <li class="sidebar-dropdown">
                <a href="/insumos">
                  <span>Insumos</span>
                </a>
              </li>
              <li class="sidebar-dropdown">
                <a href="#">
                  <span>Reportes</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- sidebar-menu  -->
        </div>
      </nav>
      <?php echo $__env->yieldContent('navegacion'); ?>;
    </div>
   <script src="/js/Admin/dash.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/layouts/Admin/appD.blade.php ENDPATH**/ ?>