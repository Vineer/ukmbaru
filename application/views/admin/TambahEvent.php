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
                            <li class="active">Tambah Event</li>
                        </ol>
                    </div>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                         <form class="form" role="form" method="post" action="<?php echo base_url()?>admin/UKM/SimpanEvent" enctype="multipart/form-data">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama_event" name="nama_event">
                                <label for="large2">Nama Event</label>
                                <?php echo form_error('nama_event'); ?>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control input-lg" id="tanggal" name="tanggal">
                                <label for="large2">Tanggal</label>
                                <?php echo form_error('tanggal'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="tempat" name="tempat">
                                <label for="large2">Tempat </label>
                                <?php echo form_error('tempat'); ?>
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control input-lg" id="waktu" name="waktu">
                                <label for="large2">Waktu</label>
                                <?php echo form_error('waktu'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="penyelenggara" name="penyelenggara">
                                <label for="large2">Penyelenggara</label>
                                <?php echo form_error('penyelenggara'); ?>
                            </div>
                            <div class="">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="event" name="event" accept="application/jpg">
                                                        <label for="Lastname3">Foto/Poster</label>
                                                    </div>
                                                </div>
                            <div>
                            <label for="large2">Konten</label>
                            <div class="card">
                                <div class="card-body no-padding">
                                    <textarea class="input-block-level" id="summernote" name="konten" rows="18"></textarea>
                                </div><!--end .card-body -->
                            </div>
                            <?php echo form_error('konten'); ?>
                            <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
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
        <script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/spin.js/spin.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/libs/summernote/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/App.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/AppNavigation.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/AppOffcanvas.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/AppCard.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/AppForm.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/AppNavSearch.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/source/AppVendor.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/demo/Demo.js"></script>
        <script src="<?php echo base_url()?>assets_adm/js/core/demo/DemoFormEditors.js"></script>
        <!-- END JAVASCRIPT -->
    </body>
</html>