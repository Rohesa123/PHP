<?php

class Dosen extends Database
{

    // * menampilkan data dosen ke index.php
    public function index()
    {
        $datadosen = mysqli_query($this->koneksi, "SELECT * FROM dosen");

        return $datadosen;
    }

    public function create($nipd, $nama, $mata_kuliah)
    {
        mysqli_query($this->koneksi, "INSERT INTO dosen VALUES (null,'$nipd','$nama','$mata_kuliah')");
    }

    // * Mermilih data dosen yang akan di ubah
    public function edit($id)
    {
        $datadosen = mysqli_query($this->koneksi, "SELECT * FROM dosen WHERE id='$id'");

        return $datadosen;
    }

    // * merubah data dosen
    public function update($id, $nipd, $nama, $mata_kuliah)
    {
        mysqli_query($this->koneksi, "UPDATE dosen SET nipd='$nipd', nama='$nama', mata_kuliah='$mata_kuliah' WHERE id='$id'");
    }

    // * Menampilkan data dosen berdasarkan id
    public function show($id)
    {
        $datadosen = mysqli_query($this->koneksi, "SELECT * FROM dosen WHERE id='$id'");

        return $datadosen;
    }

    // * Menghapus data dosen
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM dosen WHERE id='$id'");
    }
}
