-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_absen
CREATE DATABASE IF NOT EXISTS `db_absen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_absen`;

-- Dumping structure for table db_absen.t_agenda
CREATE TABLE IF NOT EXISTS `t_agenda` (
  `id_agenda` varchar(50) NOT NULL,
  `agenda` text NOT NULL,
  `tgl_plak` date NOT NULL,
  `waktu` char(5) NOT NULL DEFAULT '',
  `tempat` text NOT NULL DEFAULT '',
  `pic` varchar(50) NOT NULL DEFAULT '',
  `input` varchar(50) NOT NULL DEFAULT '',
  `tgl_buat` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_absen.t_agenda: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_agenda` DISABLE KEYS */;
INSERT INTO `t_agenda` (`id_agenda`, `agenda`, `tgl_plak`, `waktu`, `tempat`, `pic`, `input`, `tgl_buat`) VALUES
	('630b67f38d22a', 'RAPAT KOORDINASI PEMBAHASAN ANGGARAN PEMBANGUNAN PLTU', '2022-08-28', '09:00', 'RUANG RAPAT SULTAN SURIANSYAH & ZOOM MEETING ID : 983773883 PASSWORD : UIKLKEREN', 'TIM', 'ADMIN', '2022-08-28 21:05:18');
/*!40000 ALTER TABLE `t_agenda` ENABLE KEYS */;

-- Dumping structure for table db_absen.t_peserta
CREATE TABLE IF NOT EXISTS `t_peserta` (
  `id_peserta` varchar(50) NOT NULL,
  `id_agenda` varchar(50) NOT NULL,
  `nip` char(50) NOT NULL,
  `nama` char(50) NOT NULL,
  `nohp` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `unit` char(50) NOT NULL,
  `jabatan` char(50) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_absen.t_peserta: ~18 rows (approximately)
/*!40000 ALTER TABLE `t_peserta` DISABLE KEYS */;
INSERT INTO `t_peserta` (`id_peserta`, `id_agenda`, `nip`, `nama`, `nohp`, `email`, `unit`, `jabatan`, `waktu`) VALUES
	('601cb3705b6d0', '601bb2fc017a1', 'sekarang', 'nama', '0883773', 'admin@gmail.com', 'PLN KSKT', 'SPV', '2021-02-05 10:54:40'),
	('601cbbaf64f3c', '601cbae206490', 'sekarang', 'winda hamidah', '0883773', 'admin@gmail.com', 'PLN UIKL kalimantan', 'MSB', '2021-02-05 11:29:51'),
	('630471e2a9d0a', '601cbae206490', '92100100184', 'HDHHD', '32434234', 'admin@gmail.com', 'PJB PERWAKILAN KALIMANTAN', 'SPV ENERGI', '2022-08-23 14:21:22'),
	('63047f351b62f', '601cbae206490', '08377777', 'DUMY TES', '32434234', 'admin@gmail.com', 'PJB PERWAKILAN KALIMANTAN', 'SPV ENERGI', '2022-08-23 15:18:13'),
	('63047fd3799a3', '601cbae206490', '92100100184', 'HDHHD', '32434234', 'admin@gmail.com', 'PJB PERWAKILAN KALIMANTAN', 'SPV ENERGI', '2022-08-23 15:20:51'),
	('6304817466e4a', '601cbae206490', '92100100184', 'HDHHD', '32434234', 'admin@gmail.com', 'PJB PERWAKILAN KALIMANTAN', 'SPV ENERGI', '2022-08-23 15:27:48'),
	('6304847b3e7d2', '6304614de5a9d', 'SATU', 'NAMA SATU', '1233', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-23 15:40:43'),
	('630485bf4733f', '6304614de5a9d', 'DUA', 'NAMA KEDUA', '1233', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-23 15:46:07'),
	('63048d4317d46', '6304614de5a9d', '98388747A', 'NAMA DUMMY', '09877777', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-23 16:18:11'),
	('63088d640df29', '601cbae206490', 'NIP', 'NAMA DUMMY', '09877777', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-26 17:07:48'),
	('63088dba41ebe', '601cbae206490', '98388747A', 'ASDASDAD', '123123123', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-26 17:09:14'),
	('63088f883724a', '601cbae206490', '98388747A', 'DELAPAN', '1233', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-26 17:16:56'),
	('6308951a91b0e', '601cbae206490', '98388747A', 'NAMA KEDUA', '3333', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-26 17:40:42'),
	('63089528eead6', '601cbae206490', 'NIP', 'NAMA KEDUA', '09877777', 'emilhadikusuma@outlook.com', 'INDUK', 'MANAGER', '2022-08-26 17:40:56'),
	('6308955076233', '601cbae206490', '11', 'SEBELAS', '09877777', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-26 17:41:36'),
	('630b68721cd71', '630b67f38d22a', 'PJB98777737', 'RINI ANANDA SIMANJUNTAK', '08766565666', 'rini.aa@pjb.co.id', 'PBJ KALIMANTAN', 'JE KEU', '2022-08-28 21:06:58'),
	('630b6994bc543', '630b67f38d22a', 'IP98377737888', 'TOMI RYHANA BARATA', '08736637277', 'tomi.barata@ipido.co.id', 'INDONESIA POWER', 'SVP ENERGI', '2022-08-28 21:11:48'),
	('630b7f8488351', '630b67f38d22a', 'IP98377737888', 'RINI ANANDA SIMANJUNTAK', '765765764', 'rini.aa@pjb.co.id', 'INDONESIA POWER', 'JE KEU', '2022-08-28 22:45:24'),
	('630b80b8a811f', '630b67f38d22a', 'IP98377737888', 'RINI ANANDA SIMANJUNTAK', '333', 'rini.aa@pjb.co.id', 'INDONESIA POWER', 'JE KEU', '2022-08-28 22:50:32'),
	('630b821cdf5ae', '630b67f38d22a', 'IP98377737888', 'TOMI RYHANA BARATA', '2222', 'rini.aa@pjb.co.id', 'INDONESIA POWER', 'JE KEU', '2022-08-28 22:56:28'),
	('630c132336fa7', '630b67f38d22a', 'DUA', 'NAMA KEDUA', '09877777', 'admin@gmail.com', 'INDUK', 'MANAGER', '2022-08-29 09:15:15');
/*!40000 ALTER TABLE `t_peserta` ENABLE KEYS */;

-- Dumping structure for table db_absen.t_user
CREATE TABLE IF NOT EXISTS `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` char(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_absen.t_user: ~5 rows (approximately)
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`id_user`, `user`, `password`, `level`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'SEKRE SDM', '21232f297a57a5a743894a0e4a801fc3', 2),
	(3, 'SEKRE KEUANGAN', '21232f297a57a5a743894a0e4a801fc3', 2),
	(4, 'SEKRE TRANSMISI', '21232f297a57a5a743894a0e4a801fc3', 2),
	(5, 'SEKRE PERENCANAAN', '21232f297a57a5a743894a0e4a801fc3', 2);
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
