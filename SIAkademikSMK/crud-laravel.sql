-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 17.57
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `telepon`, `alamat`, `created_at`, `update_at`) VALUES
(1, 'Kartini', '08777877123', 'Tegal', '2019-07-14 11:55:16', '0000-00-00 00:00:00'),
(2, 'Julaeha', '0896382727', 'Pemalang', '2019-07-14 12:01:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk`
--

CREATE TABLE `kk` (
  `id` int(11) NOT NULL,
  `nomor_kk` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `guru_id` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kk`
--

INSERT INTO `kk` (`id`, `nomor_kk`, `nama`, `semester`, `guru_id`, `created_at`, `update_at`) VALUES
(1, '001', 'framework', 'ganjil', 'Kartini', '2019-07-07 15:26:19', '0000-00-00 00:00:00'),
(5, '002', 'Data Mining', 'ganjil', 'Kartini', '2019-07-14 08:20:19', '0000-00-00 00:00:00'),
(6, '003', 'Big Data', 'ganjil', 'Julaeha', '2019-07-14 08:30:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_penduduk`
--

CREATE TABLE `kk_penduduk` (
  `id` int(11) NOT NULL,
  `penduduk_id` int(11) NOT NULL,
  `kk_id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kk_penduduk`
--

INSERT INTO `kk_penduduk` (`id`, `penduduk_id`, `kk_id`, `nik`, `created_at`, `update_at`) VALUES
(4, 12, 1, 89, '2019-07-14 03:13:23', '0000-00-00 00:00:00'),
(8, 12, 5, 70, '2019-07-14 08:31:47', '0000-00-00 00:00:00'),
(10, 15, 1, 70, '2019-07-14 08:34:21', '0000-00-00 00:00:00'),
(11, 15, 6, 78, '2019-07-14 08:34:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`, `semester`, `created_at`, `update_at`) VALUES
(1, 'FR-001', 'framework', 'ganjil', '2019-07-13 08:25:47', '0000-00-00 00:00:00'),
(2, 'DM-001', 'Data Mining', 'ganjil', '2019-07-13 08:25:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_penduduk`
--

CREATE TABLE `mapel_penduduk` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(1) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_penduduk`
--

INSERT INTO `mapel_penduduk` (`id`, `siswa_id`, `mapel_id`, `nilai`, `created_at`, `update_at`) VALUES
(1, 12, 1, 90, '2019-07-14 03:00:44', '0000-00-00 00:00:00'),
(2, 12, 2, 80, '2019-07-14 03:00:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_04_140800_create_penduduk_table', 1),
(4, '2019_07_04_143548_create_warga_table', 1),
(5, '2019_07_04_192827_create_penduduks_table', 2),
(6, '2019_07_04_200347_create_penduduks_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduks`
--

CREATE TABLE `penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduks`
--

INSERT INTO `penduduks` (`id`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelurahan`, `pekerjaan`, `agama`, `status_kawin`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 'fanurati ayeyey syalala', 'rahmawati', 'Laki-Laki', 'kejambon kota tegal tegal', '1999-12-11', 'kejabon', '', '', 'islamm', '', 'button silver.jpg', '2019-07-06 09:32:42', '2019-07-06 09:32:42'),
(9, 'fanurati ayeyey syalala', 'tralala', 'Laki-Laki', 'kejambon kota tegal', '1990-01-12', 'bandung, jawa barat', '', '', 'islam', '', '246x0w.png', '2019-07-07 05:19:52', '2019-07-07 05:19:52'),
(11, 'waspodo', 'zahroh', 'Laki-Laki', 'tegal bahari', '2000-02-12', 'brebes', '', '', 'islam', '', '128_512.png', '2019-07-07 10:09:38', '2019-07-07 10:09:38'),
(12, 'fauziah nur rahmawati indah', 'rahmawati', 'Perempuan', 'tegal bahari jaya', '2000-11-11', 'tegal kota', '', '', 'islam', '', 'button silver.jpg', '2019-07-07 10:13:21', '2019-07-08 20:21:27'),
(15, 'indah mawarni', 'rahmawati', 'Perempuan', 'tegal bahari jaya', '1998-11-11', 'tegal', 'panggung', 'mahasiswi', 'islam', 'belum kawin', 'world128.png', '2019-07-13 21:04:38', '2019-07-13 21:04:38'),
(16, 'jessikka tampubolon', 'maharani priwarati tu', 'Perempuan', 'tegalandong', '1998-09-23', 'ciamis', 'panggung', 'mahasiswi', 'islam', 'jjghsywshvwsbnbjwhsh', 'people.png', '2019-07-15 00:28:52', '2019-07-15 00:29:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ini berita pertama', 'ini isi dari berita pertama yaa', 'Ini-berita-pertama', '', '2019-07-15 04:43:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'fauziah', 'fauziah@gmail.com', NULL, '$2y$10$jfp9gV25MkbYIE6tCllSF.ZllkQJVw4XxwovIcam2QYmFtsD41mFG', 'NnP8jbgzxebsTvdZSqVKTcUtEbhZD4iAk3RoYsHMdN0IgAXFu9iZyPJFvexh', '2019-07-05 22:40:04', '2019-07-05 22:40:04'),
(2, 'user', 'siswa', 'siswa@gmail.com', NULL, 'bcd724d15cde8c47650fda962968f102', 'WXzqeIxIG0H2AWevXwsf7aNnY2Oth1DS9IMqR2BRn0s2jOuGcy16NY7u26MU', '2019-07-07 06:22:48', '2019-07-07 06:22:48'),
(4, 'user', 'siswa1', 'siswa1@gmail.com', NULL, 'bcd724d15cde8c47650fda962968f102', NULL, NULL, NULL),
(5, 'user', 'siswa2', 'siswa2@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL),
(6, 'siswa', 'siswa3', 'siswa3@gmail.com', NULL, 'df8e1ec27c47f2b8223d984f87aa571e', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kk_penduduk`
--
ALTER TABLE `kk_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel_penduduk`
--
ALTER TABLE `mapel_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penduduks_id_unique` (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kk_penduduk`
--
ALTER TABLE `kk_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mapel_penduduk`
--
ALTER TABLE `mapel_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
