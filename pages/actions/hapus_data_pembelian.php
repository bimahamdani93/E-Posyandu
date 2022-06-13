<?php
require 'function_restock.php';

$id = $_GET["id"];


if (hapus($id) == true) {
    echo    "<script>
                    alert('Data pembelian Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=data-pembelian');
            </script>";
} else {
    echo    "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=data-pembelian');
            </script>";
}
