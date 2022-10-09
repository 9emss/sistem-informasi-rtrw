<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps ps--active-y bg-white" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="<?= base_url() . '/dashboard' ?>">
            <img src="<?= base_url() ?>/assets/dashboard/img/logos.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Dashboard - SIRT</span>
        </a>

    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div id="sidenav-collapse-main" class="collapse navbar-collapse  w-auto  h-auto ps" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Profile User -->
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">

                    <?php if (!user()->oauth_id == null) : ?>
                        <img src="<?= user()->avatar ?>" class="avatar">
                    <?php else : ?>
                        <img src="<?= base_url() . '/assets/img/' . user()->avatar ?>" class="avatar">
                    <?php endif; ?>
                    <span class="nav-link-text ms-2 ps-1">
                        <?php

                        $num_char = 15;
                        $text = user()->fullname;
                        if (strlen($text) > $num_char) {
                            echo substr($text, 0, $num_char) . ' ...';
                        } else {
                            echo $text;
                        }

                        ?>
                    </span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url() ?>/warga/profile/<?= user()->username ?>">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                                </a>
                            </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-white " href="<?= route_to('logout') ?>">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End of Prolife -->
            <?php if (in_groups('developer')) : ?>
                <!-- Developer Area -->
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Developer Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#DevNavItem-1" class="nav-link text-white" aria-controls="DevNavItem-1" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Warga</span>
                    </a>
                    <div class="collapse" id="DevNavItem-1" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Pengurus </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Warga </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">person_add</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Tambah Pengurus </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#DevNavItem-2" class="nav-link text-white" aria-controls="DevNavItem-2" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">summarize</i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="DevNavItem-2" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> List Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-list-check"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Status Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#DevNavItem-3" class="nav-link text-white" aria-controls="DevNavItem-3" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="DevNavItem-3" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-list-check"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Status Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End of Developer Area -->
                <!-- Admin Area -->
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Admin Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#AdminNavItem-1" class="nav-link text-white" aria-controls="AdminNavItem-1" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Warga</span>
                    </a>
                    <div class="collapse" id="AdminNavItem-1" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Pengurus </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Warga </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#AdminNavItem-2" class="nav-link text-white" aria-controls="AdminNavItem-2" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">summarize</i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="AdminNavItem-2" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> List Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-list-check"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Status Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#AdminNavItem-3" class="nav-link text-white" aria-controls="AdminNavItem-3" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="AdminNavItem-3" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-list-check"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Status Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End of Admin Area -->
                <!-- User Area -->
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">User Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#userNavItem-1" class="nav-link text-white" aria-controls="userNavItem-1" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="userNavItem-1" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#UserNavItem-2" class="nav-link text-white" aria-controls="UserNavItem-2" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="UserNavItem-2" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End of User Area -->
            <?php elseif (in_groups('admin')) : ?>
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Admin Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#NavItemOne" class="nav-link text-white" aria-controls="NavItemOne" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Warga</span>
                    </a>
                    <div class="collapse" id="NavItemOne" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Pengurus </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Warga </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">person_add</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Tambah Pengurus </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#NavItemTwo" class="nav-link text-white" aria-controls="NavItemTwo" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">summarize</i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="NavItemTwo" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> List Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-list-check"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Status Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#NavItemTwo" class="nav-link text-white" aria-controls="NavItemTwo" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="NavItemTwo" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fa-solid fa-list-check"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Status Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">User Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#userNavItem-1" class="nav-link text-white" aria-controls="userNavItem-1" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="userNavItem-1" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#UserNavItem-2" class="nav-link text-white" aria-controls="UserNavItem-2" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="UserNavItem-2" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php elseif (in_groups('user')) : ?>
                <!-- User Area -->
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">User Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#userNavItem-1" class="nav-link text-white" aria-controls="userNavItem-1" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="userNavItem-1" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#UserNavItem-2" class="nav-link text-white" aria-controls="UserNavItem-2" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="UserNavItem-2" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End of User Area -->
            <?php else : ?>
                <li class="nav-item">
                    <hr class="horizontal light mt-0 mb-2">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">User Area</h6>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#NavItemOne" class="nav-link text-white" aria-controls="NavItemOne" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                    <div class="collapse" id="NavItemOne" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Laporan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Laporan </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#NavItemOne" class="nav-link text-white" aria-controls="NavItemOne" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Pengantar</span>
                    </a>
                    <div class="collapse" id="NavItemOne" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="fas fa-user-shield"></i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Daftar Surat Pengantar </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"><i class="material-icons opacity-10">list_alt</i>
                                    </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Buat Surat Pengantar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
            <hr class="horizontal light mt-0 mb-2">

            <li class="nav-item mb-2 mt-0">
                <a class="nav-link text-white" href="<?= base_url('/logout') ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">Log Out</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
            </div>
        </div> -->
</aside>