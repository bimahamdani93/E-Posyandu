<?php
require 'function_jadwal.php';

$id = $_GET["id"];

$jadwal = query("SELECT * FROM tb_jadwal_imunisasi Where id_jadwal = $id")[0];

if (isset($_POST['submit'])) {

    if (ubah($_POST) == true) {
        echo "<script>
                    alert('Jadwal Berhasil di Ubah');
                    window.location.href = ('../pages/layoutdashboard.php?url=jadwal-imunisasi');
                </script>";
    } else {
        echo "<script>
                    alert('Jadwal Gagal diubah');
                    window.location.href = ('../pages/layoutdashboard.php?url=jadwal-imunisasi');
                </script>";
    }
}

include "../koneksi/koneksi.php";
$sql1 = "SELECT * FROM tb_bidan";
$query1 = $koneksi->query($sql1);

$sql2 = "SELECT * FROM tb_kategori_imunisasi";
$query2 = $koneksi->query($sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <title>Jadwal Imunisasi</title>
</head>

<body>
    <div class="w-full p-8 z-40 bg-white items-center rounded-md">
        <div class="flex items-center justify-start pt-4 mb-6 pb-4 bg-cyan-200">
            <p class="font-bold dark:text-white text-xl mx-auto">Ubah Jadwal</p>
        </div>
        <form action="" method="POST">
            <input type="hidden" name="id_jadwal" value="<?= $jadwal['id_jadwal']; ?>">
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Bidan</label>
                <select name="nama" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <?php while ($data1 = $query1->fetch_array()) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <option selected value="<?= $data1["id_bidan"] ?>">
                                <?php echo $data1['nama_bidan'] ?>
                            </option>
                        </tr>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="mb-6">
                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kategori</label>
                <select name="kategori" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <?php while ($data2 = $query2->fetch_array()) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <option selected value="<?= $data2["id_kategori"] ?>">
                                <?php echo $data2['kategori'] ?>
                            </option>
                        </tr>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="mb-6">
                <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hari</label>
                <input type="text" value="<?= $jadwal["hari"] ?>" name="hari" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                <input type="text" value="<?= $jadwal["tanggal"] ?>" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="jam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jam</label>
                <input type="text" value="<?= $jadwal["jam"] ?>" name="jam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="kuota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kuota</label>
                <input type="text" value="<?= $jadwal["kuota"] ?>" name="kuota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>

            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah</button>
        </form>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>