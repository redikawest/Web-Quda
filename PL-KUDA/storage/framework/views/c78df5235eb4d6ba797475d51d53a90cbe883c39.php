<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Judul Web -->
    <title>PL-Kuda Web System</title>

    <!-- Ambil File Icon Di Folder Public -->
    <link rel="icon" href="<?php echo e(asset('../img/core-img/favicon.ico')); ?>">

    <!-- Ambil File CSS Di Folder Public -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">


</head>

<body>

    <!-- Bola Animasi Masuk Website -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- Header Menu Area -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Logo Tulisan -->
                    <a href="/PL-Kuda/beranda" class="nav-brand">SI KUDA</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="/PL-Kuda/beranda">Beranda</a></li>
                                    <li><a href="#">Event</a>
                                        <ul class="dropdown">
                                            <li><a href="/PL-Kuda/race">Race Event</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="active"><a href="/PL-Kuda/news">News</a></li>
                                    <li><a href="/PL-Kuda/horse">Horse</a></li>
                                  
                                    <li><a href="/PL-Kuda/login">Login</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Search Konten -->
                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- ##### Area Race Event ##### -->
    <div class="hero-area owl-carousel">
        <div class="container" style="padding-top: 100px;">
            <h4>Daftar Event Race 2019</h4>
            <p>Jadwal Pacuan Kuda dapat berubah sewaktu-waktu (Kami akan selalu update).</p>
            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>Tanggal Event</th>
                        <th>Nama Event</th>
                        <th>Lokasi Event</th>

                    </tr>

                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($event->tanggal_event); ?></td>
                        <td><?php echo e($event->nama_event); ?></td>
                        <td><?php echo e($event->lokasi_event); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </div>


    <!-- ##### Area Footer ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <p></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="/quda">Home</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Ambil JQuery di Folder Public -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo asset('../js/jquery/jquery-2.2.4.min.js'); ?>"></script>
    <!-- Popper js -->
    <script src="<?php echo asset('../js/bootstrap/popper.min.js'); ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo asset('../js/bootstrap/bootstrap.min.js'); ?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo asset('../js/plugins/plugins.js'); ?>"></script>
    <!-- Active js -->
    <script src="<?php echo asset('../js/active.js'); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/race.blade.php ENDPATH**/ ?>