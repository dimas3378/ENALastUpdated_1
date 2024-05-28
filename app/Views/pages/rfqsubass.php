<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">
          <div class="d-flex align-items-center justify-content-center flex-column">
            <img src="../assets/images/logos/logo polman.png" width="150" alt="" />
            <div class="text-center">Pemintaan Penawaran "RFQ"</div>
          </div>
          <div class="text-center">Komponen Tunggal dan Sub.Assembly</div>
        </h5>
        <form action="<?= base_url('') ?>" method="post">
          <table class="table">
            <thead>
              <tr>
                <div class="input-group">
                  <th scope="col"><span class="input-group-text">Nama Barang</span></th>
                  <th scope="col"><input type="text" aria-label="Nama Barang" class="form-control"></th>
                  <th scope="col"><span class="input-group-text">Jumlah</span></th>
                  <th scope="col"><input type="text" aria-label="Jumlah" class="form-control"></th>
                  <th scope="col"><span class="input-group-text">Berat (Kg)</span></th>
                  <th scope="col"><input type="text" aria-label="Berat (Kg)" class="form-control"></th>
                </div>
              </tr>
            </thead>
            <tbody>
              <tr>
                <div class="input-group">
                  <th scope="col"><span class="input-group-text">Pemesanan</span></th>
                  <th scope="col"><input type="text" aria-label="Pemesanan" class="form-control"></th>
                  <th scope="col"><span class="input-group-text">Target Delivery</span></th>
                  <th scope="col"><input type="text" aria-label="Target Delivery" class="form-control"></th>
                  <th scope="col"><span class="input-group-text">No.Pemesanan</span></th>
                  <th scope="col"><input type="text" aria-label="No.Pemesanan" class="form-control"></th>
                </div>
              </tr>
            </tbody>
          </table>
          <h5 class="card-title fw-semibold mb-4">1. Sifat Pemesanan :</h5>
          <div class="card">
            <div class="card-body">
              <table  class="table table-borderless" style="width: 50%; border-collapse: collapse; margin-bottom:0;">
                <thead>
                  <tr>
                    <th style="width:50%;">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Pekerjaan Normal</label>
                      </div>
                    </th>
                    <th style="width:50%;">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Pekerjaan Enjinering</label>
                      </div>
                    </th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <h5 class="card-title fw-semibold mb-4">2. Administrasi Pesanan :</h5>
          <div class="card">
            <div class="card-body">
              <table class="table" style="width: 100%; border-collapse: collapse;">
                <thead>
                  <tr>
                    <th scope="col">a. Jenis Pesanan :</th>
                    <th scope="col" scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 80%;">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Pesanan Ulang</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Pesanan Baru</label>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">b. Pesanan Berdasarkan :</th>
                    <td scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 80%;">
                      <div class="form-check form-check-inl ine">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Gambar Kerja</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Contoh Barang Jadi</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Ide Desain Produk</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">c. Gambar Kerja :</th>
                    <td scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 80%;">
                      <div class="form-check form-check-inl ine">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">OK</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Perlu Perbaikan</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Buat Baru</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">d. Contoh Benda Jadi :</th>
                    <td scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 80%;">
                      <div class="form-check form-check-inl ine">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Layak Ukur</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Tidak Layak Ukur</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">e. No.Gambar :</th>
                    <td scope="col" style="padding: 10px; font-size: 14px; text-align: left; width: 80%;">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Bagian No.</label>
                        <input type="text" aria-label="Bagian No." class="form-control"
                          style="width:100%; margin-top:5px;">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h5 class="card-title fw-semibold mb-4">3. Fungsi Komponen :</h5>
            <div class="card">
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" style="width: 25%;">a. Deskripsi Fungsi :</th>
                      <td colspan="8"><input type="text" aria-label="Deskripsi Fungsi" class="form-control w-100"></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="width: 25%;">b. Ukuran Fungsi :</th>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi1" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi2" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi3" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi4" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi5" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi6" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi7" class="form-control"
                          style="width: 100%;"></td>
                      <td style="width: 9.4%;"><input type="text" aria-label="Ukuran Fungsi8" class="form-control"
                          style="width: 100%;"></td>
                    </tr>
                    <tr>
                      <th scope="row" style="width: 25%;">c. Toleransi Khusus Fungsi :</th>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi1" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi2" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi3" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi4" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi5" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi6" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi7" class="form-control"
                          style="width: 100%;"></td>
                      <td><input type="text" aria-label="Toleransi Khusus Fungsi8" class="form-control"
                          style="width: 100%;"></td>
                    </tr>
                    <tr>
                      <th scope="row" style="width: 25%;">d. Toleransi Bentuk :</th>
                      <td colspan="8"><input type="text" aria-label="Toleransi Bentuk" class="form-control"
                          style="width: 100%;"></td>
                    </tr>
                    <tr>
                      <th scope="row" style="width: 25%;">e. Suaian / Pasangan :</th>
                      <td colspan="8"><input type="text" aria-label="Suaian / Pasangan" class="form-control"
                          style="width: 100%;"></td>
                    </tr>
                    <tr>
                      <th scope="row" style="width: 25%;">f. Kekerasan Permukaan :</th>
                      <td colspan="8" style="padding: 10px; font-size: 14px; text-align: left; width: 100%;">
                        <div class="form-check form-check-inline" style="margin-left:5px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">N8</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left:5px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">N7</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left:5px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">N6</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left:5px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">N5</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left:5px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                          <label class="form-check-label" for="inlineCheckbox5">N4</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <h5 class="card-title fw-semibold mb-4">4. Kondisi Operasi :</h5>
            <div class="card">
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" style="width:25%;">a. Beban :</th>
                      <th scope="col">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Berat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Sedang</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">Rendah</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">Lainnya</label>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">b. Temperatur :</th>
                      <td style="padding: 10px; font-size: 14px; text-align: left; width: 100%;">
                        <div class="form-check form-check-inl ine">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Kurang Dari 50*C</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">50*C + 100*C</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">100*C + 100*C</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">Lebih Dari 200*C</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">c. Getaran :</th>
                      <td style="padding: 10px; font-size: 14px; text-align: left; width: 100%;">
                        <div class="form-check form-check-inl ine">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Tinggi</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Sedang</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">Rendah</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">Lainnya</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">d. Lingkungan :</th>
                      <td style="padding: 10px; font-size: 14px; text-align: left; width: 100%;">
                        <div class="form-check form-check-inli ne">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Basah/Beruap</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Kotor/Berdebu</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">Kontak Dengan Bahan Kimia</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">Lainnya</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <h5 class="card-title fw-semibold mb-4">5. Bahan :</h5>
            <div class="card">
              <div class="card-body">
                <table class="table" style="width: 100%; font-size: 14px;">
                  <thead>
                    <tr>
                      <th scope="col">
                        a. Bahan Dasar :
                        <br>
                        <div class="form-check form-check-inline" style="margin-right: 10px; margin: top 5px;;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1" style="font-size: 14px;">Ferro</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2"
                            style="font-size: 14px;">Alumunium</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3" style="font-size: 14px;">Tembaga, dengan
                            Komposisi Bahan Kimia:</label>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <table class="table" style="width: 100%; font-size: 14px;">
                          <thead>
                            <tr>
                              <th scope="col">C</th>
                              <th scope="col"><input type="text" aria-label="C" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                              <th scope="col">S</th>
                              <th scope="col"><input type="text" aria-label="S" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                              <th scope="col">Ni</th>
                              <th scope="col"><input type="text" aria-label="Ni" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                              <th scope="col">Mg</th>
                              <th scope="col"><input type="text" aria-label="Mg" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                              <th scope="col">Tl</th>
                              <th scope="col"><input type="text" aria-label="Tl" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                              <th scope="col">Zr</th>
                              <th scope="col"><input type="text" aria-label="Zr" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                              <th scope="col">Zn</th>
                              <th scope="col"><input type="text" aria-label="Zn" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Si</th>
                              <td><input type="text" aria-label="Si" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>P</td>
                              <td><input type="text" aria-label="P" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Cr</td>
                              <td><input type="text" aria-label="Cr" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>V</td>
                              <td><input type="text" aria-label="V" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Pb</td>
                              <td><input type="text" aria-label="Pb" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Fe</td>
                              <td><input type="text" aria-label="Fe" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Sn</td>
                              <td><input type="text" aria-label="Sn" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                            </tr>
                            <tr>
                              <th scope="row">Mn</th>
                              <td><input type="text" aria-label="Mn" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Cu</td>
                              <td><input type="text" aria-label="Cu" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Mo</td>
                              <td><input type="text" aria-label="Mo" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Na</td>
                              <td><input type="text" aria-label="Na" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Sb</td>
                              <td><input type="text" aria-label="Sb" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                              <td>Al</td>
                              <td><input type="text" aria-label="Al" class="form-control"
                                  style="width: 50px; font-size: 14px;">%</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">b. Pembuatan :</th>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                          <label class="form-check-label" for="inlineCheckbox4" style="font-size: 14px;">Hot/Cold
                            Rolling
                            Mill</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                          <label class="form-check-label" for="inlineCheckbox5" style="font-size: 14px;">Tuangan</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3">
                          <label class="form-check-label" for="inlineCheckbox6"
                            style="font-size: 14px;">Sintering</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">c. Nama Bahan :</th>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                          <label class="form-check-label" for="inlineCheckbox7" style="font-size: 14px;">
                            <input type="text" aria-label="Nama Bahan" class="form-control"
                              style="width: 100px; font-size: 14px;">
                          </label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
                          <label class="form-check-label" for="inlineCheckbox8" style="font-size: 14px;">No.Bahan:
                            <input type="text" aria-label="No.Bahan" class="form-control"
                              style="width: 100px; font-size: 14px;">
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">d. Standar :</th>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
                          <label class="form-check-label" for="inlineCheckbox9" style="font-size: 14px;">ISO</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option2">
                          <label class="form-check-label" for="inlineCheckbox10" style="font-size: 14px;">DIN</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option3">
                          <label class="form-check-label" for="inlineCheckbox11" style="font-size: 14px;">JIS</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option4">
                          <label class="form-check-label" for="inlineCheckbox12" style="font-size: 14px;">ASTM</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option5">
                          <label class="form-check-label" for="inlineCheckbox13" style="font-size: 14px;">SNI</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="option6">
                          <label class="form-check-label" for="inlineCheckbox14"
                            style="font-size: 14px;">Lainnya</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">e. Pengadaan :</th>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="option1">
                          <label class="form-check-label" for="inlineCheckbox15" style="font-size: 14px;">POLMAN</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="option2">
                          <label class="form-check-label" for="inlineCheckbox16"
                            style="font-size: 14px;">Pemesanan</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-right: 10px;">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="option3">
                          <label class="form-check-label" for="inlineCheckbox17" style="font-size: 14px;">
                            <input type="text" aria-label="No.Bahan" class="form-control"
                              style="width: 100px; font-size: 14px;">
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <h5 class="card-title fw-semibold mb-4" style="font-size: 14px;">6. Uji Mekanik :</h5>
            <div class="card">
              <div class="card-body">
                <table class="table" style="width: 100%; font-size: 14px;">
                  <thead>
                    <tr>
                      <th style="width:15%;">a. Jenis Pengujian :</th>
                      <td style="width:10%;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Tarik</label>
                        </div>
                      </td>
                      <td style="width:10%;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Kekerasan</label>
                        </div>
                      </td>
                      <td style="width:10%;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                          <label class="form-check-label" for="inlineCheckbox3">Impact</label>
                        </div>
                      </td>
                      <td style="width:10%; font-size:14px;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                          <label class="form-check-label" for="inlineCheckbox4">Bengkok</label>
                        </div>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="font-size: 14px;">b. Target Hasil :</th>
                      <td>
                        <div style="display: flex; align-items: center;">
                          <input type="text" id="chk_th1" aria-label="N/mm" class="form-control"
                            style="width: 70%; font-size: 14px;">
                          <label for="chk_th1" style="font-size: 14px; margin-left: 5px;">N/mm</label>
                        </div>
                      </td>
                      <td>
                        <div style="display: flex; align-items: center;">
                          <input type="text" id="chk_th2" aria-label="HB/HBc" class="form-control"
                            style="width: 70%; font-size: 14px;">
                          <label for="chk_th2" style="font-size: 14px; margin-left: 5px;">HB/HBc</label>
                        </div>
                      </td>
                      <td>
                        <div style="display: flex; align-items: center;">
                          <input type="text" id="chk_th3" aria-label="Joule/nm2" class="form-control"
                            style="width: 70%; font-size: 14px;">
                          <label for="chk_th3" style="font-size: 14px; margin-left: 5px;">Joule/nm2</label>
                        </div>
                      </td>
                      <td>
                        <div style="display: flex; align-items: center;">
                          <input type="text" id="chk_th4" aria-label="N/mm2" class="form-control"
                            style="width: 70%; font-size: 14px;">
                          <label for="chk_th4" style="font-size: 14px; margin-left: 5px;">N/mm2</label>
                        </div>
                      </td>
                    </tr>
                    <t>
                      <th scope="row" style="font-size: 14px;">c. Standar Uji :</th>
                      <td style="width:15%;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                          <label class="form-check-label" for="inlineCheckbox5" style="font-size: 14px;">ISO No</label>
                          <input type="text" aria-label="ISO No" class="form-control" style="font-size: 14px;">
                        </div>
                      </td>
                      <td style="width:15%;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
                          <label class="form-check-label" for="inlineCheckbox6" style="font-size: 14px;">DIN No</label>
                          <input type="text" aria-label="DIN No" class="form-control" style="font-size: 14px;">
                        </div>
                      </td>
                      <td style="width:15%;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option3">
                          <label class="form-check-label" for="inlineCheckbox7" style="font-size: 14px;">JIS No</label>
                          <input type="text" aria-label="JIS No" class="form-control" style="font-size: 14px;">
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option4">
                          <label class="form-check-label" for="inlineCheckbox8" style="font-size: 14px;">ASTM</label>
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option5">
                          <label class="form-check-label" for="inlineCheckbox9" style="font-size: 14px;">SNI</label>
                        </div>
                      </td>
                    </t>
                  </tbody>
                </table>
              </div>
            </div>
            <h5 class="card-title fw-semibold mb-4" style="font-size: 14px;">7. Catatan Khusus :</h5>
            <div class="card">
              <div class="card-body">
                <table class="table" style="width: 100%; font-size: 14px;">
                  <thead>
                    <tr>
                      <th scope="col">
                        <label for="note1" style="margin-bottom:5px;">Note Khusus 1</label>
                        <input type="text" id="note1" aria-label="Note Khusus1" class="form-control"
                          style="width: 100%; font-size: 14px;">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <label for="note2" style="margin-bottom:5px;">Note Khusus 2</label>
                        <input type="text" id="note2" aria-label="Note Khusus2" class="form-control"
                          style="width: 100%; font-size: 14px;">
                      </th>
                    </tr>
                    <tr>
                      <th scope="row">
                        <label for="note3" style="margin-bottom:5px;">Note Khusus 3</label>
                        <input type="text" id="note3" aria-label="Note Khusus3" class="form-control"
                          style="width: 100%; font-size: 14px;">
                      </th>
                    </tr>
                    <tr>
                      <td colspan="8" style="padding: 10px; text-align: center;">
                        <button type="submit" class="btn btn-primary"
                          style="height:40px; width:250px; font-size:.8em;">Save</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>