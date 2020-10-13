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
                            <h3 class="panel-title">Data Kuda</h3>

                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
 
                                    <tr>
                                    <th>KODE KUDA</th>
                                        <th>NAMA KUDA</th>
                                        <th>STATUS KUDA</th>
                                        <th>JENIS KELAMIN KUDA</th>
                                        <th>WARNA KUDA</th>
                                        <th>PEJANTAN </th>
                                        <th>INDUK</th>
                                        <th>TANGGAL LAHIR KUDA</th>
                                        <th>GAMBAR KUDA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data_horse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($horse->kd_kuda); ?></td>
                                        <td><?php echo e($horse->nama_kuda); ?></td>
                                        <td><?php echo e($horse->st_kuda); ?></td>
                                        <td><?php echo e($horse->jk_kuda); ?></td>
                                        <td><?php echo e($horse->wr_kuda); ?></td>
                                        <td><?php echo e($horse->pj_kuda); ?></td>
                                        <td><?php echo e($horse->in_kuda); ?></td>
                                        <td><?php echo e($horse->tl_kuda); ?></td>
                                        <td><img src="<?php echo e(asset('/images/'.$horse->gb_kuda)); ?>" width="64" height="64"></td>
                                       
                                        <?php if(auth()->user()->role=='admin'): ?>
                                        <td>
                                            <a href="/PL-Kuda/mhorse/<?php echo e($horse->id); ?>/editho" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/PL-Kuda/mhorse/<?php echo e($horse->id); ?>/deleteho" class="btn  btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
                                        </td>
                                        <?php endif; ?>
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
                <form action="/PL-Kuda/createho" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group" >
                        <label for="exampleInputEmail1">Kode Kuda</label>
                        <input type="text" name="kd_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Kuda">
                    </div>
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Nama Kuda</label>
                        <input type="text" name="nama_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kuda">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Status Kuda</label>
                        <select class="form-control" id="exampleFormControlSelect" name="st_kuda">
                        <?php if(auth()->user()->role=='admin'): ?>
                            <option value="R">Register</option>
                            <?php endif; ?>
                        <option value="U">Unregister</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect" name="jk_kuda">
                            <option value="J">Jantan</option>
                            <option value="B">Betina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Warna Kuda</label>
                        <input type="text" name="wr_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Warna Kuda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pejantan</label>
                        <input type="text" name="pj_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pejantan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Induk</label>
                        <input type="text" name="in_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Induk">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tl_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemilik</label>
                        <input type="text" name="np_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pemilik">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Club</label>
                        <input type="text" name="nc_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Club">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Kuda</label>
                        <input type="file" name="gb_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/mhorse.blade.php ENDPATH**/ ?>