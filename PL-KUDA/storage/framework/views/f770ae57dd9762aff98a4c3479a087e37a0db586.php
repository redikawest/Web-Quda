<title>PL-Kuda Web System</title>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">
<table class="table">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
   

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" style="text-align: center"><?php echo e($news->jd_berita); ?></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td></td>
                                    <td style="text-align: center"><img src="<?php echo e(asset('/images/'.$news->gb_berita)); ?>" width="400" height="300"></td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td></td>
                                    <td>
                                    <textarea name="is_berita" disabled  class="ckeditor" id="ckedtor"><?php echo e($news->is_berita); ?></textarea>
                                    </td>
                                    <td></td>
                                </tr>
                                <a href="/PL-Kuda/beranda"> <button class="btn btn-primary btn-lg btn-sm ">Beranda</button></a>
                                <a href="/PL-Kuda/news"> <button class="btn btn-primary btn-lg btn-sm">News</button></a>

                            </tbody>

                        </ol>
                    </nav>
           
                    <script src="<?php echo e(asset('admin/assets/ckeditor/ckeditor.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/viewmore.blade.php ENDPATH**/ ?>