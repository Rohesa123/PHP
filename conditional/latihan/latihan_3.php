<?php

// Budi
$name = "Budi";
$status = "Manager";
$pajak = 2.5 / 100;
$tunjangan = 10 / 100;

switch ($name) {
    case "Budi":
        $bpjs = 5;
        $bpjs = $bpjs * 150000;
        $uang_transport = 50000 * 24;
        $lembur = 45;

        if ($status == "Manager") {

            $gaji = 4500000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 50000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else if ($status == "Sekretaris") {

            $gaji = 3500000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 45000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else if ($status == "Staff") {

            $gaji = 3000000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 30000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else if ($status == "Karyawan") {

            $gaji = 2800000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 25000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else {

            echo "Data Tidak Ada";

        }
        break;

    case "Ratna":
        $bpjs = 1;
        $bpjs = $bpjs * 150000;
        $uang_transport = 35000 * 24;
        $lembur = 35;

        if ($status == "Manager") {

            $gaji = 4500000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 50000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else if ($status == "Sekretaris") {

            $gaji = 3500000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 45000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else if ($status == "Staff") {

            $gaji = 3000000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 30000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else if ($status == "Karyawan") {

            $gaji = 2800000;
            $pajak = $pajak * $gaji;
            echo "Menghitung Gaji $name : <br>";
            echo "Gaji $name Rp. " . number_format($gaji, 0, ".", ".") . "<br>";
            echo "<hr>";
            echo "Potongan BPJS Rp. " . number_format($bpjs, "0", ".", ".") . "<br>";
            echo "Potongan Pajak Rp. " . number_format($pajak, 0, ".", ".");
            $potongan = $pajak + $bpjs;
            echo "<hr>";
            echo "Potongan Keseluruhan Rp. " . number_format($potongan, 0, ".", ".");
            echo "<hr>";
            echo "Uang Transport Rp. " . number_format($uang_transport, 0, ".", ".") . "<br>";
            $tunjangan = $gaji * $tunjangan;
            echo "Uang Tunjangan Rp. " . number_format($tunjangan, 0, ".", ".") . "<br>";
            $lembur = $lembur * 25000;
            echo "Uang Lembur Rp. " . number_format($lembur, 0, ".", ".");
            echo "<hr>";
            $tambahan = $uang_transport + $tunjangan + $lembur;
            echo "Jumlah Bonus Rp. " . number_format($tambahan, 0, ".", ".");
            echo "<hr>";
            $gaji_bersih = $gaji - $potongan + $tambahan;
            echo "Jadi Gaji Bersih $name Rp. " . number_format($gaji_bersih, 0, ".", ".");

        } else {

            echo "Data Tidak Ada";

        }

        break;

    default:
        echo "Data Tidak Ada";
}
