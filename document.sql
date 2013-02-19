-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Waktu pembuatan: 19. Februari 2013 jam 12:05
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
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `permalink` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `permalink`, `description`) VALUES
(17, 'TRT-SOP-01', 'TRT-SOP-01', 'apa'),
(18, 'TRT-SOP-02', 'TRT-SOP-02', 'proposal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kat_doc` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `kat_doc`) VALUES
(1, 'akulahhaha'),
(12, 'TRT-SOP-01 Pembuatan technical proposal'),
(13, ' TRT-SOP-02 Planning'),
(14, ' TRT-SOP-02 Development'),
(15, 'TRT-SOP-02 Deployment');

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
-- Struktur dari tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nomor` int(100) NOT NULL,
  `version` float NOT NULL,
  `history` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `categories_id` int(5) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `nomor`, `version`, `history`, `type`, `categories_id`, `status`, `users_id`, `created`, `modified`) VALUES
(87, 'test5 ku', 'Proposal_PKN_-_Copy2.doc', 2, 1.1, 'test 5', 'form', 17, 1, 0, '2013-02-18 20:31:45', '0000-00-00 00:00:00'),
(88, 'test 2', 'Proposal_PKN.doc', 3, 1.1, 'test aja', 'form', 18, 1, 0, '2013-02-18 20:32:21', '0000-00-00 00:00:00'),
(89, 'proposal akhir', 'Coba.doc', 89, 1, 'apa', 'form', 17, 1, 0, '2013-02-18 22:00:05', '0000-00-00 00:00:00'),
(90, 'yu', '6.doc', 9, 1, 'kujgujguj', 'form', 17, 1, 0, '2013-02-19 11:39:27', '0000-00-00 00:00:00'),
(91, 'laporan', '61.doc', 8, 1, 'apa', 'instruksi kerja', 18, 0, 0, '2013-02-19 11:49:09', '0000-00-00 00:00:00'),
(92, 'yayay', '2006-1-20001-IF_Bab_2.pdf', 76, 1, 'hahaha', 'prosedur', 17, 0, 0, '2013-02-19 12:03:29', '0000-00-00 00:00:00'),
(93, 'lknjl', 'ANGGIL_F1.docx', 98, 1, 'lhb;h', 'prosedur', 17, 0, 0, '2013-02-19 12:03:56', '0000-00-00 00:00:00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=63 ;

--
-- Dumping data untuk tabel `tbldownload`
--

INSERT INTO `tbldownload` (`id_download`, `id_kat`, `judul_file`, `nama_file`, `nomor`, `version`, `history`, `type`, `tgl_posting`, `author`) VALUES
(62, 14, 'apa', 'Beasiswa_Mandiri_2012.docx', 12, 1, '-', 'form', '2013-02-11', ''),
(61, 14, 'ini dokumen', '6.doc', 2, 1, '-', 'type', '2013-02-06', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tblkategoridownload`
--

INSERT INTO `tblkategoridownload` (`id_kategori_download`, `nama_kategori_download`) VALUES
(13, 'bener banget'),
(12, 'oke'),
(14, 'Data');

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
  `level` tinyint(1) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=254 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `level`, `username`, `password`, `nama_lengkap`, `jabatan`, `departemen`, `email`, `mobile`, `phone`, `fax`, `photo`) VALUES
(1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'administrator', 'teknikal', 'admin@gmail.com', 2147483647, 987654, 987654, './uploads/rambut_berkaki17.jpg'),
(219, 1, 'june', '2914e641c030e534f0c58874b0f602c7', 'Yuni Ma''rifah', 'Staff', 'teknikal', 'june_aqj69@rocketmail.com', 7987987, 79798, 87797, './uploads/unyu.JPG'),
(228, 2, 'mr', 'e10adc3949ba59abbe56e057f20f883e', 'mr', 'kjlbnlk', 'nklnl', 'ju@gmail.com', 567890, 3456789, 56789, ''),
(229, 3, 'cto', 'e10adc3949ba59abbe56e057f20f883e', 'cto', 'kjbl', 'hfgdhgjj', 'ju@gmail.com', 4567890, 56789, 456778, ''),
(230, 4, 'vp', 'e10adc3949ba59abbe56e057f20f883e', 'vp', 'ljhnlk', 'nmkblj', 'ju@gmail.com', 34567, 45678, 45678, ''),
(231, 5, 'staff', 'e10adc3949ba59abbe56e057f20f883e', 'staff', 'nlknl', 'jokjp', 'ju@gmail.com', 456789, 45678, 2345678, ''),
(232, 3, 'junee', 'e10adc3949ba59abbe56e057f20f883e', 'juneeeee', 'nln', 'jpjp', 'ju_aqj69@yahoo.com', 568, 6789, 789, './uploads/bbdiplaypixx3.jpg'),
(236, 1, 'hjbhbbhb', '5c173b601be14c6210b3115f8e7a6bf3', 'yuhuuuu', 'yvyv', 'ygvyv', 'yvyv@mial.com', 1234567890, 7676665, 1234456, './uploads/user-icon.jpg'),
(246, 2, 'nklxidjn.lk', 'db293f6c2e873c6664088e2ccdd4368d', 'jjjjjjj', 'hjknhckjh', 'gjugbk.bh', 'jj@yahoo.com', 2147483647, 23456789, 23456789, './uploads/Untitled-1.jpg'),
(247, 3, 'jnjnjjjjkkjn', '4b2516263befc4a01472e44199b28bc8', 'jknjnjnjnjnjk', 'jknjknjknjk', 'jknjknjk', 'jknjk@mail.com', 2147483647, 998899, 998899, './uploads/user-icon.ico'),
(249, 3, 'iniii', 'cbeb2760751ea8557d9072fcbabb38b4', 'iniiiiin', 'iniiiin', 'iniiiiiin', 'ini@mail.com', 2147483647, 999999, 999999, './uploads/user-icon.ico'),
(250, 3, 'ugugfujgu', 'ddfd6de85f19d9e596e6cd338e097d9e', 'jhvyjvyjhv', 'kjvgkhjvjkh', 'jvjhvjh', 'jhv@mail.com', 2147483647, 877889, 889988, './uploads/unyu.JPG'),
(251, 3, 'kyfytfcthyf', '3d96a914f8ad96553681144189cd28b9', 'ctycdytc', 'khvfyuftyu', 'hjyvfyjhfvjh', 'apa@ya.com', 2147483647, 889988, 889988, './uploads/Desert2.jpg'),
(252, 4, 'juju', 'b444852db3f4260964ecc53dbe6d0d9e', 'yuyuyuyuyujuujujuj', 'gkjhlgl', 'jflkjgosd', 'yvyv@mial.com', 2147483647, 2147483647, 2147483647, ''),
(253, 2, 'inininin', 'e807f1fcf82d132f9bb018ca6738a19f', 'kbhkjhfdsk', 'lkjnaosnvu', 'jsvludf jkdslj', 'yuni@gmail.com', 2147483647, 2147483647, 2147483647, './uploads/user-icon.ico');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
