-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2019 pada 00.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Nabati', 'Makanan Ringan', 'makanan', 3000, 25, 'nabati1.jpg'),
(6, 'Cimory', 'Minuman Segar', 'minuman', 9000, 14, 'cimory.jpg'),
(7, 'Drink Tanggo', 'Minuman Segar', 'minuman', 6000, 14, 'drinktanggo1.jpg'),
(8, 'Cheetos', 'makangan ringan', 'makanan', 7000, 27, 'cheetos1.jpg'),
(9, 'Teh Kotak', 'Minuman Segar', 'minuman', 4000, 23, 'tehkotak1.jpg'),
(11, 'Doritos', 'Makanan Ringan', 'makanan', 5000, 13, 'doritos1.jpg'),
(14, 'Garuda Rosta', 'Makanan Ringan', 'makanan', 9500, 19, 'garudarosta12.jpg'),
(15, 'Sponge', 'Makanan Ringan', 'makanan', 11000, 10, 'sponge1.jpg'),
(16, 'pulpy orange', 'Minuman Segar', 'minuman', 13500, 18, 'puply1.jpg'),
(17, 'Teh Pucuk Harum', 'Minuman Segar', 'minuman', 5000, 30, 'tehpucuk1.jpg'),
(18, 'Aqua Air Mineral', 'Minuman Segar', 'minuman', 3500, 40, 'aqua1.jpg'),
(19, 'Good  Day Cappuccino', 'Minuman Segar', 'minuman', 7000, 14, 'gooddays1.jpg'),
(20, 'Chuba', 'Makanan Ringan', 'makanan', 2000, 40, 'chuba1.jpg'),
(21, 'Top Strawberry', 'Makanan Ringan', 'makanan', 1500, 35, 'top1.jpg'),
(22, 'Sari Gandum', 'Makanan Ringan', 'makanan', 3500, 19, 'sarigandum1.jpg'),
(23, 'Vanwheat', 'Makanan Ringan', 'makanan', 1500, 40, 'vanwheat1.jpg'),
(24, 'Susu Beruang', 'Minuman Segar', 'minuman', 10000, 38, 'susuberuang1.jpg'),
(25, 'MiloDrink', 'Minuman Segar', 'minuman', 7000, 30, 'miloDrink1.jpg'),
(26, 'Nu green tea 450ml', 'Minuman Segar', 'minuman', 5500, 24, 'nugreentea1.jpg'),
(27, 'Larutan Penyegar', 'Minuman Segar', 'minuman', 7000, 20, 'larutan1.jpg'),
(28, 'Good Mood Lemon', 'Minuman Segar', 'minuman', 5000, 30, 'goodmood1.jpg'),
(29, 'Mizon Lychee Lemon', 'Minuman Segar', 'minuman', 6500, 14, 'mizone1.jpg'),
(30, 'Yuzu Isotonic', 'Minuman Segar', 'minuman', 4500, 18, 'yuzu1.jpg'),
(31, 'You C Water Orange', 'Minuman Segar', 'minuman', 8000, 19, 'waterorangee.jpg'),
(32, 'AICE-Milk Melon', 'Es Krim nikmat', 'ice cream', 3000, 12, 'esMelon1.png'),
(36, 'Teh Gelas', 'Minuman Segar', 'minuman', 3500, 30, 'tehgelasbotol1.jpg'),
(37, 'Nestle Purelife', 'Minuman Segar', 'minuman', 4500, 25, 'purelife1.jpg'),
(39, 'Jetz Stik', 'Makanan Ringan', 'makanan', 2000, 30, 'jetz1.jpg'),
(40, 'Pota Bee', 'Makanan Ringan', 'makanan', 3000, 20, 'pottabee1.jpg'),
(41, 'Rin Bee', 'Makanan Ringan', 'makanan', 5500, 20, 'rinbee1.jpg'),
(42, 'Big Roll', 'Makanan Ringan', 'makanan', 4000, 25, 'roll1.jpg'),
(43, 'Mister Potato', 'Makanan Ringan', 'makanan', 8000, 10, 'mrpotato1.jpg'),
(44, 'Merapi Salacca Chips', 'Makanan Ringan', 'makanan', 7000, 20, 'merapiSalacca2.jpg'),
(45, 'Slai O\'lai', 'Makanan Ringan', 'makanan', 3000, 15, 'selai1.jpg'),
(46, 'Roma Kelapa', 'Makanan Ringan', 'makanan', 2500, 20, 'roma1.jpg'),
(47, 'SaltCheese', 'Makanan Ringan', 'makanan', 1500, 25, 'saltcheese1.jpg'),
(51, 'Roll N Roll', 'Makanan Ringan', 'makanan', 5000, 30, 'rollNroll.jpg'),
(56, 'Pillows', 'Makanan Ringan', 'makanan', 5000, 30, 'pillows.jpg'),
(57, 'Gery Saluut', 'Makanan Ringan', 'makanan', 4000, 25, 'gerisalut.jpg'),
(58, 'Fullo Blaster', 'Makanan Ringan', 'makanan', 3500, 30, 'fulloblaster.jpg'),
(65, 'Protex Regular', 'Untuk Menstruasi', 'perlengkapan rumah', 10500, 9, 'Protex_Regular1.jpg'),
(66, 'Kamper Gajah Lemari', 'Untuk Di Kelas', 'perlengkapan sekolah', 8000, 15, 'Kamper_Gajah_Lemari1.jpg'),
(67, 'Lem Fox', 'Untuk Menempelkan Kertas', 'perlengkapan sekolah', 5000, 10, 'Lem_Fox1.jpg'),
(68, 'Aice-Strawberry Crispy', 'Es Krim nikmat', 'ice cream', 3500, 10, 'Strawberry1.jpg'),
(69, 'AICE-Strawberry Mochi', 'Es Krim nikmat', 'ice cream', 3000, 25, 'strawberry_mochi1.jpg'),
(70, 'AICE-Chocolate Mochi', 'Es Krim nikmat', 'ice cream', 3000, 15, 'Chocolate_mochi1.jpg'),
(71, 'Asepso Sulphur', 'Untuk menyembuhkan penyakit', 'obat obatan', 6500, 25, 'ASEPSO_SULFUR1.jpg'),
(72, 'Balsem Lang', 'Untuk menyembuhkan pusing', 'obat obatan', 8500, 10, 'balsem1.jpg'),
(73, 'Malkist Abon', 'Makanan Ringan', 'makanan', 6500, 20, 'malkistabon1.jpg'),
(75, 'Vegetable Cheese', 'Makanan Ringan', 'makanan', 5000, 25, 'Vegetable_Cheese1.jpg'),
(76, 'Map ungu', 'perlengkapan berkas', 'perlengkapan sekolah', 4000, 40, 'Ungu1.jpg'),
(77, 'Tissue Passeo', 'Untuk Pembersih Keringat', 'perlengkapan rumah', 10000, 29, 'tissupaseo21.jpg'),
(78, 'Tissue Passeo kecil', 'Untuk membersihkan ', 'perlengkapan rumah', 4000, 40, 'tissupaseo.jpg'),
(79, 'Tim Tam Keju', 'Makanan Ringan', 'makanan', 3000, 40, 'timtamkeju1.jpg'),
(80, 'Tim Tam Coklat', 'Makanan Ringan', 'makanan', 3000, 40, 'timtamcoklat1.jpg'),
(81, 'Tissue Tessa', 'Untuk membersihkan ', 'perlengkapan rumah', 10000, 25, 'tessa1.jpg'),
(82, 'Teh Poci', 'Minuman Rempah', 'minuman', 6000, 25, 'TehPoci1.jpg'),
(83, 'Sponge Strawberry', 'Makanan Ringan', 'makanan', 11000, 40, 'spongecrunch1.jpg'),
(86, 'Slai O\'lai Nanas', 'Makanan Ringan', 'makanan', 3000, 40, 'slaiolainanas1.png'),
(87, 'Slai O\'lai Blueberry', 'Makanan Ringan', 'makanan', 3000, 40, 'Slaiolai1.jpg'),
(88, 'Siip Coklat', 'Makanan Ringan', 'makanan', 5000, 40, 'sipcklt1.jpg'),
(89, 'AICE-Sweet Corn', 'Es Krim nikmat', 'ice cream', 3000, 20, 'eskrim.jpg'),
(90, 'Panadol Extra', 'Untuk menyembuhkan penyakit', 'obat obatan', 2000, 15, 'panadolmerah1.jpg'),
(91, 'Panadol Cold Flu', 'Untuk menyembuhkan penyakit', 'obat obatan', 2000, 15, 'panadolhijau1.jpg'),
(92, 'Komix Jahe', 'Untuk Menghangatkan Tenggorokan', 'obat obatan', 1500, 10, 'Komixorange1.jpg'),
(93, 'Komix OBH', 'Untuk Meredahkan Batuk', 'obat obatan', 1500, 10, 'Komixbiru1.jpg'),
(94, 'Komik Peppermint', 'Untuk Meredahkan Batuk', 'obat obatan', 1500, 10, 'Komix_Rasa_Peppermint1.jpg'),
(95, 'Komik Jeruk Nipis', 'Untuk Tenggorokan Gatal', 'obat obatan', 1500, 10, 'Komix__Rasa_Jeruk_Nipis1.jpg'),
(96, 'Kingkong Keju', 'Makanan Ringan', 'makanan', 15000, 15, 'Kingkong_keju1.jpg'),
(97, 'Good Mood Jeruk', 'Minuman Segar', 'minuman', 5000, 30, 'Jeruk1.jpg'),
(98, 'OKJ Drink Stroberri', 'Minuman Segar', 'minuman', 2000, 30, 'JellyStrawberry1.jpg'),
(99, 'OKJ Drink Grape', 'Minuman Segar', 'minuman', 2000, 30, 'Jellygrape1.jpg'),
(100, 'OKJ Drink Jambu', 'Minuman Segar', 'minuman', 2000, 30, 'jellyjambu1.jpg'),
(101, 'Inzana', 'Untuk Penurun Demam', 'obat obatan', 1500, 25, 'inzana1.jpg'),
(104, 'Good Mood Stroberri', 'Minuman Segar', 'minuman', 5000, 30, 'goodstarberri1.jpg'),
(105, 'Frisian Flag Vanilla', 'Minuman Segar', 'minuman', 9000, 20, 'Frisian_Flag.jpg'),
(107, 'Glade Matic', 'Pewangi Ruangan', 'perlengkapan rumah', 15000, 24, 'Glade_Matic1.jpg'),
(108, 'Fresh Care', 'Untuk menyembuhkan penyakit', 'obat obatan', 8500, 20, 'FreshCare1.jpg'),
(109, 'Hansaplast', 'Untuk Mengobati Luka', 'obat obatan', 1000, 22, 'Hanspalast1.jpg'),
(110, 'Map Hijau', 'perlengkapan berkas', 'perlengkapan sekolah', 4000, 40, 'Hijau1.jpg'),
(111, 'Granita Black Coffee', 'Minuman Segar', 'minuman', 2000, 30, 'Granita_Kopi_Hitam1.jpg'),
(113, 'Granita Cappuccino', 'Minuman Segar', 'minuman', 2000, 30, 'Granita_Susu1.jpg'),
(114, 'Taro Net', 'Makanan Ringan', 'makanan', 1500, 20, 'taro.jpg'),
(115, 'Happy Tos', 'Makanan Ringan', 'makanan', 7000, 18, 'happytos11.jpg'),
(116, 'AICE-Mochi Vanilla', 'Es Krim nikmat', 'ice cream', 3000, 20, 'mochi_vanilla1.jpg'),
(117, 'Bodrex Migran', 'Untuk Sakit Kepala', 'obat obatan', 1500, 90, 'bodrex-migra-kaplet1.jpg'),
(119, 'Pasta Cokelat', 'Makanan Ringan', 'makanan', 1000, 40, 'PASTA_KEJU_RICHEESE_COKLAT1.jpg'),
(120, 'Faster C600', 'Untuk Menulis dibuku', 'perlengkapan sekolah', 2500, 15, 'Fasterc6001.jpg'),
(121, 'Decolgen', 'Untuk menyembuhkan penyakit', 'obat obatan', 3000, 10, 'Decolgen1.jpg'),
(123, 'Cutter Asahi', 'Untuk Memotong Benda', 'perlengkapan rumah', 6500, 20, 'cutter_asahi1.jpg'),
(125, 'Gery Chocolatos ', 'Makanan Ringan', 'makanan', 1500, 30, 'cokolatos1.jpg'),
(126, 'Charm Safe Night', 'Untuk Perempuan Mentruasi', 'perlengkapan rumah', 7000, 30, 'Charm_Safe_night1.jpg'),
(127, 'Natural Citra', 'Untuk Memutihkan Kulit', 'perlengkapan rumah', 13000, 19, 'Citra1.jpg'),
(128, 'Map Warna Warni', 'perlengkapan berkas', 'perlengkapan sekolah', 4000, 30, 'Bussines_File1.jpg'),
(130, 'Malkist Kelapa', 'Makanan Ringan', 'makanan', 3000, 30, 'malkistkelapa1.jpg'),
(131, 'Malkist Crackers', 'Makanan Ringan', 'makanan', 3000, 30, 'malkistoriginal1.jpg'),
(132, 'Mitu Baby', 'Untuk Menghangatkan Badan', 'obat obatan', 10000, 40, 'Mitu_baby1.jpg'),
(133, 'Nabati Coklat', 'Makanan Ringan', 'makanan', 2500, 30, 'nabaticokelat1.jpg'),
(134, 'Penghapus Konako', 'Untuk Menghapus', 'perlengkapan sekolah', 2000, 30, 'PENGHAPUSkenko1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `tgl_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `kelas`, `tgl_pesan`) VALUES
(1, 'Jaki Andika', 'XI RPL 1', '2019-11-23 09:21:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 7, 'Drink Tanggo', 1, 6000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(56) NOT NULL,
  `kelamin` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `kelas`, `kelamin`, `password`, `role_id`, `email`) VALUES
(1, 'admin', 'kelas 12', 'laki-laki', 'admin', 1, 'admin@gmail.com'),
(2, 'user', 'Kelas 10', 'laki-laki', '123', 2, 'user@gmail.com'),
(3, 'rendi', 'Kelas 11', 'laki-laki', '123', 2, 'rendi@gmail.com'),
(4, 'jeni', 'Kelas 11', 'Perempuan', '123', 2, 'jenisolo@gmail.com'),
(5, 'Jaki Andika', 'Kelas 11', 'Laki-Laki', 'jaki', 2, 'jakiandika19@gmail.com'),
(6, 'Yusril Agisha Hendrawan', 'Kelas 11', 'Laki-Laki', 'guepersija', 2, 'yusril.agisha12@gmail.com'),
(7, 'VickyKustaman', 'Kelas 11', 'Laki-Laki', 'vicky', 2, 'vickysaja@gmail.com'),
(8, 'Wisman Toro', 'Kelas 11', 'Laki-Laki', 'wisman', 2, 'wismantoro@gmail.com'),
(9, 'Levina', 'Kelas 12', 'Perempuan', 'ena', 2, 'ena@gmail.com'),
(10, 'rendi fadillah', 'Kelas 10', 'Laki-Laki', '12345', 2, 'rendifadillah@gmail.com'),
(11, 'Yogi Saputra', 'Kelas 11', 'Laki-Laki', '1234', 2, 'yogi240918@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
