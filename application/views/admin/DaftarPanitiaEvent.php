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
						<h2 class="text-primary">Daftar Panitia Event</h2>
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
												<th>NIM</th>
												<th>Nama Mahasiswa</th>
												<th>UKM Pilihan</th>
												<th>Fakultas</th>
												<th>Jurusan</th>
												<th>Divisi</th>
												<th>No Telepon</th>
												<th>Email</th>
												<th>Motivasi</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											foreach ($panitia as $a) {
											?>
											<tr class="gradeX">
												<td><?php echo $i?></td>
												<td><?php echo $a->nim?></td>
												<td><?php echo $a->nama ?></td>
												<td><?php echo $a->ukm_pilihan ?></td>
												<td><?php echo $a->fakultas ?></td>
												<td><?php echo $a->jurusan ?></td>
												<td><?php if ($a->status == 'Diterima') {
											         echo $a->divisi;
												}else{	
											        echo '<select class="form-control" name="divisi" id="divisi">'; 
													$optionsArr = explode(",", $a->divisi);   
											        foreach ($optionsArr as $row){
											            echo '<option value='.$row.'>'.$row.'</option>'; 
											        } 
											        echo '</select>';
												}
										        ?>
										        <script>
												$( "select" )
												  .change(function() {
												    var arr = $("select option:selected").map(function () {
													return this.value;
												    }).get();
													document.getElementById("divget").value = arr;
												  })
												  .trigger( "change" );
												</script>
										        </td>
												<td><?php echo $a->no_telp ?></td>
												<td><?php echo $a->email ?></td>
												<td><?php echo $a->motivasi ?></td>
												<td>
												<?php
												if ($a->status == 'Diterima') {
												?>
													<button type="button" class="btn ink-reaction btn-raised btn-primary">Panitia</button>
												<?php
												}else{
												?>
													<!-- <button type="submit" id="acc" class="btn ink-reaction btn-raised btn-warning">
													<a href="<?php echo base_url().'admin/UKM/EditPanitiaEvent/'.$a->kd_panitia?>" onClick="accdiv()">
													Approve
													</a>
													</button> -->
												<form method="post" action="<?php echo base_url().'admin/UKM/EditPanitiaEvent/'.$a->kd_panitia?>" >
								            		<input type="hidden" name="divget" id="divget">
													<input type="submit" name="acc" id="acc" class="btn ink-reaction btn-raised btn-warning" value="Approve">
												<form>
												<?php } ?>
													<button type="submit" class="btn ink-reaction btn-raised btn-danger"><a href="<?php echo base_url().'admin/UKM/delete_panitia/'.$a->kd_panitia?>" onClick='konfirmhapus(event)'>Hapus</a></button>
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
		<script>
        function accdiv() {
            $(".acc").click(function() {
            var divi = document.getElementById('divget').value;
                $.ajax({
                    // url: 'http://localhost/ukmbaru/admin/UKM/EditPanitiaEvent',
                    method: 'post',
                    data: {divi:divi},
                    success: function(data) {
                    	alert("Divisi: " + data);
                        // $('#hasil').html(data);
                    }
                });
            });
        }
    	</script>

		<!-- <script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-1.11.2.min.js"></script> -->
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
