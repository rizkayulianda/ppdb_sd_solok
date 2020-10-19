-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 08:12 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb_sd_solok_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_siswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_zonasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_sebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_siswa` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_kk` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_akte` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_ijazah_tk` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_pasfoto` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat_siswa`, `kd_zonasi`, `lat_siswa`, `long_siswa`, `jenis_kelamin`, `pendidikan_sebelumnya`, `nik_siswa`, `no_kk`, `image_kk`, `image_akte`, `image_ijazah_tk`, `image_pasfoto`, `created_at`, `updated_at`) VALUES
(7, 'Zahwa Annisa', 'Solok', '2014-02-01', 'Taratak Galundi', 'LG-01', '-1.076595', '100.782821', 'Perempuan', 'TK', '1302044102140002', '1302042106160005', '1602648998.IMG20200917102017.jpg', '1602648998.IMG20200917102037.jpg', '1602648998.IMG20200917102047.jpg', '1602648998.sd_pr.jpg', '2020-09-22 09:19:06', '2020-10-13 21:16:38'),
(8, 'Salsabila Ramadhani', 'Solok', '2013-08-04', 'Taratak Galundi', 'LG-01', '-1.075764', '100.783095', 'Perempuan', 'TK', '1302044408130002', '1302040606082858', '1602649913.IMG20200917102321.jpg', '1602649913.IMG20200917102344.jpg', '1602649913.IMG20200917102354.jpg', '1602649913.sd_pr.jpg', '2020-09-22 09:28:27', '2020-10-13 21:31:53'),
(9, 'Siti Nurhasanah', 'Garut', '2013-05-08', 'Taratak Galundi', 'LG-01', '-1.07557', '100.78023', 'Perempuan', 'TK', '3205374805130001', '3205372112070731', '1600792775.IMG20200917102421.jpg', '1600792775.IMG20200917102538.jpg', '1600792775.IMG20200917102548.jpg', '1600792775.sd_pr.jpg', '2020-09-22 09:39:35', '2020-09-22 09:39:35'),
(10, 'Abdul Fajar', 'Garut', '2013-05-08', 'Taratak Galundi', 'LG-01', '-1.07557', '100.780236', 'Laki-laki', 'TK', '3205370805130001', '3205372112070731', '1600793386.IMG20200917102421.jpg', '1600793386.IMG20200917102931.jpg', '1600793386.IMG20200917102939.jpg', '1600793386.sd_lk.jpg', '2020-09-22 09:46:45', '2020-09-22 09:49:46'),
(11, 'Raffa Alfatih', 'Solok', '2013-10-15', 'Taratak Galundi', 'LG-01', '-1.070035', '100.777929', 'Laki-laki', 'TK', '1302041510130004', '1302040606083160', '1600793823.IMG20200917102620.jpg', '1600793823.IMG20200917102648.jpg', '1600793823.IMG20200917102658.jpg', '1600793823.sd_lk.jpg', '2020-09-22 09:57:03', '2020-09-22 09:57:03'),
(12, 'Muhammad Nadhif', 'Solok', '2013-09-23', 'Taratak Galundi', 'LG-01', '-1.069579', '100.77604', 'Laki-laki', 'TK', '1302046309130001', '1302042710100001', '1600794416.IMG20200917102733.jpg', '1600794416.IMG20200917102753.jpg', '1600794416.IMG20200917102825.jpg', '1600794416.sd_lk.jpg', '2020-09-22 10:06:56', '2020-09-22 10:06:56'),
(13, 'Dafa Bahrum Maulana', 'Alahan Panjang', '2014-03-25', 'Taratak Galundi', 'LG-01', '-1.071766', '100.777722', 'Laki-laki', 'TK', '1302042503140002', '1302040606085153', '1600831217.IMG20200917103148.jpg', '1600831217.IMG20200917103207.jpg', '1600831217.IMG20200917103220.jpg', '1600831217.sd_lk.jpg', '2020-09-22 20:20:17', '2020-09-22 20:20:17'),
(14, 'Fadhillah Bilal Azziyan', 'Solok', '2014-05-01', 'Taratak Galundi', 'LG-01', '-1.072892', '100.779504', 'Laki-laki', 'TK', '1302040105140002', '1302041611110011', '1600832154.IMG20200917103258.jpg', '1600832154.IMG20200917103319.jpg', '1600832154.IMG20200917103331.jpg', '1600832154.sd_lk.jpg', '2020-09-22 20:35:54', '2020-09-22 20:35:54'),
(15, 'Irfan Alfaris', 'Kota Solok', '2014-01-09', 'Taratak Galundi', 'LG-01', '-1.073139', '100.779643', 'Laki-laki', 'TK', '1302040901140002', '1302042002120008', '1600832553.IMG20200917103357.jpg', '1600832553.IMG20200917103411.jpg', '1600832553.IMG20200917103422.jpg', '1600832553.sd_lk.jpg', '2020-09-22 20:42:33', '2020-09-22 20:42:33'),
(19, 'Jihan Nofitri', 'Solok', '2013-11-03', 'Taratak Galundi', 'LG-01', '-1.068045', '100.774238', 'Perempuan', 'TK', '1302044311130001', '1302040109100003', '1600836129.IMG20200917105412.jpg', '1600836129.IMG20200917105432.jpg', '1600836129.IMG20200917105440.jpg', '1600836129.sd_pr.jpg', '2020-09-22 21:42:09', '2020-09-22 21:42:09'),
(20, 'Hafiz Resrian Akbari', 'Solok', '2014-02-15', 'Taratak Galundi', 'LG-01', '-1.068762', '100.772787', 'Laki-laki', 'TK', '1302041510140001', '1302040803160003', '1600836555.IMG20200917105628.jpg', '1600836555.IMG20200917105641.jpg', '1600836555.IMG20200917105648.jpg', '1600836555.sd_lk.jpg', '2020-09-22 21:49:15', '2020-09-22 21:49:15'),
(21, 'Viciana Santia', 'Solok Selatan', '2013-07-15', 'Taratak Galundi', 'LG-01', '-1.072903', '100.778269', 'Perempuan', 'TK', '1311035507130001', '1311030106110003', '1600837025.IMG20200917105754.jpg', '1600837025.IMG20200917105800.jpg', '1600837025.IMG20200917105806.jpg', '1600837025.sd_pr.jpg', '2020-09-22 21:57:05', '2020-09-22 21:57:05'),
(22, 'Megi Ramadhani', 'Solok', '2013-07-10', 'Taratak Galundi', 'LG-01', '-1.069256', '100.774998', 'Laki-laki', 'TK', '1302045007130001', '1302040712110004', '1600837408.IMG20200917105924.jpg', '1600837408.IMG20200917105938.jpg', '1600837408.IMG20200917105943.jpg', '1600837408.sd_pr.jpg', '2020-09-22 22:03:28', '2020-09-22 22:03:28'),
(23, 'Muhammad Luthfi', 'Solok', '2014-03-04', 'Taratak Galundi', 'LG-01', '-1.070157', '100.778033', 'Laki-laki', 'TK', '1302040403140001', '1302040606082336', '1600837752.IMG20200917110005.jpg', '1600837752.IMG20200917110026.jpg', '1600837752.IMG20200917110032.jpg', '1600837752.sd_lk.jpg', '2020-09-22 22:09:12', '2020-09-22 22:09:12'),
(24, 'Hamda Sakhia Fikri', 'Sago', '2014-05-07', 'Taratak Galundi', 'LG-01', '-1.073128', '100.778313', 'Perempuan', 'TK', '1301074705140002', '1301072102140002', '1600838329.IMG20200917110149.jpg', '1600838329.IMG20200917110200.jpg', '1600838329.IMG20200917110206.jpg', '1600838329.sd_pr.jpg', '2020-09-22 22:18:49', '2020-09-22 22:18:49'),
(25, 'Fazila Zazkia', 'Solok', '2014-02-04', 'Taratak Galundi', 'LG-01', '-1.068719', '100.775041', 'Perempuan', 'TK', '1302044402140002', '1302040808110004', '1600839139.IMG20200917110231.jpg', '1600839139.IMG20200917110243.jpg', '1600839139.IMG20200917110248.jpg', '1600839139.sd_pr.jpg', '2020-09-22 22:32:19', '2020-09-22 22:32:19'),
(26, 'Fanesa Ferika Fitri', 'Solok', '2013-07-18', 'Taratak Galundi', 'LG-01', '-1.074083', '100.778205', 'Perempuan', 'TK', '1302045807130002', '1302042504110001', '1600839558.IMG20200917110540.jpg', '1600839558.IMG20200917110556.jpg', '1600839558.IMG20200917110550.jpg', '1600839558.sd_pr.jpg', '2020-09-22 22:39:18', '2020-09-22 22:39:18'),
(27, 'Bilqy Juliant Amaris', 'Solok', '2014-07-05', 'Taratak Galundi', 'LG-01', '-1.067697', '100.775268', 'Laki-laki', 'TK', '1302040507140001', '1302042104150001', '1600840064.IMG20200917110726.jpg', '1600840064.IMG20200917110742.jpg', '1600840064.IMG20200917110757.jpg', '1600840064.sd_lk.jpg', '2020-09-22 22:47:44', '2020-09-22 22:47:44'),
(28, 'Adelia Faranisa', 'Solok', '2014-01-30', 'Taratak Galundi', 'LG-01', '-1.072302', '100.778098', 'Perempuan', 'TK', '1302067001140001', '1302040909140002', '1600840421.IMG20200917110828.jpg', '1600840421.IMG20200917110836.jpg', '1600840421.IMG20200917110843.jpg', '1600840421.sd_pr.jpg', '2020-09-22 22:53:41', '2020-09-22 22:53:41'),
(29, 'Ahmad Wili Adrianda', 'Solok', '2013-07-01', 'Taratak Galundi', 'LG-01', '-1.07364', '100.779152', 'Laki-laki', 'TK', '1302040107130003', '1302042706130001', '1600840960.IMG20200917110906.jpg', '1600840960.IMG20200917110915.jpg', '1600840960.IMG20200917110920.jpg', '1600840960.sd_lk.jpg', '2020-09-22 23:02:40', '2020-09-22 23:02:40'),
(56, 'Akbar Daffa Pratama', 'Solok', '2013-06-14', 'Taratak Galundi, Alahan Panjang', 'LG-01', '-1.074709', '100.779326', 'Laki-laki', 'TK', '1302041406130001', '1302041204100009', '1602651281.IMG20200917103452.jpg', '1602651281.IMG20200917103512.jpg', '1602651281.IMG20200917103522.jpg', '1602651281.sd_lk.jpg', '2020-10-13 21:54:41', '2020-10-13 21:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kesehatan_siswa`
--

CREATE TABLE `kesehatan_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `penglihatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendengaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gigi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kesehatan_siswa`
--

INSERT INTO `kesehatan_siswa` (`id`, `nik_siswa`, `tinggi`, `berat`, `penglihatan`, `pendengaran`, `gigi`, `riwayat_penyakit`, `created_at`, `updated_at`) VALUES
(8, '1302044102140002', 115, 20, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 09:22:38', '2020-09-22 09:22:38'),
(9, '1302044408130002', 114, 26, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 09:29:06', '2020-09-22 09:29:06'),
(10, '3205374805130001', 117, 23, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 09:40:10', '2020-09-22 09:40:10'),
(11, '3205370805130001', 116, 22, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 09:47:14', '2020-09-22 09:47:14'),
(12, '1302041510130004', 113, 25, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 09:57:25', '2020-09-22 09:57:25'),
(13, '1302046309130001', 116, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 10:07:25', '2020-09-22 10:07:25'),
(14, '1302042503140002', 116, 26, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 20:24:02', '2020-09-22 20:24:02'),
(15, '1302040105140002', 115, 20, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 20:36:16', '2020-09-22 20:36:16'),
(20, '1302044311130001', 115, 24, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 21:42:52', '2020-09-22 21:42:52'),
(21, '1302041510140001', 117, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 21:49:40', '2020-09-22 21:49:40'),
(22, '1311035507130001', 115, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 21:57:32', '2020-09-22 21:57:32'),
(23, '1302045007130001', 117, 25, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:03:46', '2020-09-22 22:03:46'),
(24, '1302040403140001', 117, 22, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:09:37', '2020-09-22 22:09:37'),
(25, '1301074705140002', 118, 20, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:19:05', '2020-09-22 22:19:05'),
(26, '1302044402140002', 118, 22, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:32:59', '2020-09-22 22:32:59'),
(27, '1302045807130002', 115, 20, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:39:38', '2020-09-22 22:39:38'),
(28, '1302040507140001', 118, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:48:27', '2020-09-22 22:48:27'),
(29, '1302067001140001', 116, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 22:54:11', '2020-09-22 22:54:11'),
(30, '1302040107130003', 117, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-09-22 23:03:28', '2020-09-22 23:03:28'),
(40, '1302041406130001', 117, 21, 'Baik', 'Baik', 'Bersih', 'Tidak Ada', '2020-10-13 21:54:59', '2020-10-13 21:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_07_28_063352_create_operator_table', 1),
(24, '2020_07_28_063847_create_ortu_table', 1),
(25, '2020_09_05_065739_create_zonasi_table', 1),
(26, '2020_09_05_065800_create_sekolah_table', 1),
(27, '2020_09_05_065818_create_calon_siswa_table', 1),
(28, '2020_09_05_065840_create_kesehatan_siswa_table', 1),
(29, '2020_09_05_065856_create_pendaftaran_table', 1),
(30, '2020_09_05_065913_create_pengumuman_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_sekolah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_op` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_op` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `kd_sekolah`, `nama_op`, `email_op`, `password`, `created_at`, `updated_at`) VALUES
(2, '10301653', 'SD N 01 Talang', 'sekolahdasarnegerioitalang@yahoo.com', '$2y$10$RqUo17YleFHVDDJ41qd5COEXZ2Tf3VqD/lBEy29pqJjm8i4RucOn.', NULL, NULL),
(3, '10301651', 'Fitriani', 'sdn01alahanpanjang@yahoo.co.id', '$2y$10$DdYT.Nt5qa.qfnnOjw3GiO7keluQ4Ue2TeFWO5tIKFfruS9oa8/Oy', NULL, NULL),
(4, '10301675', 'Elvi Meliza', 'sdn2talang_kabsolok@yahoo.co.id', '$2y$10$ZQaguwtPE9/4r4Ay6vzGDOcapq/cZHJorfToTKFm/zdtHP54gQjN2', NULL, NULL),
(5, '10301658', 'Iin Fatmawati', 'sdn3cupak_kabsolok@yahoo.co.id', '$2y$10$js5tdMmifj1U3RYsuk/VNO3ESdix62kzjVilX.uYGQyqHhZalV79C', NULL, NULL),
(6, '10308003', 'Desi Maya Sari', 'sdn05cupak@gmail.com', '$2y$10$rS.sd3Pd7dpLWwwNGRiKNOWRA9DFx1Do/9ldHJ6oKslhuBq6.pB8G', NULL, NULL),
(7, '10301631', 'Deri Malinda', 'sdn6kotogadangguguk_kabsolok@yahoo.co.id', '$2y$10$/h6bc3JEH7.svnxr6rkNNOKBHd990XpUxRq/l/eqv1L.U4U7zDfIq', NULL, NULL),
(8, '10301621', 'Imelda Vasra', 'sdn07batangbarus@gmail.com', '$2y$10$wt41cLyaUb6XgsfXGNHTAO0tg3mh1CusYEZjzKQqwvM7j7cwMrCjS', NULL, NULL),
(10, '10301743', 'Yeni Gusnita', 'sdn08cupak_kabsolok@yahoo.co.id', '$2y$10$YzWq.s1ow/FR57m8wRtgZehYa/iL/SRdhJLDSoiM9rxhiO48sVY6.', NULL, NULL),
(11, '10301694', 'Nofitra Hendradeni', 'sdn10talang_kabsolok@yahoo.co.id', '$2y$10$kkyBIHhHJk6efqslKOS5N.YZfktNxfV8DetEzoBt6QrYF1oJqe7U.', NULL, NULL),
(12, '10301696', 'Vivi Rika Yanti', 'sdn11jawi.jawi@gmail.com', '$2y$10$6m09dyJcUrwnHTY0aCplDuGJ/QRH3fKq9MzFkrS.idqaAeVJRjLfy', NULL, NULL),
(13, '10308005', 'Yulhasni', 'sdn12cupak@gmail.com', '$2y$10$TeB7W4wzZKzQLhh2zfYj3uaWtQEfFiMGl2x5mimEHkKaCjQKCnasi', NULL, NULL),
(14, '10301476', 'Neci Saputri', 'sdn15batangbarus@gmail.com', '$2y$10$gv.NPVWNGQozJ41cly.cpeNHuUNnaNigoNhhdlenOBPX7miC/qgom', NULL, NULL),
(15, '10301474', 'Yuwani Caniago', 'sdn16airbatumbuk@gmail.com', '$2y$10$hSodSO.TDsyY01x/vRqRue1IGXfvwtXnury6qlK3Ug9VawV5DDPL2', NULL, NULL),
(16, '10308006', 'Neni Sulastri', 'sdn17cupakkabsolok@gmail.com', '$2y$10$ztOtw4IUA0swkOYcTYQzM.BMFaN7on1q1XWaTP6lBQyTg7pxwvAza', NULL, NULL),
(17, '10301490', 'Jeria Yunita', 'sdn20kotogaekguguk_kabsolok@yahoo.co.id', '$2y$10$e4zmc1SbdJy1H7wMZT2oIOJkRJn2b61Lww.uGNhvyhk16zDPDM/4y', NULL, NULL),
(18, '10308007', 'Yatri Ningsih', 'ningsih.yatri@yahoo.co.id', '$2y$10$ldEfeGfNEMc48d6jZVLsQeHYLnLlGfEcBH.TQA3GP2P8qiPn3XhFC', NULL, NULL),
(19, '10301419', 'Lila Frisca', 'sdn23jawijawiguguk@gmail.com', '$2y$10$kUc18zY547bFcVoaah92AOk4dQgg273pKWZsawYWvhzUODPTwIPr2', NULL, NULL),
(20, '10308008', 'Orneka Afriani', 'sdn24Sungaijernih@gmail.com', '$2y$10$uQO4LoGTDxjPKoppus3pPu6g3WGcA9eS7/GyrNLKFOv2qnqGwEjTe', NULL, NULL),
(21, '10301455', 'Rola Tristina Putra', 'sdn25talang.gunungtalang@gmail.com', '$2y$10$.iOxvYItqYGbWikvI/icVeC7SPXNHSSUW7nKAdQ49LseQ5OeXO816', NULL, NULL),
(22, '10308011', 'Rahmi Asrita', 'sdn29cupak@gmail.com', '$2y$10$AVq51dthSNgouk/n1Zxc5e/Rm.8kLxDSJ4.bG7y3GoycRLx5u2shm', NULL, NULL),
(23, '10301549', 'Yeni Sugiarto, S.Pd', 'sdn30kgg@gmail.com', '$2y$10$u3uP2UwzgroRns0yDLrBbu9DLv9erU0qQbyqiQN6ejru.HLcV1Pzm', NULL, NULL),
(24, '10301564', 'xxxx', 'sdn31batangbarus_kabsolok@yahoo.co.id', '$2y$10$kmsHHuem0GltNCpC0/OKUueJDi0jWBb2g7Bp.JJ3ZGe3RJwXkOWc.', NULL, NULL),
(25, '10308013', 'Napoleon', 'sad32airbatumbuk_kabsolok@yahoo.co.id', '$2y$10$J6Zt7D9xsgcbGTOSnj7JIunTZtG.4t26BtO3Ij/niTlisihlfbUgC', NULL, NULL),
(26, '10308015', 'Devila Silviana', 'sdn33cupak.kabsolok@gmail.com', '$2y$10$YzFTJTOLhO9qXSjvrvdTlO0SULdNs0f6paxBRDOur.HcghEkvDm36', NULL, NULL),
(27, '10308016', 'Ilil', 'sdn35cupak@gmail.com', '$2y$10$/z1FUU28RP5GYyLiazJms.3lCYt3eiAv6aD6yIeypazPx8W/wwJ3C', NULL, NULL),
(28, '10308017', 'Yulia Fitria', 'sdn36cupak@gmail.com', '$2y$10$GyizVpRbNMXy/SWPA.P9aOc0a1EOyHP8R7Bo8.JaofHuC1yFJJhgG', NULL, NULL),
(29, '10301553', 'Riri Dona Ratna Sari', 'sdntigatujuh_kgg@yahoo.co.id', '$2y$10$E0lW9wXSVXPwuQm8PlEPxehi4NO/9v4o07neUqT6Kw506h6BM692G', NULL, NULL),
(30, '10301556', 'Lastari Mairani', 'sdn38kotogaekguguk_kabsolok@yahoo.co.id', '$2y$10$JnQ49QFeFCb6k9U0Q50mSuLzoURfioxsgpEbePeptgQ/oJLF.3m8e', NULL, NULL),
(31, '10301571', 'Miranti', 'sdn39talangkab.solok@yahoo.co.id', '$2y$10$P5C0eXErAEi37rH1uahMketVJHt78jqFP.BiDBjTJJlaoziKWJQP6', NULL, NULL),
(32, '10301572', 'Dewi Mulyani', 'sdn40batangbarus@gmail.com', '$2y$10$cF7qum5NK0EaHaqahxE51.KzrbYBuZqib2SDQSASVexrMhpIJR5GO', NULL, NULL),
(33, '10301584', 'Ratna Juwita', 'sdn41batangbarus_Kabsolok@yahoo.com', '$2y$10$a0.F6LzVAs2vzU/dTqm9JuVbn8FRIppaHl0o20akVph09liXizkUu', NULL, NULL),
(34, '10301585', 'Ira Novita', 'sdn42airbatumbuk_kabsolok@yahoo.co.id', '$2y$10$WtN2jMrixPCQ5kNUJc.suOmFZT3Vt0q2beMEJHSLqfk6g0z43cm7y', NULL, NULL),
(35, '10308002', 'Darnina Kommeri', 'sdn04cupak@gmail.com', '$2y$10$S7l0f9l.VSQkmEj66pO7heGOxLFU/RAh4hjQIwJZE20pKf6Hj2r3m', NULL, NULL),
(36, '10308004', 'Fathirul Syidik', 'sdn09sungaijernih.kabsolok@gmail.com', '$2y$10$ZXDfeD6.vlmx5/vMIXDNl.M6HU8YFmwlyXafFSkNwiB4ad0X42FrW', NULL, NULL),
(37, '10301500', 'Ibrahim Yose', 'sdn18batangbarus@gmail.com', '$2y$10$eRaYIA8nJvQvPm2nVoUTEelKkvvM86crvLavYBUczaa9ISc/ErNSm', NULL, NULL),
(38, '69982416', 'Yeyen Devri Ananda', 'sdn43anaukadoktalang.kabsolok@gmail.com', '$2y$10$TohaDlb/uEMQrQVaIMy9/edprrjyEf6p0UMQegVpoUDDBLPJhgrtu', NULL, NULL),
(39, '10301654', 'Alfianos Putra', 'kbdsdn1@gmail.com', '$2y$10$LAtdKNxymwlL57UCGolSJOljGpIoJS2mwRGmPw.Mm/iycm10ROY5S', NULL, NULL),
(40, '10301672', 'Rosita Yulianti', 'sdn02stnaniv_kabsolok@yahoo.co.id', '$2y$10$IL.Cg3MChqvDeH87F3skjezFCs13pS1hfjIpaXiLBY8O4UQrZhlMS', NULL, NULL),
(41, '10301734', 'Tika Firmawati Sari', 'sdn08kbd_kabsolok@yahoo.co.id', '$2y$10$YNs3SzEeEEYJe3hrgQxkKuRskuXLHRzc7Gz8CexP5LxPwfzSCR/F.', NULL, NULL),
(42, '10301764', 'Luqman', 'sdn09kbd_kabsolok@yahoo.co.id', '$2y$10$.hEMx5gZyDXnvjn9cNqkO.ZqIEanqq6imJcI9h1VE7I73keWhX3v.', NULL, NULL),
(43, '10301723', 'Fitria Mairoza', 'sdn10kbd_kabsolok@yahoo.co.id', '$2y$10$UEheipNBp71ORvG9gjZp5OlDhRUG3U.UBgqSnx6.XLFnvv2RL231W', NULL, NULL),
(44, '10301697', 'Afridaletti', 'sdnkbdkabsolok@gmail.com', '$2y$10$w.8FROYsO3Oav4Qk2Hp0Eep5LgT3/YE9rMHVCI3mQKWFqCvf41xg2', NULL, NULL),
(45, '10301593', 'Fitri Novayanti', 'sdn04kbd-kabsolok@yahoo.co.id', '$2y$10$siYzY9iV/Kul26fg4P7BPOrBjzcCL3kGO3Dida9mNZvRRaJKBgbMO', NULL, NULL),
(46, '10301617', 'Daratul Wahida', 'sdn06stnaniv_kabsolok@yahoo.co.id', '$2y$10$jBC5e3jeKGRkMyiLrMuXi.8IM0HYrRXOxnEozjIYYXCxwa7VYUOWi', NULL, NULL),
(47, '10301668', 'Endra Gusmita', 'sdn3airdingin_kabsolok@yahoo.co.id', '$2y$10$XKFCtdq.1dsZzpt21YC6K.sL2x2ensKHO.PZUKjtarQdJbu/6iap6', NULL, NULL),
(48, '10301611', 'Gusrina Yelnita', 'sdnsalimpat070@gmail.com', '$2y$10$8Ss6vgpAj5h.oQWa9HWJ6eOUIrFl4uKIDVYk7etPGVvmmfrDwPPnK', NULL, NULL),
(49, '10308075', 'Risnawati', 'sdn05airdingin-kabsolok@yahoo.co.id', '$2y$10$i2Qvv4TR4CIP2y.sZ2/W3uwZ6JD1nR04MtzhThghlvyprIF88ljO.', NULL, NULL),
(50, '10301619', 'Sya\'ban Afendi', 'sdn6sungainanam_kabsolok@yahoo.co.id', '$2y$10$7d0PRtQK.EIyNoaToGDKj.jKbecv32TYfvOJHc85WRAIcakiHwhhW', NULL, NULL),
(51, '10308076', 'Gusrianti Rozalina', 'sdn7alahanpanjang_kabsolok@yahoo.co.id', '$2y$10$N6FlIAicBgBbAf6mLUuQTulmNtBFn.xf7g.jwM68i90DAhTAh7K6e', NULL, NULL),
(52, '10301741', 'Ermawati, S.Pd.I', 'sdn8alahanpanjang_kabsolok@yahoo.co.id', '$2y$10$oHKJgWwDlnJqJ5oT/SvTBOQoSvXmKkbTma8Si2VgJf.4IM7d5R/0q', NULL, NULL),
(53, '10301756', 'Ratna Febrianti Prayogo', 'sdn9sungainanam_kabsolok@yahoo.co.id', '$2y$10$FCPGntAZDvIZb/sEQ9WNDOWnGZF/CApoaOObYGQ3poeqzn3VX88TC', NULL, NULL),
(54, '10301702', 'Isra Harmaira', 'sdn12salimpat_kabsolok@yahoo.co.id', '$2y$10$WcaT3nL8.CMiEn1R9U1bBelkdmHXQ.2V64ziyR5p70V0ohRYy4oxu', NULL, NULL),
(55, '10301487', 'Rahmi Eka Putri', 'sdn19sungainanam_kabsolok@yahoo.co.id', '$2y$10$sPhGnks9UzzfA44/j5zglO3dRqbXivrCxPcDmVWkvDmvChgcCFAnK', NULL, NULL),
(56, '10301418', 'Yurneti', 'sdn23.airdingin@yahoo.com', '$2y$10$ZGHGKYH3CI4z.FbSgtyWzO9z7GW6DJLPJYs1fj0DUgSmEzxbv/te.', NULL, NULL),
(57, '10301439', 'Yuliza Puspita', 'sdn25airdinginkabsolok@yahoo.com', '$2y$10$64qTGeOo3XhAq1GzAKzVvuiDve9KZxRvxse2Oym1T9V5QltJn3z3K', NULL, NULL),
(58, '10301451', 'Feronika Rafman, S.Pd', 'xxxx@gmail.com', '$2y$10$XfQ5wHwmm/X3z9xBlf8x8.ncu8jK6TaGiccVZ8YAUKMv//7ghvE7O', NULL, NULL),
(59, '10301446', 'Widya Kurnia Afrilia Dona, S.Pd', 'sdn28sungainanam-kabsolok@yahoo.co.id', '$2y$10$PyhgvF0HUbQQEt43csY/xeO5L6kEy2IwqU46nEVGmfvJKmxlH1jba', NULL, NULL),
(60, '10301447', 'Leni Murni', 'sdn29airdinginkabsolok@gmail.com', '$2y$10$5bychOaytSuKcjNJhqluK.mSADDPdKTETgRlKCrnItYUL7cz9lf26', NULL, NULL),
(61, '10301563', 'Mulia Delfita', 'sdn31alahanpanjang_kabsolok@yahoo.co.id', '$2y$10$dBkXAIiQY6tJYHS16V2u8erroQ5fWpuwD1/yuml7O4XpfwrvAjnJO', NULL, NULL),
(62, '60730046', 'Rika Susriarida', 'sdn34airdingin_kabsolok@yahoo.co.id', '$2y$10$i4qGK65.sGHnP1JG24JuauJsIm.8VDfls2RFYeVi7.wXvZ50tV6Ni', NULL, NULL),
(63, '69934242', 'Ratna Wira, S.Hum', 'sd36salimpat@gmail.com', '$2y$10$aNIY/LOhGRv4Kc/./t0hXe0DO1Ie/.eR34t4VI2NZ.bKJIczMqQKu', NULL, NULL),
(64, '10301673', 'Toni Mandala Putra', 'sdn02sn@gmail.com', '$2y$10$JCjPckaycVLskOXuRzJNSODPo6dEEHF62l7ARmzAXlsoI7jFnONqe', NULL, NULL),
(65, '10307783', 'Yullya Fitri A,S.M', 'sdn11alahanpanjangkabsolok@yahoo.co.id', '$2y$10$txl43oPUEUh.6xZBl409BurjnaelgOzIjomJbFNfihhnrF3kCwbye', NULL, NULL),
(66, '10301503', 'Kusuma Wardani', 'sdn18sungainanam_kabsolok@yahoo.co.id', '$2y$10$F07JWmvD6DgM5PjY76Rdqecoahtt3IYpfHBX9exesDDFa9P0b0skq', NULL, NULL),
(67, '10301489', 'Bayu Fahrurrazi', 'sdn20alahanpanjang17@gmail.com', '$2y$10$DrdpHZS1/E/tjsGtW7pPZuM0dzETvSDKkbp91NWhcCJeYfxrE3dfm', NULL, NULL),
(68, '10301441', 'Sukmainy', 'sdn27sungainanam_kabsolok@yahoo.co.id', '$2y$10$BuD5O.w78mnN.jjNBsj8n.gtMzhtczuNLnlbfB.w8smz8gkShYSgW', NULL, NULL),
(69, '10301561', 'Radhiati Eka Putri', 'sdn32sungainanam@gmail.com', '$2y$10$JyuhxfyZmJ5Oiftn2k9AnO.buaO7RSBTaIserxEpqy1Wnjtg.Kw5q', NULL, NULL),
(70, '10301428', 'Eliza Sofia Rahmi, S.Kom', 'sdn22salimpat_kabsolok@yahoo.co.id', '$2y$10$7aN8FiBuXdhD8jpkX92JYOX5DGcYiEzqGNrOu0bAXD6N/SXH6Zto.', NULL, NULL),
(71, '10307784', 'Pionari Handayani', 'piona87@yahoo.com', '$2y$10$TirjZcRoILZxKHmfcN6xe.k5EEdRIdSexfAt73UxI3mzy43cC7m22', NULL, NULL),
(72, '10301637', 'Siska Wahyu Vanesa', 'sdn01pssurian@gmail.com', '$2y$10$wf/HZR.VPELxEkdUfMsdMO/SA8dZsSeCFMiKvEmRJh9L1W.XJnzX.', NULL, NULL),
(73, '10301644', 'Tomi Perkasa', 'sdn02gaduang_kabsolok@yahoo.co.id', '$2y$10$8Kf0RaJkbi.AeLhgkY/51uCbJ0zfa0pOc2iKpCzUNoQI013h8far2', NULL, NULL),
(74, '10308081', 'Beni Maifiyandra', 'sdn03pasalolo_kabsolok@yahoo.co.id', '$2y$10$.AHw4q1bnnOzMqF3GUOXBO44LtkSrffy1kUMbZiaFyKB/i3nGZQqa', NULL, NULL),
(75, '10301605', 'Belina Yance Yuliati', 'sdn04_kayumanang@yahoo.com', '$2y$10$n9JcvU.uJ5w3mjdSvd1WUO0grVo1L39i6b.grgSlbae659G4IuDiq', NULL, NULL),
(76, '10301594', 'Dodi Erfayuli', 'sdn05aiadaliak@gmail.com', '$2y$10$MvQY0ojVotrNE/Vmted2DuAmfIbGlTL4eiomOxxYV2jpLU/P0ky9m', NULL, NULL),
(77, '10301632', 'Ervan Zenaldo', 'sdn06ladangpadi_kabsolok@yahoo.co.id', '$2y$10$gRJemUBvckMskxDX/OFdK.hpKYTjc6DcuqaN99Dqef1cIyqLiFF.C', NULL, NULL),
(78, '10301680', 'Novio Setiawan', 'sdn07jalanbalantai_kabsolok@yahoo.co.id', '$2y$10$bRVE6INKFp/FT47Gtx6.bOdKHaFQwjsIrVp1WuPJUslZx/UdEJjze', NULL, NULL),
(79, '10301732', 'Ernis', 'sdntambang927@gmail.com', '$2y$10$5yGW0HMcmVDw0/VtaV1FF.AdbRVtod4Id/3BJeDPAjRRAhNdzCrSW', NULL, NULL),
(80, '10301749', 'xxxx', 'sdn10kototinggisurian_kabsolok@yahoo.co.id', '$2y$10$Hoqo4/qa9PP5AbMgHcrnmO4H9GSI8Sv5tg4iYfkTdBz1SqOMtv.tK', NULL, NULL),
(81, '10301686', 'xxxx', 'sdn12jalanbalantai_kabsolok@yahoo.co.id', '$2y$10$h1YpDCJpeNTuLvkmBX.JheiZHIMpZX/pI7xtQn.z26bH7xLL1iYiq', NULL, NULL),
(82, '10301704', 'Ilham', 'gusmayuneri@yahoo.co.id', '$2y$10$UhMisyYD5kz8vA.khrKAq.GAJ8cL3ErWSiE/ML2guhYKvQ7zuVlE.', NULL, NULL),
(83, '10301707', 'Yona Nofita Fauziah', 'sdn14dalamkoto@gmail.com', '$2y$10$tmWq8Y6/Focn8k4svKVp9ep47G7Avswr6AmO3YYUcaWpoc2.ACAuC', NULL, NULL),
(84, '10301494', 'Mairafki Tiska', 'sdn19bantololo_kabsolok@yahoo.co.id', '$2y$10$AfijWhIBoTv0vjWGETxXrelOoff9uiHMERysH2wADowSxsgVIvdRO', NULL, NULL),
(85, '10301491', 'Desri Sumarni', 'tedi_nofembra@yahoo.com', '$2y$10$v2brX4qwv0d2dpmUnl43KuEAr69/BzxaB5WzH4uwdkkv5RAF0XADi', NULL, NULL),
(86, '10301641', 'Rika Putri Yenti', 'sdn01sirukam@yahoo.co.id', '$2y$10$Qqpux2shfqtLWeVR1gFvtesOBNX8kUkrmduH2RwEzntvkSe79YJHy', NULL, NULL),
(87, '10301674', 'Nelfa Yenti', 'sdn2supayang@yahoo.co.id', '$2y$10$a4MKC1WWnVrAYonaenPEmOMqAFd2xTA5sVmJuKgSJJCq27oZvOqZO', NULL, NULL),
(88, '10301669', 'Nasriza Desarni', 'sdn03aieluo-kabsolok@yahoo.co.id', '$2y$10$BIKNUnMYH5Xi.lEcRADR/uUFuIpvq6EGx6T9W8HyrGv.IQ1I2Fb4u', NULL, NULL),
(89, '10301614', 'Adri Fitriani', 'sdn05sirukam@gmail.com', '$2y$10$GKoAu5XcH.3UlCVUl1BJduTie4SX1hXW6OJodbOWblYH6waCNjYTe', NULL, NULL),
(90, '10301616', 'Eria Dama Yanti', 'sdn6sirukamkabsolok@yahoo.co.id', '$2y$10$c5uRXQ2Qkspyhmp20Yx3Du0snrAhVU9wIu9beh48G5Hr9zz0GgG/i', NULL, NULL),
(91, '10301739', 'xxxx', 'sdn7sirukam_kabsolok@yahoo.co.id', '$2y$10$IxJXifZWs4nANcGjw3w8eOrpzurjLKJ2abMh85CG1jk67dq4pIeUm', NULL, NULL),
(92, '10301731', 'xxxx', 'sdnsupayang08@gmail.com', '$2y$10$qLdTy5dCLYXCsZaOumdCQOTsHRb2d0FIn7aK7yqO0lzT6jkVZgjxq', NULL, NULL),
(93, '10301765', 'Ilham Deltri, S.Pd', 'sdn09sirukamkapuk@gmail.com', '$2y$10$sbK85onM.u0iTw.4Loc40ueKGhatWcF6h9pO9sEZcIL6SY8xBnNQi', NULL, NULL),
(94, '10301671', 'xxxx', 'fitrimelia8@gmail.com', '$2y$10$QqQA5t/DnsV2c30aq8Dv.OsQ16bcPMK2jAdcxlszBZhfRzLWuZAfW', NULL, NULL),
(95, '10301667', 'Wiza Rahmadya, S.Pd', 'sdn03batunayak-kabsolok@yahoo.co.id', '$2y$10$frna7.PF9qrfL471oM/bre0Q.nNlY5lBwS6HLrOOf.KpJSO.nW82m', NULL, NULL),
(96, '10301608', 'Lidyanti Syafni', 'sdn04kotolaweh_kabsolok@yahoo.co.id', '$2y$10$wRzh9d/VAP1AIAhue1IBAOZ10/nwtb4cTule80A/EIIFvBx6yCIFa', NULL, NULL),
(97, '10301595', 'Almas Indra Jaya', 'sdn5batubajanjang@gmail.com', '$2y$10$H5EFCkHAiXdl/EPKtrmNiuuYU/c5DrOezi49f85ydMLSf9x8McTMC', NULL, NULL),
(98, '10301633', 'Erveliza', 'sdn06limaulunggo_kabsolok@yahoo.co.id', '$2y$10$9c8yBqaLDLX8FRh0Isx9P.awGLCL0bjsp0ZF2zr7zYYHgwlJeYMa6', NULL, NULL),
(99, '10301726', 'Hazya Izmi,S.Pd', 'sdn08kotoanau@gmail.com', '$2y$10$MbsaTw711oRPJcRDHVCYC.01R/kUpTExQekBAakW57kxHOquvLr4e', NULL, NULL),
(100, '10301758', 'Kiki Amelia', 'sdn09kotoanau_kabsolok@yahoo.co.id', '$2y$10$Jukh/gB6Ku83cYdNv0xpdeWmbaYhXwAwVi6nOHEQ2BwYKTBtoo37m', NULL, NULL),
(101, '10301699', 'Gusri Yanti', 'sdn11kotolaweh_kabsolok@yahoo.co.id', '$2y$10$U/L02av8nWf3KYOod2iaSOi6/BeEHZmh31vKrCVLwdOcEmHVSjzni', NULL, NULL),
(102, '10301714', 'Fitri Afnadia F', 'sdn12selayotanang@gmail.com', '$2y$10$3xSKQt.JSewlBBC5.Cj/C.Y1h8ymHQEjZ9I/LmF3ZgN.uUST9Kfn6', NULL, NULL),
(103, '10301717', 'Parman Tanjung', 'sdn13batubajanjang_kabsolok@yahoo.co.id', '$2y$10$hDyao3N0Z3z6wr1/RoVfS.3xv2qYvB2MBxowJNn7Vm1EYKqTVd5x6', NULL, NULL),
(104, '10301479', 'Zilfiatri', 'sdn15kdjkotoanau@gmail.com', '$2y$10$7WoRLyygmA/srCTelqSM7.40vdfETZD10cF7NVsaZY2swqTgCktaO', NULL, NULL),
(105, '10301465', 'Darius', 'sdn16ktlw@gmail.com', '$2y$10$6Vam5u9P2VHxVfXFo21QZuaLMCgA5pMdMdsX1lxC7A1duU5FxHhRO', NULL, NULL),
(106, '10301483', 'Wahyuni', 'sdn17batubanyak_kabsolok@yahoo.co.id', '$2y$10$4Nck/EBKL7mmlLBR02uSAOMg3puM/NqhPnwpl2IA6eHQ8Ksk.pYQS', NULL, NULL),
(107, '10307791', 'Dedi Afrianto', 'sdn19kotoanau_kabsolok@yahoo.co.id', '$2y$10$2IXOo3PHvqSyKbXxwvooleQMYdFQ1z/j2BRo2nkBMJbg9SRvYPbna', NULL, NULL),
(108, '10301462', 'Yandri', 'sdn20stbslbjaya@gmail.com', '$2y$10$5MrWS6nPyGOAtUE8XPWHgO1geaNjWucD/TNaQ0TL6paXgcTvQkjZ.', NULL, NULL),
(109, '10301435', 'Ofrillawarman', 'sdn22babajanjang_kabsolok@yahoo.co.id', '$2y$10$MgsLxRlLlwKcMgJAuJoYBOrXeWF2NMh/gkzEjcMFEUe.wPNx29aki', NULL, NULL),
(110, '10307790', 'Hayanil  Duwi Febri', 'sdn23kotoanaulembja@gmail.com', '$2y$10$R4RsfacRAIDAN9bj1qh0C.NsxDJHa1rSueBNzUcTL45suf.lKOgkK', NULL, NULL),
(111, '10301655', 'Yulianti', 'www.sdn01kotoanau@gmail.com', '$2y$10$mpEphzS7g5e3nfJj/dUy7e11wTLKrIO8vLz8UiVjHHRub80phM.eu', NULL, NULL),
(112, '10301502', 'Liswarni', 'sdn18limaulunggo@gmail.com', '$2y$10$YIEbKolOHAiD7koz8e/z/ugjT5vgXcRJv925XUoSD0CllV0CazU8y', NULL, NULL),
(113, '69990958', 'xxxx', 'xxxx@gmail.com', '$2y$10$BcwpOejvH47dV1MpS4vACeruWP5wo4wqlzfITq3s1QIsGSSnleWr2', NULL, NULL),
(114, '10301709', 'Hendra', 'sdn14kotoanau_kabsolok@yahoo.co.id', '$2y$10$15m/AxVxT4eT98VWQKRp4OxyYiXlppNPJw3RuY1tZnq3wrrqOx.aG', NULL, NULL),
(115, '10301646', 'Gusrianto', 'sdnegeri01muarapanas@gmail.com', '$2y$10$I/vv0bXajegZi.o7P2CryOmP.v2VVUfOmspNHs6BReVFWqAQ0l5PW', NULL, NULL),
(116, '10301670', 'Kiky Lidya Safitri', 'sdn02mp@yahoo.com', '$2y$10$HPCvok.BRscXOZfySPZdreJJay9aupaDUi4Ns0HbZYcBITLpJOjYC', NULL, NULL),
(117, '10301606', 'Ali Akbar Wisky', 'sdn04kinari_kabsolok@yahoo.co.id', '$2y$10$/025kERSLNymuh60Dz400OhkEvVvXVOMIfRjAxb0KzfYoYB1B1BEK', NULL, NULL),
(118, '10301622', 'Melisa Putri Nanda', 'sdn07bukittandang@gmail.com', '$2y$10$NMQrDBguPysiHTXVHicZ5O1DS7tIshCvCLF.0YfLaHy/rA3zP54FO', NULL, NULL),
(119, '10301725', 'Feni Kusrini', 'sdn08Ppamujankinari@gmail.com', '$2y$10$jNnqbyK1KQUCo/YvoMG4NOBNAP6BCQoz1zQJ11i/UgeCkr8UATxhm', NULL, NULL),
(120, '10301760', 'Mega Nofa Yanti', 'sdn09muarapanas@gmail.com', '$2y$10$68/JvSNm6yShV.voYYaDX.kTdaOMsxzo62tGKguL0w0LRJgnqiXlS', NULL, NULL),
(121, '10301750', 'Efni Susanti', 'sdn10muarapanas_kabsolok@yahoo.co.id', '$2y$10$MKgQk7sqRzdUvrnuunTkBudQjsGXnsyofIiOY/X3fEerbg0Hgw3SK', NULL, NULL),
(122, '10301698', 'Fitra Wahyuni', 'sdnkinari11@gmail.com', '$2y$10$XPMMJdigDX0pSo/thEIpJup/DaAToieNcCxRFU0yRjBGACXGvZT3C', NULL, NULL),
(123, '10301685', 'Desriana Putri', 'sdn12dilam_kabsolok@yahoo.co.id', '$2y$10$Lmj0slCx3ii0LNogccO23.XX5HUXBgJHUc0jhCwwoRBXfmQC8LULK', NULL, NULL),
(124, '10308068', 'Yuni Esmonedi, S.E', 'sdn13bukittandang_kabsolok@yahoo.co.id', '$2y$10$fJLoiQoSMDJWm0h02BieluvYKZPYvRg1pLB8buk4skzdVQFOCpBrW', NULL, NULL),
(125, '10308070', 'Dafriwal, S.Pd.I', 'sdn15muarapanas_kabsolok@yahoo.co.id', '$2y$10$3Zr06kxffD9rEThdkr4qruJRYzdR7h6PZDuiAqAeq/jNHh1UY6Qmy', NULL, NULL),
(126, '10301493', 'Wisri', 'sdn19dilam_kabsolok@yahoo.co.id', '$2y$10$ILlfXHhZIxL.kRwjtXULRe0Pkd9gC4RmvkNgoIPwlMU43pfTkfr0q', NULL, NULL),
(127, '10308073', 'Linda Puspita Sari', 'muarapanas84@gmail.com', '$2y$10$GujlYJmj1bOmNyhZ5E0XQeTgumFo.kuLrw3FmCB7JeORLqW8GVS0O', NULL, NULL),
(128, '10301660', 'Doni Isnaini', 'sdn03kkmp@gmail.com', '$2y$10$Sgrqk4yQe5aTc6HgQ789h.cIEsttbjsrTTtWU46iaYUXBKKFR3zXa', NULL, NULL),
(129, '10301599', 'Rici Fitriandi', 'sdn05parambahan_kabsolok@yahoo.co.id', '$2y$10$biMOnQSjlC/WfkZChPpcV.0F8kc.Xm6iUVjUy/REqV75.MD/1GFKC', NULL, NULL),
(130, '10301629', 'Anna Lestari', 'sdn06dilam_kabsolok@yahoo.co.id', '$2y$10$qMnS7Sa4zuWXwMRAiZQYBuBoVIl14ymkVPUZtcm7Wmcx3e9fMpB7C', NULL, NULL),
(131, '10308029', 'Ultari', 'soaklaweh.sdn01@gmail.com', '$2y$10$Fc.UarFr2FvR0zS.eWeR8uTnnGYn2V/.s9aAuL/k59GT7zPEJ2MKu', NULL, NULL),
(132, '10307935', 'Novi Gusmadilita', 'ramadani_irant@yahoo.com', '$2y$10$bqHfbLuNtsHOQYv5BG5Zzuv90bqKvaKEKPPXGBWw.8stRu5TlUqTa', NULL, NULL),
(133, '10307936', 'Annisa Fauziah', 'sdn3kotobaru_kabsolok@yahoo.co.id', '$2y$10$E.MuKLvZczPFw9A8xOU8ZOVT8kO0rShJlmn2b3f6vUIZzBGcLjyry', NULL, NULL),
(134, '10301607', 'Her Adri Yanti', 'sdn04kotohilalang@yahoo.com', '$2y$10$sCnuPGDGqUGvdlKkzsfLr.HA.K0Ri3rrCJhDpkDl/ytzygzHkOHEa', NULL, NULL),
(135, '10301600', 'Armon', 'sdn05selayo@gmail.com', '$2y$10$CeQolkbFxxXpbomg8f0BWeZLlzHrrSC.Cw0cB6bbmzxzW/GB65.we', NULL, NULL),
(136, '10307937', 'Shelni Puji Hastuti', 'sdn6panyakalan@yahoo.co.id', '$2y$10$BLsCXy6iKJYAfTQQdiAvx.gvQXvFGbIVTiQJaW3gfFa8lxD3/rv/G', NULL, NULL),
(137, '10307938', 'Rikadewi, S.Pd', 'sdn78gaung@gmail.com', '$2y$10$iAHLET97/4d64BvPJ3vAYO4Mp7EsqzlTrR1vHIKa7Ldmuo0LRq2rS', NULL, NULL),
(138, '10301730', 'Rika Imilda', 'sdn8selayo@yahoo.co.id', '$2y$10$m91SkFUJqd1t.QmrcyPyZ..XDugHeXxnUDume4IjjJGgtuarjFlwm', NULL, NULL),
(139, '10301748', 'Pipin Marlina', 'sdn10kotobaru@yahoo.co.id', '$2y$10$CwePMSkkqiX27tCUAyg5g./k0n/DzOTD9/MhAxWzesxLct7idCyom', NULL, NULL),
(140, '10301688', 'Rina Kartika Sari', 'sdn12kotobaru@yahoo.co.id', '$2y$10$pKT2765u1ggA4pclq8xrbugLCJQlt7kCb7Q5a7OiJfF628I6alFk6', NULL, NULL),
(141, '10301710', 'Maiyuris, S.Pd', 'sdn14selayo@yahoo.co.id', '$2y$10$rSffQmo7Uk.HKTFiyyeVPuWcBatjr9Ku7axfVa0d.KYs.tZZnk0uy', NULL, NULL),
(143, '10301464', 'Leri Milka', 'kotobarusdn@gmail.com', '$2y$10$OPMpADQ0GbFeFbHRPWu.8euewN2w.PaLFPW0Qwk71./NEJEwgy7te', NULL, NULL),
(144, '10301497', 'Tiya Mariani', 'sdn17panyakalan@yahoo.co.id', '$2y$10$wDNDGMQ2W5owQD21UOQohOvvZ.m.wSulnQWP7bB3/5sY1cOsbU9ku', NULL, NULL),
(145, '10307957', 'Ida Syuryati', 'sdn.18saoklaweh@gmail.com', '$2y$10$8VjKt5aqPYz00iFTqyZ/Zu0B8zBFAbFc7LI4iNSHBQuVqrNvOEkpa', NULL, NULL),
(146, '10301488', 'Laila Rahmawita', 'sdn19tanjungbingkung@yahoo.com', '$2y$10$LYPvoQtIxqhNkXkWYeOGqerv.XU.L/ccSzqXzkYgu1/JuLRmOujQC', NULL, NULL),
(147, '10301504', 'Nora Sri Yanti', 'sdn20selayo@yahoo.co.id', '$2y$10$M/aIwNfpCFr3A/Kjr9J4a.UOVxAwhRJdaiPo4R.IctNZYg0g9QMlm', NULL, NULL),
(148, '10301430', 'Yulia Wulan Sari', 'sdn21gantungciri@yahoo.co.id', '$2y$10$t0IHZKVpIGAmzrHmhpacLuz2Ahp5H3diokLV957S8UNL0KNyWFjEa', NULL, NULL),
(149, '10301436', 'Roza Linda', 'sdn22kotobaru_kabsolok@yahoo.com', '$2y$10$JEb2Q5l/w4laka/1bHLFY.OIrMljpUhzO9zWNEWdH0hbPvk95AQe.', NULL, NULL),
(150, '10307958', 'Maisarni', 'sdn23tanjungbingkung@gmail.com', '$2y$10$GoouTPJnK2u6bfvhw7226OJ0TPehmkkajmieaFV9wpW1xxvvg8//K', NULL, NULL),
(151, '10301438', 'Mulia Risman', 'sdn24selayo@yahoo.co.id', '$2y$10$MiToEjgpLMdKGbYnDJ9fSuMI4a.6bAMoxfNDACi3YojZG.0JV4vFK', NULL, NULL),
(152, '10301459', 'Akhmad Syukri', 'sdn26panyakalan@yahoo.co.id', '$2y$10$N7.MEDyXaF6QkYtsgyZHRuvHG.m5yg0tLjTg/w0ioP6PTRcaYeXRq', NULL, NULL),
(153, '10307960', 'Iis Susanti', 'sdn27gaung@yahoo.co.id', '$2y$10$Oq1KgxHVK.90sR7ZBhAVv.agy.JcWK7n0f/K4jDxmJ3WSFTE3V69W', NULL, NULL),
(154, '10301445', 'Syamyuni Elva', 'sdn28kotobaru@yahoo.co.id', '$2y$10$Imtra0sLDW31vIKndv699uCcF10gxncrlx9TMIQsVq3mwZ.yAKcIe', NULL, NULL),
(155, '10308064', 'Rita Nellyati', 'sdn29saoklawehkubung@gmail.com', '$2y$10$xdjMNV.MYcCxhuIlk.0X5epumW9JZzvLGr39FgNPg6pV/KGDp3AyO', NULL, NULL),
(156, '10301566', 'Asmela Bena', 'sdn31selayo@gmail.com', '$2y$10$mnTNGFRnHL4OTvrX7mUu3emxkqelIDAWdCP3tLj/iSIjVN63b0CMm', NULL, NULL),
(157, '10308065', 'Susanti Fasdalova', 'sdn32gantung.ciri10308065@gmail.com', '$2y$10$iAdzPJDXVok.xUDAjOgfrOFMW.x4AJ7wYhCAQG4l1VsENQz9AkFhm', NULL, NULL),
(158, '10308066', 'Mega Ovanda Asril', 'sdn33kotobaru@gmail.com', '$2y$10$mRQL97io.sMeOxppIXCS5OSTCD0mgGmwvrfp6RDLldB93tA2tw/aK', NULL, NULL),
(159, '10308067', 'xxxx', 'sdn34gantungciri@yahoo.co.id', '$2y$10$EQinOK1cY8Ic4oqeiGo/l.byBzY4ZasRBiblF./VO.bpelPlmFcua', NULL, NULL),
(160, '10301552', 'Armaistuti', 'sdn36selayo_kabsolok@yahoo.co.id', '$2y$10$nLAl1TflTF/HLqQkhKFZZugVuQlKvgdjLdSBACD/gdzRpD6H2kVZ.', NULL, NULL),
(161, '10301554', 'Annisa Rahmatullah Putri', 'sdn37panyakalan@gmail.com', '$2y$10$FEH47nd5e0nnKNPOBraoP.Rfy1y7k90O3rMmJipRjk6FeBovbndwm', NULL, NULL),
(162, '10301557', 'Mike Sriyanti', 'sdn38tanjungbingkung1@gmail.com', '$2y$10$X.zzRXgz/ZxtdZpBK7015.H9L6ZjK9tGRM0bJWeJk/iuwXgI5raTm', NULL, NULL),
(163, '10301558', 'Devia', 'sdn39kotobaru1@gmail.com', '$2y$10$RTnGi.eCqGEygWKxMy2O7e6NxFlO9hhpJbWfWzHcyjMmtjZUnKSxe', NULL, NULL),
(164, '10301695', 'Monika Roja', 'sdn11gantungciri@yahoo.co.id', '$2y$10$gNc4d.m2ckIb/T8kvmcoC.kRrMbvO5D2EOGeU3EELJuN5wJUtN.H6', NULL, NULL),
(165, '10307939', 'Ance Ariska', 'sdn13kotobaru@yahoo.com.id', '$2y$10$pG8l4J3PJ8O1hNS4yCKXFeJga4m.Q7ZBO0pgwws1GIP/tua4xGke6', NULL, NULL),
(166, '10307959', 'Nurhavida', 'sdn25kotohilalang@gmail.com', '$2y$10$pRPH3ZtIusIhJlziMoUD7uAUlCBuxAqGh2eZBbrJ3FpzbL2zEdZJS', NULL, NULL),
(167, '10301550', 'Yeni Ananda Putri', 'sdn35kotobaru@yahoo.co.id', '$2y$10$00kkczceWU65vqUGOChzmOft4s/lUZl2ypSbODAtD8.vsbsduredS', NULL, NULL),
(168, '10301642', 'Zainal Arifin', 'sdn01tarungtarung@gmail.com', '$2y$10$m5XncYQW/1eUt0H7GSJt.eoswCxSGO.0Rhk2ntw0/NfE2h5LEZwQG', NULL, NULL),
(169, '10301597', 'Leny Oktavia', 'sdnguguksarai05@gmail.com', '$2y$10$ci4S757Qx7.5W7nSAVXSduZgeKFqosMldXID.QT6KK2bQUZQ8Md4K', NULL, NULL),
(170, '10301630', 'Sofia Pebriani', 'SDN06GGS@gmail.com', '$2y$10$3gB3F4S.dimggxD.mV4odOq7urz07/nkNlqYNoWp1GTALjq6BiOIG', NULL, NULL),
(172, '10301752', 'Afifah Agustin', 'sdn10pianggu@gmail.com', '$2y$10$.KTyM6S9lCq1isZ/N4/BOe8V7GrT29yNm0iNLxCzZp9JbBVmFesYy', NULL, NULL),
(173, '10301701', 'xxxx', 'sdn12pianggu@yahoo.co.id', '$2y$10$nlac2GMuaVQ4nZfYmlNrt.TIQRWfLm2e5hfmKN1nzvBJ.XWsOsp9K', NULL, NULL),
(174, '10301469', 'Werisa Gusnita', 'sdn16sungaidurian@yahoo.co.id', '$2y$10$4rU5rjkA0T7b6DtZsrqw8eY9iS6druCnHXvmUeMfE3iAcORz/D/H.', NULL, NULL),
(175, '10307907', 'Zulmi Annisa Ulludvi', 'sdn01paninjauankabsolok@gmail.com', '$2y$10$CJAGzYjdQq0NbOOutnpz9OpeI.BEVTPN9GwtS86OqV2N9YLB7bv62', NULL, NULL),
(176, '10301609', 'Ari Sandra', 'sdn4sulitair_kabsolok@yahoo.co.id', '$2y$10$C9gIhc1bbjGbgxbtvkXPXe06nS4Kmecteb7UM6ggoxfs8tOnV34zC', NULL, NULL),
(177, '10301596', 'Nurma Yenti', 'sdn5gandosulitair@gmail.com', '$2y$10$fKcZWEZJyB8jED07studNeBPZTXMzXrWZq1kphl5A0irY3E9YDebG', NULL, NULL),
(178, '10301740', 'Mawardi', 'sdntujuhtalagolaweh_sulitair@yahoo.co.id', '$2y$10$uw0uRveQu4uDwuJO2Q0R/OyhuLT6KEhk99UJ8.U5L7GLcODkjmyUG', NULL, NULL),
(179, '10301742', 'Qori Daratul Iman', 'sdn08bukitkandung-kabsolok@yahoo.co.id', '$2y$10$OSjt/0QrFG0KN2VsKgFwru3aE4UdVjWNH4Fh6NwuLVMFVnPeP9m.q', NULL, NULL),
(180, '10301745', 'Darmawati', 'sdn9balaiselasa@gmail.com', '$2y$10$abnezlpdvuQZN83Dj5wWKee2M7HHmLYl2fuQKtIKx0wrq7.O.NENi', NULL, NULL),
(181, '10301746', 'Nofriza', 'sdn10gbs.slk@gmail.com', '$2y$10$lah1XC5ORpLBaOF4tgv3e.GF0XQ3PYZr8PXI7/EZ0XwRig0cAOhBS', NULL, NULL),
(182, '10301692', 'Amrul Hamid', 'sdn11kuncir-kabsolok@yahoo.co.id', '$2y$10$xqt5VsDblSsfH4YpvPUtIu8HNrwkW5FaWL3bOgVpubicjZ9dyExLK', NULL, NULL),
(183, '10307920', 'Dina Kurnia Sari', 'sekolahdasarnegerikatialo@gmail.com', '$2y$10$sDbA8P1nHhhnezK7J.xZ1ukwH4UXoloaf7erL.uBDozvofe76OvRa', NULL, NULL),
(184, '10301708', 'Wirda Ningsih', 'sdn14gantingdadok@yahoo.com', '$2y$10$mXMQVSrD74BzRNY9OfscGONSdiu5hzjMYml/CX6j39xhmR4648J6i', NULL, NULL),
(185, '10301467', 'Masrizal', 'sdn16sulitair_kabsolok@yahoo.co.id', '$2y$10$.LWOCq/7uw52GcpOYqNZMuEqjZSx9xfuw.rVYTUImvOqqwiDDNUGS', NULL, NULL),
(186, '10307912', 'xxxx', 'sdnbalailamotanjungbalik@gmail.com', '$2y$10$S500lXFFvKShhxH91NmQ9OauvjP9.4xgWRlG1AW4ww1jOo.ltgNl.', NULL, NULL),
(187, '10307911', 'Reno Yuzar Eka Putra, S.Pd', 'sdn19sulitair_kabsolok@yahoo.com', '$2y$10$qPjtIh6Dz7u743OjfE.kI.f76F46CAgOLwsEDPblQvLtk0HJATA4m', NULL, NULL),
(188, '10307887', 'Nelza Yumaihana, S.Pd', 'sdno21labuahpanjang@gmail.com', '$2y$10$osvFio3UMmJ3epJg.EY87.se4blcIlBdDbrZlhV/p3AfmiCjTVGO6', NULL, NULL),
(189, '10307910', 'Riza Melia Elsya', 'sdn23tanjungbalik@gmail.com', '$2y$10$xxav496WpwZ2VaBv.xX2C.9jVv2KCeG1rGqnAW5tHF/Q30qNrXfFe', NULL, NULL),
(190, '10301452', 'Delvi Hernadi', 'sdn25bukitkandung_kabsolok@yahoo.co.id', '$2y$10$rIxVA/hoHjT8t9jxPODGQe200jA/BmK.NXJujPtzGYSE3N9u5u9Em', NULL, NULL),
(191, '10307886', 'Harsya Indrawan', 'sdn30bukitkandung_kabsolok@yahoo.co.id', '$2y$10$nozngdCM2adqsBwzjmd1reISFphSbhFV/cO9kzzslRpFf2FhjGgke', NULL, NULL),
(192, '10301570', 'Rina Maqdalena', 'rina.maqdalena2510@gmail.com', '$2y$10$bs59X7mYaZbBkDq0uQLlmOXBMlSdGj5ssIBLKp1YXSiMj.JCAFfr.', NULL, NULL),
(193, '10307918', 'Hefni Melda', 'sdn3tanjungbalik@gmail.com', '$2y$10$TE9AmHIHZneaReB9bAXdbuMmelZn1ssgW5Pqb6tQ0uhGOx0ajM8gu', NULL, NULL),
(194, '10307906', 'Rusdi', 'sdn29siberambang@gmail.com', '$2y$10$Lx4XhjcOih9hWixNcU/7VeVElOxhXTZrBG6Js9QyOzakObXd/iE8S', NULL, NULL),
(195, '10301640', 'Maiwasrinita', 'sdn01singkarak@gmail.com', '$2y$10$dA94BrGBX83PgyeDqiPzNOoQuQE5SWFsQ8s80XFR9ooLY8BPC9.UO', NULL, NULL),
(196, '10301657', 'Richi Lolita', 'sdn2kacang@yahoo.co.id', '$2y$10$KRmxNbgs4Ku8Q5XUHO9X7OYpJLCbJHniHrEKTChsuUJwn/ranpEQu', NULL, NULL),
(197, '10301679', 'Siska Sari', 'sdn03tikalak@gmail.com', '$2y$10$JNM8GdU.hE.HKlLYQjLTO.WLSpf3UYLBjdpeIEsemLrcBimZoZxmu', NULL, NULL),
(198, '10307928', 'Dika Oktavia', 'sdn04tanjungalai46@gmail.com', '$2y$10$oDAT0QXfTr6qePAJM6SKzeqY.ceMEzCcr.tqI2svbNr272KGXPPBO', NULL, NULL),
(199, '10301613', 'Bina Marwati', 'sdn05aripan@gmail.com', '$2y$10$jXIFEAhHepjLB1GtrVOIl.tGrZPJODZHphGf3HFTvXKHQb8.JIvPy', NULL, NULL),
(200, '10301618', 'Adri Anton', 'sdn06sumani@gmail.com', '$2y$10$Ko1ZF/TbTzO5fSMEs6p87.oUui.uRTu5UmDcspKD4OS8/SPD2EqPC', NULL, NULL),
(201, '10301757', 'Agri Yani', 'sdn9kacang@gmail.com', '$2y$10$.G4XcE97zquBHXx6g6H5t.pb/.aiLPKWPbJRmkKoSu3FKWZl.xRGC', NULL, NULL),
(202, '10301753', 'Nilam Permata Sari', 'sdn10saniangbaka_kabsolok@rocketmail.com', '$2y$10$Lv4rVyid1Fp6zLnXWZUqWOIU4j7y1g5FCZRAIsAzqt8ULyLRq7PZm', NULL, NULL),
(203, '10301700', 'Lita Yenti', 'sdn11kotosani@gmail.com', '$2y$10$ghY50cJlOyIhgsc47ONBVOqapUAIeOB2IqdpsdJmD17iiQ4rTQruu', NULL, NULL),
(204, '10301713', 'Nelfi Nelfita, S.Pd', 'sdn13sumani_kab.solok@yahoo.co.id', '$2y$10$sX.Wwn3VoBkt1b1bZ6dUOuBZZnmw0IEJ4OiFDnxIenafkFRZme6ki', NULL, NULL),
(205, '10301722', 'Syagita Maulana Fajrint', 'sdn14singkarak_kabsolok@yahoo.co.id', '$2y$10$dEBz9tQuceriW.uO9bA5QeQZ70T7Ux/auF2xNCf6W4LxaPn5BBeni', NULL, NULL),
(206, '10301478', 'Mery Erlina', 'nelihaslinda04@gmail.com', '$2y$10$Dpjt61bMeO4w0cb.BWJzYex85bCG5AdLuErMCyRWQyXiKEKjULd/q', NULL, NULL),
(207, '10308028', 'Deka Putra', 'sdn19saningbaka_kabsolok@yahoo.co.id', '$2y$10$H8DR/sEWpwfMuUGop25O4.LYSwQzA.kY/fer7FZQqnjDhEIzKyxwa', NULL, NULL),
(208, '10301492', 'Ita Gustina, A.Md', 'sdn20saningbakar_kabsolok@yahoo.co.id', '$2y$10$PwEEQI5ee96Ri5fHUCJLC.9lFOa7VXysL8IOiWuoGf7g47/dtmUou', NULL, NULL),
(209, '10307971', 'Rita  Novianti', 'sumanisdnsumani@gmail.com', '$2y$10$dLq688Tw6Q4kf1LOsKtH/ezwT0jw9.Noc2yYDHYbBQIzWtHXOKJDu', NULL, NULL),
(210, '10307997', 'Ria Gustia Betri, A.Md', 'sdn23sumaniinpres@gmail.com', '$2y$10$hf8ZrevtyAdks6RXzSZETeaCA6L.hjFEM55A1GSa4//ueBl.fgThe', NULL, NULL),
(211, '10301426', 'Rahmi Putri', 'sdn24saningbakar@gmail.com', '$2y$10$BQ6KQ3V8iOfwjTubuvQNNO0vbmoqLmcJmvROLj6E0DN1j9qeQemvK', NULL, NULL),
(212, '10301454', 'Eka Putra', 'sdn25kotosani_kabsolok@yahoo.co.id', '$2y$10$hPIM2UOMMMlwJur6AAs6Cu8vDEFjV18XUwcojau55PiQGj8qdvl52', NULL, NULL),
(213, '10301460', 'Bustania Sagita Sari', 'sdn26singkarak_kabsolok@yahoo.co.id', '$2y$10$C1AMKzOjSDSZmo/meYaKTe1uhWivBI5WkZx.IczcPD29Di37xudhS', NULL, NULL),
(214, '10301442', 'Chintia Andesti', 'sdn27tikalak@gmail.com', '$2y$10$ZYQRRyfYZrQbf3vKSrpdwOk7n.xlJ/ENbPEQBMhSHRZCT4PZP06C6', NULL, NULL),
(215, '10301448', 'Lydia Fitri', 'sdn29saningbaka_kabsolok@yahoo.co.id', '$2y$10$VU4tYjScn6OWTor285PnWe797Epr9sOvZqWcgaWixHeeFRGewr18S', NULL, NULL),
(216, '10301505', 'Novi Putri, S.Pd', 'sdn30aripan@yahoo.co.id', '$2y$10$CtcTeIdnx353r8pvcN54bezQvSrfWA02EjTb2dHAOm01cyVrqJkF6', NULL, NULL),
(217, '10301569', 'Ratna Juita', 'sdn32kotosani@gmail.com', '$2y$10$.t5QEfhzSI1iL8kRgr6HeuI67ZxHqtT6vWDpWPeoQ3vn9EMxyVKY.', NULL, NULL),
(218, '10301551', 'Suhatri, A.Md', 'sdn36kacang_kabsolok@yahoo.co.id', '$2y$10$q1Ke0o80IAI/uSPRGDYK.Ovh4wXOkNM/39MOxuG2h9VMGnc0hRlkG', NULL, NULL),
(219, '10301647', 'Martha Liza', 'sdn01muaropingai@gmail.com', '$2y$10$hzUhXjmm65BDrQJJMqWJz.zx6TNHBs0RA/sbKV8ni6EbLWmGIHYpm', NULL, NULL),
(220, '10304202', 'Viky Orlan', 'sdn02paninggahan@gmail.com', '$2y$10$u2VEOGJcmI8e/znhG/3KKeatqZmJyJImu2TltrpPshu8pxRVYhPke', NULL, NULL),
(221, '10301661', 'Dian Marta Riri', 'sdn3paninggahan@yahoo.co.id', '$2y$10$MdfEsVMuj2cU.JC42guh9ekTZJcgdSxiauoUWkmp4rMMrQAmwVPIi', NULL, NULL),
(222, '10301610', 'Ayu Mustika', 'sdn_empatpaninggahan@yahoo.com', '$2y$10$ORr2SG8h.Qt54phqojUuPOFRyYZY39wyuA1z.j7M43UB4hjpv/FWW', NULL, NULL),
(223, '10301727', 'xxxx', 'sdn08muaropingai@gmail.com', '$2y$10$qWwHXnl5fjI3jUO2EU30feW72MAEAsVKMlXfu8UYWjlDe2yQmWMJS', NULL, NULL),
(224, '10301761', 'Misrawati', 'sdn9paninggahan@yahoo.co.id', '$2y$10$PfofRmj148g.Vs.iiyt19uLX8lFNDSK8JvQyocUy82yuuaEyMZv2i', NULL, NULL),
(225, '10301691', 'Reflina Yenti', 'sdn11paninggahanoke@gmail.com', '$2y$10$.q1IIl1oYvKFAASmtM.zIuq9SfGoPmPDvPvTbkmoq2EI6xXOGUZB2', NULL, NULL),
(226, '10307792', 'Febrika Riski', 'sdn14paninggahan_kabsolok@yahoo.co.id', '$2y$10$oNLURxQ0WBofT9s2akHbI.rfJ0OeBkk82lzq2Pv4jlSGxrB0Be5Jq', NULL, NULL),
(227, '10301676', 'Osna Marnita', 'sdn02talangbabungo@gmail.com', '$2y$10$WJjZI1eDDd43.fZj91F8Oe0JTMP0wQb0FwTiceElCo93unIb/AHDW', NULL, NULL),
(228, '10301627', 'Aulia Rahma', 'sdntalang56@gmail.com', '$2y$10$SXoOhAsSZoRg1zKd0/Zcw.c/WIdG3Af2Pn2/AfoRJKAs9OfEreMIS', NULL, NULL),
(229, '10301620', 'Melia Wiherti', 'sdn06sat@yahoo.co.id', '$2y$10$2PhR2e8HvEZt/Jk4b/scq.OVlGbGit6c1P9l7Qg2DW8Fkagp1YUv.', NULL, NULL),
(230, '10301738', 'Nasra Hamdani', 'sdn07sat@yahoo.co.id', '$2y$10$AaTR6S8NoLHnJo15U0NLPuONJpV19wdOVnwM7/.vZsxNYfSAchoxy', NULL, NULL),
(231, '10301755', 'Asmi Uska, S.Pd', 'sdn09talangbabungo@gmail.com', '$2y$10$XlBzhEllov5gLG9Z22FWResKk348rVLAxtA5SSwFiWN43X9GllQcC', NULL, NULL),
(232, '10301482', 'Ferizal Putra', 'sdn15sariakalahantigo@gmail.com', '$2y$10$b9ayM9CokVYAqPasHnHQmubIAGkWqM5spZLX/SBu2G4n/eZ1UhzbO', NULL, NULL),
(233, '69946825', 'Trisna Fauzi', 'sdn22santiago@gmail.com', '$2y$10$VkdMd5HY0jRaCQEKCHWLoeVjd.fzoFv0azulwFK.dLjTBrmGaEAim', NULL, NULL),
(234, '69946985', 'Desri Yulianti', 'sdn25sathiliragumanti@yaho.co.id', '$2y$10$7TJrX9lavAKjsXBxB4CUReWjx1QTv9NOfueBwDcK3Xn4yQa9mmIDW', NULL, NULL),
(235, '10301656', 'Defri Anoza', 'sdn02garabakdata@yahoo.com', '$2y$10$hg.BwoCuS1VXMudO7ICwnubljt15Gg.4Y3gO97sNO3ROQuk13l4xW', NULL, NULL),
(236, '10301662', 'Yoli Sandri', 'sdn03rangkiangluluih@yahoo.co.id', '$2y$10$yzlp/lbPKz9s5y0kaW1uieaSGuyiptUTuyWH4I.pa3ewpHCTzcNqO', NULL, NULL),
(237, '10301626', 'Ramadani', 'sdn05sumiso@yahoo.com', '$2y$10$RMNeT8PxWmPb6xAOI6HUd.GEIO0lbTt/O0YQICbLQb1xEs8gAs2pm', NULL, NULL),
(238, '10301681', 'Firman', 'sdn10sungaidareh@yahoo.co.id', '$2y$10$UlfzAhqoLB3DtJFuj0jQQu51y/ynYb7QdO274jDJcuQnQhsdzO4Na', NULL, NULL),
(239, '10301733', 'Darwin Ritongga', 'sdn08kapujanrkl@gmail.com', '$2y$10$0gThgmZDFe.wZtEV3VMOLemoeBATPl/9IdgRnTcrBwGwyJeX9obxK', NULL, NULL),
(240, '10301716', 'Gusrianto Jamil', 'sdn12tjsumiso@gmail.com', '$2y$10$v64e/2SxJz/xhVCUtSdJK.XdQNgLde1he8WYgcRzwcYgdX4dvIveG', NULL, NULL),
(251, '12345678', 'Yulherniwati', 'sdn01xx@gmail.com', '$2y$10$g3kQar9EKj8X90RcdbWemOgzjOfZmXAN6siOuffidJb1S2TCjnDV.', NULL, NULL),
(252, '11111111', 'xxxx', 'xxxx@gmail.com', '$2y$10$qtwct73/l8wYco333Oins.PWUIo64izX3KLNaUkWMU4TQBOYxx3pm', NULL, NULL),
(253, '87654321', 'Vella', 'sdn02xxx@gmail.com', '$2y$10$otojvS1KLynILiaskVoMOemzon/NaSoAcfUJA.310T1xhSSUbjYOm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_ortu` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `alamat_ortu`, `no_hp_ortu`, `no_kk`, `created_at`, `updated_at`) VALUES
(7, 'Basri', 'Maizil Yanti Fitri', 'Petani', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTP/Sederajat', 'JORONG TARATAK BARU', '082106160005', '1302042106160005', NULL, NULL),
(8, 'Sondri', 'Gusmayanti', 'Pedagang', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SD/Sederajat', 'Jorong Taratak Galundi', '081206082858', '1302040606082858', NULL, NULL),
(9, 'Asep Juhara', 'Amah', 'Petani', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SD/Sederajat', 'Jorong Taluak Dalam', '082112070731', '3205372112070731', NULL, NULL),
(10, 'Reski Ahmad Handika', 'Yulnita', 'Petani', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SD/Sederajat', 'Jorong Taratak Galundi', '081206083160', '1302040606083160', NULL, NULL),
(11, 'Andi Putra', 'Yalmi Yenti', 'Pedagang', 'Karyawan Honorer', 'Diploma III', 'Diploma III', 'Jorong Taratak Galundi', '081210100001', '1302042710100001', NULL, NULL),
(12, 'Ulul Azmi', 'Yetmi Susti', 'Pedagang', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTP/Sederajat', 'Jorong Taratak Galundi', '081206085153', '1302040606085153', NULL, NULL),
(13, 'Syafrizal', 'Yelni', 'Petani', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SD/Sederajat', 'Jorong Taratak Galundi', '081211110011', '1302041611110011', NULL, NULL),
(14, 'Mardito', 'Metdri Irman', 'Wiraswasta', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SD/Sederajat', 'Jorong Taratak Galundi', '081202120008', '1302042002120008', NULL, NULL),
(15, 'Ronal', 'Titi Asmiati', 'Pedagang', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Jorong Taratak Galundi', '081204100009', '1302041204100009', NULL, NULL),
(18, 'Mardi Lestari', 'Afrida Yeni', 'Wiraswasta', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SLTP/Sederajat', 'Taratak Galundi', '081208100003', '1302040109100003', NULL, NULL),
(19, 'Adrianto', 'Resti Oktavia Ferdila Sari', 'Petani', 'Wiraswasta', 'SD/Sederajat', 'SLTA/Sederajat', 'Jorong Taratak Galundi', '081203160003', '1302040803160003', NULL, NULL),
(20, 'Anton Asmara', 'Dewi Santia', 'Wiraswasta', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Batang Pasampan', '081206110003', '1311030106110003', NULL, NULL),
(21, 'Mityanto', 'Meli Yanti', 'Wiraswasta', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SLTA/Sederajat', 'Taratak Galundi', '081212110004', '1302040712110004', NULL, NULL),
(22, 'Wan April', 'Yen Fitri', 'Pedagang', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTP/Sederajat', 'Jorong Taratak Galundi', '081206082336', '1302040606082336', NULL, NULL),
(23, 'Fikri Hamdani, S.Pd', 'Febrisa Yusmita, S.Pd', 'Guru', 'Guru', 'Diploma IV', 'Diploma IV', 'Bengke Pulau Karam', '081202140002', '1301072102140002', NULL, NULL),
(24, 'Antonio Pranata', 'Wit As Nofawati', 'Wiraswasta', 'Wiraswasta', 'Belum Tamat SD/Sederajat', 'SLTP/Sederajat', 'Taratak Galundi', '081208110004', '1302040808110004', NULL, NULL),
(25, 'Eka Mulyadi', 'Fira Sri Yenti', 'Wiraswasta', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Jorong Taratak Galundi', '081204110001', '1302042504110001', NULL, NULL),
(26, 'Romi Yanto', 'Fetris Erina Putri', 'Sopir', 'Ibu Rumah Tangga', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Jorong tTaratak Galundi', '081204150001', '1302042104150001', NULL, NULL),
(27, 'Doni Ermanto', 'Lusi Anggraini', 'Petani', 'Perawat', 'SD/Sederajat', 'Diploma III', 'Taratak Galundi', '081209140002', '1302040909140002', NULL, NULL),
(28, 'Ade Febrianda', 'Rika Indah Mutiara', 'Wiraswasta', 'Ibu Rumah Tangga', 'SD/Sederajat', 'SLTP/Sederajat', 'Taratak Galundi', '081206130001', '1302042706130001', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_pendaftaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pendaftaran` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `no_pendaftaran`, `nik_siswa`, `tanggal_pendaftaran`, `umur`, `kd_sekolah`, `jarak`, `status`, `created_at`, `updated_at`) VALUES
(54, 'PDFT-4544-AM100430', '1302044102140002', '10-14-2020', '6', '10307783', '1015', 'Diterima', NULL, NULL),
(56, 'PDFT-2603-AM070432', '1302044408130002', '10-14-2020', '7', '10307783', '966', 'Diterima', NULL, NULL),
(57, 'PDFT-9639-AM110440', '3205374805130001', '10-14-2020', '7', '10307783', '761', 'Diterima', NULL, NULL),
(58, 'PDFT-4415-AM220440', '3205370805130001', '10-14-2020', '7', '10307783', '761', 'Diterima', NULL, NULL),
(59, 'PDFT-2193-AM570441', '1302041510130004', '10-14-2020', '6', '10307783', '111', 'Diterima', NULL, NULL),
(60, 'PDFT-5355-AM080447', '1302046309130001', '10-14-2020', '7', '10307783', '117', 'Diterima', NULL, NULL),
(61, 'PDFT-9657-AM200448', '1302042503140002', '10-14-2020', '6', '10307783', '262', 'Diterima', NULL, NULL),
(62, 'PDFT-1772-AM040449', '1302040105140002', '10-14-2020', '6', '10307783', '464', 'Diterima', NULL, NULL),
(63, 'PDFT-5595-AM340449', '1302040901140002', '10-14-2020', '6', '10307783', '495', 'Diterima', NULL, NULL),
(64, 'PDFT-1236-AM080455', '1302041406130001', '10-14-2020', '7', '10307783', '631', 'Diterima', NULL, NULL),
(65, 'PDFT-2568-AM470457', '1302044311130001', '10-14-2020', '6', '10307783', '355', 'Diterima', NULL, NULL),
(66, 'PDFT-1205-AM150458', '1302041510140001', '10-14-2020', '6', '10307783', '485', 'Diterima', NULL, NULL),
(67, 'PDFT-3177-AM490458', '1311035507130001', '10-14-2020', '7', '10307783', '401', 'Diterima', NULL, NULL),
(68, 'PDFT-7695-AM150459', '1302045007130001', '10-14-2020', '7', '10307783', '234', 'Diterima', NULL, NULL),
(69, 'PDFT-1717-AM480459', '1302040403140001', '10-14-2020', '6', '10307783', '129', 'Diterima', NULL, NULL),
(70, 'PDFT-2696-AM220500', '1301074705140002', '10-14-2020', '6', '10307783', '427', 'Diterima', NULL, NULL),
(71, 'PDFT-8103-AM000501', '1302044402140002', '10-14-2020', '6', '10307783', '243', 'Diterima', NULL, NULL),
(72, 'PDFT-2932-AM240501', '1302045807130002', '10-14-2020', '7', '10307783', '525', 'Diterima', NULL, NULL),
(73, 'PDFT-3645-AM480501', '1302040507140001', '10-14-2020', '6', '10307783', '284', 'Diterima', NULL, NULL),
(74, 'PDFT-8842-AM140502', '1302067001140001', '10-14-2020', '6', '10307783', '332', 'Diterima', NULL, NULL),
(75, 'PDFT-4370-AM410503', '1302040107130003', '10-14-2020', '7', '10307783', '515', 'Diterima', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_pendaftaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pendaftaran` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `kd_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `no_pendaftaran`, `nik_siswa`, `tanggal_pendaftaran`, `kd_sekolah`, `jarak`, `umur`, `status`, `created_at`, `updated_at`) VALUES
(163, 'PDFT-4544-AM100430', '1302044102140002', '10-14-2020', '10307783', '1015', '6', 'Diterima', NULL, NULL),
(164, 'PDFT-2603-AM070432', '1302044408130002', '10-14-2020', '10307783', '966', '7', 'Diterima', NULL, NULL),
(165, 'PDFT-9639-AM110440', '3205374805130001', '10-14-2020', '10307783', '761', '7', 'Diterima', NULL, NULL),
(166, 'PDFT-4415-AM220440', '3205370805130001', '10-14-2020', '10307783', '761', '7', 'Diterima', NULL, NULL),
(167, 'PDFT-2193-AM570441', '1302041510130004', '10-14-2020', '10307783', '111', '6', 'Diterima', NULL, NULL),
(168, 'PDFT-5355-AM080447', '1302046309130001', '10-14-2020', '10307783', '117', '7', 'Diterima', NULL, NULL),
(169, 'PDFT-9657-AM200448', '1302042503140002', '10-14-2020', '10307783', '262', '6', 'Diterima', NULL, NULL),
(170, 'PDFT-1772-AM040449', '1302040105140002', '10-14-2020', '10307783', '464', '6', 'Diterima', NULL, NULL),
(171, 'PDFT-5595-AM340449', '1302040901140002', '10-14-2020', '10307783', '495', '6', 'Diterima', NULL, NULL),
(172, 'PDFT-1236-AM080455', '1302041406130001', '10-14-2020', '10307783', '631', '7', 'Diterima', NULL, NULL),
(173, 'PDFT-2568-AM470457', '1302044311130001', '10-14-2020', '10307783', '355', '6', 'Diterima', NULL, NULL),
(174, 'PDFT-1205-AM150458', '1302041510140001', '10-14-2020', '10307783', '485', '6', 'Diterima', NULL, NULL),
(175, 'PDFT-3177-AM490458', '1311035507130001', '10-14-2020', '10307783', '401', '7', 'Diterima', NULL, NULL),
(176, 'PDFT-7695-AM150459', '1302045007130001', '10-14-2020', '10307783', '234', '7', 'Diterima', NULL, NULL),
(177, 'PDFT-1717-AM480459', '1302040403140001', '10-14-2020', '10307783', '129', '6', 'Diterima', NULL, NULL),
(178, 'PDFT-2696-AM220500', '1301074705140002', '10-14-2020', '10307783', '427', '6', 'Diterima', NULL, NULL),
(179, 'PDFT-8103-AM000501', '1302044402140002', '10-14-2020', '10307783', '243', '6', 'Diterima', NULL, NULL),
(180, 'PDFT-2932-AM240501', '1302045807130002', '10-14-2020', '10307783', '525', '7', 'Diterima', NULL, NULL),
(181, 'PDFT-3645-AM480501', '1302040507140001', '10-14-2020', '10307783', '284', '6', 'Diterima', NULL, NULL),
(182, 'PDFT-8842-AM140502', '1302067001140001', '10-14-2020', '10307783', '332', '6', 'Diterima', NULL, NULL),
(183, 'PDFT-4370-AM410503', '1302040107130003', '10-14-2020', '10307783', '515', '7', 'Diterima', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_zonasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cadangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp_sekolah` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepala_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `kd_sekolah`, `nama_sekolah`, `alamat_sekolah`, `kd_zonasi`, `lat_sekolah`, `long_sekolah`, `utama`, `cadangan`, `email_sekolah`, `web_sekolah`, `notelp_sekolah`, `kepala_sekolah`, `created_at`, `updated_at`) VALUES
(3, '10301653', 'SDN 01 Talang', 'ARO TALANG', 'GT-02', '-0.903163', '100.646966', NULL, NULL, 'sekolahdasarnegerioitalang@yahoo.com', NULL, NULL, 'Edi Suarman', NULL, NULL),
(4, '10301651', 'SDN 01 Alahan Panjang', 'RA. Kartini No. 252 Alahan Panjang', 'LG-01', '-1.0769199', '100.7853522', NULL, NULL, 'sdn01alahanpanjang@yahoo.co.id', NULL, NULL, 'Jamhur', NULL, NULL),
(5, '10301675', 'SDN 02 Talang', 'Talang', 'GT-02', '-0.9067741', '100.65184996', NULL, NULL, 'sdn2talang_kabsolok@yahoo.co.id', NULL, NULL, 'Jonrivisman', NULL, NULL),
(6, '10301658', 'SDN 03 Cupak', 'Pasar Baru Cupak', 'GT-01', '-0.879857', '100.646895', NULL, NULL, 'sdn3cupak_kabsolok@yahoo.co.id', NULL, NULL, 'Erda Yunita', NULL, NULL),
(7, '10308003', 'SDN 05 Cupak', 'Cupak', 'GT-01', '-0.88351179', '100.65239411', NULL, NULL, 'sdn05cupak@gmail.com', NULL, NULL, 'Arnedi', NULL, NULL),
(8, '10301631', 'SDN 06 Koto Gadang Guguk', 'Jln.Solok-Padang KM-17', 'GT-04', '-0.92104096', '100.633622', NULL, NULL, 'sdn6kotogadangguguk_kabsolok@yahoo.co.id', NULL, NULL, 'Afriyal Is', NULL, NULL),
(9, '10301621', 'SDN 07 Batang Barus', 'Lubuk Selasih', 'GT-07', '-0.95362075', '100.47614582', NULL, NULL, 'sdn07batangbarus@gmail.com', NULL, NULL, 'Oktiviarni', NULL, NULL),
(10, '10301743', 'SDN 08 Cupak', 'JORONG PASAR USANG', 'GT-01', '-0.87986107', '100.64689592', NULL, NULL, 'sdn08cupak_kabsolok@yahoo.co.id', NULL, NULL, 'Yen Arni', NULL, NULL),
(11, '10301694', 'SDN 10  Talang', 'Talang', 'GT-02', '-0.909734', '100.650654', NULL, NULL, 'sdn10talang_kabsolok@yahoo.co.id', NULL, NULL, 'Wirdawasiswina', NULL, NULL),
(12, '10301696', 'SDN 11 Jawi-Jawi Guguk', 'JAWI JAWI GUGUK', 'GT-06', '-0.907424', '100.624064', NULL, NULL, 'sdn11jawi.jawi@gmail.com', NULL, NULL, 'Rosmawita', NULL, NULL),
(13, '10308005', 'SDN 12 Cupak', 'CUPAK', 'GT-01', '-0.891324', '100.660971', NULL, NULL, 'sdn12cupak@gmail.com', NULL, NULL, 'Yulhasni', NULL, NULL),
(14, '10301476', 'SDN 15 Batang Barus', 'Batang Barus', 'GT-07', '-1.0021868', '100.6335526', NULL, NULL, 'sdn15batangbarus@gmail.com', NULL, NULL, 'Anwar Jhond, S.Pd', NULL, NULL),
(15, '10301474', 'SDN 16 Air Batumbuk', 'AIR BATUMBUK', 'GT-08', '-1.01214363', '100.65344419', NULL, NULL, 'sdn16airbatumbuk@gmail.com', NULL, NULL, 'Mulyadi, S.Pd', NULL, NULL),
(16, '10308006', 'SDN 17 Cupak', 'CUPAK', 'GT-01', '-0.88010981', '100.64597491', NULL, NULL, 'sdn17cupakkabsolok@gmail.com', NULL, NULL, 'Noperleni B', NULL, NULL),
(17, '10301490', 'SDN 20 Koto Gaek Guguk', 'Sukarami', 'GT-05', '-0.94361044', '100.62460843', NULL, NULL, 'sdn20kotogaekguguk_kabsolok@yahoo.co.id', NULL, NULL, 'Ermayulis', NULL, NULL),
(18, '10308007', 'SDN 21 Cupak', 'CUPAK', 'GT-01', '-0.87597467', '100.65907717', NULL, NULL, 'ningsih.yatri@yahoo.co.id', NULL, NULL, 'Afrizal', NULL, NULL),
(19, '10301419', 'SDN 23 Jawi-Jawi', 'JAWI-JAWI', 'GT-06', '-0.885791', '100.627355', NULL, NULL, 'sdn23jawijawiguguk@gmail.com', NULL, NULL, 'Asmaizar', NULL, NULL),
(20, '10308008', 'SDN 24 Sungai Jernih', 'SUNGAI JERNIH', 'GT-03', '-0.92049252', '100.6675268', NULL, NULL, 'sdn24Sungaijernih@gmail.com', NULL, NULL, 'Porlis Desbet, S.Pd', NULL, NULL),
(21, '10301455', 'SDN 25 Talang', 'KOTO GADANG TALANG', 'GT-02', '-0.918460', '100.648049', NULL, NULL, 'sdn25talang.gunungtalang@gmail.com', NULL, NULL, 'Marfiayeni', NULL, NULL),
(22, '10308011', 'SDN 29 Cupak', 'TANGAH PADANG CUPAK', 'GT-01', '-0.87985403', '100.64689592', NULL, NULL, 'sdn29cupak@gmail.com', NULL, NULL, 'Gusnimar S', NULL, NULL),
(23, '10301549', 'SDN 30 Koto Gadang', 'KOTO GADANG GUGUK', 'GT-04', '-0.9377677', '100.62897675', NULL, NULL, 'sdn30kgg@gmail.com', 'http://www.sdn30kotogadangguguk', NULL, 'Lasmiarti', NULL, NULL),
(24, '10301564', 'SDN 31 Batang Barus', 'BATANG BARUS', 'GT-07', '-0.82986053', '100.63594211', NULL, NULL, 'xxxx@gmail.com', NULL, NULL, 'xxxx', NULL, NULL),
(25, '10308013', 'SDN 32 Air Batumbuk', 'KOTO ATEH', 'GT-08', '-1.02580196', '100.67403618', NULL, NULL, 'sad32airbatumbuk_kabsolok@yahoo.co.id', NULL, NULL, 'Aril', NULL, NULL),
(26, '10308015', 'SDN 33 Cupak', 'CUPAK', 'GT-01', '-0.878516', '100.651387', NULL, NULL, 'sdn33cupak.kabsolok@gmail.com', NULL, NULL, 'Bismi Andesta', NULL, NULL),
(27, '10308016', 'SDN 35 Cupak', 'CUPAK', 'GT-01', '-0.890015', '100.645220', NULL, NULL, 'sdn35cupak@gmail.com', NULL, NULL, 'Setia Nova Fetra', NULL, NULL),
(28, '10308017', 'SDN 36 Cupak', 'CUPAK', 'GT-01', '-0.888089', '100.654721', NULL, NULL, 'sdn36cupak@gmail.com', NULL, NULL, 'Rita Siska', NULL, NULL),
(29, '10301553', 'SDN 37 Koto Gadang Guguk', 'ALAI DAMA KOTO GADANG GUGUK', 'GT-04', '-0.91581535', '100.63121036', NULL, NULL, 'sdntigatujuh_kgg@yahoo.co.id', NULL, NULL, 'Eidmond', NULL, NULL),
(30, '10301556', 'SDN 38 Koto Gaek Guguk', 'LIJUANG KOTO TINGGI', 'GT-05', '- 0.924760', '100.619078', NULL, NULL, 'sdn38kotogaekguguk_kabsolok@yahoo.co.id', NULL, NULL, 'Tismarni', NULL, NULL),
(31, '10301571', 'SDN 39 Talang', 'TALANG', 'GT-02', '-0.902515', '100.643736', NULL, NULL, 'sdn39talangkab.solok@yahoo.co.id', NULL, NULL, 'Kamal Ausaf', NULL, NULL),
(32, '10301572', 'SDN 40 Kayu Aro Batang Barus', 'JALAN TABEK KAYU ARO BATANG BARUS', 'GT-07', '-0.97042577', '100.61829686', NULL, NULL, 'sdn40batangbarus@gmail.com', NULL, NULL, 'Hj. Yuarti, S.Pd.I', NULL, NULL),
(33, '10301584', 'SDN 41 Batang Barus', 'BATANG BARUS', 'GT-07', '-1.01016246', '100.63952185', NULL, NULL, 'sdn41batangbarus_Kabsolok@yahoo.com', NULL, NULL, 'Mukhsis', NULL, NULL),
(34, '10301585', 'SDN 42 Air Batumbuk', 'JORONG MADANG', 'GT-08', '-1.01409832', '100.64567886', NULL, NULL, 'sdn42airbatumbuk_kabsolok@yahoo.co.id', NULL, NULL, 'Deprial', NULL, NULL),
(35, '10308002', 'SDN 04 Cupak', 'CUPAK', 'GT-01', '-0.88057177', '100.64676382', NULL, NULL, 'sdn04cupak@gmail.com', NULL, NULL, 'Itriyanti', NULL, NULL),
(36, '10308004', 'SDN 09 Sungai Jernih', 'JORONG BUNGO TANJUANG', 'GT-03', '-0.917013', '100.669166', NULL, NULL, 'sdn09sungaijernih.kabsolok@gmail.com', NULL, NULL, 'Farida Yarni', NULL, NULL),
(37, '10301500', 'SDN 18 Batang Barus', 'KAYU ARO', 'GT-07', '-0.96086941', '100.60982678T', NULL, NULL, 'sdn18batangbarus@gmail.com', NULL, NULL, 'Rosna Erlinda', NULL, NULL),
(38, '69982416', 'SDN 43 Anau Kadok Talang', 'JALAN TALANG SUNGAI JERNIH', 'GT-03', '-0.89475962', '100.64781189', NULL, NULL, 'sdn43anaukadoktalang.kabsolok@gmail.com', NULL, NULL, 'Erlina Roza', NULL, NULL),
(39, '10301654', 'SDN 01 Kampung Batu Dalam', 'Jalan Pasar Pangkalan - Kampung Dalam', 'DK-01', '-1.02604534', '100.71542267', NULL, NULL, 'kbdsdn1@gmail.com', NULL, NULL, 'Zulfahmi', NULL, NULL),
(40, '10301672', 'SDN 02 Simpang Tanjung Nan IV', 'Simpang Tj. Nan IV', 'DK-02', '-1.05694095', '100.7193806', NULL, NULL, 'sdn02stnaniv_kabsolok@yahoo.co.id', NULL, NULL, 'Marzeli', NULL, NULL),
(41, '10301734', 'SDN 08 Kampung Batu Dalam', 'sdn08kbd_kabsolok@yahoo.co.id', 'DK-01', '-0.99230637', '100.71273912', NULL, NULL, 'sdn08kbd_kabsolok@yahoo.co.id', NULL, NULL, 'Ermanto', NULL, NULL),
(42, '10301764', 'SDN 09 Simpang Tanjung Nan IV', 'JORONG PASAR SIMPANG TANJUNG NAN IV', 'DK-02', '-1.05143967', '100.74570414', NULL, NULL, 'sdn09kbd_kabsolok@yahoo.co.id', NULL, NULL, 'Jus Amperani Gusti Jaya', NULL, NULL),
(43, '10301723', 'SDN 10 Simpang Tanjung Nan IV', 'AKA GADANG', 'DK-02', '-1.04243465', '100.69481727', NULL, NULL, 'sdn10kbd_kabsolok@yahoo.co.id', NULL, NULL, 'Hendrita', NULL, NULL),
(44, '10301697', 'SDN 11 Kampung Batu Dalam', 'Kampung Batu Dalam', 'DK-01', '-1.02142831', '100.72270185', NULL, NULL, 'sdnkbdkabsolok@gmail.com', NULL, NULL, 'Yulsafrida', NULL, NULL),
(45, '10301593', 'SDN 04 Kampung Batu Dalam', 'Kampung Batu Dalam', 'DK-01', '-1.02531086', '100.74321304', NULL, NULL, 'sdn04kbd-kabsolok@yahoo.co.id', NULL, NULL, 'Sudirman', NULL, NULL),
(46, '10301617', 'SDN 06 Simpang Tanjung Nan IV', 'Simpang Tanjung Nan IV', 'DK-02', '-1.056921', '100.719377', NULL, NULL, 'sdn06stnaniv_kabsolok@yahoo.co.id', NULL, NULL, 'Harmainis', NULL, NULL),
(47, '10301668', 'SDN 03 Air Dingin', 'KOTO AIR DINGIN', 'LG-04', '-1.1289421', '100.7819130', NULL, NULL, 'sdn3airdingin_kabsolok@yahoo.co.id', NULL, NULL, 'Kamirus', NULL, NULL),
(48, '10301611', 'SDN 04 Salimpat', 'SALIMPAT', 'LG-03', '-1.07212802', '100.81382487', NULL, NULL, 'sdnsalimpat070@gmail.com', NULL, NULL, 'Syamsul Bahri', NULL, NULL),
(49, '10308075', 'SDN 05 Air Dingin', 'AIR DINGIN', 'LG-04', '-1.08271249', '100.77971153', NULL, NULL, 'sdn05airdingin-kabsolok@yahoo.co.id', NULL, NULL, 'Mukhni Dwi Putra', NULL, NULL),
(50, '10301619', 'SDN 06 Sungai Nanam', 'JLN. SYECH KACIAK JORONG TARATAK PAUH', 'LG-02', '-1.01168438', '100.78872308', NULL, NULL, 'sdn6sungainanam_kabsolok@yahoo.co.id', NULL, NULL, 'Zulfadli', NULL, NULL),
(51, '10308076', 'SDN 07 Alahan Panjang', 'ALAHAN PANJANG', 'LG-01', '-1.095207', '100.779085', NULL, NULL, 'sdn7alahanpanjang_kabsolok@yahoo.co.id', NULL, NULL, 'Nurlisma', NULL, NULL),
(52, '10301741', 'SDN 08 Alahan Panjang', 'ALAHAN PANJANG', 'LG-01', '-1.08218754', '100.78541458', NULL, NULL, 'sdn8alahanpanjang_kabsolok@yahoo.co.id', NULL, NULL, 'Umul Khairi, S.Pd', NULL, NULL),
(53, '10301756', 'SDN 09 Sungai Nanam', 'SUNGAI NANAM', 'LG-02', '-1.02670271', '100.7843245', NULL, NULL, 'sdn9sungainanam_kabsolok@yahoo.co.id', NULL, NULL, 'Evamurti', NULL, NULL),
(54, '10301702', 'SDN 12 Salimpat', 'SALIMPAT', 'LG-03', '-1.07398713', '100.8027802', NULL, NULL, 'sdn12salimpat_kabsolok@yahoo.co.id', NULL, NULL, 'Adrizal', NULL, NULL),
(55, '10301487', 'SDN 19 Sungai Nanam', 'SUNGAI NANAM', 'LG-02', '-1.03046021', '100.79049669', NULL, NULL, 'sdn19sungainanam_kabsolok@yahoo.co.id', NULL, NULL, 'Yurdinal', NULL, NULL),
(56, '10301418', 'SDN 23 Air Dingin', 'AIE DINGIN', 'LG-04', '-1.073571', '100.793053', NULL, NULL, 'sdn23.airdingin@yahoo.com', NULL, NULL, 'Nurhemawati', NULL, NULL),
(57, '10301439', 'SDN 25 Air Dingin', 'DATA AIR DINGIN', 'LG-04', '-1.12192282', '100.78446474', NULL, NULL, 'sdn25airdinginkabsolok@yahoo.com', NULL, NULL, 'Maryunis', NULL, NULL),
(58, '10301451', 'SDN 26 Sungai Nanam', 'Sungai Nanam', 'LG-02', '-1.00002494', '100.77446513', NULL, NULL, 'xxxx@gmail.com', NULL, NULL, 'Musrizal', NULL, NULL),
(59, '10301446', 'SDN 28 Sungai Nanam', 'Sungai Nanam', 'LG-02', '-1.030351', '100.780498', NULL, NULL, 'sdn28sungainanam-kabsolok@yahoo.co.id', NULL, '082174913409', 'Aprizal', NULL, NULL),
(60, '10301447', 'SDN 29 Air Dingin', 'Jalan Padang Muara Labuh Jorong Cubadak Aie Dingin', 'LG-04', '-1.148455', '100.815201', NULL, NULL, 'sdn29airdinginkabsolok@gmail.com', NULL, NULL, 'Milfatra', NULL, NULL),
(61, '10301563', 'SDN 31 Alahan Panjang', 'Alahan Panjang', 'LG-01', '-1.08235649', '100.77401418', NULL, NULL, 'sdn31alahanpanjang_kabsolok@yahoo.co.id', NULL, NULL, 'Efni Zahara', NULL, NULL),
(62, '60730046', 'SDN 34 Air Dingin', '60730046', 'LG-04', '-1.13413053', '100.77744238', NULL, NULL, 'sdn34airdingin_kabsolok@yahoo.co.id', NULL, NULL, 'Ermis', NULL, NULL),
(63, '69934242', 'SDN 36 Salimpat', 'JORONG AIA KARUAH', 'LG-03', '-1.07269889', '100.82821626', NULL, NULL, 'sd36salimpat@gmail.com', NULL, NULL, 'Wilda Safia', NULL, NULL),
(64, '10301673', 'SDN 02 Sungai Nanam', 'SUNGAI NANAM', 'LG-02', '-1.03366024', '100.77930987', NULL, NULL, 'sdn02sn@gmail.com', NULL, NULL, 'Farmi, S.Pd,S.D', NULL, NULL),
(65, '10307783', 'SDN 11 Alahan Panjang', 'JALAN TEUKU UMAR', 'LG-01', '-1.06949354', '100.77708531', '21', '3', 'sdn11alahanpanjangkabsolok@yahoo.co.id', 'http://www', '075560203', 'Karma Elida, S.Pd', NULL, NULL),
(66, '10301503', 'SDN 18 Sungai Nanam', 'SUNGAI NANAM', 'LG-02', '-1.01028079', '100.77440646', NULL, NULL, 'sdn18sungainanam_kabsolok@yahoo.co.id', NULL, NULL, 'Kaizer Erman', NULL, NULL),
(67, '10301489', 'SDN 20 Alahan Panjang', 'ALAHAN PANJANG', 'LG-01', '-1.07286717', '100.78308273', NULL, NULL, 'sdn20alahanpanjang17@gmail.com', NULL, NULL, 'Irman', NULL, NULL),
(68, '10301441', 'SDN 27 Sungai Nanam', 'SUNGAI NANAM', 'LG-02', '-1.04729233', '100.75855561', NULL, NULL, 'sdn27sungainanam_kabsolok@yahoo.co.id', NULL, NULL, 'Syafriono', NULL, NULL),
(69, '10301561', 'SDN 32 Sungai Nanam', 'SUNGAI NANAM', 'LG-02', '-0.99660832', '100.77844821', NULL, NULL, 'sdn32sungainanam@gmail.com', NULL, NULL, 'Elidelfita', NULL, NULL),
(70, '10301428', 'SDN 22 Salimpat', 'SALIMPAT', 'LG-03', '-1.07270593', '100.82821626', NULL, NULL, 'sdn22salimpat_kabsolok@yahoo.co.id', 'http://www.sdn22', NULL, 'Sayuti', NULL, NULL),
(71, '10307784', 'SDN 30 Sungai Nanam', 'TARATAK PAUH SUNGAI NANAM', 'LG-02', '-1.02670975', '100.78432459', NULL, NULL, 'piona87@yahoo.com', NULL, NULL, 'Hj. Tatisra', NULL, NULL),
(72, '10301637', 'SDN 01 Pada Surian', 'NANGGALO SURIAN', 'PC-01', '-1.250411', '100.883785', NULL, NULL, 'sdn01pssurian@gmail.com', NULL, '082285456602', 'Riritmi', NULL, NULL),
(73, '10301644', 'SDN 02 Gaduang Surian', 'GADUANG SURIAN', 'PC-01', '-1.264087', '100.897252', NULL, NULL, 'sdn02gaduang_kabsolok@yahoo.co.id', NULL, NULL, 'Muryenis', NULL, NULL),
(74, '10308081', 'SDN 03 Pasa Lolo', 'PASA LOLO', 'PC-02', '-1.206076', '100.854616', NULL, NULL, 'sdn03pasalolo_kabsolok@yahoo.co.id', NULL, '082173044957', 'Adril, S.Pd', NULL, NULL),
(75, '10301605', 'SDN 04 Kayu Manang Surian', 'KAYU MANANG', 'PC-01', '-1.25162503', '100.89550015', NULL, NULL, 'sdn04_kayumanang@yahoo.com', NULL, NULL, 'Elinawenita', NULL, NULL),
(76, '10301594', 'SDN 05 Aia Daliak Lolo', 'AIA DALIAK LOLO', 'PC-02', '-1.224407', '100.865713', NULL, NULL, 'sdn05aiadaliak@gmail.com', NULL, NULL, 'Saidi', NULL, NULL),
(77, '10301632', 'SDN 06 Ladang Padi', 'LADANG PADI', 'PC-01', '-1.258337', '100.877039', NULL, NULL, 'sdn06ladangpadi_kabsolok@yahoo.co.id', NULL, NULL, 'Mardiati', NULL, NULL),
(78, '10301680', 'SDN 07 Jalan Balantai Surian', 'JALAN BALANTAI', 'PC-01', '-1.276255', '100.909318', NULL, NULL, 'sdn07jalanbalantai_kabsolok@yahoo.co.id', NULL, NULL, 'Zulkifli', NULL, NULL),
(79, '10301732', 'SDN 08 Tambang Surian', 'TAMBANG SURIAN', 'PC-01', '-1.245003', '100.897020', NULL, NULL, 'sdntambang927@gmail.com', NULL, NULL, 'Bakri S, S.Pd', NULL, NULL),
(80, '10301749', 'SDN 10 Koto Tinggi Surian', 'KOTO TINGGI', 'PC-01', '-1.250875', '100.869642', NULL, NULL, 'sdn10kototinggisurian_kabsolok@yahoo.co.id', NULL, NULL, 'xxxx', NULL, NULL),
(81, '10301686', 'SDN 12 Jalan Balantai Surian', 'JALAN BALANTAI', 'PC-01', '-1.62947876', '100.65903191', NULL, NULL, 'sdn12jalanbalantai_kabsolok@yahoo.co.id', NULL, NULL, 'xxxx', NULL, NULL),
(82, '10301704', 'SDN 13 Ulu Lolo', 'ULU LOLO', 'PC-02', '-1.21877594', '100.85643545', NULL, NULL, 'gusmayuneri@yahoo.co.id', NULL, NULL, 'Rozalini', NULL, NULL),
(83, '10301707', 'SDN 14 Dalam Koto Surian', 'JORONG DALAM KOTO', 'PC-01', '-1.25162503', '100.89550015', NULL, NULL, 'sdn14dalamkoto@gmail.com', NULL, NULL, 'Darwin', NULL, NULL),
(84, '10301494', 'SDN 19 Banto Lolo', 'BANTO LOLO', 'PC-02', '-1.203192', '100.853081', NULL, NULL, 'sdn19bantololo_kabsolok@yahoo.co.id', NULL, NULL, 'Mayar', NULL, NULL),
(85, '10301491', 'SDN 20 Lubuk Rasam Surian', 'JORONG LUBUK RASAM SURIAN', 'PC-01', '-1.300704', '100.985658', NULL, NULL, 'tedi_nofembra@yahoo.com', NULL, NULL, 'Ratnawati', NULL, NULL),
(86, '10301641', 'SDN 01 Sirukam', 'JALAN BALAI GANTIANG SIRUKAM', 'PS-01', '-0.890131', '100.756432', NULL, NULL, 'sdn01sirukam@yahoo.co.id', NULL, NULL, 'Yeni Satria', NULL, NULL),
(87, '10301674', 'SDN 02 Supayang', 'SUPAYANG', 'PS-02', '-0.863720', '100.769288', NULL, NULL, 'sdn2supayang@yahoo.co.id', NULL, NULL, 'Afrizon, S.Pd', NULL, NULL),
(88, '10301669', 'SDN 03 Aie Luo', 'AIA LUO', 'PS-03', '-0.84255709', '100.87901697', NULL, NULL, 'sdn03aieluo-kabsolok@yahoo.co.id', NULL, NULL, 'Yuheldi', NULL, NULL),
(89, '10301614', 'SDN 05 Sirukam', 'JLN TANAH LAPANG KUBANG NAN DUO', 'PS-01', '-0.905454', '100.742385', NULL, NULL, 'sdn05sirukam@gmail.com', NULL, NULL, 'Yanti, S.Pd', NULL, NULL),
(90, '10301616', 'SDN 06 Sirukam', 'SIRUKAM', 'PS-01', '-0.799489', '100.652758', NULL, NULL, 'sdn6sirukamkabsolok@yahoo.co.id', NULL, NULL, 'Yon Wismon', NULL, NULL),
(91, '10301739', 'SDN 07 Sirukam', 'SIRUKAM', 'PS-01', '-0.891013', '100.752665', NULL, NULL, 'sdn7sirukam_kabsolok@yahoo.co.id', NULL, NULL, 'xxxx', NULL, NULL),
(92, '10301731', 'SDN 08 Supayang', 'JLN.SIMPANG SAWAH BUNGO', 'PS-02', '-0.869277', '100.761843', NULL, NULL, 'sdnsupayang08@gmail.com', NULL, NULL, 'xxxx', NULL, NULL),
(93, '10301765', 'SDN 09 Sirukam', 'SIRUKAM', 'PS-01', '-0.93654913', '100.78872308', NULL, NULL, 'sdn09sirukamkapuk@gmail.com', NULL, NULL, 'Irwan, S.Pd', NULL, NULL),
(94, '10301671', 'SDN 02 Selayo Tanang', 'SALAYO TANANG', 'LJ-01', '-0.98929436', '100.73144015', NULL, NULL, 'fitrimelia8@gmail.com', NULL, NULL, 'xxxx', NULL, NULL),
(95, '10301667', 'SDN 03 Batu Banyak', 'BATU BANYAK', 'LJ-03', '-0.900676', '100.698685', NULL, NULL, 'sdn03batunayak-kabsolok@yahoo.co.id', NULL, NULL, 'Ermawita', NULL, NULL),
(96, '10301608', 'SDN 04 Koto Laweh', 'KOTO LAWEH', 'LJ-05', '-0.42498709', '100.37288915', NULL, NULL, 'sdn04kotolaweh_kabsolok@yahoo.co.id', NULL, NULL, 'Aida, S.Pd, S.D', NULL, NULL),
(97, '10301595', 'SDN 05 Batu Bajanjang', 'BATU BAJANJANG', 'LJ-06', '-0.947340', '100.705637', NULL, NULL, 'sdn5batubajanjang@gmail.com', NULL, NULL, 'Asdjunaidi', NULL, NULL),
(98, '10301633', 'SDN 06 Limau Lunggo', 'JL.JORONG BANDA PANAI', 'LJ-04', '-0.919539', '100.703050', NULL, NULL, 'sdn06limaulunggo_kabsolok@yahoo.co.id', NULL, NULL, 'Yunetti', NULL, NULL),
(99, '10301726', 'SDN 08 Koto Anau', 'JORONG PANTA', 'LJ-02', '-0.905398', '100.689317', NULL, NULL, 'sdn08kotoanau@gmail.com', NULL, NULL, 'Sarniati M', NULL, NULL),
(100, '10301758', 'SD N 09 Koto Anau', 'JL.RAYA KOTO ANAU CUPAK', 'LJ-02', '-0.916846', '100.680121', NULL, NULL, 'sdn09kotoanau_kabsolok@yahoo.co.id', NULL, NULL, 'Yarneli', NULL, NULL),
(101, '10301699', 'SDN 11 Koto Laweh', 'KOTO LAWEH', 'LJ-05', '-0.940352', '100.730373', NULL, NULL, 'sdn11kotolaweh_kabsolok@yahoo.co.id', 'http://www.sdn11kotolaweh', NULL, 'Asnimar', NULL, NULL),
(102, '10301714', 'SDN 12 Selayo Tanang Bukit Sileh', 'SELAYO TANANG', 'LJ-01', '-0.963898', '100.718085', NULL, NULL, 'sdn12selayotanang@gmail.com', NULL, NULL, 'Yasmanida', NULL, NULL),
(103, '10301717', 'SDN 13 Batu Bajanjang', 'BATU BAJANJANG', 'LJ-06', '-0.97604017', '100.71866009', NULL, NULL, 'sdn13batubajanjang_kabsolok@yahoo.co.id', NULL, NULL, 'Dasril', NULL, NULL),
(104, '10301479', 'SDN 15 Koto Anau', 'KOTO ANAU', 'LJ-02', '-0.902904', '100.669210', NULL, NULL, 'sdn15kdjkotoanau@gmail.com', NULL, NULL, 'Yunita', NULL, NULL),
(105, '10301465', 'SDN 16 Koto Laweh', 'JORONG KUBANG RABAH', 'LJ-05', '-0.934118', '100.722117', NULL, NULL, 'sdn16ktlw@gmail.com', NULL, NULL, 'Nazuar', NULL, NULL),
(106, '10301483', 'SDN 17 Batu Banyak', 'BATU BANYAK', 'LJ-03', '-0.906084', '100.702207', NULL, NULL, 'sdn17batubanyak_kabsolok@yahoo.co.id', NULL, NULL, 'Refna Saswati', NULL, NULL),
(107, '10307791', 'SDN 19 Koto Anau', 'KOTO ANAU', 'LJ-02', '-0.889539', '100.687812', NULL, NULL, 'sdn19kotoanau_kabsolok@yahoo.co.id', NULL, NULL, 'Ermi Yanti', NULL, NULL),
(108, '10301462', 'SDN 20 Selayo Tanang Bukit Sileh', 'SELAYO TANANG', 'LJ-01', '-0.9760236', '100.7185279', NULL, NULL, 'sdn20stbslbjaya@gmail.com', NULL, NULL, 'Misrawati', NULL, NULL),
(109, '10301435', 'SDN 22 Batu Bajanjang', 'BATU BAJANJANG', 'LJ-06', '-0.98847138', '100.70415102', NULL, NULL, 'sdn22babajanjang_kabsolok@yahoo.co.id', NULL, NULL, 'Mhd. Danil', NULL, NULL),
(110, '10307790', 'SDN 23 Koto Anau', 'JORONG TABEK LACU', 'LJ-02', '-0.9221683', '100.6809258', NULL, NULL, 'sdn23kotoanaulembja@gmail.com', NULL, NULL, 'Yunasrizal', NULL, NULL),
(111, '10301655', 'SDN 01 KOTO ANAU', 'JORONG BALAI TINGGI NAGARI KOTO GADANG KOTO ANAU', 'LJ-02', '-0.9578366', '100.7120522', NULL, NULL, 'www.sdn01kotoanau@gmail.com', NULL, NULL, 'Yuliarni', NULL, NULL),
(112, '10301502', 'SDN 18 Limau Lunggo', 'LIMAU LUNGGO', 'LJ-04', '-0.9233685', '100.6917482', NULL, NULL, 'sdn18limaulunggo@gmail.com', NULL, NULL, 'Rostinar', NULL, NULL),
(113, '69990958', 'SDN 25 Koto Laweh', 'JALAN PAKAN RABA`A JORONG TARATAK BARU', 'LJ-05', '-0.32690284', '100.32543585', NULL, NULL, 'xxxx@gmail.com', NULL, NULL, 'xxxx', NULL, NULL),
(114, '10301709', 'SDN 14 Koto Anau', 'JR.PAKAN KAMIH KARAK BATU', 'LJ-02', '-0.8829141', '100.6727138', NULL, NULL, 'sdn14kotoanau_kabsolok@yahoo.co.id', NULL, NULL, 'Lafrizal', NULL, NULL),
(115, '10301646', 'SDN 01 MUARA PANAS', 'MUARA PANAS', 'BS-01', '-0.8503507', '100.69016', NULL, NULL, 'sdnegeri01muarapanas@gmail.com', NULL, NULL, 'Yelvarina', NULL, NULL),
(116, '10301670', 'SD N 02 MUARA PANAS', 'MUARA PANAS', 'BS-01', '-0.861061', '100.6667781', NULL, NULL, 'sdn02mp@yahoo.com', NULL, NULL, 'Nong Yetti', NULL, NULL),
(117, '10301606', 'SDN 04 KINARI', 'KINARI', 'BS-02', '-0.8665346', '100.6985412', NULL, NULL, 'sdn04kinari_kabsolok@yahoo.co.id', NULL, NULL, 'Syafriyanto', NULL, NULL),
(118, '10301622', 'SDN 07 Bukit Tandang', 'SD N 07 BUKIT TANDANG', 'BS-05', '-0.8391154', '100.7086277', NULL, NULL, 'sdn07bukittandang@gmail.com', NULL, NULL, 'Junaidi', NULL, NULL),
(119, '10301725', 'SDN 08 Kinari', 'KINARI', 'BS-02', '-0.8690405', '100.6985223', NULL, NULL, 'sdn08Ppamujankinari@gmail.com', NULL, NULL, 'Syafrijal.R', NULL, NULL),
(120, '10301760', 'SDN 09 Muara Panas', 'BALAI PINANG', 'BS-01', '-0.8715035', '100.6831824', NULL, NULL, 'sdn09muarapanas@gmail.com', NULL, NULL, 'Asniar', NULL, NULL),
(121, '10301750', 'SDN 10 Muara Panas', 'MUARO PANEH', 'BS-01', '-0.8490146', '100.6827013', NULL, NULL, 'sdn10muarapanas_kabsolok@yahoo.co.id', NULL, NULL, 'Elza Fermi', NULL, NULL),
(122, '10301698', 'SDN 11 Kinari', 'KINARI', 'BS-02', '-0.8624954', '100.699597', NULL, NULL, 'sdnkinari11@gmail.com', NULL, NULL, 'Yosrita', NULL, NULL),
(123, '10301685', 'SDN 12 Dilam', 'JALAN TANAH LAPANG DILAM', 'BS-04', '-0.9130483', '100.7293976', NULL, NULL, 'sdn12dilam_kabsolok@yahoo.co.id', NULL, NULL, 'Nurjasmi', NULL, NULL),
(124, '10308068', 'SDN 13 Bukit Tandang', 'KOTO TINGGA BUKIT TANDANG', 'BS-05', '-0.8466226', '100.7047876', NULL, NULL, 'sdn13bukittandang_kabsolok@yahoo.co.id', NULL, NULL, 'Erizal N', NULL, NULL),
(125, '10308070', 'SDN 15 Muara Panas', 'KOTO PANJANG', 'BS-01', '-0.8435999', '100.677245', NULL, NULL, 'sdn15muarapanas_kabsolok@yahoo.co.id', NULL, NULL, 'Fidrawati', NULL, NULL),
(126, '10301493', 'SDN 19 Dilam', 'DILAM', 'BS-04', '-0.9018646', '100.7187243', NULL, NULL, 'sdn19dilam_kabsolok@yahoo.co.id', NULL, NULL, 'Zul Afnan', NULL, NULL),
(127, '10308073', 'SDN 20 Muara Panas', 'MUARA PANAS', 'BS-01', '-0.8600271', '100.6713573', NULL, NULL, 'muarapanas84@gmail.com', NULL, NULL, 'Indra Wati', NULL, NULL),
(128, '10301660', 'SDN 03 Muara Panas', 'JL. MUARA PANAS - KINARI', 'BS-01', '-0.8532324', '100.689304', NULL, NULL, 'sdn03kkmp@gmail.com', 'http://sdn03kkmp.sch.id', NULL, 'Edison', NULL, NULL),
(129, '10301599', 'SDN 05 Parambahan', 'PARAMBAHAN', 'BS-03', '-0.880647', '100.7107886', NULL, NULL, 'sdn05parambahan_kabsolok@yahoo.co.id', NULL, NULL, 'Syafrizal.M', NULL, NULL),
(130, '10301629', 'SDN06 Batu Sangka Dilam', 'BATU SANGKA DILAM', 'BS-04', '-0.91791592', '100.74360833', NULL, NULL, 'sdn06dilam_kabsolok@yahoo.co.id', NULL, NULL, 'Rita Andriani', NULL, NULL),
(131, '10308029', 'SDN 01 Saok Laweh', 'JL PINCURAN BARUAH SAOK LAWEH', 'K-03', '-0.7908622', '100.673668', NULL, NULL, 'soaklaweh.sdn01@gmail.com', NULL, NULL, 'Ali Candra', NULL, NULL),
(132, '10307935', 'SDN 02 Tanjung Bingkung', 'TJ BINGKUANG', 'K-04', '-0.7650301', '100.6214186', NULL, NULL, 'ramadani_irant@yahoo.com', NULL, NULL, 'Liza', NULL, NULL),
(133, '10307936', 'SDN 03 Koto Baru', 'KOTO BARU', 'k-08', '-0.7650301', '100.6214186', NULL, NULL, 'sdn3kotobaru_kabsolok@yahoo.co.id', NULL, NULL, 'Hasni', NULL, NULL),
(134, '10301607', 'SDN 04 Koto Hilalang', 'KOTO HILALANG', 'K-06', '-0.8229395', '100.3800547', NULL, NULL, 'sdn04kotohilalang@yahoo.com', NULL, NULL, 'Sudirman', NULL, NULL),
(135, '10301600', 'SDN 05 Selayo', 'SELAYO', 'K-07', '-0.8151353', '100.6485478', NULL, NULL, 'sdn05selayo@gmail.com', NULL, NULL, 'Suherningsih', NULL, NULL),
(136, '10307937', 'SDN 06 Panyakalan', 'PANYAKALAN', 'K-02', '-0.8128436', '100.6919148', NULL, NULL, 'sdn6panyakalan@yahoo.co.id', NULL, NULL, 'Hidayati, S.Pd', NULL, NULL),
(137, '10307938', 'SDN 07 Guang', 'GAUNG', 'K-01', '-0.8054991', '100.6721472', NULL, NULL, 'sdn78gaung@gmail.com', NULL, NULL, 'Yasril', NULL, NULL),
(138, '10301730', 'SDN 08 Selayo', 'SAWAH SUDUT', 'K-07', '-0.819879', '100.6368976', NULL, NULL, 'sdn8selayo@yahoo.co.id', NULL, NULL, 'Haniusnita', NULL, NULL),
(139, '10301748', 'SDN 10 Koto Baru', 'KOTO BARU', 'k-08', '-0.8204614', '100.6527339', NULL, NULL, 'sdn10kotobaru@yahoo.co.id', NULL, NULL, 'Nofrita Zahara', NULL, NULL),
(140, '10301688', 'SDN 12 Koto Baru', 'JORONG BUKIT KILI', 'k-08', '-0.8520075', '100.6477596', NULL, NULL, 'sdn12kotobaru@yahoo.co.id', NULL, NULL, 'Nelwiza Das, S.Pd', NULL, NULL),
(141, '10301710', 'SDN 14 Selayo', 'JORONG BATU PALANO', 'K-07', '-0.8022842', '100.6315765', NULL, NULL, 'sdn14selayo@yahoo.co.id', NULL, NULL, 'Rifaitma', NULL, NULL),
(143, '10301464', 'SDN 16 Koto Baru', 'KOTO BARU', 'k-08', '-0.8143076', '100.6707474', NULL, NULL, 'kotobarusdn@gmail.com', NULL, NULL, 'Rosniwati', NULL, NULL),
(144, '10301497', 'SDN 17 Panyakalan', 'PANYAKALAN', 'K-02', '-0.8149403', '100.6668448', NULL, NULL, 'sdn17panyakalan@yahoo.co.id', NULL, NULL, 'Mulyadi', NULL, NULL),
(145, '10307957', 'SDN 18 Saok Laweh', 'SAOK LAWEH', 'K-03', '-0.7870362', '100.6711967', NULL, NULL, 'sdn.18saoklaweh@gmail.com', NULL, NULL, 'Yulismar', NULL, NULL),
(146, '10301488', 'SDN 19 Tanjung Bingkung', 'JORONG SAMBUNG TANJUNG BINGKUNG', 'K-04', '-0.7632526', '100.571371', NULL, NULL, 'sdn19tanjungbingkung@yahoo.com', NULL, NULL, 'Windra Nelly', NULL, NULL),
(147, '10301504', 'SDN 20 Selayo', 'JL SOLOK PADANG KM 2 SELAYO', 'K-07', '-0.817772', '100.6502839', NULL, NULL, 'sdn20selayo@yahoo.co.id', 'http://sdn20selayo.host56.com', NULL, 'Nofra Yenita', NULL, NULL),
(148, '10301430', 'SDN 21 Gantung Ciri', 'GANTUNG CIRI', 'K-05', '-0.7471846', '100.6059313', NULL, NULL, 'sdn21gantungciri@yahoo.co.id', NULL, NULL, 'Nasril', NULL, NULL),
(149, '10301436', 'SDN 22 Koto Baru', 'JORONG KAJAI', 'k-08', '-0.832824', '100.6517795', NULL, NULL, 'sdn22kotobaru_kabsolok@yahoo.com', NULL, NULL, 'Elfi Nurdin', NULL, NULL),
(150, '10307958', 'SDN 23 Tanjung Bingkung', 'TANJUNG BINGKUNG', 'K-04', '-0.7553964', '100.6196229', NULL, NULL, 'sdn23tanjungbingkung@gmail.com', NULL, NULL, 'Zemzoman Delila', NULL, NULL),
(151, '10301438', 'SDN 24 Selayo', 'SELAYO', 'K-07', '-0.8156764', '100.6427073', NULL, NULL, 'sdn24selayo@yahoo.co.id', NULL, NULL, 'Syamsuarni', NULL, NULL),
(152, '10301459', 'SDN 26 Panyakalan', 'PANYAKALAN', 'K-02', '-0.8283481', '100.693581', NULL, NULL, 'sdn26panyakalan@yahoo.co.id', NULL, NULL, 'Risnamarni', NULL, NULL),
(153, '10307960', 'SDN 27 Gaung', 'GAUANG', 'K-01', '-0.8023662', '100.6867962', NULL, NULL, 'sdn27gaung@yahoo.co.id', NULL, NULL, 'Risma', NULL, NULL),
(154, '10301445', 'SDN 28 Koto Baru', 'JL LUBUK AGUNG', 'k-08', '-0.8180493', '100.6548084', NULL, NULL, 'sdn28kotobaru@yahoo.co.id', NULL, NULL, 'Ratmainis, S.Pd', NULL, NULL),
(155, '10308064', 'SDN 29 Saok Laweh', 'JLN.TANAH LAPANG SAOK LAWEH KEC.KUBUNG', 'K-03', '-0.782087', '100.6814904', NULL, NULL, 'sdn29saoklawehkubung@gmail.com', NULL, NULL, 'Masnidawati, S.Pd', NULL, NULL),
(156, '10301566', 'SDN 31 Selayo', 'SELAYO', 'K-07', '-0.8298551', '100.6337534', NULL, NULL, 'sdn31selayo@gmail.com', NULL, NULL, 'Sabdiani Asmara Winda', NULL, NULL),
(157, '10308065', 'SDN 32 Gantung Ciri', 'GANTUNG CIRI', 'K-05', '-0.8901129', '100.6120674', NULL, NULL, 'sdn32gantung.ciri10308065@gmail.com', NULL, NULL, 'Wentisa', NULL, NULL),
(158, '10308066', 'SDN 33 Koto Baru', 'JORONG SUBARANG', 'k-08', '-0.8105942', '100.6758909', NULL, NULL, 'sdn33kotobaru@gmail.com', NULL, NULL, 'Ermawilda', NULL, NULL),
(159, '10308067', 'SDN 34 Gantung Ciri', 'JORONG MARKIO GANTUNG CIRI', 'K-05', '-0.864017', '100.6193667', NULL, NULL, 'sdn34gantungciri@yahoo.co.id', NULL, NULL, 'xxxx', NULL, NULL),
(160, '10301552', 'SDN 36 Selayo', 'BATU PALANO', 'K-07', '-0.8078375', '100.6174271', NULL, NULL, 'sdn36selayo_kabsolok@yahoo.co.id', NULL, NULL, 'Eva Delfita', NULL, NULL),
(161, '10301554', 'SDN 37 Payakalan', 'JR MUDIAK AIE PANAYAKALAN', 'K-02', '-0.8247481', '100.7027503', NULL, NULL, 'sdn37panyakalan@gmail.com', NULL, NULL, 'Aspinar, S.Pd', NULL, NULL),
(162, '10301557', 'SDN 38 Tanjung  Bingkung', 'TANJUNG BINGKUNG', 'K-04', '-0.7726774', '100.617574', NULL, NULL, 'sdn38tanjungbingkung1@gmail.com', NULL, NULL, 'Neldawati', NULL, NULL),
(163, '10301558', 'SDN 39 Koto Baru', 'JALAN SINGKARAK RAYA PERUMAHAN BATU KUBUNG', 'k-08', '-0.8476276', '100.641327', NULL, NULL, 'sdn39kotobaru1@gmail.com', NULL, NULL, 'Nurman', NULL, NULL),
(164, '10301695', 'SDN 11 Gantung Ciri', 'GANTUNG CIRI', 'K-05', '-0.7519146', '100.5780013', NULL, NULL, 'sdn11gantungciri@yahoo.co.id', NULL, NULL, 'Elsa Ridarti', NULL, NULL),
(165, '10307939', 'SDN 13 Koto Baru', 'KOTO BARU', 'k-08', '-0.8278169', '100.663595', NULL, NULL, 'sdn13kotobaru@yahoo.com.id', NULL, NULL, 'Zuryetti', NULL, NULL),
(166, '10307959', 'SDN 25 Koto Hilalang', 'JORONG DALAM NAGARI', 'K-06', '-0.8304713', '100.607914', NULL, NULL, 'sdn25kotohilalang@gmail.com', NULL, NULL, 'Maizon', NULL, NULL),
(167, '10301550', 'SDN 35 Koto Baru', 'KOTO BARU', 'k-08', '-0.858206', '100.6427086', NULL, NULL, 'sdn35kotobaru@yahoo.co.id', NULL, NULL, 'Jonrison', NULL, NULL),
(168, '10301642', 'SDN 01 Tarung-Tarung', 'TARUNG-TARUNG', 'KSL-02', '0.5571935', '100.0210393', NULL, NULL, 'sdn01tarungtarung@gmail.com', NULL, NULL, 'Suardi', NULL, NULL),
(169, '10301597', 'SDN 05 Guguk Sarai', 'GUGUK SARAI', 'KSL-05', '-0.7657837', '100.6991504', NULL, NULL, 'sdnguguksarai05@gmail.com', NULL, NULL, 'Suarni', NULL, NULL),
(170, '10301630', 'SDN 06 Guguak Sarai', 'GUGUAK SARAI', 'KSL-05', '-0.7657837', '100.6991504', NULL, NULL, 'SDN06GGS@gmail.com', 'sdn06guguaksarai.com', '081266997808', 'Zainal Arifin', NULL, NULL),
(171, '10301752', 'SDN 10 Pianggu', 'Sungai Lasi Kec IX Koto Sungai Lasi Kab.Solok', 'KSL-01', '-0.7730052', '100.7265183', NULL, NULL, 'sdn10pianggu@gmail.com', NULL, NULL, 'Ermi. M', NULL, NULL),
(172, '10301701', 'SDN 12 Pianggu', 'Pianggu', 'KSL-01', '-0.7408846', '100.7414703', NULL, NULL, 'sdn12pianggu@yahoo.co.id', NULL, NULL, 'xxxx', NULL, NULL),
(173, '10301469', 'SDN 16 Sungai Durian', 'Sungai Durian', 'KSL-09', '-0.8191506', '100.7839994', NULL, NULL, 'sdn16sungaidurian@yahoo.co.id', NULL, NULL, 'Mulyadi', NULL, NULL),
(174, '10307907', 'SDN 01 Paninjauan', 'JORONG PASAR', 'XKD-05', '-0.6753346', '100.5946613', NULL, NULL, 'sdn01paninjauankabsolok@gmail.com', NULL, NULL, 'Syafniyenti', NULL, NULL),
(175, '10301609', 'SDN 04 Koto Tuo Sulit Air', 'KOTO TUO', 'XKD-03', '-0.6179646', '100.6347913', NULL, NULL, 'sdn4sulitair_kabsolok@yahoo.co.id', NULL, NULL, 'Hermanto', NULL, NULL),
(176, '10301596', 'SDN 05 Gando Sulit Air', 'GANDO', 'XKD-03', '-0.6225146', '100.6430313', NULL, NULL, 'sdn5gandosulitair@gmail.com', NULL, NULL, 'Erlinda', NULL, NULL),
(177, '10301740', 'SDN 07 Talago Laweh', 'TALAGO LAWEH SULIT AIR', 'XKD-03', '-0.6023931', '100.6183442', NULL, NULL, 'sdntujuhtalagolaweh_sulitair@yahoo.co.id', NULL, NULL, 'Nurdeni', NULL, NULL),
(178, '10301742', 'SDN 08 Bukit Kandung', 'BUKIK KANDUANG', 'XKD-06', '-0.5818838', '100.6078478', NULL, NULL, 'sdn08bukitkandung-kabsolok@yahoo.co.id', NULL, NULL, 'Alisman', NULL, NULL),
(179, '10301745', 'SDN 09 Balai Selasa Siberambang', 'BALAI SELASA', 'XKD-08', '-0.7076546', '100.6751213', NULL, NULL, 'sdn9balaiselasa@gmail.com', NULL, NULL, 'Asni Yuliarti', NULL, NULL),
(180, '10301746', 'SDN 10 Gantiang Bigau Sulit Air', 'GANTIANG BIGAU', 'XKD-03', '-0.6113561', '100.6557374', NULL, NULL, 'sdn10gbs.slk@gmail.com', NULL, NULL, 'Marlis', NULL, NULL),
(181, '10301692', 'SDN 11 Kuncir', 'KUNCIR', 'XKD-07', '-0.7327102', '100.6468109', NULL, NULL, 'sdn11kuncir-kabsolok@yahoo.co.id', NULL, NULL, 'Jusmanidar', NULL, NULL),
(182, '10307920', 'SDN 13 Katialo', 'KATIALO', 'XKD-01', '-0.7035321', '100.666014', NULL, NULL, 'sekolahdasarnegerikatialo@gmail.com', NULL, NULL, 'Surya Chandra', NULL, NULL),
(183, '10301708', 'SDN 14 Ganting Dodok Sulit Air', 'GANTING DODOK', 'XKD-03', '-0.6047407', '100.6381874', NULL, NULL, 'sdn14gantingdadok@yahoo.com', NULL, NULL, 'Syafri. J', NULL, NULL),
(184, '10301467', 'SDN 16 Patai Labek Sulit Air', 'PATAI LABEK', 'XKD-03', '-0.6195036', '100.6386123', NULL, NULL, 'sdn16sulitair_kabsolok@yahoo.co.id', NULL, NULL, 'Nita Warni', NULL, NULL),
(185, '10307912', 'SDN 18 Tanjung Balik', 'BALAI LAMO', 'XKD-02', '-0.645193', '100.6593645', NULL, NULL, 'sdnbalailamotanjungbalik@gmail.com', NULL, NULL, 'xxxx', NULL, NULL),
(186, '10307911', 'SDN 19 Koto Tuo Sulit Air', 'KOTO TUO', 'XKD-03', '-0.6169407', '100.6343192', NULL, NULL, 'sdn19sulitair_kabsolok@yahoo.com', NULL, NULL, 'Rosdayetti', NULL, NULL),
(187, '10307887', 'SDN 21 Labuah Panjang', 'LABUAH PANJANG', 'XKD-09', '-0.6671542', '100.6710888', NULL, NULL, 'sdno21labuahpanjang@gmail.com', NULL, NULL, 'Gusnimar', NULL, NULL),
(188, '10307910', 'SDN 23 Tanjung Balik', 'TANJUNG BALIK', 'XKD-02', '-0.6539061', '100.6592186', NULL, NULL, 'sdn23tanjungbalik@gmail.com', NULL, NULL, 'T. Winardi, S.Pd', NULL, NULL),
(189, '10301452', 'SDN 25 Bukit Kandung', 'KUBANG JINIH JORONG DATAR', 'XKD-06', '-0.5760828', '100.6007431', NULL, NULL, 'sdn25bukitkandung_kabsolok@yahoo.co.id', NULL, NULL, 'Muliarnis', NULL, NULL),
(190, '10307886', 'SDN 30 Bukik Kanduang', 'BUKIK KANDUANG', 'XKD-06', '-0.5743123', '100.6055094', NULL, NULL, 'sdn30bukitkandung_kabsolok@yahoo.co.id', NULL, NULL, 'Endrawati', NULL, NULL),
(191, '10301570', 'SDN 32 Bukit Kandung', 'PANJALANGAN', 'XKD-06', '-0.5601889', '100.6003176', NULL, NULL, 'rina.maqdalena2510@gmail.com', NULL, NULL, 'Aksem Ready', NULL, NULL),
(192, '10307918', 'SDN 03 Tanjung Balik', 'TANJUNG BALIK', 'XKD-02', '-0.6449667', '100.6595364', NULL, NULL, 'sdn3tanjungbalik@gmail.com', NULL, NULL, 'Syamsul Bahri', NULL, NULL),
(193, '10307906', 'SDN 29 Taratak Tinggi Sibarambang', 'JORONG TINGGI', 'XKD-08', '-0.6860031', '100.6909479', NULL, NULL, 'sdn29siberambang@gmail.com', NULL, NULL, 'Bastimarni', NULL, NULL),
(194, '10301640', 'SDN 01 Singkarak', 'TANAH LAPANG SINGKARAK', 'XKS-02', '-0.6951861', '100.5860196', NULL, NULL, 'sdn01singkarak@gmail.com', NULL, NULL, 'Indrayeni', NULL, NULL),
(197, '10301657', 'SDN 02 Kacang', 'KACANG', 'XKS-01', '-0.6267386', '100.5852477', NULL, NULL, 'sdn2kacang@yahoo.co.id', NULL, NULL, 'Afrizal', NULL, NULL),
(198, '10301679', 'SDN 03 Tikalak', 'BALAI SENIN', 'XKS-03', '-0.6611186', '100.5875188', NULL, NULL, 'sdn03tikalak@gmail.com', NULL, NULL, 'Aleksandra', NULL, NULL),
(199, '10307928', 'SDN 04 Tanjung Alai', 'JORONG DATA NAGARI TANJUNG ALAI', 'XKS-07', '-0.6179646', '100.6347913', NULL, NULL, 'sdn04tanjungalai46@gmail.com', NULL, NULL, 'Veri Maiviendra, S.Pd`', NULL, NULL),
(200, '10301613', 'SDN 05 Aripan', 'ARIPAN', 'XKS-08', '-0.7001112', '100.6227443', NULL, NULL, 'sdn05aripan@gmail.com', NULL, NULL, 'Nurmaiti', NULL, NULL),
(201, '10301618', 'SDN 06 Sumani', 'SUMANI', 'XKS-04', '-0.7142346', '100.5917564', NULL, NULL, 'sdn06sumani@gmail.com', NULL, NULL, 'Indrawati', NULL, NULL),
(202, '10301757', 'SDN 09 Kacang', 'KACANG', 'XKS-01', '-0.6449701', '100.5910074', NULL, NULL, 'sdn9kacang@gmail.com', NULL, '081270635380', 'Asril', NULL, NULL),
(203, '10301753', 'SDN 10 Saniang Baka', 'SANIANG BAKA', 'XKS-05', '-0.7021067', '100.5091853', NULL, NULL, 'sdn10saniangbaka_kabsolok@rocketmail.com', 'http://www.sdn10saningbakar_kabsolok.com', '085278814458', 'Gustini', NULL, NULL),
(204, '10301700', 'SDN 11 Koto Sani', 'PADANG BELIMBING', 'XKS-06', '-0.7429514', '100.6053284', NULL, NULL, 'sdn11kotosani@gmail.com', NULL, NULL, 'Irmawati', NULL, NULL),
(205, '10301713', 'SD N 13 SUMANI', 'JALAN LINTAS SUMATERA KAPUH SUMANI', 'XKS-04', '-0.7388979', '100.6115021', NULL, NULL, 'sdn13sumani_kab.solok@yahoo.co.id', NULL, NULL, 'Sriyetmi', NULL, NULL),
(206, '10301722', 'SDN 14 Singkarak', 'JL.TANAH LAPANG JORONG KALUKU SINGKARAK', 'XKS-02', '-0.6908247', '100.5961122', NULL, NULL, 'sdn14singkarak_kabsolok@yahoo.co.id', NULL, NULL, 'Devi', NULL, NULL),
(207, '10301478', 'SDN 15 Kacang', 'KACANG', 'XKS-01', '-0.6139552', '100.5747297', NULL, NULL, 'nelihaslinda04@gmail.com', NULL, NULL, 'Neli Haslinda, S.Pd', NULL, NULL),
(208, '10308028', 'SDN 19 Saniang Baka', 'SANIANG BAKA', 'XKS-05', '-0.7007874', '100.5744598', NULL, NULL, 'sdn19saningbaka_kabsolok@yahoo.co.id', NULL, NULL, 'Junaida', NULL, NULL),
(209, '10301492', 'SDN 20 Saniang Baka', 'SANIANG BAKA', 'XKS-05', '-0.708351', '100.5075559', NULL, NULL, 'sdn20saningbakar_kabsolok@yahoo.co.id', NULL, NULL, 'Rosmaini', NULL, NULL),
(210, '10307971', 'SDN 22 Sumani', 'JORONG PINYANGEK', 'XKS-04', '-0.7059482', '100.5887899', NULL, NULL, 'sumanisdnsumani@gmail.com', NULL, NULL, 'Rupian Sardani, S.Pd', NULL, NULL),
(211, '10307997', 'SDN 23 Sumani', 'JALAN RANAH JORONG KOTO BARU', 'XKS-04', '-0.7145994', '100.5925258', NULL, NULL, 'sdn23sumaniinpres@gmail.com', NULL, NULL, 'Zulmaida', NULL, NULL),
(212, '10301426', 'SDN 24 Saniang Baka', 'SANIANG BAKA', 'XKS-05', '-0.8025286', '100.6421403', NULL, NULL, 'sdn24saningbakar@gmail.com', NULL, NULL, 'Epi Saswanti', NULL, NULL),
(213, '10301454', 'SDN 25 Koto Sani', 'JORONG PADANG BELIMBING', 'XKS-06', '-0.7501592', '100.6032835', NULL, NULL, 'sdn25kotosani_kabsolok@yahoo.co.id', NULL, NULL, 'Gusmaneli', NULL, NULL),
(214, '10301460', 'SDN 26 Singkarak', 'JLN. SURAU DURIAN TAMPUNIK', 'XKS-02', '-0.7321275', '100.2127983', NULL, NULL, 'sdn26singkarak_kabsolok@yahoo.co.id', NULL, NULL, 'Haslinda', NULL, NULL),
(215, '10301442', 'SDN 27 Tikalak', 'DATAR JORONG TANGAH', 'XKS-03', '-0.6576129', '100.5878119', NULL, NULL, 'sdn27tikalak@gmail.com', NULL, NULL, 'Fitriniati', NULL, NULL),
(216, '10301448', 'SDN 29 SAniang Baka', 'JORONG BALAI BATINGKAH', 'XKS-05', '-0.7043642', '100.5711644', NULL, NULL, 'sdn29saningbaka_kabsolok@yahoo.co.id', NULL, NULL, 'Elia Helda', NULL, NULL),
(217, '10301505', 'SDN 30 Aripan', 'ARIPAN', 'XKS-08', '-0.6938817', '100.6219038', NULL, NULL, 'sdn30aripan@yahoo.co.id', NULL, NULL, 'Herman', NULL, NULL),
(218, '10301569', 'SDN 32 Koto Sani', 'KOTO SANI', 'XKS-06', '-0.7558149', '100.6039404', NULL, NULL, 'sdn32kotosani@gmail.com', NULL, NULL, 'Ziswen', NULL, NULL),
(219, '10301551', 'SDN 36 Kacang', 'KACANG', 'XKS-01', '-0.6501868', '100.5855936', NULL, NULL, 'sdn36kacang_kabsolok@yahoo.co.id', NULL, NULL, 'Erdawati', NULL, NULL),
(220, '10301647', 'SDN 01 Muara Pingai', 'JALAN TABEK MUARA PINGAI', 'JS-01', '-0.6744644', '100.5537742', NULL, NULL, 'sdn01muaropingai@gmail.com', NULL, NULL, 'Lilis Febwarini', NULL, NULL),
(221, '10304202', 'SDN 02 Paninggahan', 'JORONG KAMPUNG TANGAH', 'JS-02', '-0.6608916', '100.5311995', NULL, NULL, 'sdn02paninggahan@gmail.com', NULL, NULL, 'Yenni Marjanti', NULL, NULL),
(222, '10301661', 'SDN 03 Paninggahan', 'SUBARANG PANINGGAHAN', 'JS-02', '-0.6551156', '100.5288513', NULL, NULL, 'sdn3paninggahan@yahoo.co.id', NULL, NULL, 'Yulastri', NULL, NULL),
(223, '10301610', 'SDN 04 Paninggahan', 'PANINGGAHAN', 'JS-02', '-0.6736399', '100.5459941', NULL, NULL, 'sdn_empatpaninggahan@yahoo.com', NULL, NULL, 'Muhasnel', NULL, NULL),
(224, '10301727', 'SDN 08 Muaro Pingai', 'MUARO PINGAI', 'JS-01', '-0.6730045', '100.5556539', NULL, NULL, 'sdn08muaropingai@gmail.com', NULL, NULL, 'xxxx', NULL, NULL),
(225, '10301761', 'SDN 09 Paninggahan', 'JLN BAWAH BATUANG GANDO', 'JS-02', '-0.6727332', '100.5407019', NULL, NULL, 'sdn9paninggahan@yahoo.co.id', NULL, NULL, 'Nofiar', NULL, NULL),
(226, '10301691', 'SDN 11 Paninggahan', 'BATUA PANINGGAHAN', 'JS-02', '-0.6599316', '100.5252103', NULL, NULL, 'sdn11paninggahanoke@gmail.com', NULL, NULL, 'Hendri Usman', NULL, NULL),
(227, '10307792', 'SDN 14 Paninggahan', 'TALAGO', 'JS-02', '-0.6803967', '100.5358239', NULL, NULL, 'sdn14paninggahan_kabsolok@yahoo.co.id', NULL, NULL, 'Sri Marjanti', NULL, NULL),
(228, '10301676', 'SDN 02 Talang Babungo', 'Talang Babungo', 'HG-01', '-1.0936552', '100.8745886', NULL, NULL, 'sdn02talangbabungo@gmail.com', NULL, NULL, 'Tedi Aurora', NULL, NULL),
(229, '10301627', 'SDN 05 Talang Babungo', 'TALANG BABUNGO-ALAHAN PANJANG', 'HG-01', '-1.0905806', '100.8637478', NULL, NULL, 'sdntalang56@gmail.com', NULL, NULL, 'Restati Yelmi', NULL, NULL),
(230, '10301620', 'SDN 06 Sariak Aalahan Tigo', 'SARIAK ALAHAN TIGO', 'HG-02', '-1.138034', '100.9184049', NULL, NULL, 'sdn06sat@yahoo.co.id', NULL, NULL, 'Liyuhartini', NULL, NULL),
(231, '10301738', 'SDN 07 Sariak Alahan Tigo', 'PINTI KAYU', 'HG-02', '-1.1242584', '100.8967457', NULL, NULL, 'sdn07sat@yahoo.co.id', NULL, NULL, 'Samual', NULL, NULL),
(232, '10301755', 'SDN 09 Talang Babungo', 'TABEK TALANG BABUNGO', 'HG-01', '-1.0851562', '100.8739147', NULL, NULL, 'sdn09talangbabungo@gmail.com', NULL, NULL, 'Mukhtar', NULL, NULL),
(233, '10301482', 'SDN 15 Sariak Alahan Tigo', 'SARIAK ALAHAN TIGO', 'HG-02', '-1.1252223', '100.9423228', NULL, NULL, 'sdn15sariakalahantigo@gmail.com', NULL, NULL, 'Syafril', NULL, NULL),
(234, '69946825', 'SDN 22 Sariak Alahan Tigo', 'JORONG TARATAK TELENG', 'HG-02', '-1.1491452', '100.9164695', NULL, NULL, 'sdn22santiago@gmail.com', NULL, NULL, 'Risdalina', NULL, NULL),
(235, '69946985', 'SDN 25 Sariak Alahan Tigo', 'JORONG LINDANG TANGAH', 'HG-02', '-1.1023516', '100.9259362', NULL, NULL, 'sdn25sathiliragumanti@yaho.co.id', NULL, NULL, 'Masriyanto', NULL, NULL),
(236, '10301656', 'SDN 02 Garabak Data', 'GARABAK DATA', 'TL-03', '-1.046412', '100.9977345', NULL, NULL, 'sdn02garabakdata@yahoo.com', NULL, NULL, 'Nelwetis', NULL, NULL),
(237, '10301662', 'SDN 03 Rangkiang Luluih', 'RANGKIANG LULUIH', 'TL-01', '-0.950701', '100.8877913', NULL, NULL, 'sdn03rangkiangluluih@yahoo.co.id', NULL, NULL, 'Lismar', NULL, NULL),
(238, '10301626', 'SDN 05 Sumiso', 'SUMISO', 'TL-05', '-0.9424508', '100.9453818', NULL, NULL, 'sdn05sumiso@yahoo.com', NULL, NULL, 'Syamsul Bahri', NULL, NULL),
(239, '10301681', 'SDN 10 Sungai Dareh Tigo Lurah', 'SUNGAI DAREH', 'TL-05', '-0.9570551', '100.9656674', NULL, NULL, 'sdn10sungaidareh@yahoo.co.id', NULL, NULL, 'Daliyasman', NULL, NULL),
(240, '10301733', 'SD N 08 Kapujan Rangkiang Luluih', 'KAPUJAN RANGKIANG LULUIH', 'TL-01', '-0.9792353', '100.863715', NULL, NULL, 'sdn08kapujanrkl@gmail.com', NULL, NULL, 'Kamisaris', NULL, NULL),
(242, '10301716', 'SDN 12 Tigo Jangko', 'TIGO JANGKO', 'TL-05', '-0.9008173', '101.0090474', NULL, NULL, 'sdn12tjsumiso@gmail.com', NULL, NULL, 'Patra Minofa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `no_hp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, '082106160005', '$2y$10$LeEXC/EVKC33AEcXD6Ap3eNArlCupivAIzTli/ze3eq6tZVktyl7K', NULL, '2020-09-22 08:52:34', '2020-09-22 08:52:34'),
(7, '081206082858', '$2y$10$B7sQwgj0Ltyj4VRxz8RjV.f/NLxv47Ow8yMSACw.2517KzdqSUuNG', NULL, '2020-09-22 09:23:56', '2020-09-22 09:23:56'),
(8, '082112070731', '$2y$10$ppcLA1JijHK.jbY.sCh0Ve9CGoBnGWI2DRMxJjBgo9JsuLb2CIv0y', NULL, '2020-09-22 09:29:46', '2020-09-22 09:29:46'),
(9, '081206083160', '$2y$10$Ut.XL4pAgzIHrOCgnfgjD.PmfzOvkufBpfqUxjNmreQmWhKx4cBgm', NULL, '2020-09-22 09:51:53', '2020-09-22 09:51:53'),
(10, '081210100001', '$2y$10$iHhngz6N/V1vFfuvnXCNkOLiEJIQ0K6FDT3MtOavmUJwkCdKkySYC', NULL, '2020-09-22 10:00:40', '2020-09-22 10:00:40'),
(11, '081206085153', '$2y$10$Uj8nWEt/JvhXrAco2szc6.LXmqOIHL3LC.3xNP8BSRdlH/LC8tFFS', NULL, '2020-09-22 20:11:34', '2020-09-22 20:11:34'),
(12, '081211110011', '$2y$10$X3Ht0wadHxoDAu8k0gF75OZY7T2xsjU6rA/9Ekylrrb9VbKN7VXRS', NULL, '2020-09-22 20:30:33', '2020-09-22 20:30:33'),
(13, '081202120008', '$2y$10$E0uXsFGaxpVdSI7a90ZtlOqnUBwF4ih.hOdvVo0oPnRtLa3uKxWvu', NULL, '2020-09-22 20:37:36', '2020-09-22 20:37:36'),
(14, '081204100009', '$2y$10$LvcjugZX8YeYC2hMGNkpvO81yPbhANGZrsA5uFsRfAziyfEVHN2ya', NULL, '2020-09-22 20:44:29', '2020-09-22 20:44:29'),
(18, '081208100003', '$2y$10$5E5mmZZEVZzCocL7PGVlnuD5pBuUnC2mg8HRd6pZBVIurKBSX1gQa', NULL, '2020-09-22 21:38:19', '2020-09-22 21:38:19'),
(19, '081203160003', '$2y$10$wVNX9udAGAXUgK5LLuxjf.dfkc6kuEzyJGvktZUkpNIqQFfYgXV72', NULL, '2020-09-22 21:44:06', '2020-09-22 21:44:06'),
(20, '081206110003', '$2y$10$k8Lji3JF6ttstnxqSIxXtuuHwC/wVrDrR/RPebmHKWcAiiPmyY1Su', NULL, '2020-09-22 21:51:33', '2020-09-22 21:51:33'),
(21, '081212110004', '$2y$10$qzCuS8xWVPaJtvphkT.wiO/kqOa1aggzCUj3jGxIGSaqM9gTW5xRK', NULL, '2020-09-22 21:58:43', '2020-09-22 21:58:43'),
(22, '081206082336', '$2y$10$KSwRNj94MZMtxpbkO6dute8luesE1R9I4qZ70WVb/eGfu3U49t9la', NULL, '2020-09-22 22:04:55', '2020-09-22 22:04:55'),
(23, '081202140002', '$2y$10$jcSZN.rj4aYyVPZ3eeayQ.qTuOfyIHyvMfLI.PGjcidKXJ8/tCGli', NULL, '2020-09-22 22:11:50', '2020-09-22 22:11:50'),
(24, '081208110004', '$2y$10$4ZoeXMj1cwsz4jxC4.ERZuvl2XyRRqgI3zUhd5w40mVIxyvZy29zq', NULL, '2020-09-22 22:22:53', '2020-09-22 22:22:53'),
(25, '081204110001', '$2y$10$fo5vRtrxZdqV4q.j4M3muOBysM88QSHJlUPFxYp7MGkV3YFMc8J1K', NULL, '2020-09-22 22:34:11', '2020-09-22 22:34:11'),
(26, '081204150001', '$2y$10$o/bAPZErgU2VfwxMHAqp.eyhLvtzvZGOw36NBrHqBbWFvtCH7AOFu', NULL, '2020-09-22 22:42:49', '2020-09-22 22:42:49'),
(27, '081209140002', '$2y$10$YXlrWHGSV3rsMlazYmPsRO7nL6b1hCpC6RsbcyxSvYUvgH/VKN8rS', NULL, '2020-09-22 22:49:37', '2020-09-22 22:49:37'),
(28, '081206130001', '$2y$10$.picSSvEhuvYZ9jIU/OFf.2sD3q28SMS7NbSa9.j8uFXV/35RHUPS', NULL, '2020-09-22 22:55:24', '2020-09-22 22:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `zonasi`
--

CREATE TABLE `zonasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_zonasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_zonasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zonasi`
--

INSERT INTO `zonasi` (`id`, `kd_zonasi`, `nama_zonasi`, `created_at`, `updated_at`) VALUES
(1, 'PC-01', 'Pantai Cermin-Surian', NULL, NULL),
(2, 'PC-02', 'Pantai Cermin-Lolo', NULL, NULL),
(3, 'LG-01', 'Lembah Gumanti-Alahan Panjang', NULL, NULL),
(4, 'LG-02', 'Lembah Gumanti-Sungai Nanam', NULL, NULL),
(5, 'LG-03', 'Lembah Gumanti-Salimpat', NULL, NULL),
(6, 'LG-04', 'Lembah Gumanti-Aie Dingin', NULL, NULL),
(7, 'HG-01', 'Hiliran Gumanti-Talang Babungo', NULL, NULL),
(8, 'HG-02', 'Hiliran Gumanti-Sariak Alahan Tigo', NULL, NULL),
(9, 'HG-03', 'Hiliran Gumanti-Sungai Abu', NULL, NULL),
(10, 'PS-01', 'Payung Sekaki-Sirukam', NULL, NULL),
(11, 'PS-02', 'Payung Sekaki-Supayang', NULL, NULL),
(12, 'PS-03', 'Payung Sekaki-Aie Luo', NULL, NULL),
(13, 'TL-01', 'Tigo Lurah-Rangkiang Luluih', NULL, NULL),
(14, 'TL-02', 'Tigo Lurah-Batu Bajanjang', NULL, NULL),
(15, 'TL-03', 'Tigo Lurah-Garabak Data', NULL, NULL),
(16, 'TL-04', 'Tigo Lurah-Simanau', NULL, NULL),
(17, 'TL-05', 'Tigo Lurah-Tanjuang Balik Sumiso', NULL, NULL),
(18, 'LJ-01', 'Lembang Jaya-Selayo Tanang', NULL, NULL),
(19, 'LJ-02', 'Lembang Jaya-Koto Anau', NULL, NULL),
(20, 'LJ-03', 'Lembang Jaya-Batu Banyak', NULL, NULL),
(21, 'LJ-04', 'Lembang Jaya-Limau Lunggo', NULL, NULL),
(22, 'LJ-05', 'Lembang Jaya-Koto Laweh', NULL, NULL),
(23, 'LJ-06', 'Lembang Jaya-Batu Bajanjang', NULL, NULL),
(24, 'DK-01', 'Danau Kembar-Kampung Batu Dalam', NULL, NULL),
(25, 'DK-02', 'Danau Kembar-Simpang Tanjung Nan IV ', NULL, NULL),
(26, 'GT-01', 'Gunung Talang-Cupak', NULL, NULL),
(27, 'GT-02', 'Gunung Talang-Talang', NULL, NULL),
(28, 'GT-03', 'Gunung Talang-Sungai Janiah', NULL, NULL),
(29, 'GT-04', 'Gunung Talang-Koto Gadang Guguak', NULL, NULL),
(30, 'GT-05', 'Gunung Talang-Koto Gaek Guguak', NULL, NULL),
(31, 'GT-06', 'Gunung Talang-Jawi-Jawi Guguak', NULL, NULL),
(32, 'GT-07', 'Gunung Talang-Batang Barus', NULL, NULL),
(33, 'GT-08', 'Gunung Talang-Aie Batumbuak', NULL, NULL),
(34, 'BS-01', 'Bukit Sundi-Muaro Paneh', NULL, NULL),
(35, 'BS-02', 'Bukit Sundi-Kinari', NULL, NULL),
(36, 'BS-03', 'Bukit Sundi-Parambahan', NULL, NULL),
(37, 'BS-04', 'Bukit Sundi-Dilam', NULL, NULL),
(38, 'BS-05', 'Bukit Sundi-Bukit Tandang', NULL, NULL),
(39, 'KSL-01', 'IX Koto Sungai Lasi-Pianggu', NULL, NULL),
(40, 'KSL-02', 'IX Koto Sungai Lasi-Taruang-Taruang', NULL, NULL),
(41, 'KSL-03', 'IX Koto Sungai Lasi-Siaro Aro', NULL, NULL),
(42, 'KSL-04', 'IX Koto Sungai Lasi-Indudur', NULL, NULL),
(43, 'KSL-05', 'IX Koto Sungai Lasi-Guguak Sarai', NULL, NULL),
(44, 'KSL-06', 'IX Koto Sungai Lasi-Sungai Durian', NULL, NULL),
(45, 'KSL-07', 'IX Koto Sungai Lasi-Bukit Bias', NULL, NULL),
(46, 'KSL-08', 'IX Koto Sungai Lasi-Koto Laweh', NULL, NULL),
(47, 'KSL-09', 'IX Koto Sungai Lasi-Sungai Jambur', NULL, NULL),
(48, 'K-01', 'Kubung-Gauang', NULL, NULL),
(49, 'K-02', 'Kubung-Panyakalan', NULL, NULL),
(50, 'K-03', 'Kubung-Saok Laweh', NULL, NULL),
(51, 'K-04', 'Kubung-Tanjuang Bingkuang', NULL, NULL),
(52, 'K-05', 'Kubung-Gantuang Ciri', NULL, NULL),
(53, 'K-06', 'Kubung-Koto Hilalang', NULL, NULL),
(54, 'K-07', 'Kubung-Selayo', NULL, NULL),
(55, 'k-08', 'Kubung-Koto Baru', NULL, NULL),
(56, 'XKD-01', 'X Koto Diatas-Katialo', NULL, NULL),
(57, 'XKD-02', 'X Koto Diatas-Tanjung Balik', NULL, NULL),
(58, 'XKD-03', 'X Koto Diatas-Sulit Air', NULL, NULL),
(59, 'XKD-04', 'X Koto Diatas-Pasilihan', NULL, NULL),
(60, 'XKD-05', 'X Koto Diatas-Paninjauan', NULL, NULL),
(61, 'XKD-06', 'X Koto Diatas-Bukik Kandung', NULL, NULL),
(62, 'XKD-07', 'X Koto Diatas-Kuncir', NULL, NULL),
(63, 'XKD-08', 'X Koto Diatas-Siberambang', NULL, NULL),
(64, 'XKD-09', 'X Koto Diatas-Labuh Panjang', NULL, NULL),
(65, 'XKS-01', 'X Koto Singkarak-Kacang', NULL, NULL),
(66, 'XKS-02', 'X Koto Singkarak-Singkarak', NULL, NULL),
(67, 'XKS-03', 'X Koto Singkarak-Tikalak', NULL, NULL),
(68, 'XKS-04', 'X Koto Singkarak-Sumani', NULL, NULL),
(69, 'XKS-05', 'X Koto Singkarak-Saniang Baka', NULL, NULL),
(70, 'XKS-06', 'X Koto Singkarak-Koto Sani', NULL, NULL),
(71, 'XKS-07', 'X Koto Singkarak-Tanjung Alai', NULL, NULL),
(72, 'XKS-08', 'X Koto Singkarak-Aripan', NULL, NULL),
(73, 'JS-01', 'Junjung Sirih-Muaro Pingai', NULL, NULL),
(74, 'JS-02', 'Junjung Sirih-Paninggahan', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calon_siswa_nik_siswa_unique` (`nik_siswa`),
  ADD KEY `calon_siswa_kd_zonasi_foreign` (`kd_zonasi`),
  ADD KEY `calon_siswa_no_kk_foreign` (`no_kk`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesehatan_siswa`
--
ALTER TABLE `kesehatan_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kesehatan_siswa_nik_siswa_foreign` (`nik_siswa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `operator_kd_sekolah_unique` (`kd_sekolah`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ortu_no_hp_ortu_unique` (`no_hp_ortu`),
  ADD UNIQUE KEY `ortu_no_kk_unique` (`no_kk`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftaran_no_pendaftaran_unique` (`no_pendaftaran`),
  ADD KEY `pendaftaran_nik_siswa_foreign` (`nik_siswa`),
  ADD KEY `pendaftaran_kd_sekolah_foreign` (`kd_sekolah`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengumuman_no_pendaftaran_unique` (`no_pendaftaran`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sekolah_kd_sekolah_foreign` (`kd_sekolah`),
  ADD KEY `sekolah_kd_zonasi_foreign` (`kd_zonasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_no_hp_unique` (`no_hp`);

--
-- Indexes for table `zonasi`
--
ALTER TABLE `zonasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zonasi_kd_zonasi_unique` (`kd_zonasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kesehatan_siswa`
--
ALTER TABLE `kesehatan_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `zonasi`
--
ALTER TABLE `zonasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD CONSTRAINT `calon_siswa_kd_zonasi_foreign` FOREIGN KEY (`kd_zonasi`) REFERENCES `zonasi` (`kd_zonasi`),
  ADD CONSTRAINT `calon_siswa_no_kk_foreign` FOREIGN KEY (`no_kk`) REFERENCES `ortu` (`no_kk`);

--
-- Constraints for table `kesehatan_siswa`
--
ALTER TABLE `kesehatan_siswa`
  ADD CONSTRAINT `kesehatan_siswa_nik_siswa_foreign` FOREIGN KEY (`nik_siswa`) REFERENCES `calon_siswa` (`nik_siswa`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_kd_sekolah_foreign` FOREIGN KEY (`kd_sekolah`) REFERENCES `sekolah` (`kd_sekolah`),
  ADD CONSTRAINT `pendaftaran_nik_siswa_foreign` FOREIGN KEY (`nik_siswa`) REFERENCES `calon_siswa` (`nik_siswa`);

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_kd_sekolah_foreign` FOREIGN KEY (`kd_sekolah`) REFERENCES `operator` (`kd_sekolah`),
  ADD CONSTRAINT `sekolah_kd_zonasi_foreign` FOREIGN KEY (`kd_zonasi`) REFERENCES `zonasi` (`kd_zonasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
