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
                            <h3 class="panel-title">Data Event</h3>
                           
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>TANGGAL EVENT</th>
                                        <th>NAMA EVENT</th>
                                        <th>LOKASI EVENT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data_event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($event->tanggal_event); ?></td>
                                        <td><?php echo e($event->nama_event); ?></td>
                                        <td><?php echo e($event->lokasi_event); ?></td>
                                        <td>
                                            <a href="/PL-Kuda/mevent/<?php echo e($event->id); ?>/edite" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/PL-Kuda/mevent/<?php echo e($event->id); ?>/deletee" class="btn  btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/PL-Kuda/createe" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Event</label>
                        <input type="date" name="tanggal_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Event">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Event</label>
                        <input type="text" name="nama_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Lokasi Event</label>
                        <input type="text" name="lokasi_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi Event">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/mevent.blade.php ENDPATH**/ ?>