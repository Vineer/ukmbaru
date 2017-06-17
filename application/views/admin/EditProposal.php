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
                            <li class="active">Edit Proposal</li>
                        </ol>
                    </div>
                    <div class="section-body contain-lg">
                    <?php foreach ($dataproposal as $record) {
                        ?> 

                                                  <!-- BEGIN SUMMERNOTE -->
                         <form class="form" role="form" method="post" action="<?php echo base_url();?>admin/UKM/UpdateProposal/<?= $record->id_proposal ?>" enctype="multipart/form-data">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="id_proposal" name="id_proposal" value="<?php echo $record->id_proposal; ?>">
                                <label for="large2">Kode Proposal</label>
                                <?php echo form_error('id_proposal'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="judul_proposal" name="judul_proposal" value="<?php echo $record->judul_proposal; ?>">
                                <label for="large2">Judul Proposal</label>
                                <?php echo form_error('judul_proposal'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama_ukm" name="nama_ukm" value="<?php echo $record->nama_ukm; ?>">
                                <label for="large2">Nama UKM</label>
                                <?php echo form_error('nama_ukm'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="no_telp" name="no_telp" value="<?php echo $record->no_telp; ?>">
                                <label for="large2">No Telepon</label>
                                <?php echo form_error('no_telp'); ?>
                            </div>
                            <div class="">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="proposal" name="proposal" accept="application/pdf" value="<?php echo $record->file; ?>">
                                                        <label for="Lastname3">File Proposal</label>
                                                    </div>
                                                </div>
                            <div>
                                <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button> 
                            </div>
                        </form>
                        <?php
                    } ?>
                        <!-- END SUMMERNOTE --
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