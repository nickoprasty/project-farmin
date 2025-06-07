-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3306
-- Generation Time: Jun 07, 2025 at 03:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(10) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `jenis_item` varchar(255) NOT NULL,
  `harga_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `nama_item`, `jenis_item`, `harga_item`) VALUES
(7, 'wortel', 'sayur', 33000),
(9, 'apel', 'buah', 60000),
(10, 'Bayam', 'sayur', 20000),
(11, 'Kentang', 'sayur', 19000),
(12, 'Kol', 'sayur', 20000),
(13, 'Tomat', 'sayur', 15000),
(14, 'Cabai', 'sayur', 20000),
(16, 'Jeruk', 'buah', 55000),
(17, 'Semangka', 'buah', 65000),
(18, 'Terong', 'sayur', 22000),
(20, 'Melon', 'buah', 58000),
(22, 'Pepaya', 'buah', 45000),
(23, 'Timun', 'sayur', 17000),
(24, 'Nanas', 'buah', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pupuk`
--

CREATE TABLE `pupuk` (
  `id_pupuk` int(11) NOT NULL,
  `nama_pupuk` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi_pupuk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupuk`
--

INSERT INTO `pupuk` (`id_pupuk`, `nama_pupuk`, `harga`, `gambar`, `deskripsi_pupuk`) VALUES
(1, 'Urea', 55000, 'pupuk_urea.jpg', 'Pupuk nitrogen dengan kandungan N tinggi (sekitar 46%) yang digunakan untuk meningkatkan pertumbuhan daun dan batang tanaman. Cocok untuk tanaman padi, jagung, dan sayuran.'),
(2, 'NPK', 60000, 'pupuk_npk.jpg', 'Pupuk majemuk yang mengandung Nitrogen (N), Fosfor (P), dan Kalium (K). Digunakan untuk meningkatkan pertumbuhan menyeluruh tanaman—akar, batang, dan buah.'),
(3, 'ZA', 40000, 'pupuk_za.jpg', 'Pupuk yang mengandung Nitrogen (21%) dan Sulfur (24%). Membantu pembentukan protein dan memperbaiki warna hijau daun pada tanaman.'),
(4, 'SP-36', 55000, 'pupuk_SP36.jpg', 'Pupuk fosfat tunggal yang mengandung 36% P₂O₅. Berguna untuk merangsang pertumbuhan akar, pembungaan, dan pembuahan pada tanaman.'),
(5, 'KCL', 58000, 'pupuk_kcl.jpg', 'Pupuk yang kaya akan kalium (K) yang berguna untuk memperkuat batang tanaman dan meningkatkan daya tahan terhadap penyakit serta kekeringan.'),
(6, 'Organik Cair', 30000, 'pupuk_cair.jpg', 'Pupuk yang berasal dari bahan organik (alami) seperti limbah tanaman/hewan dalam bentuk cair. Meningkatkan kesuburan tanah dan memperbaiki struktur tanah.'),
(7, 'Kompos Padat', 25000, 'pupuk_kompos.jpg', 'Pupuk organik padat hasil penguraian bahan-bahan organik seperti daun, jerami, dan kotoran hewan. Membantu menyuburkan tanah secara alami dan ramah lingkungan.');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2akjkEo6y0vWlR5hEtYAS889XhPj4L4ELwVwFCfH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFdaZktBTXFocVhqaEJzQ05EcFk0ZFVxRXRUVVNnNUhGSnRqMldrTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749265305);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pupuk`
--

CREATE TABLE `transaksi_pupuk` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_pupuk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `tanggal_transaksi` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_pupuk`
--

INSERT INTO `transaksi_pupuk` (`id_transaksi`, `id_user`, `id_pupuk`, `jumlah`, `total_harga`, `tanggal_transaksi`) VALUES
(1, 30, 1, 5, 250000, '2025-04-12 12:50:02'),
(2, 30, 2, 3, 180000, '2025-04-12 12:50:02'),
(3, 30, 3, 6, 240000, '2025-04-12 12:50:02'),
(4, 30, 4, 2, 110000, '2025-04-12 12:50:02'),
(5, 30, 5, 4, 232000, '2025-04-12 12:50:02'),
(6, 30, 6, 10, 300000, '2025-04-12 12:50:02'),
(7, 30, 7, 8, 200000, '2025-04-12 12:50:02'),
(9, 25, 3, 5, 200000, '2025-04-12 17:03:32'),
(10, 25, 1, 2, 100000, '2025-04-12 17:03:36'),
(11, 25, 6, 5, 150000, '2025-04-12 17:06:26'),
(17, 25, 7, 3, 75000, '2025-05-19 09:44:02'),
(18, 25, 7, 5, 125000, '2025-06-06 21:49:44'),
(19, 31, 2, 2, 120000, '2025-06-07 03:30:56'),
(20, 25, 4, 3, 165000, '2025-06-07 04:06:06'),
(21, 25, 1, 1, 50000, '2025-06-07 06:33:53'),
(22, 25, 1, 2, 110000, '2025-06-07 18:31:05'),
(23, 33, 4, 5, 275000, '2025-06-07 18:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `role`) VALUES
(25, 'nicko', '$2y$12$JWYc7M1P4LfII1EgxOG6z.5b4CZiSGeK9c4EcB0PV774hluqEpw3K', 'nicko@gmail.com', 'user'),
(27, 'admin', '$2y$12$CLN61QFnVlep8N.b3nDCoOE1oN4R0lUO/nzBI6jR9DBs8k5tKWyY2', 'adminfarmin@gmail.com', 'admin'),
(29, 'prasty', '42d07716a8c260d5ea3760f10454f66fe24854bd79026716e752ff8ed1b36814', 'nickoprasty@gmail.com', 'user'),
(30, 'userdummy', '8d969eef6ecad3c29a3a629280e686cff8ca7f6b8e5e4b60bfec2b9a6a27f6d0', '', 'user'),
(31, 'nickoprasetya', '$2y$12$5q8QQ6.ZxLjljk4qySv/du1tqfEdr8v3HVxzCJ.sfnlNL7uyMSOfy', 'nicko17@gmail.com', 'user'),
(32, 'admin2', 'admin123', 'admin2@gmail.com', 'admin'),
(33, 'eliputra', '$2y$12$Fa3pRfKuWjvsnpOJZJ51SOXEW.XULQuPWI361Vdx8..mA8mowU2xm', 'eli123@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD UNIQUE KEY `nama_item` (`nama_item`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pupuk`
--
ALTER TABLE `pupuk`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksi_pupuk`
--
ALTER TABLE `transaksi_pupuk`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pupuk` (`id_pupuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pupuk`
--
ALTER TABLE `pupuk`
  MODIFY `id_pupuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi_pupuk`
--
ALTER TABLE `transaksi_pupuk`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_pupuk`
--
ALTER TABLE `transaksi_pupuk`
  ADD CONSTRAINT `transaksi_pupuk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_pupuk_ibfk_2` FOREIGN KEY (`id_pupuk`) REFERENCES `pupuk` (`id_pupuk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
