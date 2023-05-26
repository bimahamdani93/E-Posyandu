-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2023 at 05:59 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` enum('Admin','Pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_user`, `username`, `pass`, `email`, `nama_lengkap`, `level`) VALUES
(3, 'charles', '81dc9bdb52d04dc20036dbd8313ed055', 'charles@gmail.com', 'Charles Lecrec', 'Pengguna'),
(12, 'richard', '674f3c2c1a8a6f90461e8a66fb5550ba', 'richard@gmail.com', 'Richardlisson', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anak`
--

CREATE TABLE `tb_anak` (
  `id_anak` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `panjang_badan` int(6) NOT NULL,
  `berat_badan` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anak`
--

INSERT INTO `tb_anak` (`id_anak`, `id_user`, `nama`, `umur`, `tanggal_lahir`, `jenis_kelamin`, `panjang_badan`, `berat_badan`) VALUES
(2, 3, 'Cindy', '7', '11 Desember 2021', 'perempuan', 90, 750),
(3, 3, 'Fabio', '2', '11 Desember 2021', 'laki-laki', 95, 670);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidan`
--

CREATE TABLE `tb_bidan` (
  `id_bidan` int(5) NOT NULL,
  `nama_bidan` varchar(50) DEFAULT NULL,
  `nip` varchar(13) DEFAULT NULL,
  `umur` varchar(2) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
  `lokasi_dinas` varchar(50) DEFAULT NULL,
  `pengalaman_kerja` varchar(10) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidan`
--

INSERT INTO `tb_bidan` (`id_bidan`, `nama_bidan`, `nip`, `umur`, `no_telepon`, `lokasi_dinas`, `pengalaman_kerja`, `jenis_kelamin`) VALUES
(4, 'Lisbeth Augustina Am.Keb', '126327312332', '26', '08759348202', 'puskesmas', '3 tahun', 'perempuan'),
(5, 'Leyla Masri M.Sinaga Am.Keb', '21312321422', '26', '09382327345', 'puskesmas', '5 tahun', 'perempuan'),
(6, 'Novel Damanik Am.Keb', '74283923933', '33', '085075823823', 'puskesmas', '10 tahun', 'perempuan'),
(7, 'Diana Delima Am.Keb', '738283823343', '34', '096983424356', 'rumah sakit', '10 tahun', 'perempuan'),
(11, 'Sri suprihatin Am.Keb', '5277680219122', '34', '08759348202', 'puskesmas', '11 tahun', 'perempuan'),
(12, 'Ida Yuliana Amd.Keb', '2193123782312', '26', '087684462334', 'Rumah Sakit', '2 Tahun', 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_imunisasi`
--

CREATE TABLE `tb_jadwal_imunisasi` (
  `id_jadwal` int(5) NOT NULL,
  `id_bidan` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `kuota` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_imunisasi`
--

INSERT INTO `tb_jadwal_imunisasi` (`id_jadwal`, `id_bidan`, `id_kategori`, `hari`, `tanggal`, `jam`, `kuota`) VALUES
(2, 6, 16, 'Senin', '22 Maret 2023', '11.00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_produk`
--

CREATE TABLE `tb_jenis_produk` (
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_produk`
--

INSERT INTO `tb_jenis_produk` (`id_jenis`, `jenis`) VALUES
(1, 'Sereal'),
(2, 'Susu'),
(3, 'Biskuit'),
(4, 'Bubur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_imunisasi`
--

CREATE TABLE `tb_kategori_imunisasi` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_imunisasi`
--

INSERT INTO `tb_kategori_imunisasi` (`id_kategori`, `kategori`) VALUES
(1, 'Hepatitis B'),
(2, ' Polio 0 '),
(3, 'BCG'),
(4, 'DP-HiB 1'),
(5, 'Polio 1'),
(6, 'Hepatitis 2'),
(7, 'Rotavirus'),
(8, 'PCV'),
(9, 'DPT-HiB 2'),
(10, 'Polio 2'),
(11, 'DPT-HiB 3'),
(12, 'Polio 3'),
(13, 'Hepatitis 4'),
(14, 'Rotavirus 2'),
(15, ' PCV 3'),
(16, 'Influenza 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_produk`, `waktu`, `jumlah`) VALUES
(1, 3, '2023-05-26 03:37:51', 10);

--
-- Triggers `tb_pembelian`
--
DELIMITER $$
CREATE TRIGGER `beli` AFTER INSERT ON `tb_pembelian` FOR EACH ROW BEGIN
	UPDATE tb_produk
	SET stok = stok+NEW.jumlah
	WHERE tb_produk.id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran_imunisasi`
--

CREATE TABLE `tb_pendaftaran_imunisasi` (
  `id_daftar` int(5) NOT NULL,
  `waktu_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_jadwal` int(5) NOT NULL,
  `id_anak` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran_imunisasi`
--

INSERT INTO `tb_pendaftaran_imunisasi` (`id_daftar`, `waktu_daftar`, `id_jadwal`, `id_anak`, `id_user`) VALUES
(3, '2023-05-26 05:58:10', 2, 2, 3);

--
-- Triggers `tb_pendaftaran_imunisasi`
--
DELIMITER $$
CREATE TRIGGER `tb_pendaftaran_imunisasi_after_insert` AFTER INSERT ON `tb_pendaftaran_imunisasi` FOR EACH ROW BEGIN
	UPDATE tb_jadwal_imunisasi
	SET kuota = kuota-1
	WHERE tb_jadwal_imunisasi.id_jadwal = NEW.id_jadwal;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_produk`, `waktu`, `jumlah`) VALUES
(1, 3, '2023-05-26 05:58:51', 2),
(2, 2, '2023-05-26 06:00:36', 1),
(3, 4, '2023-05-26 06:09:18', 3),
(4, 4, '2023-05-26 06:10:07', 2);

--
-- Triggers `tb_penjualan`
--
DELIMITER $$
CREATE TRIGGER `jual` AFTER INSERT ON `tb_penjualan` FOR EACH ROW BEGIN
	UPDATE tb_produk
	SET stok = stok-NEW.jumlah
	WHERE tb_produk.id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_jenis`, `merk`, `harga`, `stok`) VALUES
(2, 2, 'Dancow', 45000, 24),
(3, 1, 'Chococrunch', 25000, 38),
(4, 3, 'Biskuat', 10000, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_bidan`
--
ALTER TABLE `tb_bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indexes for table `tb_jadwal_imunisasi`
--
ALTER TABLE `tb_jadwal_imunisasi`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_bidan` (`id_bidan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_jenis_produk`
--
ALTER TABLE `tb_jenis_produk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_kategori_imunisasi`
--
ALTER TABLE `tb_kategori_imunisasi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `Id_produk` (`id_produk`),
  ADD KEY `id_produk_2` (`id_produk`);

--
-- Indexes for table `tb_pendaftaran_imunisasi`
--
ALTER TABLE `tb_pendaftaran_imunisasi`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang` (`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_anak`
--
ALTER TABLE `tb_anak`
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bidan`
--
ALTER TABLE `tb_bidan`
  MODIFY `id_bidan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_jadwal_imunisasi`
--
ALTER TABLE `tb_jadwal_imunisasi`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jenis_produk`
--
ALTER TABLE `tb_jenis_produk`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori_imunisasi`
--
ALTER TABLE `tb_kategori_imunisasi`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pendaftaran_imunisasi`
--
ALTER TABLE `tb_pendaftaran_imunisasi`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD CONSTRAINT `tb_anak_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `register` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_imunisasi`
--
ALTER TABLE `tb_jadwal_imunisasi`
  ADD CONSTRAINT `tb_jadwal_imunisasi_ibfk_1` FOREIGN KEY (`id_bidan`) REFERENCES `tb_bidan` (`id_bidan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_imunisasi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori_imunisasi` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pendaftaran_imunisasi`
--
ALTER TABLE `tb_pendaftaran_imunisasi`
  ADD CONSTRAINT `tb_pendaftaran_imunisasi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal_imunisasi` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_imunisasi_ibfk_2` FOREIGN KEY (`id_anak`) REFERENCES `tb_anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_imunisasi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `register` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis_produk` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
