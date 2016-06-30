-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Jún 30. 21:05
-- Kiszolgáló verziója: 10.1.13-MariaDB
-- PHP verzió: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `phphomework`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `phphomework_login_fails`
--

CREATE TABLE `phphomework_login_fails` (
  `ID` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Value` varchar(500) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `phphomework_users`
--

CREATE TABLE `phphomework_users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(120) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Password` varchar(150) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `phphomework_login_fails`
--
ALTER TABLE `phphomework_login_fails`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `phphomework_users`
--
ALTER TABLE `phphomework_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `phphomework_login_fails`
--
ALTER TABLE `phphomework_login_fails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT a táblához `phphomework_users`
--
ALTER TABLE `phphomework_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
