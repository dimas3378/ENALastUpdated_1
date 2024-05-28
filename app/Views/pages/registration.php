<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Registration</h5>
        <form action="<?= base_url('RecordHandle/CustomerCreate') ?>" id="registrationForm" method="post">
          <table class="table">
            <tbody>
              <tr>
                <td style="width:150px;"><span class="input-group-text">Company</span></td>
                <td><input type="text" aria-label="Company" name="company" class="form-control"></td>
              </tr>
              <tr>
                <td style="width:150px;"><span class="input-group-text">Name</span></td>
                <td><input type="text" aria-label="Name" name="name" class="form-control w-85"></td>
              </tr>
              <tr>
                <td style="width:150px;"><span class="input-group-text">Email</span></td>
                <td><input type="text" aria-label="Email" name="email" class="form-control w-85"></td>
              </tr>
              <tr>
                <td style="width:150px;"><span class="input-group-text">Phone Number</span></td>
                <td><input type="text" aria-label="Phone Number" name="phone" class="form-control w-85"></td>
              </tr>
              <tr>
                <td style="width:150px;"><span class="input-group-text">Delivery Address</span></td>
                <td><input type="text" aria-label="Delivery Address" class="form-control w-85"></td>
              </tr>
            </tbody>
          </table>
          <h5 class="card-title fw-semibold mb-4">Which Request That You Will Choose?</h5>
          <table class="table" style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr>
                <th scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Komponen Tunggal dan SUB. Assembly"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox1" style="width: calc(100% - 30px);">KOMPONEN
                      TUNGGAL DAN SUB. ASSEMBLY</label>
                  </div>
                </th>
                <th scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Moulding (Cetakan Plastik)"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox2" style="width: calc(100% - 30px);">MOULDING
                      (CETAKAN PLASTIK)</label>
                  </div>
                </th>
                <th scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Press Tool"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox3" style="width: calc(100% - 30px);">PRESS
                      TOOL</label>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Pola dan Produk Pengecoran Logam"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox4" style="width: calc(100% - 30px);">POLA DAN
                      PRODUK PENGECORAN LOGAM</label>
                  </div>
                </td>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Casting"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox5"
                      style="width: calc(100% - 30px);">CASTING</label>
                  </div>
                </td>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Elektrik"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox6"
                      style="width: calc(100% - 30px);">ELEKTRIK</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;"><span class="input-group-text"
                    style="width: 100%;">Nama Barang</span></td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;"><input type="text"
                    aria-label="Nama Barang" name="nama_barang" class="form-control" style="width: 100%;"></td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;"><span class="input-group-text"
                    style="width: 100%;">Pemesan</span></td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;"><input type="text"
                    aria-label="Pemesan" name="pemesan" class="form-control" style="width: 100%;"></td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;"><span class="input-group-text"
                    style="width: 100%;">Jumlah Barang</span></td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;"><input type="text"
                    aria-label="Jumlah Barang" name="qty" class="form-control" style="width: 100%;"></td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;"><span class="input-group-text"
                    style="width: 100%;">Target Delivery</span></td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;"><input type="text"
                    aria-label="Target Delivery" name="tujuan" class="form-control" style="width: 100%;"></td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;"><span class="input-group-text"
                    style="width: 100%;">Berat (Kg)</span></td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;"><input type="text"
                    aria-label="Berat (Kg)" name="berat" class="form-control" style="width: 100%;"></td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">Sifat Pesanan</td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;">
                  <div class="form-check form-check-inline" style="width: 49%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Pekerjaan Normal"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox7">Pekerjaan Normal</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 49%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Pekerjaan Enginer"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox8">Pekerjaan Enjinering</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="card-title fw-semibold mb-4" style="font-size:20px;">AdmiAstrasi Pesanan</td>
                <td colspan="2" style="padding: 10px; text-align: left; width: 67%;"></td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">A. Jenis Pesanan</td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;">
                  <div class="form-check form-check-inline" style="width: 49%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Pesanan Ulang"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox9">Pesanan Ulang</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 49%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Pesanan Baru"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox10">Pesanan Baru</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">B. Pesanan Berdasarkan</td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;">
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Gambar Kerja"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox11">Gambar Kerja</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Contoh Barang Jadi"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox12">Contoh Barang Jadi</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="Ide Desain Produk"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox13">Ide Desain Produk</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 100%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="lainnya"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox14"
                      style="width: calc(100% - 30px);">Lainnya</label>
                    <input type="text" aria-label="Lainnya" class="form-control" style="width: calc(100% - 30px);">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">C. Gambar Kerja</td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;">
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="OK"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox15">OK</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="Perlu Perbaikan"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox16">Perlu Perbaikan</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="Buat Baru"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox17">Buat Baru</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="padding: 10px; font-size: 14px; text-align: left; width: 33%;">D. Contoh Benda Jadi</td>
                <td colspan="2" style="padding: 10px; font-size: 14px; text-align: left; width: 67%;">
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="Ada"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox18">Ada (Layak Ukur)</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox19" value="Ada (Tidak Layak Ukur)"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox19">Ada (Tidak Layak Ukur)</label>
                  </div>
                  <div class="form-check form-check-inline" style="width: 32%;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox20" value="Tidak Ada"
                      style="transform: scale(1.2);">
                    <label class="form-check-label" for="inlineCheckbox20">Tidak Ada</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" style="padding: 10px; text-align: center;">
                  <input type="hidden" id="selectedOptions" name="selectedOptions" value="">
                  <button type="button" class="btn btn-primary" style="height:40px; width:150px; font-size:.8em;"
                    onclick="submitForm()">Save</button>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <h5 class="card-title fw-semibold mb-4">PDF</h5>
        <div class="card">
          <div class="card-body">
            <form action="<?= base_url('DompdfHelper/generatePdf')?>" method="post">
              <a href="./index.php" class="text-nowrap logo-img">
                <img src="../assets/images/logos/pdf.png" width="180" alt="PDF Logo" />
              </a>
              <button type="submit" class="btn btn-success">Download PDF</button>
            </form>
          </div>
        </div>
        <h5 class="card-title fw-semibold mb-4">Send To Email</h5>
        <div class="card">
          <div class="card-body">
            <form action="<?= base_url('RecordHandle/sendEmail')?>" method="post">
              <div class="mb-3">
                <label for="Subject" class="form-label">Subject</label>
                <textarea class="form-control" name="subject" id="Subject" rows="1"></textarea>
              </div>
              <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="InputEmail1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="Textarea1" class="form-label">Text</label>
                <textarea class="form-control" name="message" id="Textarea1" rows="2"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function submitForm() {
    const checkboxes = document.querySelectorAll('.form-check-input');
    let selectedOptions = [];

    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        selectedOptions.push(checkbox.value);
      }
    });

    document.getElementById('selectedOptions').value = selectedOptions.join(',');
    document.getElementById('registrationForm').submit();
  }
</script>