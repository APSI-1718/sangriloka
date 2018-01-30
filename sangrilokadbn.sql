-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2018 pada 06.09
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sangrilokadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `tanggal` date NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(30) NOT NULL,
  `isi_agenda` text NOT NULL,
  `waktu_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE IF NOT EXISTS `bahan` (
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

CREATE TABLE IF NOT EXISTS `barang` (
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

CREATE TABLE IF NOT EXISTS `barang_ruangan` (
  `Nama_Barang_Ruangan` varchar(25) DEFAULT NULL,
  `Jenis_Barang_Ruangan` varchar(25) DEFAULT NULL,
  `Keterangan_Barang_Ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
  `id_cuti` int(5) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_menu`
--

CREATE TABLE IF NOT EXISTS `daftar_menu` (
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

CREATE TABLE IF NOT EXISTS `detail_barang` (
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

CREATE TABLE IF NOT EXISTS `detail_menu_foodcourt` (
  `id_detail_menu` varchar(3) NOT NULL,
  `id_menu` varchar(3) NOT NULL,
  `id_stok` varchar(3) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengajuan`
--

CREATE TABLE IF NOT EXISTS `detail_pengajuan` (
  `id` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `jumlah_pengajuan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengajuan_stok_foodcourt`
--

CREATE TABLE IF NOT EXISTS `detail_pengajuan_stok_foodcourt` (
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

CREATE TABLE IF NOT EXISTS `detail_penjualan_foodcourt` (
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

CREATE TABLE IF NOT EXISTS `detail_penjualan_tiket` (
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

CREATE TABLE IF NOT EXISTS `detail_penyewaan` (
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
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` varchar(10) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE IF NOT EXISTS `gedung` (
  `id_gedung` varchar(10) NOT NULL,
  `jenis_gedung` varchar(30) DEFAULT NULL,
  `jumlah_kuota` varchar(30) DEFAULT NULL,
  `status_gedung` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_alat`
--

CREATE TABLE IF NOT EXISTS `harga_alat` (
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

CREATE TABLE IF NOT EXISTS `harga_tiket` (
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

CREATE TABLE IF NOT EXISTS `histori_cleaning_service` (
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

CREATE TABLE IF NOT EXISTS `housekeeper` (
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

CREATE TABLE IF NOT EXISTS `jadwal` (
  `ID_Jadwal` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `shif` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_perawatan`
--

CREATE TABLE IF NOT EXISTS `jadwal_perawatan` (
  `id_jadwal_perawatan` varchar(20) NOT NULL,
  `jenis_perawatan` varchar(30) NOT NULL,
  `jadwal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kamar`
--

CREATE TABLE IF NOT EXISTS `jenis_kamar` (
  `id_jenis` varchar(10) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
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
-- Struktur dari tabel `kelolaevent`
--

CREATE TABLE IF NOT EXISTS `kelolaevent` (
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

CREATE TABLE IF NOT EXISTS `kelolameja` (
  `id_meja` int(11) NOT NULL,
  `jumlah_meja` int(11) NOT NULL,
  `type_meja` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolamenu`
--

CREATE TABLE IF NOT EXISTS `kelolamenu` (
  `no_menu` int(11) NOT NULL,
  `daftar_menu` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenismakanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolatugas`
--

CREATE TABLE IF NOT EXISTS `kelolatugas` (
  `id_tugas` int(11) NOT NULL,
  `Nama_tugas` varchar(20) NOT NULL,
  `penempatan_tugas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_pegawai`
--

CREATE TABLE IF NOT EXISTS `kinerja_pegawai` (
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
-- Struktur dari tabel `konten_event`
--

CREATE TABLE IF NOT EXISTS `konten_event` (
  `id_konten` int(11) NOT NULL,
  `judul_konten` varchar(30) NOT NULL,
  `isi_konten` text NOT NULL,
  `waktu_tanggal` date NOT NULL,
  `gambar_konten` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konten_event`
--

INSERT INTO `konten_event` (`id_konten`, `judul_konten`, `isi_konten`, `waktu_tanggal`, `gambar_konten`) VALUES
(5, 'Ngajaran deui we', 'Promosi adalah upaya untuk memberitahukan atau menawarkan produk atau jasa pada dengan tujuan menarik calon konsumen untuk membeli atau mengkonsumsinya. Dengan adanya promosi produsen atau distributor mengharapkan kenaikannya angka penjualan.\r\n\r\nTujuan promosi[sunting | sunting sumber]\r\nTujuan promosi di antaranya adalah:\r\n\r\nMenyebarkan informasi produk kepada target pasar potensial\r\nUntuk mendapatkan kenaikan penjualan dan profit/laba\r\nUntuk mendapatkan pelanggan baru dan menjaga kesetiaan pelanggan\r\nUntuk menjaga kestabilan penjualan ketika terjadi lesu pasar\r\nMembedakan serta mengunggulkan produk dibanding produk pesaing\r\nMembentuk citra produk di mata konsumen sesuai dengan yang diinginkan.\r\nMengubah tingkah laku dan pendapat konsumen.[butuh rujukan]\r\nCara promosi[sunting | sunting sumber]\r\nBeberapa cara untuk melakukan promosi adalah:\r\n\r\nMelalui e-mail\r\nMelalui sms\r\nMelalui pembicaraan\r\nMelalui iklan\r\nMedia sosial\r\ndll\r\nContoh promosi antara lain:\r\n\r\nPasang iklan di tv mengenai produk baru perusahaan X\r\nKirim 5 sms, dapat 10 sms gratis ke semua operator\r\nBeli kaos kaki seharga Rp. 30.000,00 dapat 2 kaos kaki gratis\r\nDiskon 50% bagi produk tertentu di Department Store\r\nBeli coklat malam hari dapat segelas teh gratis\r\nBauran promosi[sunting | sunting sumber]\r\nBauran promosi adalah gabungan dari beberapa promosi dari satu produk sama agar promosinya dapat maksimal dan hasilnya memuaskan.\r\n\r\nHubungan promosi dengan penjualan yaitu promosi dapat meningkatkan angka penjualan. Pada umumnya setelah angka penjualan cukup tinggi, suatu badan produksi atau distributor akan mengurangi kegiatan promosi.\r\n\r\nKategori: Pemasaran\r\nMenu navigasi\r\nBelum masuk logPembicaraanKontribusiBuat akun baruMasuk logHalamanPembicaraanBacaPerubahan tertundaSuntingSunting sumberVersi terdahuluPencarian\r\n\r\nCari Wikipedia\r\nLanjut\r\nHalaman Utama\r\nPerubahan terbaru\r\nPeristiwa terkini\r\nHalaman baru\r\nHalaman sembarang\r\nKomunitas\r\nWarung Kopi\r\nPortal komunitas\r\nBantuan\r\nWikipedia\r\nTentang Wikipedia\r\nPancapilar\r\nKebijakan\r\nMenyumbang\r\nHubungi kami\r\nBak pasir\r\nBagikan\r\nFacebook\r\nTwitter\r\nGoogle+\r\nCetak/ekspor\r\nBuat buku\r\nUnduh versi PDF\r\nVersi cetak\r\nPerkakas\r\nPranala balik\r\nPerubahan terkait\r\nHalaman istimewa\r\nPranala permanen\r\nInformasi halaman\r\nItem di Wikidata\r\nKutip halaman ini\r\nPranala menurut ID\r\nBahasa lain\r\n???????\r\nDeutsch\r\nEnglish\r\nEspañol\r\nFrançais\r\n???\r\nPortuguês\r\n???????\r\n??\r\n17 lagi\r\nSunting interwiki\r\nTeks tersedia di bawah Lisensi Atribusi-BerbagiSerupa Creative Commons; ketentuan tambahan mungkin berlaku. Lihat Ketentuan Penggunaan untuk lebih jelasnya.', '2018-01-25', 0x89504e470d0a1a0a0000000d49484452000000e6000000e60803000000f6b40989000002fa504c5445000000db7064f1533ed74e3df1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ee6e5e5f1533ef1533ef1533ef1533ee3e3e3f1533ef1533ee3e3e3f1533ee4e4e4f1533e342f39e0e0e0e2e2e2f1533ef1533ee2e2e2f1533ee3e3e3f1533ee0e0e0f1533ef1533ef1533ee3e3e3e3e3e3e5e5e5e4e4e4e3e3e3e3e3e3e0e0e0e4e4e4312f39312f39e0e0e0e5e5e5312f39e0e0e0312f39e3e3e3e6e6e6e2e2e2e6e6e6312f39312f39e3e3e3312f39e3e3e3863f3b5e373a9f9ea2838287f1533ef1ad75312f392c1c12e6e6e6e0e0e04f4b4d3b2314e6e7e8ffffff0b6a923b2316d67d4b838287939092e3e3e37e7d82eeaa73ed523d4945493f2516342014c68d5ef1a26df19d6bbf875bf15f46514b4e423e44f158415a3a25e1a16cd44d3c6b482ff1f7f9f3f4f4f1a97296684638353e34323b5636393230397e55383d3a41e9513dc5493962412a6fa3b8ad7950a4734d9c6d49454247e14f3cdb4e3beba56fce9362f1543fbb493de5503cbb4332a63e2d5133204b301eedeeeed7d7d8e5a46fd59766eb935cf1674a8a603f7c3d3b785134472b1a3985a58b8788f098676d6767de8b5a845c3d5f373ace493659281c452317fbfbfc66a2bba09fa1f0b17f7a777bdb9d69f18b60f17b56545155f17251974e4692413b3d3139373039602a1dd0e2e9e7e1dce9dad0c9c8c9bebcbc2a7c9f727074e89c67f192645b595ee3925cb27d54f15b43863f3b6d3a3a973a2a873526732f21412a1cdadddfead0bf468daba9a7a91b7499626063b88156da8755453339935936714d32b1412f9e3b2b6f44298e3728d3d2d15395b1edc7a8eebd95efb88af1875db480565f4c4aba7246dc5440aa493f672c1f4e2519e0ecf1afaeaf9a9696884e47b36d43906443a8663eb1473c9e433c332f397f3324c2d8e1b1d0ddb7b4b3ca7c4c774d49c1714398423c50382795bfd0619db79b8f88eb9082cf79484a3428ee8173ce776cd76648d0337e050000005174524e530003fa0921c86d2db850d0eb15f65eed32f2e4d7cb80dea341ab2910fdfcb09c954f4882f4bf5d561eedce97916c632919dddb7639150ed2bcaea58130efccbb989796683cdbc781ddb1774324e6e6c7c77ed114cb000010904944415478dad4d74b6e1a511005d0ea7f43031de8e62f3e32b2181859c86623577a030699a130f702f00c4f0c8b08ec8025002bb0bc00986711994651e434af5e378fb383ab2ad5555116da5ecead8eea7ebe56098b00500c2bb5fc7db73770735e9b6e9e61e7aacd38c497c2b859cdd906dda656a9ef949158d9e9975a745b5a6e338084a0e9de4a542bf7500343ed216791e6da8fbe0936d37f1c93b6da25df84229dfb473d4f70a35e8452c57a833453788e9082e8b940faf0ea265262d63dd243c347aa7c0d76d718e691bafcd0a0ab1a46c84434a4ebb98b9199f88eaea3e523537e8bb257e89bc898d9cfba5e0c37c01504ae4119f21c5c89e35156acaa89ab310716656212e1aaa209a5cfe08e92cfac1a9432db81061c9b52552a430be512a5c7ea411b3d8b5262c7d0486c532a1a01b4123428056e079ae9b8a49a3182864606296575a1a5ae450a8db53a3e7f8ac7a48cfd046d3dd9a448ab028d555aa4c437cd8ae46fc137252943682e5490d3d33e25107aec9401d458ae3e0ec7dd793b9d0b21e6dbedee78d8afdea046c0cc6957c0b7587deea6e29fe69bc36a09be8a4d0c057e932cd7a7b9f8da66ff02aea70249b31c30ad4e2291cd7a011ec7224946172cb38fad486cfaf90e96ae4172fa60596fc545a6fb1938fa24c505c7cb4e5cecfc0a0e9724343a6058cf858c0367a09d065d6c1c40dee228246d38551a8ce942560c79ef1b216dcb2997d8a2cbf4206f79160cdf7f425e8f2e5282bcc546b0fce0ec6d892e609721ef2498ce8c062ddb9498e140de5eb01d21cf3128a92ae4bd0a05d69057a584268cc69c9d8502f325a47526948815411a7f65f96b1b5994c400f2dea7420d4eab0c2801cf84bc4fa1c809f24c2fe52b3b9b0aa1c1381d23ddbf642d94f9050697fea3108261239499cf202f2cd0d7466078130aadc0304af1fee037b3f6d2da5414c401fc181fb4a511ad5a5fa0a2880bc18d9f648641a49c854472f3106c0c242001431bb41135859a8ac56af0b1a9e2c68d0bb1829a9da2555756c185d88da08b822008e6264dc7dedc5ba533c1fcb6218b7feeb93373cec91baafbff3de56f55a80b243e91a22848749965ec0589e30ed57444ad05d86b82ad05899ba4ea12486c3681ba41a2d14e3aa4a500749b203d20f29554dd02911e13e000c83c20550ec81c507d98ec36e93a0b223daa659611510795daa062db05326769896aae50a8a4e72dfd03a794ae640b95518d3988edf71d8040c2db4f9c6c041bc68ad3852b57f3a528b5b0a3f9d795ec502c850b86ac4247611b4cabad2074869893c4562353c55832f962767636994c16a7c6b0d5e52ab13720b4d5b4e80d81d04562d3b8424587163d05a150aff13a0c5233b4e82aae588116bd03a9c3c66b1348714c9bc2158bcc2bc6dc643cb68118c79c438159794cb64d5c8082df4d2785029151e9bb195c847686418a2bed6b14c972a5150bef94de8005f7cd172832c57d536ebd78020a3a0972222833480d3320d7b564cd86408a87bd340a6579d8130bed34ec106870a86e1885623cbacb1dd25db3bc112ba250c4a1ba0b20e35db5ab4320c587d136825279de568b8556eb9c01b1e7e41a44b10ab96e838a6e9d7fadb167e4caa1d830b91e808a83a6a91fc4f864af8062313ed993eb370b76801c8f4149141be32148c10ebeeb5371815c2994ab0adba6ef2de0765062a906996c0e3a073ab69b863e10e383da2a2a4813d15150d267ead6809667dc4f64725c6815ace1dd898a19bf8976643a5b8861a0cbc3d9a194df54fb0c34f02ee5206839e5d336a7276c4d7e0a7d8de46c4d34ebd3386740cb1ebeed53316e89ae7852da86d218fa88a46dc39ce75b44f40bb4ac3535abc2a0e47c224f945dfab426ec822be863c8365dc63f2589a29927a024bc4ab502ddc739ef36ec856d1a451f69db94f58e41697c0f5ad6f0dcaee011c6bc4350c1ba4e7ffe60ed08b62a59d7f51f557b15ff94726818e320c7d3fb16d092408cc53cb5c4ba1e0e1cb1befbb3415b333f3070cde63cf5d7fdb5ce83922d3a3310c7f42a5ad78f816f368f3eea75b67aecce753b84ad4e8292edf2cbdbe56366de5ad74f6b3fa28f97d17ace9fb634d29e987ca1bb11b4704c7663d0d6bd4aa08ff897a8754d7c8fb43366d8985e5093f00b72e355c946f31fcbe86bf2fbdba89dc8bd8c633b6342afd9006a12e82353764d628044b9fcb85c8e637b636e50eb271cd32b92c9e03232fc71db62766beda939a69c7ecc75661fa89944551950b3cfec063577515502d4ec36bb40cd38aaba076a7699fda0427fd5c64f829afda607f43c89a39acc38e8e931fda0e8a4daeb39790214f59b3e50f5e4be42d247f74e80aa3eb311948da3d87d50b6d18441d9890e8c1936a0ed3c8a8d833603eae21d34e5351950f70885e2a0ce80badfbc9cb16adb50148655480d769b123a14d22129e405fa2aa793162d02e154015b18ec258351bc488b051611329878ae435e20d0e6050236784b7147d763f196ade848f29163291daa3fdf66dde9e35c9d7baeeeb9befe5fcd09950b2205fd2b07e97efdde74ac17cc40ac09f8c3d9af4586f5ceacafc60cbb63bbc0b5dda0b2795376794085b3d60c87ea139a3d0b3967850f5cec95cc5d7b3790177d350f23f4f1cb49a459a3f279d8e99968aa4518bf75d43653a8f146ac5c7693d085a13e43d70227a06823764400b6c3698b52f3bc67fad6b7ba1db486f2301bcf110138528e094063ebed4c676ccbb6b6f26ee02503f798375338564e08c14d5633b609fd9cc4140fd9f2e881109c28158290adf838c906f99dd0acf933fb65044145a91284ecf79266b1e680354dcc9415aaca0161b814976ea4327e269a75f99887e140794b20a4166a452af98d993e6b3a52ff60f8cc077f106455093903e56a3aace9276b894b18f6f91817849ba6a1205299496381e94879c49a7a5cfe3408448d0fe53188678f174d298932858fc9bb95d8f28e501c728b058ad4d3e65247e29789ed0f1e025b728b459570b8934dc83c99c1117a12da34d0a306e1a872fb1392ebcdaa31489a47d4ecaf71b2d64c5c02b227cd6c286eda5f74836356dfd1b43a5cbff778bdc4b1ff4a5a13619c8dd2dabddf71329a037b662495fb2541792d8da640dcdb504df1cebb2a1374d991f945583e49db3092ab052b15313f232cefa4091cc995b69e174a0ea71a5a734f5afa71449a9ab6cc17f5a68f1a5af3bd5cd000126946aca7fd278ec67cc52360cd43b96e83843599c5b4e5a58acd70f5a83168cd8a5c9e8272aadf7edfa8fe592c57abe55a13d09a1fe52a1c94d3b8edfd2f6f77ecd2461407701cec502db4145a6aa14e85d2a1a54bff92c7e37cfc0c54cb653c0b010723bdd0412d354b9d02062193e920d140d45a2c98454d8b6ea90aa50ec5213a489622b443d35fd2fcee3dc2cb9df72e9f3919bebcc7dd2deff73e7ddea7b4de65dec3c4e8df9cad4c6aed6de613e9986a843093e016ee5de68074e8382236a34ca575df9369b3a8f45d538f909bf7e3b4ce3a67d216c6cc423dc1a2d1af0c04306fa6e008c77ef73b2fc7a9ad6f2f5fb1ba10a7d1843e93c73b18976e4436fcd985d2b12e33bf066b97f8d353f3dff0381929ba5d8b91a8020043479aca1200ac0be4980fed5746af18e516be8b962c683b8f4bd050112d4ec170e82dd38374887b82914d8bf08f75a8ab84174250e80c33e7e603c363910846b639c3803a761e0d01fa2afda3603353064d0fb922584936803ad54a0bd08e90b9cc94fb46479611776e5bc896a06557ad3c84960d21cbd40c6ddc3be606d0113bb5923be73c2e242f41ed542b6149c838e7c9ed39036bfadcdc38414a2c72a4646ec17fd69ab77217da3ea899e8bc919a6621d04bd3c8438812d1b490cd7b3af36a25daea9889a9a15675d0dca8cfc45999123b665e00c14eb5b22a64712e29e65652ec4a6e9b19dcead632071ce9324781e0871f7ee0795c6833d16af9648605f5c8c4185ebb46cb281917b24d503bb1928c6a32c979ee2ccd0279187ea87222b3ca893673d902afa1a37c09249bfa4c522c07d9bd37428fc84e9539d2659275900c5741622d6b3255c91af3eb71c881e7b318e93fb3025e630b5fe6c16b5d28a6b94e2ee57331438eaf3f2b72add74291952b6331b9b3e22f936cbbcc8781509711b8b89481321781587bb1868f3b40b23e33497296757537d4d512e9240f9ce98c49956ae7a2508cf36e0e12411eb3c1df9d768efbce24d576e5b758cb42bbf3bde33f933abbad677fa86b5f32bcbbc9b850fc9c80a65fb1b68561401355a1884ff2ee9236d3e9bb1ee6129f39eec7d4b89065479a9d6f621e7b16aee54845ad9ce27eac309da761ae64b2ffd276ff2e6d45511cc0af249a21e2af2274f107ede258fc039cedd0427824178e90a4b4a38bf8e0a5128a8374e894ac8640873464c86009a40a199c4a6be676153453c12ec5ce92f7929c97f3ded3dc73f0f31f7cb9dfdc7bdecd7071b433ea6d17a0d45fb8dffe98a7b69b12b2a4b198f25e5fefabedfcace481ad4b6b528e1e53eae7b4a1e58f79db5fe21a4057fb15ad499da7a2cd889e4bc3fdc7f007da06a8d900e05bcee31a805d0328693fc79ad849f4af737a4af2f8dd9e65e0e048a33ab8fccbf9173c6dc3cd075d46ef3fa2a70ccf2da39c1a3560e0f6cbc0210cd40dd7127d4e45782e7b9832b0014d3cda3661607f04061a869b2c3a88d8849ec4f8cf8ce269c2da6cf3e0f93f3a4ec0536b92c1c0c0bf54103e33fab065ee68800ae4b2163c38058127a391696ddfa7c22ccb9e007e7b6252283209f5a262d22b5aa34d688fb5cba2f8a2acb3c18b12f0fc180d07e089ba20e14e428b7165604ed6594713bbb58898554d1465ad9d5346d6249d2de88032b88e87312fc065ef6aca91b4764dfa74fe274e65d17578cc5f3ae088dd5ac6d3f92a9ea49d15ad66055ca73b43e0bad6010ebfb5c9b832f674857456b49cddf09815c962d2d6ae3c530c338ccee2794295a0ef6214d31b833a1ae189c26ced8c62598fea2ce7a2a41d16b3a411ce41ccd6ae2b9ea955d3cea2c072fe84be9d912bfc3cf1c3a9d6b4b5ab538a29364d3a2b38391b6131ebfc5393ceb5d331c536bbc9e92cfe2f463f52f631660b3f4fc8270aabb59b2f94407c29e5c2ceb20f957448cc26f730a1ad5d8a2b914492d1593c54c847ca15c6bc01803c77a0a5ad4d2694d0c23c7696717b807ac198df448b89ad9d5f504a9e13ef0d24874a35781794e31f26e823a694e54c7eb058ded18f141ab3ca9f0cd09f24a61449bca2db8b53ec9c651f54c98df96edbadc3911bdb2ee5c654b23e6f429d750a16f53aa190c8c6b6e5e334bbf572fa31e53391ca3d32f46e6f2824cdb9e54bd96930424a33a272d5f2d9222965622fada16623937e34f9bb6aeb252562188ee3f83ff41add0442991442e9a2ef9676fa1a9c19d055977a014fe08106af30e0da8dc7f0220ed5121429da348ff9dce0cb2f493b45ce39f3ca1b0b5685b6d3bd7c93b7256f9cf5fa38556e11acad79fa3cb327810ea148eefdebcbdc80048762fc1af231559f566e7c868a03ac8d3f442f022d8291dc337f7c24b02e17f42c5023785cb987cbb5b4409ea6b8d71f390ca7a201a93677fa2387e1760392a19dad2992cb10c8d776ab550e4bf82dfcced041174d493204aae4aeae297b0f14428ce8989232046a0595ad7cca3a00f5bc58ed94a5077ae0485da58b411be4446a0e6c8411fc8309a10b96741068877bb90736c660863cb5a555a6399823d877322afd7d008669537bdd6b49d2164c143ab1bd5a65e98460ac80970a5492921977587f0a71d58954fa353678c76f3c9690259534611e5c17cfa95cf2f74ad2d7ceb5254ed011ef9288cc575237c9f0d180ff1c51618e5956a7a5eb533a2e47a9efbb7152650ce72128f001a7e670a71c0506ce0000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE IF NOT EXISTS `laundry` (
  `ID_Cucian` varchar(10) NOT NULL,
  `Nama_Pemilik` varchar(25) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_hotel`
--

CREATE TABLE IF NOT EXISTS `laundry_hotel` (
  `Nama_Cucian` varchar(25) DEFAULT NULL,
  `Jenis_cucian` varchar(25) DEFAULT NULL,
  `Berat_Cucian` varchar(25) DEFAULT NULL,
  `Tanggal_cucian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_konsumen`
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
-- Struktur dari tabel `meja`
--

CREATE TABLE IF NOT EXISTS `meja` (
  `no_meja` int(11) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_foodcourt`
--

CREATE TABLE IF NOT EXISTS `menu_foodcourt` (
  `id_menu` varchar(3) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE IF NOT EXISTS `mutasi` (
  `id_mutasi` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `judul_notifikasi` varchar(30) NOT NULL,
  `isi_notifikasi` text NOT NULL,
  `waktu_tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `judul_notifikasi`, `isi_notifikasi`, `waktu_tanggal`) VALUES
(1, 'Promosi Hotel 50%', 'promo hotel 50% untuk akhir januari ini.', '2018-01-28'),
(2, 'Promo Restoran', 'Promo Restoran makan gratis untuk 10 orang yang beruntung di awal februari mendatang', '2018-01-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_makanan`
--

CREATE TABLE IF NOT EXISTS `order_makanan` (
  `no_order` int(10) NOT NULL,
  `no_meja` int(5) NOT NULL,
  `nama_order` varchar(20) NOT NULL,
  `jumlah_order` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` varchar(10) NOT NULL,
  `nama_paket` varchar(30) DEFAULT NULL,
  `harga_paket` int(10) DEFAULT NULL,
  `detail_paket` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan_event`
--

CREATE TABLE IF NOT EXISTS `pelanggan_event` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `kode_booking` varchar(10) DEFAULT NULL,
  `pemesanan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
  `id_pelatihan` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_mutasi` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_event`
--

CREATE TABLE IF NOT EXISTS `pembayaran_event` (
  `id_pembayran` varchar(10) NOT NULL,
  `id_booking` varchar(10) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_homestay`
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
-- Struktur dari tabel `pembayaran_resto`
--

CREATE TABLE IF NOT EXISTS `pembayaran_resto` (
  `id_pembayaran` int(10) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah_pembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
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

CREATE TABLE IF NOT EXISTS `pemesanan` (
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
-- Struktur dari tabel `penerimaan`
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
-- Struktur dari tabel `pengajuan`
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
-- Struktur dari tabel `pengajuan_pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengajuan_pengiriman` (
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

CREATE TABLE IF NOT EXISTS `penggajihan` (
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

CREATE TABLE IF NOT EXISTS `pengiriman` (
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

CREATE TABLE IF NOT EXISTS `penjualan_foodcourt` (
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

CREATE TABLE IF NOT EXISTS `penjualan_tiket` (
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

CREATE TABLE IF NOT EXISTS `penyewaan_alat` (
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

CREATE TABLE IF NOT EXISTS `peralatan` (
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

CREATE TABLE IF NOT EXISTS `perawatan` (
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

CREATE TABLE IF NOT EXISTS `permintaan` (
  `id_permintaan` int(10) DEFAULT NULL,
  `jenis_permintaan` varchar(50) DEFAULT NULL,
  `tanggal_permintaan` date DEFAULT NULL,
  `jumlah_permintaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perubahan_modal`
--

CREATE TABLE IF NOT EXISTS `perubahan_modal` (
  `id_perubahan_modal` varchar(20) NOT NULL,
  `nama_perubahan_modal` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE IF NOT EXISTS `promosi` (
  `id_promosi` int(11) NOT NULL,
  `judul_promosi` varchar(30) NOT NULL,
  `isi_promosi` text NOT NULL,
  `waktu_tanggal` date NOT NULL,
  `gambar_promosi` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promosi`
--

INSERT INTO `promosi` (`id_promosi`, `judul_promosi`, `isi_promosi`, `waktu_tanggal`, `gambar_promosi`) VALUES
(3, 'Tes tes', 'Apsi adalah apsi', '2018-01-27', 0x89504e470d0a1a0a0000000d49484452000000e6000000e60803000000f6b40989000002fa504c5445000000db7064f1533ed74e3df1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ef1533ee6e5e5f1533ef1533ef1533ef1533ee3e3e3f1533ef1533ee3e3e3f1533ee4e4e4f1533e342f39e0e0e0e2e2e2f1533ef1533ee2e2e2f1533ee3e3e3f1533ee0e0e0f1533ef1533ef1533ee3e3e3e3e3e3e5e5e5e4e4e4e3e3e3e3e3e3e0e0e0e4e4e4312f39312f39e0e0e0e5e5e5312f39e0e0e0312f39e3e3e3e6e6e6e2e2e2e6e6e6312f39312f39e3e3e3312f39e3e3e3863f3b5e373a9f9ea2838287f1533ef1ad75312f392c1c12e6e6e6e0e0e04f4b4d3b2314e6e7e8ffffff0b6a923b2316d67d4b838287939092e3e3e37e7d82eeaa73ed523d4945493f2516342014c68d5ef1a26df19d6bbf875bf15f46514b4e423e44f158415a3a25e1a16cd44d3c6b482ff1f7f9f3f4f4f1a97296684638353e34323b5636393230397e55383d3a41e9513dc5493962412a6fa3b8ad7950a4734d9c6d49454247e14f3cdb4e3beba56fce9362f1543fbb493de5503cbb4332a63e2d5133204b301eedeeeed7d7d8e5a46fd59766eb935cf1674a8a603f7c3d3b785134472b1a3985a58b8788f098676d6767de8b5a845c3d5f373ace493659281c452317fbfbfc66a2bba09fa1f0b17f7a777bdb9d69f18b60f17b56545155f17251974e4692413b3d3139373039602a1dd0e2e9e7e1dce9dad0c9c8c9bebcbc2a7c9f727074e89c67f192645b595ee3925cb27d54f15b43863f3b6d3a3a973a2a873526732f21412a1cdadddfead0bf468daba9a7a91b7499626063b88156da8755453339935936714d32b1412f9e3b2b6f44298e3728d3d2d15395b1edc7a8eebd95efb88af1875db480565f4c4aba7246dc5440aa493f672c1f4e2519e0ecf1afaeaf9a9696884e47b36d43906443a8663eb1473c9e433c332f397f3324c2d8e1b1d0ddb7b4b3ca7c4c774d49c1714398423c50382795bfd0619db79b8f88eb9082cf79484a3428ee8173ce776cd76648d0337e050000005174524e530003fa0921c86d2db850d0eb15f65eed32f2e4d7cb80dea341ab2910fdfcb09c954f4882f4bf5d561eedce97916c632919dddb7639150ed2bcaea58130efccbb989796683cdbc781ddb1774324e6e6c7c77ed114cb000010904944415478dad4d74b6e1a511005d0ea7f43031de8e62f3e32b2181859c86623577a030699a130f702f00c4f0c8b08ec8025002bb0bc00986711994651e434af5e378fb383ab2ad5555116da5ecead8eea7ebe56098b00500c2bb5fc7db73770735e9b6e9e61e7aacd38c497c2b859cdd906dda656a9ef949158d9e9975a745b5a6e338084a0e9de4a542bf7500343ed216791e6da8fbe0936d37f1c93b6da25df84229dfb473d4f70a35e8452c57a833453788e9082e8b940faf0ea265262d63dd243c347aa7c0d76d718e691bafcd0a0ab1a46c84434a4ebb98b9199f88eaea3e523537e8bb257e89bc898d9cfba5e0c37c01504ae4119f21c5c89e35156acaa89ab310716656212e1aaa209a5cfe08e92cfac1a9432db81061c9b52552a430be512a5c7ea411b3d8b5262c7d0486c532a1a01b4123428056e079ae9b8a49a3182864606296575a1a5ae450a8db53a3e7f8ac7a48cfd046d3dd9a448ab028d555aa4c437cd8ae46fc137252943682e5490d3d33e25107aec9401d458ae3e0ec7dd793b9d0b21e6dbedee78d8afdea046c0cc6957c0b7587deea6e29fe69bc36a09be8a4d0c057e932cd7a7b9f8da66ff02aea70249b31c30ad4e2291cd7a011ec7224946172cb38fad486cfaf90e96ae4172fa60596fc545a6fb1938fa24c505c7cb4e5cecfc0a0e9724343a6058cf858c0367a09d065d6c1c40dee228246d38551a8ce942560c79ef1b216dcb2997d8a2cbf4206f79160cdf7f425e8f2e5282bcc546b0fce0ec6d892e609721ef2498ce8c062ddb9498e140de5eb01d21cf3128a92ae4bd0a05d69057a584268cc69c9d8502f325a47526948815411a7f65f96b1b5994c400f2dea7420d4eab0c2801cf84bc4fa1c809f24c2fe52b3b9b0aa1c1381d23ddbf642d94f9050697fea3108261239499cf202f2cd0d7466078130aadc0304af1fee037b3f6d2da5414c401fc181fb4a511ad5a5fa0a2880bc18d9f648641a49c854472f3106c0c242001431bb41135859a8ac56af0b1a9e2c68d0bb1829a9da2555756c185d88da08b822008e6264dc7dedc5ba533c1fcb6218b7feeb93373cec91baafbff3de56f55a80b243e91a22848749965ec0589e30ed57444ad05d86b82ad05899ba4ea12486c3681ba41a2d14e3aa4a500749b203d20f29554dd02911e13e000c83c20550ec81c507d98ec36e93a0b223daa659611510795daa062db05326769896aae50a8a4e72dfd03a794ae640b95518d3988edf71d8040c2db4f9c6c041bc68ad3852b57f3a528b5b0a3f9d795ec502c850b86ac4247611b4cabad2074869893c4562353c55832f962767636994c16a7c6b0d5e52ab13720b4d5b4e80d81d04562d3b8424587163d05a150aff13a0c5233b4e82aae588116bd03a9c3c66b1348714c9bc2158bcc2bc6dc643cb68118c79c438159794cb64d5c8082df4d2785029151e9bb195c847686418a2bed6b14c972a5150bef94de8005f7cd172832c57d536ebd78020a3a0972222833480d3320d7b564cd86408a87bd340a6579d8130bed34ec106870a86e1885623cbacb1dd25db3bc112ba250c4a1ba0b20e35db5ab4320c587d136825279de568b8556eb9c01b1e7e41a44b10ab96e838a6e9d7fadb167e4caa1d830b91e808a83a6a91fc4f864af8062313ed993eb370b76801c8f4149141be32148c10ebeeb5371815c2994ab0adba6ef2de0765062a906996c0e3a073ab69b863e10e383da2a2a4813d15150d267ead6809667dc4f64725c6815ace1dd898a19bf8976643a5b8861a0cbc3d9a194df54fb0c34f02ee5206839e5d336a7276c4d7e0a7d8de46c4d34ebd3386740cb1ebeed53316e89ae7852da86d218fa88a46dc39ce75b44f40bb4ac3535abc2a0e47c224f945dfab426ec822be863c8365dc63f2589a29927a024bc4ab502ddc739ef36ec856d1a451f69db94f58e41697c0f5ad6f0dcaee011c6bc4350c1ba4e7ffe60ed08b62a59d7f51f557b15ff94726818e320c7d3fb16d092408cc53cb5c4ba1e0e1cb1befbb3415b333f3070cde63cf5d7fdb5ce83922d3a3310c7f42a5ad78f816f368f3eea75b67aecce753b84ad4e8292edf2cbdbe56366de5ad74f6b3fa28f97d17ace9fb634d29e987ca1bb11b4704c7663d0d6bd4aa08ff897a8754d7c8fb43366d8985e5093f00b72e355c946f31fcbe86bf2fbdba89dc8bd8c633b6342afd9006a12e82353764d628044b9fcb85c8e637b636e50eb271cd32b92c9e03232fc71db62766beda939a69c7ecc75661fa89944551950b3cfec063577515502d4ec36bb40cd38aaba076a7699fda0427fd5c64f829afda607f43c89a39acc38e8e931fda0e8a4daeb39790214f59b3e50f5e4be42d247f74e80aa3eb311948da3d87d50b6d18441d9890e8c1936a0ed3c8a8d833603eae21d34e5351950f70885e2a0ce80badfbc9cb16adb50148655480d769b123a14d22129e405fa2aa793162d02e154015b18ec258351bc488b051611329878ae435e20d0e6050236784b7147d763f196ade848f29163291daa3fdf66dde9e35c9d7baeeeb9befe5fcd09950b2205fd2b07e97efdde74ac17cc40ac09f8c3d9af4586f5ceacafc60cbb63bbc0b5dda0b2795376794085b3d60c87ea139a3d0b3967850f5cec95cc5d7b3790177d350f23f4f1cb49a459a3f279d8e99968aa4518bf75d43653a8f146ac5c7693d085a13e43d70227a06823764400b6c3698b52f3bc67fad6b7ba1db486f2301bcf110138528e094063ebed4c676ccbb6b6f26ee02503f798375338564e08c14d5633b609fd9cc4140fd9f2e881109c28158290adf838c906f99dd0acf933fb65044145a91284ecf79266b1e680354dcc9415aaca0161b814976ea4327e269a75f99887e140794b20a4166a452af98d993e6b3a52ff60f8cc077f106455093903e56a3aace9276b894b18f6f91817849ba6a1205299496381e94879c49a7a5cfe3408448d0fe53188678f174d298932858fc9bb95d8f28e501c728b058ad4d3e65247e29789ed0f1e025b728b459570b8934dc83c99c1117a12da34d0a306e1a872fb1392ebcdaa31489a47d4ecaf71b2d64c5c02b227cd6c286eda5f74836356dfd1b43a5cbff778bdc4b1ff4a5a13619c8dd2dabddf71329a037b662495fb2541792d8da640dcdb504df1cebb2a1374d991f945583e49db3092ab052b15313f232cefa4091cc995b69e174a0ea71a5a734f5afa71449a9ab6cc17f5a68f1a5af3bd5cd000126946aca7fd278ec67cc52360cd43b96e83843599c5b4e5a58acd70f5a83168cd8a5c9e8272aadf7edfa8fe592c57abe55a13d09a1fe52a1c94d3b8edfd2f6f77ecd2461407701cec502db4145a6aa14e85d2a1a54bff92c7e37cfc0c54cb653c0b010723bdd0412d354b9d02062193e920d140d45a2c98454d8b6ea90aa50ec5213a489622b443d35fd2fcee3dc2cb9df72e9f3919bebcc7dd2deff73e7ddea7b4de65dec3c4e8df9cad4c6aed6de613e9986a843093e016ee5de68074e8382236a34ca575df9369b3a8f45d538f909bf7e3b4ce3a67d216c6cc423dc1a2d1af0c04306fa6e008c77ef73b2fc7a9ad6f2f5fb1ba10a7d1843e93c73b18976e4436fcd985d2b12e33bf066b97f8d353f3dff0381929ba5d8b91a8020043479aca1200ac0be4980fed5746af18e516be8b962c683b8f4bd050112d4ec170e82dd38374887b82914d8bf08f75a8ab84174250e80c33e7e603c363910846b639c3803a761e0d01fa2afda3603353064d0fb922584936803ad54a0bd08e90b9cc94fb46479611776e5bc896a06557ad3c84960d21cbd40c6ddc3be606d0113bb5923be73c2e242f41ed542b6149c838e7c9ed39036bfadcdc38414a2c72a4646ec17fd69ab77217da3ea899e8bc919a6621d04bd3c8438812d1b490cd7b3af36a25daea9889a9a15675d0dca8cfc45999123b665e00c14eb5b22a64712e29e65652ec4a6e9b19dcead632071ce9324781e0871f7ee0795c6833d16af9648605f5c8c4185ebb46cb281917b24d503bb1928c6a32c979ee2ccd0279187ea87222b3ca893673d902afa1a37c09249bfa4c522c07d9bd37428fc84e9539d2659275900c5741622d6b3255c91af3eb71c881e7b318e93fb3025e630b5fe6c16b5d28a6b94e2ee57331438eaf3f2b72add74291952b6331b9b3e22f936cbbcc8781509711b8b89481321781587bb1868f3b40b23e33497296757537d4d512e9240f9ce98c49956ae7a2508cf36e0e12411eb3c1df9d768efbce24d576e5b758cb42bbf3bde33f933abbad677fa86b5f32bcbbc9b850fc9c80a65fb1b68561401355a1884ff2ee9236d3e9bb1ee6129f39eec7d4b89065479a9d6f621e7b16aee54845ad9ce27eac309da761ae64b2ffd276ff2e6d45511cc0af249a21e2af2274f107ede258fc039cedd0427824178e90a4b4a38bf8e0a5128a8374e894ac8640873464c86009a40a199c4a6be676153453c12ec5ce92f7929c97f3ded3dc73f0f31f7cb9dfdc7bdecd7071b433ea6d17a0d45fb8dffe98a7b69b12b2a4b198f25e5fefabedfcace481ad4b6b528e1e53eae7b4a1e58f79db5fe21a4057fb15ad499da7a2cd889e4bc3fdc7f007da06a8d900e05bcee31a805d0328693fc79ad849f4af737a4af2f8dd9e65e0e048a33ab8fccbf9173c6dc3cd075d46ef3fa2a70ccf2da39c1a3560e0f6cbc0210cd40dd7127d4e45782e7b9832b0014d3cda3661607f04061a869b2c3a88d8849ec4f8cf8ce269c2da6cf3e0f93f3a4ec0536b92c1c0c0bf54103e33fab065ee68800ae4b2163c38058127a391696ddfa7c22ccb9e007e7b6252283209f5a262d22b5aa34d688fb5cba2f8a2acb3c18b12f0fc180d07e089ba20e14e428b7165604ed6594713bbb58898554d1465ad9d5346d6249d2de88032b88e87312fc065ef6aca91b4764dfa74fe274e65d17578cc5f3ae088dd5ac6d3f92a9ea49d15ad66055ca73b43e0bad6010ebfb5c9b832f674857456b49cddf09815c962d2d6ae3c530c338ccee2794295a0ef6214d31b833a1ae189c26ced8c62598fea2ce7a2a41d16b3a411ce41ccd6ae2b9ea955d3cea2c072fe84be9d912bfc3cf1c3a9d6b4b5ab538a29364d3a2b38391b6131ebfc5393ceb5d331c536bbc9e92cfe2f463f52f631660b3f4fc8270aabb59b2f94407c29e5c2ceb20f957448cc26f730a1ad5d8a2b914492d1593c54c847ca15c6bc01803c77a0a5ad4d2694d0c23c7696717b807ac198df448b89ad9d5f504a9e13ef0d24874a35781794e31f26e823a694e54c7eb058ded18f141ab3ca9f0cd09f24a61449bca2db8b53ec9c651f54c98df96edbadc3911bdb2ee5c654b23e6f429d750a16f53aa190c8c6b6e5e334bbf572fa31e53391ca3d32f46e6f2824cdb9e54bd96930424a33a272d5f2d9222965622fada16623937e34f9bb6aeb252562188ee3f83ff41add0442991442e9a2ef9676fa1a9c19d055977a014fe08106af30e0da8dc7f0220ed5121429da348ff9dce0cb2f493b45ce39f3ca1b0b5685b6d3bd7c93b7256f9cf5fa38556e11acad79fa3cb327810ea148eefdebcbdc80048762fc1af231559f566e7c868a03ac8d3f442f022d8291dc337f7c24b02e17f42c5023785cb987cbb5b4409ea6b8d71f390ca7a201a93677fa2387e1760392a19dad2992cb10c8d776ab550e4bf82dfcced041174d493204aae4aeae297b0f14428ce8989232046a0595ad7cca3a00f5bc58ed94a5077ae0485da58b411be4446a0e6c8411fc8309a10b96741068877bb90736c660863cb5a555a6399823d877322afd7d008669537bdd6b49d2164c143ab1bd5a65e98460ac80970a5492921977587f0a71d58954fa353678c76f3c9690259534611e5c17cfa95cf2f74ad2d7ceb5254ed011ef9288cc575237c9f0d180ff1c51618e5956a7a5eb533a2e47a9efbb7152650ce72128f001a7e670a71c0506ce0000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekrutmen`
--

CREATE TABLE IF NOT EXISTS `rekrutmen` (
  `no_pendaftaran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `j_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tingkat_pend` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ringkasan_laporan`
--

CREATE TABLE IF NOT EXISTS `ringkasan_laporan` (
  `id_worksheet` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roomsetup`
--

CREATE TABLE IF NOT EXISTS `roomsetup` (
  `id_room` varchar(10) NOT NULL,
  `jenis_room` varchar(20) NOT NULL,
  `jadwal_room` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `ID_Ruangan` varchar(10) NOT NULL,
  `Nama_Ruangan` varchar(25) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_alat_makanan`
--

CREATE TABLE IF NOT EXISTS `stok_alat_makanan` (
  `kode_am` int(10) NOT NULL,
  `nama_am` int(20) NOT NULL,
  `jumlah_am` int(10) NOT NULL,
  `kelayakan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_bahan_makanan`
--

CREATE TABLE IF NOT EXISTS `stok_bahan_makanan` (
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

CREATE TABLE IF NOT EXISTS `stok_foodcourt` (
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

CREATE TABLE IF NOT EXISTS `tugas` (
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
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

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
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

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
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id_promosi`);

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
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `histori_cleaning_service`
--
ALTER TABLE `histori_cleaning_service`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten_event`
--
ALTER TABLE `konten_event`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `no_meja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id_promosi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
