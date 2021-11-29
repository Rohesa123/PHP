<?php
$jurusan = "RPL";
$kelas = "11 RPL";

if ($jurusan == "TKRO") {

    if ($kelas == "10 TKRO") {
        echo "Ini Kelas TKRO 10";
    } else if ($kelas == "11 TKRO") {
        echo "Ini Kelas TKRO 11";
    } else if ($kelas == "12 TKRO") {
        echo "Ini Kelas TKRO 12";
    } else {
        echo "Kelas Tidak Ada";
    }

} else if ($jurusan == "TBSM") {

    if ($kelas == "10 TBSM") {
        echo "Ini Kelas TBSM 10";
    } else if ($kelas == "11 TBSM") {
        echo "Ini Kelas TBSM 11";
    } else if ($kelas == "12 TBSM") {
        echo "Ini Kelas TBSM 12";
    } else {
        echo "Kelas Tidak Ada";
    }

} else if ($jurusan == "RPL") {

    if ($kelas == "10 RPL") {
        echo "Ini Kelas RPL 10";
    } else if ($kelas == "11 RPL") {
        echo "Ini Kelas RPL 11";
    } else if ($kelas == "12 RPL") {
        echo "Ini Kelas RPL 12";
    } else {
        echo "Kelas Tidak Ada";
    }

} else {
    echo "Kelas Tidak Ada";
}
