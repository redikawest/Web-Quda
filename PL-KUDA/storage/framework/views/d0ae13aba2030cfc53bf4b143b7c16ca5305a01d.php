<!doctype html>
<html lang="en">

<head>
    <title>PL-Kuda Web System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/linearicons/style.css')); ?>">




    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main.css')); ?>">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/demo.css')); ?>">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('admin/assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('admin/assets/img/favicon.png')); ?>">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
     <?php echo $__env->make('layouts.includes._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <?php echo $__env->make('layouts.includes._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="<?php echo e(asset('admin/assets/vendor/jquery/jquery.min.js')); ?>"></script>


    <script src="<?php echo e(asset('admin/assets/ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/scripts/klorofil-common.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/layouts/master.blade.php ENDPATH**/ ?>