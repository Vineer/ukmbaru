
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
                        <h2 class="text-primary">Ubah Data Mahasiswa Mahasiswa</h2>
                    </div>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>superadmin/Superadmin/Update_mhs/<?php echo $mahasiswa['nim']?>">
                         <input type="hidden" class="form-control input-lg" id="nim" name="nim"  value="<?php echo $this->uri->segment(4)?>">
                          <input type="hidden" class="form-control input-lg" id="nim" name="id_akun" value="<?php echo $this->uri->segment(5)?>">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama" name="nama" value="<?php echo $mahasiswa['nama']?>">
                                <label for="large4">Nama Mahasiswa</label>
                                <?php echo form_error('nama'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="fakultas" name="fakultas" value="<?php echo $mahasiswa['fakultas']?>">
                                <label for="large4">Fakultas</label>
                                <?php echo form_error('fakultas'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="jurusan" name="jurusan" value="<?php echo $mahasiswa['jurusan']?>">
                                <label for="large4">Jurusan</label>
                                <?php echo form_error('jurusan'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="email" name="email" value="<?php echo $mahasiswa['email']?>">
                                <label for="large4">Email</label>
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="no_telp" name="no_telp" value="<?php echo $mahasiswa['no_telp']?>">
                                <label for="large4">Nomor Telp</label>
                                <?php echo form_error('no_telp'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="username" name="username" value="<?php echo $mahasiswa['username']?>">
                                <label for="large4">Username</label>
                                <?php echo form_error('no_telp'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="password" class="form-control input-lg" id="password" name="password" value="<?php echo $mahasiswa['password']?>">
                                <label for="large4">Password</label>
                                <?php echo form_error('password'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="jenis_akses" name="jenis_akses" value="<?php echo $mahasiswa['jenis_akses']?>">
                                <label for="large4">Jenis Akses</label>
                                <?php echo form_error('jenis_akses'); ?>
                            </div>
                            
                             <div class="form-group">
                                <input type="file" class="form-control" id="mahasiswa" name="mahasiswa" accept="application/jpg">
                                    <label for="Lastname3">Unggah Foto</label>
                            </div>
                            
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
                <?php
                    include 'sidebar.php';
                ?>
            <!-- END MENUBAR -->
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
</html>