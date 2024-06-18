<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard - KANGTUKANG</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="white">
            <a href="#dashboard" class="logo">
              <img src="assets/img/logo.png" alt="navbar brand" class="navbar-brand" height="40" style="margin-top: 10px; margin-left: -5px;" />
            </a>
          </div>
          <!-- End Logo Header -->
        </div>
        
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item active">
                <a data-bs-toggle="collapse" href="<?= base_url('user_dashboard') ?>">
                  <i class="fas fa-user"></i>
                  <p>User</p>
                </a>
              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="<?= base_url('workers_dashboard') ?>">
                  <i class="fas fa-user-friends"></i>
                  <p>Workers</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic btn-getstarted" href="<?= base_url('logout') ?>" aria-expanded="false" style="color: crimson;">
                    <span class="fw-bold" style="font-size: 15px;">logout</span>
                </a>
                </li>
            </ul>
            </div>
            </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">

          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4" style="margin-left: 30px; margin-top: 20px;">
            <div>
              <h3 class="fw-bold mb-3" style="font-size: 30px">Dashboard - User</h3>
            </div>
          </div>

          <!-- Tampilkan Data Workers dalam Bentuk Tabel -->
          <div class="row gy-4">
            <div class="col-10" data-aos="fade-up" data-aos-delay="100" style="margin-left: 110px">
              <div class="table-responsive">
                <table class="table custom-table ">
                <thead class="table-danger">
                    <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>No telpon</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($users) && is_array($users)): ?>
                        <?php foreach($users as $user): ?>
                            <?php if($user['username'] !== 'admin'): ?>
                                <tr class="table">
                                    <td><?= esc($user['username']); ?></td>
                                    <td><?= esc($user['password']); ?></td>
                                    <td><?= esc($user['no_telp']); ?></td>
                                    <td>
                                      <a href="<?= base_url('user_dashboard/edit/'.$user['id']); ?>" class="btn btn-warning">Edit</a>
                                      <a href="<?= base_url('user_dashboard/delete/'.$user['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">No user found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container copyright-user text-center mt-2">
              <p style="margin-left: 500px">© <span>2024 - </span> <strong class="px-1 sitename">KANGTUKANG</strong></p>
                <div class="credits">
                </div>
          </div>
        </footer>

      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
