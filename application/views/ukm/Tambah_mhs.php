
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
                        <h2 class="text-primary">Tambah Data Mahasiswa</h2>
                    </div>
                    <hr>
                    <?php echo $this->session->flashdata('error_input')?>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form action="<?php echo base_url()?>superadmin/Superadmin/Simpan_mhs" class="form" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nim" name="nim">
                                <label for="large2">NIM</label>
                                <?php echo form_error('nim'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama" name="nama">
                                <label for="large2">Nama Mahasiswa</label>
                                <?php echo form_error('nama'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="fakultas" name="fakultas">
                                <label for="large2">Fakultas</label>
                                <?php echo form_error('fakultas'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="jurusan" name="jurusan">
                                <label for="large2">Jurusan</label>
                                <?php echo form_error('jurusan'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="email" name="email">
                                <label for="large2">Email</label>
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="no_telp" name="no_telp">
                                <label for="large2">No telp</label>
                                <?php echo form_error('no_telp'); ?>
                            </div>
                             <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="username" name="username">
                                <label for="large2">Username</label>
                                <?php echo form_error('username'); ?>
                            </div>
                             <div class="form-group floating-label">
                                <input type="password" class="form-control input-lg" id="password" name="password">
                                <label for="large2">Password</label>
                                <?php echo form_error('password'); ?>
                            </div>
                             <div class="form-group floating-label">
                                 <select class="form-control" name="jenis_akses">
                                    <option>Mahasiswa</option>
                                </select>
                                <label for="large2">Jenis Akses</label>
                                <?php echo form_error('jenis_akses'); ?>
                            </div>

                            <div class="">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="mahasiswa" name="mahasiswa" accept="application/jpg">
                                                        <label for="Lastname3">Unggah Foto</label>
                                                    </div>
                                                </div>
                            <div>
                            
                            <button type="submit" class="btn ink-reaction btn-raised btn-primary">Simpan</button>
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
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/spin.js/spin.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/libs/summernote/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/App.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppNavigation.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppOffcanvas.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppCard.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppForm.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppNavSearch.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/source/AppVendor.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/demo/Demo.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets/js/core/demo/DemoFormEditors.js"></script>
        <!-- END JAVASCRIPT -->
    </body>
    <script>
            $("#formku").submit(function(e) {
                // mencegah default submit form
                e.preventDefault();
                
                // kosongkan error form
                $("#error_nip").html('');
                // $("#error_alamat").html('');
                
                // ambil data form dengan serialize
                var dataform = $("#formku").serialize();
                $.ajax({
                    url: "superadmin.php",
                    type: "post",
                    data: dataform,
                    success: function(result) {
                        var hasil = JSON.parse(result);
                        if (hasil.hasil !== "sukses") {
                            // tampilkan pesan error
                            $("#error_nip").html(hasil.error.namalengkap);
                            $("#error_alamat").html(hasil.error.alamat);
                        } else {
                            // do something, misalnya menampilkan berhasil
                            $("#pesan").html("<div class=\"alert alert-success\">Data berhasil disimpan !</div>");
                            // kosongkan lagi error form
                            $("#namalengkap").val('');
                            $("#alamat").val('');
                        }
                    }
                });
            });
        </script>
</html>