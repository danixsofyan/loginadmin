-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2020 at 11:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dilopad`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_usaha`
--

CREATE TABLE `bidang_usaha` (
  `id` int(11) NOT NULL,
  `nama_bidang_usaha` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bidang_usaha`
--

INSERT INTO `bidang_usaha` (`id`, `nama_bidang_usaha`) VALUES
(1, 'Big data'),
(2, 'IoT'),
(3, 'Data Center'),
(4, 'Cloud'),
(5, 'Security'),
(6, 'Logistic'),
(7, 'Finance'),
(8, 'Health'),
(9, 'Education'),
(10, 'Government'),
(11, 'Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `deskripsi` text,
  `url` varchar(255) DEFAULT NULL,
  `id_startup` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `image` text,
  `idkategori` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `deskripsi`, `url`, `id_startup`, `created_date`, `created_by`, `image`, `idkategori`) VALUES
(1, 'Produku', 'z', 'https://www.google.com/', 1, '2020-03-12 11:42:06', 'SYSTEM', 'Size_Chart.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `idproposal` int(11) NOT NULL,
  `idstartup` varchar(45) DEFAULT NULL,
  `clnkonsumen` varchar(128) DEFAULT NULL,
  `masalahkonsumen` varchar(45) DEFAULT NULL,
  `jmlhkonsumen` varchar(45) DEFAULT NULL,
  `ukpasar` varchar(45) DEFAULT NULL,
  `uniqevalue` varchar(45) DEFAULT NULL,
  `unfair` varchar(45) DEFAULT NULL,
  `ujicoba` varchar(45) DEFAULT NULL,
  `pernahujicoba` varchar(45) DEFAULT NULL,
  `biaya` varchar(45) DEFAULT NULL,
  `delchan` varchar(45) DEFAULT NULL,
  `ukproduk` varchar(45) DEFAULT NULL,
  `capaianvalue` varchar(45) DEFAULT NULL,
  `kompetitor` varchar(45) DEFAULT NULL,
  `positioning` varchar(45) DEFAULT NULL,
  `teknologi` varchar(45) DEFAULT NULL,
  `nonteknologi` varchar(45) DEFAULT NULL,
  `revenue` varchar(45) DEFAULT NULL,
  `pendanaan` varchar(45) DEFAULT NULL,
  `investor` varchar(45) DEFAULT NULL,
  `badanusaha` varchar(45) DEFAULT NULL,
  `saham` varchar(45) DEFAULT NULL,
  `harapan` varchar(45) DEFAULT NULL,
  `pitchdeck` varchar(45) DEFAULT NULL,
  `mockup` varchar(45) DEFAULT NULL,
  `petakompetisi` varchar(45) DEFAULT NULL,
  `videoprofile` varchar(45) DEFAULT NULL,
  `datapendukung` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`idproposal`, `idstartup`, `clnkonsumen`, `masalahkonsumen`, `jmlhkonsumen`, `ukpasar`, `uniqevalue`, `unfair`, `ujicoba`, `pernahujicoba`, `biaya`, `delchan`, `ukproduk`, `capaianvalue`, `kompetitor`, `positioning`, `teknologi`, `nonteknologi`, `revenue`, `pendanaan`, `investor`, `badanusaha`, `saham`, `harapan`, `pitchdeck`, `mockup`, `petakompetisi`, `videoprofile`, `datapendukung`) VALUES
(1, '1', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'Invoice_Ypbb_februari_2_2020_.pdf', 'youtube.jpg', 'MoU_kerjasama_Branding_Kataji_Goods.pdf', NULL, 'MoU_kerjasama_Branding_Sedari_Kini.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `socioide`
--

CREATE TABLE `socioide` (
  `id_socioide` int(250) NOT NULL,
  `id_socio` int(11) DEFAULT NULL,
  `idea_title` varchar(250) NOT NULL,
  `deskripsi` text,
  `link` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `staging` varchar(5) DEFAULT NULL,
  `dokumen_analisa` varchar(255) DEFAULT NULL,
  `proposal` varchar(255) DEFAULT NULL,
  `pitch_deck` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `sdm` varchar(255) DEFAULT NULL,
  `peta` varchar(255) DEFAULT NULL,
  `fakta` varchar(255) DEFAULT NULL,
  `tahun_berdiri` varchar(10) DEFAULT NULL,
  `domisili` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `jmlhfounder` varchar(45) DEFAULT NULL,
  `jmlhpersonil` varchar(45) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `facebookstartup` varchar(45) DEFAULT NULL,
  `twitterstartup` varchar(45) DEFAULT NULL,
  `linkedinstartup` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `socioide`
--

INSERT INTO `socioide` (`id_socioide`, `id_socio`, `idea_title`, `deskripsi`, `link`, `status`, `created_by`, `created_date`, `staging`, `dokumen_analisa`, `proposal`, `pitch_deck`, `resume`, `jadwal`, `sdm`, `peta`, `fakta`, `tahun_berdiri`, `domisili`, `alamat`, `image`, `jmlhfounder`, `jmlhpersonil`, `email`, `facebookstartup`, `twitterstartup`, `linkedinstartup`) VALUES
(1, 1, 'Dani', 'z', 'z', 1, 'SYSTEM', '2020-03-12 11:38:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2000', 'Bandung', 'z', 'logo.jpg', '2', '2', 'danixsofyan@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `socioide_proposal`
--

CREATE TABLE `socioide_proposal` (
  `id` int(11) NOT NULL,
  `id_socioide` int(11) DEFAULT NULL,
  `proposal` text,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(10) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_founder`
--

CREATE TABLE `t_founder` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `profile_team` varchar(256) DEFAULT NULL,
  `startup_id` int(11) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `submit_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `age` tinyint(2) NOT NULL DEFAULT '0',
  `province_id` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `birth_place` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `role_info` text,
  `education` text,
  `experience` text,
  `job` text,
  `skill` text,
  `skill_info` text,
  `work_time` varchar(50) DEFAULT NULL,
  `work_time_info` text,
  `achievement` text,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `t_founder`
--

INSERT INTO `t_founder` (`id`, `name`, `profile_team`, `startup_id`, `image`, `position`, `url`, `submit_date`, `update_date`, `age`, `province_id`, `city_id`, `status`, `birth_place`, `birth_date`, `email`, `phone`, `role`, `role_info`, `education`, `experience`, `job`, `skill`, `skill_info`, `work_time`, `work_time_info`, `achievement`, `facebook`, `twitter`, `linkedin`) VALUES
(1, 'Dani', NULL, 1, '1.jpg', 'z', NULL, NULL, NULL, 0, 0, 0, 0, 'z', '1990-01-01', 'z@z.com', '087823327307', 'teknik', 'z', 'z', 'z', 'z', 'z', 'z', 'full-time', '', 'z', '', '', 'z'),
(2, 'Sofyan', NULL, 1, 'dani_ava.jpg', 'z', NULL, NULL, NULL, 0, 0, 0, 0, 'z', '1990-01-01', 'z@z.com', '087823327307', 'design', 'z', 'z', 'z', 'z', 'z', 'z', 'part-time', '', 'z', '', '', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL,
  `tmptlahir` varchar(128) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `noidentitas` varchar(128) DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `pekerjaan` varchar(128) DEFAULT NULL,
  `pendidikan` varchar(128) DEFAULT NULL,
  `jabatan` varchar(128) DEFAULT NULL,
  `perusahaan` varchar(128) DEFAULT NULL,
  `nohp` varchar(128) DEFAULT NULL,
  `notlp` varchar(128) DEFAULT NULL,
  `fb` varchar(128) DEFAULT NULL,
  `twitter` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `tmptlahir`, `tgllahir`, `noidentitas`, `alamat`, `provinsi`, `kota`, `pekerjaan`, `pendidikan`, `jabatan`, `perusahaan`, `nohp`, `notlp`, `fb`, `twitter`) VALUES
(1, 'Dani', 'Sofyan', 'danixsofyan@gmail.com', 'profile.jpg', '$2y$10$zacsp4rf/eHE238HLYVZ6uoy9.AW8d/b8ToP0hDEaApEQ0a4is226', 1, 1, '2020-03-04', 'Bandung', '1993-11-14', '1232', 'asdasdas', 'Jawa Barat', 'Bandung', 'Freelancer', 'S1', 'Direktur', 'PT Delta Tiga Media', '123', '123', 'z', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 6),
(11, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Data'),
(3, 'Profile'),
(4, 'Menu'),
(5, 'User'),
(6, 'Form');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'Profil', 'profile', 'fas fa-fw fa-user', 1),
(3, 3, 'Ubah Profil', 'profile/edit', 'fas fa-fw fa-user-edit', 1),
(4, 4, 'Pengelolaan Menu', 'menu', 'fas fa-fw fa-folder', 1),
(5, 4, 'Pengelolaan Submenu', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 5, 'Daftar Pengguna', 'user', 'fas fa-fw fa-user-tie', 1),
(8, 3, 'Ganti Password', 'profile/changepassword', 'fas fa-fw fa-key', 1),
(9, 2, 'Data Startup', 'data/startup', 'fas fa-database', 1),
(10, 5, 'Hak Akses', 'user/role', 'fas fa-user', 1),
(11, 2, 'Data Lokasi', 'data/lokasi', 'fas fa-map-marked-alt', 1),
(12, 2, 'Laporan', 'data/laporan', 'fas fa-file', 1),
(13, 6, 'DiLo PAD', 'form/home', 'fas fa-file', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'danixsofyan@gmail.com', '2byunhA79Da9/W+Oefnoddo67v//uViQ9cRGTCzxET4=', 2020),
(2, 'z@z.com', 'Wdmku+eRp1gcneGLAIJ7PyXZ5I5+nemuZ+qB0daw2VI=', 2020),
(3, 'tes@tes.com', 'kS/10a1aoiIigSLyPgPNa8i/jxC+LDIspO50CpLKBq4=', 2020),
(4, 'a@a.com', 'I/ldrAj4cZ5r2v4ooEkLmh/McQuHsVtB9YquKPasc2s=', 2020),
(5, 'a@a.com', 'G/VmFTtkNgR6VVGgHWCME63yoQpK4TWQeDnxvyV3/Lk=', 2020),
(6, 'a@a.com', '2/tFzsxuZtqVqkUvuNOKv6vfkJgw8fnDfOZ54JuC7oQ=', 2020),
(7, 'a@a.com', 'lejv95hTztShwoPfYfDWIjGzszUOGoveILgdbO7hg1M=', 2020),
(8, 'a@a.com', 'lsO/wZdyxJwbzpjRw2dZdxm+hP71wVK4ceCKIhp4ZgY=', 2020),
(9, 'a@a.com', 'KaHumF1LmyaIuu1az93gQctBqSu6bcVSJCtDU0AB2M0=', 2020),
(10, 'a@a.com', 'jeIPqDBd1wCSZtXvpvUB1AvTuRu/Nhehxm8fHACVyu8=', 2020),
(11, 'z@z.com', '4RuGrH74NjZeS3ojpQxuv7+Q4PyqN95ZmvNrortX5hY=', 2020),
(12, 'a@a.com', 'gkmr0+8eyho2Hg3UcNHl7Bqt8rH6oA+EY/Jp1aoUoOo=', 2020),
(13, 'b@b.com', 'w3ZgyteQpfvoGX4kt9fd+xL4k8YcqxcUWRBx/x/VFDU=', 2020),
(14, 'm@m.com', '3huBMB2STQoQwAzzPE+vjFrDKTPzms4pnXYVmFOrXd4=', 2020),
(15, 'a@a.com', 'yrfylmMoecoru12oSSJQnw/KYgmLHxzQ2lwo90nWI5c=', 2020),
(16, 'b@b.com', 'rrOiaCog0jkmwUj4s+3wzQPvWuplOHLmk+2QU8NnNYA=', 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_usaha`
--
ALTER TABLE `bidang_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`idproposal`);

--
-- Indexes for table `socioide`
--
ALTER TABLE `socioide`
  ADD PRIMARY KEY (`id_socioide`) USING BTREE;

--
-- Indexes for table `socioide_proposal`
--
ALTER TABLE `socioide_proposal`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `t_founder`
--
ALTER TABLE `t_founder`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_indigo_startup_team_profile_0` (`startup_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_usaha`
--
ALTER TABLE `bidang_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `idproposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socioide`
--
ALTER TABLE `socioide`
  MODIFY `id_socioide` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socioide_proposal`
--
ALTER TABLE `socioide_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_founder`
--
ALTER TABLE `t_founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
