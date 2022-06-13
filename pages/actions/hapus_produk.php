<?php
require 'function_produk.php';

$id = $_GET["id"];


if (hapus($id) == true) {
    echo    "<script>
                    alert('Produk Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=data-produk');
            </script>";
} else {
    echo    "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=data-produk');
            </script>";
}
