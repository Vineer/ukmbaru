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
<script>
function highlightStar(obj,id) {
    removeHighlight(id);        
    $('.demo-table #tutorial-'+id+' li').each(function(index) {
        $(this).addClass('highlight');
        if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
            return false;   
        }
    });
}

function removeHighlight(id) {
    $('.demo-table #tutorial-'+id+' li').removeClass('selected');
    $('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
    $('.demo-table #tutorial-'+id+' li').each(function(index) {
        $(this).addClass('selected');
        $('#tutorial-'+id+' #rating').val((index+1));
        if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
            return false;   
        }
    });
    $.ajax({
    url: "<?= base_url() ?>beranda/rating",
    data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
    type: "POST"
    });
}

function resetRating(id) {
    if($('#tutorial-'+id+' #rating').val() != 0) {
        $('.demo-table #tutorial-'+id+' li').each(function(index) {
            $(this).addClass('selected');
            if((index+1) == $('#tutorial-'+id+' #rating').val()) {
                return false;   
            }
        });
    }
} 
</script>
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
                            <h2>Artikel Selengkapnya</h2>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row blog-main-wrap">
                <?php foreach ($artikel as $art) {
                ?>

                    <div class="col-md-8 col-sm-8 ">
                        <div class="blog-wrap blog-sngle pb-0 mb-50 ">
                            <figure class="post-thumbnail overlay">
                                <img src="<?php echo base_url() ?>assets/images/blog-big-1.jpg" alt="Blog image">
                            </figure>
                            <!--figure-->

                            <h4 class="entry-title">
                                <a href="#"><?php echo $art->judul ?></a>
                            </h4>
                            <!--title-->

                            <div class="post-info">
                                <span class="post-author">
                                       <i class="fa fa-user"></i> Dipublikasikan: <a href="#"><?php echo $art->penerbit; ?></a>
                                    </span>
                                <span class="post-date">
                                       <i class="fa fa-calendar"></i> Tanggal: <a href="#"><?php echo $art->tgl_terbit; ?></a>
                                    </span>
                                <span class="post-commetns">
                                       <i class="fa fa-comments"></i> Komentar: <a href="#"><?= $jmlkomen->jmlkomen ?> comments</a>
                                    </span>
                            </div>
                            <!--post info-->

                            <div class="post-content">
                                <p>
                                    <?php echo $art->konten; ?>
                                </p>
                            </div>
                            <!--post content-->

                        </div>
                        <!--single blog-->
<table class="demo-table" border="0">
<tbody>
<tr>
<td valign="top">
<b>Rating:</b>
<div id="tutorial-<?php echo $art->kd_artikel; ?>">
<input type="hidden" name="rating" id="rating" value="<?php echo $art->rating; ?>" />
<ul onMouseOut="resetRating(<?php echo $art->kd_artikel; ?>);">
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($art->rating) && $i <= $art->rating) {
    $selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>' onmouseover="highlightStar(this,<?php echo $art->kd_artikel; ?>);" onmouseout="removeHighlight(<?php echo $art->kd_artikel; ?>);" onClick="addRating(this,<?php echo $art->kd_artikel; ?>);">&#9733;</li>  
  <?php }  ?>
<ul>
</div>
</td>
</tr>
</tbody>
</table>           
<?php
} ?>
                        <!--post author-->

                        <div class="comment-area mb-27">
                            <div class="title">
                                <h3 class="m-0">Komentar</h3>
                                <span><?= $jmlkomen->jmlkomen ?> comments</span>
                            </div>
                            <ul class="comment-list">
                            <?php foreach ($komen as $k) {
                            ?>
                                <li class="comment">
                                    <figure class="avatar">
                                        <img src="<?php echo base_url('assets/images/avatar.jpg'); ?>" alt="">
                                    </figure>
                                    <!--avatar-->

                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <h6 class="m-0">
                                                <?= $k->nama_komentar ?> Says: 
                                                <span><?= $k->waktu ?></span>
                                            </h6>
                                        </div>
                                        <!--comment meta-->

                                        <div class="comment-content">
                                            <p>
                                                <?= $k->isi_komentar ?>
                                            </p>
                                        </div>
                                        <!--comment content-->
                                    </div>
                                    <!--comment body-->
                                </li>
                                <!--single comment-->
                                <?php } ?>
                                <!--single comment-->
                            </ul>
                            <!--comment list-->

                            <div class="comment-respond">
                                <h4 class="title">Silahkan Masukkan Komentar Anda</h4>
                                <form action="<?= base_url().'beranda/komentar/'.$idevent ?>" method="post">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <textarea placeholder="Masukkan komentar disini" name="isi" required></textarea>
                                        </div>
                                        <!--text area-->

                                        <div class="form-group col-sm-4">
                                            <input type="text" placeholder="Nama Anda" name="nama" required>
                                        </div>
                                        <!--name-->

                                        <div class="form-group col-sm-4">
                                            <input type="email" placeholder="Alamat Email Anda" name="email" required>
                                        </div>
                                        <!--name-->

                                        <div class="form-group col-sm-4">
                                            <input type="text" placeholder="Your Website URL" name="website">
                                        </div>
                                        <!--name-->

                                        <div class="form-group col-sm-12">
                                            <button type="submit" class="btn bg-yellow">Kirim Komentar</button>
                                        </div>
                                    </div>
                                </form>
                                <!--form-->
                            </div>
                            <!--comment respond-->
                        </div>
                        <!--comment area-->

                        <div class="related-article">
                            <h3 class="title">Related articles</h3>
                            <div class="row blog-main-wrap masonary">
                                <div class="col-md-6 col-sm-6 blog-list">
                                    <figure class="mb-20">
                                        <a href="#" class="overlay image-effect">
                                            <img src="assets/images/mes-blog1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <!--figure-->

                                    <div class="post-info">
                                        <span>03 Sep 2013</span>
                                        <span><a href="#">12 Comments</a></span>
                                    </div>
                                    <!--post info-->

                                    <h4 class="entry-title">
                                        <a href="#">Impact of a successfully organized event</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inven tore veritatis et quasi architecto beatae vitae dicta sunt explic abo.
                                        </p>
                                    </div>
                                    <!--post cntent-->

                                    <a href="#" class="btn btn-outline-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <!--single blog wrap-->

                                <div class="col-md-6 col-sm-6 blog-list">
                                    <figure class="mb-20">
                                        <a href="#" class="overlay image-effect">
                                            <img src="assets/images/mes-blog2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <!--figure-->

                                    <div class="post-info">
                                        <span>03 Sep 2013</span>
                                        <span><a href="#">12 Comments</a></span>
                                    </div>
                                    <!--post info-->

                                    <h4 class="entry-title">
                                        <a href="#">Impact of a successfully organized event</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inven tore veritatis et quasi architecto beatae vitae dicta sunt explic abo.
                                        </p>
                                    </div>
                                    <!--post cntent-->

                                    <a href="#" class="btn btn-outline-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <!--single blog wrap-->
                            </div>
                            <!--related article list-->
                        </div>
                    </div>
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
                                <h4 class="widget-title">Kategori UKM</h4>
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

                            
                            <div class="sidebar-box ">
                                <h4 class="sidebar-title">Event terdekat!</h4>
                                <ul class="sidebar-event">
                                <?php foreach ($upcoming_event as $ue ) {
                                ?>
                                <li>
                                        <h6><a href="#"><?php echo $ue->nama_event; ?></a></h6>
                                        <div class="post-info">
                                            <span><i class="fa fa-clock-o"></i> <?php echo $ue->tanggal; echo " ".$ue->waktu; ?></span>
                                            <span><i class="fa fa-map-marker"></i> <?php echo $ue->tempat; ?></span>
                                        </div>
                                    </li>
                                <?php
                                } ?>
                                    
                                    <!--single event-->
                                </ul>
                            </div>
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