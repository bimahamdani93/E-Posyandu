<?php

function tambah($data)
{
    include '../koneksi/koneksi.php';
    $nama = $data['nama'];
    $nip = $data['nip'];
    $umur = $data['umur'];
    $notelp = $data['notelp'];
    $lokasi_dinas = $data['lokasi_dinas'];
    $pengalaman_kerja = $data['pengalaman_kerja'];
    $jk = $data['jk'];

    $sql = "INSERT INTO tb_bidan (nama_bidan,nip,umur,no_telepon,lokasi_dinas,pengalaman_kerja,jenis_kelamin) values ('$nama','$nip','$umur','$notelp','$lokasi_dinas','$pengalaman_kerja','$jk')";
    $query = $koneksi->query($sql);

    return $query;
}

function hapus($id)
{
    include '../../koneksi/koneksi.php';

    $sql = "DELETE FROM tb_bidan WHERE id_bidan = '$id'";
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
    $id = $data['id_bidan'];
    $nama = $data['nama'];
    $nip = $data['nip'];
    $umur = $data['umur'];
    $notelp = $data['notelp'];
    $lokasi_dinas = $data['lokasi_dinas'];
    $pengalaman_kerja = $data['pengalaman_kerja'];
    $jk = $data['jk'];

    $sql = "UPDATE tb_bidan SET
     nama_bidan = '$nama',
     nip = '$nip',
     umur = '$umur',
     no_telepon = '$notelp',
     lokasi_dinas = '$lokasi_dinas',
     pengalaman_kerja = '$pengalaman_kerja',
     jenis_kelamin = '$jk'
     WHERE id_bidan = $id
     ";
    $query = $koneksi->query($sql);

    return $query;
}
