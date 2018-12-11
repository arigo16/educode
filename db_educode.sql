-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 11 Des 2018 pada 11.24
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_educode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan` (
`id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'SI'),
(2, 'KA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE IF NOT EXISTS `tb_pengajuan` (
  `id_pengajuan` varchar(15) NOT NULL,
  `id_user` varchar(45) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `tgl_pengajuan` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tgl_periksa` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `id_user`, `id_jurusan`, `tgl_pengajuan`, `status`, `tgl_periksa`) VALUES
('SK-201812110001', 'angga', 1, '2018-12-11 17:07:29', 'Sudah diperiksa', '2018-12-11 11:08:32'),
('SK-201812110002', 'niar', 1, '2018-12-11 17:14:05', 'Belum diperiksa', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan_detail`
--

CREATE TABLE IF NOT EXISTS `tb_pengajuan_detail` (
  `id_pengajuan` varchar(15) NOT NULL,
  `id_tema` int(11) DEFAULT NULL,
  `id_platform` int(11) DEFAULT NULL,
  `judul_skripsi` varchar(500) NOT NULL,
  `link_file` varchar(600) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengajuan_detail`
--

INSERT INTO `tb_pengajuan_detail` (`id_pengajuan`, `id_tema`, `id_platform`, `judul_skripsi`, `link_file`, `status`, `keterangan`) VALUES
('SK-201812110002', 4, 3, 'Analisa Dan Perancangan Sistem Informasi Aplikasi E-Menu Pada Rumah Makan Ciganea Berbasis Android Terintegrasi Dengan Desktop (Client-Server)', 'file/Analisa Dan Perancangan Sistem Informasi Aplikasi E-Menu Pada Rumah Makan Ciganea Berbasis Android Terintegrasi Dengan Desktop (Client-Server).pdf', 'Belum diperiksa', ''),
('SK-201812110002', 4, 1, 'Analisa Dan Perancangan Sistem Informasi Penjualan Sepeda Motor Pada Dealer Xyz Berbasis Web Menggunakan Php Dan Mysql', 'file/Analisa Dan Perancangan Sistem Informasi Penjualan Sepeda Motor Pada Dealer Xyz Berbasis Web Menggunakan Php Dan Mysql.pdf', 'Belum diperiksa', ''),
('SK-201812110002', 4, 4, 'Analisa Dan Perancangan Sistem Informasi Persediaan Barang Pada Pt. Bangun Era Sejahtera Dengan Menggunakan Visual Basic Net Dan Mysql', 'file/Analisa Dan Perancangan Sistem Informasi Persediaan Barang Pada Pt. Bangun Era Sejahtera Dengan Menggunakan Visual Basic Net Dan Mysql.pdf', 'Belum diperiksa', ''),
('SK-201812110001', 4, 3, 'Aplikasi Sistem Pelayanan Restoran Terintegrasi Berbasis Android', 'file/Aplikasi Sistem Pelayanan Restoran Terintegrasi Berbasis Android.pdf', 'Ditolak', ''),
('SK-201812110001', 4, 3, 'Perancangan Sistem Informasi Pemesanan Makanan dan Minuman (e-Menu) Berbasis Platform Android Pada Restoran Moca Cafe', 'file/Perancangan Sistem Informasi Pemesanan Makanan dan Minuman (e-Menu) Berbasis Platform Android Pada Restoran Moca Cafe.pdf', 'Disetujui', ''),
('SK-201812110001', 4, 3, 'Sistem Informasi Pemesanan Makanan Dan Minuman Pada Omahe Cafe And Resto Berbasis Client Server Dengan Platform Android', 'file/Sistem Informasi Pemesanan Makanan Dan Minuman Pada Omahe Cafe And Resto Berbasis Client Server Dengan Platform Android.pdf', 'Ditolak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_platform`
--

CREATE TABLE IF NOT EXISTS `tb_platform` (
`id_platform` int(11) NOT NULL,
  `nama_platform` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_platform`
--

INSERT INTO `tb_platform` (`id_platform`, `nama_platform`) VALUES
(1, 'Website'),
(3, 'Android'),
(4, 'Desktop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tema`
--

CREATE TABLE IF NOT EXISTS `tb_tema` (
`id_tema` int(11) NOT NULL,
  `nama_tema` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tema`
--

INSERT INTO `tb_tema` (`id_tema`, `nama_tema`) VALUES
(1, 'Networking'),
(2, 'Security'),
(3, 'Hardware'),
(4, 'Software');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(45) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `otorisasi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_jurusan`, `password`, `nama`, `otorisasi`) VALUES
('angga', 1, 'educode', 'Anggara', 'Mahasiswa'),
('ari', 1, 'educode', 'Arigo', 'Administrator'),
('budi', 1, 'educode', 'Dwi Budi Kurniawan', 'Ketua Jurusan'),
('nasrul', 1, 'educode', 'Nasrul Hidayah', 'Mahasiswa'),
('niar', 1, 'educode', 'Nia Ramadhani', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
 ADD PRIMARY KEY (`id_pengajuan`), ADD KEY `id_user` (`id_user`), ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `tb_pengajuan_detail`
--
ALTER TABLE `tb_pengajuan_detail`
 ADD PRIMARY KEY (`judul_skripsi`), ADD KEY `id_pengajuan` (`id_pengajuan`), ADD KEY `id_tema` (`id_tema`), ADD KEY `id_platform` (`id_platform`);

--
-- Indexes for table `tb_platform`
--
ALTER TABLE `tb_platform`
 ADD PRIMARY KEY (`id_platform`);

--
-- Indexes for table `tb_tema`
--
ALTER TABLE `tb_tema`
 ADD PRIMARY KEY (`id_tema`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_jurusan` (`id_jurusan`), ADD KEY `id_jurusan_2` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_platform`
--
ALTER TABLE `tb_platform`
MODIFY `id_platform` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_tema`
--
ALTER TABLE `tb_tema`
MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
ADD CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengajuan_detail`
--
ALTER TABLE `tb_pengajuan_detail`
ADD CONSTRAINT `tb_pengajuan_detail_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `tb_pengajuan` (`id_pengajuan`) ON UPDATE CASCADE,
ADD CONSTRAINT `tb_pengajuan_detail_ibfk_2` FOREIGN KEY (`id_tema`) REFERENCES `tb_tema` (`id_tema`) ON UPDATE CASCADE,
ADD CONSTRAINT `tb_pengajuan_detail_ibfk_3` FOREIGN KEY (`id_platform`) REFERENCES `tb_platform` (`id_platform`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
