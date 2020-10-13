<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>PL-Kuda Web System</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/linearicons/style.css')); ?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main.css')); ?>">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/demo.css')); ?>">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('admin/assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('admin/assets/img/favicon.png')); ?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo e(asset('admin/assets/img/logo_new.png')); ?>" alt="Klorofil Logo"></div>
								<p class="lead">Login Ke Akun Anda</p>
							</div>
							<form class="form-auth-small" action="/PL-Kuda/postlogin" method="post">
                                
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="form-control" id="signin-email"  placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="signin-password"  placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							
							</form>
							<a href="/PL-Kuda/beranda"><button type="submit" class="btn btn-link btn-lg btn-block btn-sm " style="padding-top: 30px;">BERANDA</button></a>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sistem Informasi Olahraga Berkuda</h1>
							<p>by Quda</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/login.blade.php ENDPATH**/ ?>