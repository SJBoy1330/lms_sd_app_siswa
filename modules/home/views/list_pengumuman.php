<!-- Begin page -->
<main class="h-100 pt-0">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Pengumuman</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="profile.html" target="_self" class="btn btn-44">

                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container">
        <!-- Pengumuman -->
        <div class="row">
            <?php if (isset($result)) : ?>
                <?php foreach ($result as $row) : ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?= base_url('home/detail_pengumuman'); ?>" class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                            <img src="<?= base_url(); ?>assets/images/no-photo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-1 size-13 fw-normal"><?= nice_title($row->judul, 40) ?></p>
                                        <p class="fw-normal text-secondary size-12"><?= nice_time($row->tanggal_mulai) ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h5>Tidak ada data pengumuman</h5>
            <?php endif; ?>
        </div>
    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->