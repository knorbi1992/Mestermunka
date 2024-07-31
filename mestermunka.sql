-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2024. Júl 18. 15:37
-- Kiszolgáló verziója: 8.0.31
-- PHP verzió: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `mestermunka`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `idopont`
--

CREATE TABLE `idopont` (
  `id` int NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `note` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `idopont`
--

INSERT INTO `idopont` (`id`, `user`, `date`, `time`, `note`) VALUES
(1, '9', '2024-07-16', '00:00:00', '16:00 szeretnék új körmöt'),
(2, '10', '2024-07-25', '00:00:00', 'Benőtt köröm 17:00'),
(4, '13', '2024-07-18', '00:00:00', '12'),
(5, '13', '2024-07-19', '00:00:00', '17'),
(6, '13', '2024-07-18', '00:00:00', '20'),
(7, '0', '2024-07-18', '00:00:00', '14'),
(8, 'Nagy Noemi', '2024-07-18', '00:00:00', '20'),
(9, 'Nagy Noemi', '2024-07-18', '00:00:00', '16:00 szeretnék egy komplett köröm építést'),
(12, 'Nagy Noemi', '2024-07-17', '00:00:00', '20'),
(15, 'Nagy Noemi', '2024-07-17', '00:00:00', '14:25 GÉLLAK'),
(16, 'Kiss Béla', '2024-07-18', '00:00:00', '20:00 láb'),
(17, '9', '2024-07-19', '20:25:00', 'Géllak'),
(18, 'Nagy Noemi', '2024-07-19', '10:30:00', 'Pedikür'),
(19, 'Ambrus Ilona', '2024-07-22', '17:00:00', 'Körömfestést szerenék'),
(20, 'Bellák Ádám', '2024-07-19', '13:30:00', 'Szeretném ha rám néznél'),
(21, 'Szanka Katalin', '2024-07-17', '11:00:00', 'Ha lesz időd rám, megcsinálhatnád a körmöm'),
(22, 'Nagy Noemi', '2024-07-18', '14:45:00', 'Új körmöket szeretnék');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(9, 'nagynoemi', '698d51a19d8a121ce581499d7b701668', 'Nagy Noemi'),
(10, 'kissbela', '81dc9bdb52d04dc20036dbd8313ed055', 'Kiss Béla'),
(11, 'kjani', '202cb962ac59075b964b07152d234b70', 'Kálmán János'),
(12, 'kimi', '202cb962ac59075b964b07152d234b70', 'Kiss Imre'),
(13, 'bellakadi', '202cb962ac59075b964b07152d234b70', 'Bellák Ádám'),
(14, 'ailona', '202cb962ac59075b964b07152d234b70', 'Ambrus Ilona'),
(15, 'kati0604', '202cb962ac59075b964b07152d234b70', 'Szanka Katalin');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `idopont`
--
ALTER TABLE `idopont`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `idopont`
--
ALTER TABLE `idopont`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
