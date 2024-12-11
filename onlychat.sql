-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2024 pada 00.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlychat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id`, `username`, `message`) VALUES
(1, 'ular56594', 'asbfadf'),
(2, 'siput87380', 'chat'),
(3, 'ular56594', 'gdkFdksf'),
(4, 'ular56594', 'HWGQQHFRG'),
(5, 'siput87380', 'mmmqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(6, 'ular56594', 'YANG MAU NGECHAT'),
(7, 'ular56594', 'cepaaat'),
(8, 'katak71301', 'Halo'),
(9, 'ular56594', 'juujuurr'),
(10, 'ular56594', 'babadblafad'),
(11, 'ular56594', ''),
(12, 'ular56594', 'agfdavfiadk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `id`, `password`, `profile`, `token`) VALUES
('egaganteng31724', 1, '$2y$10$U24v5RuWx2yGEuaEtaBm2O9OHc/XBAUIZfxgvTb26bnnztJS/J5rW', 'ayam.jpg', 'ZWdhZ2FudGVuZzMxNzI0MTczMjA3MDcwMg=='),
('siput93028', 2, '$2y$10$1BKus9qGlYrPYmjz7a1D0u.kWDrh859IUT7wkBsW5RNPaXHsR4BNm', 'siput.jpg', 'c2lwdXQ5MzAyODE3MzIwNzA3MDI='),
('egaganteng43952', 3, '$2y$10$PewCd51w7djgAYrABzTGfuMajCMWfYEv4LYLfmt0w7n5xqTj4nadq', 'ayam.jpg', 'ZWdhZ2FudGVuZzQzOTUyMTczMjA3MDc0NA=='),
('siput50257', 4, '$2y$10$e2YOV54pYAQ.T.SJTWN1m.YPg/CfiOF4A0q.RIRH/2OPFly3nC2SC', 'siput.jpg', 'c2lwdXQ1MDI1NzE3MzIwNzA3NDQ='),
('egaganteng43312', 5, '$2y$10$FiXcE6UrTElFmmfz/Y6fH.OjzUqJ3elcLGwPNUDofZfzpCbWWSGZW', 'ayam.jpg', 'ZWdhZ2FudGVuZzQzMzEyMTczMjA3MDkwNg=='),
('ular75863', 6, '$2y$10$D7CajAyj2UYZLR1NZ.kbvOZhCtjZujt8zdfbU1CRHxngvngKIgiS.', 'ular.jpg', 'dWxhcjc1ODYzMTczMjA3MDkwNg=='),
('egaganteng57040', 7, '$2y$10$y.Qi3aZCEM9tqWjO9Azt7OAegIQO..ZxWUjCieXU/Wzw589QGWb3C', 'ayam.jpg', 'ZWdhZ2FudGVuZzU3MDQwMTczMjA4NDM3Mg=='),
('ular14598', 8, '$2y$10$4jnAihC5bf3M8xINkKU0mO6ZRu00o1JNRrQlibofqG/GC4K0po6Om', 'ular.jpg', 'dWxhcjE0NTk4MTczMjA4NDM3Mg=='),
('egaganteng10927', 9, '$2y$10$GrTl6hPtvu40vNRcUaDC6uNj712/Qe/6EgkgYX8GV9AHQS3OFnyJm', 'ayam.jpg', 'ZWdhZ2FudGVuZzEwOTI3MTczMjEwNTk2Mw=='),
('katak20797', 10, '$2y$10$5XVV./bJNGpJ7PVvH9mcK.sTHMmnxFNuZTbqd7D7qZkiOaNT0R1Je', 'katak.jpg', 'a2F0YWsyMDc5NzE3MzIxMDU5NjM='),
('egaganteng12640', 11, '$2y$10$Qt4KKTWCGv3QjR627FNs7O9wwJnxRqF5jTAnUdlXaIdFsbMIlXehG', 'ayam.jpg', 'ZWdhZ2FudGVuZzEyNjQwMTczMjEwNjkxNw=='),
('ular24458', 12, '$2y$10$4LuLqPGyMviBdO/nHjFdmu8b01eFmWJGt2IdVyMm7KLAXoEtxUtra', 'ular.jpg', 'dWxhcjI0NDU4MTczMjEwNjkxNw=='),
('egaganteng33848', 13, '$2y$10$EP5iAhdb3zZwNJ64Mw5Amun/di5VQlKiqaNUL5UJvWSlrd8qakM2y', 'ayam.jpg', 'ZWdhZ2FudGVuZzMzODQ4MTczMjEwODIwNQ=='),
('ular75954', 14, '$2y$10$SahwQA.ei8Yl6J1P1BHR..GknsSef/Gc9o7fq84aT8TdjpiV9Cw7.', 'ular.jpg', 'dWxhcjc1OTU0MTczMjEwODIwNg=='),
('egaganteng40316', 15, '$2y$10$DiwWNGZGEsUCSHWzDRyGee2JDjNSsgchMsmq7cVV8cFzhL5tkurNm', 'ayam.jpg', 'ZWdhZ2FudGVuZzQwMzE2MTczMjE0NzE2OQ=='),
('ular56973', 16, '$2y$10$n/d7WWyr55pdOYWqEl3hcORHbeMRk7cqfLMcFbYPAOQ.eVzMwPGnO', 'ular.jpg', 'dWxhcjU2OTczMTczMjE0NzE2OQ=='),
('egaganteng60332', 17, '$2y$10$0gu..LkMcGYj/hPjyUb.5OY2vJhvsUB5Wuw7y2IweiU0FayuH5ygu', 'ayam.jpg', 'ZWdhZ2FudGVuZzYwMzMyMTczMjE1MjI3MA=='),
('siput13955', 18, '$2y$10$jOvGj5LFU6BBozQ/aRFPNugJrPVdym/GuEYY5rtleWucEEgd/0KWK', 'siput.jpg', 'c2lwdXQxMzk1NTE3MzIxNTIyNzA='),
('egaganteng86823', 19, '$2y$10$1V94Y.idYA4KoYVgZWTki.rceqIfvDSkrPs3PKWnYkWdS1KC.KB56', 'ayam.jpg', 'ZWdhZ2FudGVuZzg2ODIzMTczMjE1NTM4MQ=='),
('katak96554', 20, '$2y$10$kO6qvGY4y2hcRakxXpCCzeUXMntyHTrWrtTwlR/48hlTOQRJih8ee', 'katak.jpg', 'a2F0YWs5NjU1NDE3MzIxNTUzODE='),
('egaganteng89470', 21, '$2y$10$dlk7.0DJUDj.gFy.YJbMn.SUlnIIeNhzOk3rzTycPIi6HSIkjIBm6', 'ayam.jpg', 'ZWdhZ2FudGVuZzg5NDcwMTczMjE2MTYzMA=='),
('ular64772', 22, '$2y$10$a6VulzntytHrh2RT3PMSourFUYby5C8baBTmJNw.a7bcwXmquQvo.', 'ular.jpg', 'dWxhcjY0NzcyMTczMjE2MTYzMA=='),
('egaganteng22628', 23, '$2y$10$mmwpn.vbvwec5RIyCJwGP.7.KAOiDv4uRSzOAf59SJtimna/NDTj6', 'ayam.jpg', 'ZWdhZ2FudGVuZzIyNjI4MTczMjE2MTcwNg=='),
('katak56242', 24, '$2y$10$BjdkBUjilzRp8uFPAFBvuuo8GogUZ7eoIE43K4VDlcz4EVeGqfRCa', 'katak.jpg', 'a2F0YWs1NjI0MjE3MzIxNjE3MDY='),
('egaganteng13482', 25, '$2y$10$07qs5VW4a7ajJHAs9R.emeCCwCGbmSVbgwMBheDL5CAqqfakWeezS', 'ayam.jpg', 'ZWdhZ2FudGVuZzEzNDgyMTczMjc1NTEyOQ=='),
('ular36896', 26, '$2y$10$m4f14/s.EjFWvKbGMOrW4.SYmICazedDwx003jhWUQrZ9CXy32cLe', 'ular.jpg', 'dWxhcjM2ODk2MTczMjc1NTEyOQ=='),
('egaganteng31321', 27, '$2y$10$dteD6DD/hNTg8B7FKIJMdesgpXmX9W81z5NS3XUBnmVQZAfzB9M5q', 'ayam.jpg', 'ZWdhZ2FudGVuZzMxMzIxMTczMjc1NTc2Mw=='),
('ular56594', 28, '$2y$10$sIazEStdN.mCQECxciI1TupnvAKrGu/AGS2d7iX7aRhB3E5af1b8m', 'ular.jpg', 'dWxhcjU2NTk0MTczMjc1NTc2Mw=='),
('egaganteng87537', 29, '$2y$10$YUGUHC80wM6grPQLJSyGIOo5NOpwdEfTwTBseSgNRiIsW2c64hJTm', 'ayam.jpg', 'ZWdhZ2FudGVuZzg3NTM3MTczMjc1ODY3OA=='),
('siput48532', 30, '$2y$10$RckmFUAKBfsGyRaBVtSVM./YxQZBuQW4uGrfV4MRvgWeWzekfT01G', 'siput.jpg', 'c2lwdXQ0ODUzMjE3MzI3NTg2Nzg='),
('egaganteng55108', 31, '$2y$10$e2NZNw/Kz..99dfg6evYReLKj/LoUvqZYaGPyw1w6RUcccIh28tpi', 'ayam.jpg', 'ZWdhZ2FudGVuZzU1MTA4MTczMjc2MTY1MQ=='),
('siput87380', 32, '$2y$10$JzozwVaxP/uL3/5Map0N9ufT7l35aOYCQdCH5sSnzH2hWyhG8.mbi', 'siput.jpg', 'c2lwdXQ4NzM4MDE3MzI3NjE2NTE='),
('egaganteng49555', 33, '$2y$10$rMvXjYljJJ9upLdlX66TgehZdY6tPi3W83Hhs4GxUOVSGX1pCCKOW', 'ayam.jpg', 'ZWdhZ2FudGVuZzQ5NTU1MTczMjc2MTk4Nw=='),
('katak71301', 34, '$2y$10$7z3eZOKDviAWBZ9Jy2gWbuspKwyvBjTDPcLM7lkzhyIvJ4Xi50tGW', 'katak.jpg', 'a2F0YWs3MTMwMTE3MzI3NjE5ODc=');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
