<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Member Area Alphatech</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/images/logo-sd.png" sizes="180x180">
    <link rel="icon" href="<?= base_url(); ?>assets/media/logos/favicon.ico" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url(); ?>assets/media/logos/favicon.ico" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!--evo calender-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/evo-calendar/css/evo-calendar.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/loader.css" />

    <!-- style css for this template -->
    <link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" id="style">

    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/b2ed95a515.js" crossorigin="anonymous"></script>

    <style>
        h2.swal2-title {
            font-size: 1.5rem;
        }

        div#swal2-content {
            font-size: 1rem;
        }

        button.swal2-confirm {
            background-color: #f73563 !important;
            border-color: #f73563 !important;
            color: #FFFFFF;
            width: 100px;
            /* height: 75px; */
            border-radius: 10px;
        }

        @media only screen and (max-width: 320px) {
            .avatar.avatar-60.avatar-quicklinks {
                line-height: 60px;
                height: 50px;
                width: 50px;
                border-radius: -5px !important;
            }

            i.fa-solid.fa-book-open-cover {
                font-size: 24px;
            }

            i.fa-solid.fa-book-bookmark {
                font-size: 24px;
            }

            i.fa-solid.fa-list-check {
                font-size: 24px;
            }

            i.fa-solid.fa-messages {
                font-size: 24px;
            }
        }
    </style>

</head>

<body class="body-scroll" data-page="index" style="background-image: url(<?= base_url(); ?>assets/media/images/bg-3.png); background-repeat: no-repeat; background-size: cover;">

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-column flex-column-fluid">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="header-top-container container-xxl sabi d-flex flex-grow-1 flex-stack">
                    <!--begin::Header Logo-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px me-2" id="kt_header_menu_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Heaeder menu toggle-->
                        <!--begin::Logo-->
                        <a href="../../demo19/dist/index.html">
                            <!--begin::Desktop modes-->
                            <img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-1-dark.svg" class="d-none d-lg-inline-block h-30px" />
                            <!--end::Desktop modes-->
                            <!--begin::Table & mobile modes-->
                            <img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-2.svg" class="d-lg-none h-25px" />
                            <!--end::Table & mobile modes-->
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header Logo-->
                    <!--begin::Topbar-->
                    <div class="d-flex align-items-center">
                        <!--begin::Toolbar wrapper-->
                        <div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
                            <!--begin::Activities-->
                            <div class="d-flex align-items-center ms-2 ms-lg-3">
                                <!--begin::Drawer toggle-->
                                <div class="btn btn-icon w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Drawer toggle-->
                            </div>
                            <!--end::Activities-->
                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="<?= base_url(); ?>assets/media/avatars/150-26.jpg" alt="user" />
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../../demo19/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../../demo19/dist/apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">Notifications</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../../demo19/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">Language
                                                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                    <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                                    </span>English</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                                                    </span>Spanish</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                                                    </span>German</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                                                    </span>Japanese</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                                                    </span>French</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="../../demo19/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../../demo19/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <div class="menu-content px-5">
                                            <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo19/dist/index.html" />
                                                <span class="pulse-ring ms-n1"></span>
                                                <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User -->
                            <!--begin::Heaeder menu toggle-->
                            <!--end::Heaeder menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
                <!--begin::Container-->
                <div class="header-menu-container d-flex align-items-stretch flex-stack w-100" id="kt_header_nav">
                    <!--begin::Menu wrapper-->
                    <div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-lg-row menu-active-bg menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="kt_header_menu" data-kt-menu="true">
                            <div class="menu-item menu-lg-down-accordion me-lg-1">
                                <a class="menu-link py-3  <?= (set_active($this->uri->segment(1), 'dashboard', $this->uri->segment(2), array())) ?>" href="<?= base_url('dashboard') ?>">
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>
                            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                <span class="menu-link py-3 <?= (set_active($this->uri->segment(1), array('member', 'tim'), $this->uri->segment(2), array())) ?>">
                                    <span class="menu-title">Master</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                    <div class="menu-item menu-lg-down-accordion">
                                        <a href="<?= base_url('member') ?>" class="menu-link py-3">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <i class="fa-duotone fa-users fs-4"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Member</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                    </div>
                                    <div class="menu-item menu-lg-down-accordion">
                                        <a href="#" class="menu-link py-3 <?= (set_active($this->uri->segment(1), 'tim', $this->uri->segment(2), array())) ?>">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <i class="fa-duotone fa-people-group fs-4"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Tim</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                <span class="menu-link py-3 <?= (set_active($this->uri->segment(1), 'projek', $this->uri->segment(2), array())) ?>">
                                    <span class="menu-title">Management</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                    <div href="<?= base_url('projek') ?>" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link py-3 <?= (set_active($this->uri->segment(1), 'projek', $this->uri->segment(2), array())) ?>">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <i class="fa-duotone fa-diagram-project fs-4"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Projek</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        </a>
                                        <a href="#" class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3 <?= (set_active($this->uri->segment(1), 'bug', $this->uri->segment(2), array())) ?>">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <i class="fa-duotone fa-bug fs-4"></i>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title">Bug</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                    <span class="menu-link py-3">
                                        <span class="menu-title">Laporan</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="#">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <i class="fa-duotone fa-file-chart-column fs-4"></i>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title">Laporan Produk</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="#">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <i class="fa-duotone fa-file-chart-column fs-4"></i>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title">Laporan Member</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
                    <!--begin::Toolbar-->
                    <div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start me-3 gap-1">
                            <?php if (isset($judul)) : ?>
                                <!--begin::Title-->
                                <?php if (isset($judul['utama'])) : ?>
                                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3"><?= $judul['utama']; ?>
                                        <?php if (isset($judul['sub'])) : ?>
                                            <!--begin::Separator-->
                                            <span class="h-20px border-gray-400 border-start mx-3"></span>
                                            <!--end::Separator-->
                                            <!--begin::Description-->
                                            <small class="text-gray-500 fs-7 fw-bold my-1"><?= $judul['sub']; ?></small>
                                            <!--end::Description-->
                                        <?php endif; ?>
                                    </h1>
                                <?php endif; ?>
                                <!--end::Title-->
                            <?php endif; ?>
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Button-->
                            <a class="btn btn-sm btn-info" data-bs-toggle="modal" href="#modalTambah" role="button">Tambah</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Main-->
                    <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                        <!--begin::Content-->
                        <div class="content flex-row-fluid" id="kt_content">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-8">
                                <div class="col-xl-4">
                                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url() ?>assets/media/svg/shapes/abstract-1.svg)">
                                        <!--begin::Link-->
                                        <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                            <span class="svg-icon svg-icon-3x mb-5">
                                                <i class="fa-duotone fa-users mt-5 mb-7" style="font-size: 3rem;"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-4 fw-bolder mb-2" style="color: #730856;">Jumlah Member</span>
                                            <span class="text-dark-75 fw-bold fs-5 m-0">10 Member</span>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url() ?>assets/media/svg/shapes/abstract-2.svg)">
                                        <!--begin::Link-->
                                        <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                            <span class="svg-icon svg-icon-3x mb-5">
                                                <i class="fa-duotone fa-diagram-project mt-5 mb-7" style="font-size: 3rem;"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-4 fw-bolder mb-2" style="color: #730856;">Jumlah Project</span>
                                            <span class="text-dark-75 fw-bold fs-5 m-0">20 Project</span>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url() ?>assets/media/svg/shapes/abstract-3.svg)">
                                        <!--begin::Link-->
                                        <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                            <span class="svg-icon svg-icon-3x mb-5">
                                                <i class="fa-duotone fa-people-group mt-5 mb-7" style="font-size: 3rem;"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-4 fw-bolder mb-2" style="color: #730856;">Jumlah Tim</span>
                                            <span class="text-dark-75 fw-bold fs-5 m-0">2 Tim</span>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row gy-5 g-xl-8">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <!--begin::Tables Widget 9-->
                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder fs-3 mb-1">Members Free</span>
                                                <span class="text-muted mt-1 fw-bold fs-7">2 Member</span>
                                            </h3>
                                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary d-none" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->New Member
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-gray-300 align-middle gs-6 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fw-bolder bg-light text-muted">
                                                            <th class="w-50px d-flex justify-content-center align-items-center">No</th>
                                                            <th class="min-w-50px">Nama member</th>
                                                            <th class="min-w-100px text-start">Email</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-50px d-flex justify-content-center align-items-center">
                                                                <p class="text-dark fw-bolder text-hover-primary fs-6">1</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="<?= base_url(); ?>assets/media/avatars/150-11.jpg" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
                                                                        <span class="text-muted fw-bold text-muted d-block fs-7">Programmer</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted fw-bold text-muted d-block fs-6">annasimmons@gmail.com</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50px d-flex justify-content-center align-items-center">
                                                                <p class="text-dark fw-bolder text-hover-primary fs-6">2</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="<?= base_url(); ?>assets/media/avatars/150-12.jpg" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jhon Doe</a>
                                                                        <span class="text-muted fw-bold text-muted d-block fs-7">Designer</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted fw-bold text-muted d-block fs-6">jhondoe@gmail.com</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--begin::Body-->
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous">
                                                            <a href="#" class="page-link"><i class="previous"></i></a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item next">
                                                            <a href="#" class="page-link"><i class="next"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tables Widget 9-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <!--begin::Tables Widget 9-->
                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder fs-3 mb-1">Project Ongoing</span>
                                                <span class="text-muted mt-1 fw-bold fs-7">2 Project</span>
                                            </h3>
                                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary d-none" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->New Member
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-gray-300 align-middle gs-6 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fw-bolder bg-light text-muted">
                                                            <th class="w-50px d-flex justify-content-center align-items-center">No</th>
                                                            <th class="min-w-50px text-start">Project</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-50px d-flex justify-content-center align-items-center">
                                                                <p class="text-dark fw-bolder text-hover-primary fs-6">1</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-start align-items-center">
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <p class="text-dark fw-bolder text-hover-primary fs-5">Mockup Aplikasi Absensi</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        <tr>
                                                        <tr>
                                                            <td class="w-50px d-flex justify-content-center align-items-center">
                                                                <p class="text-dark fw-bolder text-hover-primary fs-6">2</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-start align-items-center">
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <p class="text-dark fw-bolder text-hover-primary fs-5">Membuat Aplikasi Guru Keliling</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--begin::Body-->
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous">
                                                            <a href="#" class="page-link"><i class="previous"></i></a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item next">
                                                            <a href="#" class="page-link"><i class="next"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tables Widget 9-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Main-->
                    <!--begin::Footer-->
                    <div class="footer py-4 d-flex flex-column flex-md-row align-items-center justify-content-between" id="kt_footer">
                        <!--begin::Copyright-->
                        <div class="order-2 order-md-1">
                            <span class="text-white opacity-75 fw-bold me-1">2021©</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-white text-hover-primary opacity-75">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-white menu-hover-primary fw-bold order-1 opacity-75">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        <!--begin::Drawers-->
        <!--end::Drawers-->
        <!--end::Main-->
        <!--begin::Engage drawers-->
        <!--end::Engage drawers-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>

    <!--begin::Javascript-->
    <script>
        var BASE_URL = baseUrl = '<?= base_url(); ?>';
        var API_URL = apiUrl = '<?= API_URL() ?>';
        var css_button = 'btn btn-block btn-md';
    </script>
    <script>
        var hostUrl = "<?= base_url(); ?>assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url(); ?>assets/js/custom/widgets.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/modals/create-app.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/modals/users-search.js"></script>

    <script src="<?= base_url('assets/js/alert/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/alert/scriptalert.js?v=' . date('YmdHis')) ?>"></script>

    <script src="<?= base_url('assets/js/page/function.js?v=' . date('YmdHis')) ?>"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

    <?php

    if (isset($js_add) && is_array($js_add)) {
        foreach ($js_add as $js) {
            echo $js;
        }
    } else {
        echo (isset($js_add) && ($js_add != "") ? $js_add : "");
    }

    ?>
</body>
<!--end::Body-->

</html>