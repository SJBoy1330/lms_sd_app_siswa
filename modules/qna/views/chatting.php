<!-- main page content -->
<div class="main-container container mb-0">
    <div class="row">
        <div class="col-12 chat-list scroll-y">
            <div class="row no-margin right-chat">
                <div class="main-container container">
                    <div class="row" id="display_chat">
                        <div class="col-12 chat-list scroll-y" id="reload_chat">
                            <?php if ($result) : ?>
                                <?php foreach ($result as $row) : ?>
                                    <?php if ($row->domain == true) : ?>
                                        <div class="row no-margin right-chat">
                                            <div class="col-12">
                                                <div class="chat-block pengirim">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="mb-0 size-15 fw-normal"><?= $row->pesan; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Design Baru Reply Chatting -->
                                        <div class="row no-margin right-chat">
                                            <div class="col-12">
                                                <div class="chat-block pengirim">
                                                    <div class="row flex-column">
                                                        <div class="reply-text-pengirim">
                                                            <div class="column-reply-pengirim flex-wrap">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class="size-12 fw-medium mb-0">Max Smith</p>
                                                                </div>
                                                                <p class="fw-normal size-12">Lorem</p>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-0 mt-2 size-15 fw-normal">lorem</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="row no-margin left-chat my-3">
                                            <div class="col-10">
                                                <div class="chat-block penerima">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="mb-0 ms-1 size-15 fw-normal"><?= $row->pesan; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <div class="row no-margin left-chat  my-3">
                                    <div class="col-12">
                                        <div class="chat-block penerima">
                                            <div class="row flex-column">
                                                <div class="reply-text-penerima">
                                                    <div class="column-reply-penerima flex-wrap">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="size-12 fw-medium mb-0">Max Smith</p>
                                                        </div>
                                                        <p class="fw-normal size-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias animi saepe perspiciatis..</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <p class="mb-0 mt-2 size-15 fw-normal"> Sama sama, semangat ya semoga dapat nilai bagus</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div style="height : 100px;"></div>
                                
                            <?php else : ?>
                                <?= vector_default('vector_personal_chat.svg', 'Tidak ada chat', 'Anda belum melakukan obrolan hari ini, kirim pesan pada guru anda !') ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="position-fixed bottom-0 start-0 chat-post">
                        <form class="row gx-3 typing-area">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <div class="wrapper-password d-flex flex-wrap">
                                        <input type="hidden" id="id_pelajaran" value="0">
                                        <input type="hidden" id="id_materi" name="id_materi">
                                        <input type="hidden" name="id_diskusi_tanya" id="id_diskusi_tanya" value="<?= $id_diskusi_tanya; ?>">
                                        <div class="reply-text">
                                            <div class="column-reply flex-wrap">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="size-15 fw-medium mb-0">Max Smith</p>
                                                    <button class="btn btn-sm btn-block"><i class="fa-regular fa-xmark" style="color: #8e8e8e;"></i></button>
                                                </div>
                                                <p class="fw-normal size-12 mb-2">Lorem</p>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control form-control-pribadi input-field chatting border-0" name="pesan" id="pesan" placeholder="Tulis Pesan" autocomplete="off">
                                        <a href="#" class="input-group-append tambah-file" data-bs-toggle="modal" data-bs-target="#menuModalChatting" id="centermenubtn">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-plus size-20 text-white"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-danger btn-44 rounded-circle avatar p-0 button-kirim-pesan submit-chat" type="button" data-bs-toggle="modal" data-bs-target="#attachefiles" disabled>
                                    <i class="fa-regular fa-paper-plane size-22 text-white"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Chatting -->
<div class="modal fade" id="menuModalChatting" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content shadow position-absolute" style="bottom: 65px;">
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <a href="#" class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-20 bg-danger mb-2" data-bs-toggle="modal" data-bs-target="#pelajaranModal" aria-hidden="true">
                            <div class="circle-bg-top"></div>
                            <div class="circle-bg-bottom"></div>
                            <div class="icons text-danger">
                                <i class="fa-solid fa-book-open-cover size-28 text-white"></i>
                            </div>
                        </a>
                        <p class="size-13 text-secondary">Materi</p>
                    </div>

                    <div class="col-auto text-center">
                        <input id="upload-file" type="file" />
                        <a href="javascript:void(0)" id="upload" class="avatar avatar-60 p-1 shadow-sm shadow-primary rounded-20 bg-secondary mb-2">
                            <div class="circle-bg-top"></div>
                            <div class="circle-bg-bottom"></div>
                            <div class="icons text-purple">
                                <i class="fa-solid fa-file size-28 text-white"></i>
                            </div>
                        </a>
                        <p class="size-13 text-secondary">Dokumen</p>
                    </div>

                    <div class="col-auto text-center">
                        <input id="upload-file2" type="file" />
                        <a href="javascript:void(0)" id="upload2" class="avatar avatar-60 p-1 shadow-sm shadow-info rounded-20 bg-image-modal mb-2" >
                            <div class="circle-bg-top"></div>
                            <div class="circle-bg-bottom"></div>
                            <div class="icons text-success">
                                <i class="fa-solid fa-image size-28 text-white"></i>
                            </div>
                        </a>
                        <p class="size-13 text-secondary">Foto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Image -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen">
        <div class="modal-content position-absolute bottom-0" style="border-radius: 15px 15px 0px 0px; height: 75%;">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="avatar-upload">
                    <div class="avatar-preview">
                        <figure style="background-image: url(<?= base_url(); ?>assets/images/naruto.png);"></figure>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <div class="position-fixed bottom-0 start-0 chat-post">
                    <div class="row gx-3">
                        <div class="col">
                            <div class="form-group mb-2">
                                <div class="wrapper-password d-flex">
                                    <input type="text" class="form-control form-control-pribadi ps-3 chatting" name="text" id="password" placeholder="Tulis Pesan" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-danger btn-44 rounded-circle avatar p-0 button-kirim-pesan" type="button" data-bs-toggle="modal" data-bs-target="#attachefiles">
                                <i class="fa-regular fa-paper-plane size-22 text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Pelajaran -->
<div class="modal fade" id="pelajaranModal" tabindex="-1" aria-labelledby="pelajaranModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen">
        <div class="modal-content position-absolute bottom-0" style="border-radius: 15px 15px 0px 0px; height: 75%;">
            <div class="modal-header header-materi">
                <h5 class="modal-title" id="pelajaranModalLabel">Materi Pelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body body-materi" id="pelajaran">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <?php if ($pelajaran) : ?>
                            <?php foreach ($pelajaran as $row) : ?>
                                <div class="card mb-4" onclick="toBab(<?= $row->id_pelajaran; ?>)">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <p class="mb-0 size-15 fw-medium"><?= $row->nama_pelajaran; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <?= vector_default('vector_jadwal_kosong.svg', 'Tidak ada pelajaran!', 'Guru ini tidak mengajar mapel apapun, silahkan hubguni admin jika terjadi kesalahan!'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="modal-body body-materi hiding" id="bab_materi">
                <div class="row">
                    <div class="col-12 mx-auto" id="display_bab_materi">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Profile -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-center">
                <div class="image-profile position-relative text-center">
                    <figure class="avatar avatar-125 rounded-35 shadow-sm position-relative avatar-profile">
                        <img src="<?= base_url(); ?>assets/img/user1.jpg" alt="" class="rounded-20" id="photouser">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-0">
                <div class="box-fiture">
                    <div class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-3 mx-3">
                        <div class="row p-2">
                            <div class="d-flex col-auto align-items-center ">
                                <div class="bg-ec3528 rounded-10 icon-box-profile d-flex justify-content-center align-items-center fs-3 text-light">
                                    <i class="fa-solid fa-user size-18"></i>
                                </div>
                            </div>
                            <div class="col align-self-center p-0">
                                <p class="mb-0 fw-bold size-14">Nama Lengkap</p>
                                <p class="text-secondary size-12">Drs. Hendrawati Kusumaningsih Sagaru Saputri</p>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-3 mx-3">
                        <div class="row p-2">
                            <div class="d-flex col-auto align-items-center ">
                                <div class="bg-ec3528 rounded-10 icon-box-profile d-flex justify-content-center align-items-center fs-3 text-light">
                                    <i class="fa-solid fa-location-dot size-20"></i>
                                </div>
                            </div>
                            <div class="col align-self-center p-0">
                                <p class="mb-0 fw-bold size-14">Alamat Lengkap</p>
                                <p class="text-secondary size-12">Sidoarjo</p>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-3 mx-3">
                        <div class="row p-2">
                            <div class="d-flex col-auto align-items-center ">
                                <div class="bg-ec3528 rounded-10 icon-box-profile d-flex justify-content-center align-items-center fs-3 text-light">
                                    <i class="fa-solid fa-venus-mars size-20"></i>
                                </div>
                            </div>
                            <div class="col align-self-center p-0">
                                <p class="mb-0 fw-bold size-14">Jenis Kelamin</p>
                                <p class="text-secondary size-12">Perempuan</p>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-3 mx-3">
                        <div class="row p-2">
                            <div class="d-flex col-auto align-items-center ">
                                <div class="bg-ec3528 rounded-10 icon-box-profile d-flex justify-content-center align-items-center fs-3 text-light">
                                    <i class="fa-solid fa-envelope size-20"></i>
                                </div>
                            </div>
                            <div class="col align-self-center p-0">
                                <p class="mb-0 fw-bold size-14">Email</p>
                                <p class="text-secondary size-12">sakadana2003@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-3 mx-3">
                        <div class="row p-2">
                            <div class="d-flex col-auto align-items-center ">
                                <div class="bg-ec3528 rounded-10 icon-box-profile d-flex justify-content-center align-items-center fs-3 text-light">
                                    <i class="fa-solid fa-phone size-20"></i>
                                </div>
                            </div>
                            <div class="col align-self-center p-0">
                                <p class="mb-0 fw-bold size-14">Nomot Telepon</p>
                                <p class="text-secondary size-12">081234567819</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>