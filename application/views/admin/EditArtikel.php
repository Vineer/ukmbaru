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
                            <li class="active">Edit Artikel</li>
                        </ol>
                    </div>
                    <div class="section-body contain-lg">

                        <!-- BEGIN SUMMERNOTE -->
                        <form class="form" role="form" method="post" action="<?php echo base_url()?>admin/UKM/UpdateArtikel/<?php echo $artikel['kd_artikel']?>">
                             
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="penerbit" name="penerbit" value="<?php echo $artikel['penerbit']?>">
                                <label for="large4">Penerbit</label>
                                <?php echo form_error('penerbit'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="kategori" name="kategori" value="<?php echo $artikel['kategori']?>">
                                <label for="large4">Kategori</label>
                                <?php echo form_error('kategori'); ?>
                            </div>
                            <div class="form-group floating-label">
                                <input type="text" class="form-control input-lg" id="judul" name="judul" value="<?php echo $artikel['judul']?>">
                                <label for="large4">Judul Artikel</label>
                                <?php echo form_error('judul'); ?>
                            </div>
                            <div class="card">
                                <div class="card-body no-padding">
                                    <textarea class="input-block-level" id="summernote" name="summernote" rows="18"><?php echo $artikel['konten']?></textarea>
                                </div><!--end .card-body -->
                            </div>
                            <?php echo form_error('summernote'); ?>
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