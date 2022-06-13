<?php
require 'actions/function_produk.php';

if (isset($_POST['submit'])) {

    if (tambah($_POST) == true) {
        echo "<script>
                    alert('Produk Berhasil ditambahkan');
                    window.location.href = ('../pages/layoutdashboard.php?url=data-produk');
                </script>";
    } else {
        echo "<script>
                    alert('Produk Gagal Ditambahkan');
                    window.location.href = ('../pages/layoutdashboard.php?url=data-produk');
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <title>Tambah Data</title>
</head>

<body>
    <div class="w-full p-8 z-40 bg-white items-center rounded-md">
        <div class="flex items-center justify-start pt-4 mb-6 pb-4 bg-cyan-200">
            <p class="font-bold dark:text-white text-xl mx-auto">Tambah Produk</p>
        </div>
        <form action="" method="POST">
            <div class="mb-6">
                <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Produk</label>
                <select name="jenis" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                    <option value="">
                        Select an option
                    </option>
                    <option value="1">
                        Sereal
                    </option>
                    <option value="2">
                        Susu
                    </option>
                    <option value="3">
                        Biskuit
                    </option>
                    <option value="4">
                        Bubur
                    </option>
                </select>
            </div>
            <div class="mb-6">
                <label for="merk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Merk</label>
                <input type="text" name="merk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga</label>
                <input type="number" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok</label>
                <input type="number" name="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>

            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>