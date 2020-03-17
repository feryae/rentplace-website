-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 07:09 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostanbandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_kost`
--

CREATE TABLE `list_kost` (
  `id` varchar(10) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `kos_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_kost`
--

INSERT INTO `list_kost` (`id`, `nama_kos`, `kategori`, `alamat`, `harga`, `kontak`, `kos_img`) VALUES
('K1', 'Kost Padjajaran', 'Putra', 'Jl. Sukabirus No.105', 'Rp. 650.000/bulan', '81312121524', 'img/kost/k1.jpg'),
('K10', 'Kost Wisma Embun Pagi', 'Putri', 'Jl. Sukabirus No.110,', 'Rp. 700.000/bulan', '0815-4752-2656', 'img/kost/k10.jpg'),
('K11', 'Sekar Kost', 'Putri', 'Jl. Sukabirus No.66', 'Rp. 700.000/bulan', '0811-237-236', 'img/kost/k11.jpg'),
('K12', 'Alea Kost', 'Putri', 'Jl. Sukapura No.20', 'Rp. 700.000/bulan', '0821-1856-1520', 'img/kost/k12.jpg'),
('K13', 'Pondok Azzahra', 'Putri', 'Babakan Ciamis', 'Rp. 1.000.000/bulan', '82170690101', 'img/kost/k13.jpg'),
('K14', 'Pondok Eden', 'Putra', 'Jl. H. Umar, Citeureup, Kec. Dayeuhkolot,', 'Rp. 1.000.000/bulan', '0877-1115-2331', 'img/kost/k14.jpg'),
('K15', 'Kost Wisma Okke', 'Putra', 'Dayeuhkolot, Bandung', 'Rp. 900.000/bulan', '82129557809', 'img/kost/k15.jpg'),
('K16', 'Pondok Naturaliza', 'Putri', 'Desa Sukapura Jl Mangga Dua Bandung', 'Rp 6.500.000/tahun', '0811-720-676', 'img/kost/k16.jpg'),
('K17', 'Kost Puri Indah 3', 'Putri', 'Jl Hj. Umayah 2 sukabirus', 'Rp. 900.000/bulan', '0821-2156-3336', 'img/kost/k17.jpg'),
('K18', 'Kost Cozy', 'Putra', 'Jl. H. Umayah 1 Jl. Sukabirus', 'Rp14.000.000/tahun\r\n', '0853-2419-2716', 'img/kost/k18.jpg'),
('K19', 'Pondok Felicia', 'Putri', 'jl. H. Umayah 1 Jl. Sukabirus No.20\r\n', 'Rp. 1.700.000/bulan', '0823-2011-8493', 'img/kost/k19.jpg'),
('K2', 'Kost Mutiara', 'Putra', 'JL. H. Umar No.33', 'Rp. 750.000/bulan', '87824091686', 'img/kost/k2.jpg'),
('K20', 'Kost Putri Enzoe Le Dortoir', 'Putri', 'Jl. H. Umayah II', 'Rp. 15.000.000/tahun', '0812-8477-6596', 'img/kost/k20.jpg'),
('K3', 'Kost Bougenville', 'Putra', 'No. 9 Jalan Adhyaksa Barat ', 'Rp. 750.000/bulan', '0878-2226-2737', 'img/kost/k3.jpg'),
('K4', 'Kost Wisma Mentari', 'Putri', 'Jl. Telekomunikasi No.1, Sukapura', 'Rp. 750.000/bulan', '0877-1115-2332\r\n', 'img/kost/k4.jpg'),
('K5', 'Kost Pondok Sembilan', 'Putra', 'Jl. Sukabirus No.F1 39', 'Rp. 800.000/bulan', '0821-1555-6062', 'img/kost/k5.jpg'),
('K6', 'Pondok Teladan', 'Putra', 'Jl. Sukabirus, Citeureup', 'Rp. 800.000/bulan', '0853-5127-5740', 'img/kost/k6.jpg'),
('K7', 'Kost Dee Boss', 'Putra', 'Jl. H. Umayah II No.42', 'Rp. 1.700.000/bulan', '0811-223-673', 'img/kost/k7.jpg'),
('K8', 'Kost Rumah Daun', 'Putra', 'Dayeuhkolot, Bandung', 'Rp. 1.000.000/bulan', '81-319-023-656\r\n', 'img/kost/k8.jpg'),
('K9', 'Kost Pondok Amanah', 'Putri', 'Jln. Radio Sukabirus No. 114 ', 'Rp. 900.000/bulan', '(022) 87305722', 'img/kost/k9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`, `phone`) VALUES
('faeardia', 'kikiki', 'faeardia@gmail.com', 'kikikiki', '0877293731601'),
('feryardia', 'telkomuniversity', 'peryardiansyah@gmail.com', 'Fery Ardiansyah', '087720373160');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_kost`
--
ALTER TABLE `list_kost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
