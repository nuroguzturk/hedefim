-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Tem 2017, 17:37:52
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hedefim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cities`
--

CREATE TABLE `cities` (
  `CityId` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `cities`
--

INSERT INTO `cities` (`CityId`, `CityName`) VALUES
(1, 'İstanbul'),
(2, 'Ankara'),
(3, 'İzmir'),
(4, 'Bursa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tasks`
--

CREATE TABLE `tasks` (
  `TaskId` int(11) NOT NULL,
  `TaskName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tasks`
--

INSERT INTO `tasks` (`TaskId`, `TaskName`) VALUES
(1, 'ögrenci'),
(2, 'ögretmen'),
(3, 'yönetici'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserTC` varchar(11) NOT NULL,
  `UserImage` varchar(225) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `UserSurname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Telephone` varchar(11) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `CityId` varchar(11) NOT NULL,
  `DateofBirth` date NOT NULL,
  `TaskId` varchar(11) NOT NULL,
  `RecorderId` varchar(11) NOT NULL,
  `DateofRecord` date NOT NULL,
  `IsAccept` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `UserTC`, `UserImage`, `UserName`, `UserSurname`, `Email`, `Password`, `Telephone`, `Gender`, `CityId`, `DateofBirth`, `TaskId`, `RecorderId`, `DateofRecord`, `IsAccept`) VALUES
(4, '18584565628', '462.jpg', 'Nazım', 'Şiraz', 'nazimsiraz@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '53538745287', 'E', '1', '1977-06-14', '4', '4', '2017-06-11', 'E'),
(5, '18587015689', '462.jpg', 'Ahmet', 'Şiraz', 'nazimsiraz@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '53538745287', 'E', '1', '1977-06-14', '4', '4', '2017-06-11', 'E');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`CityId`);

--
-- Tablo için indeksler `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`TaskId`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cities`
--
ALTER TABLE `cities`
  MODIFY `CityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `tasks`
--
ALTER TABLE `tasks`
  MODIFY `TaskId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
