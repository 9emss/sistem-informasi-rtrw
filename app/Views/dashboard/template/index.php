<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
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
        <?= $title ?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/assets/dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/61c4970be7.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/assets/dashboard/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

    <?php
    if ($param === 'profparam') {
        echo '<link href="' . base_url() . '/assets/dashboard/css/profile.css" rel="stylesheet" />';
    }
    ?>

</head>

<body class="g-sidenav-show  bg-gray-200 g-sidenav-hidden">

    <!-- Sidebar -->
    <?= $this->include('dashboard/template/sidebar') ?>
    <!-- End Sidebar -->

    <div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- Navbar -->
        <?= $this->include('dashboard/template/navbar') ?>
        <!-- End Navbar -->

        <div class="container-fluid py-4">

            <!-- Section Content -->
            <?= $this->renderSection('content') ?>
            <!-- End Section Content -->

            <!-- Footer -->
            <?= $this->include('dashboard/template/footer') ?>
            <!-- End Footer -->

        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/assets/dashboard/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/dashboard/js/plugins/chartjs.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>/assets/dashboard/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>