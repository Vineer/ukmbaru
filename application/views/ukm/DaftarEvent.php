
		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section class="style-default-bright">
					<div class="section-header">
						<h2 class="text-primary">Daftar Pengajuan Event</h2>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable2" class="table order-column hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Event</th>
												<th>Nama Event</th>
												<th>Tanggal</th>
												<th>Tempat</th>
												<th>Waktu</th>
												<th>Penyelengara</th>
												<th>Foto/Poster</th>
												<th>Konten</th>
												<th></th>
												<th>Status Terlaksana</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											foreach ($event as $a) {
											?>
											<tr class="gradeX">
												<td><?php echo $i?></td>
												<td><?php echo $a->id_event?></td>
												<td><?php echo $a->nama_event?></td>
												<td><?php echo $a->tanggal?></td>
												<td><?php echo $a->tempat?></td>
												<td><?php echo $a->waktu?></td>
												<td><?php echo $a->penyelenggara?></td>
												<td><?php echo $a->poster?></td>
												<td><?php echo $a->konten?></td>
												<?php if ($a->status_approval == 0) {
												?>
												<td><center>
													<a href="<?php echo base_url()?>superadmin/Superadmin/EditEvent/<?php echo $a->id_event?>">
														<button type="button" class="btn ink-reaction btn-raised btn-warning">Approve</button>
													</a>
													</center>
													</td>
												<?php
												}else{
													?>
													<td><center>
													
														<button type="button" class="btn ink-reaction btn-raised btn-primary">Approved</button>
													
													</center>
													</td>

													<?php
													} ?>
												<?php if ($a->status_terlaksana == 'Belum') {
												?>
												<td><center>
													<a href="<?php echo base_url()?>superadmin/Superadmin/EditEvent/<?php echo $a->id_event?>">
														<button type="button" class="btn ink-reaction btn-raised btn-info">
															<?php echo $a->status_terlaksana?>
														</button>
													</a>
													</center>
													</td>
												<?php
												}else{
													?>
													<td><center>
													
														<button type="button" class="btn ink-reaction btn-raised btn-success">
															<?php echo $a->status_terlaksana?>
														</button>
													
													</center>
													</td>

													<?php
													} ?>
												<td>
													<center>	
													<button type="submit" class="btn ink-reaction btn-raised btn-danger"><a href="<?php echo base_url().'UKM/delete_event/'.$a->id_event;?>" onClick='konfirmhapus(event)'>Hapus</a></button>
												</center></td>
											</tr>
											<?php
											$i++;
											}
											?>
										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 2 -->

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
                <!--end #menubar-->
            <!-- END MENUBAR -->

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
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/App.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url()?>assets/superadmin_assets/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
