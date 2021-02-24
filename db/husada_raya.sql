-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2021 pada 07.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `husada_raya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id_antrian` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_antri` date NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id_antrian`, `id_pasien`, `id_user`, `tanggal_antri`, `status`) VALUES
(1, 1, 1, '2021-02-24', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `ID` int(11) NOT NULL,
  `KODE_KECAMATAN` varchar(7) NOT NULL,
  `KECAMATAN` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`ID`, `KODE_KECAMATAN`, `KECAMATAN`) VALUES
(1, '7.01.01', 'KECAMATAN BANGKALAN'),
(2, '7.01.02', 'KECAMATAN SOCAH'),
(3, '7.01.03', 'KECAMATAN KAMAL'),
(4, '7.01.04', 'KECAMATAN LABANG'),
(5, '7.01.05', 'KECAMATAN MODUNG'),
(6, '7.01.06', 'KECAMATAN KWANYAR'),
(7, '7.01.07', 'KECAMATAN TRAGAH'),
(8, '7.01.08', 'KECAMATAN BLEGA'),
(9, '7.01.09', 'KECAMATAN KONANG'),
(10, '7.01.10', 'KECAMATAN GALIS'),
(11, '7.01.11', 'KECAMATAN TANAH MERAH'),
(12, '7.01.12', 'KECAMATAN BURNEH'),
(13, '7.01.13', 'KECAMATAN AROSBAYA'),
(14, '7.01.14', 'KECAMATAN GEGER'),
(15, '7.01.15', 'KECAMATAN KLAMPIS'),
(16, '7.01.16', 'KECAMATAN TANJUNG BUMI'),
(17, '7.01.17', 'KECAMATAN SEPULU'),
(18, '7.01.18', 'KECAMATAN KOKOP'),
(19, '7.01.19', 'LUAR BANGKALAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(12) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `ortu` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(13) DEFAULT NULL,
  `ttl` varchar(50) NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `agama` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `kode`, `nik`, `nama`, `ortu`, `alamat`, `nohp`, `ttl`, `kecamatan`, `jenis_kelamin`, `agama`, `status`, `pekerjaan`, `pendidikan`, `tgl_input`) VALUES
(1, '1.AVIr0.1', '1234', 'inas', 'tukimin', 'pejagan', '092123', '12/12/1996', 1, 1, 0, 0, 'test', 'test', '2021-02-23'),
(2, '2.v1KQP.1', '', 'mirna', 'saiman', 'asas', '123123', '02/01/2021', 2, 1, 1, 0, '', '', '2021-02-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat_diagnosa`
--

CREATE TABLE `tbl_riwayat_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tindakan`
--

CREATE TABLE `tbl_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_tindakan`
--

CREATE TABLE `tbl_transaksi_tindakan` (
  `id_transaksi_tindakan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `rule` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `jabatan`, `email`, `password`, `rule`) VALUES
(1, 'dr.Nunuk Kristiani,Sp.Rad', 'Spesialis Radiologi', 'test@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
(2, 'dr.Nuryatien Husna,Sp.KFR', 'Spesialis Kedokteran Fisik & Rehabilitas', 'test@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
(3, 'dr.Mirathi Ayu Irnanda', 'Dokter Umum', 'test@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan` (`kecamatan`);

--
-- Indeks untuk tabel `tbl_riwayat_diagnosa`
--
ALTER TABLE `tbl_riwayat_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indeks untuk tabel `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_transaksi_tindakan`
--
ALTER TABLE `tbl_transaksi_tindakan`
  ADD PRIMARY KEY (`id_transaksi_tindakan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_riwayat_diagnosa`
--
ALTER TABLE `tbl_riwayat_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi_tindakan`
--
ALTER TABLE `tbl_transaksi_tindakan`
  MODIFY `id_transaksi_tindakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD CONSTRAINT `tbl_pasien_ibfk_1` FOREIGN KEY (`kecamatan`) REFERENCES `tbl_kecamatan` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
