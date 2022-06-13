<!DOCTYPE html>
<html lang="en">
<?php

include "../koneksi/koneksi.php";
$sql = "SELECT * FROM tb_produk INNER JOIN tb_jenis_produk WHERE tb_produk.id_jenis = tb_jenis_produk.id_jenis";
$query = $koneksi->query($sql);
$no = 1;
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
            <p class="font-bold dark:text-white text-xl mx-auto">Data Produk</p>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Merk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stok
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $query->fetch_array()) : ?>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <?php echo $no++ ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['jenis'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['merk'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['harga'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $data['stok'] ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <p>
                                    <a href="?url=ubah-produk&id=<?= $data['id_produk']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="actions/hapus_produk.php?id=<?= $data['id_produk']; ?>" onclick="return confirm('Apakah anda yakin menghapus data?');" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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