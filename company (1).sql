-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 07:48 AM
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Pelatihan Satpam PPH', '<p>ada suatu hari yang cerah, kelompok satpam yang bertugas di Pusat Perbelanjaan Harmoni (PPH) tengah giat melakukan latihan rutin mereka. Namun, kali ini, latihan mereka memiliki fokus khusus yaitu penggunaan Alat Pemadam Api Ringan (APAR). Latihan ini menjadi kegiatan yang sangat penting mengingat APAR memiliki peran vital dalam menjaga keamanan dan keselamatan. Mengapa Latihan <strong>APAR</strong> Penting?</p>\r\n\r\n<p>1. Kesiapan dalam Penanggulangan Kebakaran Penggunaan APAR merupakan keterampilan dasar yang harus dikuasai oleh setiap satpam. Kebakaran dapat terjadi tanpa pemberitahuan, dan kemampuan untuk segera mengatasi titik api dengan APAR dapat meminimalisir kerugian.</p>\r\n\r\n<p>2. Perlindungan Nyata Satpam PPH bertanggung jawab atas keselamatan pengunjung dan fasilitas. Dengan latihan APAR, mereka dapat memberikan perlindungan nyata terhadap orang-orang dan aset yang berada di dalam pusat perbelanjaan.</p>', 'article_images/qCAZRvujtIDRGBMn1Tx9sWkFo9X1AXdA5ZC01GK4.jpg', '2024-02-21 00:17:58', '2024-03-04 23:09:01'),
(9, 'Satam PPH yang Gagah Berani Siap Mengamankan Daerah Anda !', '<p><strong>Di era modern ini,</strong> keamanan wilayah merupakan suatu kebutuhan yang tidak dapat diabaikan. Keberhasilan sebuah perusahaan atau organisasi seringkali bergantung pada bagaimana mereka dapat menjaga keamanan dan ketertiban di tempat kerja. Salah satu solusi terbaik untuk memastikan keamanan adalah dengan menggunakan layanan Satpam PPH (Pertahanan, Pengamanan, dan Hadang). Dalam artikel ini, kita akan mengeksplorasi peran dan keunggulan dari Satpam PPH yang siap untuk mengamankan wilayah Anda. Peran Utama Satpam PPH Pertahanan Wilayah Satpam PPH memiliki peran utama sebagai garda terdepan dalam menjaga pertahanan wilayah.</p>\r\n\r\n<p><a href=\"https://trc.taboola.com/disqus-widget-safetylevel20longtail09/log/3/click?pi=%2Fblog%2Fmengintegrasikan-ckeditor-di-laravel-5a1d04ac1f749&amp;ri=1651451861ccf38325ec6495b38cdba1&amp;sd=v2_da646bfacd41982f9fcf541fa36d08c5_3686e9ed-65a9-4e26-ac33-88cb68cfe211-tuctbd735a6_1709603284_1709603284_CIi3jgYQktQ_GKzOr-LgMSABKAMwZDjR2wpAu48QSLrNFVD___________8BWABgAmjB5OG_pa-x2LMBcAE&amp;ui=3686e9ed-65a9-4e26-ac33-88cb68cfe211-tuctbd735a6&amp;it=text&amp;ii=~~V1~~-2852511711664602012~~lMyF2LK1ymG6cZBnOAJJH8cm7ExczsGJ_4gcaLo8Vjh9_9IWyVTZYEw3zPc60dwzHu_TYvngZ3fIkOCpr71_kAqE0_yL1hRu0U20mv8_l146oByXLDIK4yjT0agH9Rj9cclzE2pgLns5ASjBigAJWGRlB632wFROJcAb3idD0O2Pty428XVfgjc-OnjEeXGBo6MO7abayHm7QAnUu85_Zg&amp;pt=text&amp;li=rbox-t2m&amp;sig=ba90df7e569f04129153eec467eee0b4b633dda20c38&amp;redir=https%3A%2F%2Fprough-veridated.icu%2Fa8461624-9e47-40c3-85df-1bb629568359%3Fsite%3Ddisqus-widget-safetylevel20longtail09%26site_id%3D1042962%26title%3DKarah%253A%2BGrab%2Ball%2Bchannels%2Bfor%2Blife%2Bat%2B%252449%26platform%3DDesktop%26campaign_id%3D34570343%26campaign_item_id%3D3907119237%26thumbnail%3Dhttp%253A%252F%252Fcdn.taboola.com%252Flibtrc%252Fstatic%252Fthumbnails%252Fcb0c20af014893160490b88bfc59b3ac.png%26click_id%3DGiAOHG3kYZIPcsQsCmu976CUI5JHGe2NKIuUPf3mm89P_iC3rFko26jxsOeJieBO%26tblci%3DGiAOHG3kYZIPcsQsCmu976CUI5JHGe2NKIuUPf3mm89P_iC3rFko26jxsOeJieBO%23tblciGiAOHG3kYZIPcsQsCmu976CUI5JHGe2NKIuUPf3mm89P_iC3rFko26jxsOeJieBO&amp;vi=1709603284780&amp;p=nativeagency-robo-sc&amp;r=43&amp;tvi48=14791&amp;tvi50=10882&amp;lti=video-loAF-prod-sync_var&amp;ppb=CMYC&amp;cpb=EhMyMDI0MDMwNC0xNS1SRUxFQVNFGM6aHSAAKhlsYS50YWJvb2xhc3luZGljYXRpb24uY29tMgh0cmMyMDI3MziA4JHtB0DR2wpIu48QULrNFVj___________8BYwjTVxDHcxgwZGMI9T8QglUYMmRjCN3__________wEQ3f__________ARgjZGMI0gMQ4AYYCGRjCJYUEJocGBhkYwicXBCDeRgJZGMI5VgQ8nQYCmRjCLFYELJ0GD1kYwimVBDHbxgPZGMI9BQQnh0YH2RjCKQnEIM1GC9keAGAAcD3AYgB7tK8rwKQATaYAf7Pr-LgMdsBEAHcAQ&amp;vct=441.74\"><img alt=\"\" src=\"https://trc.taboola.com/disqus-widget-safetylevel20longtail09/log/3/click?pi=%2Fblog%2Fmengintegrasikan-ckeditor-di-laravel-5a1d04ac1f749&amp;ri=1651451861ccf38325ec6495b38cdba1&amp;sd=v2_da646bfacd41982f9fcf541fa36d08c5_3686e9ed-65a9-4e26-ac33-88cb68cfe211-tuctbd735a6_1709603284_1709603284_CIi3jgYQktQ_GKzOr-LgMSABKAMwZDjR2wpAu48QSLrNFVD___________8BWABgAmjB5OG_pa-x2LMBcAE&amp;ui=3686e9ed-65a9-4e26-ac33-88cb68cfe211-tuctbd735a6&amp;it=text&amp;ii=~~V1~~-2852511711664602012~~lMyF2LK1ymG6cZBnOAJJH8cm7ExczsGJ_4gcaLo8Vjh9_9IWyVTZYEw3zPc60dwzHu_TYvngZ3fIkOCpr71_kAqE0_yL1hRu0U20mv8_l146oByXLDIK4yjT0agH9Rj9cclzE2pgLns5ASjBigAJWGRlB632wFROJcAb3idD0O2Pty428XVfgjc-OnjEeXGBo6MO7abayHm7QAnUu85_Zg&amp;pt=text&amp;li=rbox-t2m&amp;sig=ba90df7e569f04129153eec467eee0b4b633dda20c38&amp;redir=https%3A%2F%2Fprough-veridated.icu%2Fa8461624-9e47-40c3-85df-1bb629568359%3Fsite%3Ddisqus-widget-safetylevel20longtail09%26site_id%3D1042962%26title%3DKarah%253A%2BGrab%2Ball%2Bchannels%2Bfor%2Blife%2Bat%2B%252449%26platform%3DDesktop%26campaign_id%3D34570343%26campaign_item_id%3D3907119237%26thumbnail%3Dhttp%253A%252F%252Fcdn.taboola.com%252Flibtrc%252Fstatic%252Fthumbnails%252Fcb0c20af014893160490b88bfc59b3ac.png%26click_id%3DGiAOHG3kYZIPcsQsCmu976CUI5JHGe2NKIuUPf3mm89P_iC3rFko26jxsOeJieBO%26tblci%3DGiAOHG3kYZIPcsQsCmu976CUI5JHGe2NKIuUPf3mm89P_iC3rFko26jxsOeJieBO%23tblciGiAOHG3kYZIPcsQsCmu976CUI5JHGe2NKIuUPf3mm89P_iC3rFko26jxsOeJieBO&amp;vi=1709603284780&amp;p=nativeagency-robo-sc&amp;r=43&amp;tvi48=14791&amp;tvi50=10882&amp;lti=video-loAF-prod-sync_var&amp;ppb=CMYC&amp;cpb=EhMyMDI0MDMwNC0xNS1SRUxFQVNFGM6aHSAAKhlsYS50YWJvb2xhc3luZGljYXRpb24uY29tMgh0cmMyMDI3MziA4JHtB0DR2wpIu48QULrNFVj___________8BYwjTVxDHcxgwZGMI9T8QglUYMmRjCN3__________wEQ3f__________ARgjZGMI0gMQ4AYYCGRjCJYUEJocGBhkYwicXBCDeRgJZGMI5VgQ8nQYCmRjCLFYELJ0GD1kYwimVBDHbxgPZGMI9BQQnh0YH2RjCKQnEIM1GC9keAGAAcD3AYgB7tK8rwKQATaYAf7Pr-LgMdsBEAHcAQ&amp;vct=441.74\" /></a></p>\r\n\r\n<p>Mereka dilatih untuk mendeteksi dan menanggapi potensi ancaman atau situasi darurat dengan cepat dan efektif. Dengan demikian, mereka memberikan rasa aman kepada penghuni dan pengunjung wilayah tersebut. Pengamanan Aset Aset perusahaan atau organisasi merupakan investasi berharga yang perlu dijaga. Satpam PPH bertanggung jawab untuk melindungi aset-aset ini dari risiko pencurian, kerusakan, atau ancaman lainnya. Mereka melakukan patroli rutin dan menggunakan teknologi keamanan untuk memastikan keamanan aset. Hadang Ancaman Kriminalitas Satpam PPH dilengkapi dengan keterampilan dan pengetahuan untuk menghadang berbagai jenis ancaman kriminalitas. Mereka dapat memberikan respons cepat terhadap tindakan kriminal, termasuk tindak kejahatan seperti perampokan, vandalisme, dan tindakan kriminal lainnya. Keunggulan Layanan Satpam PPH Profesionalisme dan Pelatihan Satpam PPH menjalani pelatihan intensif untuk memastikan bahwa mereka dapat melaksanakan tugas mereka dengan profesional.</p>\r\n\r\n<p>Mereka memahami protokol keamanan, memiliki pengetahuan tentang teknologi keamanan terkini, dan dapat berinteraksi dengan masyarakat dengan cara yang ramah dan efektif. Penggunaan Teknologi Keamanan Satpam PPH menggunakan teknologi terkini untuk memperkuat sistem keamanan. CCTV, sistem akses pintu, dan teknologi pengawasan lainnya membantu mereka dalam melakukan pemantauan wilayah secara efisien. Penyelidikan dan Laporan Kejadian Jika terjadi insiden atau kejadian keamanan, Satpam PPH memiliki keterampilan untuk melakukan penyelidikan awal dan menyusun laporan kejadian. Hal ini membantu dalam memahami dan mencegah kejadian serupa di masa depan.</p>', 'article_images/6fFB8yBLXcbViv6RhWcrHGNNit4rwuVDCa1tuJb3.jpg', '2024-02-21 00:21:38', '2024-03-04 18:56:15'),
(12, 'Pembukaan Acara', '<p>jadi sekarang&nbsp;<strong>&nbsp;sedang pembukaan aca</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Menjadikan&nbsp;</strong>sekolah yang baik</li>\r\n	<li>menjadikan</li>\r\n	<li>jas</li>\r\n</ol>\r\n\r\n<p>jasjiasijaij</p>\r\n\r\n<p><strong>aisjiasj</strong></p>', 'article_images/RLLdTNoTTUUwEE6HivIzoJTvy3nxKqYeuMbR10zg.jpg', '2024-03-04 19:15:24', '2024-03-04 19:15:24'),
(14, 'Selamat Menunaikan Ibadah Puasa 1445H/2024', '<p>Puasa di bulan ramadhan merupakan sebuah&nbsp;<strong>keberkahan&nbsp;</strong>&nbsp;untuk umat Muslim di seluruh dunia.</p>', 'article_images/FPSEtd6bAvsBSwHFSCFW3pabRATKnLJYDn8swjex.jpg', '2024-03-08 22:47:59', '2024-03-08 22:47:59'),
(15, 'Selamat Hari Raya Nyepi 2024', '<p>Hari raya nyepi merupakan hari raya yang sering dilakukan oleh warga Bali dan pemeluk agamanya, jadi ini sedang di edit</p>', 'article_images/UnUXpCudrQXtATHClHZOPnWosBWTYUFTH6FGGuV1.jpg', '2024-03-08 22:49:10', '2024-03-08 22:56:56');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'diki', 'yanto@gmail.com', NULL, '$2y$12$I0m79MXtUNEtxWI3UUx3jO/exPVQv6CFqSez.zwDZIbMFsKw7ywiu', NULL, '2024-03-07 04:16:12', '2024-03-07 04:16:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
