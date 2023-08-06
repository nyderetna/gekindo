-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table gekindo.kategori_pelayanan
CREATE TABLE IF NOT EXISTS `kategori_pelayanan` (
  `id_kategori_pelayanan` int(11) NOT NULL,
  `nama_kategori_pelayanan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_pelayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.kategori_pelayanan: ~4 rows (approximately)
/*!40000 ALTER TABLE `kategori_pelayanan` DISABLE KEYS */;
INSERT INTO `kategori_pelayanan` (`id_kategori_pelayanan`, `nama_kategori_pelayanan`) VALUES
	(1, 'Persekutuan (Koinonia)'),
	(2, 'Pewartaan (Kerygma)'),
	(3, 'Peribadatan (Liturgia)'),
	(4, 'Kesaksian Hidup (Martyria)'),
	(5, 'Pelayanan (Diakonia)');
/*!40000 ALTER TABLE `kategori_pelayanan` ENABLE KEYS */;

-- Dumping structure for table gekindo.pelayan
CREATE TABLE IF NOT EXISTS `pelayan` (
  `id_pelayan` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `gelar_pelayan` varchar(255) DEFAULT NULL,
  `gelar_depan_pelayan` varchar(255) DEFAULT NULL,
  `nama_pelayan` varchar(255) DEFAULT NULL,
  `jabatan_pelayan` varchar(255) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `singkatan_jabatan` varchar(50) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pelayan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.pelayan: ~9 rows (approximately)
/*!40000 ALTER TABLE `pelayan` DISABLE KEYS */;
INSERT INTO `pelayan` (`id_pelayan`, `slug`, `gelar_pelayan`, `gelar_depan_pelayan`, `nama_pelayan`, `jabatan_pelayan`, `img`, `singkatan_jabatan`, `intro`) VALUES
	(1, 'elliot-labonda', 'S.Th., M.Teol.,', NULL, 'Elliot Nan Boland Labonda', 'Gembala Jemaat', 'enbl.png', 'Pdt.', NULL),
	(2, 'emanuella-labonda', 'S.Th.,', NULL, 'Emanuella Labonda-Nenoharan', 'Pendeta', 'eln.png', 'Pdt.', NULL),
	(3, 'yuliati-longgo', 'S.Th., M.Th.,', NULL, 'Yuliati Longgo', 'Pendeta', 'yl.png', 'Pdt.', 'Aku bersyukur kepada Dia, yang menguatkan aku, yaitu Kristus Yesus, Tuhan kita, karena Ia menganggap aku setia dan mempercayakan pelayanan ini kepadaku - 1 Timotius 1:12'),
	(4, 'adrian-ingratubun', 'MM.,', 'Ir.', 'Adrian Ingratubun', 'Penatua', 'ai.png', 'Pnt.', NULL),
	(5, 'ratna-sinaga', NULL, NULL, 'Ratna Sinaga', 'Penatua', 'rs.png', 'Pnt.', NULL),
	(6, 'restiana-tampubolon', NULL, NULL, 'Restiana Tampubolon', 'Penatua', 'rt.png', 'Pnt.', NULL),
	(7, 'ros-rahayaan', NULL, NULL, 'Ros Rahayaan', 'Penatua', 'rr.png', 'Pnt.', NULL),
	(8, 'widarti-napitupulu', 'S.E.,', NULL, 'Widarti Napitupulu', 'Diaken', 'wn.png', 'Dkn.', NULL),
	(9, 'fyka-napitupulu', 'S.S.,', NULL, 'Fyka Napitupulu', 'Diaken', 'fnm.png', 'Dkn.', NULL),
	(10, 'agustina-retraubun', 'S.E.,', NULL, 'Agustina Retraubun', 'Diaken', 'arl.png', 'Dkn.', NULL),
	(11, 'daniel-retraubun', 'S.T.,', NULL, 'Daniel Retraubun', 'Diaken', 'dpr.png', 'Dkn.', NULL);
/*!40000 ALTER TABLE `pelayan` ENABLE KEYS */;

-- Dumping structure for table gekindo.pelayanan
CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id` int(11) NOT NULL,
  `nama_pelayanan` varchar(255) DEFAULT NULL,
  `id_kategori_pelayanan` int(11) DEFAULT NULL,
  `id_pelayan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori_pelayanan` (`id_kategori_pelayanan`),
  KEY `id_pelayan` (`id_pelayan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.pelayanan: ~4 rows (approximately)
/*!40000 ALTER TABLE `pelayanan` DISABLE KEYS */;
INSERT INTO `pelayanan` (`id`, `nama_pelayanan`, `id_kategori_pelayanan`, `id_pelayan`) VALUES
	(1, 'Kebaktian Minggu', 3, '1'),
	(2, 'Kebaktian Minggu', 3, '2'),
	(3, 'Kebaktian Minggu', 3, '3'),
	(4, 'Baptisan Anak', NULL, NULL),
	(5, 'Baptis Dewasa', NULL, NULL),
	(6, 'Sidi', NULL, NULL),
	(7, 'Pernikahan', NULL, NULL),
	(8, 'Kematian', NULL, NULL),
	(9, 'Penyerahan', NULL, NULL),
	(10, 'Ibadah Khusus', NULL, NULL),
	(11, 'Komisi Sabtu Ceria', NULL, NULL),
	(12, 'Komisi Remaja', NULL, NULL),
	(13, 'Komisi Pemuda', NULL, NULL),
	(14, 'Komisi Bapak-Ibu', NULL, NULL),
	(15, 'Lainnya', NULL, NULL);
/*!40000 ALTER TABLE `pelayanan` ENABLE KEYS */;

-- Dumping structure for table gekindo.warta
CREATE TABLE IF NOT EXISTS `warta` (
  `id_warta` int(11) NOT NULL,
  `tema_warta` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `ayat_warta` varchar(255) DEFAULT NULL,
  `isi_warta` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `tgl_warta` date DEFAULT NULL,
  PRIMARY KEY (`id_warta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gekindo.warta: ~2 rows (approximately)
/*!40000 ALTER TABLE `warta` DISABLE KEYS */;
INSERT INTO `warta` (`id_warta`, `tema_warta`, `slug`, `ayat_warta`, `isi_warta`, `created_at`, `updated_at`, `img`, `tgl_warta`) VALUES
	(1, 'MENJALANI HIDUP TANPA SANDIWARA', 'menjalani-hidup-tanpa-sandiwara', '2 Petrus 1:16-21', '"Sebab kami tidak mengikuti dongeng-dongeng isapan jempol manusia,ketika kami memberitahukan kepadamu kuasa dan kedatangan Tuhan kita, Yesus Kristus sebagai raja, tetapi kami adalah saksi mata dari kebesaran-Nya."  2 Petrus 1:16', NULL, NULL, NULL, '2023-08-06'),
	(2, 'JALAN KEBENARAN', 'jalan-kebenaran', 'Matius 33:6', '"Sebab kami tidak mengikuti dongeng-dongeng isapan jempol manusia,ketika kami memberitahukan kepadamu kuasa dan kedatangan Tuhan kita, Yesus Kristus sebagai raja, tetapi kami adalah saksi mata dari kebesaran-Nya."  2 Petrus 1:16', NULL, NULL, NULL, '2023-08-07'),
	(3, 'HARAPAN DALAM KETIDAKPASTIAN', 'harapan-dalam-ketidakpastian', 'Roma 8:24-25', '"Sebab dalam harapan kita diselamatkan. Tetapi harapan yang kelihatan bukanlah harapan. Siapakah yang masih berharap pada sesuatu yang dilihatnya? Tetapi jika kita berharap pada sesuatu yang belum kita lihat, maka kita sabar menantikannya." Roma 8:24-25', NULL, NULL, NULL, '2023-08-08'),
	(4, 'KEHIDUPAN YANG DIPIMPIN ROH', 'kehidupan-yang-dipimpin-roh', 'Roma 8:14-16', '"Sebab semua orang yang dipimpin oleh Roh Allah, mereka itulah anak Allah. Karena kamu belum menerima roh perbudakan yang membuat kamu takut, tetapi kamu telah menerima Roh anak-anak yang oleh-Nya kita berseru: "Abba, ya Bapa!" Roh itu bersaksi bersama-sama dengan roh kita, bahwa kita adalah anak-anak Allah." Roma 8:14-16', NULL, NULL, NULL, '2023-08-09'),
	(5, 'KASIH TUHAN YANG TAK TERGANTIKAN', 'kasih-tuhan-yang-tak-tergantikan', 'Roma 8:38-39', '"Sebab aku yakin, bahwa baik maut, maupun hidup, baik malaikat-malaikat, maupun pemerintah-pemerintah, baik yang ada sekarang, maupun yang akan datang, atau kuasa-kuasa, baik yang di atas, maupun yang di bawah, atau sesuatu makhluk lain, tidak akan dapat memisahkan kita dari kasih Allah, yang ada dalam Kristus Yesus, Tuhan kita." Roma 8:38-39', NULL, NULL, NULL, '2023-08-10'),
	(6, 'PANGGILAN UNTUK MENGASIHI', 'panggilan-untuk-mengasihi', '1 Yohanes 4:7-8', '"Saudara-saudaraku, marilah kita saling mengasihi, sebab kasih berasal dari Allah dan setiap orang yang mengasihi, lahir dari Allah dan mengenal Allah. Barangsiapa tidak mengasihi, ia tidak mengenal Allah, sebab Allah adalah kasih." 1 Yohanes 4:7-8', NULL, NULL, NULL, '2023-08-11'),
	(7, 'MEMBANGUN HUBUNGAN YANG KUAT', 'membangun-hubungan-yang-kuat', 'Efesus 4:2-3', '"Dengan segala rendah hati dan kelembutan, dengan sabar saling tahan dalam kasih, berusahalah berpegang teguh dalam persatuan Roh oleh ikatan damai sejahtera." Efesus 4:2-3', NULL, NULL, NULL, '2023-08-12'),
	(8, 'MEMBERI DENGAN SUKA HATI', 'memberi-dengan-suka-hati', '2 Korintus 9:7', '"Masing-masing harus memberikan sesuai dengan yang ia telah putuskan dalam hatinya, bukan dengan dukacita atau terpaksa, sebab Allah mengasihi orang yang memberi dengan sukacita." 2 Korintus 9:7', NULL, NULL, NULL, '2023-08-13'),
	(9, 'PENGHARAPAN MELALUI PENDERITAAN', 'pengharapan-melalui-penderitaan', 'Roma 5:3-5', '"Bukan itu saja, tetapi kita juga bermegah dalam kesengsaraan, karena kita tahu, bahwa kesengsaraan itu menghasilkan ketekunan, dan ketekunan itu membawa pengharapan, dan pengharapan itu tidak mengecewakan, sebab kasih Allah telah dicurahkan dalam hati kita oleh Roh Kudus yang telah dikaruniakan kepada kita." Roma 5:3-5', NULL, NULL, NULL, '2023-08-14'),
	(10, 'BERDOA DENGAN PERCAYA', 'berdoa-dengan-percaya', 'Markus 11:24', '"Sebab itu Aku berkata kepadamu: Apa yang kamu minta dalam doa, percayalah bahwa kamu menerimanya, maka kamu akan mendapatkannya." Markus 11:24', NULL, NULL, NULL, '2023-08-15'),
	(11, 'KETEGUHAN DALAM IMAN', 'keteguhan-dalam-iman', 'Ibrani 10:23', '"Biarlah kita teguh berpegang pada pengakuan kita, sebab Dia yang menjanjikan itu adalah setia." Ibrani 10:23', NULL, NULL, NULL, '2023-08-16'),
	(12, 'MENJADI TERANG BAGI DUNIA', 'menjadi-terang-bagi-dunia', 'Matius 5:14-16', '"Kamu adalah terang dunia. Tidak mungkin sebuah kota terletak di atas gunung dan tersembunyi. Juga tidak mungkin orang menyalakan pelita lalu menaruhnya di bawah guci, melainkan ditaruhnya di atas kaki pelita, maka menerangi semua orang di rumah. Begitu juga hendaklah terangmu bercahaya di depan orang, supaya mereka melihat perbuatanmu yang baik dan memuliakan Bapamu yang di sorga." Matius 5:14-16', NULL, NULL, NULL, '2023-08-17'),
	(13, 'KESABARAN DALAM UJI COBA', 'kesabaran-dalam-uji-coba', 'Yakobus 1:2-4', '"Saudara-saudaraku, anggaplah sebagai suatu kebahagiaan, apabila kamu jatuh ke dalam berbagai-bagai pencobaan, sebab kamu tahu, bahwa ujian terhadap imanmu itu menghasilkan ketekunan. Tetapi biarkanlah ketekunan itu memperoleh hasil pekerjaan yang sempurna, supaya kamu menjadi sempurna dan utuh, tanpa cacat atau celah." Yakobus 1:2-4', NULL, NULL, NULL, '2023-08-18'),
	(14, 'MENGASIHI MUSUH-MUSUH KITA', 'mengasihi-musuh-musuhi-kita', 'Matius 5:43-45', '"Kamu telah mendengar, bahwa difirmankan: Kasihilah sesamamu manusia dan bencilah musuhmu. Tetapi Aku berkata kepadamu: Kasihilah musuhmu dan berdoalah bagi mereka yang menganiaya kamu, supaya kamu menjadi anak-anak Bapamu yang di sorga, karena Dia membuat matahari-Nya terbit atas orang jahat dan orang baik dan hujan-Nya turun atas orang benar dan orang yang tidak benar." Matius 5:43-45', NULL, NULL, NULL, '2023-08-19'),
	(15, 'MEMELIHARA KEUTUHAN HATI', 'memelihara-keutuhan-hati', 'Amsal 4:23', '"Dari hati timbul sumber kehidupan, tetapi memelihara hati berarti menjaga hidupmu." Amsal 4:23', NULL, NULL, NULL, '2023-08-20'),
	(16, 'MEMBANGUN PERSAHABATAN YANG SEJATI', 'membangun-persahabatan-yang-sejati', 'Amsal 17:17', '"Sahabat sejati saling mengasihi sepanjang waktu; saudara lahir untuk waktu kesukaran." Amsal 17:17', NULL, NULL, NULL, '2023-08-21'),
	(17, 'MEMULIHKAN ORANG LAIN DENGAN KATA-KATA', 'memulihi-orang-lain-dengan-kata-kata', 'Amsal 12:18', '"Ada yang berbicara sembrono seperti tikaman pedang, tetapi lidah orang bijak adalah obat." Amsal 12:18', NULL, NULL, NULL, '2023-08-22'),
	(18, 'KELEMAHLEMBUTAN DALAM KEKUATAN', 'kelemahlembutan-dalam-kekuatan', '2 Korintus 12:9-10', '"Tetapi Ia berfirman kepadaku: "Kasih karunia-Ku cukup bagimu, sebab kuasa-Ku nyata dalam kelemahan." Sebab itu dengan senang hati aku bermegah tentang kelemahanku, supaya kuasa Kristus turun menaungi aku. Karena itu aku senang dalam kelemahan, dalam pencobaan, dalam kesukaran, dalam penganiayaan, dalam kesesakan. Sebab apabila aku lemah, maka aku kuat." 2 Korintus 12:9-10', NULL, NULL, NULL, '2023-08-23'),
	(19, 'BERBUAH KARUNIA ROH KUDUS', 'berbuah-karunia-roh-kudus', 'Galatia 5:22-23', '"Tetapi buah Roh ialah: kasih, sukacita, damai sejahtera, kesabaran, kemurahan, kebaikan, kesetiaan, kelemahlembutan, penguasaan diri. Tidak ada hukum yang menentang hal-hal itu." Galatia 5:22-23', NULL, NULL, NULL, '2023-08-24'),
	(20, 'PENCIPTAAN BARU DALAM KRISTUS', 'penciptaan-baru-dalam-kristus', '2 Korintus 5:17', '"Jadi siapa yang ada dalam Kristus, ia adalah ciptaan baru: yang lama sudah berlalu, sesungguhnya yang baru sudah datang." 2 Korintus 5:17', NULL, NULL, NULL, '2023-08-25'),
	(21, 'KEBENARAN YANG MEMERDEKAKAN', 'kebenaran-yang-memerdakan', 'Yohanes 8:32', '"Dan kamu akan mengenal kebenaran, dan kebenaran itu akan memerdekakan kamu." Yohanes 8:32', NULL, NULL, NULL, '2023-08-26'),
	(22, 'HIDUP YANG DIPENUHI KASIH', 'hidup-yang-dipenuhi-kasih', '1 Korintus 16:14', '"Berbuatlah segala sesuatu dengan kasih." 1 Korintus 16:14', NULL, NULL, NULL, '2023-08-27'),
	(23, 'PERTOBATAN YANG MENGUBAH HIDUP', 'pertobatan-yang-mengubah-hidup', 'Kisah Para Rasul 3:19', '"Karena itu, bertobatlah dan berbaliklah, supaya dosamu dihapuskan, supaya datang masa kesegaran dari hadapan Tuhan." Kisah Para Rasul 3:19', NULL, NULL, NULL, '2023-08-28'),
	(24, 'MENGASIHI ALLAH DI ATAS SEGALA SESUATU', 'mengasihi-allah-di-atas-segala-sesuatu', 'Matius 22:37-38', '"Yesus berkata kepadanya: "Engkau harus mengasihi Tuhan, Allahmu, dengan segenap hatimu, dengan segenap jiwamu, dan dengan segenap akal budimu." Itulah hukum yang terutama dan yang pertama." Matius 22:37-38', NULL, NULL, NULL, '2023-08-29'),
	(25, 'KETAATAN YANG MENGANTARKAN BERKAT', 'ketaatan-yang-mengantarkan-berkat', 'Ulangan 28:1-2', '"Dan jikalau engkau mendengarkan suara Tuhan, Allahmu, dengan berhati-hati melakukan semua perintah-Nya yang kusampaikan kepadamu pada hari ini, maka Tuhan, Allahmu, akan mengangkat engkau di atas segala bangsa di bumi. Segala berkat ini akan datang kepadamu dan akan melanda engkau, jika engkau mendengarkan suara Tuhan, Allahmu." Ulangan 28:1-2', NULL, NULL, NULL, '2023-08-30'),
	(26, 'KELEMBUTAN HATI YANG MEMENANGKAN', 'kelembutan-hati-yang-memenangkan', 'Amsal 15:1', '"Jawaban lembut menghaluskan marah, tetapi jawaban kasar menimbulkan amarah." Amsal 15:1', NULL, NULL, NULL, '2023-08-31'),
	(27, 'PERTOBATAN DAN PENGAMPUNAN', 'pertobatan-dan-pengampunan', 'Yesaya 55:7', '"Biarlah orang fasik meninggalkan jalannya dan orang yang jahat pikirannya meninggalkan maksudnya; hendaklah ia kembali kepada TUHAN, maka Ia akan mengasihani dia, dan kepada Allah kita, sebab Ia banyak mengampuni." Yesaya 55:7', NULL, NULL, NULL, '2023-09-01'),
	(28, 'MEMATUHI FIRMAN ALLAH', 'mematuhi-firman-allah', 'Yohanes 14:23', '"Yesus menjawab dan berkata kepadanya: "Jika seseorang mengasihi Aku, ia akan memelihara firman-Ku dan Bapa-Ku akan mengasihi dia dan Kami akan datang kepada dia dan diam di dalam dia." Yohanes 14:23', NULL, NULL, NULL, '2023-09-02'),
	(29, 'BERDAMAI DI DALAM KRISTUS', 'berdamai-di-dalam-kristus', 'Kolose 3:15', '"Dan hendaklah damai sejahtera Kristus memerintah dalam hatimu, sebab kamu telah dipanggil dalam satu tubuh. Dan bersyukurlah." Kolose 3:15', NULL, NULL, NULL, '2023-09-03'),
	(30, 'MENJAGA MULUT DAN PIKIRAN', 'menjaga-mulut-dan-pikiran', 'Mazmur 19:14', '"Mudah-mudahan kata-kata mulutku dan fikiranku berkenan di hadapan-Mu, ya TUHAN, guna menjadi perhatian bagi hatiku, ya Gunungku dan Penebusku!" Mazmur 19:14', NULL, NULL, NULL, '2023-09-04'),
	(31, 'MENGENAL ALLAH SANG PENCIPTA', 'mengenal-allah-sang-pencipta', 'Kejadian 1:1', '"Pada mulanya Allah menciptakan langit dan bumi." Kejadian 1:1', NULL, NULL, NULL, '2023-09-05'),
	(32, 'MENJADI ANAK YANG TAAT KEPADA ORANG TUA', 'menjadi-anak-yang-taat-kepada-orang-tua', 'Efesus 6:1', '"Hai anak-anak, taatilah orang tua kamu dalam Tuhan, karena hal ini adalah benar." Efesus 6:1', NULL, NULL, NULL, '2023-09-06'),
	(33, 'MENJAGA TEMAN DAN BERBAGI', 'menjaga-teman-dan-berbagi', 'Matius 7:12', '"Segala sesuatu yang kamu kehendaki supaya orang perbuat kepadamu, perbuatlah demikian juga kepada mereka; sebab inilah isi hukum Taurat dan kitab para nabi." Matius 7:12', NULL, NULL, NULL, '2023-09-07'),
	(34, 'MENGHARGAI LINGKUNGAN DAN ALAM', 'menghargai-lingkungan-dan-alam', 'Kejadian 1:28', '"Allah memberkati mereka, lalu Allah berfirman kepada mereka: "Beranakcuculah dan bertambah banyak jumlahmu, penuhilah bumi dan taklukkanlah itu, berkuasalah atas ikan-ikan di laut dan burung-burung di udara dan atas segala binatang yang merayap di bumi." Kejadian 1:28', NULL, NULL, NULL, '2023-09-08'),
	(35, 'BELAJAR DARI KEHIDUPAN TOKOH ALKITAB', 'belajar-dari-kehidupan-tokoh-alkitab', 'Ibrani 11:6', '"Tetapi tanpa iman tidak mungkin [seseorang] berkenan kepada Allah, sebab barangsiapa hendak mendekat kepada Allah, harus percaya bahwa Allah itu ada dan menjadi pembalas bagi orang yang sungguh-sungguh mencari Dia." Ibrani 11:6', NULL, NULL, NULL, '2023-09-09'),
	(36, 'MENGEMBANGKAN HOBI DAN BAKAT', 'mengembangkan-hobi-dan-bakat', 'Roma 12:6-7', '"Kita mempunyai karunia yang berlainan-lain menurut kasih karunia yang telah dianugerahkan kepada kita. Barangsiapa bernubuat, hendaklah ia melakukannya menurut ukuran imannya." Roma 12:6-7', NULL, NULL, NULL, '2023-09-10'),
	(37, 'MENGERTI KASIH YESUS DAN DOA', 'mengerti-kasih-yesus-dan-doa', 'Matius 19:14', '"Lalu kata Yesus: "Biarkanlah anak-anak itu, janganlah kamu menghalang-halangi mereka datang kepada-Ku; sebab orang-orang yang demikianlah empunya Kerajaan Sorga." Matius 19:14', NULL, NULL, NULL, '2023-09-11'),
	(38, 'MENJAGA KESEHATAN DAN KESELAMATAN', 'menjaga-kesehatan-dan-keselamatan', '1 Korintus 6:19-20', '"Atau tidak tahukah kamu, bahwa tubuhmu adalah bait Roh Kudus, yang diam di dalam kamu, yang kamu peroleh dari Allah, dan bahwa kamu bukan milik kamu sendiri? Sebab kamu dibeli dengan harga. Karena itu muliakanlah Allah dengan tubuhmu." 1 Korintus 6:19-20', NULL, NULL, NULL, '2023-09-12'),
	(39, 'MENJAGA SIKAP HORMAT DAN DISIPLIN', 'menjaga-sikap-hormat-dan-disiplin', 'Efesus 6:1-2', '"Hai anak-anak, taatilah orang tua kamu dalam Tuhan, karena hal ini adalah benar. "Hormatilah ayahmu dan ibumu"--itulah perintah yang pertama yang disertai janji,"Efesus 6:1-2', NULL, NULL, NULL, '2023-09-13'),
	(40, 'BERBAGI CERITA ALKITAB UNTUK ANAK-ANAK', 'berbagi-cerita-alkitab-untuk-anak-anak', '2 Timotius 3:15', '"Dan oleh sebab engkau telah mengenal kitab suci dari kecil, yang dapat membuat engkau berhikmat untuk beroleh keselamatan oleh iman dalam Kristus Yesus." 2 Timotius 3:15', NULL, NULL, NULL, '2023-09-14'),
	(51, 'MENGEMBANGKAN KECERDASAN EMOSIONAL DAN SPIRITUAL', 'mengembangkan-kecerdasan-emosional-dan-spiritual', 'Roma 12:2', '"Dan janganlah kamu menjadi serupa dengan dunia ini, tetapi berubahlah oleh pembaharuan budimu, sehingga kamu dapat membedakan manakah kehendak Allah: apa yang baik, yang berkenan kepada Allah dan yang sempurna." Roma 12:2', NULL, NULL, NULL, '2023-09-25'),
	(52, 'MEMPERKUAT RELASI DENGAN TEMAN SEIMAN', 'memperkuat-relasi-dengan-teman-seiman', 'Pengkhotbah 4:9-10', '"Dua lebih baik daripada seorang diri, sebab mereka memperoleh upah yang baik dari jerih payah mereka. Jika salah seorang jatuh, maka temannya dapat menolong dia bangun, tetapi celaka seorang diri yang tertimpa malapetaka: ia tidak mempunyai teman yang lain mengangkat dia." Pengkhotbah 4:9-10', NULL, NULL, NULL, '2023-09-26'),
	(53, 'MENEMUKAN PELAYANAN DAN BAKAT DALAM GEREJA', 'menemukan-pelayanan-dan-bakat-dalam-gereja', '1 Petrus 4:10', '"Masing-masing hendaklah berpegang pada karunia yang telah diterimanya dari Allah dan ia hendaklah melayaninya sebagai pengurus yang baik dari kasih karunia Allah yang berbagai macam itu." 1 Petrus 4:10', NULL, NULL, NULL, '2023-09-27'),
	(54, 'MENGELOLA KEUANGAN DAN RENCANA MASA DEPAN', 'mengelola-keuangan-dan-rencana-masa-depan', '1 Timotius 6:10', '"Sebab cinta uang adalah akar segala yang jahat; oleh karena hasrat untuk mendapatinya, beberapa orang telah menyimpang dari iman dan telah menjerumuskan diri mereka ke dalam banyak kesesatan." 1 Timotius 6:10', NULL, NULL, NULL, '2023-09-28'),
	(55, 'MENJALIN HUBUNGAN ROMANTIS YANG SEHAT', 'menjalin-hubungan-romantis-yang-sehat', '1 Korintus 13:4-7', '"Kasih sabar, kasih murah hati; kasih tidak cemburu; kasih tidak sombong; tidak mencari keuntungan; tidak mudah marah; tidak membukukan kesalahan orang lain; tidak bersukacita karena ketidakadilan, tetapi karena kebenaran; segala sesuatu ditanggungnya, segala sesuatu percaya, segala sesuatu berharap, segala sesuatu sabar." 1 Korintus 13:4-7', NULL, NULL, NULL, '2023-09-29'),
	(56, 'MENGATASI RINTANGAN DAN PERGUMULAN', 'mengatasi-rintangan-dan-pergumulan', 'Yohanes 16:33', '"Semuanya ini telah Kukatakan kepadamu, supaya kamu ada dalam Aku. Dalam dunia kamu mendapat sengsara, tetapi kuatkanlah hatimu! Akulah yang telah mengatasi dunia." Yohanes 16:33', NULL, NULL, NULL, '2023-09-30'),
	(57, 'MENYELESAIKAN PERSEKOLAHAN DAN MASA TRANSISI', 'menyelesaikan-persekolahan-dan-masa-transisi', 'Mazmur 32:8', '"Aku hendak mengajarkan dan mendidik engkau di jalan yang harus engkau tempuh; nasihat hendak Kuberikan, mata-Ku hendak Kubimbing kepadamu." Mazmur 32:8', NULL, NULL, NULL, '2023-10-01'),
	(58, 'MENGHADAPI TANTANGAN TEKNOLOGI DAN KEBUDAYAAN', 'menghadapi-tantangan-teknologi-dan-kebudayaan', 'Roma 12:2', '"Dan janganlah kamu menjadi serupa dengan dunia ini, tetapi berubahlah oleh pembaharuan budimu, sehingga kamu dapat membedakan manakah kehendak Allah: apa yang baik, yang berkenan kepada Allah dan yang sempurna." Roma 12:2', NULL, NULL, NULL, '2023-10-02'),
	(59, 'MENYELAMI HIKMAT DAN KEPEMIMPINAN', 'menyelami-hikmat-dan-kepemimpinan', 'Amsal 4:7', '"Hikmat adalah yang utama, oleh sebab itu dapatkanlah hikmat, dan segala sesuatu yang kaupunyai janganlah engkau lepaskan demi mendapat perak." Amsal 4:7', NULL, NULL, NULL, '2023-10-03'),
	(60, 'BERBAGI KASIH KRISTUS DI LINGKUNGAN SEKITAR', 'berbagi-kasih-kristus-di-lingkungan-sekitar', 'Matius 28:19-20', '"Sebab itu pergilah, jadikanlah semua bangsa murid-Ku dan baptislah mereka dalam nama Bapa dan Anak dan Roh Kudus, dan ajarlah mereka melakukan segala sesuatu yang telah Kuperintahkan kepada kamu. Dan ketahuilah, Aku menyertai kamu senantiasa sampai kepada akhir jaman." Matius 28:19-20', NULL, NULL, NULL, '2023-10-04'),
	(71, 'FONDASI KRISTUS DALAM PERNIKAHAN', 'fondasi-kristus-dalam-pernikahan', 'Matius 7:24-25', '"Sebab itu setiap orang yang mendengar perkataan-Ku ini dan melakukannya, ia akan sama dengan orang yang bijaksana, yang mendirikan rumahnya di atas batu karang. Turunlah hujan, datanglah banjir, tiup angin dan melanda rumah itu, tetapi rumah itu tidak roboh, karena ia didirikan di atas batu karang." Matius 7:24-25', NULL, NULL, NULL, '2023-10-15'),
	(72, 'KOMUNIKASI YANG EFEKTIF DALAM HUBUNGAN SUAMI-ISTRI', 'komunikasi-yang-efektif-dalam-hubungan-suami-istri', 'Efesus 4:29', '"Jangan ada perkataan kotor keluar dari mulutmu, tetapi apa yang baik untuk membina, supaya memberi kasih karunia kepada mereka yang mendengarnya." Efesus 4:29', NULL, NULL, NULL, '2023-10-16'),
	(73, 'MENGELOLA PERBEDAAN DAN KONFLIK', 'mengelola-perbedaan-dan-konflik', '1 Korintus 13:4-7', '"Kasih sabar, kasih murah hati; kasih tidak cemburu; kasih tidak sombong; tidak mencari keuntungan; tidak mudah marah; tidak membukukan kesalahan orang lain; tidak bersukacita karena ketidakadilan, tetapi karena kebenaran; segala sesuatu ditanggungnya, segala sesuatu percaya, segala sesuatu berharap, segala sesuatu sabar." 1 Korintus 13:4-7', NULL, NULL, NULL, '2023-10-17'),
	(74, 'MENJAGA GAIRAH DAN INTIMASI DALAM PERNIKAHAN', 'menjaga-gairah-dan-intimasi-dalam-pernikahan', 'Kidung Agung 2:16', '"Ucapkanlah kepadaku, kekasihku, di mana engkau merumput, di mana engkau membiarkan domba-dombamu berbaring siang? Mengapakah aku harus seperti seorang yang berpakaian dengan tudung-tudung yang dikenakan pada kawan-kawanmu?" Kidung Agung 2:16', NULL, NULL, NULL, '2023-10-18'),
	(75, 'MENGATASI UJIAN DAN PERGUMULAN BERSAMA', 'mengatasi-ujian-dan-pergumulan-bersama', '1 Petrus 1:6-7', '"Inilah sebabnya kamu bersukacita walaupun sekarang kamu seketika itu masih harus merasa sedih oleh berbagai-bagai pencobaan, supaya kepercayaanmu, yang jauh lebih berharga dari pada emas yang fana, yang diuji dengan api, mendapat pengakuan sebagai jasa yang layak dipuji, dimuliakan dan dipermuliakan pada waktu Yesus Kristus menyatakan diri-Nya." 1 Petrus 1:6-7', NULL, NULL, NULL, '2023-10-19'),
	(76, 'MEMBANGUN KELUARGA BERDASARKAN NILAI-NILAI ALKITAB', 'membangun-keluarga-berdasarkan-nilai-nilai-alkitab', 'Yosua 24:15', '"Tetapi jika kepada kamu terasa tidak baik untuk beribadah kepada TUHAN, pilihlah pada hari ini kepada siapa kamu akan beribadah: kepada para allah nenek moyangmu yang disembah di seberang sungai, atau kepada para allah orang Amori yang negerinya kamu tempati. Tetapi aku dan kaum keluargaku, kami akan beribadah kepada TUHAN." Yosua 24:15', NULL, NULL, NULL, '2023-10-20'),
	(77, 'MENGASUH ANAK-ANAK SECARA ROHANI', 'mengasuh-anak-anak-secara-rohani', 'Efesus 6:4', '"Dan kamu, bapa-bapa, janganlah mendidik anak-anakmu sampai mereka menjadi patah hati. Sebaliknya, didiklah mereka dalam didikan dan nasihat Tuhan." Efesus 6:4', NULL, NULL, NULL, '2023-10-21'),
	(78, 'MENJAGA KESATUAN DAN KOMITMEN DALAM PERNIKAHAN', 'menjaga-kesatuan-dan-komitmen-dalam-pernikahan', 'Markus 10:9', '"Sebab itu apa yang telah dipersatukan oleh Allah, tidak boleh diceraikan oleh manusia." Markus 10:9', NULL, NULL, NULL, '2023-10-22'),
	(79, 'MEMAHAMI PERAN SUAMI DAN ISTRI SESUAI ALKITAB', 'memahami-peran-suami-dan-istri-sesuai-alkitab', 'Efesus 5:22-23', '"Hai isteri, tunduklah kepada suamimu sebagai kepada Tuhan, sebab suami adalah kepala isterinya seperti Kristus adalah kepala jemaat, yaitu Dia sebagai Juruselamat tubuh." Efesus 5:22-23', NULL, NULL, NULL, '2023-10-23'),
	(80, 'BERDOA BERSAMA SEBAGAI PASANGAN', 'berdoa-bersama-sebagai-pasangan', 'Matius 18:19-20', '"Demi sesuatu yang kamu setujui di dunia ini, itulah yang akan dikabulkan di sorga oleh Bapamu yang di sorga. Sebab di mana dua atau tiga orang berkumpul dalam nama-Ku, di situ Aku ada di tengah-tengah mereka." Matius 18:19-20', NULL, NULL, NULL, '2023-10-24');
/*!40000 ALTER TABLE `warta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
