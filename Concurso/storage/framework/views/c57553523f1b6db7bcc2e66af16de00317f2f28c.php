<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' type='text/css' href='css/uikit.css'>
<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
<link rel='stylesheet href='css/princessSophia.blade.css'/>
<link rel='stylesheet' type='text/css' href='css/style.css'>

<body>   
<div>
    <div class='uk-position-relative'>
        </div>
            <div class='uk-position-top'>
                <div uk-sticky='bottom: #transparent-sticky-navbar'>
                <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
                      <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href='/'><img id='logu' src='imgs/logo.png'/></a>
                            </li>
                            <li>
                                <a href="/Concursos">Concursos</a>
                            </li>
                            <li>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(url('/home')); ?>">Home</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('login')); ?>">Login</a>
                                <?php if(Route::has('register')): ?>
                                 <li>
                                    <a href="<?php echo e(route('register')); ?>">Register</a>
                                 </li>
                                <?php endif; ?>
                            <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </nav>
              </div>
           </div>
        </div>
    <br><br><br><br><br><br><br><br><br>
        <center><h1 style="color: #000000;">Nossos Concursos</h1></center>
    <br><br>
    <div class="uk-child-width-1-3@s uk-text-center" uk-grid>
            <?php $__currentLoopData = $concursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concursos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="uk-card uk-card-hover uk-card-body">
                        <h3 class="uk-card-title"><b>Nome:</b><?php echo e($concursos->getNome()); ?></h3>
                        <p><b>Edital:</b> <?php echo e($concursos->getEdital()); ?></p>
                        <p><b>Data de Vencimento das Inscrições:</b> <?php echo e($concursos->getVencimento()); ?></p>
                        <p><b>Data da Final: </b><?php echo e($concursos->getFinal()); ?></p>
                        <a href="<?php echo e(route('paginaE' ,$concursos->getId())); ?>"><button class="uk-button uk-button-default">Editar</button></a>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
    <br><br>
</body>
<script src='js/jquery.js'></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/uikit-icons.js"></script>
<?php /* /home/lucas/Desktop/Concurso/resources/views/concursos.blade.php */ ?>