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
						<h2 class="text-primary">Daftar LPJ</h2>
					</div>
					<div class="section-body">
						<div class="row">
							<a href="<?php echo base_url()?>admin/UKM/TambahLpj"><button type="button" class="btn ink-reaction btn-raised btn-primary col-sm-offset">Tambah LPJ</button></a>
							<br><br>
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable2" class="table order-column hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode LPJ</th>
												<th>Judul LPJ</th>
												<th>Nama UKM</th>
												<th>No Telpon</th>
												<th>File</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											foreach ($lpj as $a) {
											?>
											<tr class="gradeX">
												<td><?php echo $i?></td>
												<td><?php echo $a->id_lpj?></td>
												<td><?php echo $a->judul_lpj?></td>
												<td><?php echo $a->nama_ukm?></td>
												<td><?php echo $a->no_telp?></td>
												<td><?php echo $a->file?></td>
												<td><center>
													<td><center>
													<a href="<?php echo base_url()?>admin/UKM/EditLpj/<?php echo $a->id_lpj?>">
														<button type="button" class="btn ink-reaction btn-raised btn-warning">Edit</button>
													</a>
													<button type="submit" class="btn ink-reaction btn-raised btn-danger"><a href="<?php echo base_url().'admin/UKM/delete_lpj/'.$a->id_lpj;?>" onClick='konfirmhapus(event)'>Hapus</a></button>
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
