<div id="sidemenu" class="sidebar-wrap  sidebar-overlay sidebar-fullmenu">
    <!-- Add pushcontent or fullmenu instead overlay -->
    <div id="content_sidemenu">
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 profile-sidebar">
                    <div class="row mt-3">
                        <div class="col-auto">
                            <figure class="avatar avatar-80 rounded-20 p-1 bg-white shadow-sm">
                                <img src="<?= base_url('assets/images/mia-khalifa.png') ?>" alt="" class="rounded-18">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h5 class="mb-0 text-dark">Mia Khalifah</h5>
                            <p class="text-muted size-12">XI IPA 1</p>
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
<!-- Header -->
<header class="header position-fixed">
    <div id="header" class="row">
        <div class="col-auto">
            <a href="javascript:void(0)" target="_self" class="btn btn-44 rounded-circle menu-btn number-exam">
                <i class="fa-regular fa-objects-column" style="font-size:20px; color: #EC3528;"></i>
            </a>
        </div>
        <div class="col d-flex justify-content-center align-items-center text-center">
            <h6 class="text-dark">Paket Ujian 01</h6>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44">
            </a>
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- main page content -->
<div class="main-container container">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card shadow-none bg-transparent">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row mt-2">
                                    <div class="col align-self-center">
                                        <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>1</span> dari <span>40</span> soal</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col align-self-center">
                                        <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
    
                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                        
                                        <label>
                                        <input type="radio" name="product" selected checked class="card-input-element" />

                                            <div class="card card-default card-input">
                                                <div class="card-body">
                                                    <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non..</p>
                                                </div>
                                            </div>

                                        </label>
                                        
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                        
                                        <label>
                                        <input type="radio" name="product" class="card-input-element" />

                                            <div class="card card-default card-input">
                                                <div class="card-body">
                                                    <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non.</p>
                                                </div>
                                            </div>
                                        </label>
                                        
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                        
                                        <label>
                                        <input type="radio" name="product" selected checked class="card-input-element" />

                                            <div class="card card-default card-input">
                                                <div class="card-body">
                                                    <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non..</p>
                                                </div>
                                            </div>

                                        </label>
                                        
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                        
                                        <label>
                                        <input type="radio" name="product" class="card-input-element" />

                                            <div class="card card-default card-input">
                                                <div class="card-body">
                                                    <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non.</p>
                                                </div>
                                            </div>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- main page content ends -->

<footer class="footer footer-ujian">
    <div id="footer" class="container">
        <div class="row d-flex justify-content-between align-items-center my-3">
            <div class="col-12 d-flex justify-content-center align-self-center pe-4">
                <div class="timer-exam d-flex justify-content-center align-items-center py-2">
                    <i class="fa-solid fa-hourglass-clock me-2" style="font-size: 15px; color: #EC3528;"></i>
                    <p class="size-13" style="color: #EC3528">00 : 60 : 00</p>
                </div>
            </div>
        </div> 
        <div class="border-bottom"></div>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-3 d-flex justify-content-center align-items-center"><a href="#" class="btn btn-danger d-flex justify-content-center align-items-center rounded-circle next-button"><i class="fa-solid fa-chevron-left text-white"></i></a></div>
            <div class="col-6 d-flex justify-content-center align-items-center"><button class="btn btn-outline-warning rounded-pill ragu-button">Ragu - Ragu</button></div>
            <div class="col-3 d-flex justify-content-center align-items-center"><a href="<?= base_url('ujian/exam_multiple')?>" class="btn btn-danger d-flex justify-content-center align-items-center  rounded-circle previous-button"><i class="fa-solid fa-chevron-right text-white"></i></a></div>
        </div>
    </div>
</footer>