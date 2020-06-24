<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

  <title>SGSF</title>

  <!-- Favicons -->
  <link href="img/logo_big.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/app.css" rel="stylesheet">
  <link href="css/app.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>
<body>

  <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <li class="mt">
          <a href="/admin">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
            </a>
        </li>
        <li class="sub-menu">
          <a  href="javascript:;">
            <i class="fas fa-user-alt"></i>
            <span>Usuarios</span>
            </a>
          <ul class="sub">
            <li><a href="/adminEmpleado">Empleados</a></li>
            <li><a href="/adminCliente">Clientes</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a class="active" href="javascript:;">
            <i class="fas fa-box-open"></i>
            <span>Productos</span>
            </a>
          <ul class="sub">
            <li><a href="/adminProductos">Productos</a></li>
            <li><a href="/adminInsumos">Insumos</a></li>
            <li><a href="/adminServicios">Servicios</a></li>
            <li><a href="/adminEventos">Eventos</a></li>
            <li><a href="portafolio.html#">Catalogo</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="far fa-file-alt"></i>
            <span>Pedidos</span>
            </a>
          <ul class="sub">
            <li><a href="/adminPedidoP">Pedido productos</a></li>
            <li><a href="/adminPedidoEv">Pedido eventos</a></li>

          </ul>
        </li>
        
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>

    @yield('links')

    <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
  </script>
  <script type="application/javascript">
    
  </script>
</body>
</html>