<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <style>
        td {
            text-align:left;
        }
        th {
            text-align:left;
            color: #abb8c3;
        }
    </style>
</head>
<body class="ps-2 pe-2">
    <form action="" method="post" class="">
        <div class="konten text-center row container ms-auto me-auto">
            <div class="judul pb-4 pt-4">
                <h4>GOFUD</h4>
            </div>
            <div class="tabel konten bg-warning card w-75 ms-auto me-auto border-primary">
                <div class="judul konten card-header bg-gradient text-start bg-primary w-auto row border-danger">
                    Sistem Pembayaran
                </div>
                <div class="isi konten ">
                    <div class="konten satu ">
                        <h5 class="text-start">Menu</h5>
                        <div class="text-start">
                            <table>
                                <tr>
                                    <td class="pe-5">1. Martabak</td>
                                    <td>Rp. 35.000</td>
                                </tr>
                                <tr>
                                    <td>2. Krabby Patty</td>
                                    <td>Rp. 15.000</td>
                                </tr>
                                <tr>
                                    <td>3. Kwetiaw </td>
                                    <td>Rp. 25.000</td>
                                </tr>
                                <tr>
                                    <td>4. Steak </td>
                                    <td>Rp. 45.000</td>
                                </tr>
                                <tr>
                                    <td>5. Nasi Goreng</td>
                                    <td>Rp. 20.000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="konten dua text-start mb-0">
                        <label for="nb" class="pt-3"> Pilih Makanan :</label>
                        <select name="nb" id="nb" required class="form-select-sm form-select w-50">
                            <option value="" hidden>Pilih Makanan</option>
                            <option value="Martabak">Martabak</option>
                            <option value="Krabby Patty">Krabby Patty</option>
                            <option value="Kwetiaw">Kwetiaw</option>
                            <option value="Steak">Steak</option>
                            <option value="Nasi Goreng">Nasi Goreng</option>
                        </select>
                    </div>
                    <div class="konten tiga text-start">
                        <label for="jm" class="pt-3">Jumlah Makanan : </label>
                        <input type="number" name="jm" id="jm" required min="1" placeholder="Jumlah Makanan" class="form-control form-control-sm w-25">
                    </div>
                    <div class="konten empat text-start">
                        <label for="mp" class="pt-3">Metode Pembayaran</label>
                        <select name="mp" id="mp" required class="form-select form-select-sm w-50">
                            <option value="" hidden>Metode Pembayaran</option>
                            <option value="Cash">Cash</option>
                            <option value="M-Banking">M-Banking</option>
                            <option value="Gopay">Gopay</option>
                            <option value="PickUp">PickUp</option>
                        </select>
                    </div>
                    <div class="konten lima pt-4 pb-3">
                        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
if (isset($_POST['kirim'])) {
    $nama_barang = $_POST['nb'];
    $jumlah_barang = $_POST['jm'];
    $metode_pembayaran = $_POST['mp'];

    require_once "class.php";

    $gofud1 = new Gofud($nama_barang,$jumlah_barang,$metode_pembayaran);

?>
        <table class="table container ms-auto me-auto table-dark table-striped mt-5 table-active table-responsive table-hover table-bordered border-light table-sm">
            <tr>
                <th>Nama Makanan</th>
                <td>:</td>
                <td><?php echo $gofud1->nama_barang ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td><?php echo "Rp. ". number_format($gofud1->harga,0,".",".") ?></td>
            </tr>
            <tr>
                <th>Jumlah Pesanan</th>
                <td>:</td>
                <td><?php echo $gofud1->jumlah_pesanan; ?></td>
            </tr>
            <tr>
                <th>Total Harga</th>
                <td>:</td>
                <td><?php echo "Rp. ". number_format($gofud1->totalHarga(),0,".","."); ?></td>
            </tr>
            <tr>
                <th>Sistem Pembayaran</th>
                <td>:</td>
                <td><?php echo $gofud1->sistem_pembayaran; ?></td>
            </tr>
            <tr>
                <th>Diskon</th>
                <td>:</td>
                <td><?php echo "Rp. ". number_format($gofud1->getDiscount() * $gofud1->totalHarga(),0,".",".") ?></td>
            </tr>
            <tr>
                <th>Cashback</th>
                <td>:</td>
                <td><?php echo "Rp. ". number_format($gofud1->getCashback() * $gofud1->totalHarga(),0,".",".") ?></td>
            </tr>
            <tr>
                <th>Total Pembayaran</th>
                <td>:</td>
                <td><?php echo "Rp. ". number_format($gofud1->totalPembayaran(),0,".",".") ?></td>
            </tr>
        </table>
<?php
}
?>
    </fieldset>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>