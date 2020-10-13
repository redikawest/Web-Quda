<?php $__env->startSection('content'); ?>
<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="<?php echo e($data_member->getAvatar()); ?>" width="64" height="64" class="img-circle" alt="Avatar">
										<h3 class="name"><?php echo e($data_member->nm_depan); ?></h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											<?php echo e($data_member->horse->count()); ?>	<span>Jumlah Kuda</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Info Member</h4>
										<ul class="list-unstyled list-justify">
											<li>Jenis Kelamin <span><?php echo e($data_member->jk_member); ?></span></li>
											<li>Alamat<span><?php echo e($data_member->al_member); ?></span></li>
											<li>Nama Club <span><?php echo e($data_member->nm_club); ?></span></li>
											
										</ul>
									</div>
									<div class="profile-info">
										
									</div>
									<div class="profile-info">
									
									</div>
									<div class="text-center"><a href="/PL-Kuda/mmember/<?php echo e($data_member->id); ?>/editm" class="btn btn-warning">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								
								<!-- END AWARDS -->
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Kuda</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kode Kuda</th>
												<th>Nama Kuda</th>
												<th>Jenis Kelamin</th>
											
											</tr>
										</thead>
										<tbody>
											<?php $__currentLoopData = $data_member->horse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hrs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
										
												<td><?php echo e($hrs->kd_kuda); ?></td>
												<td><?php echo e($hrs->nama_kuda); ?></td>
												<td><?php echo e($hrs->jk_kuda); ?></td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/admin/viewm.blade.php ENDPATH**/ ?>