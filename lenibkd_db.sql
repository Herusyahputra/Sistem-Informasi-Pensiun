-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2018 pada 19.17
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenibkd_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_asn`
--

CREATE TABLE `ref_asn` (
  `asn_id` int(11) NOT NULL,
  `asn_nip` varchar(20) DEFAULT NULL,
  `asn_id_mesin` int(15) DEFAULT NULL,
  `asn_nama` varchar(50) DEFAULT NULL,
  `asn_tgl_lahir` date DEFAULT NULL,
  `asn_gol_akhir` varchar(15) DEFAULT NULL,
  `asn_eselon` varchar(15) DEFAULT NULL,
  `asn_jabatan` varchar(75) DEFAULT NULL,
  `asn_jft` varchar(15) DEFAULT NULL,
  `asn_jfu` varchar(15) DEFAULT NULL,
  `asn_satker` varchar(50) DEFAULT NULL,
  `asn_skpd` int(15) DEFAULT NULL,
  `asn_ref_tipe_id` varchar(50) DEFAULT NULL,
  `asn_pensiun` enum('Y','N') DEFAULT 'N',
  `asn_is_plt` enum('Y','N') DEFAULT NULL,
  `asn_createuser` varchar(45) DEFAULT NULL,
  `asn_createdate` datetime DEFAULT NULL,
  `asn_updateuser` varchar(45) DEFAULT NULL,
  `asn_updatedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_asn`
--

INSERT INTO `ref_asn` (`asn_id`, `asn_nip`, `asn_id_mesin`, `asn_nama`, `asn_tgl_lahir`, `asn_gol_akhir`, `asn_eselon`, `asn_jabatan`, `asn_jft`, `asn_jfu`, `asn_satker`, `asn_skpd`, `asn_ref_tipe_id`, `asn_pensiun`, `asn_is_plt`, `asn_createuser`, `asn_createdate`, `asn_updateuser`, `asn_updatedate`) VALUES
(2, '196312021992031001', 0, 'MARWAN EFFENDI, SH', '1963-12-02', 'III/d', '', 'kepalaa', '', '', '148', 100, NULL, 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, '196312031992031006', 0, 'KUKUH WASIAT WIDODO', '1963-12-03', 'III/b', '', '', '', '', '102', 102, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, '196312051989031010', 0, 'HASAN BASRI, A.PI', '1963-12-05', 'III/d', '', '', '', '', '100', 100, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(6, '196312052006041001', 0, 'HALMIN, S.Sos', '1963-12-05', 'III/b', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(7, '196312061998031004', 0, 'Ir. HIDAYAT, MM', '1963-12-06', 'IV/a', '', '', '', '', '148', 148, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(8, '196312081988031006', 0, 'SAMSURIZAL, S.Pd, M.Pd', '1963-12-08', 'IV/a', '', '', '', '', '120', 120, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(9, '196312091991032001', 0, 'Ir. SABRAWATI', '1963-12-09', 'IV/a', '', '', '', '', '100', 100, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(10, '196312131986021048', 0, 'SYAFRUDDIN', '1963-12-13', 'III/b', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(11, '196312131989031004', 0, 'DEDI EPENDI, S.Sos', '1963-12-13', 'III/d', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(12, '196312261986011001', 0, 'BAINIL, S. Pd', '1963-12-26', 'IV/a', '', '', '', '', '151', 151, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(13, '196312261988031002', 0, 'SUHARTONO', '1963-12-26', 'III/c', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(14, '196312291986102003', 0, 'DESILASTUTI, SH', '1963-12-29', 'III/d', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(15, '196312311989032052', 0, 'YASNITA', '1963-12-31', 'III/b', '', '', '', '', '118', 118, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(16, '196401061992032003', 0, 'F A R I D A', '1964-01-06', 'III/a', '', '', '', '', '118', 118, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(17, '196401121987031003', 0, 'ZAINURRAHMAN, SH', '1964-01-12', 'III/c', '', '', '', '', '130', 130, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(18, '196508081988031009', 0, 'RENGGO WIDODO, AMR', '1965-08-08', 'III/d', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(19, '196508081991011003', 0, 'SALUL MAMIN, S.Sos', '1965-08-08', 'III/c', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(20, '196508101993031013', 0, 'Drs. M. RIZAL', '1965-08-10', 'IV/b', '', '', '', '', '120', 120, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(21, '196508131989031007', 0, 'IRMIDI, S.Pd, M.Pd', '1965-08-13', 'IV/a', '', '', '', '', '120', 120, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(22, '196706031994031007', 0, 'MAOLAN BUDIJONO', '1967-06-03', 'III/b', '', '', '', '', '108', 108, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(23, '196706051987021002', 0, 'JAUHARI, SH', '1967-06-05', 'III/d', '', '', '', '', '102', 102, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(24, '196706061989021001', 0, 'YASIRUDIN, S.Sos', '1967-06-06', 'III/d', '', '', '', '', '146', 146, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(25, '196706061989032010', 0, 'SURAIDAH, S.Sos', '1967-06-06', 'III/c', '', '', '', '', '152', 152, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(26, '196706061991032011', 0, 'SUDIANAH, S. Pd', '1967-06-06', 'III/d', '', '', '', '', '120', 120, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(27, '197308051995032001', 0, 'PURIYANTI, S. Sos', '1973-08-05', 'III/c', '', '', '', '', '117', 117, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(28, '197308082005021002', 0, 'HERMAN SUNANTRI HENDRANIGRAT, A.Md', '1973-08-08', 'III/a', '', '', '', '', '114', 114, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(29, '197308092008041001', 0, 'INARJO, MM', '1973-08-09', 'III/b', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(30, '197308152006041002', 0, 'BAHUM, SE', '1973-08-15', 'III/c', '', '', '', '', '147', 147, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(31, '197308172006041005', 0, 'YOPRIZAL AGUSTIAWAN, SE', '1973-08-17', 'III/b', '', '', '', '', '111', 111, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(32, '197308192008041002', 0, 'YUEMING EVENDI, SE', '1973-08-19', 'III/b', '', '', '', '', '125', 125, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(33, '197308201994021002', 0, 'AMIR MAHMUD, SKM', '1973-08-20', 'III/d', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(34, '197308231997021002', 0, 'DARUS IMAWAN, SKM', '1973-08-23', 'III/a', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(35, '197308252007011006', 0, 'GUSTI IRWANDI, ST', '1973-08-25', 'III/a', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(36, '197308262003122001', 0, 'ADRI WESTI, S.Sos', '1973-08-26', 'III/a', '', '', '', '', '147', 147, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(37, '197711122003122004', 0, 'ESI NOVIANTI, S.Pt', '1977-11-12', 'III/c', '', '', '', '', '108', 108, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(38, '197711122008012008', 0, 'NITI SURYANI, S. Pd', '1977-11-12', 'III/b', '', '', '', '', '121', 121, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(39, '197711212009031002', 0, 'NOPRES TAUFIK, SKM', '1977-11-21', 'III/b', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(40, '197711231997021001', 0, 'NOVRI KOSMERI, M.Pd', '1977-11-23', 'III/c', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(41, '197711272002122004', 0, 'ELVI SUSANTI, S.Hut, M.Sc', '1977-11-27', 'III/d', '', '', '', '', '121', 121, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(42, '197712012009031001', 0, 'dr. ARI MUKTI WIBOWO', '1977-12-01', 'III/d', '', '', '', '', '144', 144, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(43, '197712031980032003', 0, 'UMI BADRIYAH, SKM', '1977-12-03', 'III/b', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(44, '197712072009032001', 0, 'RITA ENGRENI, SP', '1977-12-07', 'III/b', '', '', '', '', '150', 150, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(45, '197712102010012007', 0, 'JUMIATI, SE', '1977-12-10', 'III/b', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(46, '197712152006042011', 0, 'ELMA KAISI, SE', '1977-12-15', 'III/b', '', '', '', '', '147', 147, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(47, '197712152010012003', 0, 'DESRAH EVA TESTI, SE', '1977-12-15', 'III/a', '', '', '', '', '148', 148, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(48, '197712242006042004', 0, 'KHAIRIAH, SP', '1977-12-24', 'III/c', '', '', '', '', '102', 102, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(49, '197712242009031001', 0, 'WITRI HANDI, S.Kep', '1977-12-24', 'III/a', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(50, '197801012003122007', 0, 'SUMARNI, S. Kom', '1978-01-01', 'III/b', '', '', '', '', '140', 140, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(51, '197801022005021004', 0, 'SYARIEF HIDAYAT, A.Md', '1978-01-02', 'III/a', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(52, '197801051999031005', 0, 'FAIZAL SUPRIADI, SKM', '1978-01-05', 'III/a', '', '', '', '', '144', 144, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(53, '197801072008041001', 0, 'dr. FAISAL FRIDA PUTERA', '1978-01-07', 'III/c', '', '', '', '', '144', 144, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(54, '197801082005021002', 0, 'DIKE RHAPSODIAN ELSANARI, SE', '1978-01-08', 'III/b', '', '', '', '', '147', 147, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(55, '197801142003122005', 0, 'LISDA ALMAINI, SKM', '1978-01-14', 'III/c', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(56, '197801172008042001', 0, 'ARYANI, SH', '1978-01-17', 'III/b', '', '', '', '', '124', 124, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(57, '197801222009032001', 0, 'DESTIANA, ST, M.Sc', '1978-01-22', 'III/c', '', '', '', '', '147', 147, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(58, '197801282011012002', 0, 'NURUL KABINAWATI, S.Pi', '1978-01-28', 'III/a', '', '', '', '', '100', 100, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(59, '197802031997021001', 0, 'DEDY ANDREAS', '1978-02-03', 'III/a', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(60, '197802032008041001', 0, 'Ns. DADANG SUPRIADY EKA PUTRA, S.Kep', '1978-02-03', 'III/a', '', '', '', '', '134', 134, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(61, '196101011983101006', 0, 'JAKSIN, S. Sos', '1961-01-01', 'III/d', '', '', '', '', '117', 117, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(62, '196101011986022003', 0, 'YOHANA, BA', '1961-01-01', 'III/d', '', '', '', '', '117', 117, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(63, '196101021990031011', 0, 'WASANUDIN', '1961-01-02', 'III/b', '', '', '', '', '148', 148, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(64, '196101031985032002', 0, 'KHAIRANI', '1961-01-03', 'III/b', '', '', '', '', '148', 148, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(65, '196101031989021002', 0, 'SELAMAT, SE', '1961-01-03', 'III/d', '', '', '', '', '151', 151, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(66, '196101051982031005', 0, 'DIDIN SYAEFUDIN', '1961-01-05', 'III/b', '', '', '', '', '151', 151, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(67, '196102061993112001', 0, 'MISNIAR', '1961-02-08', 'III/b', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(68, '196102071981031006', 0, 'S. SARIMATUA MUSLIM, SE', '1961-02-07', 'IV/a', '', '', '', '', '126', 126, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(69, '196102231985032002', 0, 'HOMSIAH', '1961-02-23', 'III/c', '', '', '', '', '102', 102, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(70, '196102241982021003', 0, 'Drs. KUSTONO', '1961-02-24', 'III/d', '', '', '', '', '148', 148, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(71, '196102281988111001', 0, 'SUPRIONO, SH', '1961-02-28', 'IV/b', '', '', '', '', '100', 100, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(72, '196103011984031004', 0, 'ELYAM, S.Pd', '1961-03-01', 'III/c', '', '', '', '', '147', 147, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(73, '196103011991012001', 0, 'MAGDALENA, SH', '1961-03-01', 'IV/a', '', '', '', '', '139', 139, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(74, '196103031987021001', 0, 'Ir. M. AKHMAD', '1961-03-03', 'IV/b', '', '', '', '', '148', 148, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(75, '196103051981022002', 0, 'NURMALA, SH', '1961-03-05', 'III/d', '', '', '', '', '100', 100, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(76, '196103051981031004', 0, 'A S R I', '1961-03-05', 'III/b', '', '', '', '', '121', 121, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(77, '196103051987031003', 0, 'H E R M A N', '1961-03-05', 'III/d', '', '', '', '', '141', 141, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(78, '196103081982031003', 0, 'PAHARDI, SH', '1961-03-08', 'III/c', '', '', '', '', '141', 141, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(79, '196103081985031010', 0, 'MUSLIHUN, S.Sos', '1961-03-08', 'III/d', '', '', '', '', '124', 124, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(80, '196103081986031010', 0, ' JAN MARULITUA SINAGA', '1961-03-08', 'III/b', '', '', '', '', '150', 150, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(81, '196104251983031013', 0, 'KAILANI', '1961-04-25', 'III/d', '', '', '', '', '150', 150, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(82, '196104261991011001', 0, 'ABDURRAHMAN', '1961-04-26', 'III/b', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(83, '196104291983032010', 0, 'SUSMIANI', '1961-04-29', 'III/b', '', '', '', '', '110', 110, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(84, '196105041985031007', 0, 'A. SUHAIMI, SH', '1961-05-04', 'III/d', '', '', '', '', '100', 100, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(85, '196105041985032003', 0, 'REMAINI', '1961-05-04', 'III/b', '', '', '', '', '139', 139, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(86, '196105041988021001', 0, 'YUKIMAN, SP. MM', '1961-05-04', 'IV/a', '', '', '', '', '123', 123, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(87, '196105051982031010', 0, 'HERMAN, S.Sos', '1961-05-05', 'IV/b', '', '', '', '', '139', 139, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(88, '196105051991021002', 0, 'HENDRA MUSTOPA, BPA', '1961-05-05', 'III/b', '', '', '', '', '127', 127, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(89, '196105061986031006', 0, 'S U T I Y O, A.Md', '1961-05-06', 'III/c', '', '', '', '', '116', 116, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(90, '196105061999031001', 0, 'ZULKIFLI', '1961-05-06', 'III/a', '', '', '', '', '100', 100, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(91, '196105091984031002', 0, 'SULAIMAN, S. Pd', '1961-05-09', 'IV/a', '', '', '', '', '146', 146, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(92, '196105101984032006', 0, 'ZUHAIBAH', '1961-05-10', 'III/b', '', '', '', '', '120', 120, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(93, '196105111981032001', 0, 'PI''ATUSMAINI', '1961-05-11', 'III/c', '', '', '', '', '139', 139, '', 'N', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(94, '195712301985031003', 0, 'Drs.JUNI N G O L IAIDHY.B, A.Md', '1957-12-30', 'III/d', '', '', '', '', '127', 127, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(95, '195801011985111001', 0, 'JOKO TANYONO', '1958-01-01', 'III/a', '', '', '', '', '150', 150, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(96, '195801011993031003', 0, 'ZAINAL, BA', '1958-01-01', 'III/b', '', '', '', '', '150', 150, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(97, '195801061982061001', 0, 'UJANG IZWAR NAPENDI', '1958-01-06', 'III/b', '', '', '', '', '127', 127, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(98, '195801071983032004', 0, 'NOVALINDA, SE', '1958-01-07', 'III/d', '', '', '', '', '147', 147, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(99, '195801091981012001', 0, 'RISMAWATI', '1958-01-09', 'III/d', '', '', '', '', '144', 144, '', 'Y', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_listing`
--

CREATE TABLE `ref_listing` (
  `listing_id` int(11) NOT NULL,
  `listing_nip` varchar(20) DEFAULT NULL,
  `listing_dpcp` varchar(50) NOT NULL,
  `listing_fpp` varchar(50) NOT NULL,
  `listing_ket` text NOT NULL,
  `update_user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_listing`
--

INSERT INTO `ref_listing` (`listing_id`, `listing_nip`, `listing_dpcp`, `listing_fpp`, `listing_ket`, `update_user`) VALUES
(2, '196104121993020001', '2016-04-27_14_35_151.jpg', '21-34-13-1490166666.jpg', 'haggahlaj;dja', 'Administrator'),
(3, '196104211993020001', '11-58-28-Print11.jpg', '21-34-13-14901666661.jpg', '', 'Administrator'),
(4, '196105121993020001', '11-58-28-Print13.jpg', '21-34-13-14901666662.jpg', '', 'admin'),
(5, '196101011983101006', '21-34-13-14901666664.jpg', '2016-04-27_14_35_152.jpg', 'nip salah hhhhhh', 'Administrator'),
(6, '196101011983101006', '11-58-28-Print15.jpg', '21-34-13-14901666665.jpg', 'nip salah hhhhhh', 'OPERATOR'),
(7, '196101011986022003', '11-58-28-Print17.jpg', '21-34-13-14901666666.jpg', 'Berkas lengkap silahkan ambil sk pensiun di bkd', 'OPERATOR'),
(8, '196101021990031011', '18-02-34-pendidikan-anti-korupsi-n1.jpg', '21-34-13-14901666667.jpg', '', 'OPERATOR'),
(9, '196101031985032002', '18-02-34-pendidikan-anti-korupsi-n3.jpg', '21-34-13-14901666668.jpg', 'berkas anda kurang,anda harus melengkapinyaa', 'OPERATOR'),
(10, '196101011983101006', '18-02-34-pendidikan-anti-korupsi-n5.jpg', '21-34-13-14901666669.jpg', 'nip salah hhhhhh', 'OPERATOR'),
(11, '196101031989021002', '18-02-34-pendidikan-anti-korupsi-n7.jpg', '18-02-34-pendidikan-anti-korupsi-n8.jpg', '', 'admin'),
(12, '196101011983101006', '18-02-34-pendidikan-anti-korupsi-n10.jpg', '18-02-34-pendidikan-anti-korupsi-n11.jpg', 'nip salah hhhhhh', 'admin'),
(13, '196101011983101006', '11-58-28-Print19.jpg', '', '', 'OPERATOR'),
(14, '196312051989031010', '11-58-28-Print111.jpg', '11-58-28-Print112.jpg', '', 'OPERATOR'),
(15, '196312051989031010', '11-58-28-Print114.jpg', '11-58-28-Print115.jpg', '', 'OPERATOR'),
(16, '196101011983101006', 'adan-administrasi-kepegawaian-negara-1-6381.jpg', '1524553415.jpg', '', 'OPERATOR'),
(17, '196101011986022003', 'adan-administrasi-kepegawaian-negara-1-6383.jpg', '15245534151.jpg', '', 'OPERATOR'),
(18, '196101021990031011', 'adan-administrasi-kepegawaian-negara-1-6385.jpg', '15245534152.jpg', '', 'OPERATOR'),
(19, '196101031985032002', 'adan-administrasi-kepegawaian-negara-1-6387.jpg', '15245534153.jpg', '', 'OPERATOR'),
(20, '196101011983101006', 'adan-administrasi-kepegawaian-negara-1-6389.jpg', '15245534154.jpg', '', 'OPERATOR'),
(21, '196105101984032006', 'adan-administrasi-kepegawaian-negara-1-63811.jpg', '15245534155.jpg', '', 'OPERATOR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_pangkat`
--

CREATE TABLE `ref_pangkat` (
  `pangkat_id` int(2) NOT NULL,
  `pangkat_nama` varchar(30) DEFAULT NULL,
  `pangkat_ruang` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_pangkat`
--

INSERT INTO `ref_pangkat` (`pangkat_id`, `pangkat_nama`, `pangkat_ruang`) VALUES
(1, 'Pembina Utama', 'IV/e'),
(2, 'Pembina Utama Madya', 'IV/d'),
(3, 'Pembina Utama Muda', 'IV/c'),
(4, 'Pembina Tk.I', 'IV/b'),
(5, 'Pembina', 'IV/a'),
(6, 'Penata Tk.I', 'III/d'),
(7, 'Penata', 'III/c'),
(8, 'Penata Muda Tk.I', 'III/b'),
(9, 'Penata Muda', 'III/a'),
(10, 'Pengatur Tk.I', 'II/d'),
(11, 'Pengatur', 'II/c'),
(12, 'Pengatur Muda Tk.I', 'II/b'),
(13, 'Pengatur Muda', 'II/a'),
(14, 'Juru Tk.I', 'I/d'),
(15, 'Juru', 'I/c'),
(16, 'Juru Muda Tk.I', 'I/b'),
(17, 'Juru Muda', 'I/a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_rw_proses`
--

CREATE TABLE `ref_rw_proses` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_rw_proses`
--

INSERT INTO `ref_rw_proses` (`id`, `nama`) VALUES
(1, 'Listing'),
(2, 'Upload'),
(3, 'perbaikan'),
(4, 'ambil dibkd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_skpd`
--

CREATE TABLE `ref_skpd` (
  `skpd_id` int(11) NOT NULL,
  `skpd_kd_skpd` int(15) NOT NULL,
  `skpd_nama` varchar(300) NOT NULL,
  `skpd_nip_kepala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_skpd`
--

INSERT INTO `ref_skpd` (`skpd_id`, `skpd_kd_skpd`, `skpd_nama`, `skpd_nip_kepala`) VALUES
(1, 100, 'BADAN KEPEGAWAIAN DAERAH', '196405271989032002'),
(2, 101, 'BADAN KESATUAN BANGSA DAN POLITIK', '196312221992031006'),
(3, 102, 'DINAS KETAHANAN PANGAN', ''),
(4, 103, 'BADAN LINGKUNGAN HIDUP  PROVINSI BENGKULU', ''),
(5, 104, 'BADAN LITBANG DAN STATISTIK PROV. BENGKULU', ''),
(6, 105, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA', '196811101988101001'),
(7, 106, 'DINAS PEMBERDAYAAN PEREMPUAN,PERLINDUNGAN ANAK,PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', '196911281993032006'),
(8, 107, 'BADAN PENANGGULANGAN BENCANA DAERAH', ''),
(9, 108, 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', ''),
(10, 109, 'DINAS PERPUSTAKAAN DAN KEARSIPAN', ''),
(11, 110, 'BADAN PERENCANAAN PENELITIAN DAN PENGEMBANGAN DAERAH', ''),
(12, 111, 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', ''),
(13, 112, 'DINAS ENERGI SUMBER DAYA MINERAL', ''),
(14, 113, 'DINAS PARIWISATA', '196502181993031006'),
(15, 114, 'DINAS LINGKUNGAN HIDUP DAN KEHUTANAN', ''),
(16, 115, 'DINAS KELAUTAN DAN PERIKANAN', ''),
(17, 116, 'DINAS KESEHATAN', ''),
(18, 117, 'DINAS SOSIAL', ''),
(19, 118, 'DINAS KOPERASI,USAHA KECIL DAN MENENGAH', ''),
(20, 119, 'DINAS PEMUDA DAN OLAHRAGA', ''),
(21, 120, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', ''),
(22, 121, 'DINAS PERHUBUNGAN', ''),
(23, 123, 'DINAS PERTANIAN PROP BKL', ''),
(24, 124, 'DINAS PETERNAKAN DAN KESEHATAN HEWAN', ''),
(25, 125, 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI', ''),
(26, 126, 'BADAN PENGELOLAAN KEUANGAN DAERAH', ''),
(27, 127, 'INSPEKTORAT DAERAH', ''),
(28, 128, 'KANTOR PELAYANAN PERIZINAN TERPADU PROVINSI BENGKULU', ''),
(29, 129, 'BADAN PENGHUBUNG DAERAH', ''),
(30, 130, 'SATUAN POLISI PAMONG PRAJA', ''),
(31, 131, 'KEPALA DAERAH PEMERINTAH PROVINSI BENGKULU', ''),
(32, 132, 'KOMISI PENYIARAN INDONESIA DAERAH (KPID)', ''),
(33, 133, 'RUMAH SAKIT JIWA KETERGANTUNGAN OBAT SUPRAPTO', ''),
(34, 134, 'RUMAH SAKIT UMUM DAERAH DR.M.YUNUS', ''),
(35, 136, 'SEKRETARIAT DAERAH', ''),
(36, 137, 'SEKRETARIAT DEWAN PENGURUS KORPRI PROV. BENGKULU', ''),
(37, 138, 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', ''),
(38, 139, 'SEKRETARIAT DPRD', ''),
(39, 140, 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', ''),
(40, 141, 'BIRO HUKUM', ''),
(41, 142, 'BIRO ORGANISASI', '196505041990031009'),
(42, 143, 'BIRO ADMINISTRASI PEMBANGUNAN', '197010062002121002'),
(43, 144, 'BIRO UMUM,HUMAS DAN PROTOKOL', ''),
(44, 145, 'BIRO ADMINISTRASI PEREKONOMIAN DAN SUMBER DAYA ALAM', ''),
(45, 146, 'DINAS KOMUNIKASI,INFORMATIKA DAN STATISTIK', ''),
(46, 147, 'DINAS PERINDUSTRIAN DAN PERDAGANGAN', ''),
(47, 148, 'DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN PERTANAHAN', ''),
(48, 149, 'BIRO PEMERINTAHAN DAN KESEJAHTERAAN RAKYAT', ''),
(49, 150, 'DINAS TANAMAN PANGAN, HORTIKULTURA DAN PERKEBUNAN', ''),
(50, 777, 'LUAR PEMRPOV BENGKULU', ''),
(51, 888, 'PENSIUN', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw_proses`
--

CREATE TABLE `rw_proses` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_proses` date NOT NULL,
  `proses_dpcp_fpp` int(11) NOT NULL,
  `updateuser` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rw_proses`
--

INSERT INTO `rw_proses` (`id`, `nip`, `tgl_proses`, `proses_dpcp_fpp`, `updateuser`) VALUES
(2, '197102211993020001', '2018-04-26', 1, 'Administrator'),
(3, '195204261979121001', '2018-04-26', 1, 'Administrator'),
(4, '197002211993020001', '2018-04-26', 1, 'Administrator'),
(5, '196104121993020001', '2018-04-27', 2, 'Administrator'),
(6, '196104121993020001', '2018-04-27', 2, 'Administrator'),
(7, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(8, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(9, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(10, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(11, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(12, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(13, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(14, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(15, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(16, '196104121993020001', '2018-04-29', 2, 'Administrator'),
(17, '196102211993020001', '2018-05-03', 1, 'admin'),
(18, '196105121993020001', '2018-05-03', 2, 'admin'),
(19, '196312041995111001', '2018-05-03', 1, 'Administrator'),
(20, '196312021992031001', '2018-05-03', 1, 'Administrator'),
(21, '196101011983101006', '2018-05-03', 2, 'Administrator'),
(22, '196101011983101006', '2018-05-05', 2, 'OPERATOR'),
(23, '196101011986022003', '2018-05-05', 2, 'OPERATOR'),
(24, '196101021990031011', '2018-05-05', 2, 'OPERATOR'),
(25, '196101031985032002', '2018-05-07', 2, 'OPERATOR'),
(26, '196101011983101006', '2018-05-09', 2, 'OPERATOR'),
(27, '196101031989021002', '2018-05-09', 1, 'admin'),
(28, '196101031989021002', '2018-05-09', 2, 'admin'),
(29, '196101011983101006', '2018-05-09', 1, 'admin'),
(30, '196101011983101006', '2018-05-09', 2, 'admin'),
(31, '196101031985032002', '2018-05-14', 1, 'OPERATOR'),
(32, '196101031985032002', '2018-05-14', 1, 'OPERATOR'),
(33, '196101011983101006', '2018-05-14', 1, 'OPERATOR'),
(34, '196101011983101006', '2018-05-14', 2, 'OPERATOR'),
(35, '196101011983101006', '2018-05-14', 1, 'OPERATOR'),
(36, '196101011983101006', '2018-05-14', 1, 'OPERATOR'),
(37, '196101011983101006', '2018-05-14', 1, 'OPERATOR'),
(38, '196101011983101006', '2018-05-14', 3, 'OPERATOR'),
(39, '196312031992031006', '2018-05-14', 1, 'OPERATOR'),
(40, '196101011983101006', '2018-05-14', 3, 'TU OPD'),
(41, '196312021992031001', '2018-05-17', 1, 'OPERATOR'),
(42, '196312051989031010', '2018-05-17', 1, 'OPERATOR'),
(43, '196312051989031010', '2018-05-17', 1, 'OPERATOR'),
(44, '196312051989031010', '2018-05-17', 2, 'OPERATOR'),
(45, '196312051989031010', '2018-05-17', 1, 'OPERATOR'),
(46, '196312051989031010', '2018-05-17', 2, 'OPERATOR'),
(47, '196101011983101006', '2018-05-17', 3, 'OPERATOR'),
(48, '196101011983101006', '2018-05-25', 1, 'OPERATOR'),
(49, '196101011983101006', '2018-05-25', 2, 'OPERATOR'),
(50, '196101011983101006', '2018-05-27', 3, 'TU OPD'),
(51, '196101011986022003', '2018-06-05', 1, 'OPERATOR'),
(52, '196101011986022003', '2018-06-05', 2, 'OPERATOR'),
(53, '196101021990031011', '2018-06-05', 1, 'OPERATOR'),
(54, '196101021990031011', '2018-06-05', 2, 'OPERATOR'),
(55, '196101031985032002', '2018-06-05', 1, 'OPERATOR'),
(56, '196101031985032002', '2018-06-05', 2, 'OPERATOR'),
(57, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(58, '196101011986022003', '2018-06-05', 3, 'TU OPD'),
(59, '196101021990031011', '2018-06-05', 3, 'TU OPD'),
(60, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(61, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(62, '196101011986022003', '2018-06-05', 3, 'TU OPD'),
(63, '196101021990031011', '2018-06-05', 3, 'TU OPD'),
(64, '196101031985032002', '2018-06-05', 3, 'TU OPD'),
(65, '196101031985032002', '2018-06-05', 3, 'TU OPD'),
(66, '196102061993112001', '2018-06-05', 3, 'TU OPD'),
(67, '196101051982031005', '2018-06-05', 3, 'TU OPD'),
(68, '196101031989021002', '2018-06-05', 3, 'TU OPD'),
(69, '196101031985032002', '2018-06-05', 3, 'TU OPD'),
(70, '196101021990031011', '2018-06-05', 3, 'TU OPD'),
(71, '196101011986022003', '2018-06-05', 3, 'TU OPD'),
(72, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(73, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(74, '196101011986022003', '2018-06-05', 3, 'TU OPD'),
(75, '196101021990031011', '2018-06-05', 3, 'TU OPD'),
(76, '196101031989021002', '2018-06-05', 3, 'TU OPD'),
(77, '196102241982021003', '2018-06-05', 3, 'TU OPD'),
(78, '196101031985032002', '2018-06-05', 3, 'TU OPD'),
(79, '196102241982021003', '2018-06-05', 3, 'TU OPD'),
(80, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(81, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(82, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(83, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(84, '196101021990031011', '2018-06-05', 3, 'TU OPD'),
(85, '196101011983101006', '2018-06-05', 3, 'TU OPD'),
(86, '196312261986011001', '2018-06-05', 1, 'OPERATOR'),
(87, '196101011983101006', '2018-06-05', 1, 'OPERATOR'),
(88, '196101011983101006', '2018-06-05', 2, 'OPERATOR'),
(89, '196101011983101006', '2018-06-06', 1, 'OPERATOR'),
(90, '196105101984032006', '2018-06-06', 1, 'OPERATOR'),
(91, '196105101984032006', '2018-06-06', 2, 'OPERATOR'),
(92, '196101011986022003', '2018-06-06', 3, 'TU OPD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_group_users`
--

CREATE TABLE `sys_group_users` (
  `id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_group_users`
--

INSERT INTO `sys_group_users` (`id`, `level`, `deskripsi`) VALUES
(1, 'Admin', 'Administrator'),
(7, 'Operator', 'Operator Finger Print'),
(8, 'Super User', 'Super User'),
(9, 'Pegawai', 'Pegawai'),
(11, 'Operator BKD', 'Operator BKD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(18) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `foto_user` varchar(150) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `skpd_kd_skpd` int(15) DEFAULT NULL,
  `asn_nip` varchar(20) DEFAULT NULL,
  `aktif_manual` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `sys_users`
--

INSERT INTO `sys_users` (`id`, `first_name`, `last_name`, `username`, `pwd`, `email`, `no_hp`, `date_created`, `foto_user`, `id_group`, `aktif`, `skpd_kd_skpd`, `asn_nip`, `aktif_manual`) VALUES
(1, 'OPERATOR', 'TPP', 'operator', 'eb79234057dc0fc68944c53f3f2e0a90', 'timtpp@bengkuluprov.go.id', NULL, '2015-01-26', '15144006711275306242.jpg', 1, 'Y', 100, '198111142011011004', 'Y'),
(7, 'HIJRAH', 'SAPUTRA', 'hijrah', 'eb79234057dc0fc68944c53f3f2e0a90', 'hijrahsaputra@gmail.com', NULL, '2016-12-28', 'avatar.png', 8, 'Y', 100, '198111142011011004', 'N'),
(8, 'Ilham', 'SP', 'ispcpr', 'eb7b55faac6467d04ffe7655d992ad5f', 'absensibklprov@gmail.com', NULL, '2016-12-30', 'imagei.jpg', 1, 'Y', 100, '198609242011011003', 'N'),
(9, 'SUDIBIYO, S.PSI', '-', '198111252010011009', '21232f297a57a5a743894a0e4a801fc3', '-', '-', '2017-02-02', 'avatar.png', 9, 'Y', 100, '198111252010011009', 'Y'),
(10, 'NOVARIA, SE', '-', '197811032011012002', 'f987cbeafe2afa70de0076e306149e5a', '-', '-', '2017-02-02', 'avatar.png', 9, 'N', 100, '197811032011012002', 'N'),
(11, 'A.HARIS SURYA NEGARA, S.SOS', '-', '198301182008041002', '616c72ee1e81f0a06438a7ef979c153b', '-', '-', '2017-02-02', 'avatar.png', 9, 'N', 130, '198301182008041002', 'N'),
(12, 'ABTRISNA JAYA, S.KOM', '-', '198008162010011013', '5b3710f7533dd4e8b6df19ffdfbb56c2', '-', '-', '2017-02-02', 'avatar.png', 9, 'N', 100, '198008162010011013', 'N'),
(13, 'RUSMAYADI, S.STP', '-', '197707051996121001', 'b1059004de00eb28e10f87e416601623', '-', '-', '2017-02-02', 'avatar.png', 9, 'N', 100, '197707051996121001', 'N'),
(14, 'DIAN FITRI SARI, SE, MM', '-', '198201232005022003', '91ba08697ab73860b885f9cd3a1dba39', '-', '-', '2017-02-02', 'avatar.png', 9, 'N', 100, '198201232005022003', 'N'),
(15, 'FERI ANTONI, SE', '-', '197904152002121005', 'e10adc3949ba59abbe56e057f20f883e', '-', '-', '2017-02-02', 'avatar.png', 9, 'N', 100, '197904152002121005', 'N'),
(108, 'RAFIKA WULANDARI, S.STP', '-', '199305232015072001', '3953a4835c4ec07509049ff6c6a409a4', '-', '-', '2017-02-02', 'avatar.png', 7, 'Y', 101, '199305232015072001', 'N'),
(173, 'RAFLES, S.KOM, M.SI', '-', '198209092009011016', 'ab57ec6afd222fb3ac6b81b3711d028e', 'raf.46les@gmail.com', NULL, '2017-02-02', '1514880317967119980.jpg', 7, 'Y', 102, '198209092009011016', 'N'),
(215, 'SAEMA PUTRI SARAGIH, SP', '-', '197512292006042004', '2abbe191f013cbdb6082d563ac800abf', '-', '-', '2017-02-02', 'avatar.png', 7, 'N', 102, '197512292006042004', 'N'),
(390, 'KHALIF IMAMI, ST', '-', '198304032014021001', '3dadb9d179034cf4f440100f9a7ed071', '-', '-', '2017-02-02', 'avatar.png', 7, 'N', 105, '198304032014021001', 'N'),
(401, 'SONNY', 'FEBRIYANTO, ST', '198802192014021003', 'f1a2b3c64ff793102aa3450ab0e3f662', 'febriyanto_sonny@yahoo.co.id', '-', '2017-02-02', '1516253076410524622.jpg', 7, 'Y', 105, '198802192014021003', 'N'),
(815, 'RENALDI FRIANSYAH, SH', '-', '198101252010011007', 'a231594a0a113567bff8164ca91b99c1', 'renaldifriansyah@gmail.com', '-', '2017-02-02', '1488174725419657151.jpg', 7, 'Y', 110, '198101252010011007', 'N'),
(1402, 'USWANTO', '-', '197706172007011003', 'db4f133c79fb4e83b197038679e60264', 'anto_uswanto@yahoo.com', '-', '2017-02-02', '15065715651014477745.jpg', 7, 'N', 115, '197706172007011003', 'N'),
(1403, 'TU OPD', 'TU', 'tuopd', 'admin', 'pegawaiopd@admin.com', '123', '2018-04-04', NULL, 11, 'Y', 100, NULL, 'Y'),
(1404, 'PEGAWAI', 'TU', '196101011983101006', 'admin', 'pegawai@admin.com', NULL, '2018-04-04', NULL, 9, 'Y', NULL, '196101011983101006', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_asn`
--
ALTER TABLE `ref_asn`
  ADD PRIMARY KEY (`asn_id`),
  ADD UNIQUE KEY `asn_nip` (`asn_nip`),
  ADD KEY `asn_skpd` (`asn_skpd`);

--
-- Indexes for table `ref_listing`
--
ALTER TABLE `ref_listing`
  ADD PRIMARY KEY (`listing_id`);

--
-- Indexes for table `ref_pangkat`
--
ALTER TABLE `ref_pangkat`
  ADD PRIMARY KEY (`pangkat_id`);

--
-- Indexes for table `ref_rw_proses`
--
ALTER TABLE `ref_rw_proses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_skpd`
--
ALTER TABLE `ref_skpd`
  ADD PRIMARY KEY (`skpd_id`),
  ADD UNIQUE KEY `skpd_kd_skpd_2` (`skpd_kd_skpd`),
  ADD KEY `skpd_kd_skpd` (`skpd_kd_skpd`);

--
-- Indexes for table `rw_proses`
--
ALTER TABLE `rw_proses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proses_dpcp_fpp` (`proses_dpcp_fpp`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `sys_group_users`
--
ALTER TABLE `sys_group_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sys_users_sys_group_users` (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_asn`
--
ALTER TABLE `ref_asn`
  MODIFY `asn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `ref_listing`
--
ALTER TABLE `ref_listing`
  MODIFY `listing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ref_pangkat`
--
ALTER TABLE `ref_pangkat`
  MODIFY `pangkat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ref_rw_proses`
--
ALTER TABLE `ref_rw_proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rw_proses`
--
ALTER TABLE `rw_proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `sys_group_users`
--
ALTER TABLE `sys_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1405;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rw_proses`
--
ALTER TABLE `rw_proses`
  ADD CONSTRAINT `rw_proses_ibfk_1` FOREIGN KEY (`proses_dpcp_fpp`) REFERENCES `ref_rw_proses` (`id`);

--
-- Ketidakleluasaan untuk tabel `sys_users`
--
ALTER TABLE `sys_users`
  ADD CONSTRAINT `sys_users_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `sys_group_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
