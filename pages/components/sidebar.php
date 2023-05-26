<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
    <title>Document</title>
</head>

<body>

    <div class="overflow-y-auto h-full py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
        <div class="flex items-center justify-start pt-4 pb-4 bg-cyan-600">
            <p class="font-bold dark:text-white text-xl mx-auto">E-Posyandu</p>
        </div>

        <ul class="space-y-2">
            <li>
                <a href="?url=beranda"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fas fa-home"></i>
                    <span class="ml-3">Beranda</span>
                </a>
            </li>

            <!-- Menu Bidan -->
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fas fa-user-nurse"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Data Bidan</span>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <?php
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['level'] == 'Admin') {
                            echo "<li>
                                    <a href='?url=form-bidan' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Tambah Data</a>
                                 </li>";
                        }
                        echo "<li>
                                <a href='?url=data-bidan' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Tabel Data Bidan</a>
                             </li>";
                    }  
                    ?>
                </ul>
            </li>

            <!-- Menu Imunisasi -->
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-imunisasi" data-collapse-toggle="dropdown-imunisasi">
                    <i class="fas fa-syringe"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Imunisasi</span>
                </button>
                <ul id="dropdown-imunisasi" class="hidden py-2 space-y-2">
                    <?php
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['level'] == 'Admin') {
                            echo "<li>
                                    <a href='?url=form-jadwal' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Tambah Jadwal</a>
                                 </li>";
                        } else if ($_SESSION['level'] == 'Pengguna') {
                            echo "<li>
                                    <a href='?url=form-daftar' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Pendaftaran Imunisasi</a>
                                 </li>";
                        }
                        echo "<li>
                                <a href='?url=jadwal-imunisasi' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Jadwal Imunisasi</a>
                              </li>";
                        echo "<li>
                                <a href='?url=data-pendaftaran' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Data Pendaftaran</a>
                              </li>";
                    }  
                    ?>
                </ul>
            </li>

            <!-- Menu data anak -->
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-imunisasi" data-collapse-toggle="dropdown-anak">
                    <i class="fas fa-baby"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Data Anak</span>
                </button>
                <ul id="dropdown-anak" class="hidden py-2 space-y-2">
                    <?php
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['level'] == 'Pengguna') {
                            echo "<li>
                                    <a href='?url=form-anak' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Tambah Data Anak</a>
                                 </li>";
                            echo "
                                 <li>
                                     <a href='?url=data-anak' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Data Anak</a>
                                 </li>";
                        } else {
                            echo "<li>
                                    <a href='?url=data-anak' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Data Anak</a>
                                  </li>"; 
                        }
                    }  
                    ?>
                </ul>
            </li>

            <!-- Menu Product -->
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-product" data-collapse-toggle="dropdown-product">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Product</span>
                </button>
                <ul id="dropdown-product" class="hidden py-2 space-y-2">
                    <?php
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['level'] == 'Admin') {
                            echo "<li>
                                    <a href='?url=form-tambah-product' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Tambah Produk</a>
                                  </li>";
                            echo "<li>
                                    <a href='?url=data-produk' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Data Produk</a>
                                 </li>";
                            echo "<li>
                                    <a href='?url=restok' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Restok Produk</a>
                                 </li>";
                            echo "<li>
                                    <a href='?url=data-pembelian' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Data Pembelian</a>
                                 </li>";
                            echo "<li>
                                    <a href='?url=data-penjualan' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Data Penjualan</a>
                                 </li>";
                        } else if ($_SESSION['level'] == 'Pengguna') {
                            echo "<li>
                                    <a href='?url=form-penjualan' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Beli produk</a>
                                 </li>";
                            echo "<li>
                                    <a href='?url=data-produk' class='flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'>Produk</a>
                                 </li>";
                        }
                    }  
                    ?>
                </ul>
            </li>
            <li>
                <a href="../start.php"
                    class=" flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>