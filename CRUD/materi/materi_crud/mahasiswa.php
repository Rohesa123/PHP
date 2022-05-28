<?php

class Mahasiswa extends Database
{

    // * menampilkan data mahasiswa ke index.php
    public function index()
    {
        $datamahasiswa = mysqli_query($this->koneksi, "SELECT mahasiswa.id, mahasiswa.nim, mahasiswa.nama, dosen.nama AS 'nama_dosen', dosen.mata_kuliah FROM mahasiswa JOIN dosen on mahasiswa.id_dosen=dosen.id ORDER BY mahasiswa.id;");

        return $datamahasiswa;
    }

    public function create($nim, $nama, $id_dosen)
    {
        mysqli_query($this->koneksi, "INSERT INTO mahasiswa VALUES (null,'$nim','$nama','$id_dosen')");
    }

    // * Mermilih data mahasiswa yang akan di ubah
    public function edit($id)
    {
        $datamahasiswa = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");

        return $datamahasiswa;
    }

    // * merubah data mahasiswa
    public function update($id, $nim, $nama, $id_dosen)
    {
        mysqli_query($this->koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', id_dosen='$id_dosen' WHERE id='$id'");
    }

    // * Menampilkan data mahasiswa berdasarkan id
    public function show($id)
    {
        $datamahasiswa = mysqli_query($this->koneksi, "SELECT mahasiswa.id, mahasiswa.nim, mahasiswa.nama, dosen.nama AS 'nama_dosen', dosen.mata_kuliah FROM mahasiswa JOIN dosen on mahasiswa.id_dosen=dosen.id WHERE mahasiswa.id='$id'");

        return $datamahasiswa;
    }

    // * Menghapus data mahasiswa
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
    }
}
