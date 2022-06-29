-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table gekindo.kategori_pelayanan
CREATE TABLE IF NOT EXISTS `kategori_pelayanan` (
  `id_kategori_pelayanan` int(11) NOT NULL,
  `nama_kategori_pelayanan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_pelayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.kategori_pelayanan: ~4 rows (approximately)
/*!40000 ALTER TABLE `kategori_pelayanan` DISABLE KEYS */;
INSERT INTO `kategori_pelayanan` (`id_kategori_pelayanan`, `nama_kategori_pelayanan`) VALUES
	(1, 'Persekutuan (Koinonia)'),
	(2, 'Pewartaan (Kerygma)'),
	(3, 'Peribadatan (Liturgia)'),
	(4, 'Kesaksian Hidup (Martyria)'),
	(5, 'Pelayanan (Diakonia)');
/*!40000 ALTER TABLE `kategori_pelayanan` ENABLE KEYS */;

-- Dumping structure for table gekindo.pelayan
CREATE TABLE IF NOT EXISTS `pelayan` (
  `id_pelayan` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `gelar_pelayan` varchar(255) DEFAULT NULL,
  `gelar_depan_pelayan` varchar(255) DEFAULT NULL,
  `nama_pelayan` varchar(255) DEFAULT NULL,
  `jabatan_pelayan` varchar(255) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `singkatan_jabatan` varchar(50) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pelayan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.pelayan: ~9 rows (approximately)
/*!40000 ALTER TABLE `pelayan` DISABLE KEYS */;
INSERT INTO `pelayan` (`id_pelayan`, `slug`, `gelar_pelayan`, `gelar_depan_pelayan`, `nama_pelayan`, `jabatan_pelayan`, `img`, `singkatan_jabatan`, `intro`) VALUES
	(1, 'elliot-labonda', 'S.Th., M.Teol.,', NULL, 'Elliot Nan Boland Labonda', 'Gembala Jemaat', 'enbl.png', 'Pdt.', NULL),
	(2, 'emanuella-labonda', 'S.Th.,', NULL, 'Emanuella Labonda-Nenoharan', 'Pendeta', 'eln.png', 'Pdt.', NULL),
	(3, 'yuliati-longgo', 'S.Th., M.Th.,', NULL, 'Yuliati Longgo', 'Pendeta', 'yl.png', 'Pdt.', 'Aku bersyukur kepada Dia, yang menguatkan aku, yaitu Kristus Yesus, Tuhan kita, karena Ia menganggap aku setia dan mempercayakan pelayanan ini kepadaku - 1 Timotius 1:12'),
	(4, 'adrian-ingratubun', 'MM.,', 'Ir.', 'Adrian Ingratubun', 'Penatua', 'ai.png', 'Pnt.', NULL),
	(5, 'ratna-sinaga', NULL, NULL, 'Ratna Sinaga', 'Penatua', 'rs.png', 'Pnt.', NULL),
	(6, 'restiana-tampubolon', NULL, NULL, 'Restiana Tampubolon', 'Penatua', 'rt.png', 'Pnt.', NULL),
	(7, 'ros-rahayaan', NULL, NULL, 'Ros Rahayaan', 'Penatua', 'rr.png', 'Pnt.', NULL),
	(8, 'widarti-napitupulu', 'S.E.,', NULL, 'Widarti Napitupulu', 'Diaken', 'wn.png', 'Dkn.', NULL),
	(9, 'fyka-napitupulu', 'S.S.,', NULL, 'Fyka Napitupulu', 'Diaken', 'fnm.png', 'Dkn.', NULL),
	(10, 'agustina-retraubun', 'S.E.,', NULL, 'Agustina Retraubun', 'Diaken', 'arl.png', 'Dkn.', NULL),
	(11, 'daniel-retraubun', 'S.T.,', NULL, 'Daniel Retraubun', 'Diaken', 'dpr.png', 'Dkn.', NULL);
/*!40000 ALTER TABLE `pelayan` ENABLE KEYS */;

-- Dumping structure for table gekindo.pelayanan
CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id` int(11) NOT NULL,
  `nama_pelayanan` varchar(255) DEFAULT NULL,
  `id_kategori_pelayanan` int(11) DEFAULT NULL,
  `id_pelayan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori_pelayanan` (`id_kategori_pelayanan`),
  KEY `id_pelayan` (`id_pelayan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.pelayanan: ~4 rows (approximately)
/*!40000 ALTER TABLE `pelayanan` DISABLE KEYS */;
INSERT INTO `pelayanan` (`id`, `nama_pelayanan`, `id_kategori_pelayanan`, `id_pelayan`) VALUES
	(1, 'Kebaktian Minggu', 3, '1'),
	(2, 'Kebaktian Minggu', 3, '2'),
	(3, 'Kebaktian Minggu', 3, '3'),
	(4, 'Baptisan Anak', NULL, NULL);
/*!40000 ALTER TABLE `pelayanan` ENABLE KEYS */;

-- Dumping structure for table gekindo.warta
CREATE TABLE IF NOT EXISTS `warta` (
  `id_warta` int(11) NOT NULL,
  `tema_warta` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `ayat_warta` varchar(255) DEFAULT NULL,
  `isi_warta` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `tgl_warta` date DEFAULT NULL,
  PRIMARY KEY (`id_warta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.warta: ~0 rows (approximately)
/*!40000 ALTER TABLE `warta` DISABLE KEYS */;
INSERT INTO `warta` (`id_warta`, `tema_warta`, `slug`, `ayat_warta`, `isi_warta`, `created_at`, `updated_at`, `img`, `tgl_warta`) VALUES
	(1, 'MENJALANI HIDUP TANPA SANDIWARA', 'menjalani-hidup-tanpa-sandiwara', '2 Petrus 1:16-21', '"Sebab kami tidak mengikuti dongeng-dongeng isapan jempol manusia,ketika kami memberitahukan kepadamu kuasa dan kedatangan Tuhan kita, Yesus Kristus sebagai raja, tetapi kami adalah saksi mata dari kebesaran-Nya."  2 Petrus 1:16', NULL, NULL, NULL, '2022-06-29'),
	(2, 'JALAN KEBENARAN', 'jalan-kebenaran', 'Matius 33:6', '"Sebab kami tidak mengikuti dongeng-dongeng isapan jempol manusia,ketika kami memberitahukan kepadamu kuasa dan kedatangan Tuhan kita, Yesus Kristus sebagai raja, tetapi kami adalah saksi mata dari kebesaran-Nya."  2 Petrus 1:16', NULL, NULL, NULL, '2022-06-30');
/*!40000 ALTER TABLE `warta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
