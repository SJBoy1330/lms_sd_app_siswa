<!-- Footer -->
<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link mt-1  active" href="index-SD.html">
                    <span>
                        <i class="fa-solid fa-house size-18"></i>
                        <span class="nav-text">Dashboard</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-1 " href="jadwal-SD.html">
                    <span>
                        <i class="far fa-calendar-alt size-18"></i>
                        <span class="nav-text">Jadwal</span>
                    </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#menumodal" id="centermenubtn">
                    <span class="theme-radial-gradient d-flex justify-content-center align-items-center">
                        <i class="bi bi-columns-gap size-22"></i>
                    </span>
                </button>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-1 " href="toko-SD.html">
                    <span>
                        <i class="fa-solid fa-shop size-18"></i>
                        <span class="nav-text">Toko</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-1 " href="akun-SD.html">
                    <span>
                        <i class="fa-solid fa-user size-18"></i>
                        <span class="nav-text">Profil</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<!-- Required jquery and libraries -->
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

<!-- Customized jquery file  -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script src="<?= base_url() ?>assets/js/color-scheme.js"></script>

<!-- PWA app service registration and works -->
<script src="<?= base_url() ?>assets/js/pwa-services.js"></script>

<!-- Chart js script -->
<script src="<?= base_url() ?>assets/vendor/chart-js-3.3.1/chart.min.js"></script>

<!-- Progress circle js script -->
<script src="<?= base_url() ?>assets/vendor/progressbar-js/progressbar.min.js"></script>

<!-- swiper js script -->
<script src="<?= base_url() ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

<!-- page level custom script -->
<script src="<?= base_url() ?>assets/js/app.js"></script>

<script src="<?= base_url() ?>assets/js/pagination-carousel.js"></script>

<script src="<?= base_url() ?>assets/js/global.js"></script>

<?php

if (isset($js_add) && is_array($js_add)) {
    foreach ($js_add as $js) {
        echo $js;
    }
} else {
    echo (isset($js_add) && ($js_add != "") ? $js_add : "");
}

?>