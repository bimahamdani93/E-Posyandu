<?php
require 'function_jadwal.php';

$id = $_GET["id"];

if (hapus($id) == true) {
    echo    "<script>
                    alert('Jadwal Berhasil di Hapus');
                    window.location.href = ('../layoutdashboard.php?url=jadwal-imunisasi');
            </script>";
} else {
    echo    "<script>
                    alert('Jadwal Gagal Dihapus');
                    window.location.href = ('../layoutdashboard.php?url=jadwal-imunisasi');
            </script>";
}
