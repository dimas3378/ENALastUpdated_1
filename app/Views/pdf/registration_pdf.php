<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
            border: 2px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
            border: 1px solid black;
        }

        .text-center {
            text-align: center;
        }

        .header-logo {
            width: 100px;
            height: auto;
        }

        .form-control {
            width: 100%;
            padding: 5px;
            border: none;
        }

        .form-label {
            font-weight: bold;
        }

        .form-checkbox {
            margin-left: 5px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th style="width: 25%;">
                        <img src="assets/images/logos/polman2.png" style="width: 80%;" alt="" class="header-logo">
                    </th>
                    <th colspan="2" style="width: 75%;" class="text-center">
                        <h3>PERMINTAAN PENAWARAN (RFQ)</h3>
                    </th>
                </tr>
            </thead>
        </table>
        <table>
            <thead>
                <tr>
                    <td>
                        <label for="nama_barang" class="form-label">Nama Barang:</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="">
                    </td>
                    <td style="width: 25%;">
                        <label for="jumlah" class="form-label">Jumlah:</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" value="">
                    </td>
                    <td style="width: 25%;">
                        <label for="berat" class="form-label">Berat (kg):</label>
                        <input type="text" name="berat" id="berat" class="form-control" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pemesan" class="form-label">Pemesan:</label>
                        <input type="text" name="pemesan" id="pemesan" class="form-control" value="">
                    </td>
                    <td>
                        <label for="target_delivery" class="form-label">Target Delivery:</label>
                        <input type="text" name="target_delivery" id="target_delivery" class="form-control" value="">
                    </td>
                    <td>
                        <label for="no_penawaran" class="form-label">No. Penawaran:</label>
                        <input type="text" name="no_penawaran" id="no_penawaran" class="form-control" value="">
                    </td>
                </tr>
            </thead>
        </table>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">1.</th>
                    <th style="width: 22%;">Sifat Pesanan &emsp;&emsp;&emsp;&emsp;:</th>
                    <th style="width: 20%;">
                        <input type="checkbox" name="chkbox1" id="chkbox1" class="form-checkbox">
                        <label for="chkbox1">Pesanan Normal</label>
                    </th>
                    <th colspan="3" style="width: 50%;">
                        <input type="checkbox" name="chkbox2" id="chkbox2" class="form-checkbox">
                        <label for="chkbox2">Pesanan Enjinering</label>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2.</td>
                    <td colspan="5">Adminstrasi Pesanan</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Jenis pesanan &emsp;&emsp;&emsp;:</td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Pesanan ulang</label>
                    </td>
                    <td colspan="3">
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Pesanan baru</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Pesanan berdasarkan:</td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Gambar kerja</label>
                    </td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Contoh barang jadi</label>
                    </td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Ide desain produk</label>
                    </td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Lainnya</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Gambar kerja&emsp;&emsp;&emsp;&ensp;:</td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Ok</label>
                    </td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Perlu perbaikan</label>
                    </td>
                    <td colspan="2">
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Buat baru</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Contoh barang jadi&emsp;:</td>
                    <td>
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Ada</label>
                    </td>
                    <td colspan="3">
                        <input type="checkbox" name="chkbox3" id="chkbox3" class="form-checkbox">
                        <label for="chkbox3">Tidak ada</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. No. Gambar&emsp;&emsp;&emsp;&emsp;:</td>
                    <td colspan="2">
                        <input type="text" name="chkbox3" id="chkbox3" style="width: 70%;" class="form-control" value="">
                    </td>
                    <td colspan="2">
                        <label for="chkbox3">Bagian dari : No. </label>
                        <input type="text" name="chkbox3" id="chkbox3" class="form-control">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>