-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2017, 22:10:17
-- Sunucu sürümü: 5.7.11
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bitirme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullaniciid` int(11) NOT NULL,
  `adSoyad` text COLLATE utf8_turkish_ci,
  `kullaniciAdi` text COLLATE utf8_turkish_ci,
  `parola` text COLLATE utf8_turkish_ci,
  `telefon1` text COLLATE utf8_turkish_ci,
  `telefon2` text COLLATE utf8_turkish_ci,
  `cihazId` int(11) DEFAULT NULL,
  `konumLat` double DEFAULT NULL,
  `konumLng` double DEFAULT NULL,
  `adres` text COLLATE utf8_turkish_ci,
  `adresTarifi` text COLLATE utf8_turkish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullaniciid`, `adSoyad`, `kullaniciAdi`, `parola`, `telefon1`, `telefon2`, `cihazId`, `konumLat`, `konumLng`, `adres`, `adresTarifi`) VALUES
(1, 'Bekir Bedir', 'bekirbed', '123', '132', '123', 1, 56.56, 465.5498, 'jskhdf', 'sjhdjks'),
(2, 'Mehmet Demir', 'mdmd', '123', '123', '123', 2, 45.487, 43.45, 'sdfsd', 'sdfsd'),
(3, 'Burçin Tüfekçi', 'burcintfk', '123', '546', '789', 4, 45.7, 47.7, 'sdfsd', 'sdfsdg'),
(4, 'Bekir Bedir', 'bekirbed', 'bekirParo', '5051266678', '50124559', 1, 40.6739622, 30.3385167, 'Sakarya Serdivan', 'Sakarya');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullaniciid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullaniciid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
