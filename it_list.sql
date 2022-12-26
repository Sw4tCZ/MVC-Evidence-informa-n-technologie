-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 26. pro 2022, 09:35
-- Verze serveru: 10.4.18-MariaDB
-- Verze PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `it_list`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `it_list`
--

CREATE TABLE `it_list` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_czech_ci NOT NULL,
  `quantity` tinyint(10) NOT NULL,
  `issue` varchar(10) COLLATE utf8mb4_czech_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `it_list`
--

INSERT INTO `it_list` (`id`, `name`, `quantity`, `issue`, `date`) VALUES
(3, 'PCIe', 5, 'AleÅ¡', '2022-12-22'),
(4, 'myÅ¡ zn. DEE', 10, 'NenÃ­', '2022-12-08'),
(6, 'xy\\', 5, 'AleÅ¡', '2022-12-24'),
(7, 'MyÅ¡', 1, 'Pavel', '2022-12-02');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `it_list`
--
ALTER TABLE `it_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `quantity` (`quantity`),
  ADD KEY `issue` (`issue`),
  ADD KEY `date` (`date`),
  ADD KEY `date_2` (`date`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `it_list`
--
ALTER TABLE `it_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
