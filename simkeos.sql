-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2023 pada 10.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simkeos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dinamis_user`
--

CREATE TABLE `tb_dinamis_user` (
  `id` int(20) NOT NULL,
  `header_banner` varchar(255) DEFAULT NULL,
  `text_banner` varchar(255) DEFAULT NULL,
  `button1` varchar(50) DEFAULT NULL,
  `button2` varchar(50) DEFAULT NULL,
  `header_about` varchar(255) DEFAULT NULL,
  `text_about` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dinamis_user`
--

INSERT INTO `tb_dinamis_user` (`id`, `header_banner`, `text_banner`, `button1`, `button2`, `header_about`, `text_about`) VALUES
(1, 'Banyu Lemon 100% Buah Lemon Segar', 'Banyu Lemon adalah salah satu produk minuman herbal dari sari buah lemon asli yang diambil langsung dari kebunnya. Diproduksi langsung tanpa ada tambahan zat apapun.', 'tentang kami', 'produk kami', '100% Buah LemonAsli & Segar', 'Banyu Lemon adalah salah satu produk minuman herbal dari sari buah lemon asli yang diambil langsung dari kebunnya. Diproduksi langsung tanpa ada tambahan zat apapun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `image` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasukan`
--

CREATE TABLE `tb_pemasukan` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `noHp` varchar(20) NOT NULL,
  `barang` varchar(1000) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemasukan`
--

INSERT INTO `tb_pemasukan` (`id`, `nama`, `tanggal`, `noHp`, `barang`, `keterangan`, `jumlah`) VALUES
(31, 'Khairul Anwar', '2023-01-01', '08576634878347', 'tenda cap 5 (10), matras (4)', 'kurang 200000', 100000),
(32, 'dena', '2023-01-11', '086799876687', 'tenda cap 5', 'kurang 100000', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id` int(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keperluan` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` decimal(15,2) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `image` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `image`) VALUES
(2, 'banyu', '828f9d247586a55ee099f7bfd4493a5b', 'user.png'),
(3, 'lemon', '3f24e567591e9cbab2a7d2f1f748a1d4', 'img.jpg'),
(4, 'simkeos', 'simkeos', NULL),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dinamis_user`
--
ALTER TABLE `tb_dinamis_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_barang`) USING BTREE;

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dinamis_user`
--
ALTER TABLE `tb_dinamis_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
