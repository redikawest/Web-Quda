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
                            <h3 class="panel-title">Edit Data Header</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mheader/<?php echo e($data_header->id); ?>/updateh" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Headline</label>
                                    <input type="text" name="tanggal_head" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Event" value="<?php echo e($data_header->tanggal_head); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Headline</label>
                                    <input type="text" name="judul_head" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event" value="<?php echo e($data_header->judul_head); ?>">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gambar Headline</label>
                                    <input type="file" name="gambar_head" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi Event" value="<?php echo e($data_header->gambar_head); ?>">
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/edith.blade.php ENDPATH**/ ?>