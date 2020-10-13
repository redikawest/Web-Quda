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
                            <h3 class="panel-title">Edit Data Berita</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mnews/<?php echo e($news->id); ?>/updaten" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Masukkan Gambar Berita</label>
                                    <input type="file" name="gb_berita"  value="<?php echo e($news->gb_berita); ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Berita</label>
                                    <input type="date" name="tg_berita" value="<?php echo e($news->tg_berita); ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Berita">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul Berita</label>
                                    <input type="text" name="jd_berita" value="<?php echo e($news->jd_berita); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Berita">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Isi Berita</label>
                                    <textarea name="is_berita"  class="ckeditor" id="ckedtor"><?php echo e($news->is_berita); ?></textarea>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/editn.blade.php ENDPATH**/ ?>