<?php
require 'function_pembelian.php';

$id = $_GET["id"];


if (hapus($id) == true) {
    echo    "<script>
                    alert('Data penjualan Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=data-penjualan');
            </script>";
} else {
    echo    "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=data-penjualan');
            </script>";
}
