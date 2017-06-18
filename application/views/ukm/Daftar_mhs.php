
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
						<h2 class="text-primary">Daftar Mahasiswa</h2>
					</div>
					<div class="section-body">
						<div class="row">
							<a href="<?php echo base_url()?>superadmin/Superadmin/Tambah_mhs"><button type="button" class="btn ink-reaction btn-raised btn-primary col-sm-offset-0">Tambah Data Mahasiswa</button></a>
							<a href="<?php echo base_url()?>superadmin/Superadmin/ImportData"><button type="button" class="btn ink-reaction btn-raised btn-primary col-sm-offset-0">Import Data Mahasiswa</button></a>
							<br><br>
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable2" class="table order-column hover">
										<thead>
											<tr>
												<th>No</th>
												<th>NIM</th>
												<th>Nama</th>
												<th>Fakultas</th>
												<th>Jurusan</th>
												<th>Email</th>
												<th>No. Telp</th>
												<th>Foto</th>
												<th>Status</th>
												<th colspan="2">Pengaturan</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											foreach ($mahasiswa as $a) {
											?>
											<tr class="gradeX">
												<td><?php echo $i?></td>
												<td><?php echo $a->nim?></td>
												<td><?php echo $a->nama?></td>
												<td><?php echo $a->fakultas?></td>
												<td><?php echo $a->jurusan?></td>
												<td><?php echo $a->email?></td>
												<td><?php echo $a->no_telp?></td>
												<td><img src="<?php echo base_url().'assets/mahasiswa/'.$a->foto?>" widht="48" height="48"></td>
												<td><?php echo $a->status?></td>;
												
												<td><center>
													<?php echo anchor('superadmin/Superadmin/Edit_mhs/'.$a->nim,'Ubah',array('class'=>"btn ink-reaction btn-raised btn-warning"))?></td>
													<?php echo form_open('superadmin/Superadmin/aktifnonaktif_mhs'); ?>
												 	<input type="hidden" name="status" value="<?php echo $a->status?>" >
												 	<input type="hidden" name="id" value="<?php echo $a->nim?>" >
												 	<td>
												 	<?php if($a->status=="aktiv"){ ?>
													<button type="submit" value="submit" name="submit" class="btn ink-reaction btn-raised btn-danger">nonaktifkan</button>
													<?php }   else { ?>
													<button type="submit" value="submit" name="submit" class="btn ink-reaction btn-raised btn-success">aktifkan</button>
													<?php } ?></td>

												<?php echo form_close(); ?>
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
