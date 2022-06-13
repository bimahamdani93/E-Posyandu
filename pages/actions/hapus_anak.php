<?php
require 'function_anak.php';

$id = $_GET["id"];


if (hapus($id) == true) {
    echo    "<script>
                    alert('Data Anak Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=data-anak');
            </script>";
} else {
    echo    "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=data-anak');
            </script>";
}
