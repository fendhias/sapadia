-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2017 pada 15.06
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapadia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_anggota` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama_anggota`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `bio`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'jook', '2017-03-06', 'L', '3453467536', '', NULL, '2017-03-18 17:00:00', '2017-03-18 17:00:00'),
(2, 'jookoo', '2017-03-06', 'L', '3453467536', '', NULL, '2017-03-18 17:00:00', '2017-03-18 17:00:00'),
(3, 'jookoowi', '2017-03-06', 'P', '3453467536', '', NULL, '2017-03-18 17:00:00', '2017-03-18 17:00:00'),
(4, 'jook', '2017-03-06', 'P', '3453467536', '', NULL, '2017-03-18 17:00:00', '2017-03-18 17:00:00'),
(5, 'jook', '2017-03-06', 'L', '3453467536', '', NULL, '2017-03-18 17:00:00', '2017-03-18 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Makanan dan Minuman', '2016-04-08 15:26:06', '2017-04-01 22:04:53'),
(2, 'Pakaian', '2016-04-08 15:26:12', '2017-03-31 19:08:50'),
(3, 'Elektronik', '2016-04-12 08:14:01', '2017-03-31 19:09:37'),
(4, 'Kerajinan', '2016-04-12 08:14:10', '2017-03-31 19:10:24'),
(5, 'Koleksi', '2016-04-12 08:14:23', '2017-03-31 19:13:30'),
(6, 'Olahraga', '2016-04-12 08:14:32', '2017-03-31 19:13:39'),
(8, 'Karya Seni', '2017-03-31 00:52:02', '2017-03-31 00:52:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_10_095337_create_table_siswa', 1),
('2016_03_27_065354_create_table_telepon', 1),
('2016_03_28_112346_create_table_kelas', 1),
('2016_03_29_134310_create_table_hobi', 1),
('2016_03_29_135057_create_table_hobi_siswa', 1),
('2017_02_22_054940_create_table_produk', 2),
('2016_03_10_095337_create_table_anggota', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_siswa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_siswa`, `harga`, `deskripsi`, `id_kategori`, `id_users`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'barang', '', '', 8, 1, NULL, '2017-03-09 20:11:01', '2017-03-27 06:12:48'),
(2, 'tim berners lee', '', 'aseloleaselo leaselolease loleas eloleasel olea seloleaselol easeloleaseloleaselol easeloleaselole as eloleaselolea selolease lolea sel olea seloleaselolease l ole aseloleaselolea selo leaselole aseloleaselole aselole asel oleaseloleasel oleas eloleaselo le aseloleaseloleaselo leaseloleasel oleaseloleas el olease loleasel ol easelole aseloleaselolea seloleaseloleaselolea selo leaseloleas eloleas eloleaseloleaselole', 1, 4, '20160412151652.jpg', '2016-04-12 08:16:52', '2016-04-12 08:16:52'),
(3, 'john resig', '', '', 2, 2, '20160412151810.jpg', '2016-04-12 08:18:10', '2016-04-12 08:18:10'),
(4, 'donald knuth', '', '', 4, 5, '20160412151912.jpg', '2016-04-12 08:19:12', '2016-04-12 08:19:12'),
(5, 'bola sepak', '', 'Produk ini oke punya, silahkan beli yang banyak !!!', 6, 4, '20160412152136.jpg', '2016-04-12 08:21:36', '2017-04-20 05:10:25'),
(6, 'yukihiro matsumoto', '', '', 4, 4, '20160412152227.jpg', '2016-04-12 08:22:27', '2017-03-07 12:19:03'),
(7, 'richard stallman', '', '', 1, 5, '20160412152325.jpg', '2016-04-12 08:23:25', '2016-04-12 08:23:25'),
(8, 'jaket adidas', '', 'ini bukan produk asli , jadi jangan dibeli ya !!!', 2, 4, '20160412152424.jpg', '2016-04-12 08:24:24', '2017-04-20 05:00:40'),
(9, 'linus torvalds', '', '', 4, 2, '20160412152516.jpg', '2016-04-12 08:25:16', '2016-04-12 08:25:16'),
(10, 'brendan eich', '', '', 3, 3, '20160412152622.jpg', '2016-04-12 08:26:22', '2016-04-12 08:26:22'),
(11, 'hakon wium lie', '', '', 5, 5, '20160412152739.jpg', '2016-04-12 08:27:39', '2016-04-12 08:27:39'),
(12, 'jacob thornton', '', '', 3, 1, '20160412152841.jpg', '2016-04-12 08:28:41', '2016-04-12 08:28:41'),
(13, 'mark ottoks', '100000', 'fehafwa efj wuwytd uyedt quedtquy wduqwyted uqwyet queyt uqywtquweyt quyetq eduqwropyopefg weifgjad hfglu yfl', 2, 5, '20160412153139.jpg', '2016-04-12 08:31:39', '2017-04-20 04:57:24'),
(14, 'interaction design can be broken down into 5 dimensions', '120000', 'Interaction design can be broken down into 5 dimensions: words, \r\nvisuals, objects/space, time, and behavior. Words are interactions. \r\nVisuals and objects/space are what users interact with. Time is what \r\nusers interact within. And finally, behavior is how users and the \r\ninterface act and react.\r\n\r\nThe first three dimensions allow for interaction, while the last two \r\ndimensions define interaction. In this volume, we’ll dissect the last \r\ntwo intangible dimensions: time and behavior. \r\nInteractions occur over time, while behavior triggers interactions. \r\nThe user’s first action can trigger many reactions that occur over \r\n\r\n\r\ntime. There may be a lull in the user behavior as they await feedback from the interface, or they may engage in a series of rapid-fire \r\nactions in hopes of speeding things up. It all depends upon the task, \r\nthe context, and of course, the user. ', 8, 4, '20160412153224.jpg', '2016-04-12 08:32:24', '2017-04-20 07:04:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `telepon`
--

CREATE TABLE `telepon` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `telepon`
--

INSERT INTO `telepon` (`id_siswa`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(1, '234563456545', '2017-03-09 20:11:02', '2017-03-09 20:11:02'),
(2, '1234567890111', '2016-04-12 08:16:52', '2016-04-12 08:16:52'),
(3, '1234567890222', '2016-04-12 08:18:10', '2016-04-12 08:18:10'),
(4, '1234567890333', '2016-04-12 08:19:12', '2016-04-12 08:19:12'),
(5, '1234567890444', '2016-04-12 08:21:36', '2016-04-12 08:21:36'),
(6, '12345678905522', '2016-04-12 08:22:27', '2017-03-07 12:19:03'),
(7, '1234567890666', '2016-04-12 08:23:25', '2016-04-12 08:23:25'),
(8, '1234567890777', '2016-04-12 08:24:24', '2016-04-12 08:24:24'),
(9, '1234567890888', '2016-04-12 08:25:16', '2016-04-12 08:25:16'),
(10, '1234567890999', '2016-04-12 08:26:22', '2016-04-12 08:26:22'),
(11, '1234567890010', '2016-04-12 08:27:39', '2016-04-12 08:27:39'),
(12, '1234567890011', '2016-04-12 08:28:41', '2016-04-12 08:28:41'),
(13, '1234567890012', '2016-04-12 08:31:39', '2016-04-12 08:31:39'),
(14, '1234567890013', '2016-04-12 08:32:24', '2016-04-12 08:32:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` enum('admin','operator') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@laravelapp.dev', '$2y$10$CyuOq4RM8HL1t8saFJBYcePUxvY7tNB6ePFz2m1hDU9N3ty6aU5Jm', 'PsCc88XFlD94wAekb15NXFqI5tVdEW1RwNzYzB7qvIMPNjh5jJPJ7KLbdMXE', 'admin', '2016-04-08 11:55:21', '2017-04-22 05:15:06'),
(2, 'Operator', 'operator@laravelapp.dev', '$2y$10$LV5V89dm30osKtmoz7tKWOScl.LrmR9MrUvy1BZIk8/rVPKUnX7ae', 'KnW6fAqUlLhvpuVCSdm4OraEJDM5IqGZSBGaMgVLvMKkFUZnkxS08El5uvrT', 'operator', '2016-04-08 12:29:28', '2017-03-30 19:37:30'),
(3, 'Taylor Otwell', 'taylor@laravelapp.dev', '$2y$10$7dR.5HNJmPd0..7fOKfWpuG/Yv1RFCENwuyixyjenArYMSK/hROq.', 't5x5g4HdV3XTwJOsvBIU8IZYDA2xHQKO0YrSpiHxHeh7MzLvGxoEIfcoN8t9', 'operator', '2016-04-09 16:04:25', '2016-04-11 09:21:34'),
(4, 'Awan Pribadi Basuki', 'awan@laravelapp.dev', '$2y$10$1woeNaFYlr9wJgUYUv5oAePR1f3kM0PjFzkHsMVisuyhXxG3SQC9u', 'bvFRSTZLAIkRNzWEcA8CCT1WpqQsJPrmCADZHXfY6IWG70iFHtRRMce3d8pf', 'operator', '2016-04-11 09:20:36', '2016-04-11 09:22:27'),
(5, 'fendhi', 'fendhias@gmail.com', '$2y$10$pMYwzh.R1WR.I6q7jOtXN.GaQwem1sipJFrwfBwc8iDSh76rm2Vbe', 'dzGL1oAZyYnySt7fby8OnROnAnpEp8n6YVQqbQLgxZHObnYU7gBcgEyAMAVh', 'operator', '2017-03-08 15:06:58', '2017-03-10 01:03:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id_kelas_foreign` (`id_kategori`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `telepon`
--
ALTER TABLE `telepon`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `telepon_nomor_telepon_unique` (`nomor_telepon`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_id_kelas_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `telepon`
--
ALTER TABLE `telepon`
  ADD CONSTRAINT `telepon_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
