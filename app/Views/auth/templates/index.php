<!--
=========================================================
* Material Dashboard 2 - v3.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/dashboard/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/dashboard/img/logos.png">
    <title>
        <?= $data['title'] ?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/assets/dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/assets/dashboard/css/material-dashboard.css?v=3.0.1" rel="stylesheet" />
</head>

<body class="<?= ($data['param']  == 'lParam') ? 'bg-gray-200' : '' ?>">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->

                <!-- <= //$this->include('auth/templates/navbar'); ?> -->
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content mt-0 ps">
        <?= $this->renderSection('auth') ?>
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/assets/dashboard/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>/assets/dashboard/js/material-dashboard.min.js?v=3.0.1"></script>
</body>

</html>