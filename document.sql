-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Waktu pembuatan: 05. Februari 2013 jam 20:15
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `document`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kat_doc` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `kat_doc`) VALUES
(1, 'akulahhaha'),
(2, 'dia'),
(3, 'dirinya'),
(7, 'lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id_doc` int(200) NOT NULL AUTO_INCREMENT,
  `no_doc` int(200) NOT NULL,
  `judul_doc` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jenis_doc` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kat_doc` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `versi_doc` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal_doc` date NOT NULL,
  `author` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sejarah_revisi` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `document`
--

INSERT INTO `document` (`id_doc`, `no_doc`, `judul_doc`, `jenis_doc`, `kat_doc`, `versi_doc`, `tanggal_doc`, `author`, `sejarah_revisi`, `file`) VALUES
(1, 0, 'bjn', 'hbvj', 'iuo', 'iojip', '0000-00-00', 'k;l/', 'nm.,', ''),
(2, 0, 'fyikgl', 'gjhglk', 'jhvjl', 'jlk;', '0000-00-00', 'hoil', ';kjlo;j', ''),
(3, 23, 'fyikgl', 'gjhglk', 'jhvjl', 'jlk;', '0000-00-00', 'hoil', ';kjlo;j', ''),
(4, 23, 'fyikgl', 'gjhglk', 'jhvjl', 'jlk;', '1992-12-02', 'hoil', ';kjlo;j', ''),
(5, 0, 'kjl', 'nk,l', 'lkj', 'kjl', '1992-12-02', 'giuoi', 'iugoh', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `filename`, `title`) VALUES
(23, '15015-5-671127116420.doc', 'hijah'),
(20, 'narasi.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldownload`
--

CREATE TABLE IF NOT EXISTS `tbldownload` (
  `id_download` int(5) NOT NULL AUTO_INCREMENT,
  `id_kat` int(5) NOT NULL,
  `judul_file` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nomor` int(200) NOT NULL,
  `version` float NOT NULL,
  `history` varchar(255) CHARACTER SET latin1 NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tgl_posting` date NOT NULL,
  `author` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=54 ;

--
-- Dumping data untuk tabel `tbldownload`
--

INSERT INTO `tbldownload` (`id_download`, `id_kat`, `judul_file`, `nama_file`, `nomor`, `version`, `history`, `type`, `tgl_posting`, `author`) VALUES
(46, 12, 'saya', '1144813526AI-I-201010370311362.docx', 1, 1.2, 'tidak ada', 'form', '2013-02-03', 'admin'),
(53, 13, 'tes', '562203764CURICULUM_VITA1.docx', 1, 1.3, 'ada', 'form', '2013-02-04', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkategori`
--

CREATE TABLE IF NOT EXISTS `tblkategori` (
  `id_kategori` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tblkategori`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkategoridownload`
--

CREATE TABLE IF NOT EXISTS `tblkategoridownload` (
  `id_kategori_download` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kategori_download` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tblkategoridownload`
--

INSERT INTO `tblkategoridownload` (`id_kategori_download`, `nama_kategori_download`) VALUES
(13, 'bener banget'),
(12, 'oke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `username` varchar(100) NOT NULL,
  `psw` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `idlink` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbllogin`
--

INSERT INTO `tbllogin` (`username`, `psw`, `nama`, `status`, `idlink`) VALUES
('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `fax` int(15) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=219 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `jabatan`, `departemen`, `email`, `mobile`, `phone`, `fax`, `photo`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Full  Name Admin', 'administrator', 'teknikal', 'admin@gmail.com', 2147483647, 987654, 987654, ''),
(197, 'thigaa', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'tigha rahma', 'administrator2', 'teknikal', 'me@gmail.com', 2147483647, 9988776, 9988776, 'Desert.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
