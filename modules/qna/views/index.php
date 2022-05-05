<!-- Header -->
<header class="header position-fixed">
    <div class="row">
        <div class="col-auto">
            <a href="<?= base_url('home')?>" class="btn btn-44">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>
        <div class="col text-center">
            <div class="logo-small">
                <h5>Pesan</h5>
            </div>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44"></a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 mx-auto">
            <div class="input-group">
                <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 align-self-center tab" style="display: flex; justify-content:center; align-items:center;">
            <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'Personal')" style=" width: 100%; height: 100%; padding: 5px;">Pesan <span class="badge rounded-pill bg-danger ms-1">3</span></button>
            <button class="tablinks" onclick="openCity(event, 'Grup')" style="width: 100%; height: 100%; padding: 5px;">Pesan Grup</button>
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- main page content -->
<div class="main-container container top-20">
    <div class="row" style="margin-top: 125px;">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="row mb-2">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card shadow-none bg-transparent">
                        <div class="card-body tabcontent" id="Personal">
                            <a href="#" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
                                <i class="fa-solid fa-message-lines size-26 text-white mt-1"></i>
                            </a>
                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                <img src="<?= base_url('assets/img/user2.jpg')?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Drs. Sri Handayani S.Pd</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin ber...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-13 fw-medium">7.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                <img src="<?= base_url('assets/img/user1.jpg')?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Sutiaji S.Pd</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bapak sutiaji...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-13 fw-medium">8.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                <i class="fa-solid fa-user-astronaut size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Gunawan S.Pd</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bapak gunawan...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-13 fw-medium">8.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                <i class="fa-solid fa-user-astronaut size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Radit S.Pd</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bapak radit...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-13 fw-medium">8.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                <img src="<?= base_url('assets/img/user3.jpg')?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Sri Wahyuni S.Pd</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bapak radit...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-13 fw-medium">8.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body tabcontent" id="Grup">
                            <a href="#" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
                                <i class="fa-solid fa-messages size-26 text-white mt-1"></i>
                            </a>
                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 rounded-circle avatar-pesan">
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-15 fw-medium">Grup Kelas Unggulan</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin bertanya unt...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-15 fw-medium">7.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 rounded-circle avatar-pesan">
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-15 fw-medium">Grup Ketua Kelas & Staf</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin bertanya unt...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-15 fw-medium">7.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 rounded-circle avatar-pesan">
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-15 fw-medium">Grup Osis</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin bertanya unt...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-15 fw-medium">7.30</p>
                                            <span class="badge rounded-pill bg-danger badge-notifikasi">3</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main page content ends -->