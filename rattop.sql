-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jun 2016 pada 14.40
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rattop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `caps`
--

CREATE TABLE IF NOT EXISTS `caps` (
  `idcaps` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `model` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `caps`
--

INSERT INTO `caps` (`idcaps`, `nama`, `gambar`, `model`, `warna`, `harga`, `ket`) VALUES
(1, 'NEWSBOYCAPS', 'topi.jpg', 'NEWSBOYCAPS', 'Black', 175000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `helm`
--

CREATE TABLE IF NOT EXISTS `helm` (
  `idhelm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `helm`
--

INSERT INTO `helm` (`idhelm`, `nama`, `gambar`, `warna`, `model`, `harga`, `ket`) VALUES
(1, 'RB01', 'helm1.jpg', 'Flat Black', 'Bonanza', 150000, ''),
(2, 'RB02', 'helm2.jpg', 'Gloss Black', 'Bonanza', 150000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `idfav` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `ket` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `tag` char(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`idfav`, `nama`, `gambar`, `ket`, `harga`, `tag`) VALUES
(1, 'BASTARD CHOOPER MAN', 'images/tshirt1.jpg', 'Black', 125000, 'fav'),
(2, 'EXCLUSIVE BRAND LOGO', 'images/tshirt2.jpg', 'Black', 125000, 'fav'),
(3, 'LONG PANTS', 'images/longpant2.jpg', 'Dark Grey', 200000, 'fav'),
(4, 'MC SKULL VEST', 'images/vest1.jpg 	', 'Dark Blue', 350000, 'fav'),
(5, 'WORKSHIRT 	', 'images/workshirtblue.jpg', 'Dark Blue', 185000, 'fav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE IF NOT EXISTS `kredit` (
  `tanggal` date NOT NULL,
  `produktivitas` varchar(50) NOT NULL,
  `jumlah` smallint(6) NOT NULL,
  `kredit` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`tanggal`, `produktivitas`, `jumlah`, `kredit`, `saldo`) VALUES
('2016-05-01', 'Listrik', 1, 300000, 300000),
('2016-05-02', 'tshirt', 6, 750000, 1050000),
('2016-05-03', 'vest', 6, 1800000, 2850000),
('2016-05-04', 'pants', 6, 900000, 3750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motorcycle`
--

CREATE TABLE IF NOT EXISTS `motorcycle` (
  `idmotorcycle` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `ket` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motorcycle`
--

INSERT INTO `motorcycle` (`idmotorcycle`, `nama`, `gambar`, `ket`) VALUES
(1, 'KILL THE SNIPER', 'motor2.jpg', ''),
(2, 'KILL THE SNIPER', 'motor3.jpg', ''),
(3, 'KILL THE SNIPER', 'motor3.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pants`
--

CREATE TABLE IF NOT EXISTS `pants` (
  `idpants` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `model` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket` varchar(256) NOT NULL,
  `tag` char(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pants`
--

INSERT INTO `pants` (`idpants`, `nama`, `gambar`, `model`, `warna`, `bahan`, `harga`, `ket`, `tag`) VALUES
(1, 'LONG PANTS', 'longpant1.jpg', 'LongPants', 'Grey', 'Chino''s', 200000, '', ''),
(2, 'LONG PANTS', 'longpant2.jpg', 'LongPants', 'Dark Grey', 'Chino''s', 200000, '', 'fav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tshirt`
--

CREATE TABLE IF NOT EXISTS `tshirt` (
  `idtshirt` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `model` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket` varchar(256) NOT NULL,
  `tag` char(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tshirt`
--

INSERT INTO `tshirt` (`idtshirt`, `nama`, `gambar`, `model`, `warna`, `bahan`, `harga`, `ket`, `tag`) VALUES
(3, 'OLD RACER', 'tshirt3.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(6, 'RAT MACHINE DIZZY', 'tshirt6.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(22, 'RBHOTROD', 'tshirt9.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(23, 'RAT ROD BEER', 'tshirt7.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(24, 'EXCLUSIVE BRAND LOGO', 'tshirt2.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(26, 'BASTARD CHOOPER MAN', 'tshirt1.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(27, '1% 99%', 'tshirt5.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(28, 'RULE!', 'tshirt10.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(29, 'MC RED SKULL', 'tshirt4.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', ''),
(30, 'SAFETYBOOBS', 'tshirt8.jpg', 'T-Shirt', 'Black', 'Supercombat', 125000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vest`
--

CREATE TABLE IF NOT EXISTS `vest` (
  `idvest` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `model` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket` varchar(256) NOT NULL,
  `tag` char(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vest`
--

INSERT INTO `vest` (`idvest`, `nama`, `gambar`, `model`, `warna`, `bahan`, `harga`, `ket`, `tag`) VALUES
(1, 'MC SKULL VEST', 'vest1.jpg', 'Vest', 'Blue', 'Denim', 350000, '', 'fav'),
(2, 'MC SKULL VEST', 'vest2.jpg', 'Vest', 'Black', 'Denim', 350000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `workshirt`
--

CREATE TABLE IF NOT EXISTS `workshirt` (
  `idworkshirt` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `model` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket` varchar(256) NOT NULL,
  `tag` char(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `workshirt`
--

INSERT INTO `workshirt` (`idworkshirt`, `nama`, `gambar`, `model`, `warna`, `bahan`, `harga`, `ket`, `tag`) VALUES
(1, 'WORKSHIRT', '1workshirtblack.jpg', 'WorkShirt', 'Black', 'GermanDrill', 185000, '', ''),
(2, 'WORKSHIRT', 'workshirtblue.jpg', 'WorkShirt', 'DarkBlue', 'GermanDrill', 185000, '', 'fav'),
(3, 'WORKSHIRT', 'workshirtblue2.jpg', 'WorkShirt', 'DarkBlue', 'GermanDrill', 195000, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `caps`
--
ALTER TABLE `caps`
  ADD PRIMARY KEY (`idcaps`);

--
-- Indexes for table `helm`
--
ALTER TABLE `helm`
  ADD PRIMARY KEY (`idhelm`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idfav`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indexes for table `motorcycle`
--
ALTER TABLE `motorcycle`
  ADD PRIMARY KEY (`idmotorcycle`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`idpants`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`idtshirt`);

--
-- Indexes for table `vest`
--
ALTER TABLE `vest`
  ADD PRIMARY KEY (`idvest`);

--
-- Indexes for table `workshirt`
--
ALTER TABLE `workshirt`
  ADD PRIMARY KEY (`idworkshirt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `caps`
--
ALTER TABLE `caps`
  MODIFY `idcaps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `helm`
--
ALTER TABLE `helm`
  MODIFY `idhelm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `idfav` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `motorcycle`
--
ALTER TABLE `motorcycle`
  MODIFY `idmotorcycle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pants`
--
ALTER TABLE `pants`
  MODIFY `idpants` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tshirt`
--
ALTER TABLE `tshirt`
  MODIFY `idtshirt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `vest`
--
ALTER TABLE `vest`
  MODIFY `idvest` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `workshirt`
--
ALTER TABLE `workshirt`
  MODIFY `idworkshirt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
