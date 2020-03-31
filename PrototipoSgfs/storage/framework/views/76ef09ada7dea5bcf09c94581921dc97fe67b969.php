<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Principal</title>
</head>
<body>
    <?php $__env->startSection('navbar'); ?>
    <div class="container">
        <div class="row">
            <img src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.0-9/87987396_2875819759135467_772038178390409216_o.jpg?_nc_cat=105&_nc_sid=6e5ad9&_nc_ohc=i_COLS6_li8AX901fkW&_nc_ht=scontent-mia3-2.xx&oh=a42b7cf4136e15cd8c1d3d3a3492f817&oe=5EB56F74" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center">Titulo</p>
                <p class="text-center">Texto</p>
            </div>
        </div>
    </div>
    <hr>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="shop-card">
                    <div class="title">
                      Bouquet Floral
                    </div>
                    <div class="desc">
                      Bouquet Floral
                    </div>
                    <div class="img-fluid">
                        <img id="producto" class="rounded mx-auto d-block" src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.0-9/p720x720/88937764_2883633941687382_8866067557107367936_o.jpg?_nc_cat=107&_nc_sid=110474&_nc_ohc=OvvqQIj_RXwAX-vsEqR&_nc_ht=scontent-mia3-2.xx&_nc_tp=6&oh=d72e5d1d409726b4e0d582a09718175b&oe=5EE69BC5" />
                    </div>
                    <div class="cta">
                      <div class="price">$130000</div>
                      <button class="btn">Añadir al carro<span class="bg"></span></button>
                    </div>
                  </div>
                  <div class="bg"></div>

            </div>
            <div class="col-4">
                <div class="shop-card">
                    <div class="title">
                      Flor en gota de cristal
                    </div>
                    <div class="desc">
                      Flor en gota de cristal
                    </div>
                    <div class="img-fluid">
                        <img id="producto" class="rounded mx-auto d-block" src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/p720x720/88273844_2879369072113869_5956497019617935360_o.jpg?_nc_cat=104&_nc_sid=110474&_nc_ohc=QxRA5D50fdQAX_7eZey&_nc_ht=scontent-mia3-1.xx&_nc_tp=6&oh=a240747049bea4b604963e31c6a23770&oe=5EFA5DF0" />
                    </div>
                    <div class="cta">
                      <div class="price">$230000</div>
                      <button class="btn">Añadir al carro<span class="bg"></span></button>
                    </div>
                  </div>
                  <div class="bg"></div>

            </div>
        </div>
    </div>
    <footer>
        <div class="col-3">
            <p></p>
        </div>
    </footer>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMMPP\htdocs\PrototipoSgfs\resources\views/inicio.blade.php ENDPATH**/ ?>