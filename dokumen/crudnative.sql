-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 01:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudnative`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `databooking`
--

CREATE TABLE `databooking` (
  `id` int(11) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databooking`
--

INSERT INTO `databooking` (`id`, `ruang`, `nama`, `alamat`, `notelepon`) VALUES
(1, 'Ruang01', 'Anantha Yoga', 'Banyuasri,Jln.Iman.Bonjol', '085486576396'),
(2, 'Ruang02', 'wahyu', 'Kintemani,Jln.Rahayukediri', '087567456237'),
(4, 'Ruang03', 'Suadnyani', 'Temukus,jl kusumayuda', '086375465243'),
(5, 'Ruang04', 'Andita', 'Lovina,jln gatot subroto', '086572764539');

-- --------------------------------------------------------

--
-- Table structure for table `datapengunjung`
--

CREATE TABLE `datapengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelepon` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapengunjung`
--

INSERT INTO `datapengunjung` (`id`, `nama`, `alamat`, `notelepon`, `email`) VALUES
(1, 'aditya Permadi ', 'Bakung,Jl.Bukit Lempuyang', '087567456237', 'adityapermadi43@gmail.com'),
(4, 'agungcandra', 'panji ,jalan candragupta', '087567847123', 'agungcandra28@gmail.com'),
(6, 'Mohamad Yusup', 'Jakarta', '089476345312', 'mohamadyusup01@gmail.com'),
(7, 'Tandi Maulana', 'Jinangdalem,Jalan anugrah', '086456274468', 'tandimaulana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `datapengurus`
--

CREATE TABLE `datapengurus` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelepon` varchar(100) NOT NULL,
  `bidangpekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapengurus`
--

INSERT INTO `datapengurus` (`id`, `nama`, `alamat`, `notelepon`, `bidangpekerjaan`) VALUES
(1, 'Gede Lanang', 'Negara,jalan desa banyubiru', '082154427086', 'Security'),
(2, 'kadek nengah', 'Lovina,jalan pandawa', '087567724375', 'Tukang Kebun'),
(3, 'Eka Saputra', 'Kintemani,jalan kedisan', '089697258467', 'Tukang Parkir'),
(4, 'Teguh Ardana', 'Bakung,jalan Bukit Patas', '08697528357', 'waiter'),
(8, 'Nyoman restu', 'Kintemani,jalan bukit penelokan', '087468264345', 'cleaning service'),
(14, 'Ngurah Merta Yasa', 'Penarukan,jalan kamboja ', '087789468476', 'security'),
(15, 'Ketut Jaya Arta', 'Pemaron,jalan durian', '085356354597', 'bartender'),
(16, 'Dimas Udin', 'Lombok,jalan hasanuddhin', '089587285465', 'chef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `databooking`
--
ALTER TABLE `databooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapengunjung`
--
ALTER TABLE `datapengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapengurus`
--
ALTER TABLE `datapengurus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `databooking`
--
ALTER TABLE `databooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `datapengunjung`
--
ALTER TABLE `datapengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `datapengurus`
--
ALTER TABLE `datapengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
