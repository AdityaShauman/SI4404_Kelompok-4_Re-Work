-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 03:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `re-work`
--

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `idloker` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`idloker`, `nama`, `deskripsi`, `foto`, `link`) VALUES
(3, 'Fashion Product Designer', 'Requirement :\r\n- Male / Female\r\n- Bachelor degree in fashion or product design or related field\r\n- Minimum 2 years design experience\r\n- Fashion Enthusiast\r\n- Up to date with the fashion and social media trends.\r\n- Ready to work from office in Bandung', 'https://esgotado.com/assets/img/esgotado_logo.jpg', 'https://glints.com/id/opportunities/jobs/fashion-product-designer/6cb00f9d-a003-4b3b-a0c4-d09b72aa2d7e'),
(4, 'Odoo Development', 'Odoo Development idsolutions.id (Inovasi Dinamika Solusi)\r\n1) Collect Needs and draft ERP application requirements\r\n2) Design, Development and testing of Odoo (OpenERP) modules, projects, products and interfaces.\r\n3) Analyse the Scope document.\r\n4) Create low level requirement document in discussion with different teams.\r\n5) Follow best practices in Software development to ensure the readability and maintainability of the code.\r\n6) Re-use the features available in ODOO to fulfill the Scope objectives.\r\n7) Create custom module in ODOO to meet the specific domain requirement.\r\n8) Follow source code checking process to maintain the code in Git Version Control.\r\n9) Follow best practices for secured Software Development.', 'https://www.id-solutions.fr/wp-content/uploads/2020/12/LOGO-ID-solutions.png', 'https://glints.com/id/opportunities/jobs/source/spwd/odoo-development/9103e2b2-30f5-4245-8e16-53703a4a315e'),
(5, 'Influencer / Tallent / Model for Fashion Industry', 'Job spec\r\n- Menjadi tallent untuk konten kreatif social media (Instagram / Tiktok)\r\n- Menjadi tallent untuk kebutuhan produksi video & photo\r\n- Membuat konten tiktok\r\n- Live streaming di platform tertentu\r\n- Menjadi model foto / video\r\n- Marketing produk perusahaan\r\n\r\nJob requirement\r\n- Terbiasa di depan kamera\r\n- Memiliki kemampuan untuk berfikir kreatif untuk kebutuhan produksi konten\r\n- Up to date dengan trend\r\n- Good looking\r\n*DIUTAMAKAN WANITA', 'https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/e8feeffd95ee158bfbcd3e1cfc42bfd4.jpeg', 'https://glints.com/id/opportunities/jobs/influencer-tallent-model-for-fashion-industry/a69a72b7-fbc9-4fd1-b046-15fb1f5ed3b3');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `idmateri` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`idmateri`, `nama`, `deskripsi`, `media`) VALUES
(8, 'What is Lorem Ipsum?', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'https://ikpidepok.or.id/wp-content/uploads/2021/04/Lorem-Ipsum-alternatives.png'),
(9, 'Intro to Mechanical Keyboards', 'A mechanical keyboard is a typing device that uses mechanical switches to register key presses. You may have used one in decades past and remember it as a loud clicky keyboard, or more recently on popular gaming keyboards.', 'https://images.squarespace-cdn.com/content/v1/6116b9604a8e6b639a58a447/1628879297048-5QR9Q1XK13VJLM9LBRW9/SancRTangies-001_MDG05557.jpg?format=1500w');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `idpelatihan` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `media` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`idpelatihan`, `nama`, `deskripsi`, `media`, `harga`) VALUES
(1, 'Pelatihan Laravel', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'https://loremipsum.io/assets/images/lorem-ipsum-generator-custom-placeholder-text.jpg', 20000),
(2, 'Pelatihan Kepemimpinan', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown ...', 'https://akcdn.detik.net.id/visual/2019/07/11/26d3df53-6d57-4cde-8872-05c78c830b9b_169.jpeg?w=650', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idpendaftaran` int(50) NOT NULL,
  `iduser` int(50) NOT NULL,
  `idpelatihan` int(50) NOT NULL,
  `media` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `email`, `password`) VALUES
(1, 'Tes User', 'tes1@gmail.com', '$2y$10$60maq5uLHdW9pU98DcUWOuEAmMBTT8IdYi8s2FfUU/RFRDC9VX3Ea'),
(2, 'Tes User 2', 'tes2@gmail.com', '$2y$10$ra1WUkGKFA7M8ZEEjaRK4u0MWVsTevC.LAWC2sfWSwlPMuLnpU5Pm'),
(3, 'Tes User 3', 'tes3@gmail.com', '$2y$10$PHKahUJCbn2ZmtTVH5a37uzIpzJRzTEDUbyqAhWu8dbcYiQfiaJFO');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `idadmin` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`idadmin`, `nama`, `email`, `password`) VALUES
(7, 'Tes Admin', 'tesadmin@gmail.com', '$2y$10$khwV.AWQw5K4BE7QYd0PUOCnq8M77JQ1/uBfkNMA.Aq8jiR8v13WW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`idloker`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`idmateri`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`idpelatihan`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idpendaftaran`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpelatihan` (`idpelatihan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`idadmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `idloker` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `idmateri` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `idpelatihan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idpendaftaran` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `idadmin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `idpelatihan` FOREIGN KEY (`idpelatihan`) REFERENCES `pelatihan` (`idpelatihan`),
  ADD CONSTRAINT `iduser` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
