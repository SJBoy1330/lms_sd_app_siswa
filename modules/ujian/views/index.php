<!-- Header -->
<header class="header tugas-ujian position-fixed" style="background-color: #EC3528;">
    <div class="row">
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </a>
        </div>
        <div class="col d-flex justify-content-center align-items-center text-center">
            <h6 class="text-white">Ujian Online</h6>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44"></a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="tablinknya-tugas-ujian">
            <div class="col-12 align-self-center tab-wali" style="display: flex; justify-content:center; align-items:center;">
                <button id="defaultOpen" class="tablinks-wali" onclick="openCity(event, 'Tugas')" style=" width: 100%; height: 100%; padding: 10px;">Daftar Ujian</button>
                <button class="tablinks-wali" onclick="openCity(event, 'Ujian')" style="width: 100%; height: 100%; padding: 10px;">Daftar Riwayat</button>
            </div>
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- main page content -->
<div class="main-container container">
    <div class="row mb-2">
        <div class="col-12 col-md-12 col-lg-12" style="margin-top: 60px;">
            <div class="card shadow-none bg-transparent">
                <div class="card-body tabcontent-wali" id="Tugas" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <a href="<?= base_url('ujian/detail_ujian')?>" class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium text-dark">Paket Ujian 01</p>
                                            <p class="mb-0 size-12 fw-normal text-secondary">Bahasa Indonesia | 11 Jan 2021</p>
                                        </div>
                                        <div class="col-auto align-self-center ps-0">
                                            <span class="badge rounded-pill bg-time-exam text-danger fw-normal size-8">07:00 - 08:00</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card mb-3">
                                <a href="<?= base_url('ujian/detail_ujian')?>" class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium text-dark">Paket Ujian 02</p>
                                            <p class="mb-0 size-12 fw-normal text-secondary">Bahasa Indonesia | 11 Jan 2021</p>
                                        </div>
                                        <div class="col-auto align-self-center ps-0">
                                            <span class="badge rounded-pill bg-time-exam text-danger fw-normal size-8">08:00 - 09:00</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card mb-3">
                                <a href="<?= base_url('ujian/detail_ujian')?>" class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium text-dark">Paket Ujian 03</p>
                                            <p class="mb-0 size-12 fw-normal text-secondary">Bahasa Indonesia | 11 Jan 2021</p>
                                        </div>
                                        <div class="col-auto align-self-center ps-0">
                                            <span class="badge rounded-pill bg-time-exam text-danger fw-normal size-8">09:00 - 10:00</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Paket Ujian 01</p>
                                            <p class="mb-0 size-12 fw-normal text-secondary">Bahasa Indonesia | 11 Jan 2021</p>
                                        </div>
                                        <div class="col-auto align-self-center ps-0">
                                            <span class="badge rounded-pill bg-history-exam text-success fw-normal size-8">Pembahasan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Paket Ujian 02</p>
                                            <p class="mb-0 size-12 fw-normal text-secondary">Bahasa Indonesia | 11 Jan 2021</p>
                                        </div>
                                        <div class="col-auto align-self-center ps-0">
                                            <span class="badge rounded-pill bg-history-exam text-success fw-normal size-8">Pembahasan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Paket Ujian 03</p>
                                            <p class="mb-0 size-12 fw-normal text-secondary">Bahasa Indonesia | 11 Jan 2021</p>
                                        </div>
                                        <div class="col-auto align-self-center ps-0">
                                            <span class="badge rounded-pill bg-history-exam text-success fw-normal size-8">Pembahasan</span>
                                        </div>
                                    </div>
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