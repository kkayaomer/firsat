-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Kas 2016, 14:08:51
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `firsat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_kullanici` int(10) NOT NULL AUTO_INCREMENT,
  `kullanici_email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id_kullanici`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id_kullanici`, `kullanici_email`, `kullanici_sifre`) VALUES
(1, 'omerkaya@live.com', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alisveris_sepeti`
--

CREATE TABLE IF NOT EXISTS `alisveris_sepeti` (
  `id_ur` int(10) NOT NULL,
  `ip_addres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `miktar` int(10) NOT NULL,
  PRIMARY KEY (`id_ur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alisveris_sepeti`
--

INSERT INTO `alisveris_sepeti` (`id_ur`, `ip_addres`, `miktar`) VALUES
(6, '::1', 5),
(15, '::1', 10),
(25, '::1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id_kategori` int(100) NOT NULL AUTO_INCREMENT,
  `kategori_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id_kategori`, `kategori_baslik`) VALUES
(1, 'Leptoplar'),
(2, 'Kameralar'),
(3, 'Bilgisayarlar'),
(4, 'Telefonlar'),
(5, 'IPadler'),
(6, 'Televizyonlar'),
(7, 'Aksesuarlar'),
(12, 'yeni');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE IF NOT EXISTS `markalar` (
  `id_marka` int(100) NOT NULL AUTO_INCREMENT,
  `marka_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id_marka`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `markalar`
--

INSERT INTO `markalar` (`id_marka`, `marka_baslik`) VALUES
(1, 'HP'),
(2, 'DELL'),
(3, 'LG'),
(4, 'SAMSUNG'),
(5, 'Sony'),
(6, 'CANON'),
(7, 'NIKON'),
(8, 'BEKO'),
(9, 'VESTEL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

CREATE TABLE IF NOT EXISTS `musteri` (
  `id_musteri` int(10) NOT NULL AUTO_INCREMENT,
  `mus_ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mus_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `mus_soyadi` text COLLATE utf8_turkish_ci NOT NULL,
  `mus_email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mus_sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mus_ulke` text COLLATE utf8_turkish_ci NOT NULL,
  `mus_sehir` text COLLATE utf8_turkish_ci NOT NULL,
  `mus_adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mus_telefon` int(11) NOT NULL,
  `mus_image` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id_musteri`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=21 ;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`id_musteri`, `mus_ip`, `mus_adi`, `mus_soyadi`, `mus_email`, `mus_sifre`, `mus_ulke`, `mus_sehir`, `mus_adres`, `mus_telefon`, `mus_image`) VALUES
(1, '123', 'eqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 4, 'qwe'),
(2, '::1', 'omer', 'as', 'omerkaya@gmail.com', 'asd', 'TR', 'Adana', '', 0, 'musteri_image/mus_1.jpg'),
(11, '::1', 'omer', 'yazÄ±lÄ±m', 'omer@hotmail.com', '123456', 'TR', 'Ankara', 'ankara/sincan', 123045686, 'mus_1.jpg'),
(12, '::1', 'omer', 'kaya', 'omerkaya@gmail.com', '1230456', 'TR', 'BalÄ±kesir', 'Balikesir/bandirma', 10000, 'mus_3.jpg'),
(13, '::1', 'asd', 'as', 'omerkaya@gmail.com', '12345', 'VI', 'Amasya', 'konya', 123456, 'mus_imagemus_9.jpg'),
(14, '::1', 'emel', 'sayan', 'esayan@gmail.com', '123', 'AZ', 'Bursa', 'burasiii', 321, 'mus_imagemus_6.jpg'),
(15, '::1', 'konan', 'dk', 'kenan@gmail.com', '123', '', '', '', 123, 'musteri_image/'),
(17, '::1', 'murat', 'celik', 'muce@hotmail.com', '123', 'SY', 'Gaziantep', '', 123456, 'musteri_image/murat.jpg'),
(18, '::1', '', '', '', '', '-------', '------', '', 0, 'musteri_image/'),
(19, '::1', 'ahmet', 'ipek', 'ahm@gmail.com', '1605', 'TR', 'Amasya', 'amasya/tÃ¼rkiye', 12345, 'musteri_image/mus_3.jpg'),
(20, '::1', 'Ahmet', 'Ã§etin', 'ah@hotmail.com', '123456', 'TR', 'Adana', 'Adana/merkez', 123456, 'musteri_image/Ã§in-burcu-maymun.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `id_urun` int(100) NOT NULL AUTO_INCREMENT,
  `urun_kategori` int(100) NOT NULL,
  `urun_marka` int(100) NOT NULL,
  `urun_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_resim` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_anahtar_kelime` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id_urun`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=31 ;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id_urun`, `urun_kategori`, `urun_marka`, `urun_baslik`, `urun_fiyat`, `urun_aciklama`, `urun_resim`, `urun_anahtar_kelime`) VALUES
(9, 0, 0, 'Dell', '  1600', '<p>dellll"/&gt;"/&gt;</p>', 'DELL.jpg', 'dell'),
(16, 2, 7, 'kamera', '2000', '<p>kÄ±l&ouml;</p>', 'nikon.jpg', 'nikon'),
(18, 2, 5, 'kamera', '1500', '<p>cvcvv</p>', 'nikon.jpg', ' cdcsd'),
(19, 2, 6, 'kamera', '1300', '<p>dd</p>', 'tele.cam.png', 'dscd'),
(21, 6, 8, 'beko', '2350', '<p>vfvbf</p>', 'beko.jpg', 'beko'),
(22, 4, 5, 'yeni', '0', '<p>vg bbbbbbbbbbb</p>', 'kaan-n1-ozellikleri-ve-fiyati.jpg', 'kaan'),
(23, 5, 4, 'yeni', '10', '<p>thbny</p>', 'ipad-pro-imovie-stock-100630126-orig.jpg', 'hy'),
(26, 3, 4, 'asus', '100', '<p>tlÄ±uÄ±uÄ±Ä±Ä±Ä±Ä±yuuuuuuuuu</p>', 'asus.jpg', 'asus, yeni, kalite'),
(27, 0, 0, 'Hp', '  $350', '<p>ddvfdvf"/&gt;"/&gt;</p>', 'bayan-telefonlari.jpg', 'sony , bayan_telefon, gerÃ§ek');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
