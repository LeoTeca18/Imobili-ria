<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('paper')); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo e(asset('paper')); ?>/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Extra details for Live View on GitHub Pages -->

    <title>
        <?php echo e(__('Paper Dashboard by Creative Tim')); ?>

    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo e(asset('paper')); ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('paper')); ?>/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(asset('paper')); ?>/demo/demo.css" rel="stylesheet" />

</head>

<body class="<?php echo e($class); ?>">

    <?php if(auth()->guard()->check()): ?>
    <?php echo $__env->make('layouts.page_templates.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.navbars.fixed-plugin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
    <?php echo $__env->make('layouts.page_templates.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('paper')); ?>/js/core/jquery.min.js"></script>
    <script src="<?php echo e(asset('paper')); ?>/js/core/popper.min.js"></script>
    <script src="<?php echo e(asset('paper')); ?>/js/core/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('paper')); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?php echo e(asset('paper')); ?>/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo e(asset('paper')); ?>/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('paper')); ?>/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('paper')); ?>/demo/demo.js"></script>
    <!-- Sharrre libray -->
    <script src="../assets/demo/jquery.sharrre.js"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php echo $__env->make('layouts.navbars.fixed-plugin-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\Imobiliaria\resources\views/layouts/app.blade.php ENDPATH**/ ?>