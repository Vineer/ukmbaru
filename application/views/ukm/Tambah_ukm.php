
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
                        <h2 class="text-primary">Tambah Data UKM</h2>
                    </div>
                    <hr>
                    <?php echo $this->session->flashdata('error_input');?>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" action="<?php echo base_url()?>superadmin/Superadmin/Simpan_ukm" enctype="multipart/form-data">
                       
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama_ukm" name="nama_ukm" required>
                                <label for="large2">Nama UKM</label>
                                <?php echo form_error('nama_ukm'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="kategori" name="kategori" required>
                                <label for="large2">Kategori</label>
                                <?php echo form_error('kategori'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="slogan" name="slogan" required>
                                <label for="large2">Slogan</label>
                                <?php echo form_error('slogan'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="deskripsi" name="deskripsi" required>
                                <label for="large2">Deskripsi</label>
                                <?php echo form_error('deskripsi'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="sekre_ukm" name="sekre_ukm" required>
                                <label for="large2">Sekre UKM</label>
                                <?php echo form_error('sekre_ukm'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="username" name="username" required>
                                <label for="large2">Username</label>
                                <?php echo form_error('username'); ?>
                            </div>
                             <div class="form-group floating-label">
                                <input type="password" class="form-control input-lg" id="password" name="password" required>
                                <label for="large2">Password</label>
                                <?php echo form_error('password'); ?>
                            </div>
                             <div class="form-group floating-label">
                                <select class="form-control" name="jenis_akses">
                                    <option>Administrator</option>
                                    
                                </select>
                                <!-- <input type="text" class="form-control input-lg" id="jenis_akses" name="jenis_akses"> -->
                                <label for="large2">Jenis Akses</label>
                                <?php echo form_error('jenis_akses'); ?>
                            </div>
                            <div class="">
                                <div class="form-group">
                                        <input type="file" class="form-control" id="ukm" name="ukm">
                                            <label for="Lastname3">Unggah Foto</label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn ink-reaction btn-raised btn-primary" name="submit">Simpan</button>
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
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/spin.js/spin.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/libs/summernote/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/App.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/AppNavigation.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/AppOffcanvas.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/AppCard.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/AppForm.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/AppNavSearch.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/source/AppVendor.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/demo/Demo.js"></script>
        <script src="<?php echo base_url()?>assets/superadmin_assets//js/core/demo/DemoFormEditors.js"></script>
        <!-- END JAVASCRIPT -->
    </body>
</html>