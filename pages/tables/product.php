<?php
    include 'pages/koneksi.php';

    if(isset($_POST['tambah'])) {
        $Nama = mysqli_real_escape_string($koneksi, $_POST['Nama']);
        $NamaProduk = mysqli_real_escape_string($koneksi, $_POST['NamaProduk']);
        $TotalProduk = mysqli_real_escape_string($koneksi, $_POST['TotalProduk']);
        $Harga = mysqli_real_escape_string($koneksi, $_POST['Harga']);

        mysqli_query($koneksi, "INSERT INTO product VALUES('', '$Nama', '$NamaProduk', '$TotalProduk', '$Harga')");

        echo "<script>window.alert('Data berhasil ditambahkan...')
        window.location='product.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BC Pet House</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logo2.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../admin.html">BC PET HOUSE</a>
          <a class="navbar-brand brand-logo-mini" href="../../admin.html"><img src="../../assets/images/logo2.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/woman1.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Novitasari</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/woman1.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Novitasari</span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../admin.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Data Penjualan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-cart menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/product.html"> Product </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/services.html"> Service </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Tampilan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/user.html"> User </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> DATA PENJUALAN </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Penjualan Produk</h4>
                    </p>
                    <button type="button" class="btn btn-outline-primary btn-icon-text">
                      <i class="mdi mdi-file-check btn-icon-prepend"></i> Tambah Data </button>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Nama </th>
                          <th> Produk </th>
                          <th> Total Produk </th>
                          <th> Total Harga </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-info">Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-danger">Belum Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-info">Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-info">Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-info">Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-info">Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                        <tr>
                          <td> Herman Beck </td>
                          <td> Bolt Tuna 500g </td>
                          <td> 1 </td>
                          <td> Rp 12.000,00 </td>
                          <td><label class="badge badge-info">Terbayar</label></td>
                          <td><button type="button" class="btn btn-gradient-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-gradient-danger btn-sm">Hapus</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © BC Pet House</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>