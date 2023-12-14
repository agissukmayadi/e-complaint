-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2023 at 11:02 AM
-- Server version: 5.6.40
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecomplaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int(11) NOT NULL,
  `location` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id_contact`, `location`, `email`, `telp`) VALUES
(1, 'Jln.Pagelaran, Bogor, 16610', 'ecomplaint@gmail.com', '085116612822');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id_faq` int(11) NOT NULL,
  `answer` text NOT NULL,
  `question` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_faq`
--

INSERT INTO `tb_faq` (`id_faq`, `answer`, `question`, `date_created`) VALUES
(1, 'E-Complaint adalah Sistem aplikasi bagi masyarakat yang ingin menyampaikan aduan mengenai penyalahgunaan wewenang, pengabaian kewajiban dan/atau pelanggaran larangan yang dilakukan di lingkungan sekitar', 'Apakah Aplikasi E-Complaint ini?', 1617500069),
(2, 'Respon yang diberikan kepada pelapor berupa respon awal (ucapan terima kasih telah melakukan pengaduan) dan status/tindak lanjut pengaduan paling akhir sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan. Respon terkait dengan status/tindak lanjut pengaduan dapat dilihat dalam history pengaduan Aplikasi E-Complaint.', 'Apakah bentuk respon yang diberikan kepada pelapor atas pengaduan yang disampaikan?', 1613901173),
(3, 'Pengaduan yang disampaikan wajib diberikan dalam kurun waktu paling lambat 30 (tiga puluh) hari terhitung sejak pengaduan diterima. Untuk respon yang disampaikan melalui surat dapat diberikan apabila pelapor mencantumkan identitas secara jelas. Untuk respon dari media pengaduan lainnya akan disampaikan dan diberikan sesuai identitas pelapor yang dicantumkan dalam media pengaduan tersebut.', 'Berapa lama respon atas pengaduan yang disampaikan diberikan kepada pelapor?', 1613901168),
(4, 'Pengaduan yang Anda berikan akan direspon dan tercantum dalam aplikasi E-complaint ini dan akan terupdate secara otomatis sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan. Untuk dapat melihat respon yang diberikan, Anda harus login terlebih dahulu dengan username yang telah Anda registrasikan di aplikasi ini dan Anda dapat melihat status pengaduan dalam history pengaduann. Sebagai catatan, pengaduan Anda akan lebih mudah ditindaklanjuti apabila memenuhi unsur pengaduan. Hal lebih lanjut/lengkap terkait dengan unsur pengaduan dapat dilihat di sini.', 'Apakah pengaduan yang saya berikan akan selalu mendapatkan respon?', 1613901166),
(5, 'Pengaduan yang dikirim oleh user mengandung unsur HOAX. Akun yang di nonaktifkan tidak bisa di kembalikan', 'Mengapa akun saya di nonaktifkan?', 1613901156),
(6, 'test', 'test', 1700633314);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `laporan` text NOT NULL,
  `file` varchar(128) NOT NULL,
  `status` enum('0','proses','tolak','selesai') NOT NULL,
  `keterangan` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id_pengaduan`, `nik`, `id_subject`, `laporan`, `file`, `status`, `keterangan`, `date_created`) VALUES
(21, '3201292605030001', 1, '<p>TES PENGADUAN</p>\r\n', '49622.jpg', 'selesai', '', 1615300929),
(23, '3201292605030001', 1, '<p>TES UKK</p>', '49623.jpg', 'selesai', '', 1615339202),
(24, '3201291231231231', 1, '<p>asdasdasdasdasdasd</p>\r\n', '49624.jpg', 'selesai', '', 1615513473),
(26, '3201292605030001', 1, '<p>hrjhr</p>', 'IMG_20210208_1506326.jpg', 'selesai', '', 1617511118),
(27, '3201292605030001', 1, '<p>hrjhr</p>', 'IMG_20210208_1506326.jpg', 'tolak', 'tesss', 1617511118),
(28, '3201292605030001', 1, '<p>lolololo</p>', 'IMG-20190817-WA0018.jpg', 'proses', '', 1617522014),
(30, '3201292605030001', 1, '<p>sasa</p>', '6289622694277_status_94b13b516481479ba2f0213bb3e2952d.jpg', 'tolak', 'tes', 1617540303),
(31, '3201292605030001', 1, '<p>TES</p>', 'IMG-20~2.JPG', 'selesai', '', 1617585506),
(32, '3201292605030001', 1, 'twesss', 'Screenshot_(3).png', 'tolak', 'jrakjta', 1618729688),
(39, '3201292605030001', 1, 'rcar', '', 'tolak', 'vrabrabr', 1623203901),
(40, '3201292605030001', 1, 'vwqvwq', '', 'tolak', 'Data palsu', 1623204033),
(41, '3201292605030001', 1, 'rvavrata', '', 'tolak', 'agisss', 1623204047),
(42, '3201292605030001', 1, 'AGISSSSS', '', 'selesai', '', 1623204158),
(43, '3201292605030001', 8, 'SKUYY', '', 'selesai', '', 1623204415),
(44, '3201292605030001', 1, 'PPPP', '', 'tolak', 'aaaaa', 1623204473),
(45, '3201292605030001', 1, 'BISSAA', 'Screenshot_(11).png', 'tolak', 'bisa ga ya', 1623204500),
(46, '3201292605030001', 1, 'rvavravra', '', '0', '', 1623333222),
(47, '3201292605030001', 8, 'dfgvhbjnk', 'Screenshot_(1).png', '0', '', 1623333753);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `date_created`) VALUES
(3, 'Agis Sukmayadi', 'admin', '$2y$10$KZrxRuhgUhJbdusKocWw6uMu648IRWGKWrCkD3uH0VijhgjNO2RBK', '08888888884', 'admin', 1613653312),
(5, 'Luki Supriyadi', 'lukisupriyadi', '$2y$10$PBtb6KE3sELeJZDzhR2n2eD18h7I.qY1ulmtnoB.SopnIdZYcfqvK', '0857162767167', 'petugas', 1613912175),
(7, 'petugas', 'petugas', '$2y$10$Xyk6PcmhqdePloQ2BNA2W.j7gFJFnWx5b7Z22DvDE8dw9nLQ1kfKO', '048058070570', 'petugas', 1617520684),
(8, 'petugas1', 'petugas1', '$2y$10$Nuybh0s5cIiq.TmJLxBBneYEFlDRxvmacxahKBubddA/ecHWf8qf.', '0939754862', 'petugas', 1698638963),
(9, 'ggcrush', 'ggcrush', '$2y$10$3xHRbCgTY90XYEWHJy2EiOfzHtTNhIrLhzFviuwIicetDwNbR3PFK', '1234567890', 'petugas', 1698639016),
(10, 'agis', 'agissukmayadi', '$2y$10$JfiDUMRxTMQJR/RRo7WVKe8p3iDsXVn0YQhn5IJ9Whu8X536R0Tae', '08058081084', 'petugas', 1700792713);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `header` text NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `header`, `footer`) VALUES
(1, 'E-Complaint adalah Sistem aplikasi bagi masyarakat yang ingin menyampaikan aduan mengenai penyalahgunaan wewenang, pengabaian kewajiban dan/atau pelanggaran larangan yang dilakukan di lingkungan sekitar', 'Laporkan kepada kami jika ada penyalahgunaan wewenang, pengabaian kewajiban dan/atau pelanggaran peraturan perundang-undangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subject`
--

CREATE TABLE `tb_subject` (
  `id_subject` int(11) NOT NULL,
  `subject` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_subject`
--

INSERT INTO `tb_subject` (`id_subject`, `subject`) VALUES
(1, 'Infrastruktur'),
(8, 'Keamanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggapan`
--

CREATE TABLE `tb_tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggapan` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tanggapan`
--

INSERT INTO `tb_tanggapan` (`id_tanggapan`, `id_pengaduan`, `id_petugas`, `tanggapan`, `date_created`) VALUES
(11, 21, 5, '<p>Iya</p>', 1615339469),
(12, 24, 5, '<p>njrcanj</p>', 1615900735),
(13, 23, 5, '<p>hhh</p>\r\n\r\n<p>&nbsp;</p>', 1617514501),
(14, 26, 7, 'nrajtnajnta', 1623859669),
(15, 31, 7, 'sdfdsaAS', 1624159646),
(16, 43, 7, 'skuyyy', 1624279121),
(17, 42, 9, 'di acc ngab', 1698639069);

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `telp` varchar(12) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `keterangan` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `nama`, `username`, `password`, `email`, `jenis_kelamin`, `telp`, `foto`, `status`, `keterangan`, `date_created`) VALUES
('0000000000000000', 'Belum Di Verfikasi', 'belumdiverifikasi', '$2y$10$ntiCwUrZAriwOtLvdEDSMegevSGK5tmMM5RIWBW6TzIfE0aZkQGjK', 'belumverifikasi@gmail.com', 'Pria', '000000000000', 'pria_default.png', 1, '', 1615276219),
('1111111111111111', 'aktif', 'aktif', '$2y$10$rYplkHZZKXi4lMw/t7LFU.GKUd8WUdQphA4vkcwZqpbVMBTX1VGH.', 'aktif@gmail.com', 'Wanita', '111111111111', 'wanita_default.png', 1, '', 1615276267),
('1111111111111112', 'agis sukmayadi', 'agis123', '$2y$10$AwkXiRVTq5nSpi8LlQVWBei/5OcSisnqpWUJYMonKt1qroqfHOuy.', 'agis@gmail.com', 'Pria', '333333333331', 'pria_default.png', 2, 'rcacra', 1614936574),
('1233455667889123', 'deaa aanastasauaaa', 'deaanst', '$2y$10$bSQ0hBkVyQTEk9wfkDFg.uQqJQTOWNzNSwJFtmrOUh5YVVtkIUkFy', 'deaa@gmail.com', 'Wanita', '123456789012', 'wanita_default.png', 2, '', 1614934620),
('1234512345123451', 'Sahdan', 'sahdan', '$2y$10$Kunwpi1JbJ9.F1jGU6T7IeHLJ0EJ2s1/mBgGoV5tufyMIq.gPw1ay', 'mhmmdsahdan@gmail.com', 'Pria', '089608746372', 'pria_default.png', 3, '', 1614069644),
('1234562857275463', 'Agis Sukmayadi', 'agis000', '$2y$10$5SNXtL5Z8ejb9bid4/hBGOeb.OOJBO6Nch45u5BZa3fc6hBKWYU8C', 'agiss000@gmail.com', 'Pria', '085156134912', 'pria_default.png', 0, '', 1698638780),
('1234567890123451', 'Agis Sukmayadi', 'agis211', '$2y$10$zD6cKS6pNHWXAgjGfy2iZep.BXLX57scK/IQCcIQdazY3ZIRVzhrC', 'agi111s@gmail.com', 'Pria', '085156133921', 'pria_default.png', 0, '', 1702526207),
('2222222222222222', 'dinonaktifkan', 'dinonaktifkan', '$2y$10$cpeUwu3O.gYWScRRAqEAHeDuk4hr12xVAfUgufMW87qgJbM/N9MYO', 'dinonaktifkan@gmail.com', 'Pria', '222222222222', 'pria_default.png', 2, '', 1615276423),
('3201291231231231', 'ahmaddiffa', 'ahmaddiffa', '$2y$10$XJNNSovIRASLzGlpyIvYzOGlkYXK25QAxWsUPXpxureKW4jeejt7C', 'ahmaddiffa@gmail.com', 'Pria', '081329301238', 'pria_default.png', 2, '', 1615513388),
('3201292575823822', 'agiss eeee', 'agiss121', '$2y$10$7NiHbGxCBahhlI/igxQdxOvkUHrdNPjngGj4ube7a6PvWW8vQv31q', 'agissukmaaddd@gmail.com', 'Pria', '08456838648', 'pria_default.png', 3, '', 1623028099),
('3201292605030001', 'Agis Sukmayadi', 'agissukmayadi', '$2y$10$HcD02DFka8YF5YsLRT2HgOc3u3THKYX3uu697LQoS6mLTzi1IVX8y', 'agissukmayadi009@gmail.com', 'Pria', '085156134923', 'TES.jpg', 1, 'eaveavea', 1613651487),
('3201292605030010', 'Agis Sukmayadi', 'agissukmayadi10', '$2y$10$.3N9s6tUy00uk9dumapw6.AY8CufJY7TWosDgFtLWXFGg71PlqjDe', '12221326@bsi.ac.id', 'Pria', '085156134921', 'pria_default.png', 0, '', 1697869732),
('3201292605030920', 'Wira', 'wira009', '$2y$10$mFojrRnjk7n2OGROCEqfsOimUSfmjOiTcb8dVK9AIdBOnmpLtlcUS', 'wira@gmail.com', 'Pria', '085156134999', 'pria_default.png', 2, '', 1614842179),
('3201292605031111', 'Agis', 'agissukmayadi1', '$2y$10$0HWB66hGQgoJZoxHrKe51evcu9LryLVEL4OyiW8cKkMbJwXAHAxb.', 'agisss@gmail.com', 'Pria', '085156143029', 'pria_default.png', 0, '', 1623071507),
('3201292605031112', 'Agos SSSS', 'ssss1', '$2y$10$NGJIDC1KrPMMZKWyKDGYqettl1xn38TATcAUymd0Y5I/D3ZaYj9GW', 'ceaea@gmail.com', 'Wanita', '085156132134', 'wanita_default.png', 0, '', 1624279476),
('3201292605039288', 'TESSS', 'tesss1', '$2y$10$saZgZLcYfFc8U9iVtjRJgeAMdWz34CjkDb16cZoLcSYOAd0XkiI3K', 'ag2is@gmail.com', 'Pria', '904081084080', 'pria_default.png', 3, '', 1617521656),
('3201292605039871', 'Agis Sukmayadi', 'agissukmayadi009', '$2y$10$NfEKh701ISXWT0q5DlzRT.RR4XRZiQMo2dkmK.BLYsE1NzSGFFEGG', 'agissukmayadi123@gmail.com', 'Pria', '085156134922', 'pria_default.png', 2, 'vnrajvnra\r\n', 1617067890),
('3201292605050001', 'Agis', 'sukmayadi', '$2y$10$XqTyrABN7YmMutPE2y0A7.cYhTyTxU3J0H84cgPwLt32HPjenWW12', 'akunagis009@gmail.com', 'Pria', '089611359087', 'pria_default.png', 2, '', 1615855330),
('3201292605099992', 'Supriyati', 'supriyati133', '$2y$10$qM4OugRYRWw2bFI11RsCseHjdQpDxmzrpMHecBCtk0VLM8Bd8Vzui', 'supriyati009@gmail.com', 'Wanita', '085156192891', 'wanita_default.png', 3, '', 1614842261),
('3201293784781832', 'Ahmad Diffa', 'duta233', '$2y$10$bCtg2D3G8bodWbQMdTOwH.egmFtayRY9JeZlQnLfhMD30YPoFkSse', 'duta@gmail.com', 'Pria', '085156128391', 'pria_default.png', 2, '', 1614842224),
('3333333333333333', 'tidakdiverifikasi', 'tidakdiverifikasi', '$2y$10$ZV2IY.sUrw/ytInNfbOKi./mR0t6pWZfavyn9bC26HYvxqIRLReBS', 'tidakdiverifikasi@gmail.com', 'Pria', '333333333333', 'pria_default.png', 3, '', 1615276372),
('9573757271535241', 'aigheai', 'agieg', '$2y$10$bj/ppn.KswlU2CnnCT766eXHRjXaRT5dqiovE49rDN10yibQ1.YDS', 'agirigr@gmail.com', 'Pria', '092074961994', 'pria_default.png', 0, '', 1700826237);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_subject`
--
ALTER TABLE `tb_subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD CONSTRAINT `tb_pengaduan_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `tb_subject` (`id_subject`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_pengaduan_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE;

--
-- Constraints for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD CONSTRAINT `tb_tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `tb_pengaduan` (`id_pengaduan`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
