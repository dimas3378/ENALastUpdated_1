<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Moulding Request for Registration</h5>

      <!-- Form pertama -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('') ?>" method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID Customer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="input-group-text">Company</span></td>
                      <td><input type="text" aria-label="Company" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><span class="input-group-text">Name</span></td>
                      <td><input type="text" aria-label="Name" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><span class="input-group-text">Email</span></td>
                      <td><input type="text" aria-label="Email" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><span class="input-group-text">Phone Number</span></td>
                      <td><input type="text" aria-label="Phone Number" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><span class="input-group-text">Delivery Address</span></td>
                      <td><input type="text" aria-label="Delivery Address" class="form-control"></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <button type="submit" class="btn btn-primary  style=btn-block"
                          style="width:150px; font-size:14px;">Save</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('') ?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID Barang</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="input-group-text">Nama Barang</span></td>
                          <td><input type="text" aria-label="Nama Barang" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><span class="input-group-text">Pemesan</span></td>
                          <td><input type="text" aria-label="Pemesan" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><span class="input-group-text">Jumlah Barang</span></td>
                          <td><input type="text" aria-label="Jumlah Barang" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><span class="input-group-text">Target Delivery</span></td>
                          <td><input type="text" aria-label="Target Delivery" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><span class="input-group-text">Berat (Kg)</span></td>
                          <td><input type="text" aria-label="Berat (Kg)" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><span class="input-group-text">No.RFQ</span></td>
                          <td><input type="text" aria-label="No.RFQ" class="form-control"></td>
                        </tr>
                        <tr>
                          <td>Sifat Pesanan</td>
                          <td style="font-size:14px;">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                              <label class="form-check-label" for="inlineCheckbox1">Pekerjaan Normal</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                              <label class="form-check-label" for="inlineCheckbox2">Pekerjaan Engineering</label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Administrasi Pesanan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>A. Jenis Pesanan</td>
                          <td style="font-size:14px;">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                              <label class="form-check-label" for="inlineCheckbox3">Pesanan Ulang</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                              <label class="form-check-label" for="inlineCheckbox4">Pesanan Baru</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>B. Pesanan Berdasarkan</td>
                          <td style="font-size:14px;">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                              <label class="form-check-label" for="inlineCheckbox5">Gambar Kerja</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
                              <label class="form-check-label" for="inlineCheckbox6">Contoh Barang Jadi</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option3">
                              <label class="form-check-label" for="inlineCheckbox7">Ide Desain Produk</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option4"
                                onchange="toggleInput()">
                              <label class="form-check-label" for="inlineCheckbox8" id="lainnya">Lainnya</label>
                              <input type="text" aria-label="Lainnya" class="form-control" id="lainnyaInput"
                                style="display:none;">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>C. Gambar Kerja</td>
                          <td style="font-size:14px;">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
                              <label class="form-check-label" for="inlineCheckbox9">OK</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option2">
                              <label class="form-check-label" for="inlineCheckbox10">Perlu Perbaikan</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option3">
                              <label class="form-check-label" for="inlineCheckbox11">Buat Baru</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>D. Contoh Benda Jadi</td>
                          <td style="font-size:14px;">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                              <label class="form-check-label" for="inlineCheckbox12">Ada (Layak Ukur)</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option2">
                              <label class="form-check-label" for="inlineCheckbox13">Ada (Tidak Layak Ukur)</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="option3">
                              <label class="form-check-label" for="inlineCheckbox14">Tidak Ada</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <button type="submit" class="btn btn-primary"
                              style="width:150px; font-size:14px;">Save</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Form keempat -->
      <h5 class="card-title fw-semibold mb-4">PDF</h5>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="d-flex justify-content-around align-items-center">
                  <a href="./index.php" class="text-nowrap logo-img">
                    <img src="../assets/images/logos/pdf.png" width="180" alt="" />
                  </a>
                  <button type="button" class="btn btn-dark">Create PDF</button>
                  <button type="button" class="btn btn-success">Download PDF</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Form kelima -->
      <h5 class="card-title fw-semibold mb-4">Send To Email</h5>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('')?>" method="post">
                <div class="mb-3">
                  <label for="Subject" class="form-label">Subject</label>
                  <textarea class="form-control" id="Subject" rows="1"></textarea>
                </div>
                <div class="mb-3">
                  <label for="InputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="InputEmail1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="Textarea" class="form-label">Text</label>
                  <textarea class="form-control" id="Textarea1" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>