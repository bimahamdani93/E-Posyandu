<?php

function tambah($data)
{
    include '../koneksi/koneksi.php';
    $id_produk = $data['id_produk'];
    $jumlah = $data['jumlah'];


    $sql = "INSERT INTO tb_penjualan (id_produk,jumlah) 
    values ('$id_produk','$jumlah')";
    $query = $koneksi->query($sql);


    return $query;
}


function hapus($id)
{
    include '../../koneksi/koneksi.php';

    $sql = "DELETE FROM tb_penjualan WHERE id_penjualan = '$id'";
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
