<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/polman2.png" />

  <!-- Custom Sidebar -->
  <!-- <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="../assets/css/style.record.css" /> -->

  <!-- Custom CSS -->
  <!-- <link rel="stylesheet" href="../assets/css/styles.min.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<!-- Custom Sidebar -->
<link rel="stylesheet" href="../assets/css/style.record.css" />
<link rel="stylesheet" href="../assets/css/style.crud.css" />
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
          <a href="index" class="text-nowrap logo-img">
          <!-- .index.php -->
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
              <a class="sidebar-link" href="index" aria-expanded="false">
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
              <a class="sidebar-link" href="/pages/registration" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Registration</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/pages/registitem" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Regist New Item Request</span>
              </a>
            </li>
            <?php if(session()->get('role')==='super admin' || session()->get('role')==='admin'):?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/pages/monitoring" aria-expanded="false">
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
              <?php endif;?>
              <ul class="nav__dropdown-collapse" id="recordDropdown"> <!-- Mengubah class collapse -->
                <li class="nav__dropdown-content">
                  <a href="/pages/customer_id" class="nav__dropdown-item">
                    <span class="hide-menu">Customer ID Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_rfq" class="nav__dropdown-item">
                    <span class="hide-menu">RFQ Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_quotation" class="nav__dropdown-item">
                    <span class="hide-menu">Quotation Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_order" class="nav__dropdown-item">
                    <span class="hide-menu">Order Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_spk" class="nav__dropdown-item">
                    <span class="hide-menu">SPK Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_delivery" class="nav__dropdown-item">
                    <span class="hide-menu">Delivery Order Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_retur" class="nav__dropdown-item">
                    <span class="hide-menu">Retur Record</span>
                  </a>
                </li>
                <li class="nav__dropdown-content">
                  <a href="/pages/record_status" class="nav__dropdown-item">
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
              <a class="sidebar-link" href="<?= base_url('auth/logout')?>" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Log Out</span>
              </a>
            </li>
            <?php if(session()->get('role')==='super admin' || session()->get('role')==='admin'):?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('pages/manage_user')?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Manage User</span>
              </a>
            </li>
            <?php endif;?>
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
                    <a href="myprofile" class="d-flex align-items-center gap-2 dropdown-item">
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
                    <a href="<?= base_url('auth/logout')?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->