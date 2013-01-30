-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Waktu pembuatan: 30. Januari 2013 jam 17:13
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `filename`, `title`) VALUES
(11, '863f61905743b336a1f555ab6623bba6.jpg', 'dsf'),
(12, 'ff52c8c59b3f56d88cc0c005af2f2c2c.doc', 'yu'),
(14, '3261af5e6ae662ded40fb1bb2e386d96.pdf', 'pdf'),
(15, 'c1f8852e9c455fc27c0b096195898f08.pdf', 'pdf'),
(16, 'narasi.pdf', 'narasi.pdf'),
(17, '591402891Marina_Amalia_201010370311358_Modul_4.pdf', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldownload`
--

CREATE TABLE IF NOT EXISTS `tbldownload` (
  `id_download` int(5) NOT NULL AUTO_INCREMENT,
  `id_kat` int(5) NOT NULL,
  `judul_file` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `author` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `tbldownload`
--

INSERT INTO `tbldownload` (`id_download`, `id_kat`, `judul_file`, `nama_file`, `tgl_posting`, `author`) VALUES
(2, 7, 'Multiple Delete Dengan Checkbox (PHP)', '1017888225Multiple-Delete-Record-dg-checkbox.zip', '2010-09-26', 'hadiq'),
(22, 7, 'Pengenalan Logika Basic d C#', '873173204C_Sharp__Part_1_-_Pengenalan_Logika_Basic.zip', '2010-10-17', 'admin'),
(23, 10, 'Class dan Array di C#', '255647243C_Sharp__Part_2_-_Class_Dan_Array.zip', '2010-10-17', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
