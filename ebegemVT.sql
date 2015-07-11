-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Tem 2015, 22:01:34
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimseminerkayit`
--

CREATE TABLE IF NOT EXISTS `egitimseminerkayit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(100) NOT NULL,
  `seminerid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

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
(9, 'Mustafa Ã‡olakoÄŸlu               ', 7),
(10, 'Mustafa Ã‡olakoÄŸlu               ', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `egitimseminerleri`
--

INSERT INTO `egitimseminerleri` (`id`, `seminerAdi`, `detay`, `resim`) VALUES
(37, 'eÄŸitim semineri 1', 'dsadadad', '229061.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimseminerresimler`
--

CREATE TABLE IF NOT EXISTS `egitimseminerresimler` (
  `seminerid` int(11) NOT NULL,
  `resim1` varchar(100) NOT NULL,
  `resim2` varchar(100) NOT NULL,
  `resim3` varchar(100) NOT NULL,
  `resim4` varchar(100) NOT NULL,
  `resim5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitimseminerresimler`
--

INSERT INTO `egitimseminerresimler` (`seminerid`, `resim1`, `resim2`, `resim3`, `resim4`, `resim5`) VALUES
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '878024.jpeg', '', '', '', ''),
(29, '864648.jpeg', '', '', '', ''),
(30, '482269.jpeg', '', '', '', ''),
(31, '305197.jpeg', '882116.jpeg', '', '', ''),
(32, '', '730093.png', '', '', ''),
(33, '', '278363.png', '', '', ''),
(34, '', '', '', '', ''),
(35, '', '', '', '', ''),
(36, '310086.jpeg', '936883.jpeg', '', '', ''),
(37, '745584.png', '', '', '', '');

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

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adSoyad`, `email`, `mesaj`, `okunma`) VALUES
(1, 'dsad', 'sdada', 'dsa', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mezunbilgi`
--

CREATE TABLE IF NOT EXISTS `mezunbilgi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(100) NOT NULL,
  `calistigiYer` varchar(200) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `ePosta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `mezunbilgi`
--

INSERT INTO `mezunbilgi` (`id`, `adSoyad`, `calistigiYer`, `telefon`, `ePosta`) VALUES
(1, 'Mustafa Ã‡olakoÄŸlu', 'MEBDE', '', ''),
(2, 'Mustafa Ã‡olakoÄŸlu', 'MEBDE', 'dasda', 'dsadada');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `onkayit`
--

INSERT INTO `onkayit` (`id`, `tc`, `ad`, `soyad`, `cinsiyet`, `meslek`, `dogumYeri`, `dGun`, `dAy`, `dYil`, `ogrenimDurum`, `adres`, `ilce`, `telefon`, `email`, `okunma`) VALUES
(2, 'SDAD', 'SDA', 'ASD', 'ERKEK', 'SXASD', 'SA', 1, 1, 1930, '1', 'MCBM', 'ALACAKAYA', '153453', '4DSA', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `onkayitdigerbilgiler`
--

CREATE TABLE IF NOT EXISTS `onkayitdigerbilgiler` (
  `onkayitid` int(11) NOT NULL,
  `programid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `onkayitdigerbilgiler`
--

INSERT INTO `onkayitdigerbilgiler` (`onkayitid`, `programid`) VALUES
(2, '4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `programlar`
--

CREATE TABLE IF NOT EXISTS `programlar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `programAdi` varchar(100) NOT NULL,
  `programdetay` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `programlar`
--

INSERT INTO `programlar` (`id`, `programAdi`, `programdetay`) VALUES
(4, 'Ä°ngilizce', 'detaylar detaylar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
