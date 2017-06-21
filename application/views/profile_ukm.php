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
                            <h2>Profil UKM</h2>
                        </div>
                    </div>
                </div>
                <!--title-->
                <?php echo form_open('beranda/searching_ukm'); ?>
                <div class="form-group">
                    <div class="col-lg-2">  
                        <select name="nama_ukm"> 
                        <?php foreach ($ukm as $u) {
                         ?>
                            <option value="<?php echo $u->nama_ukm ?>"><?php echo $u->nama_ukm ?></option>
                            <?php foreach ($ukm_list as $row_list) {
                             ?>
                            <option value="<?php echo $row_list->nama_ukm ?>"><?php echo $row_list->nama_ukm ?></option>
                            <?php } ?>
                        <?php } ?>  
                        </select>
                    </div>
                    <div class="col-lg-2" >
                        <button type="submit" value="submit" name="submit" class="btn ink-reaction btn-raised btn-success">search</button>
                 <?php echo form_close();?>

                    </div>
                </div>

                <? echo form_open(); ?>
                <br>
                <div class="row blog-main-wrap masonary ">
                    <?php foreach ($ukm as $u) {
                    ?>

                    <div class="col-md-4 col-sm-4 blog-list ">
                        <figure class="mb-20">
                            <a href="#" class="overlay image-effect">
                                <img src="<?php echo base_url().'assets/logoUkm/'.$u->logo_ukm ?>" alt="">
                            </a>
                        </figure>

                        <h4 class="entry-title">
                            <a href="#"><?php echo $u->nama_ukm ?></a>
                        </h4>
                        <div class="post-content">
                            <p>
                               <?php echo $u->deskripsi; ?>
                            </p>
                        </div>
                        <!--post cntent-->

                        <a href="<?php echo base_url().'beranda/profile_ukm_lengkap/'.$u->id_ukm ?>" class="btn btn-outline-primary">Lihat profil lengkap<i class="fa fa-long-arrow-right"></i></a>
                    </div><!--single blog wrap-->
                    <?php
                    } ?>
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