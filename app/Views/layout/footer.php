<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>

<!-- Fungsi Sidebar Record-->
<div id="recordSidebar">
  <!-- Sidebar Record -->
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
  recordSidebar.addEventListener('click', function (event) {
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
  recordItems.forEach(function (item) {
    item.addEventListener('click', function (event) {
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
<script>
  function toggleInput() {
    var checkbox = document.getElementById('inlineCheckbox8');
    var lainnyaInput = document.getElementById('lainnyaInput');

    if (checkbox.checked) {
      lainnyaInput.style.display = 'block';
    } else {
      lainnyaInput.style.display = 'none';
    }
  }
  //Ambil semua class tabel yang memiliki tr
  const rows = document.querySelectorAll('table tr');
  rows.forEach(row => {
    //Ambil semua class checkbox
    const checkboxes = row.querySelectorAll('.form-check-input');
    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('click', function () {
        checkboxes.forEach(otherCheckbox => {
          //Jika salah satu checkbox pada satu tr sudah tercheck maka yang lainnya akan disabel
          if (this.checked) {
            checkboxes.forEach(otherCheckbox => {
              if (otherCheckbox !== this) {
                otherCheckbox.disabled = true;
              }
            });
          } else {
            checkboxes.forEach(otherCheckbox => {
              if (otherCheckbox !== this) {
                otherCheckbox.disabled = false;
              }
            });
          }
        });
      });
    });
  });
</script>
</body>

</html>