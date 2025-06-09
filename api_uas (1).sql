-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2025 pada 13.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Sulaeman', 'diki@admin.com', '$2y$10$30ZqKjmrahefRVRU9BQFl.hi5rXfhhzls..Fcz1QGFANU82wwg/Oq', '2025-05-14 22:01:20', '2025-05-14 22:01:20'),
(4, 'Sulaeman', 'anjay@admin.com', '$2y$10$xcL7dn7K0eMDMpXPuD4ZEOoKOsOEzXG/854HpreoWdoxO5dCZog4i', '2025-05-14 22:04:34', '2025-05-14 22:04:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_penerbitan` year(4) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `abstrak` text NOT NULL,
  `kategori_buku` enum('Fiksi','Nonfiksi') NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bukus`
--

INSERT INTO `bukus` (`id`, `gambar`, `judul`, `penulis`, `penerbit`, `tahun_penerbitan`, `stok_buku`, `abstrak`, `kategori_buku`, `isbn`, `created_at`, `updated_at`) VALUES
(12, 'buku/1.jpeg', 'Psychology Of Money', 'Morgan Housel', 'Penerbit Baca', '2020', 201, ' buku yang mengeksplorasi hubungan antara psikologi dan keuangan, menjelaskan bagaimana pola pikir dan emosi kita mempengaruhi keputusan finansial.', 'Nonfiksi', '9923298', '2025-05-27 05:10:56', '2025-05-27 09:41:37'),
(13, 'buku/filosofi.png', 'Filosofi Teras', 'Henry Manampiring', 'Buku Kompas', '2018', 291, 'Buku ini membahas cara mengendalikan emosi, memperkuat mental, dan hidup selaras dengan alam, serta mengajarkan pentingnya dikotomi kendali untuk membedakan apa yang bisa dan tidak bisa kita kendalikan.', 'Nonfiksi', '291982', '2025-05-27 05:15:41', '2025-05-27 09:42:25'),
(34, 'buku/Laskar_pelangi_sampul.jpg', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005', 100, 'Buku ini membahas tentang perjuangan sekelompok anak-anak Belitung yang berjuang menuntut ilmu di tengah keterbatasan dan kesulitan ekonomi. Novel ini menekankan semangat persahabatan, optimisme, dan kemampuan bangkit dari keterbatasan untuk mencapai impian, dengan latar belakang kehidupan pedesaan yang realistis dan penuh inspirasi. \n', 'Fiksi', '979-3062-79-7', '2025-05-29 10:11:28', '2025-05-29 10:11:28'),
(35, 'buku/perahu.jpeg', 'Perahu Kertas', 'Dewi Lestari', 'Bentang Pustaka, Truedee Books', '2008', 92, 'Perahu Kertas adalah kisah tentang dua remaja, Kugy dan Keenan, yang memiliki jiwa bebas dan impian besar. Kugy yang suka menulis dongeng dan Keenan yang ingin menjadi pelukis, dipertemukan dalam perjalanan pencarian jati diri dan cinta sejati. Melalui lika-liku hidup, persahabatan, dan perpisahan, mereka belajar bahwa cinta sejati tidak selalu berjalan lurus, namun selalu menemukan jalannya sendiri—seperti perahu kertas yang mengalir mengikuti arus.', 'Nonfiksi', '978-979-1227-78-0', '2025-05-29 10:14:50', '2025-05-29 10:16:17'),
(36, NULL, 'Aroma Karsa', 'Dewi Lestari', 'Bintang Pustaka', '2018', 289, 'Dalam novel ini, dikisahkan sosok Raras Prayagung yang terobsesi untuk mencari dan menemukan sebuah bunga yang dipercaya dapat mengabulkan segala keinginan. Bunga tersebut bernama Puspa Karsa. Bunga tersebut berada di sebuah tempat rahasia dan hanya dapat ditemukan melalui aromanya.', 'Nonfiksi', '978-979-1227-78', '2025-05-29 10:21:38', '2025-05-29 10:21:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_08_113936_create_books_table', 2),
(6, '2025_05_08_141035_add_category_and_genre_to_books_table', 3),
(7, '2025_05_08_160247_create_admins_table', 4),
(8, '2025_05_13_072244_create_pemesanans_table', 5),
(9, '2025_05_22_103048_create_peminjamen_table', 6),
(10, '2025_05_26_045404_create_bukus_table', 7),
(11, '2025_06_06_145200_add_deskripsi_to_pemesanans_table', 8),
(12, '2025_06_06_145539_rename_deskripsi_to_keterangan_in_pemesanans_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_ruangan` varchar(255) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  `nomor_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `nomor_ruangan`, `nama_pemesan`, `nama_kegiatan`, `keterangan`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `status`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(2, '2', 'Suharjo', 'Maen catur', 'Terlalu Ramai', '2025-05-06', '23:00:00', '05:00:00', 'pending', '89213221', '2025-05-13 01:18:12', '2025-06-06 08:17:04'),
(3, '1', 'Janggar', 'Lomba ML', 'Peminjaman Ruangan Disetujui', '2025-06-07', '19:00:00', '23:00:00', 'approved', '0812346262', '2025-05-13 03:28:44', '2025-06-06 08:05:40'),
(11, '3', 'Joko Dowiwi', 'Nambang', 'Melanggar UU', '2025-05-03', '07:00:00', '20:00:00', 'pending', '2312321', '2025-06-06 08:14:23', '2025-06-06 08:16:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` enum('Sudah Dikembalikan','Belum Dikembalikan') NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjamen`
--

INSERT INTO `peminjamen` (`id`, `nama_peminjam`, `judul_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(2, 'Sutisno', 'Dilan 1990', '2025-05-22', '2025-05-23', 'Belum Dikembalikan', '081234648067', '2025-05-22 03:53:07', '2025-05-22 03:53:07'),
(3, 'Jamal', 'Komik', '2025-05-23', '2025-05-25', 'Sudah Dikembalikan', '081234648067', '2025-05-22 03:55:23', '2025-05-22 03:55:41'),
(4, 'Ranalda', 'Cara menaklukan wanita', '2025-05-23', '2025-05-24', 'Belum Dikembalikan', '213123213', '2025-05-22 04:50:49', '2025-05-22 04:50:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dickrullah', 'dickrullah@gmail.com', NULL, '$2y$10$AXN7B4bAoUad8.YiNjO6gejpvdUTiBAYNY/wQaO/6hlwJ93Y2W4s6', NULL, '2025-05-08 04:19:49', '2025-05-13 04:00:34'),
(3, 'lionel messi', 'messi@gmail.com', NULL, '$2y$10$unJNXdtE7JStRwfAlH/DTONE01g1gIayE9itpeSAX9ivLiYro7muO', NULL, '2025-05-08 08:55:46', '2025-05-08 08:55:46'),
(4, 'Brilian', 'brilian@gmail.com', NULL, '$2y$10$W/9v3MxNXaXhPV03OaUhiupX62vhI7Upjd4FDQpMPrIo0JWkrx/wi', NULL, '2025-05-13 04:04:15', '2025-05-13 04:04:15'),
(6, 'Andi', 'andi@mail.com', NULL, '$2y$10$UnIxXRGlKgHu3LQB64pX1edkfZ.7jPhnG290wssb2yPDf67Rvkpxi', NULL, '2025-05-25 19:23:15', '2025-05-25 19:23:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bukus_isbn_unique` (`isbn`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
