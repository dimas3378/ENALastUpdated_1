  <!-- Ikon Polman -->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/polman2.png" />

  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

  <!-- Calender Asset Custom -->
  <link rel="stylesheet" href="../assets/css/styles.kedua.css" />

  <!-- Custom Sidebar -->
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="../assets/css/style.record.css" />

  <!-- Spesific Calender Asset -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.2/main.min.css' />
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.4.2/main.min.css' />
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.4.2/main.min.css' />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

  </head>

  <body>
    <div class="container-fluid">
      <!--  Row 1 -->
      <div class="row">
        <!--  -->
        <div class="main-cards">
          <div class="card">
            <div class="card-inner">
              <h3>Total Project</h3>
              <span class="material-icons">inventory_2</span>
            </div>
            <h1>100</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>Finished</h3>
              <span class="material-icons">done_all</span>
            </div>
            <h1>85</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>Ongoing</h3>
              <span class="material-icons">autorenew</span>
            </div>
            <h1>13</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>Delay</h3>
              <span class="material-icons">more_time</span>
            </div>
            <h1>2</h1>
          </div>
        </div>
        <!-- Row 2 -->
        <div class="col-lg-12 d-flex align-items-strech">
          <div class="other-cards">
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Ongoing</h5>
                  </div>
                </div>
                <!-- Awalnya ini berisi chart -->
                <!-- Chart Start  -->
                <!-- <canvas id="myChart"></canvas> -->
                <!-- <input type="month" onchange="filterChart(this)" /> -->
                <div class="chart-container">
                  <div id="ongoing"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Progress</h5>
                  </div>
                </div>
                <div class="chart-container">
                  <div id="progress"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Payment</h5>
                  </div>
                </div>
                <div class="chart-container">
                  <div id="payment"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Division</h5>
                  </div>
                </div>
                <div class="chart-container">
                  <div id="division"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row 3 -->
        <div class="col-lg-12 d-flex align-items-strech">
          <div class="other-cards-1">
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Project Event</h5>
                  </div>
                </div>
                <div id="calendar"></div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Total Progress</h5>
                  </div>
                </div>
                <canvas id="myChart"></canvas>
                <input type="month" onchange="filterChart(this)" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 4 -->
      <!-- Recent Project -->
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="mb-4">
                <h5 class="card-title fw-semibold">Recent Project</h5>
              </div>
              <ul class="timeline-widget mb-0 position-relative mb-n5">
                <li class="timeline-item d-flex position-relative overflow-hidden">
                  <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                  <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                    <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                  </div>
                  <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
                </li>
                <li class="timeline-item d-flex position-relative overflow-hidden">
                  <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                  <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                    <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                  </div>
                  <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                  </div>
                </li>
                <li class="timeline-item d-flex position-relative overflow-hidden">
                  <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                  <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                    <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                  </div>
                  <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
                </li>
                <li class="timeline-item d-flex position-relative overflow-hidden">
                  <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                  <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                    <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                  </div>
                  <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                  </div>
                </li>
                <li class="timeline-item d-flex position-relative overflow-hidden">
                  <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                  <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                    <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                  </div>
                  <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded
                  </div>
                </li>
                <li class="timeline-item d-flex position-relative overflow-hidden">
                  <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                  <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                    <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  </div>
                  <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Project Information -->
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                  <h5 class="card-title fw-semibold">Project Information</h5>
                </div>
                <!-- Filter Bar dalam Project Information -->
                <div class="filter-container">
                  <label for="status-filer">Filter by Status:</label>
                  <select id="status-filter" onchange="filterTable()">
                    <option value="all">All</option>
                    <option value="On Review">On Review</option>
                    <option value="RFQ Submitted">RFQ Submitted</option>
                  </select>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle" id="project-table">
                  <thead class="text-dark fs-4">
                    <tr>
                      <style>
                        th {
                          vertical-align: middle;
                        }
                      </style>
                      <th class="border-bottom-5">
                        <h6 class="fw-semibold mb-0">ID Order</h6>
                      </th>
                      <th class="border-bottom-5">
                        <h6 class="fw-semibold mb-0">Product</h6>
                      </th>
                      <th class="border-bottom-5">
                        <h6 class="fw-semibold mb-0">Type</h6>
                      </th>
                      <th class="border-bottom-5">
                        <h6 class="fw-semibold mb-0">QTY</h6>
                      </th>
                      <th class="border-bottom-5">
                        <h6 class="fw-semibold mb-0">Costumer</h6>
                      </th>
                      <th class="border-bottom-5" style="text-align: center;">
                        <h6 class="fw-semibold mb-0">In <br> Charge</h6>
                      </th>
                      <th class="border-bottom-5" style="text-align: center;">
                        <h6 class="fw-semibold mb-0">Due <br> Date</h6>
                      </th>
                      <th class="border-bottom-5">
                        <h6 class="fw-semibold mb-0">Status</h6>
                      </th>
                    </tr>
                  </thead>
                  <?php if ($monitoring && count($monitoring) > 0) : ?>
                    <!-- Mulai loop foreach untuk setiap item dalam array $Monitoring -->
                    <?php foreach ($monitoring as $idx => $mn) : ?>
                      <tbody>
                        <tr>
                          <!-- Mengisi data product -->
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><?php echo $mn['customer_id']; ?></h6>
                          </td>
                          <!-- Mengisi data production_type -->
                          <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $mn['product']; ?></span>
                          </td>
                          <!-- Mengisi data qty -->
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?php echo $mn['production_type']; ?></p>
                          </td>
                          <!-- Mengisi data company -->
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="badge bg-primary rounded-3 fw-semibold"><?php echo $mn['qty']; ?></span>
                            </div>
                          </td>
                          <!-- Mengisi data date_end -->
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0 fs-4"><?php echo $mn['company']; ?></h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0 fs-4"><?php echo $mn['pic']; ?></h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0 fs-4"><?php echo $mn['date_rfq']; ?></h6>
                          </td>


                        </tr>
                        <script>
                          const badges = document.querySelectorAll(".badge");
                          for (const badge of badges) {
                            if (badge.textContent === "RFQ Submitted") {
                              badge.style.backgroundColor = "#57A0D3";
                            }
                          }
                        </script>
                      </tbody>
                      <!-- Selesai loop foreach -->
                    <?php endforeach; ?>
                  <?php else : ?>
                    <!-- Jika tidak ada data dalam array $Monitoring, tampilkan pesan 'No data available' -->
                    <div class="flex flex-col items-center justify-center">
                      <h1 class="text-center text-xl text-black">
                        No data available
                      </h1>
                    </div>
                  <?php endif; ?>
                </table>
              </div>
              <!-- Function Filter By (Recent Project) Start -->
              <script>
                function filterTable() {
                  var statusFilter = document.getElementById("status-filter")
                  var selectedValue = statusFilter.value;
                  var table = document.getElementById("project-table")
                  var rows = table.getElementsByTagName("tr");

                  for (var i = 1; i < rows.length; i++) {
                    var row = rows[i];
                    var status = row.cells[7].textContent.trim();
                    if (selectedValue === "all" || status === selectedValue) {
                      row.style.display = "";
                    } else {
                      row.style.display = "none";
                    }
                  }
                }
              </script>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="../assets/images/products/s7.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- Custom JavaScript terbaru -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.2/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.4.2/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.4.2/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.4.2/main.min.js'></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/calender.js"></script>

    <!-- Custom JavaScript sebelumnya -->
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="../assets/js/sidebarmenu.js"></script> -->
    <!-- <script src="../assets/libs/simplebar/dist/simplebar.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- Fungsi Sidebar Record-->
    <div id="recordSidebar"></div>

    <!-- Dropdown Record (awalnya disembunyikan) -->
    <div id="recordDropdown" style="display: none;">Dropdown Record</div>

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