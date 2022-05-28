<?php

include '../database.php';
$jurusan = new Jurusan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $kode_jurusan = $_POST['kode_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

    if ($aksi == "create") {
        $jurusan->create($kode_jurusan, $nama_jurusan);
        header("location:index.php");
    } else if ($aksi == "update") {
        $jurusan->update($id, $kode_jurusan, $nama_jurusan);
        header("location:index.php");
    } else if ($aksi == "delete") {
        $jurusan->delete($id);
        header("location:index.php");
    }
}
