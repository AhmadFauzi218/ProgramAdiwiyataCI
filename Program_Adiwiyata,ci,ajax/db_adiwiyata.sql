-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Des 2018 pada 08.05
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adiwiyata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah_adiwiayata`
--

CREATE TABLE `tb_sekolah_adiwiayata` (
  `id` int(120) NOT NULL,
  `nm_sekolah` varchar(250) DEFAULT NULL,
  `alamat_sekolah` text,
  `kontak_person` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) NOT NULL,
  `luas_lahan` int(255) DEFAULT NULL,
  `luas_bangunan` int(255) DEFAULT NULL,
  `koordinat_sekolah` varchar(255) DEFAULT NULL,
  `jumlah_siswa` int(250) DEFAULT NULL,
  `jumlah_siswi` int(250) NOT NULL,
  `jumlah_guru` int(250) DEFAULT NULL,
  `capai_sekolah` varchar(120) DEFAULT NULL,
  `sekolah_kota_cirebon` int(120) DEFAULT NULL,
  `sekolah_adiwiyata_provinsi_jabar` int(120) DEFAULT NULL,
  `sekolah_adiwiyata_nasional` int(120) DEFAULT NULL,
  `sekolah_adiwiyata_mandiri` int(120) DEFAULT NULL,
  `visi_sekolah` text,
  `misi_sekolah` text,
  `tujuan` text,
  `kurikulum` int(10) DEFAULT NULL,
  `lokasi_anggaran_kegiatan_hdp` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sekolah_adiwiayata`
--

INSERT INTO `tb_sekolah_adiwiayata` (`id`, `nm_sekolah`, `alamat_sekolah`, `kontak_person`, `no_hp`, `luas_lahan`, `luas_bangunan`, `koordinat_sekolah`, `jumlah_siswa`, `jumlah_siswi`, `jumlah_guru`, `capai_sekolah`, `sekolah_kota_cirebon`, `sekolah_adiwiyata_provinsi_jabar`, `sekolah_adiwiyata_nasional`, `sekolah_adiwiyata_mandiri`, `visi_sekolah`, `misi_sekolah`, `tujuan`, `kurikulum`, `lokasi_anggaran_kegiatan_hdp`) VALUES
(123947, 'SMK Al-hidayah ', 'palembang', 'Muhamad Andi', '081220546271', 240, 250, '1233,02920', 20, 20, 20, 'Belum', 2019, 2019, 2019, 2019, 'Islami & Akhlaq', 'Islami & Akhlaq', 'IslamIslami & Akhlaq', 2019, 20),
(12020239, 'SMK Adiwiyata', 'jln.pemuda', 'Andi', '0982736367372', 120, 320, '1233,02928', 10, 20, 30, 'Belum', 2019, 2020, 2030, 2040, 'Islami', 'Islami', 'Islami', 2019, 10),
(12938474, 'SMK informatika Al-irsyad', 'JLN.perjuangan', 'Fauzi', '081220546270', 120, 230, '-4.2832832,122.2037044', 10, 20, 30, 'Sudah', 2019, 2019, 2020, 2030, 'Islami', 'Islami', 'Islami', 2019, 90),
(434830948, 'SMK Adiwiyata', 'kebayoran lama', 'Fahmu', '09263736353738', 120, 230, '-1223,94328', 10, 20, 30, 'Belum', 2019, 2020, 2030, 2040, 'Cerdas', 'Cerdas', 'cerdas', 2019, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('82f163fb-fbb1-11e8-a6c5-f0761ccfed6f', 'dkis', 'dkis', '84875ae535e2dec1b38a1af9fb14db4d098a4077', '2'),
('aac3173d-fb53-11e8-8fa9-f0761ccfed6f', 'ADIWIYATA', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sekolah_adiwiayata`
--
ALTER TABLE `tb_sekolah_adiwiayata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
