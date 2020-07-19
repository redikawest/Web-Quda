-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2019 pada 19.25
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel-kuda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `tanggal_event`, `nama_event`, `lokasi_event`, `created_at`, `updated_at`) VALUES
(8, '2019-12-12', 'Jogja Derby 2020', 'Lapangan Pacuan Kuda-Sultan Agung Bantul', '2019-12-02 04:45:46', '2019-12-05 00:35:11'),
(9, '2019-12-13', 'Jateng Derby 2019', 'Lapangan Pacuan Kuda-Tegalwaton Salatiga', '2019-12-02 04:46:40', '2019-12-02 04:46:40'),
(11, '2019-12-07', 'Blitar Derby 2020', 'Blitar-Jawa Timur', '2019-12-05 00:34:41', '2019-12-05 00:34:41');

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
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `tanggal_head`, `judul_head`, `gambar_head`, `created_at`, `updated_at`) VALUES
(1, '20 November 2019', '\"Andre Menang Lomba Kuda 2019\"', '11.JPG', NULL, '2019-12-03 01:40:41'),
(2, '21 November 2021', '\"Bella Eclipse Juara Kelas E Piala Hamengkubuwono 2019\"', '12.JPG', NULL, '2019-12-02 04:42:16'),
(3, '30 November 2019', '\"Gesende Juara Kelas Calon Remaja Piala Hamengkubuwono 2019\"', '13.JPG', NULL, '2019-12-02 04:49:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `horse`
--

CREATE TABLE `horse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_kuda` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_kuda` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wr_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tl_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `np_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nc_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gb_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `horse`
--

INSERT INTO `horse` (`id`, `kd_kuda`, `nama_kuda`, `st_kuda`, `jk_kuda`, `wr_kuda`, `pj_kuda`, `in_kuda`, `tl_kuda`, `np_kuda`, `nc_kuda`, `gb_kuda`, `created_at`, `updated_at`) VALUES
(10, 'K01', 'Busur Madura', 'R', 'B', 'Hitam', 'Azzuri', 'Angel Little Star', '2019-12-10', 'Candra', 'Cahaya Bulan Stable', 'LadyEliEclipse_2.jpg', '2019-12-09 10:08:28', '2019-12-09 10:08:28'),
(11, 'K02', 'Bahana Agogo', 'R', 'J', 'Plangko', 'Faith On Sunday', 'Siti Agogo', '2019-12-06', 'Venansius Gerry', 'Gerry Stable', '12916774_10207883157910646_2821747302133598672_o.jpg', '2019-12-09 18:52:25', '2019-12-09 18:52:25'),
(12, 'K03', 'Dragon Runner', 'R', 'J', 'Jragem', 'Long War', 'Mahkota Putri Aria', '2019-12-09', 'Mr.Kusnadi Halim', 'King Halim Stable', 'Screenshot_2018-01-15-21-53-29-013_com.miui.videoplayer.png', '2019-12-09 18:53:50', '2019-12-09 18:53:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `horse_member`
--

CREATE TABLE `horse_member` (
  `id` int(11) NOT NULL,
  `horse_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `horse_member`
--

INSERT INTO `horse_member` (`id`, `horse_id`, `member_id`, `created_at`, `updated_at`) VALUES
(2, 10, 7, '2019-12-10 01:17:43', '0000-00-00 00:00:00'),
(3, 11, 8, '2019-12-10 01:54:39', '0000-00-00 00:00:00'),
(4, 12, 8, '2019-12-10 01:54:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nm_depan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_belakang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_member` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `al_member` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_club` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gb_member` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `user_id`, `nm_depan`, `nm_belakang`, `jk_member`, `al_member`, `nm_club`, `gb_member`, `created_at`, `updated_at`) VALUES
(7, 16, 'Fransiskus', 'Ariyanto', 'L', 'Salatiga', 'Cahaya Bulan Stable', '17d86095b079c8f6549fea74c0a6036b.jpg', '2019-12-09 10:07:11', '2019-12-09 10:07:11'),
(8, 17, 'Redika', 'Westama', 'L', 'Salatiga', 'Eclipse Stable', '12377573_10207883160470710_7098989223128489977_o.jpg', '2019-12-09 18:43:48', '2019-12-09 18:43:48'),
(9, 18, 'Candra', 'Irawan', 'L', 'Desa Tegalwaton', 'Agojas Stable', 'MendelssohnRD.jpg', '2019-12-10 00:30:22', '2019-12-10 00:30:22');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_30_004213_create_event_table', 1),
(5, '2019_11_30_162253_create_header_table', 2),
(6, '2019_12_01_143019_create_horse_table', 3),
(7, '2019_12_01_184214_create_news_table', 4),
(8, '2019_12_05_074630_create_pelatih_table', 5),
(9, '2019_12_05_080002_create_joki_table', 6),
(10, '2019_12_05_222337_create_member_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gb_berita` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jd_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `gb_berita`, `tg_berita`, `jd_berita`, `is_berita`, `created_at`, `updated_at`) VALUES
(4, '15.JPG', '2019-12-01', '\"Vaux Legend Juara 1 Kelas A Terbuka Piala Hamengkubowono 2019\"', '<p>Pacuan Kuda Tingkat Nasional &ldquo;Paku Alam Cup VII &ndash; 2019&rdquo;, Minggu (23/06/19), di Stadion Sultan Agung, Bantul, DIY, diikuti lebih dari 130 ekor kuda pacu. Kuda-kuda tersebut berasal dari DIY, Jawa Tengah, Jawa Timur, Jawa Barat, DKI Jakarta, Kalimantan Selatan, Sulawesi Utara, dan Sumatera.</p>\r\n\r\n<p>Lomba pacuan kuda sekala nasional yang telah menjadi agenda tahunan ini dipraksai oleh Pura Pakualaman bekerja sama dengan Persatuan Olahraga Berkuda Seuruh Indonesia (Pordasi) Daerah Istimewa Yogyakarta (DIY) dan Dinas Pariwisata DIY dalam rangka memperingati dan memeriahkan Peringatan 207 Tahun Hadeging (berdirinya) Kadipaten Pakualam, Yogyakarta.</p>', '2019-12-02 04:54:27', '2019-12-02 04:54:27'),
(5, '12743776_10207564526065049_2269083396226016288_n.jpg', '2019-12-10', '\"More Than Better  Juara 1 Kelas Pemula CD 800 Meter Dalam Kejuaran Memorial Cup 2019\"', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2019-12-02 08:36:10', '2019-12-02 08:43:16'),
(8, '12.JPG', '2019-12-13', '\"Tudor Eclipse Juara 1 Piala Hamengkubowono 2019\"', '<p>ydusyuwyudyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyu</p>', '2019-12-05 00:37:10', '2019-12-05 00:37:10');

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
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Candra', 'muhammadcandrairawan@gmail.com', NULL, '$2y$10$IuWmaXmG6Pu7LBsCMhDsfe9Qy9E/mc6AZIpcaG3jSp/wGj9ABQ5sO', 'FVOYYDPYAZjXhzpNBhqcUiKlU3u5nZk9iOxsk0rLUX3xJKURGjOvPhiIXJYj', '2019-11-30 05:53:55', '2019-11-30 05:53:55'),
(2, 'admin', 'Dennis', 'dennis@gmail.com', NULL, '$2y$10$W.6gSs3Yjzn8tXXh58ihN.kYFlf1.R5LFaijXwawHPSJ3dF3EfvRu', 'YoJdIqosPh1CkNz2244nAKcpzdIagggXiV6skJphUCPbpSrcURM54vVAVg0A', '2019-12-03 01:00:14', '2019-12-03 01:00:14'),
(16, 'member', 'Fransiskus', 'fransiskus@gmail.com', NULL, '$2y$10$IQb1hdCD.TckeqVP6aAvquDtFvGOjV1hRxLPgtQ2eRPtr2bKb/FxW', 'Sj3Gb6XowCcTVlQHi86GITse7Iqx280oK4cc0b6pI1oaFQPoKAh5IYJMroYK', '2019-12-09 10:07:11', '2019-12-09 10:07:11'),
(17, 'member', 'Redika', 'rdk@gmail.com', NULL, '$2y$10$vdQ3QdsM4KEZWLv9j4hPJOWLCMKhujt3b0dZUaJnan2Zjr0kFBDTa', 'bOaPPMzBov4vUxpfjFUR0uFRdSEjFwxR64ZzOJgZj4EGSs1cyxNGUFkksZGn', '2019-12-09 18:43:47', '2019-12-09 18:43:47'),
(18, 'member', 'Candra', 'candra@gmail.com', NULL, '$2y$10$lxlY4Gq/ViFVEj9Amx4QEOK6UBlTYRXAIioq42DpEMP2VUi2SnOcS', 'sLqyosHyCOGtTTKLIaEfILThPqZPraqqFqgrjQs6mcyCe7fsPqtAfoIxKbsC', '2019-12-10 00:30:22', '2019-12-10 00:30:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `horse`
--
ALTER TABLE `horse`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `horse_member`
--
ALTER TABLE `horse_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `horse`
--
ALTER TABLE `horse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `horse_member`
--
ALTER TABLE `horse_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
