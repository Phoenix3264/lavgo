-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2020 pada 07.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavgo_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_1`
--

CREATE TABLE `dmha_1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL DEFAULT 'javascript:;',
  `urutan` int(11) NOT NULL DEFAULT 1,
  `has_sub` tinyint(4) DEFAULT NULL,
  `dmha_1` int(11) DEFAULT NULL,
  `dmha_2` int(11) DEFAULT NULL,
  `dmha_3` int(11) DEFAULT NULL,
  `dmha_4` int(11) DEFAULT NULL,
  `dmha_5` int(11) DEFAULT NULL,
  `dmha_9` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_1`
--

INSERT INTO `dmha_1` (`id`, `nama`, `link`, `urutan`, `has_sub`, `dmha_1`, `dmha_2`, `dmha_3`, `dmha_4`, `dmha_5`, `dmha_9`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'Daftar Multi Hak Akses', 'Data_daftar_multi_hak_akses', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(2, 'Template', 'Data_template', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(3, 'Controller', 'Data_controller', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(4, 'Page', 'Data_page', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(5, 'Icon', 'Data_icon', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(6, 'Dashboard', 'dashboard', 1, NULL, NULL, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(7, 'System', 'javascript:;', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-06-27 04:34:58', NULL, NULL),
(8, 'App Mode', 'javascript:;', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-06-27 04:34:58', NULL, NULL),
(9, 'Kategori', 'Data_kategori', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(10, 'Create', 'Create_daftar_multi_hak_akses', 1, NULL, 1, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(11, 'Edit', 'edit_daftar_multi_hak_akses', 1, NULL, 1, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(12, 'Delete', 'delete_daftar_multi_hak_akses', 3, NULL, 1, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(13, 'Pertanyaan', 'Data_pertanyaan', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(14, 'Input Type', 'Data_input_type', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(15, 'Edit Daftar Pertanyaan', 'edit_daftar_pertanyaan_daftar_multi_hak_akses', 2, NULL, 1, 1, 1, 1, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(16, 'Create', 'Create_template', 1, NULL, 2, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(17, 'Edit', 'edit_template', 1, NULL, 2, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(18, 'Delete', 'delete_template', 2, NULL, 2, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(19, 'Create', 'Create_controller', 1, NULL, 3, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(20, 'Edit', 'edit_controller', 1, NULL, 3, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(21, 'Delete', 'delete_controller', 2, NULL, 3, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(22, 'Create', 'Create_page', 1, NULL, 4, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(23, 'Edit', 'edit_page', 1, NULL, 4, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(24, 'Delete', 'delete_page', 2, NULL, 4, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(25, 'Create', 'Create_icon', 1, NULL, 5, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(26, 'Edit', 'edit_icon', 1, NULL, 5, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(27, 'Delete', 'delete_icon', 2, NULL, 5, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(28, 'Create', 'Create_app_mode', 1, NULL, 8, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(29, 'Edit', 'edit_app_mode', 1, NULL, 8, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(30, 'Delete', 'delete_app_mode', 2, NULL, 8, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(31, 'Create', 'Create_kategori', 1, NULL, 9, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(32, 'Edit', 'edit_kategori', 1, NULL, 9, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(33, 'Delete', 'delete_kategori', 2, NULL, 9, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(34, 'Create', 'Create_pertanyaan', 1, NULL, 13, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(35, 'Edit', 'edit_pertanyaan', 1, NULL, 13, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(36, 'Delete', 'delete_pertanyaan', 2, NULL, 13, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(37, 'Create', 'Create_input_type', 1, NULL, 14, 1, 1, 2, 2, 2, '2020-06-27 04:34:58', NULL, NULL),
(38, 'Edit', 'edit_input_type', 1, NULL, 14, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(39, 'Delete', 'delete_input_type', 2, NULL, 14, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL),
(40, 'Flash Message', 'Data_flash_message', 1, NULL, 7, 1, 1, 1, 1, 1, '2020-06-27 04:34:58', NULL, NULL),
(41, 'Edit', 'edit_flash_message', 1, NULL, 14, 1, 1, 2, 3, 3, '2020-06-27 04:34:58', NULL, NULL),
(42, 'Delete', 'delete_flash_message', 2, NULL, 14, 1, 1, 1, 4, 3, '2020-06-27 04:34:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_2`
--

CREATE TABLE `dmha_2` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_2`
--

INSERT INTO `dmha_2` (`id`, `nama`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'color_admin_v42', '2020-06-27 04:48:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_3`
--

CREATE TABLE `dmha_3` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_3`
--

INSERT INTO `dmha_3` (`id`, `nama`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'backend', '2020-06-27 04:51:11', NULL, NULL),
(2, 'frontend', '2020-06-27 04:51:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_4`
--

CREATE TABLE `dmha_4` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_4`
--

INSERT INTO `dmha_4` (`id`, `nama`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'Data Table', '2020-06-27 04:52:56', NULL, NULL),
(2, 'Form', '2020-06-27 04:52:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_5`
--

CREATE TABLE `dmha_5` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_5`
--

INSERT INTO `dmha_5` (`id`, `nama`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'fas fa-desktop', '2020-06-29 13:56:31', NULL, NULL),
(2, 'Create', '2020-07-03 07:16:05', NULL, NULL),
(3, 'edit', '2020-07-03 07:16:05', NULL, NULL),
(4, 'delete', '2020-07-03 07:16:17', NULL, NULL),
(5, 'aa', '2020-07-04 13:16:11', NULL, NULL),
(6, NULL, '2020-07-04 13:16:45', NULL, NULL),
(7, NULL, '2020-07-04 13:18:20', NULL, NULL),
(8, 'asdasd', '2020-07-04 13:19:08', NULL, NULL),
(9, 'tes lagi', '2020-07-04 13:22:00', NULL, NULL),
(10, 'tes lagi', '2020-07-04 18:32:01', NULL, NULL),
(11, 'tes arya', '2020-07-04 18:32:37', NULL, NULL),
(12, 'uyiuy', '2020-07-04 18:34:59', NULL, NULL),
(13, 'dfgdfg', '2020-07-04 18:36:53', NULL, NULL),
(14, 'dfgdfg', '2020-07-04 18:37:04', NULL, NULL),
(15, 'dfgdfgsdfsdf', '2020-07-04 18:37:10', NULL, NULL),
(16, 'dfgdfgsdfsdf', '2020-07-04 18:37:40', NULL, NULL),
(17, 'sdfdsf', '2020-07-05 04:47:47', NULL, NULL),
(18, 'sdfdsf', '2020-07-05 04:47:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_9`
--

CREATE TABLE `dmha_9` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_9`
--

INSERT INTO `dmha_9` (`id`, `nama`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'Index', '2020-06-29 14:50:46', NULL, NULL),
(2, 'Button', '2020-06-29 14:50:46', NULL, NULL),
(3, 'Dropdown', '2020-06-29 14:50:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_13`
--

CREATE TABLE `dmha_13` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dmha_14` int(11) DEFAULT NULL,
  `panjang` tinyint(4) DEFAULT 6,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_13`
--

INSERT INTO `dmha_13` (`id`, `nama`, `name`, `dmha_14`, `panjang`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'Nama', 'nama', 1, 6, '2020-07-03 06:26:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_14`
--

CREATE TABLE `dmha_14` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_14`
--

INSERT INTO `dmha_14` (`id`, `nama`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'Text', '2020-07-03 06:18:22', NULL, NULL),
(2, 'Number', '2020-07-03 06:18:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmha_15`
--

CREATE TABLE `dmha_15` (
  `id` int(11) NOT NULL,
  `dmha_1` int(11) DEFAULT NULL,
  `dmha_13` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dmha_15`
--

INSERT INTO `dmha_15` (`id`, `dmha_1`, `dmha_13`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 1, 1, '2020-07-03 07:05:59', NULL, NULL),
(2, 2, 1, '2020-07-03 07:05:59', NULL, NULL),
(3, 3, 1, '2020-07-03 07:05:59', NULL, NULL),
(4, 4, 1, '2020-07-03 07:05:59', NULL, NULL),
(5, 5, 1, '2020-07-03 07:05:59', NULL, NULL),
(6, 9, 1, '2020-07-03 07:05:59', NULL, NULL),
(7, 13, 1, '2020-07-03 07:05:59', NULL, NULL),
(8, 14, 1, '2020-07-03 07:05:59', NULL, NULL),
(9, 15, 1, '2020-07-03 07:05:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Herlambang Haryo', 'herlambangharyo@gmail.com', NULL, '$2y$10$lH8Ix6v9akaXar2UQ2DBXeEEpaF4ssOdo94v4KaZAMD67Yns5wJJm', NULL, '2020-06-27 02:52:50', '2020-06-27 02:52:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dmha_1`
--
ALTER TABLE `dmha_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_2`
--
ALTER TABLE `dmha_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_3`
--
ALTER TABLE `dmha_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_4`
--
ALTER TABLE `dmha_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_5`
--
ALTER TABLE `dmha_5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_9`
--
ALTER TABLE `dmha_9`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_13`
--
ALTER TABLE `dmha_13`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_14`
--
ALTER TABLE `dmha_14`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmha_15`
--
ALTER TABLE `dmha_15`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `general`
--
ALTER TABLE `general`
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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dmha_1`
--
ALTER TABLE `dmha_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `dmha_2`
--
ALTER TABLE `dmha_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dmha_3`
--
ALTER TABLE `dmha_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dmha_4`
--
ALTER TABLE `dmha_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dmha_5`
--
ALTER TABLE `dmha_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `dmha_9`
--
ALTER TABLE `dmha_9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dmha_13`
--
ALTER TABLE `dmha_13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dmha_14`
--
ALTER TABLE `dmha_14`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dmha_15`
--
ALTER TABLE `dmha_15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
