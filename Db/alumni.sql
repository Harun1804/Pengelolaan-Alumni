-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2019 pada 13.28
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `alisdata`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `alisdata` (
`id` varchar(7)
,`nama` varchar(40)
,`nama_instansi` varchar(35)
,`jurusan` varchar(35)
,`facebook` varchar(60)
,`instagram` varchar(60)
,`twitter` varchar(60)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `aludata`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `aludata` (
`id` varchar(7)
,`nama` varchar(40)
,`nama_pekerjaan` varchar(20)
,`tahun` int(11)
,`username` varchar(60)
,`password` varchar(60)
,`role` tinyint(1)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` varchar(7) NOT NULL,
  `id_pekerjaan` varchar(6) DEFAULT NULL,
  `id_masuk` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` char(1) NOT NULL,
  `nomber` varchar(15) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `bgelar` varchar(16) DEFAULT NULL,
  `dgelar` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `id_pekerjaan`, `id_masuk`, `nama`, `jk`, `nomber`, `alamat`, `bgelar`, `dgelar`) VALUES
('ALU001', 'mhs', 2014, 'admin', 'L', '081234567890', '', '', ''),
('ALU002', 'mhs', 2014, 'Aegis', 'L', '081234567890', '', '', ''),
('ALU003', 'mhs', 2014, 'Harun', 'L', '081234567890', NULL, '', '');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `bio_per`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `bio_per` (
`id` varchar(7)
,`id_pekerjaan` varchar(6)
,`id_masuk` int(11)
,`nama` varchar(40)
,`jk` char(1)
,`nomber` varchar(15)
,`alamat` varchar(50)
,`bgelar` varchar(16)
,`dgelar` varchar(8)
,`nama_pekerjaan` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `fulldataalumni`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `fulldataalumni` (
`id` varchar(7)
,`id_masuk` int(11)
,`nama` varchar(40)
,`jk` char(1)
,`nomber` varchar(15)
,`alamat` varchar(50)
,`bgelar` varchar(16)
,`dgelar` varchar(8)
,`nama_pekerjaan` varchar(20)
,`jabatan` varchar(20)
,`nama_instansi` varchar(35)
,`fakultas` varchar(30)
,`jurusan` varchar(35)
,`semester` int(11)
,`line` varchar(30)
,`facebook` varchar(60)
,`instagram` varchar(60)
,`twitter` varchar(60)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `intansi`
--

CREATE TABLE `intansi` (
  `id` varchar(7) NOT NULL,
  `nama_instansi` varchar(35) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `fakultas` varchar(30) DEFAULT NULL,
  `jurusan` varchar(35) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `intansi`
--

INSERT INTO `intansi` (`id`, `nama_instansi`, `jabatan`, `fakultas`, `jurusan`, `semester`) VALUES
('ALU001', 'Politeknik Pos Indonesia', '', '', '', NULL),
('ALU002', 'Politeknik Pos Indonesia', '', '', 'D4 Teknik Informatika', 4),
('ALU003', 'Politeknik Pos Indonesia', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_masukan`
--

CREATE TABLE `kategori_masukan` (
  `id_masukan` varchar(7) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_masukan`
--

INSERT INTO `kategori_masukan` (`id_masukan`, `nama_kategori`) VALUES
('KTGR001', 'Infrastruktur'),
('KTGR002', 'Aplikasi'),
('KTGR003', 'Pembelajaran'),
('KTGR004', 'Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` varchar(6) NOT NULL,
  `nama_pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
('adm', 'Administrator'),
('brh', 'Buruh'),
('mhs', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_masukan` varchar(7) DEFAULT NULL,
  `id` varchar(7) DEFAULT NULL,
  `masukan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` varchar(7) DEFAULT NULL,
  `line` varchar(30) DEFAULT NULL,
  `facebook` varchar(60) DEFAULT NULL,
  `instagram` varchar(60) DEFAULT NULL,
  `twitter` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `line`, `facebook`, `instagram`, `twitter`) VALUES
('ALU001', 'x', '', '', ''),
('ALU002', 'a', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_masuk`
--

CREATE TABLE `tahun_masuk` (
  `id_masuk` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun_masuk`
--

INSERT INTO `tahun_masuk` (`id_masuk`, `tahun`) VALUES
(1992, 1992),
(1993, 1993),
(1994, 1994),
(1995, 1995),
(1996, 1996),
(1997, 1997),
(1998, 1998),
(1999, 1999),
(2000, 2000),
(2001, 2001),
(2002, 2002),
(2003, 2003),
(2004, 2004),
(2005, 2005),
(2006, 2006),
(2007, 2007),
(2008, 2008),
(2009, 2009),
(2010, 2010),
(2011, 2011),
(2012, 2012),
(2013, 2013),
(2014, 2014),
(2015, 2015),
(2016, 2016),
(2017, 2017),
(2018, 2018),
(2019, 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(7) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
('ALU001', 'admin@p.com', '21232f297a57a5a743894a0e4a801fc3', 0),
('ALU002', 'a@p.com', '0cc175b9c0f1b6a831c399e269772661', 1),
('ALU003', 'h@p.com', '2510c39011c5be704182423e3a695e91', 1);

-- --------------------------------------------------------

--
-- Struktur untuk view `alisdata`
--
DROP TABLE IF EXISTS `alisdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alisdata`  AS  select `biodata`.`id` AS `id`,`biodata`.`nama` AS `nama`,`intansi`.`nama_instansi` AS `nama_instansi`,`intansi`.`jurusan` AS `jurusan`,`sosmed`.`facebook` AS `facebook`,`sosmed`.`instagram` AS `instagram`,`sosmed`.`twitter` AS `twitter` from ((`biodata` join `intansi` on((`intansi`.`id` = `biodata`.`id`))) join `sosmed` on((`sosmed`.`id` = `biodata`.`id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `aludata`
--
DROP TABLE IF EXISTS `aludata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `aludata`  AS  select `biodata`.`id` AS `id`,`biodata`.`nama` AS `nama`,`pekerjaan`.`nama_pekerjaan` AS `nama_pekerjaan`,`tahun_masuk`.`tahun` AS `tahun`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`role` AS `role` from (((`biodata` join `pekerjaan` on((`pekerjaan`.`id_pekerjaan` = `biodata`.`id_pekerjaan`))) join `tahun_masuk` on((`tahun_masuk`.`id_masuk` = `biodata`.`id_masuk`))) join `user` on((`user`.`id` = `biodata`.`id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `bio_per`
--
DROP TABLE IF EXISTS `bio_per`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bio_per`  AS  select `biodata`.`id` AS `id`,`biodata`.`id_pekerjaan` AS `id_pekerjaan`,`biodata`.`id_masuk` AS `id_masuk`,`biodata`.`nama` AS `nama`,`biodata`.`jk` AS `jk`,`biodata`.`nomber` AS `nomber`,`biodata`.`alamat` AS `alamat`,`biodata`.`bgelar` AS `bgelar`,`biodata`.`dgelar` AS `dgelar`,`pekerjaan`.`nama_pekerjaan` AS `nama_pekerjaan` from (`biodata` join `pekerjaan` on((`pekerjaan`.`id_pekerjaan` = `biodata`.`id_pekerjaan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `fulldataalumni`
--
DROP TABLE IF EXISTS `fulldataalumni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fulldataalumni`  AS  select `biodata`.`id` AS `id`,`biodata`.`id_masuk` AS `id_masuk`,`biodata`.`nama` AS `nama`,`biodata`.`jk` AS `jk`,`biodata`.`nomber` AS `nomber`,`biodata`.`alamat` AS `alamat`,`biodata`.`bgelar` AS `bgelar`,`biodata`.`dgelar` AS `dgelar`,`pekerjaan`.`nama_pekerjaan` AS `nama_pekerjaan`,`intansi`.`jabatan` AS `jabatan`,`intansi`.`nama_instansi` AS `nama_instansi`,`intansi`.`fakultas` AS `fakultas`,`intansi`.`jurusan` AS `jurusan`,`intansi`.`semester` AS `semester`,`sosmed`.`line` AS `line`,`sosmed`.`facebook` AS `facebook`,`sosmed`.`instagram` AS `instagram`,`sosmed`.`twitter` AS `twitter` from (((`biodata` join `pekerjaan` on((`pekerjaan`.`id_pekerjaan` = `biodata`.`id_pekerjaan`))) join `intansi` on((`intansi`.`id` = `biodata`.`id`))) left join `sosmed` on((`sosmed`.`id` = `biodata`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fk_pekerjaan` (`id_pekerjaan`),
  ADD KEY `fk_tmasuk` (`id_masuk`);

--
-- Indeks untuk tabel `intansi`
--
ALTER TABLE `intansi`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `kategori_masukan`
--
ALTER TABLE `kategori_masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD KEY `fk_fk_kategori` (`id_masukan`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indeks untuk tabel `tahun_masuk`
--
ALTER TABLE `tahun_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `fk_fk_pekerjaan` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`),
  ADD CONSTRAINT `fk_thnmsk` FOREIGN KEY (`id_masuk`) REFERENCES `tahun_masuk` (`id_masuk`);

--
-- Ketidakleluasaan untuk tabel `intansi`
--
ALTER TABLE `intansi`
  ADD CONSTRAINT `intansi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `biodata` (`id`);

--
-- Ketidakleluasaan untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `fk_fk_kategori` FOREIGN KEY (`id_masukan`) REFERENCES `kategori_masukan` (`id_masukan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saran_ibfk_1` FOREIGN KEY (`id`) REFERENCES `biodata` (`id`);

--
-- Ketidakleluasaan untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD CONSTRAINT `sosmed_ibfk_1` FOREIGN KEY (`id`) REFERENCES `biodata` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `biodata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
