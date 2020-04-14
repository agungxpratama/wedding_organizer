-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 08:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `username`, `password`, `role_id`, `image`, `email`) VALUES
(1, 'syahvira', 'viraw', '123456', 3, 'default.png', 'vira@gmail.com'),
(2, 'qwe', 'qwe', '123', 3, 'default.png', 'qwe@qwe.qwe'),
(3, 'qwe', 'qwe', '123', 3, 'default.png', 'qwe@qwe.qwe');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `idkonsumen` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `image` varchar(123) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`idkonsumen`, `nama`, `email`, `image`, `username`, `password`, `role_id`, `alamat`, `no_telp`) VALUES
(17, 'baga', 'bagas@gmail.com', 'default.png', 'q', '1212', 1, '', ''),
(18, 'pira', 'pira@gmail.com', 'default.png', 'pira12', '123456', 1, '', ''),
(19, 'syahvirawindianwar', 'pira@gmail.com', 'default.png', 'pira123', '123456', 1, '', ''),
(20, 'qwe', 'qwe@qwe.qwe', 'default.png', 'qwe', '123', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_vendor`, `qty`, `price`, `name`, `username`, `status`, `tgl_pesan`) VALUES
(1, 4, 1, 20000000, 'Cantika wedding', '8', 1, '0000-00-00'),
(2, 4, 1, 20000000, 'Cantika wedding', '8', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa`
--

CREATE TABLE `tb_jasa` (
  `idjasa` int(11) NOT NULL,
  `fk_idvendor` int(11) NOT NULL,
  `nama_vendor` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `paket` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jasa`
--

INSERT INTO `tb_jasa` (`idjasa`, `fk_idvendor`, `nama_vendor`, `kategori`, `paket`, `harga`, `keterangan`, `image`) VALUES
(3, 0, 'lumba lumba project', 'hiburan', 'A', 700000, 'Band dari purwakarta bisa untuk acara pernikahan dan tidak ', 'taekook!! on Twitter.jpg'),
(4, 2, 'Cantika wedding', 'wo', 'silver', 20000000, 'Makeup pengantin dan wadrobe \r\ndekorasi \r\nfoto dan video\r\nhiburan', ''),
(6, 0, 'abi', 'dekorasi', '21', 5000, 'asd', 'IMG-20190108-WA00371.jpg'),
(8, 0, 'lili', 'hiburan', 'ac', 1000000, 'oke', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`idkategori`, `nama_kategori`) VALUES
(2, 'wo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `fk_idkonsumen` int(11) NOT NULL,
  `fk_idvendor` int(11) NOT NULL,
  `paket` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tglpernikahan` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `batas_pelunasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`idtransaksi`, `fk_idkonsumen`, `fk_idvendor`, `paket`, `harga`, `nama_lengkap`, `alamat`, `no_hp`, `tglpernikahan`, `keterangan`, `norek`, `batas_pelunasan`) VALUES
(1, 8, 4, 'silver', 20000000, '', '', '', '0000-00-00', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `idvendor` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `norek` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vendor`
--

INSERT INTO `tb_vendor` (`idvendor`, `nama`, `username`, `password`, `email`, `norek`, `image`, `no_hp`, `alamat`, `role_id`) VALUES
(1, 'Monz Wedding', 'monzwed', '12345', 'ema@gmail.com', 0, 'default.png', '', '', 2),
(2, 'erlina', 'erlina12', '12345', 'erlina@gmail.com', 0, 'default.png', '', '', 2),
(3, 'Ema Ratna puri', 'monzwedding', '12345', 'ema@gmail.com', 0, 'default.png', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `role_id`, `nama`, `email`, `image`) VALUES
(8, 'q', '1212', 1, 'bagas', 'bagas@gmail.com', '(16)1.png'),
(9, 'pira12', '123456', 1, 'pira', 'pira@gmail.com', 'bts_icons_.jpg'),
(10, 'erlina12', '12345', 2, 'erlina', 'erlina@gmail.com', 'default.png'),
(11, 'viraw', '123456', 3, 'syahvira windianwar', 'vira@gmail.com', '(14).jpg'),
(12, 'pira123', '123456', 1, 'syahvirawindianwar', 'pira@gmail.com', 'Bts_Wallpaper_Taehyung_Wallpapers_49_Ideas.jpg'),
(13, 'monzwedding', '12345', 2, 'Ema Ratna puri', 'ema@gmail.com', 'default.png'),
(14, 'qwe', '123', 3, 'qwe', 'qwe@qwe.qwe', 'default.png'),
(15, 'qwe', '123', 3, 'qwe', 'qwe@qwe.qwe', 'default.png'),
(16, 'qwe', '123', 1, 'qwe', 'qwe@qwe.qwe', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'konsumen'),
(2, 'vendor'),
(3, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`idkonsumen`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  ADD PRIMARY KEY (`idjasa`),
  ADD KEY `idvendor` (`fk_idvendor`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `fk_idkonsumen` (`fk_idkonsumen`),
  ADD KEY `fk_idvendor` (`fk_idvendor`);

--
-- Indexes for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`idvendor`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `idkonsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  MODIFY `idjasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  MODIFY `idvendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD CONSTRAINT `konsumen_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`fk_idkonsumen`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`fk_idvendor`) REFERENCES `tb_jasa` (`idjasa`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
