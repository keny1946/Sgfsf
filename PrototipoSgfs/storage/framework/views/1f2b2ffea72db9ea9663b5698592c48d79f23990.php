<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-',app()->getLocale())); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/app.css">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="hero-anime">
	<div class="navigation-wrap bg-light start-header start-style " >
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">

						<a class="navbar-brand" href="/" target="_blank"><img id="logo" src="https://scontent-mia3-2.xx.fbcdn.net/v/t31.0-8/p960x960/17546812_1382683441782447_74691683942291193_o.png?_nc_cat=107&_nc_sid=85a577&_nc_ohc=SFX1rMxpu48AX-KnfCx&_nc_ht=scontent-mia3-2.xx&oh=fd7c48088f5948a0883c15d0f914f29a&oe=5EEE7774" width="20%" height="20%" alt=""></a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-5 py-md-0">
								<li class="nav-item pl-2 pl-md-0 ml-0 ml-md-2 active">
									<a class="nav-link" href="/" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>

								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/producto">Productos</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/Eventos">Eventos</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/somos" role="button" aria-haspopup="true" aria-expanded="false">Quienes somos</a>

								</li>

                                <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item pl-4 pl-md-0 ml-4 ml-md-6">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar Sesion')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item pl-4 pl-md-0 ml-4 ml-md-4">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrar')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown pl-4 pl-md-0 ml-4 ml-md-6">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->nombre); ?> <span class="caret"></span>
                                </a>
                                <div class="nav-item" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Cerrar Sesion')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

							</ul>
						</div>

					</nav>
				</div>
			</div>
		</div>
	</div>
	<?php echo $__env->yieldContent('navbar'); ?>
    <br>
    <br>
    <br>
    <br>
	<footer id="footer">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <address>
                        Gustavo Zapata Ayala
                        <br>
                        3113324691
                        <br>
                        capullitos2016@hotmail.com
                    </address>
                </div>
                <br>
                <div class="col-5">
                    <a href="https://www.facebook.com/pg/capullitosmedellin/photos/?ref=page_internal">
                        <img src="img/fb.png" id="icon"> </a>
                    <a href="https://www.instagram.com/capullitosmedellin/">
                        <img src="img/instagram.png" id="icon"> </a>
                </div>
            </div>
        </div>
        <br>
    </footer>
    <?php echo $__env->yieldContent('footer'); ?>;
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<a href="https://themeforest.net/user/ig_design/portfolio"      class="link-to-portfolio" target=”_blank”></a>
<script>


$(function() {
    var header = $(".start-style");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
            header.removeClass('start-style').addClass("scroll-on");
        } else {
            header.removeClass("scroll-on").addClass('start-style');
        }
    });
});

//Animation

$(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover

$('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
        }
});
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\PrototipoSgfs\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>