<?php

// create
function tambah($data)
{
    include '../koneksi/koneksi.php';
    $id_bidan = $data['nama'];
    $id_kategori = $data['kategori'];
    $hari = $data['hari'];
    $tanggal = $data['tanggal'];
    $jam = $data['jam'];
    $kuota = $data['kuota'];



    $sql = "INSERT INTO tb_jadwal_imunisasi (id_bidan,id_kategori,hari,tanggal,jam,kuota) 
    values ('$id_bidan','$id_kategori','$hari','$tanggal','$jam','$kuota')";
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


// Update
function ubah($data)
{
    include '../koneksi/koneksi.php';
    $id_jadwal = $data['id_jadwal'];
    $id_bidan = $data['nama'];
    $id_kategori = $data['kategori'];
    $hari = $data['hari'];
    $tanggal = $data['tanggal'];
    $jam = $data['jam'];
    $kuota = $data['kuota'];

    $sql = "UPDATE tb_jadwal_imunisasi SET 
    id_bidan=$id_bidan,
    id_kategori=$id_kategori,
    hari='$hari',
    tanggal='$tanggal',
    jam='$jam',
    kuota='$kuota' WHERE id_jadwal=$id_jadwal";

    $query = $koneksi->query($sql);


    return $query;
}

// Delete
function hapus($id)
{
    include '../../koneksi/koneksi.php';

    $sql = "DELETE FROM tb_jadwal_imunisasi WHERE id_jadwal = '$id'";
    $query = $koneksi->query($sql);

    return $query;
}
