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
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .tabel {
            padding: 30px;
            padding-left: 100px;
            padding-right: 100px;
            margin: auto;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }
        .tabel table {
            margin: 0px auto 0px auto;
            margin: auto;
            padding: 10px;
        }
        .table table tr td{
            border-bottom: 1px solid black;
            background-color: aqua;
            padding-top: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="tabel">
        <table style="width: 700px;">
            <tr>
                <td colspan="2" style="border-bottom: 2px solid black; font-size: 30px; padding-bottom: 5px; text-align: center;">Struk Gaji</td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Nama</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo $hitung_gaji1->karyawan ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Jabatan</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo $hitung_gaji1->jabatan ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Gaji Pokok</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo "Rp. ".number_format($hitung_gaji1->Jabatan(),0,".","."); ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Status Kerja</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo $hitung_gaji1->status_kerja ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Bonus Status Kerja</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo "Rp. ".number_format($hitung_gaji1->statusKerja(),0,".","."); ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Lama Kerja</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo $hitung_gaji1->lama_kerja ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Tunjangan Lama Kerja</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo "Rp. ".number_format($hitung_gaji1->lamaKerja(),0,".","."); ?></td>
            </tr>
            <tr>
                <td colspan="2" style="border-bottom: 2px solid black; padding-top: 5px; font-size: 30px; text-align: left;">Potongan</td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Pinjaman</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo "Rp. ".number_format($hitung_gaji1->pinjaman,0,".","."); ?></td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Tabungan</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo "Rp. ".number_format($hitung_gaji1->tabungan,0,".","."); ?></td>
            </tr>
            <tr>
                <td colspan="2" style="border-bottom: 2px solid black; padding-top: 5px; font-size: 30px; text-align: left;">Total Gaji Bersih</td>
            </tr>
            <tr>
                <td style="padding-top: 5px; border-bottom: 2px solid black;">Total Gaji Bersih</td>
                <td style="padding-top: 5px; border-bottom: 2px solid black;"><?php echo "Rp. ".number_format($hitung_gaji1->totalGaji(),0,".","."); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
