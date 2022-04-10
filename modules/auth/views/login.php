 <!-- Begin page content -->
 <main class="container-fluid h-100 ">
     <div class="row h-100">
         <div class="col-11 col-sm-11 mx-auto">

             <div class="row">
                 <header class="header">
                     <div class="row">
                         <div class="col">
                             <!-- <div class="logo-small">
                                    <img src="assets/img/logo.png" alt="" />
                                    <h5><span class="text-secondary fw-light">Finance</span><br />Wallet</h5>
                                </div> -->
                         </div>
                         <div class="col-auto align-self-center">
                             <!-- <a href="signup.html">Sing up</a> -->
                         </div>
                     </div>
                 </header>
             </div>

         </div>

         <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
             <div class="text-center my-5">
                 <p class="mb-1 title-1">Log in App Siswa</p>
                 <p class="mb-0 fw-600 size-18 title-2">Masuk dengan username dan kata sandi</p>
             </div>

             <div class="mb-4">
                 <label for="exampleFormControlInput1" class="form-label title-3">Kode Sekolah</label>
                 <input type="text" class="form-control form-control-pribadi" id="exampleFormControlInput1" placeholder="Masukkan Username" autocomplete="off">
             </div>

             <div class="mb-4">
                 <label for="exampleFormControlInput2" class="form-label title-3">Username</label>
                 <input type="text" class="form-control form-control-pribadi" id="exampleFormControlInput2" placeholder="Masukkan Username" autocomplete="off">
             </div>

             <div class="form-group mb-4">
                 <label for="exampleFormControlInput3" class="form-label title-3">Kata Sandi</label>
                 <div class="wrapper-password d-flex">
                     <input type="password" class="form-control form-control-pribadi" name="password" id="password" placeholder="Masukkan kata sandi" autocomplete="off">

                     <div class="input-group-append show-hide">

                         <span class="input-group-text" onclick="password_show_hide();">

                             <i class="bi bi-eye" id="show_eye"></i>

                             <i class="bi bi-eye-slash d-none" id="hide_eye"></i>

                         </span>

                     </div>
                 </div>
             </div>

             <div class="mb-4 d-flex justify-content-between align-items-center">
                 <label class="form-check-label fw-600" for="flexCheckDefault">
                     <input class="form-check-input form-check-input-pribadi me-1" type="checkbox" value="" id="flexCheckDefault">
                     Ingat saya
                 </label>

                 <a href="<?= base_url('auth/send_email') ?>" onclick="unreload()" class="label-merah">
                     Lupa kata sandi?
                 </a>
             </div>
         </div>
         <div class="col-11 col-sm-11 mt-auto mx-auto pt-4 pb-5">
             <div class="row">
                 <div class="col-12 d-flex justify-content-center d-grid">
                     <a href="<?= base_url('home'); ?>" class="btn btn-lg shadow-sm btn-pribadi">Masuk</a>
                 </div>
             </div>
         </div>
     </div>
 </main>