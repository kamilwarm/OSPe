-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Lip 2018, 15:16
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `users`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `events`
--

CREATE TABLE `events` (
  `id_calendar` int(255) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `title` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `events`
--

INSERT INTO `events` (`id_calendar`, `date`, `id`, `status`, `title`) VALUES
(68, '2018-01-22', 17, 1, 'dyzur'),
(69, '2018-04-22', 17, 1, 'dyzur'),
(70, '2017-12-24', 17, 1, 'dyzur'),
(71, '2018-06-28', 17, 1, 'dyzur'),
(72, '2018-06-29', 17, 1, 'dyzur'),
(73, '2018-06-22', 17, 1, 'dyzur'),
(74, '2018-06-24', 17, 1, 'dyzur'),
(75, '2018-06-25', 17, 1, 'dyzur'),
(76, '2018-06-28', 32, 1, 'dyzur'),
(77, '2018-06-29', 32, 1, 'dyzur');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rights` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health` date NOT NULL,
  `firefighter` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `rights`, `admin`, `last_name`, `login`, `health`, `firefighter`) VALUES
(1, 'kamil', '$2y$10$LiLrfStQ7AkeBM6VHRIm1ev/Uy6C.o7sqwDUGz81kMu3xf9Y8Oqxu', 0, 1, 'warmuszok', 'kwarmuszok', '2018-07-01', 1),
(16, 'testy', '$2y$10$KJv.a0T53hXQbYTrMHTi..JP8Cn2OucmU01EWNTsWRFEldPrOL6SW', 0, 0, 'testy', 'testy', '2018-07-09', 0),
(17, 'zaq', '$2y$10$bvK1Z0WAxFZ1ggMYsaGep.pZuAG9JxmXrlaJ0ENhQ6zgb19tubCoy', 0, 0, 'zaq', 'zaq', '2018-07-16', 0),
(30, 'l;', '$2y$10$WpeFjCHR4oLga3e1BXFdWOHaiwMTCmFZyoFMN4MQcG9ONxjmSUy9C', 0, 0, '', '', '0000-00-00', 1),
(31, '', '$2y$10$3eG0TJwKPIN31ODb5LQMsOYQAQLqAiGm3xHfpYgXXNbUm7UeCWoD.', 0, 0, '', '', '0000-00-00', NULL),
(32, 'testowy', '$2y$10$SJjruSE6bFw.Eo7wi7hhtutL0Ry/e/9oldKbDdrZrvfpjMRTvfbd6', 0, 0, 'testowy', 'testowy', '2018-07-22', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_calendar`) USING BTREE,
  ADD KEY `numer` (`id_calendar`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `events`
--
ALTER TABLE `events`
  MODIFY `id_calendar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
