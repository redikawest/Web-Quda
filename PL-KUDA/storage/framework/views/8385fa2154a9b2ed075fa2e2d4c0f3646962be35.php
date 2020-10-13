<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome To <?php echo e(auth()->user()->name); ?> <?php echo e(auth()->user()->role); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/dashboards/dashboard.blade.php ENDPATH**/ ?>