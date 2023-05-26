<?php
if (isset($_GET['url'])) {

    $url = $_GET['url'];


    switch ($url) {
        case 'form-bidan':
            include 'form/form_insert_bidan.php';
            break;

        case 'data-bidan':
            include 'views/table_data_bidan.php';
            break;

        case 'ubah-data-bidan':
            include 'actions/ubah_bidan.php';
            break;

        case 'jadwal-imunisasi':
            include 'views/table_jadwal_imunisasi.php';
            break;

        case 'form-jadwal':
            include 'form/form_insert_jadwal.php';
            break;

        case 'ubah-data-jadwal':
            include 'actions/ubah_jadwal.php';
            break;

        case 'form-anak':
            include 'form/form_insert_anak.php';
            break;

        case 'data-anak':
            include 'views/table_data_anak.php';
            break;

        case 'ubah-data-anak':
            include 'actions/ubah_anak.php';
            break;

        case 'form-daftar':
            include 'form/form_daftar_imunisasi.php';
            break;

        case 'data-pendaftaran':
            include 'views/table_data_pendaftaran.php';
            break;

        case 'form-tambah-product':
            include 'form/form_insert_produk.php';
            break;

        case 'data-produk':
            include 'views/table_produk.php';
            break;

        case 'ubah-produk':
            include 'actions/ubah_produk.php';
            break;

        case 'restok':
            include 'form/form_restock.php';
            break;

        case 'data-pembelian':
            include 'views/table_pembelian.php';
            break;

        case 'form-penjualan':
            include 'form/form_pembelian.php';
            break;

        case 'data-penjualan':
            include 'views/table_penjualan.php';
            break;

        case 'beranda':
            include 'home.php';
            break;
    }
}
