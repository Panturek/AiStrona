-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Kwi 2019, 16:18
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `aiprojekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki`
--

CREATE TABLE `fiszki` (
  `id` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `front` text COLLATE utf8_polish_ci NOT NULL,
  `back` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `fiszki`
--

INSERT INTO `fiszki` (`id`, `ownerId`, `front`, `back`) VALUES
(1, 1, 'woda', 'das Wasser'),
(3, 1, 'chleb', 'das Brot'),
(4, 1, 'piwo', 'das Bier'),
(5, 1, 'talerz', 'der Teller'),
(6, 1, 'auto', 'das Auto'),
(7, 1, 'rower', 'das Fahrrad'),
(10, 1, 'ksiÄ…Å¼ka', 'das Buch'),
(11, 1, 'sen', 'der Traum'),
(13, 1, 'wiadro', 'der Eimer'),
(15, 1, 'fala', 'die Welle'),
(16, 1, 'las', 'der Wald'),
(17, 1, 'Konewka', 'die GiÃŸkanne'),
(18, 1, 'CzoÅ‚g', 'der Panzerkampfwagen'),
(19, 1, 'graÄ‡ na fortepianie', '(-s) Klavier spielen'),
(21, 2, 'miecz', 'das Schwert'),
(23, 2, 'Radio', 'das/der Radio'),
(25, 2, 'zapach', 'der Geruch'),
(26, 2, 'kamieÅ„', 'der Stein'),
(27, 2, 'niebo', 'das Himmel'),
(28, 2, 'zakÅ‚adnik', 'der Geisel'),
(29, 2, 'KowadÅ‚o', 'der Amboss'),
(30, 2, 'woda', 'das Wasser'),
(31, 2, 'co', 'was'),
(32, 2, 'to', 'das'),
(57, 2, 'komÃ³rka', 'das Handy'),
(58, 3, 'Card', 'karta'),
(59, 3, 'Space', 'przeszczeÅ„'),
(60, 3, 'Eagle', 'OrzeÅ‚'),
(65, 4, 'jeden', 'une'),
(66, 4, 'dwa', 'deux'),
(67, 4, 'trzy', 'trois'),
(68, 4, 'sÅ‚oÅ„ce', 'Ø´Ù…Ø³'),
(69, 4, 'polsza', 'la PoloÅ„');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `join_date` datetime NOT NULL,
  `aus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `join_date`, `aus`) VALUES
(1, 'adam', '$2y$10$kcbsrwt7Kx9SqUbpomSfpOLBWBeKWAubzTnkfFz2j0IhDmHl.QV7u', 'adam@imba.pl', '2019-04-24 15:18:53', 1),
(2, 'jean', '$2y$10$EUN7AlHMqwvSWd4WVg7q/OEFQWlnwDzk7u8ANgek20jgM3ZOI.8cu', 'jean@gmail.com', '2019-04-24 16:49:29', 1),
(3, 'jakobian', '$2y$10$cfAb9NrtlNzdo3ksOu7aX.RT9CvgxpQKkxHTAFjkhza0oTaWT1ykK', 'jakobian@gmail.com', '2019-04-28 02:33:10', 1),
(5, 'BarbaraKwarc', '$2y$10$kXym68OZ1iFBBi.G3rqrKu5ESByplPfvmHBJ8/VSEHghqZ0PlFSS.', 'bk@dm.gov.pl', '2019-04-28 14:02:01', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
