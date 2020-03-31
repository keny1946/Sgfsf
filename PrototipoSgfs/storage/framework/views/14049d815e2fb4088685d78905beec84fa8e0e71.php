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
  <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
</button>
    </div>
    <!-- navbar-header-->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
          <li class="active">
             <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
             </button>
          </li>
       </ul>
    </div>
    <!-- bs-example-navbar-collapse-1 -->
 </nav>
 
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script>
  $("#menu-toggle").click(function(e) {
 e.preventDefault();
 $("#wrapper").toggleClass("toggled");
});
$("#menu-toggle-2").click(function(e) {
 e.preventDefault();
 $("#wrapper").toggleClass("toggled-2");
 $('#menu ul').hide();
});

function initMenu() {
 $('#menu ul').hide();
 $('#menu ul').children('.current').parent().show();
 //$('#menu ul:first').show();
 $('#menu li a').click(
    function() {
       var checkElement = $(this).next();
       if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
          return false;
       }
       if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
          $('#menu ul:visible').slideUp('normal');
          checkElement.slideDown('normal');
          return false;
       }
    }
 );
}
$(document).ready(function() {
 initMenu();
});
</script>
<?php echo $__env->yieldContent('links'); ?>
</body>
</html><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views////layouts/Admin/appD.blade.php ENDPATH**/ ?>