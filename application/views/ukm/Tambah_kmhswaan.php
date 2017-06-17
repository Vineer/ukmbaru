
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
                        <ol class="breadcrumb">
                            <li class="active">Tambah Data Bagian Kemahasiswaan</li>
                        </ol>
                    </div>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>superadmin/Superadmin/Simpan_kmhswaan">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nip" name="nip">
                                <label for="large2">NIP</label>
                                <?php echo form_error('nip'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama" name="nama">
                                <label for="large2">Nama Bag.kemahasiswaan</label>
                                <?php echo form_error('nama'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="jabatan" name="jabatan">
                                <label for="large2">Jabatan</label>
                                <?php echo form_error('jabatan'); ?>
                            </div>
                             <div class="">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="kemahasiswaan" name="kemahasiswaan" accept="application/jpg">
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