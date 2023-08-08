-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 02:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kd_guru` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kd_guru`, `nama`, `jk`, `tgl_lahir`, `alamat`, `no_hp`, `kd_mapel`, `gambar`, `username`, `password`, `jabatan`) VALUES
(1, 'Pupung Halimah', 'Perempuan', '1978-03-04', 'Gg. Nurul Ghafar, Liyue, Teyvat ', '085622354576', 1, 'gambar/Screenshot (188).png', 'pupung123', 'pupung123', 'Kepala Sekolah'),
(2, 'Sarwono ', 'Laki-laki', '1984-07-12', 'Kav. Latansa, Ciawi, Bogor', '081234657899', 1, 'gambar/Screenshot (190).png', 'sarwono12', 'sarwono12', 'Wakasek'),
(3, 'Saddam Al-Ghafar', 'Laki-laki', '1988-02-06', 'Gg. Pahlawan, Ciawi, Bogor', '089877465467', 1, 'gambar/Screenshot (53).png', 'saddam12', 'saddam12', 'Guru'),
(4, 'Agus Jaelani', 'Laki-laki', '1998-04-01', 'Kav. Latansa, Kec. Baw, Kab. Ap', '089516881121', 1, 'gambar/Screenshot (50).png', 'agus', 'agus123', 'Guru'),
(5, 'Michael Rizkye', 'Laki-laki', '2001-01-01', 'Dimana aja, Kec. Ad, Kab. Aw', '089516881212', 1, 'gambar/1.jpg', 'mici', 'mici12', 'Guru'),
(6, 'Shawalin Fitrie', 'Perempuan', '2002-06-10', 'kambangan 2, Kec. le', '087844306522', 1, 'gambar/2020-09-03.png', 'fitrr', 'fitrr1', 'Guru'),
(7, 'Azzam Rafi', 'Laki-laki', '2005-04-23', 'Kav.latansa ', '087844306570', 1, 'gambar/Screenshot (48).png', 'zamm', 'azam', 'Guru'),
(8, 'Cicih Murni', 'Perempuan', '1989-08-08', 'Kav. Latansa, Kec. Ciawi', '081234567899', 1, 'gambar/Screenshot (80).png', 'cicih', 'cicih1', 'Guru'),
(9, 'Kazami Atep', 'Laki-laki', '1990-09-20', 'Perum. Cinta Kembang, Kab. Semarang', '089874567890', 2, 'gambar/persia.jpg', 'atep', 'atep', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kd_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kaprodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kd_jurusan`, `jurusan`, `kaprodi`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'Arie Cordova'),
(2, 'Teknik Komputer dan Jaringan', 'Susilo Nurul'),
(3, 'Teknik Informatika', 'Kunedi Kusuma'),
(4, 'Tata Boga', 'Natzwa Aprilyel Ajeng'),
(5, 'Analisis Kimia', 'Muhammad Habibie '),
(6, 'Multi Media', 'Safira Affandy'),
(7, 'Manajemen Informasi', 'Maulana Ulami'),
(8, 'Teknik Perminyakan', 'Jalil Indra');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kelas` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kd_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `kelas`, `kd_guru`) VALUES
(1, 'X-A', 1),
(2, 'XI-B', 2),
(3, 'X-B', 3),
(4, 'X-C', 8),
(5, 'XI-A', 4),
(6, 'XI-C', 5),
(7, 'XII-A', 6),
(8, 'XII-B', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kd_mapel` int(11) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `mapel`, `kategori`) VALUES
(1, 'Pemograman Web Bergerak', 'Rekayasa Perangakat Lunak'),
(2, 'Pemograman Fundamental', 'Teknik Informatika'),
(3, 'Matematika', 'kelas 11'),
(4, 'Bahasa inggris', 'kelas 9'),
(5, 'Bahasa Indonesia', 'kelas 11'),
(6, 'Pendidikan Agama Islam', 'kelas 10'),
(7, 'Gizi dan Kesehatan', 'Produktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `kd_nilai` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `pjok` int(11) NOT NULL,
  `b_ingg` int(11) NOT NULL,
  `ppkn` int(11) NOT NULL,
  `b_sunda` int(11) NOT NULL,
  `pai` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `b_indo` int(11) NOT NULL,
  `sbk` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `rerata` int(11) NOT NULL,
  `predikat` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tgl_penilaian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`kd_nilai`, `nis`, `nama`, `jurusan`, `kelas`, `pjok`, `b_ingg`, `ppkn`, `b_sunda`, `pai`, `mtk`, `b_indo`, `sbk`, `total`, `rerata`, `predikat`, `status`, `tgl_penilaian`) VALUES
(1, 12000600, 'Azzam Rafi Zafran', 'Rekayasa Perangkat Lunak', 'X-A', 100, 98, 97, 98, 83, 93, 76, 100, 745, 93, 'A', 'Lulus', '2022-04-01'),
(2, 12000601, 'Rufaida Syifa', 'Teknik Komputer dan Jaringan', 'XI-B', 86, 89, 96, 90, 85, 78, 80, 84, 688, 86, 'B', 'Lulus', '2022-04-08'),
(3, 12000602, 'Salsa Shabrina', 'Teknik Informatika', 'X-B', 97, 95, 87, 78, 91, 93, 96, 87, 724, 91, 'A', 'Lulus', '2022-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `kd_siswa` int(11) NOT NULL,
  `nis` char(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kd_jurusan` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`kd_siswa`, `nis`, `nama`, `jk`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `gambar`, `username`, `password`, `agama`, `kd_jurusan`, `kd_kelas`) VALUES
(1, '12000600', 'Azzam Rafi Zafran', 'Laki-laki', '2005-04-23', 'Kav. Latansa, Ciawi, Bogor', '087844306570', 'azzamrafizafran@gmail.com', 'gambar/Screenshot (195).png', 'azmrfii', 'azrz23apa', 'Islam', 1, 2),
(2, '12000601', 'Rufaida Syifa', 'Perempuan', '2003-10-24', 'kav. Latansa, Ciawi, Bogor', '087844306571', 'syifa875@yahoo.com', 'gambar/Screenshot (185).png', 'syiff', 'syifa123', 'Islam', 4, 3),
(3, '12000602', 'Salsa Shabrina', 'Perempuan', '2005-11-29', 'Gg. Hj. Aisyah, Kec. Ciawi, Kab. Bogor', '089516881112', 'salsashaa@yahoo.com', 'gambar/Screenshot (106).png', 'salshaa', 'salshaa12', 'Islam', 4, 2),
(4, '12000603', 'Jamalun Jamal', 'Laki-laki', '1998-03-07', 'Ds. Bojong Murni, Kec. Caringin, Kab. Bogor', '087844306587', 'fbaii@gmail.com', 'gambar/Screenshot (45).png', 'jamal', 'jamal', 'Katholik', 7, 2),
(5, '12000604', 'Muhammad Dhafin', 'Laki-laki', '2004-11-03', 'Kec. Depok, Prov. Jabar', '082134567890', 'dhafin@yahoo.com', 'gambar/Screenshot (50).png', 'dhafin', 'dhafin', 'Islam', 3, 4),
(6, '12000605', 'Chandra Wijaya Putra', 'Laki-laki', '2004-11-07', 'Ciherang pondok, Kab. Bogor', '081286567820', 'chandra1@gmail.com', 'gambar/two sword.jpg', 'chan', 'chan', 'Islam', 5, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_akademik`
-- (See below for the actual view)
--
CREATE TABLE `v_data_akademik` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_guru`
-- (See below for the actual view)
--
CREATE TABLE `v_data_guru` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_guruu`
-- (See below for the actual view)
--
CREATE TABLE `v_data_guruu` (
);

-- --------------------------------------------------------

--
-- Structure for view `v_data_akademik`
--
DROP TABLE IF EXISTS `v_data_akademik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_akademik`  AS  select `a`.`kd_siswa` AS `kd_siswa`,`a`.`nama` AS `nama`,`b`.`jurusan` AS `jurusan`,`c`.`kelas` AS `kelas`,`d`.`mapel` AS `mapel`,`e`.`kd_nilai` AS `kd_nilai`,`e`.`nilai` AS `nilai`,`e`.`status` AS `status` from ((((`tb_siswa` `a` join `tb_jurusan` `b` on(`a`.`kd_siswa` = `b`.`kd_jurusan`)) join `tb_kelas` `c` on(`a`.`kd_siswa` = `c`.`kd_kelas`)) join `tb_mapel` `d` on(`a`.`kd_siswa` = `d`.`kd_mapel`)) join `tb_nilai` `e` on(`a`.`kd_siswa` = `e`.`kd_nilai`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_guru`
--
DROP TABLE IF EXISTS `v_data_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_guru`  AS  select `a`.`nama` AS `nama`,`a`.`jk` AS `jk`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`alamat` AS `alamat`,`a`.`no_hp` AS `no_hp`,`a`.`kd_mapel` AS `kd_mapel`,`a`.`foto` AS `foto`,`b`.`mapel` AS `mapel`,`a`.`username` AS `username`,`a`.`password` AS `password`,`a`.`jabatan` AS `jabatan` from (`tb_guru` `a` join `tb_mapel` `b` on(`a`.`kd_guru` = `b`.`kd_mapel`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_guruu`
--
DROP TABLE IF EXISTS `v_data_guruu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_guruu`  AS  select `a`.`nama` AS `nama`,`a`.`jk` AS `jk`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`alamat` AS `alamat`,`a`.`no_hp` AS `no_hp`,`a`.`foto` AS `foto`,`b`.`kd_mapel` AS `kd_mapel`,`b`.`mapel` AS `mapel`,`a`.`jabatan` AS `jabatan` from (`tb_guru` `a` join `tb_mapel` `b` on(`a`.`kd_guru` = `b`.`kd_mapel`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kd_guru`),
  ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `fk_guru` (`kd_guru`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`kd_siswa`),
  ADD KEY `kd_jurusan` (`kd_jurusan`),
  ADD KEY `kd_kelas` (`kd_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `kd_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `kd_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `kd_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `kd_mapel` FOREIGN KEY (`kd_mapel`) REFERENCES `tb_mapel` (`kd_mapel`);

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `fk_guru` FOREIGN KEY (`kd_guru`) REFERENCES `tb_guru` (`kd_guru`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `kd_jurusan` FOREIGN KEY (`kd_jurusan`) REFERENCES `tb_jurusan` (`kd_jurusan`),
  ADD CONSTRAINT `kd_kelas` FOREIGN KEY (`kd_kelas`) REFERENCES `tb_kelas` (`kd_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
