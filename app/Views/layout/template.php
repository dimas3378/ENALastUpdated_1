<!-- page template ini ga dipake  -->

<!-- methode/page ini untuk template header dan footer yg d gabung-->

<!-- template header -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $tittle; ?></title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/polman2.png" />

  <!-- Custom Sidebar -->
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="../assets/css/style.record.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo polman.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Pages" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Menu</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/home/registration" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Registration</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/home/monitoring" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Monitoring</span>
              </a>
            </li>
            <li class="sidebar-item" id="recordSidebar">
              <a class="sidebar-link has-arrow" href="javascript:void(0);" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Record</span>
                <span class="sidebar-dropdown-icon">
                  <i class="fas fa-chevron-right"></i>
                </span>
              </a>
              <ul class="nav__dropdown-collapse" id="recordDropdown"> <!-- Mengubah class collapse -->
                <li class="nav__dropdown-content">
                  <a href="/home/customer_id" class="nav__dropdown-item">
                    <span class="hide-menu">Customer ID Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_rfq" class="nav__dropdown-item">
                    <span class="hide-menu">RFQ Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_quotation" class="nav__dropdown-item">
                    <span class="hide-menu">Quotation Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_order" class="nav__dropdown-item">
                    <span class="hide-menu">Order Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_spk" class="nav__dropdown-item">
                    <span class="hide-menu">SPK Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_delivery" class="nav__dropdown-item">
                    <span class="hide-menu">Delivery Order Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_retur" class="nav__dropdown-item">
                    <span class="hide-menu">Retur Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/home/record_status" class="nav__dropdown-item">
                    <span class="hide-menu">Status Record</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/home/login" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/home/signup" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="50" height="50" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="/home/login" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

<!-- ini untuk ngasi tau ditengah ini diisi content -->
<?= $this->renderSection('content'); ?>

<!-- template footer -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

  <!-- Fungsi Sidebar Record-->
  <div id="recordSidebar">
    Sidebar Record
  </div>

  <!-- Dropdown Record (awalnya disembunyikan) -->
  <div id="recordDropdown" style="display: none;">
    Dropdown Record
  </div>

  <script>
    // Ambil elemen sidebar dan dropdown
    var recordSidebar = document.getElementById('recordSidebar');
    var recordDropdown = document.getElementById('recordDropdown');

    // Tambahkan event listener untuk klik pada sidebar
    recordSidebar.addEventListener('click', function(event) {
      // Cegah aksi default dari link
      event.preventDefault();

      // Toggle tampilan dropdown
      if (recordDropdown.style.display === 'block') {
        recordDropdown.style.display = 'none';
      } else {
        recordDropdown.style.display = 'block';
      }
    });

    // Tambahkan event listener untuk setiap item sidebar list record
    var recordItems = recordDropdown.querySelectorAll('.nav__dropdown-item');
    recordItems.forEach(function(item) {
      item.addEventListener('click', function(event) {
        // Cegah aksi default dari link
        event.preventDefault();

        // Dapatkan URL dari atribut href
        var url = item.getAttribute('href');

        // Navigasi ke halaman yang sesuai
        window.location.href = url;
      });
    });
  </script>
  <!-- End of Fungsi Sidebar Record-->

</body>

</html>