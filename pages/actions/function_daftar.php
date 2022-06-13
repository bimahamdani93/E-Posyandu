<?php

// create
function tambah($data)
{
    include '../koneksi/koneksi.php';
    $id_user = $data['id_user'];
    $tanggal = $data['tanggal'];
    $nama = $data['nama'];




    $sql = "INSERT INTO tb_pendaftaran_imunisasi (id_jadwal,id_anak,id_user) 
    values ('$tanggal','$nama','$id_user')";
    $query = $koneksi->query($sql);


    return $query;
}


// Read
function query($query)
{
    include '../koneksi/koneksi.php';

    $result = $koneksi->query($query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; //menambah elemen baru di akhir array
    }

    return $rows;
}




// Delete
function hapus($id)
{
    include '../../koneksi/koneksi.php';

    $sql = "DELETE FROM tb_pendaftaran_imunisasi WHERE id_daftar = '$id'";
    $query = $koneksi->query($sql);

    return $query;
}
