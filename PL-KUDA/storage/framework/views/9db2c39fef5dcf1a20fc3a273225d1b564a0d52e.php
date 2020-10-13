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
                            <h3 class="panel-title">Data Berita</h3>

                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                         <th>GAMBAR BERITA</th>
                                        <th>TANGGAL BERITA</th>
                                        <th>JUDUL BERITA</th>
                                        <th>AKSI</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><img src="<?php echo e(asset('/images/'.$news->gb_berita)); ?>" width="64" height="64"></td>
                                        <td><?php echo e($news->tg_berita); ?></td>
                                        <td><?php echo e($news->jd_berita); ?></td>
                                        <td>
                                            <a href="/PL-Kuda/mnews/<?php echo e($news->id); ?>/editn" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/PL-Kuda/mnews/<?php echo e($news->id); ?>/deleten" class="btn  btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kuda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/PL-Kuda/createn" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Berita</label>
                        <input type="file" name="gb_berita" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Tanggal Berita</label>
                        <input type="date" name="tg_berita"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Berita">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Berita</label>
                        <input type="text" name="jd_berita"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Berita">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Isi Berita</label>
                       <textarea name="is_berita" class="ckeditor" id="ckedtor"></textarea>
                    </div>
                   

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post News</button>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/mnews.blade.php ENDPATH**/ ?>