<header>
        <div class="container">
            <div class="top-bar hidden-sm-down">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <span>
                            <a href="tel:+614123456789"><i class="fa fa-phone"></i> +62812236303818</a>
                        </span>
                        <!--phone-->

                        <span>
                            <a href="mailto:info@yourdomain.com "><i class="fa fa-envelope"></i> interUKMTel-u@gmail.com</a>
                        </span>
                        <span>
                            <i class="fa fa-map-marker"></i> Telkom University, Bandung
                        </span>
                    </div>
                    <!--header info-->

                    <div class="col-md-3 col-sm-3">
                        <ul class="social-icons txt-r">
                            <li>
                                <a href="#" class="rounded-circle">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="rounded-circle">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="rounded-circle">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="rounded-circle">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--social-->
                </div>
            </div>
            <!--top bar ends-->

            <nav class="navbar navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="<?php echo base_url() ?>beranda"><img src="<?php echo base_url('assets/logo.png'); ?>" alt="logo"></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="<?php echo base_url() ?>beranda">Beranda </a>
                        </li>

                        <li><a href="#">UKM </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('beranda/join_ukm'); ?>">Pendaftaran Pengurus UKM</a></li>
                                <li><a href="<?php echo site_url('beranda/hasil_pengumuman_pengurus'); ?>">Pengumuman Pengurus UKM</a></li>
                                <li><a href="<?php echo site_url('beranda/profile_ukm') ?>">Profil UKM</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Event </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('event/data_event'); ?>">Daftar Event</a></li>
                                <li><a href="<?php echo site_url('beranda/join_panitia_event'); ?>">Pendaftaran Panitia Event</a></li>
                                <li><a href="<?php echo site_url('beranda/hasil_pengumuman'); ?>">Pengumuman Panitia Event</a></li>
                                <li><a href="<?php echo site_url('beranda/pemesanan_tiket'); ?>">Pesan Tiket</a></li>
                                <li><a href="<?php echo site_url('beranda/bukti_transfer'); ?>">Konfirmasi Bukti Transfer</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php  echo base_url() ?>beranda/artikel">Artikel</a>
                        </li>
                            <?php
                            $d = $this->db->query("select count(id_pengumuman) as jumlah from pengumuman where status = 0")->row();
                            ?>
                        <li><a href="<?php echo site_url('beranda/pengumuman'); ?>" class="btn btn-lg btn-primary"> <span class="badge"><?= $d->jumlah ?></span>Pengumuman</a>
                            
                        </li>
                        <li> <a class="btn btn-lg bg-yellow" href="#" style="color:white;"><?php echo $this->session->userdata('username'); ?></a>
                            <ul class="sub-menu" >
                                <li><a href="#" data-toggle="modal" data-target="#modalprofile">Profile</a></li>
                                <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    <!--header cart-->
                </div>
            </nav>
            <!--primery navigation ends-->
        </div>
    </header>