<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos</title>
</head>
<body>
    <?php $__env->startSection('navbar'); ?>
    <div class="row">
        <img src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.0-9/87987396_2875819759135467_772038178390409216_o.jpg?_nc_cat=105&_nc_sid=6e5ad9&_nc_ohc=i_COLS6_li8AX901fkW&_nc_ht=scontent-mia3-2.xx&oh=a42b7cf4136e15cd8c1d3d3a3492f817&oe=5EB56F74" class="img-fluid" alt="Responsive image">
    </div>
    
    <template id="card">
        <div class="card">
          <div class="card-product">
            <a href="#" class="card-product__star">
              <i class="material-icons">favorite</i>
            </a>
            <div class="card-product__img">
              <img class="img-fluid" :src="img" alt="img">
            </div>
            <div class="card-product__body">
              <h4 class="card-product__name">
                Lorem ipsum
              </h4>
              <div class="card-product__price">
                <b>$5</b>
                <small>Save 33%</small>
              </div>
            </div>
          </div>
        </div>
      </template>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/eventos.blade.php ENDPATH**/ ?>