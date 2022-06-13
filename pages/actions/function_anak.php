<?php

// create
function tambah($data)
{
    include '../koneksi/koneksi.php';
    $id_user = $data['id_user'];
    $nama = $data['nama'];
    $umur = $data['umur'];
    $ttl = $data['ttl'];
    $jk = $data['jk'];
    $panjang_badan = $data['panjang_badan'];
    $berat_badan = $data['berat_badan'];


    $sql = "INSERT INTO tb_anak (id_user,nama,umur,tanggal_lahir,jenis_kelamin,panjang_badan,berat_badan) 
    values ('$id_user','$nama','$umur','$ttl','$jk','$panjang_badan','$berat_badan')";
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
    $id_anak = $data['id_anak'];
    $id_user = $data['id_user'];
    $nama = $data['nama'];
    $umur = $data['umur'];
    $tanggal = $data['tanggal'];
    $jk = $data['jk'];
    $panjang_badan = $data['panjang_badan'];
    $berat_badan = $data['berat_badan'];

    $sqli = "UPDATE tb_anak SET 
    id_user=$id_user,
    nama='$nama',
    umur='$umur',
    tanggal_lahir='$tanggal',
    jenis_kelamin='$jk',
    panjang_badan=$panjang_badan,
    berat_badan=$berat_badan
    WHERE id_anak=$id_anak";


    $query1 = $koneksi->query($sqli);

    return $query1;
}

// Delete
function hapus($id)
{
    include '../../koneksi/koneksi.php';

    $sql = "DELETE FROM tb_anak WHERE id_anak = '$id'";
    $query = $koneksi->query($sql);

    return $query;
}
