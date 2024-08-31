<?php
require_once "koneksi.php";


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

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-normal ml-5">
                        Kasir Digital
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="./dashboard.php">
                            <i class="tim-icons icon-laptop"></i>
                            <p class="lead">Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p class="lead">User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p class="lead">Data</p>
                        </a>
                        <ul class="nav ml-5 mt-0">
                            <li>
                                <a href="table_produk.php" class="">
                                    <p>Produk</p>
                                </a>
                            </li>
                            <li class="active">
                                <a href="table_penjualan.php">
                                    <i class="tim-icons icon-cart small"></i>
                                    <p>Penjualan</p>
                                </a>
                            </li>
                            <li>
                                <a href="table_pelanggan.php">
                                    <p>Pelanggan</p>
                                </a>
                            </li>
                            <li>
                                <a href="table_detail.php">
                                    <p>Detail Penjualan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
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
                        <a class="navbar-brand" href="javascript:void(0)">DATA PENJUALAN</a>
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
                                    <span class="d-lg-none d-md-block">Cari</span>
                                </button>
                            </li>

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="./assets/img/default-avatar.png" alt="Profile Photo" />
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">Log out</p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="user.php" class="nav-item dropdown-item">Profile</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link"><a href="login.php" class="nav-item dropdown-item">Log out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari" />
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
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="card-title">Data Penjualan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter" id="">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>ID Penjualan</th>
                                                <th>Tanggal Penjualan</th>
                                                <th class="text-center">Total Harga</th>
                                                <th>ID Pelanggan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $no = 1;
                                            $ambildata = $koneksi->query("select * from penjualan");
                                            while ($tampil = $ambildata->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $tampil["id"] ?></td>
                                                    <td><?= $tampil["tgl_penjualan"] ?></td>
                                                    <td>Rp. <?= number_format($tampil["total_harga"], 2, ",", ".") ?></td>
                                                    <td><?= $tampil["pelanggan_id"] ?></td>
                                                    <td>
                                                        <a href="formedit_penjualan.php?id=<?= $tampil['id'] ?>" class="btn btn-success p-3"><i class="tim-icons icon-pencil"></i></a>&emsp;
                                                        <form action="hapus_datapenjualan.php" method="POST">
                                                            <input type="hidden" value="<?= $tampil['id'] ?>" name="id">
                                                            <button class="btn btn-danger p-3" id="deleteButton"><i class="tim-icons icon-trash-simple"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        Kasir Digital
                    </a>
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
                <a href="javascript:void(0)" target="_blank">derypurn</a> for a
                better web.
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
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-free",
            });
    </script>
    <script>
        document.getElementById("deleteButton").addEventListener("click", function() {
            var confirmation = confirm("Apakah Anda yakin menghapus data ini?");
            if (confirmation) {
                // Jika pengguna mengklik "OK", lakukan tindakan penghapusan data di sini
                // Misalnya, Anda bisa memanggil fungsi JavaScript atau mengirim permintaan HTTP untuk menghapus data dari server.
                alert("Data telah dihapus.");
            } else {
                // Jika pengguna mengklik "Cancel" atau menutup kotak dialog, tidak lakukan apa pun.
                alert("Penghapusan data dibatalkan.");
            }
        });
    </script>
</body>

</html>