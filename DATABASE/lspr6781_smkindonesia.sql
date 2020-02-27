-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2019 at 03:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lspr6781_smkindonesia`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`lspr6781`@`localhost` PROCEDURE `procedure_nilai` (IN `nis_nilai` INT(10))  NO SQL
BEGIN
SELECT * FROM nilai where nis = nis_nilai;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(3) NOT NULL,
  `kode_admin` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `kode_admin`, `password`) VALUES
(1, 0, '123\r\n'),
(2, 123, '123\r\n'),
(3, 12345, '123');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(18) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `jk`, `alamat`, `password`) VALUES
('001808299299100', 'Hikmat Daviyana', 'L', 'Karadenan', '1234'),
('001808299299123', 'Heri Hermawan', 'L', 'Bogor', '12345'),
('001808299299555', 'Trigger_insert', 'L', 'Bogor', '123'),
('001808299299845', 'Alfi', 'L', 'Bogor', '11111'),
('001808299299898', 'Yuli Diana', 'P', 'Bojong Gede', '123456789'),
('001808299299990', 'Rollback', 'L', 'Cibinong', '123456');

--
-- Triggers `guru`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `guru` FOR EACH ROW INSERT INTO log (log,nama,waktu) VALUES ('Menghapus Guru',old.nama_guru,NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_guru` AFTER INSERT ON `guru` FOR EACH ROW INSERT INTO log (log,nama,waktu) VALUES ('Menambahkan Guru',new.nama_guru,NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_guru` AFTER UPDATE ON `guru` FOR EACH ROW INSERT INTO log (log,nama,waktu) VALUES ('Memperbaharui Guru',new.nama_guru,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(3) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'RPL'),
(2, 'TKJ\r\n'),
(3, 'TOI');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `id_jurusan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`) VALUES
(1, 'XII RPL 1', 1),
(2, 'XII TKJ 1', 2),
(3, 'XII TOI 1', 3),
(4, 'XII RPL 2', 1),
(5, 'XII TKJ 2', 2),
(7, 'XII TKJ 10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(3) NOT NULL,
  `log` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `log`, `nama`, `waktu`) VALUES
(2, 'Menambahkan Guru', 'TRIGGER', '2019-04-12 14:12:04'),
(3, 'Memperbaharui Guru', 'TRIGGER UPDATE', '2019-04-12 14:12:52'),
(4, 'Menghapus Guru', 'TRIGGER UPDATE', '2019-04-12 14:13:12'),
(5, 'Menambahkan Guru', 'GURUKU', '2019-04-15 11:25:21'),
(6, 'Memperbaharui Guru', 'GURUKU 1', '2019-04-15 11:26:54'),
(7, 'Menghapus Guru', 'GURUKU 1', '2019-04-15 11:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(3) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Pemrograman Dasar\r\n'),
(2, 'Pemrograman Web\r\n'),
(3, 'Basis Data');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id_mengajar` int(3) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `id_mapel` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `nip`, `id_mapel`, `id_kelas`) VALUES
(1, '001808299299100', 2, 1),
(2, '001808299299123', 1, 3),
(3, '001808299299845', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(3) NOT NULL,
  `id_mengajar` int(3) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `uh` double NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL,
  `na` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_mengajar`, `nis`, `uh`, `uts`, `uas`, `na`) VALUES
(1, 1, '1016006974', 80, 99, 90, 80.93),
(2, 2, '1016006977', 66, 77, 55, 70.88),
(4, 3, '1016006974', 80, 80, 70, 76.666666666667);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jk`, `alamat`, `id_kelas`, `password`) VALUES
('1016006974', 'Pascal Wilman', 'L', 'Bogor', 1, '12345\r\n'),
('1016006977', 'Serly Tri Pratiwi', 'P', 'Citeureup', 3, '123456789'),
('1016006980', 'Rakha Haris', 'L', 'Citayem', 2, '123');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vnilai`
-- (See below for the actual view)
--
CREATE TABLE `vnilai` (
`nama_siswa` varchar(100)
,`nama_guru` varchar(100)
,`nama_kelas` varchar(100)
,`nama_mapel` varchar(100)
,`nama_jurusan` varchar(100)
,`uh` double
,`uts` double
,`uas` double
,`na` double
);

-- --------------------------------------------------------

--
-- Structure for view `vnilai`
--
DROP TABLE IF EXISTS `vnilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`lspr6781`@`localhost` SQL SECURITY DEFINER VIEW `vnilai`  AS  select `g`.`nama_siswa` AS `nama_siswa`,`c`.`nama_guru` AS `nama_guru`,`e`.`nama_kelas` AS `nama_kelas`,`d`.`nama_mapel` AS `nama_mapel`,`f`.`nama_jurusan` AS `nama_jurusan`,`a`.`uh` AS `uh`,`a`.`uts` AS `uts`,`a`.`uas` AS `uas`,`a`.`na` AS `na` from ((((((`nilai` `a` left join `mengajar` `b` on((`a`.`id_mengajar` = `b`.`id_mengajar`))) left join `guru` `c` on((`b`.`nip` = `c`.`nip`))) left join `mapel` `d` on((`b`.`id_mapel` = `d`.`id_mapel`))) left join `kelas` `e` on((`b`.`id_kelas` = `e`.`id_kelas`))) left join `jurusan` `f` on((`e`.`id_jurusan` = `f`.`id_jurusan`))) left join `siswa` `g` on((`a`.`nis` = `g`.`nis`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id_mengajar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `mengajar_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `mengajar_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `mengajar_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_mengajar`) REFERENCES `mengajar` (`id_mengajar`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
