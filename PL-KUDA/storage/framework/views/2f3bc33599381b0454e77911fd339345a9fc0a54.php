<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <?php if(session('sukses')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('sukses')); ?>

                        </div>
                        <?php endif; ?>
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Header</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>TANGGAL HEADLINE</th>
                                        <th>JUDUL HEADLINE</th>
                                        <th>GAMBAR HEADLINE</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data_header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($header->tanggal_head); ?></td>
                                        <td><?php echo e($header->judul_head); ?></td>
                                        <td><img src="<?php echo e(asset('/images/'.$header->gambar_head)); ?>" width="64" height="64"></td>
                                        <td>
                                            <a href="/PL-Kuda/mheader/<?php echo e($header->id); ?>/edith" class="btn btn-warning btn-sm">Edit</a>

                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/mheader.blade.php ENDPATH**/ ?>