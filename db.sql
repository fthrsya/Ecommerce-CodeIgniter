-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 01 Mar 2019, 16:52:55
-- Sunucu sürümü: 5.5.58-cll
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bassecim_eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yetki` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Id`, `adsoy`, `email`, `sifre`, `durum`, `resim`, `yetki`) VALUES
(1, 'Fatih', 'fatih@hotmail.com', '123', 'aktif', 'barak.jpg', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpserver` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT NULL,
  `smtpemail` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hakkimizda` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `iletisim` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instegram` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pinterest` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL,
  `parent_id` int(50) DEFAULT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `parent_id`, `adi`, `description`, `keywords`, `resim`, `durum`, `tarih`) VALUES
(1, 0, 'Ders Kitaplari', 'asd', 'asd', NULL, NULL, '2018-01-14 12:45:31'),
(2, 0, 'Tarih Kitaplari', NULL, NULL, NULL, NULL, '2017-12-16 15:16:49'),
(3, 0, 'Edebi Kitaplar', NULL, NULL, NULL, NULL, '2017-12-16 15:17:35'),
(4, 1, 'Biyoloji', NULL, NULL, NULL, NULL, '2017-12-16 15:17:56'),
(5, 1, 'Matematik', NULL, NULL, NULL, NULL, '2017-12-16 15:18:20'),
(6, 2, 'Eski tarih', NULL, NULL, NULL, NULL, '2017-12-16 15:17:56'),
(7, 3, 'Yeni edebi', NULL, NULL, NULL, NULL, '2017-12-16 15:18:20'),
(8, 4, 'Evrimsel biyoloji', NULL, NULL, NULL, NULL, '2017-12-16 15:17:56'),
(9, 5, 'Turev integral', NULL, NULL, NULL, NULL, '2017-12-16 15:18:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT 'Yeni',
  `IP` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `konu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adminnotu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  `urun_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `tarih` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `Id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` int(11) NOT NULL,
  `tutar` int(255) DEFAULT NULL,
  `odemesekli` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Kredi Kartı',
  `odemedurumu` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Ödendi',
  `siparisdurumu` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'Yeni',
  `adres` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ilce` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `sehir` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tel` int(255) DEFAULT NULL,
  `adsoy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `kargo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`Id`, `musteri_id`, `tarih`, `IP`, `tutar`, `odemesekli`, `odemedurumu`, `siparisdurumu`, `adres`, `ilce`, `sehir`, `tel`, `adsoy`, `kargo`, `aciklama`) VALUES
(1, 2, '2019-01-30 20:22:51', 85110, 37, 'Kredi Kartı', 'Ödendi', 'Yeni', '', NULL, '', NULL, 'Mehmet Aga', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  `siparis_id` int(11) DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `adet` int(11) DEFAULT NULL,
  `fiyat` int(11) DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tutar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`Id`, `musteri_id`, `siparis_id`, `urun_id`, `adet`, `fiyat`, `tarih`, `adi`, `tutar`) VALUES
(1, 2, 1, 1, 1, 37, '2019-01-30 20:22:51', '1914-Oncesi-Ermeni-Koy-Hayati', 37);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kodu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `turu` int(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `afiyat` float DEFAULT NULL,
  `sfiyat` float DEFAULT NULL,
  `stok` int(255) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` mediumtext COLLATE utf8_turkish_ci,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bannerresim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `grubu` varchar(100) COLLATE utf8_turkish_ci DEFAULT 'yeni',
  `marka` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`Id`, `adi`, `kodu`, `turu`, `kategori`, `afiyat`, `sfiyat`, `stok`, `description`, `keywords`, `aciklama`, `durum`, `tarih`, `resim`, `bannerresim`, `grubu`, `marka`) VALUES
(1, '1914-Oncesi-Ermeni-Koy-Hayati', '2', 45, 3, 12, 37, 8, 'Ermeni koy hayatı', 'ermeni,köyihayat', '<p>g&uuml;zel bir kitap</p>\r\n', 'aktif', '2017-12-03 21:00:00', '1914-Oncesi-Ermeni-Koy-Hayati_1479741409_1000x1000.jpg', '4.jpg', 'indirim', '1. kalite'),
(2, 'Amerika-dan-Bitlis-e-William-Saroyan', '2', 3, 2, 14, 78, 10, 'amerikadan bitlise', 'amerika,bitlis,william,saroyan', '<p>asd</p>\r\n', 'aktif', '2017-12-16 12:11:39', 'Amerika-dan-Bitlis-e-William-Saroyan_1479739712_1000x1000.jpg', '8.jpg', 'kampanya', '2.kalite'),
(3, '1909-Adana-Katliami-Uc-Rapor', '2', 45, 1, 30, 10, 15, 'adana katliamı', 'anadana,katliam,uc,rapor', '<p>G&uuml;zel bir yazarın yazdıgı kitap</p>\r\n', 'aktif', '2017-12-03 21:00:00', '1909-Adana-Katliami-Uc-Rapor_1423227948_1000x1000.jpg', '3.jpg', 'indirim', '2.kalite'),
(4, 'Ananun-Yeraz_1479887932', '2', 3, 3, 25, 78, 11, 'ananun yeraz hikayesi', 'ananun,yeraz', '<p>asd</p>\r\n', 'aktif', '2017-12-16 12:11:39', 'Ananun-Yeraz_1479887932_1000x1000.jpg', '9.jpg', 'kampanya', '2.kalite'),
(5, '19 Ocak Öncesine Dönmek İstiyorum!', '2', 45, 2, 15, 45, 8, 'Ocak oncesine donmek istiyorum', 'ocak,oncesine,donmek', '<p>&uuml;nl&uuml; yazarın yazdıgı kitap</p>\r\n', 'aktif', '2017-12-03 21:00:00', '19-Ocak-Oncesine-Donmek-Istiyorum_1479739907_1000x10001.jpg', '2.jpg', 'indirim', '1.kalite'),
(6, 'Ancak-Colde-Yasayabilirler', '2', 3, 1, 14, 100, 9, 'ancak colde yasayabilirler', 'cöl,yaşamak,ancak', '<p>asd</p>\r\n', 'aktif', '2017-12-16 12:11:39', 'Ancak-Colde-Yasayabilirler_1479281339_1000x1000.jpg', '10.jpg', 'kampanya', '1.kalite'),
(7, 'Adim-Agop-Memleketim-Tokat', '2', 45, 2, 25, 43, 7, 'adim agop memleketim tokat', 'adım,agop,memleket,tokat', '<p>asdasd</p>\r\n', 'aktif', '2017-12-03 21:00:00', 'Adim-Agop-Memleketim-Tokat_1500884510_1000x1000.jpg', '5.jpg', 'indirim', '2.kalite'),
(8, 'Ankara-Vukuati', '2', 3, 4, 36, 78, 88, 'ankara vukuatı', 'ankara,vukuat', '<p>asd</p>\r\n', 'aktif', '2017-12-16 12:11:39', 'Ankara-Vukuati_1502104213_1000x1000.jpg', '1.jpg', 'kampanya', '1.kalite'),
(9, 'Ahim-Var-Diyarbakir', '2', 45, 5, 15, 26, 89, 'ahım vvar dıyarbakır', 'ah,var,dıyarbakır', '<p>asdasd</p>\r\n', 'aktif', '2017-12-03 21:00:00', 'Ahim-Var-Diyarbakir_1509700468_1000x1000.jpg', '6.jpg', 'indirim', '1.kalite'),
(11, 'Aktor-Dedigin-Nedir-ki', '2', 45, 5, 15, 26, 75, 'aktor dedigin', 'aktor,sinema', '<p>G&uuml;szsel sanırım kitap</p>\r\n', 'aktif', '2017-12-03 21:00:00', 'Aktor-Dedigin-Nedir-ki_1507281707_1000x1000.jpg', '7.jpg', 'indirim', '2.kalite');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler_resim`
--

CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `resim` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunler_resim`
--

INSERT INTO `urunler_resim` (`Id`, `urun_id`, `resim`) VALUES
(13, 5, '21.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `sifre` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `yetki` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`Id`, `adsoy`, `email`, `sifre`, `durum`, `resim`, `yetki`, `tarih`, `sehir`, `tel`, `adres`) VALUES
(1, 'fatih', 'fat@hotmail.com', '123123', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Mehmet Aga', 'mehmetaga@hotmail.com', '123123', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yorum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT 'Yeni',
  `IP` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `urunid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler_resim`
--
ALTER TABLE `urunler_resim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `urunler_resim`
--
ALTER TABLE `urunler_resim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
