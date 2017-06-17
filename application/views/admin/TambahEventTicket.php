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
							<li class="active">Tambah Event Ticket</li>
						</ol>
					</div>
					<div class="section-body contain-lg">

						  <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" action="<?php echo base_url()?>UKM/" enctype="multipart/form-data">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="kd_ticket" name="kd_ticket">
                                <label for="large2">Kode Tiket</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nim" name="nim">
                                <label for="large2">NIM</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama" name="nama">
                                <label for="large2">Nama</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="fakultas" name="fakultas">
                                <label for="large2">Fakultas</label>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="jurusan" name="jurusan">
                                <label for="large2">Jurusan</label>
                            </div>
                             <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="no_telp" name="no_telp">
                                <label for="large2">No Telp</label>
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
