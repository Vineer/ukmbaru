<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Material Admin - Text Editors</title>

        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/libs/summernote/summernote.css?1425218701" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">

        <!-- BEGIN HEADER-->
        <header id="header" >
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a href="<?php echo base_url()?>html/dashboards/dashboard.html">
                                    <span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="headerbar-right">
                    <ul class="header-nav header-nav-options">
                        <li>
                            <!-- Search form -->
                            <form class="navbar-search" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                                </div>
                                <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                                <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
                            </a>
                            <ul class="dropdown-menu animation-expand">
                                <li class="dropdown-header">Today's messages</li>
                                <li>
                                    <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                                        <img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url()?>assets/img/avatar2.jpg?1404026449" alt="" />
                                        <strong>Alex Anistor</strong><br/>
                                        <small>Testing functionality...</small>
                                    </a>
                                </li>
                                <li>
                                    <a class="alert alert-callout alert-info" href="javascript:void(0);">
                                        <img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url()?>assets/img/avatar3.jpg?1404026799" alt="" />
                                        <strong>Alicia Adell</strong><br/>
                                        <small>Reviewing last changes...</small>
                                    </a>
                                </li>
                                <li class="dropdown-header">Options</li>
                                <li><a href="<?php echo base_url()?>html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                        <li class="dropdown hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                                <i class="fa fa-area-chart"></i>
                            </a>
                            <ul class="dropdown-menu animation-expand">
                                <li class="dropdown-header">Server load</li>
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Today</strong></span>
                                            <strong class="pull-right">93%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                                    </a>
                                </li><!--end .dropdown-progress -->
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Yesterday</strong></span>
                                            <strong class="pull-right">30%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                                    </a>
                                </li><!--end .dropdown-progress -->
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Lastweek</strong></span>
                                            <strong class="pull-right">74%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                                    </a>
                                </li><!--end .dropdown-progress -->
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-options -->
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>assets/img/avatar1.jpg?1403934956" alt="" />
                                <span class="profile-info">
                                    Daniel Johnson
                                    <small>Administrator</small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li class="dropdown-header">Config</li>
                                <li><a href="<?php echo base_url()?>html/pages/profile.html">My profile</a></li>
                                <li><a href="<?php echo base_url()?>html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
                                <li><a href="<?php echo base_url()?>html/pages/calendar.html">My appointments</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url()?>html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                                <li><a href="<?php echo base_url()?>html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
                </div><!--end #header-navbar-collapse -->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- BEGIN BASE-->
        <div id="base">

            <!-- BEGIN OFFCANVAS LEFT -->
            <div class="offcanvas">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->

            <!-- BEGIN CONTENT-->
            <div id="content">
                <section>
                    <div class="section-header">
                        <ol class="breadcrumb">
                            <li class="active">Tambah Profil</li>
                        </ol>
                    </div>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" action="<?php echo base_url()?>UKM/SimpanProfil">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="id_ukm" name="id_ukm">
                                <label for="large2">Kode UKM</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama_ukm" name="nama_ukm">
                                <label for="large2">Nama UKM</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="kategori" name="kategori">
                                <label for="large2">Kategori</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="sekre_ukm" name="sekre_ukm">
                                <label for="large2">Sekre UKM</label>
                            </div>
                            <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
                        </form>
                        <!-- END SUMMERNOTE -->

                        <hr class="ruler-xxl"/>
                    </div><!--end .section-body -->
                </section>
            </div><!--end #content-->
            <!-- END CONTENT -->

            <!-- BEGIN MENUBAR-->
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="<?php echo base_url()?>html/dashboards/dashboard.html">
                            <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                        </a>
                    </div>
                </div>
                <?php include 'sidebar.php'; ?>
        </div><!--end #base-->
        <!-- END BASE -->

        <!-- BEGIN JAVASCRIPT -->
        <script src="<?php echo base_url()?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/spin.js/spin.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/summernote/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/App.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/AppNavigation.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/AppOffcanvas.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/AppCard.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/AppForm.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/AppNavSearch.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/source/AppVendor.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/demo/Demo.js"></script>
        <script src="<?php echo base_url()?>assets/js/core/demo/DemoFormEditors.js"></script>
        <!-- END JAVASCRIPT -->
    </body>
</html>