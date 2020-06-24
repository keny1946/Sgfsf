<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/css/admin/dashboard.css">
   <link rel="stylesheet" href="/css/datatables.min.css">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
                <li class="header-menu ">
                  <span>Menu</span>
                </li>
                <li class="sidebar-dropdown nav-item active">
                <a href="/empleado">
                    <span>Empleado</span>
                  </a>
                </li>
                <li class="sidebar-dropdown nav-item active">
                  <a href="/cliente">
                      <span>Cliente</span>
                    </a>
                  </li>
                <li class="sidebar-dropdown nav-item active">
                  <a href="/servicios">
                    <span>Servicios</span>
                  </a>
                </li>
                <li class=" sidebar-dropdown nav-item active">
                  <a href="/Adminproducto">
                    <span>Producto</span>
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                  </a>
                </li>
                <li class=" sidebar-dropdown nav-item active">
                    <a href="/adminEventos">
                      <span>Eventos</span>
                      <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class=" sidebar-dropdown nav-item active">
                    <a href="/pedidoeventos">
                      <span>Pedidos Eventos</span>
                      <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </a>
                  </li>
                <li class="sidebar-dropdown nav-item active">
                  <a href="/pedido">
                    <span>Pedido</span>
                  </a>
                </li>
                <li class="sidebar-dropdown nav-item active">
                  <a href="/insumos">
                    <span>Insumos</span>
                  </a>
                </li>
                <li class="sidebar-dropdown nav-item active">
                  <a href="/domicilio">
                    <span>Domicilio</span>
                  </a>
                </li>

                <li class="sidebar-dropdown">
                    <div class="nav-item" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
              </ul>
            </div>
            <!-- sidebar-menu  -->
          </div>
        </nav>
        @yield('navegacion');
      </div>



    </div>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js">
    </script>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>


    <script>
        function soloLetras(e){
           key = e.keyCode || e.which;
           tecla = String.fromCharCode(key).toLowerCase();
           letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
           especiales = "8-37-39-46";

           tecla_especial = false
           for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("select").select2(
            );
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   <script src="/js/Admin/dash.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/datatables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
