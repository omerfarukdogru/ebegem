-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 09 Tem 2015, 01:17:16
-- Sunucu sürümü: 5.5.20
-- PHP Sürümü: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ebegem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminbilgileri`
--

CREATE TABLE IF NOT EXISTS `adminbilgileri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kullaniciAdi` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  `adSoyad` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `adminbilgileri`
--

INSERT INTO `adminbilgileri` (`id`, `kullaniciAdi`, `sifre`, `adSoyad`) VALUES
(1, 'ebegem', 'ebegem123', 'Omer Faruk Dogru');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE IF NOT EXISTS `duyurular` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `duyuruBaslik` varchar(200) NOT NULL,
  `duyurudetay` text NOT NULL,
  `duyuruTarih` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `duyuruBaslik`, `duyurudetay`, `duyuruTarih`, `time`) VALUES
(1, ' dsa d', 'a dsa', '07.07.15', 1436303998);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimseminerkayit`
--

CREATE TABLE IF NOT EXISTS `egitimseminerkayit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(100) NOT NULL,
  `seminerid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `egitimseminerkayit`
--

INSERT INTO `egitimseminerkayit` (`id`, `adSoyad`, `seminerid`) VALUES
(1, 'Mustafa Ã‡olakoÄŸlu               ', 10),
(2, 'Mustafa Ã‡olakoÄŸlu               ', 10),
(3, 'Mustafa Ã‡olakoÄŸlu               ', 10),
(4, 'Mustafa Ã‡olakoÄŸlu               ', 7),
(5, 'Mustafa Ã‡olakoÄŸlu               ', 7),
(6, 'Mustafa Ã‡olakoÄŸlu               ', 7),
(7, 'Mustafa Ã‡olakoÄŸlu               ', 7),
(8, 'Mustafa Ã‡olakoÄŸlu               ', 7),
(9, 'Mustafa Ã‡olakoÄŸlu               ', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimseminerleri`
--

CREATE TABLE IF NOT EXISTS `egitimseminerleri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seminerAdi` varchar(100) NOT NULL,
  `detay` text NOT NULL,
  `resim` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `egitimseminerleri`
--

INSERT INTO `egitimseminerleri` (`id`, `seminerAdi`, `detay`, `resim`) VALUES
(7, 'seminer baÅŸlÄ±k', 'abcdef', '550686.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mesaj` text NOT NULL,
  `okunma` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mezunbilgi`
--

CREATE TABLE IF NOT EXISTS `mezunbilgi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(100) NOT NULL,
  `calistigiYer` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Tablo döküm verisi `mezunbilgi`
--

INSERT INTO `mezunbilgi` (`id`, `adSoyad`, `calistigiYer`) VALUES
(3, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(5, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(6, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(7, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(8, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(9, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(10, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(11, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(12, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(13, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(14, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(15, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(16, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(17, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(20, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(22, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(23, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(24, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(26, 'Mustafa Ã‡olakoÄŸlu', 'dsa da'),
(27, 'Mustafa Ã‡olakoÄŸlu', 'dsa da');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmenler`
--

CREATE TABLE IF NOT EXISTS `ogretmenler` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ogretmenAdi` varchar(200) NOT NULL,
  `ogretmenBilgileri` text NOT NULL,
  `ogretmenResim` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `onkayit`
--

CREATE TABLE IF NOT EXISTS `onkayit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tc` varchar(12) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `cinsiyet` varchar(7) NOT NULL,
  `meslek` varchar(100) NOT NULL,
  `dogumYeri` varchar(100) NOT NULL,
  `dGun` int(2) NOT NULL,
  `dAy` int(2) NOT NULL,
  `dYil` int(5) NOT NULL,
  `ogrenimDurum` varchar(50) NOT NULL,
  `adres` text NOT NULL,
  `ilce` varchar(100) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `okunma` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `onkayitdigerbilgiler`
--

CREATE TABLE IF NOT EXISTS `onkayitdigerbilgiler` (
  `onkayitid` int(11) NOT NULL,
  `programid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `programlar`
--

CREATE TABLE IF NOT EXISTS `programlar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `programAdi` varchar(100) NOT NULL,
  `programdetay` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `programlar`
--

INSERT INTO `programlar` (`id`, `programAdi`, `programdetay`) VALUES
(1, 'Office 2013', 'asdadad'),
(2, 'Ingilizce A1', 'aaaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
