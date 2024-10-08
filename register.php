<?php
require_once "koneksi.php";

$data = $koneksi->query("SELECT * FROM produk");
$data1 = $koneksi->query("SELECT * FROM penjualan");
$data2 = $koneksi->query("SELECT * FROM pelanggan");
$total_products = $data->num_rows;
$total_penjualan = $data1->num_rows;
$total_pelanggan = $data2->num_rows;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" sizes="76x76" href="assets/img/icon.png" />

    <title>Kasir Digital</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-normal ml-5">
                        Kasir Digital
                    </a>
                </div>
                <ul class="nav">
                    <div class="active">
                        <li>
                            <a href="./login.php">
                                <i class="tim-icons icon-single-02"></i>
                                <p class="lead">Login</p>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)">LOGIN</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="search-bar input-group">
                                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                                    <i class="tim-icons icon-zoom-split"></i>
                                    <span class="d-lg-none d-md-block">Search</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH" />
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                        <h5 class="card-category">WELCOME</h5>
                                        <h2 class="card-title">Kasir Digital </h2>
                                        <p class="card-category text-left col-12  mb-5">"Selamat datang di platform kasir digital! Mari bersama-sama menjadikan pengalaman bertransaksi Anda lebih mudah, cepat, dan efisien. Mulai sekarang, kelola bisnis Anda dengan lebih baik melalui layanan kami yang handal dan inovatif."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h3 class="card-title ml-4">REGISTRASI</h3>
                                <form action="tambah_regist.php" class="ml-4" method="post">
                                    <div class="row">
                                        <div class="col-md-8 pr-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="username" name="username" id="username" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8 pr-md-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="password" name="password" id="password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8 pr-md-1">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8 pr-md-1">
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input type="text" class="form-control" placeholder="jabatan" name="jabatan" id="jabatan" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary mb-4">Submit</button>
                                </form>
                                <div class="col-md-8 pr-md-1 mb-4">
                                    <a href="login.php" class="text-general ml-2 mt-2">Sudah punya akun?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                            <div class="card card-category"></div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link"> Kasir Digital </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link"> About Us </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link"> Blog </a>
                            </li>
                        </ul>
                        <div class="copyright">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            2024 made with <i class="tim-icons icon-heart-2"></i> by
                            <a href="javascript:void(0)" target="_blank">derypurn</a> for
                            a better web.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title">Sidebar Background</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="badge-colors text-center">
                                <span class="badge filter badge-primary active" data-color="primary"></span>
                                <span class="badge filter badge-info" data-color="blue"></span>
                                <span class="badge filter badge-success" data-color="green"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line text-center color-change">
                        <span class="color-label">LIGHT MODE</span>
                        <span class="badge light-badge mr-2"></span>
                        <span class="badge dark-badge ml-2"></span>
                        <span class="color-label">DARK MODE</span>
                    </li>
                </ul>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js"></script>
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <script src="./assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="./assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script>
        <!-- Black Dashboard DEMO methods, don't include it in your project! -->
        <script src="./assets/demo/demo.js"></script>
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $(".sidebar");
                    $navbar = $(".navbar");
                    $main_panel = $(".main-panel");

                    $full_page = $(".full-page");

                    $sidebar_responsive = $("body > .navbar-collapse");
                    sidebar_mini_active = true;
                    white_color = false;

                    window_width = $(window).width();

                    fixed_plugin_open = $(
                        ".sidebar .sidebar-wrapper .nav li.active a p"
                    ).html();

                    $(".fixed-plugin a").click(function(event) {
                        if ($(this).hasClass("switch-trigger")) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $(".fixed-plugin .background-color span").click(function() {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");

                        var new_color = $(this).data("color");

                        if ($sidebar.length != 0) {
                            $sidebar.attr("data", new_color);
                        }

                        if ($main_panel.length != 0) {
                            $main_panel.attr("data", new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr("filter-color", new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr("data", new_color);
                        }
                    });

                    $(".switch-sidebar-mini input").on(
                        "switchChange.bootstrapSwitch",
                        function() {
                            var $btn = $(this);

                            if (sidebar_mini_active == true) {
                                $("body").removeClass("sidebar-mini");
                                sidebar_mini_active = false;
                                blackDashboard.showSidebarMessage(
                                    "Sidebar mini deactivated..."
                                );
                            } else {
                                $("body").addClass("sidebar-mini");
                                sidebar_mini_active = true;
                                blackDashboard.showSidebarMessage("Sidebar mini activated...");
                            }

                            // we simulate the window Resize so the charts will get updated in realtime.
                            var simulateWindowResize = setInterval(function() {
                                window.dispatchEvent(new Event("resize"));
                            }, 180);

                            // we stop the simulation of Window Resize after the animations are completed
                            setTimeout(function() {
                                clearInterval(simulateWindowResize);
                            }, 1000);
                        }
                    );

                    $(".switch-change-color input").on(
                        "switchChange.bootstrapSwitch",
                        function() {
                            var $btn = $(this);

                            if (white_color == true) {
                                $("body").addClass("change-background");
                                setTimeout(function() {
                                    $("body").removeClass("change-background");
                                    $("body").removeClass("white-content");
                                }, 900);
                                white_color = false;
                            } else {
                                $("body").addClass("change-background");
                                setTimeout(function() {
                                    $("body").removeClass("change-background");
                                    $("body").addClass("white-content");
                                }, 900);

                                white_color = true;
                            }
                        }
                    );

                    $(".light-badge").click(function() {
                        $("body").addClass("white-content");
                    });

                    $(".dark-badge").click(function() {
                        $("body").removeClass("white-content");
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();
            });
        </script>
        <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
        <script>
            window.TrackJS &&
                TrackJS.install({
                    token: "ee6fab19c5a04ac1a32a645abde4613a",
                    application: "black-dashboard-free",
                });
        </script>
</body>

</html>