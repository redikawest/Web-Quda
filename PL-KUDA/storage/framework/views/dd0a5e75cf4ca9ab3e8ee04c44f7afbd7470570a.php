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
                            <h3 class="panel-title">Edit Data Kuda</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mhorse/<?php echo e($horse->id); ?>/updateho" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                    <div class="form-group" >
                        <label for="exampleInputEmail1">Nama Kuda</label>
                        <input type="text" name="nama_kuda" value="<?php echo e($horse->nama_kuda); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kuda">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Status Kuda</label>
                        <select class="form-control" id="exampleFormControlSelect" name="st_kuda">
                            <option value="R" <?php if($horse->st_kuda=='R'): ?> selected <?php endif; ?> >Register</option>
                            <option value="U" <?php if($horse->st_kuda=='U'): ?> selected <?php endif; ?> >Unregister</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect" name="jk_kuda">
                            <option value="J"  <?php if($horse->jk_kuda=='J'): ?> selected <?php endif; ?> >Jantan</option>
                            <option value="B" <?php if($horse->jk_kuda=='B'): ?> selected <?php endif; ?>>Betina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Warna Kuda</label>
                        <input type="text" name="wr_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Warna Kuda" value="<?php echo e($horse->wr_kuda); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pejantan</label>
                        <input type="text" name="pj_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pejantan" value="<?php echo e($horse->pj_kuda); ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Induk</label>
                        <input type="text" name="in_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Induk" value="<?php echo e($horse->in_kuda); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tl_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo e($horse->tl_kuda); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemilik</label>
                        <input type="text" name="np_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pemilik" value="<?php echo e($horse->np_kuda); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Club</label>
                        <input type="text" name="nc_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Club" value="<?php echo e($horse->nc_kuda); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Kuda</label>
                        <input type="file" name="gb_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo e($horse->gb_kuda); ?>">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/editho.blade.php ENDPATH**/ ?>