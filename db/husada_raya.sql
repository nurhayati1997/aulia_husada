-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2021 pada 09.27
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
(1, 1, 1, '2021-02-25', 1),
(2, 1, 2, '2021-02-25', 0);

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
  `id_antrian` int(11) NOT NULL,
  `keluhan` varchar(500) NOT NULL,
  `penyakit_sekarang` varchar(200) DEFAULT NULL,
  `penyakit_dahulu` varchar(200) DEFAULT NULL,
  `riwayat_alergi` varchar(500) DEFAULT NULL,
  `riwayat_operasi` varchar(200) DEFAULT NULL,
  `riwayat_transfusi` varchar(200) DEFAULT NULL,
  `riwayat_obat` varchar(200) DEFAULT NULL,
  `kesadaran_umum` varchar(200) DEFAULT NULL,
  `kesadaran` varchar(200) DEFAULT NULL,
  `tekanan_darah` varchar(100) NOT NULL,
  `nadi` varchar(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `rr` varchar(100) NOT NULL,
  `diagnosa` varchar(500) NOT NULL,
  `terapi` varchar(500) NOT NULL,
  `hasil_lab` varchar(200) DEFAULT NULL,
  `hasil_radiologi` varchar(200) DEFAULT NULL,
  `hasil_catatan` varchar(200) DEFAULT NULL,
  `tindakan` int(2) DEFAULT NULL,
  `berkas_tindakan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_riwayat_diagnosa`
--

INSERT INTO `tbl_riwayat_diagnosa` (`id_diagnosa`, `id_antrian`, `keluhan`, `penyakit_sekarang`, `penyakit_dahulu`, `riwayat_alergi`, `riwayat_operasi`, `riwayat_transfusi`, `riwayat_obat`, `kesadaran_umum`, `kesadaran`, `tekanan_darah`, `nadi`, `suhu`, `rr`, `diagnosa`, `terapi`, `hasil_lab`, `hasil_radiologi`, `hasil_catatan`, `tindakan`, `berkas_tindakan`) VALUES
(1, 1, 'rindu', '', '', '', '', '', '', '', '', '11', '13', '12', '31', 'Butuh Kasih Sayang', 'NIKAH', NULL, NULL, NULL, 0, '2021-02-25_1_inas1.pdf');

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

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_antrian`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_antrian` (
`id_antrian` int(11)
,`id_pasien` int(11)
,`kode` varchar(12)
,`nik` varchar(16)
,`nama` varchar(50)
,`ortu` varchar(50)
,`alamat` varchar(100)
,`nohp` varchar(13)
,`ttl` varchar(50)
,`id_kecamatan` int(11)
,`nama_kecamatan` varchar(32)
,`jenis_kelamin` int(11)
,`agama` int(11)
,`status` int(11)
,`pekerjaan` varchar(100)
,`pendidikan` varchar(100)
,`tgl_input` date
,`id_dokter` int(11)
,`nama_dokter` varchar(200)
,`spesialis` varchar(200)
,`tanggal_antri` date
,`status_antrian` int(1)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_pasien`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pasien` (
`id` int(11)
,`kode` varchar(12)
,`nik` varchar(16)
,`nama` varchar(50)
,`ortu` varchar(50)
,`alamat` varchar(100)
,`nohp` varchar(13)
,`ttl` varchar(50)
,`id_kecamatan` int(11)
,`nama_kecamatan` varchar(32)
,`jenis_kelamin` int(11)
,`agama` int(11)
,`status` int(11)
,`pekerjaan` varchar(100)
,`pendidikan` varchar(100)
,`tgl_input` date
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_riwayat_diagnosa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_riwayat_diagnosa` (
`id_diagnosa` int(11)
,`id_antrian` int(11)
,`id_pasien` int(11)
,`kode` varchar(12)
,`nik` varchar(16)
,`nama` varchar(50)
,`ortu` varchar(50)
,`alamat` varchar(100)
,`nohp` varchar(13)
,`ttl` varchar(50)
,`id_kecamatan` int(11)
,`nama_kecamatan` varchar(32)
,`jenis_kelamin` int(11)
,`agama` int(11)
,`status` int(11)
,`pekerjaan` varchar(100)
,`pendidikan` varchar(100)
,`tgl_input` date
,`id_dokter` int(11)
,`nama_dokter` varchar(200)
,`spesialis` varchar(200)
,`tanggal_antri` date
,`status_antrian` int(1)
,`keluhan` varchar(500)
,`penyakit_sekarang` varchar(200)
,`penyakit_dahulu` varchar(200)
,`riwayat_alergi` varchar(500)
,`riwayat_operasi` varchar(200)
,`riwayat_transfusi` varchar(200)
,`riwayat_obat` varchar(200)
,`kesadaran_umum` varchar(200)
,`kesadaran` varchar(200)
,`tekanan_darah` varchar(100)
,`nadi` varchar(100)
,`suhu` varchar(100)
,`rr` varchar(100)
,`diagnosa` varchar(500)
,`terapi` varchar(500)
,`hasil_lab` varchar(200)
,`hasil_radiologi` varchar(200)
,`hasil_catatan` varchar(200)
,`tindakan` int(2)
,`berkas_tindakan` varchar(200)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_antrian`
--
DROP TABLE IF EXISTS `v_antrian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_antrian`  AS  select `tbl_antrian`.`id_antrian` AS `id_antrian`,`tbl_antrian`.`id_pasien` AS `id_pasien`,`v_pasien`.`kode` AS `kode`,`v_pasien`.`nik` AS `nik`,`v_pasien`.`nama` AS `nama`,`v_pasien`.`ortu` AS `ortu`,`v_pasien`.`alamat` AS `alamat`,`v_pasien`.`nohp` AS `nohp`,`v_pasien`.`ttl` AS `ttl`,`v_pasien`.`id_kecamatan` AS `id_kecamatan`,`v_pasien`.`nama_kecamatan` AS `nama_kecamatan`,`v_pasien`.`jenis_kelamin` AS `jenis_kelamin`,`v_pasien`.`agama` AS `agama`,`v_pasien`.`status` AS `status`,`v_pasien`.`pekerjaan` AS `pekerjaan`,`v_pasien`.`pendidikan` AS `pendidikan`,`v_pasien`.`tgl_input` AS `tgl_input`,`tbl_antrian`.`id_user` AS `id_dokter`,`tbl_user`.`nama` AS `nama_dokter`,`tbl_user`.`jabatan` AS `spesialis`,`tbl_antrian`.`tanggal_antri` AS `tanggal_antri`,`tbl_antrian`.`status` AS `status_antrian` from ((`tbl_antrian` left join `v_pasien` on(`v_pasien`.`id` = `tbl_antrian`.`id_pasien`)) left join `tbl_user` on(`tbl_user`.`id_user` = `tbl_antrian`.`id_user`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pasien`
--
DROP TABLE IF EXISTS `v_pasien`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pasien`  AS  select `tbl_pasien`.`id` AS `id`,`tbl_pasien`.`kode` AS `kode`,`tbl_pasien`.`nik` AS `nik`,`tbl_pasien`.`nama` AS `nama`,`tbl_pasien`.`ortu` AS `ortu`,`tbl_pasien`.`alamat` AS `alamat`,`tbl_pasien`.`nohp` AS `nohp`,`tbl_pasien`.`ttl` AS `ttl`,`tbl_pasien`.`kecamatan` AS `id_kecamatan`,`tbl_kecamatan`.`KECAMATAN` AS `nama_kecamatan`,`tbl_pasien`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pasien`.`agama` AS `agama`,`tbl_pasien`.`status` AS `status`,`tbl_pasien`.`pekerjaan` AS `pekerjaan`,`tbl_pasien`.`pendidikan` AS `pendidikan`,`tbl_pasien`.`tgl_input` AS `tgl_input` from (`tbl_pasien` left join `tbl_kecamatan` on(`tbl_kecamatan`.`ID` = `tbl_pasien`.`kecamatan`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_riwayat_diagnosa`
--
DROP TABLE IF EXISTS `v_riwayat_diagnosa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_riwayat_diagnosa`  AS  select `tbl_riwayat_diagnosa`.`id_diagnosa` AS `id_diagnosa`,`v_antrian`.`id_antrian` AS `id_antrian`,`v_antrian`.`id_pasien` AS `id_pasien`,`v_antrian`.`kode` AS `kode`,`v_antrian`.`nik` AS `nik`,`v_antrian`.`nama` AS `nama`,`v_antrian`.`ortu` AS `ortu`,`v_antrian`.`alamat` AS `alamat`,`v_antrian`.`nohp` AS `nohp`,`v_antrian`.`ttl` AS `ttl`,`v_antrian`.`id_kecamatan` AS `id_kecamatan`,`v_antrian`.`nama_kecamatan` AS `nama_kecamatan`,`v_antrian`.`jenis_kelamin` AS `jenis_kelamin`,`v_antrian`.`agama` AS `agama`,`v_antrian`.`status` AS `status`,`v_antrian`.`pekerjaan` AS `pekerjaan`,`v_antrian`.`pendidikan` AS `pendidikan`,`v_antrian`.`tgl_input` AS `tgl_input`,`v_antrian`.`id_dokter` AS `id_dokter`,`v_antrian`.`nama_dokter` AS `nama_dokter`,`v_antrian`.`spesialis` AS `spesialis`,`v_antrian`.`tanggal_antri` AS `tanggal_antri`,`v_antrian`.`status_antrian` AS `status_antrian`,`tbl_riwayat_diagnosa`.`keluhan` AS `keluhan`,`tbl_riwayat_diagnosa`.`penyakit_sekarang` AS `penyakit_sekarang`,`tbl_riwayat_diagnosa`.`penyakit_dahulu` AS `penyakit_dahulu`,`tbl_riwayat_diagnosa`.`riwayat_alergi` AS `riwayat_alergi`,`tbl_riwayat_diagnosa`.`riwayat_operasi` AS `riwayat_operasi`,`tbl_riwayat_diagnosa`.`riwayat_transfusi` AS `riwayat_transfusi`,`tbl_riwayat_diagnosa`.`riwayat_obat` AS `riwayat_obat`,`tbl_riwayat_diagnosa`.`kesadaran_umum` AS `kesadaran_umum`,`tbl_riwayat_diagnosa`.`kesadaran` AS `kesadaran`,`tbl_riwayat_diagnosa`.`tekanan_darah` AS `tekanan_darah`,`tbl_riwayat_diagnosa`.`nadi` AS `nadi`,`tbl_riwayat_diagnosa`.`suhu` AS `suhu`,`tbl_riwayat_diagnosa`.`rr` AS `rr`,`tbl_riwayat_diagnosa`.`diagnosa` AS `diagnosa`,`tbl_riwayat_diagnosa`.`terapi` AS `terapi`,`tbl_riwayat_diagnosa`.`hasil_lab` AS `hasil_lab`,`tbl_riwayat_diagnosa`.`hasil_radiologi` AS `hasil_radiologi`,`tbl_riwayat_diagnosa`.`hasil_catatan` AS `hasil_catatan`,`tbl_riwayat_diagnosa`.`tindakan` AS `tindakan`,`tbl_riwayat_diagnosa`.`berkas_tindakan` AS `berkas_tindakan` from (`v_antrian` left join `tbl_riwayat_diagnosa` on(`tbl_riwayat_diagnosa`.`id_antrian` = `v_antrian`.`id_antrian`)) ;

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
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_antrian` (`id_antrian`);

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
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Ketidakleluasaan untuk tabel `tbl_riwayat_diagnosa`
--
ALTER TABLE `tbl_riwayat_diagnosa`
  ADD CONSTRAINT `tbl_riwayat_diagnosa_ibfk_1` FOREIGN KEY (`id_antrian`) REFERENCES `tbl_antrian` (`id_antrian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
