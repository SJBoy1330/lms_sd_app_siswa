<!-- Header -->
<header class="header tugas-ujian position-fixed" style="background-color: #EC3528;">
    <div class="row">
        <div class="col-auto">
            <a href="<?= base_url('profil')?>" target="_self" class="btn btn-44">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </a>
        </div>
        <div class="col d-flex justify-content-center align-items-center text-center">
            <h6 class="text-white">Laporan Presensi</h6>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44 rounded-circle">

            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="tablinknya-tugas-ujian">
            <div class="col-12 align-self-center tab-wali" style="display: flex; justify-content:center; align-items:center;">
                <button id="defaultOpen" class="tablinks-wali" onclick="openCity(event, 'Tugas')" style=" width: 100%; height: 100%; padding: 10px;">Masuk & Pulang</button>
                <button class="tablinks-wali" onclick="openCity(event, 'Ujian')" style="width: 100%; height: 100%; padding: 10px;">Mata Pelajaran</button>
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
                            <div id="calendar" class="my-2 mx-1 shadow-sm"></div>
                        </div>
                        <div class="col-6">
                            <div class="card card-laporan-presensi">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="row flex-column">
                                        <div class="col align-self-center">
                                            <p class="mb-1 fw-normal text-dark text-center size-15">Jam Masuk</p>
                                            <h2 class="mb-0 text-center" style="color: #EC3528;">07 : 00</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card card-laporan-presensi">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="row flex-column">
                                        <div class="col align-self-center">
                                            <p class="mb-1 fw-normal text-dark text-center size-15">Jam Pulang</p>
                                            <h2 class="mb-0 text-center" style="color: #EC3528;">-- : --</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-12">
                            <div id="calendar_2" class="my-2 mx-1 shadow-sm"></div>
                        </div>
                        <div class="row mt-4 mb-3 px-1">
                            <div class="col">
                                <h6 class="title">Pengumuman</h6>
                            </div>
                            <div class="col-auto align-self-center">
                                <a href="<?= base_url('home/list_pengumuman'); ?>" class="label-merah">Lihat Semua</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 01</p>
                                            <p class="mb-0 size-13 fw-normal text-danger">Tidak Hadir</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 02</p>
                                            <p class="mb-0 size-13 fw-normal text-success">Hadir</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 03</p>
                                            <p class="mb-0 size-13 fw-normal text-warning">Sakit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 04</p>
                                            <p class="mb-0 size-13 fw-normal text-secondary">Alpha</p>
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