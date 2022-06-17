<div class="main-container container">
    <div class="row">
        <div class="col-12">

            <a class="row">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 mb-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15"><?= $result->detail->nama_pelajaran; ?></p>
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
                                <p class="mb-0 fw-normal size-13 text-secondary">Tugas</p>
                                <p class="mb-0 fw-normal size-14"><?= $result->detail->nama; ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 42px;">
                                        <i class="fa-solid fa-hourglass-clock size-18 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Batas Waktu</p>
                                <p class="mb-0 fw-normal size-14"><?= nice_date_time($result->detail->batas_waktu); ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-memo-pad size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Keterangan</p>
                                <p class="mb-0 fw-normal size-14"><?= $result->detail->keterangan; ?></p>
                            </div>
                        </div>
                        <?php if ($result->tugas_siswa) : ?>
                            <?php if ($result->tugas_siswa->status) : ?>
                                <div class="row py-1 px-2 mt-2 mb-2 ">
                                    <div class="d-flex col-auto ps-0 pe-2">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-circle-dot size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Status</p>
                                        <p class="mb-0 fw-normal size-14"><?= $result->tugas_siswa->status; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($result->tugas_siswa->nilai) : ?>
                                <div class="row py-1 px-2 mt-2 mb-2 ">
                                    <div class="d-flex col-auto ps-0 pe-2">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Nilai</p>
                                        <p class="mb-0 fw-normal size-14"><?= $result->tugas_siswa->nilai; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </a>
            </a>
            <?php if ($result->download) : ?>
                <div class="list-group-item rounded-15 mb-3 shadow-sm position-relative overflow-hidden p-3">

                    <?php foreach ($result->download as $row) : ?>
                        <div class="card shadow-sm mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 rounded-10 bg-document">
                                            <!-- <i class="fa-solid fa-file-pdf size-30 text-danger"></i> -->
                                            <?= get_icon_file($row->extension); ?>
                                        </div>
                                    </div>
                                    <a href="<?= $row->file; ?>" role="button" class="col align-self-center ps-0">
                                        <p class="mb-0 size-14 text-dark fw-normal"><?= $row->nama; ?></p>
                                        <p class="mb-0 size-12 fw-normal text-secondary"><?= strtoupper($row->extension); ?> File</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                <div class="row mb-3">
                    <div class="col">
                        <p class="fw-bolder size-15">Tugas Anda</p>
                    </div>
                    <?php if (strtotime($result->detail->batas_waktu) < strtotime(date('Y-m-d H:i:s'))) : ?>
                        <?php if ($result->tugas_siswa == NULL) : ?>
                            <?php if ($result->detail->izin_terlambat == 'Y') : ?>
                                <div class="col-auto align-self-center">
                                    <div class="file-input pe-1">
                                        <input type="file" name="file-input" id="file-input" name="files[]" multiple="multiple" class="file-input__input" />
                                        <label class="file-input__label" for="file-input">
                                            <span><i class="fa-regular fa-plus me-1"></i>Upload Tugas</span>
                                        </label>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-auto align-self-center">
                                    <div class="file-input pe-1">
                                        <span class="text-danger">Tidak mengerjakan</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php else : ?>
                            <div class="col-auto align-self-center">
                                <div class="file-input pe-1">
                                    <span><?= $result->tugas_siswa->status; ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if ($result->tugas_siswa != NULL) : ?>
                            <?php if ($result->tugas_siswa->kode_status == NULL || $result->tugas_siswa->kode_status == 3) : ?>
                                <div class="col-auto align-self-center">
                                    <div class="file-input pe-1">
                                        <input type="file" name="file-input" id="file-input" name="files[]" multiple="multiple" class="file-input__input" />
                                        <label class="file-input__label" for="file-input">
                                            <span><i class="fa-regular fa-plus me-1"></i>Upload Tugas</span>
                                        </label>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-auto align-self-center">
                                    <div class="file-input pe-1">
                                        <span><?= $result->tugas_siswa->status; ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php else : ?>
                            <div class="col-auto align-self-center">
                                <div class="file-input pe-1">
                                    <input type="file" name="file-input" id="file-input" class="file-input__input" />
                                    <label class="file-input__label" for="file-input">
                                        <span><i class="fa-regular fa-plus me-1"></i>Upload Tugas</span>
                                    </label>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php if ($result->tugas_siswa->file) : ?>
                    <?php foreach ($result->tugas_siswa->file as $row) : ?>
                        <div class="card shadow-sm mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 rounded-10 bg-document">
                                            <?= get_icon_file($row->ext); ?>
                                        </div>
                                    </div>
                                    <a href="#modalPDF" data-bs-toggle="modal" role="button" class="col align-self-center ps-0">
                                        <p class="mb-0 size-14 text-dark fw-normal"><?= nice_title($row->judul, 20); ?></p>
                                        <p class="mb-0 size-12 fw-normal text-secondary"><?= strtoupper($row->ext); ?> document</p>
                                    </a>
                                    <div class="col-auto align-self-center text-end ms-3">
                                        <button class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!$result->tugas_siswa->file && strtotime($result->detail->batas_waktu) < strtotime(date('Y-m-d H:i:s')) && $result->detail->izin_terlambat == 'N') : ?>
                    <?= vector_default('vector_tugas_kosong.svg', 'Tidak ada jawaban', 'Anda belum mengirimkan jawaban tugas ini, silahkan hubungi guru atau admin sekolah jika terjadi kesalahan'); ?>
                <?php endif; ?>

                <?php if ($result->detail->izin_terlambat == 'Y') : ?>
                    <?php if ((strtotime($result->detail->batas_waktu) < strtotime(date('Y-m-d H:i:s')))) : ?>
                        <div class="row mt-4 mx-1">
                            <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Terlambat</a>
                        </div>
                    <?php else : ?>
                        <?php if ($result->tugas_siswa == NULL) : ?>
                            <div class="row mt-4 mx-1">
                                <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</a>
                            </div>
                        <?php else : ?>
                            <?php if ($result->tugas_siswa->kode_status == NULL) : ?>
                                <div class="row mt-4 mx-1">
                                    <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</a>
                                </div>
                            <?php else : ?>
                                <?php if ($result->tugas_siswa->kode_status != 2) : ?>
                                    <div class="row mt-4 mx-1">
                                        <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Batalkan Tugas</a>
                                    </div>
                                <?php else : ?>
                                    <div class="row mt-4 mx-1">
                                        <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if ((strtotime($result->detail->batas_waktu) >= strtotime(date('Y-m-d H:i:s')))) : ?>
                        <?php if ($result->tugas_siswa == NULL) : ?>
                            <div class="row mt-4 mx-1">
                                <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</a>
                            </div>
                        <?php else : ?>
                            <?php if ($result->tugas_siswa->kode_status == NULL) : ?>
                                <div class="row mt-4 mx-1">
                                    <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</a>
                                </div>
                            <?php else : ?>
                                <?php if ($result->tugas_siswa->kode_status != 2) : ?>
                                    <div class="row mt-4 mx-1">
                                        <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Batalkan Tugas</a>
                                    </div>
                                <?php else : ?>
                                    <div class="row mt-4 mx-1">
                                        <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
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
                        <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-44">
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
                        <a data-bs-dismiss="modal" aria-label="Close" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <iframe id="iframepdf" src="https://sd.klasq.id/data/sekolah_1/tugas/61d95ce286cdc.pdf"></iframe>
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
                    <img src="<?= base_url('assets/images/pdf.svg') ?>" width="125" alt="">
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
                        <a data-bs-dismiss="modal" aria-label="Close" target="_self" class="btn btn-44">
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
                    <img src="<?= base_url('assets/images/doc.svg') ?>" width="125" alt="">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>