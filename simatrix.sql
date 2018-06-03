-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 03 Jun 2018 pada 15.22
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simatrix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_penjualan`, `id_produk`, `jumlah`, `total_harga`, `tanggal`) VALUES
(10, 7, 137, 1000000, '2018-05-24'),
(10, 9, 137, 1925000, '2018-05-24'),
(11, 8, 119, 2500000, '2018-04-24'),
(12, 8, 137, 1250000, '2018-05-24'),
(13, 8, 114, 2750000, '2018-03-24'),
(14, 8, 120, 3000000, '2018-02-24'),
(15, 8, 115, 2875000, '2018-01-24'),
(16, 7, 100, 2000000, '2018-05-25'),
(17, 8, 50, 1250000, '2018-05-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `permintaan` double NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` double NOT NULL,
  `kualitas` double NOT NULL,
  `kesegaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perhitungan`
--

INSERT INTO `perhitungan` (`id_perhitungan`, `id_user`, `permintaan`, `harga`, `berat`, `kualitas`, `kesegaran`) VALUES
(2, 2, 0.4, 10000, 0.6, 0.1, 0.8),
(3, 7, 0.3, 11000, 0.4, 0.7, 0.2),
(4, 7, 0.3, 12000, 0.4, 0.7, 0.4),
(9, 8, 0.4, 18000, 0.2, 0.1, 0.6),
(10, 2, 0, 14000, 0, 0.1, 0.2),
(11, 2, 0, 100, 0, 0, 0),
(12, 2, 0, 1, 1, 1, 1),
(13, 2, 0.1, 100000, 0.1, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga` double NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `nama_produk`, `jumlah_stok`, `harga`, `foto_produk`, `deskripsi`) VALUES
(7, 2, 'Abon lele enak', 900, 20000, '24052018030628abon_orig.jpg', 'Abon lele enak'),
(8, 2, 'Keripik lele', 105, 25000, '24052018030711keripik_orig.jpg', 'Keripik lele enak sekali'),
(9, 2, 'Nugget lele', 450, 35000, '24052018030748nugget_orig.jpg', 'Nugget lele sangat enak'),
(10, 2, 'Pastel lele', 1500, 15000, '24052018030815pastel-kering_orig.jpg', 'Pastel lele ori dan enak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'belum bayar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_user`, `tanggal`, `status`) VALUES
(10, 3, '2018-05-24', 'lunas'),
(11, 6, '2018-04-24', 'lunas'),
(12, 3, '2018-05-24', 'lunas'),
(13, 3, '2018-03-24', 'lunas'),
(14, 6, '2018-02-24', 'lunas'),
(15, 3, '2018-01-24', 'lunas'),
(16, 3, '2018-05-25', 'lunas'),
(17, 6, '2018-05-25', 'lunas'),
(18, 1, '2018-06-02', 'belum bayar'),
(19, 1, '2018-06-02', 'belum bayar'),
(20, 1, '2018-06-02', 'belum bayar'),
(21, 1, '2018-06-02', 'belum bayar'),
(22, 1, '2018-06-02', 'belum bayar'),
(23, 1, '2018-06-02', 'belum bayar'),
(24, 1, '2018-06-02', 'belum bayar'),
(25, 1, '2018-06-02', 'belum bayar'),
(26, 1, '2018-06-02', 'belum bayar'),
(27, 1, '2018-06-02', 'belum bayar'),
(30, 1, '2018-06-02', 'belum bayar'),
(31, 1, '2018-06-02', 'belum bayar'),
(32, 1, '2018-06-02', 'belum bayar'),
(33, 1, '2018-06-02', 'belum bayar'),
(34, 1, '2018-06-02', 'belum bayar'),
(35, 1, '2018-06-02', 'belum bayar'),
(36, 1, '2018-06-02', 'belum bayar'),
(37, 1, '2018-06-02', 'belum bayar'),
(38, 1, '2018-06-02', 'belum bayar'),
(39, 1, '2018-06-02', 'belum bayar'),
(40, 1, '2018-06-02', 'belum bayar'),
(41, 1, '2018-06-02', 'belum bayar'),
(42, 1, '2018-06-02', 'belum bayar'),
(43, 1, '2018-06-02', 'belum bayar'),
(44, 1, '2018-06-02', 'belum bayar'),
(45, 1, '2018-06-02', 'belum bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `email`, `level`, `no_telepon`) VALUES
(1, 'peternak', 'peternak', 'peternak', 'peternak@gmail.com', 1, '0987654321'),
(2, 'jember', 'jember', 'jember', 'admingudang@gmail.com', 2, '09876545678'),
(3, 'Distributor 1', 'Distributor1', 'Distributor1', 'Distributor1@gmail.com', 3, '987656733'),
(6, 'Distributor 2', 'Distributor2', 'Distributor2', 'Distributor2@gmail.com', 3, '08978390660'),
(7, 'probolinggo', 'test', 'test', 'testing@testing.com', 2, '0123456789123'),
(8, 'situbondo', 'situ', 'bondo', 'situsitu@bondo.com', 2, '088890890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `id_order` (`id_penjualan`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
