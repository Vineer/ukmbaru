<!DOCTYPE html>
<html lang="en">
	<head>
		<title>InterUKM - Web</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/superadmin_assets/css/theme-default/libs/summernote/summernote.css?1425218701" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo base_url()?>assets/superadmin_assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/superadmin_assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
		<script type="text/javascript">
			function konfirmhapus(e) {
			    var answer = confirm("Hapus Data?")
			    if (!answer){ 
			        e.preventDefault();
			        return false;
			    }
			}
		</script>
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
									<span class="text-lg text-bold text-primary">InterUKM ADMIN</span>
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
						
						<li class="dropdown hidden-xs">
							
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger"><?php foreach ($jmlnotif as $key) {
									# code...
								} echo $key->jml; ?></sup>
							</a>
							<ul class="dropdown-menu animation-expand">

							<?php foreach ($notif as $n) {
								?>
								<li>
									<a class="alert alert-callout alert-warning" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url()?>assets/event/<?php echo $n->poster; ?>?1404026449" alt="" />
										<strong><?php echo $n->nama_event; ?></strong><br/>
										<small><?php echo $n->penyelenggara; ?></small>
									</a>
								</li>
								<?php
								
								} ?>
								<li class="dropdown-header">Options</li>
								<li><a href="<?php echo base_url()?>superadmin/Superadmin/kelola_event">Lihat Pengajuan Event <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								
								<span class="profile-info">
									<?php echo $this->session->userdata('username'); ?>
									<small><?= $this->session->userdata('jenis') ?></small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li><a href="<?php echo base_url()?>login/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->
