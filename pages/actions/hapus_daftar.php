<?php
require 'function_daftar.php';

$id = $_GET["id"];

if (hapus($id) == true) {
    echo    "<script>
                    alert('Data Pendaftaran Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=data-pendaftaran');
            </script>";
} else {
    echo    "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=data-pendaftaran');
            </script>";
}
