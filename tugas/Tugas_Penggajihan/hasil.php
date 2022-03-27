<?php
if (isset($_POST['proses'])) {
    $karyawan = $_POST['karyawan'];
    $jabatan = $_POST['jabatan'];
    $status_kerja = $_POST['status_kerja'];
    $lama_kerja = $_POST['lama_kerja'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];

    class hitung_gaji
    {
        public $karyawan = "karyawan", $jabatan = "jabatan", $status_kerja = "sk", $lama_kerja = 0, $pinjaman = 0, $tabungan = 0;

        public function __construct($karyawan, $jabatan, $status_kerja, $lama_kerja, $pinjaman, $tabungan)
        {
            $this->karyawan = $karyawan;
            $this->jabatan = $jabatan;
            $this->status_kerja = $status_kerja;
            $this->lama_kerja = $lama_kerja;
            $this->pinjaman = $pinjaman;
            $this->tabungan = $tabungan;
        }
        public function Jabatan()
        {
            if ($this->jabatan == "Direktur") {
                $uang_j = 10000000;
            } else if ($this->jabatan == "Manager") {
                $uang_j = 7500000;
            } else if ($this->jabatan == "Karyawan") {
                $uang_j = 5000000;
            } else if ($this->jabatan == "OB") {
                $uang_j = 2500000;
            } else {
                $uang_j = 0;
            }

            return $uang_j;
        }
        public function statusKerja()
        {
            if ($this->status_kerja == "Tetap") {
                $uang_sk = 2500000;
            } else if ($this->status_kerja == "Kontrak") {
                $uang_sk = 0;
            } else {
                $uang_sk = 0;
            }

            return $uang_sk;
        }
        public function lamaKerja()
        {
            if ($this->lama_kerja > 10) {
                $uang_lk = 1000000;
            } else if ($this->lama_kerja >= 6 && $this->lama_kerja <= 10) {
                $uang_lk = 500000;
            } else if ($this->lama_kerja >= 0 && $this->lama_kerja < 6) {
                $uang_lk = 250000;
            }

            return $uang_lk;
        }
        public function totalGaji()
        {
            $total_gaji = ($this->Jabatan() + $this->statusKerja() + $this->lamaKerja()) - ($this->tabungan + $this->pinjaman);

            return $total_gaji;
        }
    }
}
 
$hitung_gaji1 = new hitung_gaji($karyawan, $jabatan, $status_kerja, $lama_kerja, $pinjaman, $tabungan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="table border-top-0 row justify-content-center mt-5 col-12">
            <table style="width: 700px;" class="table table-sm table-responsive table-hover border-start border-top border-1 border-end border-dark">
                <thead>
                    <tr class="bg-warning">
                        <th colspan="3" class="text-center fs-3 fw-bold border-bottom border-dark">Struk Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $hitung_gaji1->karyawan ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?php echo $hitung_gaji1->jabatan ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Gaji Pokok</td>
                        <td>:</td>
                        <td><?php echo "Rp. ".number_format($hitung_gaji1->Jabatan(),0,".","."); ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td><?php echo $hitung_gaji1->status_kerja ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Bonus Status Kerja</td>
                        <td>:</td>
                        <td><?php echo "Rp. ".number_format($hitung_gaji1->statusKerja(),0,".","."); ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td><?php echo $hitung_gaji1->lama_kerja ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td>Tunjangan Lama Kerja</td>
                        <td>:</td>
                        <td><?php echo "Rp. ".number_format($hitung_gaji1->lamaKerja(),0,".","."); ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="fs-4 fw-bold text-start bg-warning border-bottom border-dark">Potongan</td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td >Pinjaman</td>
                        <td>:</td>
                        <td ><?php echo "Rp. ".number_format($hitung_gaji1->pinjaman,0,".","."); ?></td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td >Tabungan</td>
                        <td>:</td>
                        <td ><?php echo "Rp. ".number_format($hitung_gaji1->tabungan,0,".","."); ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="fs-4 fw-bold text-start bg-warning border-bottom border-dark">Total Gaji Bersih</td>
                    </tr>
                    <tr class="bg-primary text-light border-bottom-dark border-dark">
                        <td >Total Gaji Bersih</td>
                        <td>:</td>
                        <td ><?php echo "Rp. ".number_format($hitung_gaji1->totalGaji(),0,".","."); ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-center">
                        <td colspan="3" class="bg-warning">
                            <a href="form.php" class="link-danger">
                                <button class="btn btn-danger">Kembali</button>
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
