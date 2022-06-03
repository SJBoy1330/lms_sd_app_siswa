<!-- Sidebar main menu -->
<div id="sidemenu" class="sidebar-wrap  sidebar-overlay">
    <!-- Add pushcontent or fullmenu instead overlay -->
    <div id="content_sidemenu">
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 profile-sidebar">
                    <div class="row mt-3">
                        <div class="col-auto">
                            <figure class="avatar avatar-80 rounded-20 p-1 bg-white shadow-sm" id="reload_side_foto">
                                <img src=" <?= $profil->foto; ?>" alt="" class="rounded-18" id="side_foto_profil">
                            </figure>
                        </div>
                        <div class=" col px-0 align-self-center">
                            <h5 class="mb-0 fw-normal text-white"><?= $profil->nama; ?></h5>
                            <p class="text-muted size-12"><?= $profil->nama_kelas; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'home', $this->uri->segment(2), array())) ?>" aria-current="page" href="<?= base_url('home'); ?>" onclick="unreload(this)">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-house"></i></div>
                                <div class="col">Dashboard</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'kbm', $this->uri->segment(2), array())) ?>" href="<?= base_url('kbm') ?>" tabindex="-1" onclick="unreload(this)">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="col">Jadwal</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'materi', $this->uri->segment(2), array())) ?>" href="<?= base_url('materi') ?>" tabindex="-1" onclick="unreload(this)">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-book-open-cover"></i></div>
                                <div class="col">Materi</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'tugas', $this->uri->segment(2), array())) ?>" href="<?= base_url('tugas') ?>" onclick="unreload(this)" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-list-check"></i></div>
                                <div class="col">Tugas</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'toko', $this->uri->segment(2), array())) ?>" href="<?= base_url('toko') ?>" onclick="unreload(this)" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-shop"></i></div>
                                <div class="col">Toko</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item logout">
                            <a class="nav-link" href="<?= base_url('auth/logout') ?>" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                <div class="col">Keluar</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Sidebar main menu ends -->
<main class="h-100" style="background-image: url(<?= base_url(); ?>assets/images/bg-3.pn); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <!-- Header -->
    <?php if (isset($khusus['rapot'])) : ?>
        <header class="header tugas-ujian position-fixed" style="background-color: #EC3528;">
        <?php else : ?>
            <header class="header position-fixed">
            <?php endif; ?>
            <div id="reload_header">
                <div class="row" id="header_config">
                    <div class="col-auto">
                        <?php if (isset($button_back)) : ?>
                            <a href="<?= $button_back ?>" target="_self" class="btn btn-44">
                                <?php if (isset($text['white'])) : ?>
                                    <i class="fa-solid fa-chevron-left text-white"></i>
                                <?php else : ?>
                                    <i class="fa-solid fa-chevron-left text-dark"></i>
                                <?php endif; ?>
                            </a>
                        <?php else : ?>
                            <div class="col-auto">
                                <a href="javascript:void(0)" target="_self" class="btn btn-44 menu-btn">
                                    <img src="<?= base_url(); ?>assets/icons/hamburger.png" width="24" alt="">
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <?php if (isset($text['white'])) : ?>
                            <h6 class="text-white"><?php if (isset($judul_halaman)) {
                                                        echo $judul_halaman;
                                                    }; ?></h6>
                        <?php else : ?>
                            <h6 class="text-dark"><?php if (isset($judul_halaman)) {
                                                        echo $judul_halaman;
                                                    }; ?></h6>
                        <?php endif; ?>
                    </div>
                    <div class="col-auto">
                        <?php if (!isset($config_hidden['notifikasi']) || $config_hidden['notifikasi'] != true) : ?>
                            <a href="<?= base_url('notifikasi'); ?>" target="_self" class="btn btn-44 rounded-circle btn-notifikasi">
                                <img src="<?= base_url(); ?>assets/icons/notif.png" width="24" alt="">
                                <span class="count-indicator"></span>
                            </a>
                        <?php endif; ?>

                        <?php if (isset($right_button['profil'])) : ?>
                            <button type="button" class="btn btn-44" id="button_submit_atas" onclick="submit_form(this,'#form_ubah_profil',0,'#ec3528')">
                                <i class="fa-solid fa-check"></i>
                            </button>

                        <?php endif; ?>


                        <?php if (isset($right_button['ubah_password'])) : ?>
                            <button type="button" class="btn btn-44" id="button_submit_password_atas" onclick="submit_form(this,'#form_update_password',0,'#ec3528')">
                                <i class="fa-solid fa-check"></i>
                            </button>

                        <?php endif; ?>

                        <?php if (isset($config_hidden['notifikasi']) && !isset($right_button)) : ?>
                            <a href="#" target="_self" class="btn btn-44"> </a>
                        <?php endif; ?>

                        <?php if (isset($right_button['laporan_ujian'])) : ?>
                            <a href="#" target="_self" class="btn btn-44" data-bs-toggle="modal" data-bs-target="#filterUjian"><i class="fa-regular fa-filter"></i></a>
                        <?php endif; ?>

                    </div>

                </div>
                <?php if (isset($khusus['notifikasi'])) : ?>
                    <div class="row mt-2 d-none" id="action_notifikasi">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <button type="button" id="btn_bca_ntf" class="btn btn-danger rounded-pill btn-notifikasi-fill"><span class="span-notifikasi">Tandai sudah dibaca</span></button>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <button type="button" id="btn_hps_ntf" onclick="submit_form(this,'#form_action_notifikasi')" class="btn btn-danger rounded-pill btn-notifikasi-outline"><span class="span-notifikasi">Hapus Notifikasi</span></button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            </header>
            <!-- Header ends -->