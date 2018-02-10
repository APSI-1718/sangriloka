-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 09:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sangrilokadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_makan`
--

CREATE TABLE `alat_makan` (
  `kode_am` varchar(10) NOT NULL,
  `nama_am` varchar(35) NOT NULL,
  `kategori_am` varchar(15) NOT NULL,
  `stok_am` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_makan`
--

INSERT INTO `alat_makan` (`kode_am`, `nama_am`, `kategori_am`, `stok_am`) VALUES
('AM001', 'Dinner Plate', 'Chinaware', 0),
('AM002', 'Dinner Spoon', 'Silverware', 0),
('AM003', 'Dinner Fork', 'Silverware', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `no_meja` int(2) DEFAULT NULL,
  `nama_menu` varchar(30) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `statusBayar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `status`, `tgl_pemesanan`, `no_meja`, `nama_menu`, `Qty`, `total`, `statusBayar`) VALUES
('PSN001', 3, '2018-02-08', NULL, 'Blue Ocean Soda', 1, 23000, 'Sudah Dibayar'),
('PSN002', 2, '2018-02-08', NULL, 'Antipasto Salad', 2, NULL, 'Belum Dibayar'),
('PSN003', 1, '2018-02-08', NULL, 'Cranberry Brie', 3, 36000, 'Belum Dibayar'),
('PSN004', 1, '2018-02-09', NULL, 'Blue Ocean Soda', 2, 46000, 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_alat_makan`
--

CREATE TABLE `penerimaan_alat_makan` (
  `id_penerimaan` varchar(10) NOT NULL,
  `id_pengajuan` varchar(10) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `kode_am` varchar(10) NOT NULL,
  `nama_am` varchar(30) NOT NULL,
  `jumlah_permintaan` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_alat_makan`
--

INSERT INTO `penerimaan_alat_makan` (`id_penerimaan`, `id_pengajuan`, `tanggal_penerimaan`, `kode_am`, `nama_am`, `jumlah_permintaan`, `jumlah_masuk`) VALUES
('TRM-AM-001', 'PJN-AM-001', '2018-02-10', 'AM001', 'Dinner Plate', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_bahan_makanan`
--

CREATE TABLE `penerimaan_bahan_makanan` (
  `id_penerimaan` varchar(10) NOT NULL,
  `id_pengajuan` varchar(10) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `kode_mkn` varchar(10) NOT NULL,
  `nama_mkn` varchar(30) NOT NULL,
  `jumlah_permintaan` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_bahan_makanan`
--

INSERT INTO `penerimaan_bahan_makanan` (`id_penerimaan`, `id_pengajuan`, `tanggal_penerimaan`, `kode_mkn`, `nama_mkn`, `jumlah_permintaan`, `jumlah_masuk`) VALUES
('TRM001', 'PJN001', '2018-01-26', 'BM001', 'Daging Sapi Premium', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_alat_makan`
--

CREATE TABLE `pengajuan_alat_makan` (
  `id_pengajuan` varchar(10) NOT NULL,
  `tanggal_pengajuan` varchar(15) NOT NULL,
  `kode_am` varchar(10) NOT NULL,
  `nama_am` varchar(50) NOT NULL,
  `status_pengajuan` varchar(10) NOT NULL,
  `jumlah_permintaan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_alat_makan`
--

INSERT INTO `pengajuan_alat_makan` (`id_pengajuan`, `tanggal_pengajuan`, `kode_am`, `nama_am`, `status_pengajuan`, `jumlah_permintaan`) VALUES
('PJN-AM-002', '09/02/2018', 'AM002', 'Dinner Spoon', '2', 4),
('PJN-AM-003', '09/02/2018', 'AM002', 'Dinner Spoon', '1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_bahan_makanan`
--

CREATE TABLE `pengajuan_bahan_makanan` (
  `id_pengajuan` varchar(10) NOT NULL,
  `tanggal_pengajuan` varchar(15) NOT NULL,
  `kode_mkn` varchar(10) NOT NULL,
  `nama_mkn` varchar(50) NOT NULL,
  `status_pengajuan` varchar(10) NOT NULL,
  `jumlah_permintaan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_bahan_makanan`
--

INSERT INTO `pengajuan_bahan_makanan` (`id_pengajuan`, `tanggal_pengajuan`, `kode_mkn`, `nama_mkn`, `status_pengajuan`, `jumlah_permintaan`) VALUES
('PJN-BM-002', '09/02/2018', 'BM001', 'Daging Sapi Premium', '2', 44),
('PJN-BM-003', '09/02/2018', 'BM002', 'Ikan Tuna', '1', 34);

-- --------------------------------------------------------

--
-- Table structure for table `stok_bahan_makanan`
--

CREATE TABLE `stok_bahan_makanan` (
  `kode_mkn` varchar(10) NOT NULL,
  `nama_mkn` varchar(30) NOT NULL,
  `jenis_mkn` varchar(15) NOT NULL,
  `stok_mkn` int(5) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_expired` date DEFAULT NULL,
  `kelayakan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_bahan_makanan`
--

INSERT INTO `stok_bahan_makanan` (`kode_mkn`, `nama_mkn`, `jenis_mkn`, `stok_mkn`, `tanggal_masuk`, `tanggal_expired`, `kelayakan`) VALUES
('BM001', 'Daging Sapi Premium', 'Daging', 0, NULL, NULL, 'Layak'),
('BM002', 'Ikan Tuna', 'Ikan', 0, NULL, NULL, NULL),
('BM003', 'Ikan Piranha', 'Ikan', NULL, NULL, NULL, NULL),
('BM004', 'Telur Onta', 'Telur', NULL, NULL, NULL, NULL),
('BM005', 'Daging Cincang', 'Daging', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_makan`
--
ALTER TABLE `alat_makan`
  ADD PRIMARY KEY (`kode_am`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `penerimaan_alat_makan`
--
ALTER TABLE `penerimaan_alat_makan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `penerimaan_bahan_makanan`
--
ALTER TABLE `penerimaan_bahan_makanan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `pengajuan_alat_makan`
--
ALTER TABLE `pengajuan_alat_makan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengajuan_bahan_makanan`
--
ALTER TABLE `pengajuan_bahan_makanan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `stok_bahan_makanan`
--
ALTER TABLE `stok_bahan_makanan`
  ADD PRIMARY KEY (`kode_mkn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
