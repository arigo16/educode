-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30 Nov 2018 pada 12.52
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
(1, 'Sistem Informasi'),
(2, 'Komputerisasi Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE IF NOT EXISTS `tb_pengajuan` (
`id_pengajuan` int(11) NOT NULL,
  `id_user` varchar(45) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `tgl_pengajuan` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tgl_periksa` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan_detail`
--

CREATE TABLE IF NOT EXISTS `tb_pengajuan_detail` (
  `id_pengajuan` int(11) NOT NULL,
  `id_tema` int(11) DEFAULT NULL,
  `id_platform` int(11) DEFAULT NULL,
  `judul_skripsi` varchar(45) DEFAULT NULL,
  `link_file` varchar(100) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_platform`
--

CREATE TABLE IF NOT EXISTS `tb_platform` (
`id_platform` int(11) NOT NULL,
  `nama_platform` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tema`
--

CREATE TABLE IF NOT EXISTS `tb_tema` (
`id_tema` int(11) NOT NULL,
  `nama_tema` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('ari', 1, 'educode', 'Arigo', 'Administrator'),
('dbk', 1, 'educode', 'Dwi Budi Kurniawan', 'Ketua Jurusan'),
('nasrul', 1, 'educode', 'Nasrul Hidayah', 'Mahasiswa');

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
 ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_pengajuan_detail`
--
ALTER TABLE `tb_pengajuan_detail`
 ADD PRIMARY KEY (`id_pengajuan`);

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
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_platform`
--
ALTER TABLE `tb_platform`
MODIFY `id_platform` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tema`
--
ALTER TABLE `tb_tema`
MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
