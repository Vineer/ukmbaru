<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/11-enstruct-blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2017 11:54:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>|| &nbsp; InterUKM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.html" /> 

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:400,500,700" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/lib/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/lib/hover.css">

    <!-- Style Sheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-ui.min.css" />  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/swiper.min.css" /> 

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css" />

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

    <main>
        <section class="blog-block primary-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="main-title la page-title wow fadeInUp">
                            <h2> profil UKM lengkap</h2>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row blog-main-wrap">
                <?php foreach ($ukm as $u) {
                ?>

                    <div class="col-md-8 col-sm-8 ">
                        <div class="blog-wrap blog-sngle pb-0 mb-50 ">
                            <figure class="post-thumbnail overlay">
                                <img src="<?php echo $u->logo_ukm?>" alt="Blog image">
                            </figure>
                            <!--figure-->

                            <h4 class="entry-title">
                                <a href="#"><?php echo $u->nama_ukm ?></a>
                            </h4>
                            <!--title-->

                            <div class="post-info">
                                <span class="post-author">
                                        Slogan : <a href="#"><?php echo $u->slogan; ?></a>
                                    </span>
                                <span class="post-date">
                                        Sekre  : <a href="#"><?php echo $u->sekre_ukm; ?></a>
                                    </span>
                                
                            </div>
                            <!--post info-->

                            <div class="post-content">
                                <p>
                                    <?php echo $u->deskripsi; ?>
                                </p>
                            </div>
                            <!--post content-->

                        </div>
                        <!--single blog-->

                    </div>
                    <?php
                 } ?>
                    <!--blog left-->

                    <div class="col-md-4 col-sm-4 ">
                        <div class="sidebar ">
                            <div class="widget widget_search">
                                <form action="#">
                                    <input type="text" placeholder="Enter Keywords">
                                    <button type="submit"><i class=" fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--search-->

                            <div class="widget widget_categories ">
                                <h4 class="widget-title">Daftar UKM</h4>
                                <ul>
                                <?php foreach ($ukm as $u) {
                                 ?>

                                    <li><a href="#"><?php echo $u->nama_ukm ?></a></li>
                                <?php
                                } ?>
                                </ul>
                            </div>

                            <div class="widget widget_recent_entries ">
                                <h4 class="widget-title">Artikel terbaru</h4>
                                <ul>
                                <?php foreach ($current_artikel as $ca) {
                                 ?>

                                    <li>
                                        <a href="#"><?php echo $ca->judul ?></a>
                                        <span class="post-date">By: <?php echo $ca->penerbit ?></span>
                                    </li>
                                <?php
                                } ?>
                                </ul>
                            </div>
                            <!--recent post-->
                        </div>
                        <!--sidebar-->
                    </div>
                    <!--blog right-->
                </div>
                <!--blog wrap-->
            </div>
        </section>
        <!--blog wrap-->
    </main>
    <!--main ends-->

       <?php
        include 'footer.php';
    ?>
    <!--footer-->

    <!--back to top-->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    
    <!-- Js libery -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/tether.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
    
    <!--jquery ui-->
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
    
    <!-- slider js -->
    <script src="<?php echo base_url() ?>assets/js/jquery.bxslider.min.js"></script> 
    <script src="<?php echo base_url() ?>assets/js/swiper.jquery.min.js"></script>     
    
    <!-- wow -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    
    <!-- Parallax -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.scrollTo-1.4.2-min.js"></script>
    
    <!--datepicker-->
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
    
    <!--counter-->
    <script src="<?php echo base_url() ?>assets/js/jquery.countTo.js"></script>
    
    <!--smooth scrollling-->
    <script src="<?php echo base_url() ?>assets/js/jQuery.scrollSpeed.js"></script>
    
    <!--Costom js-->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>
<!-- Mirrored from themes.webavenue.com.au/enstruct/html/11-enstruct-blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2017 11:54:53 GMT -->

</html>