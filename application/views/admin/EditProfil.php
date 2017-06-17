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
                            <li class="active">Edit Profil</li>
                        </ol>
                    </div>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>admin/UKM/SimpanUpdateProfil/<?= $query->id_ukm ?>">
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="id_ukm" name="id_ukm" value="<?= $query->id_ukm ?>" readonly>
                                <label for="large2">Kode UKM</label>
                                <?php echo form_error('id_ukm'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="nama_ukm" name="nama_ukm" value="<?= $query->nama_ukm ?>">
                                <label for="large2">Nama UKM</label>
                                <?php echo form_error('nama_ukm'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="kategori" name="kategori" value="<?= $query->kategori ?>">
                                <label for="large2">Kategori</label>
                                <?php echo form_error('kategori'); ?>
                            </div>
                            <div class="form-group floating-label">
                               <input type="text" class="form-control input-lg" id="slogan" name="slogan" value="<?= $query->slogan ?>">
                                <label for="large2">Slogan</label>
                                <?php echo form_error('slogan'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="sekre_ukm" name="sekre_ukm" value="<?= $query->sekre_ukm ?>">
                                <label for="large2">Sekre UKM</label>
                                <?php echo form_error('sekre_ukm'); ?>
                            </div>
                            <div class="">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="logo_ukm" name="logo_ukm" accept="application/jpg">
                                                        <label for="Lastname3">Logo UKM</label>
                                                    </div>
                                                </div>
                             <div>
                            <div class="card">
                                <div class="card-body no-padding">
                                    <textarea class="input-block-level" id="summernote" name="deskripsi" rows="18" value="<?php echo $query->deskripsi;?>"><?php echo $query->deskripsi;?></textarea>
                                </div><!--end .card-body -->
                            </div>
                            <?php echo form_error('deskripsi'); ?>
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
        <!-- /<script src="<?php //echo base_url()?>assets_adm/js/libs/jquery/jquery-1.11.2.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/bootstrap/bootstrap.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/spin.js/spin.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/autosize/jquery.autosize.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/DataTables/jquery.dataTables.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script> -->
        <!-- <script src="<?php// echo base_url()?>assets_adm/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/App.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/AppNavigation.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/AppOffcanvas.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/AppCard.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/AppForm.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/AppNavSearch.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/source/AppVendor.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/demo/Demo.js"></script> -->
        <!-- <script src="<?php //echo base_url()?>assets_adm/js/core/demo/DemoTableDynamic.js"></script> -->
        <!-- END JAVASCRIPT -->
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
</html>