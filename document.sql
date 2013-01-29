-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Waktu pembuatan: 29. Januari 2013 jam 11:42
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `kat_doc`) VALUES
(1, 'akulah'),
(2, 'dia'),
(3, 'dirinya'),
(4, 'yu');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `files`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
