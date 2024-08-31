<?php
require_once "koneksi.php";

$data = $koneksi->query("SELECT * FROM produk");
$data1 = $koneksi->query("SELECT * FROM penjualan");
$data2 = $koneksi->query("SELECT * FROM pelanggan");
$total_products = $data->num_rows;
$total_penjualan = $data1->num_rows;
$total_pelanggan = $data2->num_rows;

$sql = "SELECT MAX(id) AS last_id FROM penjualan";
$sql1 = "SELECT MAX(id) AS last_plg FROM pelanggan";
$result = $koneksi->query($sql);
$result1 = $koneksi->query($sql1);
$row = $result->fetch_assoc();
$row1 = $result1->fetch_assoc();
$last_id = $row['last_id'] + 1;
$last_plg = $row1['last_plg'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" sizes="76x76" href="assets/img/icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
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
          <a href="javascript:void(0)" class="simple-text logo-normal box">
            Kasir Digital
          </a>
        </div>
        <ul class="nav">
          <li class="active">
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
              <li>
                <a href="table_penjualan.php">
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
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="assets/img/default-avatar.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
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
                <h5 class="card-category">Total Produk</h5>
                <h3 class="card-title">
                  <i class="tim-icons icon-cart text-info"></i><?= $total_products ?>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Penjualan</h5>
                <h3 class="card-title">
                  <i class="tim-icons icon-coins text-info"></i>
                  <?= $total_penjualan ?>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Pelanggan
                  <h3 class="card-title">
                    <i class="tim-icons icon-single-02 text-info"></i><?= $total_pelanggan ?>
                  </h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 ml-2 ">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Transaksi Penjualan</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 text-left ">
                      <p class="card-category text-left col-12  mb-5">*Mohon untuk input data manual dari tabel data produk, penjualan, pelanggan, dan detail penjualan.</p>
                      <form method="post" action="tambah_penjualan.php">
                        <div class="row">
                          <div class="col-md-8 pr-md-1 ml-4">
                            <div class="form-group">
                              <label>ID Penjualan</label>
                              <input type="number" name="id" class="form-control" placeholder="ID Penjualan" value="<?= $last_id ?>" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 pr-md-1 ml-4">
                            <div class="form-group">
                              <label>Tanggal Penjualan</label>
                              <input type="date" class="form-control" placeholder="Tanggal Penjualan" name="tgl_penjualan" id="todayDate" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 pr-md-1 ml-4">
                            <div class="form-group">
                              <label>Harga</label>
                              <input type="text" class="form-control" id="harga" placeholder="Total Harga" name="total_harga" onchange="hitungTotal()" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 pr-md-1 ml-4">
                            <div class="form-group">
                              <label>Nama Pelanggan</label>
                              <select name="pelanggan_id" id="pelanggan_id" class="form-control text-muted">
                                <option value="">Pilih Pelanggan</option>
                                <?php
                                while ($nama_pelanggan = $data2->fetch_assoc()) {
                                ?>
                                  <option value="<?php echo $nama_pelanggan['id'] ?>"> <?php echo $nama_pelanggan['nama'] ?></option><?php
                                                                                                                                    } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 pr-md-1 ml-4">
                            <div class="form-group">
                              <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" value="1" onchange="hitungTotal()" required>
                              <label for="total">Total:</label>
                              <span id="total" name="harga">0.00</span> <br>
                              <label for="uangBayar">Uang Bayar:</label>
                              <input type="text" class="form-control" id="uangBayar" name="uangBayar" onchange="hitungKembalian()" required>
                              <label for="kembalian">Kembalian:</label>
                              <span id="kembalian">0.00</span><br>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <input type="submit" class="btn btn-fill btn-primary ml-4" value="Simpan"></input>
                        </div>
                      </form>
                    </div>
                  </div>
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
    <script>
      function hitungTotal() {
        var harga = parseFloat(document.getElementById('harga').value);
        var jumlah = parseInt(document.getElementById('jumlah').value);
        var total = harga * jumlah;
        document.getElementById('total').innerHTML = total.toFixed(2);
      }

      function hitungKembalian() {
        var total = parseFloat(document.getElementById('total').innerHTML);
        var uangBayar = parseFloat(document.getElementById('uangBayar').value);
        var kembalian = uangBayar - total;
        document.getElementById('kembalian').innerHTML = kembalian.toFixed(2);
      }
    </script>
    <script>
      // Dapatkan elemen input tanggal dari DOM
      const todayDateInput = document.getElementById('todayDate');

      // Buat objek Date untuk mewakili tanggal hari ini
      const today = new Date();

      // Dapatkan komponen tanggal (tahun, bulan, dan hari) dari objek Date
      const year = today.getFullYear();
      const month = (today.getMonth() + 1).toString().padStart(2, '0'); // Bulan dimulai dari 0, sehingga tambahkan 1
      const day = today.getDate().toString().padStart(2, '0');

      // Format tanggal sesuai dengan format yang diterima oleh input type date (YYYY-MM-DD)
      const formattedToday = `${year}-${month}-${day}`;

      // Tetapkan nilai yang diformat ke elemen input tanggal
      todayDateInput.value = formattedToday;
    </script>
</body>

</html>