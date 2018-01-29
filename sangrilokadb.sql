-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jan 2018 pada 14.59
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_pegawai` varchar(10) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_pegawai`, `tanggal_absen`, `status`) VALUES
('SL0001', '2018-01-28', 'Hadir'),
('SL0002', '2018-01-28', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` varchar(20) NOT NULL,
  `judul_agenda` varchar(30) NOT NULL,
  `isi_agenda` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `keterangan_barang` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `jumlah_barang_bagus` int(3) NOT NULL,
  `jumlah_barang_rusak` int(11) NOT NULL,
  `status_barang` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_ruangan`
--

CREATE TABLE `barang_ruangan` (
  `Nama_Barang_Ruangan` varchar(25) DEFAULT NULL,
  `Jenis_Barang_Ruangan` varchar(25) DEFAULT NULL,
  `Keterangan_Barang_Ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` varchar(5) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_pegawai`, `tgl_mulai`, `tgl_akhir`, `ket`) VALUES
('C0001', 'SL0001', '2018-01-28', '2018-02-27', 'Cuti Sakit'),
('C0002', 'SL0003', '2018-01-28', '2018-02-27', 'Cuti Bertapa');

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
-- Struktur dari tabel `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id_transaksi` int(10) DEFAULT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `id_pengiriman` int(10) DEFAULT NULL,
  `id_pembelian` int(10) DEFAULT NULL,
  `id_permintaan` int(10) DEFAULT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_menu_foodcourt`
--

CREATE TABLE `detail_menu_foodcourt` (
  `id_detail_menu` varchar(3) NOT NULL,
  `id_menu` varchar(3) NOT NULL,
  `id_stok` varchar(3) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengajuan`
--

CREATE TABLE `detail_pengajuan` (
  `id` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `jumlah_pengajuan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengajuan_stok_foodcourt`
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
-- Struktur dari tabel `detail_penjualan_foodcourt`
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
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
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
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` varchar(10) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` varchar(10) NOT NULL,
  `jenis_gedung` varchar(30) DEFAULT NULL,
  `jumlah_kuota` varchar(30) DEFAULT NULL,
  `status_gedung` varchar(30) DEFAULT NULL
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
-- Struktur dari tabel `histori_cleaning_service`
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
-- Struktur dari tabel `housekeeper`
--

CREATE TABLE `housekeeper` (
  `ID_Housekeeper` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIK` int(15) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `no_HP` int(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_Jadwal` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `shif` varchar(10) DEFAULT NULL
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
-- Struktur dari tabel `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_jenis` varchar(10) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

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

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `statuskamar` varchar(10) NOT NULL,
  `nokamar` int(10) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolaevent`
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
-- Struktur dari tabel `kelolameja`
--

CREATE TABLE `kelolameja` (
  `id_meja` int(11) NOT NULL,
  `jumlah_meja` int(11) NOT NULL,
  `type_meja` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolamenu`
--

CREATE TABLE `kelolamenu` (
  `no_menu` int(11) NOT NULL,
  `daftar_menu` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenismakanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolatugas`
--

CREATE TABLE `kelolatugas` (
  `id_tugas` int(11) NOT NULL,
  `Nama_tugas` varchar(20) NOT NULL,
  `penempatan_tugas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_pegawai`
--

CREATE TABLE `kinerja_pegawai` (
  `id_kinerja` varchar(5) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `pro_dem` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kinerja_pegawai`
--

INSERT INTO `kinerja_pegawai` (`id_kinerja`, `id_pegawai`, `nama`, `posisi`, `jabatan`, `tanggal`, `pro_dem`) VALUES
('K0001', 'SRL25001', 'Alifia Nurhaliza Nugraha', 'HRD', 'Admin', '2018-01-21', 'Demosi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_event`
--

CREATE TABLE `konten_event` (
  `id_konten` varchar(20) NOT NULL,
  `judul_konten` varchar(30) NOT NULL,
  `isi_konten` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL,
  `gambar_konten` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE `laundry` (
  `ID_Cucian` varchar(10) NOT NULL,
  `Nama_Pemilik` varchar(25) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_hotel`
--

CREATE TABLE `laundry_hotel` (
  `Nama_Cucian` varchar(25) DEFAULT NULL,
  `Jenis_cucian` varchar(25) DEFAULT NULL,
  `Berat_Cucian` varchar(25) DEFAULT NULL,
  `Tanggal_cucian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_konsumen`
--

CREATE TABLE `laundry_konsumen` (
  `Nama_Laundry` varchar(25) DEFAULT NULL,
  `Jenis_Laundry` varchar(25) DEFAULT NULL,
  `Berat_Laundry` varchar(25) DEFAULT NULL,
  `Total_Laundry` int(25) DEFAULT NULL,
  `Status_Cucian` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `no_meja` int(11) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_foodcourt`
--

CREATE TABLE `menu_foodcourt` (
  `id_menu` varchar(3) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` varchar(5) NOT NULL,
  `no_pendaftaran` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pegawai` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pil_kinerja` varchar(10) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `no_pendaftaran`, `tanggal`, `id_pegawai`, `nama`, `posisi`, `jabatan`, `status`, `pil_kinerja`, `no_tlp`, `email`, `username`, `password`) VALUES
('M0001', 'P0001', '2018-01-27', 'SL0001', 'Alifia Nurhaliza Nugraha', 'Head Office', 'Cleaning Service', '-', '', '082116905661', 'raraararu@gmail.com', '-', ''),
('M0002', 'P0002', '2018-01-27', 'SL0002', 'Haru Reynaldo H', 'Head Office', 'HRD', '-', '', '082116905662', 'haruraenaldo@gmail.com', 'hrdho', '12345'),
('M0003', 'P0003', '2018-01-28', 'SL0003', 'Wiro Sableng', 'Head Office', 'Admin', '-', '', '098524223138', 'wirosableng212@hotmail.com', 'admho', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` varchar(30) NOT NULL,
  `judul_notifikasi` varchar(30) NOT NULL,
  `isi_notifikasi` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_makanan`
--

CREATE TABLE `order_makanan` (
  `no_order` int(10) NOT NULL,
  `no_meja` int(5) NOT NULL,
  `nama_order` varchar(20) NOT NULL,
  `jumlah_order` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` varchar(10) NOT NULL,
  `nama_paket` varchar(30) DEFAULT NULL,
  `harga_paket` int(10) DEFAULT NULL,
  `detail_paket` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_mutasi` varchar(5) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `j_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(5) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `posisi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_mutasi`, `id_pegawai`, `nama`, `alamat`, `j_kelamin`, `tgl_lahir`, `no_tlp`, `email`, `username`, `password`, `jabatan`, `posisi`) VALUES
('M0002', 'SRL25002', 'Haru Reynaldo H', 'Jln. Arwinda', 'L', '1996-05-21', '082116905662', 'haruraenaldo@gmail.com', '', '', 'Koki', 'Restoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan_event`
--

CREATE TABLE `pelanggan_event` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `kode_booking` varchar(10) DEFAULT NULL,
  `pemesanan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan_resto`
--

CREATE TABLE `pelanggan_resto` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_mutasi` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_event`
--

CREATE TABLE `pembayaran_event` (
  `id_pembayran` varchar(10) NOT NULL,
  `id_booking` varchar(10) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_homestay`
--

CREATE TABLE `pembayaran_homestay` (
  `id_pembayaran` varchar(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `totalharga` int(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `pembayaran_loudry` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_resto`
--

CREATE TABLE `pembayaran_resto` (
  `id_pembayaran` int(10) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah_pembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(10) DEFAULT NULL,
  `jenis_pembelian` varchar(50) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `jumlah_pembelian` int(20) DEFAULT NULL,
  `id_penerimaan` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
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
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
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
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id_penerimaan` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `status_penerimaan` varchar(10) NOT NULL,
  `keterangan_penerimaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(10) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `keterangan_pengajuan` varchar(20) NOT NULL,
  `status_pengajuan` varchar(10) NOT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pengiriman`
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
-- Struktur dari tabel `penggajihan`
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
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(10) DEFAULT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `tujuan_pengiriman` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_foodcourt`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `peralatan`
--

CREATE TABLE `peralatan` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(15) DEFAULT NULL,
  `Jumlah` int(10) DEFAULT NULL,
  `Status` varchar(15) DEFAULT NULL,
  `Stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawatan`
--

CREATE TABLE `perawatan` (
  `id_perawatan` varchar(10) NOT NULL,
  `jenis_perawatan` varchar(10) NOT NULL,
  `tanggal_perawatan` date NOT NULL,
  `pengajuan_biaya` int(10) NOT NULL,
  `penerimaan_biaya` int(10) NOT NULL,
  `status_perawatan` varchar(15) NOT NULL,
  `keterangan_perawatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(10) DEFAULT NULL,
  `jenis_permintaan` varchar(50) DEFAULT NULL,
  `tanggal_permintaan` date DEFAULT NULL,
  `jumlah_permintaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perubahan_modal`
--

CREATE TABLE `perubahan_modal` (
  `id_perubahan_modal` varchar(20) NOT NULL,
  `nama_perubahan_modal` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE `promosi` (
  `id_promosi` varchar(10) NOT NULL,
  `judul_promosi` varchar(30) NOT NULL,
  `isi_promosi` varchar(200) NOT NULL,
  `waktu_tanggal` date NOT NULL,
  `gambar_promosi` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekrutmen`
--

CREATE TABLE `rekrutmen` (
  `no_pendaftaran` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text NOT NULL,
  `j_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tingkat_pend` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekrutmen`
--

INSERT INTO `rekrutmen` (`no_pendaftaran`, `nama`, `tanggal`, `alamat`, `j_kelamin`, `tgl_lahir`, `no_tlp`, `email`, `tingkat_pend`) VALUES
('P0001', 'Alifia Nurhaliza Nugraha', '2018-01-27', 'Jln. Araha', 'P', '1997-04-24', '082116905661', 'raraararu@gmail.com', 'S1'),
('P0002', 'Haru Reynaldo H', '2018-01-27', 'Jln. Menuju Surga', 'L', '1996-07-03', '082116905662', 'haruraenaldo@gmail.com', 'S2'),
('P0003', 'Wiro Sableng', '2018-01-28', 'Jln. Pendekar 212', 'L', '1990-02-12', '098524223138', 'wirosableng212@hotmail.com', 'S212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ringkasan_laporan`
--

CREATE TABLE `ringkasan_laporan` (
  `id_worksheet` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roomsetup`
--

CREATE TABLE `roomsetup` (
  `id_room` varchar(10) NOT NULL,
  `jenis_room` varchar(20) NOT NULL,
  `jadwal_room` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `ID_Ruangan` varchar(10) NOT NULL,
  `Nama_Ruangan` varchar(25) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_alat_makanan`
--

CREATE TABLE `stok_alat_makanan` (
  `kode_am` int(10) NOT NULL,
  `nama_am` int(20) NOT NULL,
  `jumlah_am` int(10) NOT NULL,
  `kelayakan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_bahan_makanan`
--

CREATE TABLE `stok_bahan_makanan` (
  `kode_makanan` int(10) NOT NULL,
  `nama_makanan` varchar(30) NOT NULL,
  `jumlah_makanan` int(10) NOT NULL,
  `jenis_makanan` varchar(10) NOT NULL,
  `tanggal_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_foodcourt`
--

CREATE TABLE `stok_foodcourt` (
  `id_stok` varchar(3) NOT NULL,
  `nama_stok` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` varchar(10) NOT NULL,
  `nama_tugas` varchar(25) NOT NULL,
  `kategori_tugas` varchar(25) NOT NULL,
  `tugas` varchar(25) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL
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
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `daftar_menu`
--
ALTER TABLE `daftar_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `detail_menu_foodcourt`
--
ALTER TABLE `detail_menu_foodcourt`
  ADD PRIMARY KEY (`id_detail_menu`);

--
-- Indexes for table `detail_pengajuan`
--
ALTER TABLE `detail_pengajuan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

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
-- Indexes for table `histori_cleaning_service`
--
ALTER TABLE `histori_cleaning_service`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `housekeeper`
--
ALTER TABLE `housekeeper`
  ADD PRIMARY KEY (`ID_Housekeeper`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`);

--
-- Indexes for table `jadwal_perawatan`
--
ALTER TABLE `jadwal_perawatan`
  ADD PRIMARY KEY (`id_jadwal_perawatan`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

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
-- Indexes for table `konten_event`
--
ALTER TABLE `konten_event`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`ID_Cucian`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu_foodcourt`
--
ALTER TABLE `menu_foodcourt`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pelanggan_event`
--
ALTER TABLE `pelanggan_event`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pelanggan_resto`
--
ALTER TABLE `pelanggan_resto`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `pembayaran_event`
--
ALTER TABLE `pembayaran_event`
  ADD PRIMARY KEY (`id_pembayran`);

--
-- Indexes for table `pembayaran_resto`
--
ALTER TABLE `pembayaran_resto`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

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
-- Indexes for table `penggajihan`
--
ALTER TABLE `penggajihan`
  ADD PRIMARY KEY (`id_penggajihan`);

--
-- Indexes for table `penjualan_foodcourt`
--
ALTER TABLE `penjualan_foodcourt`
  ADD PRIMARY KEY (`id_penjualan`);

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

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`id_perawatan`);

--
-- Indexes for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  ADD PRIMARY KEY (`id_perubahan_modal`);

--
-- Indexes for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `ringkasan_laporan`
--
ALTER TABLE `ringkasan_laporan`
  ADD PRIMARY KEY (`id_worksheet`);

--
-- Indexes for table `roomsetup`
--
ALTER TABLE `roomsetup`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`ID_Ruangan`);

--
-- Indexes for table `stok_alat_makanan`
--
ALTER TABLE `stok_alat_makanan`
  ADD PRIMARY KEY (`kode_am`);

--
-- Indexes for table `stok_bahan_makanan`
--
ALTER TABLE `stok_bahan_makanan`
  ADD PRIMARY KEY (`kode_makanan`);

--
-- Indexes for table `stok_foodcourt`
--
ALTER TABLE `stok_foodcourt`
  ADD PRIMARY KEY (`id_stok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori_cleaning_service`
--
ALTER TABLE `histori_cleaning_service`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `no_meja` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
