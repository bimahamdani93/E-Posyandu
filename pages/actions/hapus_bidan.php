<?php
require 'function_bidan.php';

$id = $_GET["id"];


if (hapus($id) == true) {
    echo    "<script>
                    alert('Data Bidan Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=data-bidan');
            </script>";
} else {
    echo    "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=data-bidan');
            </script>";
}
