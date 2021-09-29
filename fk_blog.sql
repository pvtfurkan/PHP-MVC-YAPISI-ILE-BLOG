-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Eyl 2021, 05:28:05
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fk_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `KONU` varchar(255) NOT NULL,
  `ICERIK` varchar(255) NOT NULL,
  `TARIH` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`ID`, `KONU`, `ICERIK`, `TARIH`) VALUES
(1, 'İlk blog ', 'Bu ilk bloğumuzun içeriğidir.', 1421243965),
(2, 'İkinci blog', 'İkinci blogumuzun içeriği.', 1421243970),
(3, 'Bu yeni bir blog', 'Bu blog sayfamızının form alanından yazılan ilk blogdur.', 1632879667),
(4, 'Form alanından yazılan ikinci blog', 'Form alanından ikinci bir blogun i&ccedil;eriği budur.', 1632879749),
(5, 'Tırnak işareti kullanımı testi', 'Bu blog tırnak işaretini kullanım i&ccedil;in yolladığımız sayıca 3&#039;&uuml;nc&uuml; blogdur.', 1632880042);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
