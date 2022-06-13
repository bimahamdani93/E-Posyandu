<?php
require 'actions/function_restock.php';

if (isset($_POST['submit'])) {

    if (tambah($_POST) == true) {
        echo "<script>
                    alert('Pembelian Berhasil');
                    window.location.href = ('../pages/layoutdashboard.php?url=data-pembelian');
                </script>";
    } else {
        echo "<script>
                    alert('Pembelian gagal');
                    window.location.href = ('../pages/layoutdashboard.php?url=data-pembelian');
                </script>";
    }
}

include "../koneksi/koneksi.php";
$sql_select = "SELECT * FROM tb_produk";
$query = $koneksi->query($sql_select);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <title>Tambah Data Pembelian</title>
</head>

<body>
    <div class="w-full p-8 z-40 bg-white items-center rounded-md">
        <div class="flex items-center justify-start pt-4 mb-6 pb-4 bg-cyan-200">
            <p class="font-bold dark:text-white text-xl mx-auto">Tambah Pembelian</p>
        </div>
        <form action="" method="POST">
            <div class="mb-6">
                <label for="id_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Produk</label>
                <select name="id_produk" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                    <?php while ($data = $query->fetch_array()) : ?>
                        <option value="<?php echo $data['id_produk']; ?>"><?php echo $data['merk'] . " (Rp" . $data['harga'] . "/pcs)"; ?></option>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="mb-6">
                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jumlah</label>
                <input type="text" name="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>


            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>