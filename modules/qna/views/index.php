<!-- main page content -->
<div class="main-container container top-20">
    <div class="row" style="margin-top: 40px;">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="row mb-2">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card shadow-none bg-transparent">
                        <div class="card-body tabcontent" id="Personal">
                            <a href="<?= base_url('qna/kontak_personal') ?>" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
                                <i class="fa-solid fa-message-lines size-26 text-white mt-1"></i>
                            </a>
                            <?php if ($result) : ?>
                                <?php foreach ($result as $row) : ?>
                                    <div>
                                        <a href="<?= base_url('qna/chatting/' . $row->id_diskusi_tanya) ?>" class="card mb-3 target_search_1 showing">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                            <img src="<?= $row->foto; ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col align-self-center ps-0">
                                                        <p class="mb-1 size-13 fw-medium"><?= $row->nama_staf; ?></p>
                                                        <p class="text-muted text-secondary size-12"><?= ifnull($row->last_chat, '.....') ?></p>
                                                    </div>
                                                    <div class="col-auto align-self-center pesan-sd position-absolute">
                                                        <p class="mb-0 ms-1 size-10 fw-medium"><?= $row->waktu; ?></p>
                                                        <!-- <span class="badge rounded-pill bg-danger badge-notifikasi">3</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php endforeach; ?>
                            <?php endif; ?>
                            <?= vector_default('vector_chatting_kosong.svg', 'Tidak ada obrolan', 'Anda belum memulai obrolan apapun, hubungi pihak sekolah jika terjadi kesalahan!', 'vector_pesan', count($result)) ?>
                        </div>

                        <div class="card-body tabcontent" id="Grup">
                            <a href="<?= base_url('qna/kontak_grup'); ?>" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
                                <i class="fa-solid fa-messages size-26 text-white mt-1"></i>
                            </a>
                            <a href="<?= base_url('qna/chatting_grup') ?>" class="card mb-3 target_search_2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                                <img src="<?= base_url('assets/img/company2.png') ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Grup Kelas Unggulan</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin berta...</p>
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
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Grup Ketua Kelas & Staf</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin berta...</p>
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
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Grup Osis</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin berta...</p>
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
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Grup MPK</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin berta...</p>
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
                                                <i class="fa-solid fa-people-group size-26 text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-medium">Grup Seminar</p>
                                            <p class="text-muted text-secondary size-12">Selamat pagi bu, ijin bertan...</p>
                                        </div>
                                        <div class="col-auto align-self-center pesan-sd position-absolute">
                                            <p class="mb-0 ms-1 size-13 fw-medium">7.30</p>
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