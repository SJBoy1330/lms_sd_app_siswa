
<!-- Header -->
<header class="header position-fixed">
    <div id="header" class="row">
        <div class="col-auto">
            <a href="javascript:void(0)" target="_self" class="btn btn-44 rounded-circle menu-btn number-exam">
                <i class="fa-regular fa-objects-column" style="font-size:20px; color: #EC3528;"></i>
            </a>
        </div>
        <div class="col d-flex justify-content-center align-items-center text-center">
            <h6 class="text-dark">Paket Ujian 01</h6>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44"></a>
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- main page content -->
<div class="main-container container">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card shadow-none bg-transparent">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row mt-2">
                                    <div class="col align-self-center">
                                        <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>3</span> dari <span>40</span> soal</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col align-self-center">
                                        <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
    
                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                        
                                        <label>
                                        
                                            <input class="form-control form-control-solid form-control-pribadi" type="text" placeholder="Isikan jawaban anda">

                                        </label>
                                        
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

<footer class="footer footer-ujian">
    <div id="footer" class="container">
        <div class="row d-flex justify-content-between align-items-center my-3">
            <div class="col-12 d-flex justify-content-center align-self-center pe-4">
                <div class="timer-exam d-flex justify-content-center align-items-center py-2">
                    <i class="fa-solid fa-hourglass-clock me-2" style="font-size: 15px; color: #EC3528;"></i>
                    <p class="size-13" style="color: #EC3528">00 : 60 : 00</p>
                </div>
            </div>
        </div>  
        <div class="border-bottom"></div>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-3 d-flex justify-content-center align-items-center"><a href="<?= base_url('ujian/exam_multiple')?>" class="btn btn-danger d-flex justify-content-center align-items-center rounded-circle next-button"><i class="fa-solid fa-chevron-left text-white"></i></a></div>
            <div class="col-6 d-flex justify-content-center align-items-center"><button class="btn btn-outline-warning rounded-pill ragu-button">Ragu - Ragu</button></div>
            <div class="col-3 d-flex justify-content-center align-items-center"><a href="<?= base_url('ujian/exam_esai_panjang')?>" class="btn btn-danger d-flex justify-content-center align-items-center  rounded-circle previous-button"><i class="fa-solid fa-chevron-right text-white"></i></a></div>
        </div>
    </div>
</footer>