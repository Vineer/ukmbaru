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
						<h2 class="text-primary">Daftar Tiket</h2>
					</div>
					<div class="section-body">
						<div class="row">
							<br><br>
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable2" class="table order-column hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Booking</th>
												<th>Nama Mahasiswa</th>
												<th>NIM</th>
												<th>Jumlah Tiket</th>
												<th>No Telepon</th>
												<th>Email</th>
												<th>Acara</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											foreach ($tiket as $a) {
											?>
											<tr class="gradeX">
												<td><?php echo $i?></td>
												<td><?php echo $a->kd_booking ?></td>
												<td><?php echo $a->nama ?></td>
												<td><?php echo $a->nim ?></td>
												<td><?php echo $a->jml_tiket ?></td>
												<td><?php echo $a->no_telp ?></td>
												<td><?php echo $a->email ?></td>
												<td><?php echo $a->acara ?></td>
												<td>
												<?php
												if ($a->status == 'Lunas') {
												?>
													<button type="button" class="btn ink-reaction btn-raised btn-primary">Lunas</button>
												<?php
												}else{
												?>
													<a href="<?php echo base_url()?>admin/UKM/EditTicket/<?php echo $a->kd_booking?>">
														<button type="button" class="btn ink-reaction btn-raised btn-warning">Belum Lunas</button>
													</a>
												<?php } ?>
													<button type="submit" class="btn ink-reaction btn-raised btn-danger"><a href="<?php echo base_url().'admin/UKM/delete_ticket/'.$a->kd_booking;?>" onClick='konfirmhapus(event)'>Hapus</a></button>
												</td>
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
		<script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/App.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url()?>assets_adm/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
