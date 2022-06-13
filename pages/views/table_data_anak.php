<!DOCTYPE html>
<html lang="en">
<?php

include "../koneksi/koneksi.php";
$sql = "SELECT * FROM tb_anak INNER JOIN register ON register.id_user = tb_anak.id_user WHERE tb_anak.id_user = $_SESSION[id_user]";
$query = $koneksi->query($sql);
$no = 1;

$sql1 = "SELECT * FROM tb_anak INNER JOIN register ON register.id_user = tb_anak.id_user";
$query1 = $koneksi->query($sql1);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="w-full p-8 z-40 bg-white items-center rounded-md">
        <div class="flex items-center justify-start pt-4 mb-6 pb-4 bg-cyan-200">
            <p class="font-bold dark:text-white text-xl mx-auto">Data Anak</p>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Id Anak
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Anak
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Panjang Badan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Berat Badan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>

                    </tr>
                </thead>
                <tbody>

                    <?php if ($_SESSION['level'] == 'Pengguna')
                        while ($data = $query->fetch_array()) : ?>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <?php echo $no++ ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['id_anak'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['nama_lengkap'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['nama'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['tanggal_lahir'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['jenis_kelamin'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['panjang_badan'] . " cm" ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['berat_badan'] . " gram" ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <p>
                                    <a href="?url=ubah-data-anak&id=<?= $data['id_anak']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    <?php endwhile ?>

                    <?php if ($_SESSION['level'] == 'Admin')
                        while ($data = $query1->fetch_array()) : ?>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <?php echo $no++ ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['id_anak'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['nama_lengkap'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['nama'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['tanggal_lahir'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['jenis_kelamin'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['panjang_badan'] . " cm" ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['berat_badan'] . " gram" ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <p>
                                    <a href="actions/hapus_anak.php?id=<?= $data['id_anak']; ?>" onclick="return confirm('Apakah anda yakin menghapus data?');" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    <?php endwhile ?>


                </tbody>
            </table>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>