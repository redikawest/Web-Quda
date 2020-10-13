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
                            <h3 class="panel-title">Edit Data Member</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mmember/<?php echo e($member->id); ?>/updatem" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input type="text" value="<?php echo e($member->nm_depan); ?>" name="nm_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input type="text" value="<?php echo e($member->nm_belakang); ?>"  name="nm_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Jenis Kelamin</label>
                                    <select class="form-control" id="exampleFormControlSelect" name="jk_member">
                                        <option value="L" <?php if($member->jk_member=='L'): ?> selected <?php endif; ?> >Laki-Laki</option>
                                        <option value="P" <?php if($member->jk_member=='P'): ?> selected <?php endif; ?> >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" value="<?php echo e($member->al_member); ?>" name="al_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Club</label>
                        <input type="text" name="nm_club" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Club" value="<?php echo e($member->nm_club); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Club</label>
                        <input type="file" name="gb_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo e($member->gb_member); ?>">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/editm.blade.php ENDPATH**/ ?>