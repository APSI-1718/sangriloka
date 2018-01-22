-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 07:41 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_inventori_kolam_renang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `keterangan_barang` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `jumlah_barang_bagus` int(3) NOT NULL,
  `jumlah_barang_rusak` int(11) NOT NULL,
  `status_barang` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuan`
--

CREATE TABLE IF NOT EXISTS `detail_pengajuan` (
  `id` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `jumlah_pengajuan` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` varchar(10) NOT NULL,
  `nama_event` varchar(15) NOT NULL,
  `tema_event` varchar(30) DEFAULT NULL,
  `paket` varchar(300) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `tanggal_event` date NOT NULL,
  `status_event` varchar(15) NOT NULL,
  `status_bayar` char(1) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE IF NOT EXISTS `penerimaan` (
  `id_penerimaan` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `status_penerimaan` varchar(10) NOT NULL,
  `keterangan_penerimaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id_pengajuan` int(10) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `keterangan_pengajuan` varchar(20) NOT NULL,
  `status_pengajuan` varchar(10) NOT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE IF NOT EXISTS `perawatan` (
  `id_perawatan` varchar(10) NOT NULL,
  `jenis_perawatan` varchar(10) NOT NULL,
  `tanggal_perawatan` date NOT NULL,
  `pengajuan_biaya` int(10) NOT NULL,
  `penerimaan_biaya` int(10) NOT NULL,
  `status_perawatan` varchar(15) NOT NULL,
  `keterangan_perawatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_perawatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Status` varchar(15) DEFAULT NULL,
  `Stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `nama` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `tgl_pemesanan` date NOT NULL,
  `no_meja` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(15) DEFAULT NULL,
  `Jumlah` int(10) DEFAULT NULL,
  `Status` varchar(15) DEFAULT NULL,
  `Stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);


--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`Id`);

-- --------------------------------------------------------

--
-- Table structure for table `kelolaevent`
--

CREATE TABLE `kelolaevent` (
  `id_event` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_penyelenggaraan` date NOT NULL,
  `kebutuhan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelolameja`
--

CREATE TABLE `kelolameja` (
  `id_meja` int(11) NOT NULL,
  `jumlah_meja` int(11) NOT NULL,
  `type_meja` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelolamenu`
--

CREATE TABLE `kelolamenu` (
  `no_menu` int(11) NOT NULL,
  `daftar_menu` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenismakanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelolatugas`
--

CREATE TABLE `kelolatugas` (
  `id_tugas` int(11) NOT NULL,
  `Nama_tugas` varchar(20) NOT NULL,
  `penempatan_tugas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jk` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jabatan` char(1) NOT NULL,
  `posisi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelolaevent`
--
ALTER TABLE `kelolaevent`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `kelolameja`
--
ALTER TABLE `kelolameja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `kelolamenu`
--
ALTER TABLE `kelolamenu`
  ADD PRIMARY KEY (`no_menu`);

--
-- Indexes for table `kelolatugas`
--
ALTER TABLE `kelolatugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `tanggal` date NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `histori_cleaning_service`
--

CREATE TABLE `histori_cleaning_service` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `no_meja` int(11) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `no_meja` int(11) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` varchar(10) NOT NULL,
  `nama_tugas` varchar(25) NOT NULL,
  `kategori_tugas` varchar(25) NOT NULL,
  `tugas` varchar(25) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `histori_cleaning_service`
--
ALTER TABLE `histori_cleaning_service`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);


--
-- AUTO_INCREMENT for table `histori_cleaning_service`
--
ALTER TABLE `histori_cleaning_service`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `no_meja` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `order_makanan`
--

CREATE TABLE IF NOT EXISTS `order_makanan` (
  `no_order` int(10) NOT NULL,
  `no_meja` int(5) NOT NULL,
  `nama_order` varchar(20) NOT NULL,
  `jumlah_order` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok_alat_makanan`
--

CREATE TABLE IF NOT EXISTS `stok_alat_makanan` (
  `kode_am` int(10) NOT NULL,
  `nama_am` int(20) NOT NULL,
  `jumlah_am` int(10) NOT NULL,
  `kelayakan` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_am`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok_bahan_makanan`
--

CREATE TABLE IF NOT EXISTS `stok_bahan_makanan` (
  `kode_makanan` int(10) NOT NULL,
  `nama_makanan` varchar(30) NOT NULL,
  `jumlah_makanan` int(10) NOT NULL,
  `jenis_makanan` varchar(10) NOT NULL,
  `tanggal_expired` date NOT NULL,
  PRIMARY KEY (`kode_makanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_menu`
--

CREATE TABLE `daftar_menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `jenis_menu` varchar(25) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `bahanbahan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran_resto` (
  `id_pembayaran` int(10) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah_pembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_menu`
--
ALTER TABLE `daftar_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembayaran_resto`
--
ALTER TABLE `pembayaran_resto`
  ADD PRIMARY KEY (`id_pembayaran`);
-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan_resto`
--

CREATE TABLE IF NOT EXISTS `pelanggan_resto` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran_event` (
  `id_pembayran` varchar(10) NOT NULL,
  `id_booking` varchar(10) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL,
  PRIMARY KEY (`id_pembayran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pengiriman`
--

CREATE TABLE `pengajuan_pengiriman` (
  `id_pengajuan` int(10) NOT NULL,
  `id_penerimaan` int(10) NOT NULL,
  `jenis_properti` varchar(20) NOT NULL,
  `jumalah` int(10) NOT NULL,
  `nama_properti` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomsetup`
--

CREATE TABLE `roomsetup` (
  `id_room` varchar(10) NOT NULL,
  `jenis_room` varchar(20) NOT NULL,
  `jadwal_room` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengajuan_pengiriman`
--
ALTER TABLE `pengajuan_pengiriman`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `roomsetup`
--
ALTER TABLE `roomsetup`
  ADD PRIMARY KEY (`id_room`);

-- --------------------------------------------------------

--
-- Table structure for table `detail_menu_foodcourt`
--

CREATE TABLE `detail_menu_foodcourt` (
  `id_detail_menu` varchar(3) NOT NULL,
  `id_menu` varchar(3) NOT NULL,
  `id_stok` varchar(3) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuan_stok_foodcourt`
--

CREATE TABLE `detail_pengajuan_stok_foodcourt` (
  `id_detail_pengajuan` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `id_stok` varchar(3) NOT NULL,
  `id_pengajuan` varchar(10) NOT NULL,
  `id_penerimaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan_foodcourt`
--

CREATE TABLE `detail_penjualan_foodcourt` (
  `id_detail_penjualan` varchar(10) NOT NULL,
  `harga` float NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_menu` varchar(3) NOT NULL,
  `id_penjualan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_foodcourt`
--

CREATE TABLE `menu_foodcourt` (
  `id_menu` varchar(3) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `penjualan_foodcourt`
--

CREATE TABLE `penjualan_foodcourt` (
  `id_penjualan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` float NOT NULL,
  `total_bayar` float NOT NULL,
  `kembalian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok_foodcourt`
--

CREATE TABLE `stok_foodcourt` (
  `id_stok` varchar(3) NOT NULL,
  `nama_stok` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_menu_foodcourt`
--
ALTER TABLE `detail_menu_foodcourt`
  ADD PRIMARY KEY (`id_detail_menu`);

--
-- Indexes for table `detail_pengajuan_stok_foodcourt`
--
ALTER TABLE `detail_pengajuan_stok_foodcourt`
  ADD PRIMARY KEY (`id_detail_pengajuan`);

--
-- Indexes for table `detail_penjualan_foodcourt`
--
ALTER TABLE `detail_penjualan_foodcourt`
  ADD PRIMARY KEY (`id_detail_penjualan`);

--
-- Indexes for table `menu_foodcourt`
--
ALTER TABLE `menu_foodcourt`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `penjualan_foodcourt`
--
ALTER TABLE `penjualan_foodcourt`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `stok_foodcourt`
--
ALTER TABLE `stok_foodcourt`
  ADD PRIMARY KEY (`id_stok`);

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` varchar(20) NOT NULL,
  `judul_agenda` varchar(30) NOT NULL,
  `isi_agenda` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_event`
--

CREATE TABLE IF NOT EXISTS `konten_event` (
  `id_konten` varchar(20) NOT NULL,
  `judul_konten` varchar(30) NOT NULL,
  `isi_konten` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL,
  `gambar_konten` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notifikasi` varchar(30) NOT NULL,
  `judul_notifikasi` varchar(30) NOT NULL,
  `isi_notifikasi` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE IF NOT EXISTS `promosi` (
  `id_promosi` varchar(10) NOT NULL,
  `judul_promosi` varchar(30) NOT NULL,
  `isi_promosi` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL,
  `gambar_promosi` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konten_event`
--
ALTER TABLE `konten_event`
  ADD PRIMARY KEY (`id_konten`);


-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan_tiket`
--

CREATE TABLE `detail_penjualan_tiket` (
  `id_detail_penjualan` varchar(20) NOT NULL,
  `id_penjualan_tiket` varchar(10) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penyewaan`
--

CREATE TABLE `detail_penyewaan` (
  `id_detail_penyewaan` varchar(20) NOT NULL,
  `id_penyewaan_alat` varchar(20) NOT NULL,
  `id_alat` int(20) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_alat`
--

CREATE TABLE `harga_alat` (
  `id_alat` int(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `harga_alat` int(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_tiket`
--

CREATE TABLE `harga_tiket` (
  `id_tiket` int(20) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_tiket` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_perawatan`
--

CREATE TABLE `jadwal_perawatan` (
  `id_jadwal_perawatan` varchar(20) NOT NULL,
  `jenis_perawatan` varchar(30) NOT NULL,
  `jadwal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_tiket`
--

CREATE TABLE `penjualan_tiket` (
  `id_penjualan_tiket` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `total_harga` int(50) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `kembalian` int(50) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan_alat`
--

CREATE TABLE `penyewaan_alat` (
  `id_penyewaan` int(20) NOT NULL,
  `tanggal` int(20) NOT NULL,
  `total_harga` int(50) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `kembalian` int(50) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan_tiket`
--
ALTER TABLE `detail_penjualan_tiket`
  ADD PRIMARY KEY (`id_detail_penjualan`);

--
-- Indexes for table `detail_penyewaan`
--
ALTER TABLE `detail_penyewaan`
  ADD PRIMARY KEY (`id_detail_penyewaan`);

--
-- Indexes for table `harga_alat`
--
ALTER TABLE `harga_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `harga_tiket`
--
ALTER TABLE `harga_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `jadwal_perawatan`
--
ALTER TABLE `jadwal_perawatan`
  ADD PRIMARY KEY (`id_jadwal_perawatan`);

--
-- Indexes for table `penjualan_tiket`
--
ALTER TABLE `penjualan_tiket`
  ADD PRIMARY KEY (`id_penjualan_tiket`);

--
-- Indexes for table `penyewaan_alat`
--
ALTER TABLE `penyewaan_alat`
  ADD PRIMARY KEY (`id_penyewaan`);
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` varchar(10) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE IF NOT EXISTS `jenis_kamar` (
  `id_jenis` varchar(10) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `id_kamar` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `statuskamar` varchar(10) NOT NULL,
  `nokamar` int(10) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran_homestay` (
  `id_pembayaran` varchar(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `totalharga` int(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `pembayaran_loudry` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `notlp` int(8) NOT NULL,
  `email` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `lamainap` int(2) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE IF NOT EXISTS `gedung` (
  `id_gedung` varchar(10) NOT NULL,
  `jenis_gedung` varchar(30) DEFAULT NULL,
  `jumlah_kuota` varchar(30) DEFAULT NULL,
  `status_gedung` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_gedung`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` varchar(10) NOT NULL,
  `nama_paket` varchar(30) DEFAULT NULL,
  `harga_paket` int(10) DEFAULT NULL,
  `detail_paket` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_event`
--

CREATE TABLE IF NOT EXISTS `pelanggan_event` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `kode_booking` varchar(10) DEFAULT NULL,
  `pemesanan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_ruangan`
--

CREATE TABLE IF NOT EXISTS `barang_ruangan` (
  `Nama_Barang_Ruangan` varchar(25) DEFAULT NULL,
  `Jenis_Barang_Ruangan` varchar(25) DEFAULT NULL,
  `Keterangan_Barang_Ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `housekeeper`
--

CREATE TABLE IF NOT EXISTS `housekeeper` (
  `ID_Housekeeper` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIK` int(15) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `no_HP` int(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID_Housekeeper`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `ID_Jadwal` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `shif` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_Jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE IF NOT EXISTS `laundry` (
  `ID_Cucian` varchar(10) NOT NULL,
  `Nama_Pemilik` varchar(25) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_Cucian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_hotel`
--

CREATE TABLE IF NOT EXISTS `laundry_hotel` (
  `Nama_Cucian` varchar(25) DEFAULT NULL,
  `Jenis_cucian` varchar(25) DEFAULT NULL,
  `Berat_Cucian` varchar(25) DEFAULT NULL,
  `Tanggal_cucian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_konsumen`
--

CREATE TABLE IF NOT EXISTS `laundry_konsumen` (
  `Nama_Laundry` varchar(25) DEFAULT NULL,
  `Jenis_Laundry` varchar(25) DEFAULT NULL,
  `Berat_Laundry` varchar(25) DEFAULT NULL,
  `Total_Laundry` int(25) DEFAULT NULL,
  `Status_Cucian` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `ID_Ruangan` varchar(10) NOT NULL,
  `Nama_Ruangan` varchar(25) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_Ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `detail_barang` (
  `id_transaksi` int(10) DEFAULT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `id_pengiriman` int(10) DEFAULT NULL,
  `id_pembelian` int(10) DEFAULT NULL,
  `id_permintaan` int(10) DEFAULT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(10) DEFAULT NULL,
  `jenis_pembelian` varchar(50) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `jumlah_pembelian` int(20) DEFAULT NULL,
  `id_penerimaan` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `id_pengiriman` int(10) DEFAULT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `tujuan_pengiriman` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `permintaan` (
  `id_permintaan` int(10) DEFAULT NULL,
  `jenis_permintaan` varchar(50) DEFAULT NULL,
  `tanggal_permintaan` date DEFAULT NULL,
  `jumlah_permintaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(5) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_pegawai`
--

CREATE TABLE `kinerja_pegawai` (
  `id_kinerja` int(5) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `pro_dem` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_mutasi` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekrutmen`
--

CREATE TABLE `rekrutmen` (
  `no_pendaftaran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `j_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tingkat_pend` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);


--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  ADD PRIMARY KEY (`no_pendaftaran`);

CREATE TABLE `jurnal` (
  `id_jurnal` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengawai` varchar(20) NOT NULL,
  `laporan_ringkasan` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `id_permubahanModal` varchar(20) NOT NULL,
  `id_penggajihan` varchar(20) NOT NULL,
  `id_worksheet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `penggajihan`
--

CREATE TABLE `penggajihan` (
  `id_penggajihan` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggalAwal` date NOT NULL,
  `tanggalAkhir` date NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_modal`
--

CREATE TABLE `perubahan_modal` (
  `id_perubahan_modal` varchar(20) NOT NULL,
  `nama_perubahan_modal` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ringkasan_laporan`
--

CREATE TABLE `ringkasan_laporan` (
  `id_worksheet` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `penggajihan`
--
ALTER TABLE `penggajihan`
  ADD PRIMARY KEY (`id_penggajihan`);

--
-- Indexes for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  ADD PRIMARY KEY (`id_perubahan_modal`);

--
-- Indexes for table `ringkasan_laporan`
--
ALTER TABLE `ringkasan_laporan`
  ADD PRIMARY KEY (`id_worksheet`);
