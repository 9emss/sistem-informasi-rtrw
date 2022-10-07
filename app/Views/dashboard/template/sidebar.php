<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="<?= base_url() . '/dashboard' ?>">
            <img src="<?= base_url() ?>/assets/dashboard/img/logos.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Dashboard - SIRT</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div id="sidenav-collapse-main" class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="true">

                    <?php if (!user()->oauth_id == null) : ?>
                        <img src="<?= user()->avatar ?>" class="avatar">
                    <?php else : ?>
                        <img src="<?= base_url() . '/assets/img/' . user()->avatar ?>" class="avatar">
                    <?php endif; ?>
                    <span class="nav-link-text ms-2 ps-1">
                        <?php

                        $num_char = 18;
                        $text = user()->fullname;
                        echo substr($text, 0, $num_char) . ' ...';

                        ?>
                    </span>
                </a>
                <div class="collapse show" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../../pages/pages/profile/overview.html">
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
            <hr class="horizontal light mt-0 mb-2">
            <li class="nav-item">
                <a class="nav-link text-white " href="<?= base_url() ?>/invitation/add-invitations">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">First page</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="<?= base_url() ?>/pages/tdashboard/ables.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">text_snippet</i>
                    </div>
                    <span class="nav-link-text ms-1">Second Page</span>
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