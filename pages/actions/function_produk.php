<?php

function tambah($data)
{
    include '../koneksi/koneksi.php';
    $merk = $data['merk'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $jenis = $data['jenis'];

    $sql = "INSERT INTO tb_produk (id_jenis,merk,harga,stok) 
    values ('$jenis','$merk','$harga','$stok')";
    $query = $koneksi->query($sql);

    return $query;
}


function hapus($id)
{
    include '../../koneksi/koneksi.php';

    $sql = "DELETE FROM tb_produk WHERE id_produk = '$id'";
    $query = $koneksi->query($sql);

    return $query;
}

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


function ubah($data)
{
    include '../koneksi/koneksi.php';
    $id = $data['id_produk'];
    $merk = $data['merk'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $jenis = $data['jenis'];

    $sql = "UPDATE tb_produk SET
     merk = '$merk',
     harga = '$harga',
     stok = '$stok',
     id_jenis = '$jenis' WHERE id_produk = $id
     ";
    $query = $koneksi->query($sql);

    return $query;
}
