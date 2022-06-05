<!-- Header -->
<header class="header position-fixed">
    <div class="row">
        <div class="col-auto">
            <a href="<?= base_url('tugas'); ?>" class="btn btn-44">
                <i class="fa-solid fa-chevron-left text-dark"></i>
            </a>
        </div>
        <div class="col text-center">
            <div class="logo-small">
                <h6>Detail Tugas Sekolah</h6>
            </div>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44"></a>
        </div>
    </div>
</header>
<!-- Header ends -->
<div class="main-container container">
    <div class="row">
        <div class="col-12">
            <a class="row">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 mb-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15">Tugas 1</p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Mata Pelajaran</p>
                                <p class="mb-0 fw-normal size-14">Bahasa Indonesia</p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mb-3">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 44px;">
                                        <i class="fa-regular fa-hourglass-clock size-18 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Batas Waktu</p>
                                <p class="mb-0 fw-normal size-14">11 Januari 2022</p>
                            </div>
                        </div>

                        <div class="row py-1 px-2 mb-2">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-regular fa-memo-pad size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Keterangan</p>
                                <!-- <p class="mb-0 fw-normal size-15 flex-column flex-wrap">1. Mengerjakan Halaman 1 & 2 & 3, 2. Mengerjakan Algoritma </p> -->
                                <div class="d-flex flex-column flex-wrap">
                                    <p class="mb-1 fw-normal size-14">1. Mengerjakan Paket Matematika Halaman 1 dan 2</p>
                                    <p class="mb-1 fw-normal size-14">1. Mengerjakan Paket BIG Halaman 1 dan 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1 px-2">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 44px;">    
                                        <i class="fa-solid fa-list-check size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-1 fw-normal size-13 text-secondary">Tugas Anda</p>
                                <button class="btn btn-success btn-xs text-white btn-download-tugas"><i class="fa-regular fa-download me-2"></i>Download Tugas</button>
                            </div>
                        </div>
                    </div>
                </a>
            </a>

            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                <div class="row mb-3">
                    <div class="col">
                        <p class="fw-bolder size-15">Tugas Anda</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="file-input pe-1">
                            <input type="file" name="file-input" id="file-input" class="file-input__input" />
                            <label class="file-input__label" for="file-input">
                                <span><i class="fa-regular fa-plus me-1"></i>Upload Tugas</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-pdf size-30 text-danger"></i>
                                </div>
                            </div>
                            <a href="#modalPDF" data-bs-toggle="modal" role="button" class="col align-self-center ps-0">
                                <p class="mb-0 size-14 text-dark fw-normal">tugas_ba.pdf</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">PDF document</p>
                            </a>
                            <div class="col-auto align-self-center text-end ms-3">
                                <button class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-word size-30 text-primary"></i>
                                </div>
                            </div>
                            <a href="#modalWord" data-bs-toggle="modal" role="button" class="col align-self-center ps-0">
                                <p class="mb-0 size-14 text-dark fw-normal">tugas_il.docx</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">Word document</p>
                            </a>
                            <div class="col-auto align-self-center text-end ms-3">
                                <button class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-image size-30 text-warning"></i>
                                </div>
                            </div>
                            <a href="#modalGambar" data-bs-toggle="modal" role="button" class="col align-self-center ps-0">
                                <p class="mb-0 size-14 text-dark fw-normal">tugas_me.png</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">Gambar document</p>
                            </a>
                            <div class="col-auto align-self-center text-end ms-3">
                                <button class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mx-1">
                    <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Batalkan Pengiriman</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gambar -->
<div class="modal fade" id="modalGambar" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail_tugas">
            <div class="modal-header border-0">
                <div class="row" style="width: 100vw;">
                    <div class="col-auto">
                        <a href="<?= base_url('tugas/detail_tugas');?>" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <p class="size-14 text-white">tugas_bahasa_indo.png</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                            <i class="fa-regular fa-download text-white" style="font-size: 20px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="image-preview" style="background-image: url(<?= base_url(); ?>assets/img/categories5.png);">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>

<!-- Modal PDF -->
<div class="modal fade" id="modalPDF" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail_tugas">
            <div class="modal-header border-0">
                <div class="row" style="width: 100vw;">
                    <div class="col-auto">
                        <a href="<?= base_url('tugas/detail_tugas');?>" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <p class="size-14 text-white">tugas_bahasa_indo.pdf</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                            <i class="fa-regular fa-download text-white" style="font-size: 20px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="image-preview-pdf">
                    <img src="<?= base_url('assets/images/pdf.svg')?>" width="125" alt="">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>

<!-- Modal Word -->
<div class="modal fade" id="modalWord" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail_tugas">
            <div class="modal-header border-0">
                <div class="row" style="width: 100vw;">
                    <div class="col-auto">
                        <a href="<?= base_url('tugas/detail_tugas');?>" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <p class="size-14 text-white">tugas_bahasa_indo.docx</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                            <i class="fa-regular fa-download text-white" style="font-size: 20px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="image-preview-word">
                    <img src="<?= base_url('assets/images/doc.svg')?>" width="125" alt="">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>