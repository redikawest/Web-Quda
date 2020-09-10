@extends('layouts.master')

@section('content')
<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$data_member->getAvatar()}}" width="64" height="64" class="img-circle" alt="Avatar">
										<h3 class="name">{{$data_member->nm_depan}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											{{$data_member->horse->count()}}	<span>Jumlah Kuda</span>
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
											<li>Jenis Kelamin <span>{{$data_member->jk_member}}</span></li>
											<li>Alamat<span>{{$data_member->al_member}}</span></li>
											<li>Nama Club <span>{{$data_member->nm_club}}</span></li>
											
										</ul>
									</div>
									<div class="profile-info">
										
									</div>
									<div class="profile-info">
									
									</div>
									<div class="text-center"><a href="/PL-Kuda/mmember/{{$data_member->id}}/editm" class="btn btn-warning">Edit Profile</a></div>
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
											@foreach($data_member->horse as $hrs)
											<tr>
										
												<td>{{$hrs->kd_kuda}}</td>
												<td>{{$hrs->nama_kuda}}</td>
												<td>{{$hrs->jk_kuda}}</td>
											</tr>
											@endforeach
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
@stop