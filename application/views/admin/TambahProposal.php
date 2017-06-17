		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header ">
						<ol class="breadcrumb">
							<li class="active">Tambah Proposal</li>
						</ol>
					</div>
					<div class="section-body contain-lg">

						  <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" action="<?php echo base_url()?>admin/UKM/SimpanProposal" enctype="multipart/form-data">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="id_proposal" name="id_proposal">
                                <label for="large2">Kode Proposal</label>
                                <?php echo form_error('id_proposal'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="judul_proposal" name="judul_proposal">
                                <label for="large2">Judul Proposal</label>
                                <?php echo form_error('judul_proposal'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama_ukm" name="nama_ukm">
                                <label for="large2">Nama UKM</label>
                                <?php echo form_error('nama_ukm'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="no_telp" name="no_telp">
                                <label for="large2">No Telepon</label>
                                <?php echo form_error('no_telp'); ?>
                            </div>
                			<div class="">
													<div class="form-group">
														<input type="file" class="form-control" id="proposal" name="proposal" accept="application/pdf">
														<label for="Lastname3">File Proposal</label>
													</div>
												</div>
							<div>
                            	<button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button> 
                            </div>
                        </form>
                        <!-- END SUMMERNOTE --
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END INVERSED FORM -->
					</div>
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
				<div class="menubar-scroll-panel">

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

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/moment/moment.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/App.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/demo/DemoFormLayouts.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
