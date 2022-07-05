<!-- Header -->
<header class="header tugas-ujian position-fixed" style="background-color: #EC3528;">
    <div class="row">
        <div class="col-auto">
            <a href="<?= base_url('ujian'); ?>" target="_self" class="btn btn-44">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </a>
        </div>
        <div class="col d-flex justify-content-center align-items-center text-center">
            <h6 class="text-white">Ujian Online</h6>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44 rounded-circle">

            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="tablinknya-tugas-ujian">
            <div class="col-12 align-self-center tab-wali" style="display: flex; justify-content:center; align-items:center;">
                <button id="defaultOpen" class="tablinks-wali" onclick="openCity(event, 'Tugas')" style=" width: 100%; height: 100%; padding: 10px;">Detail Ujian</button>
                <button class="tablinks-wali" onclick="openCity(event, 'Ujian')" style="width: 100%; height: 100%; padding: 10px;">Instruksi Ujian</button>
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
                        <div class="col-6 mb-3 jadwal pe-1">
                            <div class="card">
                                <div class="card-body pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Nama Paket Ujian</p>
                                            <p class="mb-0 text-secondary size-13">Paket Ujian 01</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3 jadwal ps-1">
                            <div class="card">
                                <div class="card-body pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Nama Pelajaran</p>
                                            <p class="mb-0 text-secondary size-13">Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3 jadwal pe-1">
                            <div class="card">
                                <div class="card-body pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-timer size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Waktu Ujian</p>
                                            <p class="mb-0 text-secondary size-13">60 Menit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3 jadwal ps-1">
                            <div class="card">
                                <div class="card-body pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-clipboard-question size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Jumlah Soal</p>
                                            <p class="mb-0 text-secondary size-13">50 Soal Ujian</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mx-1">
                        <a href="<?= base_url('ujian/exam'); ?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Mulai Ujian</a>
                    </div>
                </div>

                <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row mt-2">
                                        <div class="col-auto">
                                            <i class="fa-solid fa-circle" style="color: #ec3528;"></i>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 text-dark fw-normal">Awali dengan berdoa dan akhir dengan alhamdulillah</p>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-auto">
                                            <i class="fa-solid fa-circle" style="color: #ec3528;"></i>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 text-dark fw-normal">Dilarang mengaktifkan Handphone ataupun laptop untuk melaksanakan kegiatan ujian online ini</p>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-auto">
                                            <i class="fa-solid fa-circle" style="color: #ec3528;"></i>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 text-dark fw-normal">Dilarang untuk bertanya kepada teman sebangku</p>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-auto">
                                            <i class="fa-solid fa-circle" style="color: #ec3528;"></i>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 text-dark fw-normal">Dilarang untuk melakukan kegiatan kriminal seperti mengancam teman agar mau memberikan jawaban ujian online miliknya</p>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-auto">
                                            <i class="fa-solid fa-circle" style="color: #ec3528;"></i>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-15 text-dark fw-normal">Dilarang untuk merokok di dalam kelas saat melakukan ujian online di sekolah</p>
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