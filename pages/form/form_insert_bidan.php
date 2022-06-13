<?php
require 'actions/function_bidan.php';

if (isset($_POST['submit'])) {

    if (tambah($_POST) == true) {
        echo "<script>
                    alert('Data Bidan Berhasil di Input');
                    window.location.href = ('../pages/layoutdashboard.php?url=data-bidan');
                </script>";
    } else {
        echo "<script>
                    alert('Input Gagal');
                    window.location.href = ('../pages/layoutdashboard.php?url=data-bidan'');
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
            <p class="font-bold dark:text-white text-xl mx-auto">Tambah Data Bidan</p>
        </div>
        <form action="" method="POST">
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Bidan</label>
                <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIP</label>
                <input type="text" name="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Umur</label>
                <input type="text" name="umur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="notelp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Telepon</label>
                <input type="text" name="notelp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="lokasi_dinas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lokasi Dinas</label>
                <input type="text" name="lokasi_dinas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="pengalaman_kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pengalaman Kerja</label>
                <input type="text" name="pengalaman_kerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="mb-6">
                <label for="pengalaman_kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamin</label>
                <select name="jk" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                    <option value="">
                        Select an option
                    </option>
                    <option value="laki-laki">
                        laki-laki
                    </option>
                    <option value="perempuan">
                        perempuan
                    </option>
                </select>
            </div>


            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>