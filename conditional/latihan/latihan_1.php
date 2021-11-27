<?php

$helm = "Ada";
$stnk = "Ada";
$sim = "Ada";

if ($helm == "Ada" && $stnk == "Tidak" && $sim == "Tidak") {
    echo "Menggunakan Helm : <br>";
    echo "Kami cek perlengkapan surat stnk & sim nya";
} elseif ($helm == "Ada" && $stnk == "Ada" && $sim == "Tidak") {
    echo "Menggunakan Helm dan membawa STNK : <br>";
    echo "Surat lengkap boleh kami cek sim ya?";
} elseif ($helm == "Ada" && $stnk == "Ada" && $sim == "Ada") {
    echo "Menggunakan Helm dan membawa STNK dan SIM : <br>";
    echo "Selamat berkendara hati-hati di jalan";
} else {
    echo "Anda kami tilang";
}