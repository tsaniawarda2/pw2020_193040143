-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 11:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leviosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `No` int(11) NOT NULL,
  `Gambar` varchar(25) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Sinopsis` varchar(1000) NOT NULL,
  `Tahun_Terbit` year(4) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`No`, `Gambar`, `Judul`, `Penulis`, `Sinopsis`, `Tahun_Terbit`, `Harga`) VALUES
(1, 'bumi.jpg', 'Bumi', 'Tere Liye', 'Bumi adalah novel pertama dari serial ini. Menceritakan awal persahabatan ketiga tokoh utama. Diawali oleh kejadian robohnya tiang listrik di belakang sekolah, hingga pertemuan mereka dengan sosok tak terduga yang membawanya ke klan bulan--dunia paralel yang kehidupannya bersisian bumi. Petualangan menegangkan yang membawa kisah baru di kehidupan mereka.', 2014, 92300),
(2, 'bulan.jpg', 'Bulan', 'Tere Liye', 'Di buku kedua ini mereka melanjutkan petualangannya di dunia paralel. Kali ini klan matahari yang dikunjungi. Mendengar kabar akan hancurnya dunia paralel, mereka melakukan perjalanan politik untuk menyatukan kekuatan klan bulan dan klan matahari. Bersama teman barunya yang berasal dari klan bulan Raib, Ali, dan Seli sangat antusias menyelesaikan urusan diplomatiknya. Akankah mereka berhasil melakukannya?', 2015, 79000),
(3, 'matahari.jpg', 'Matahari', 'Tere Liye', 'Diawali dengan rasa penasaran Ali si jenius akan dunia paralel. Ia pun mempelajari segala hal yang berhubungan dengan itu. Hingga ia berhasil menemukan teori tentang klan bintang. Dengan ditemani oleh teman baru berwujud pesawat kapsul, perjalanan rahasia mereka yang tak kalah seru dari sebelumnya menjadi lebih menarik.', 2016, 86400),
(4, 'bintang.jpg', 'Bintang', 'Tere Liye', 'Petualangan Raib, Seli, dan Ali masih berlanjut di klan bintang. Kini mereka kembali lagi dengan misi menyelamatkan kehidupan di klan bumi. Pasak bumi yang ada di klan bulan harus ditemukan demi mencegah kehancuran bumi. Ditemani oleh teman-teman dari 3 klan, mereka melewati tantangan yang sangat menegangkan dan menakutkan. Melintasi hujan badai yang terjadi setiap jam, ular raksasa yang sulit dikalahkan, dan banyak rintangan yang harus dihadapi.', 2017, 82500),
(5, 'cerosbatozar.jpg', 'Caroz dan Batozar', 'Tere Liye', 'Masih diperankan oleh tiga remaja yang memiliki kekuatan menakjubkan, buku ini menceritakan kisah mereka menaklukkan dua makhluk misterius, yakni Ceros dan Batozar. Ceros si dua makhluk raksasa yang kehilangan bagian hal dari mereka, membuatnya tak dapat mengendalikan diri. Dan Batozar kriminal dari klan bulan yang kabur dan memiliki kemungkinan bersembunyi di bumi.', 2018, 86900),
(6, 'komet.jpg', 'Komet', 'Tere Liye', 'Pertualangan tidak berhenti di klan bintang. Kini mereka harus melakukan petualangan di pulau dengan banyak tumbuhan aneh. pulau dengan nama berdasarkan nama hari. Pulau Hari Senin, Hari Selasa, hingga Hari Minggu. Bertemu dengan orang berwajah sama tetapi berbeda nama di setiap pulau.', 2019, 86900),
(7, 'kometminor.jpg', 'Komet Minor', 'Tere Liye', 'Menceritakan kelanjutan pertempuran melawan si Tanpa Mahkota. Pertempuran yang mengeluarkan banyak pengorbanan dan ambisi. Akankah Raib, Seli, dan Ali dapat menyelamatkan kehidupan di dunia paralel? Atau mereka akan melihat kehancuran dunia tanpa bisa mencegahnya?', 2019, 97900),
(8, 'selena.jpg', 'Selena', 'Tere Liye', 'Dalam buku spin off, buku ke 6.5 ini merupakan kisah masa kecil hingga dewasa sosok guru ketiga anak-anak tersebut. Dalam buku ini di Klan Bulan, Selena kuliah di ABTT (Akademi Bayangan Tingkat Tinggi), salah satu universitas terbaik di Klan Bulan. Selena memiliki sahabat yang sangat baik, solid, saling melengkapi sejak pertama kali bertemu. Mereka adalah MATA yang berasal dari Distrik Sungai-Sungai Jauh dan TAZK (anak boy band)', 2020, 82500),
(9, 'nebula.jpg', 'Nebula', 'Tere Liye', 'Ternyata Guru kesayangannya Raib ini, punya kisah persahabatan yang tak kalah seru ketika masa kuliah dan belajar di Akademi Bayangan Tingkat Tinggi. Miss Selena ini punya ambisi kuat, dia juga masih diperalat dan dimanfaatkan oleh seseorang yang sangat jahat namun telah membantunya untuk bisa masuk di ABTT. Apa yang terjadi dengan Miss Selena? Kesalahan apa yang telah dilakukannya sehingga berkali-kali harus meminta maaf pada Raib, meski hanya lewat sebuah alat komunikasi, karena Miss Selena sedang disandera seseorang? Bagaimana Selena tahu cara masuk ke portal Klan Nebula? Kehidupan seperti apa yang terjadi di Klan Nebula?', 2020, 82500),
(10, 'mariposa.jpg', 'Mariposa', 'Luluk Hidayatul Fajriyah', 'Buku ini bercerita tentang perjuangan Acha untuk mendapatkan cinta seorang Iqbal. Acha tak pernah gentar meruntuhkan dingin dan kokohnya tembok pertahanan hati Iqbal yang belum pernah disinggahi perempuan mana pun. Sikap dingin dan penolakan Iqbal berkali-kali tak membuat Acha menyerah. Acha akan terus berjuang.', 2018, 89100),
(11, 'friendzone.jpg', 'Friendzone', 'Vanessa Marcella', 'Di mata Abel. David adalah cowok sempurma. Tiap David memandangnya, Abel selalu berharap rona merah di pipinya tidak ketahuan oleh David. Hanya satu kekurangan David, ia adalah sahabat Abel. Di mata David, Abel adalah cewek tomboi yang sejak kecil selalu ada di orbit kehidupannya. Ia merasa sangat nyaman bersama Abel. Sayangnya, kenyamanan yang berlebihan.', 2016, 75500),
(12, 'koala.jpg', 'Koala And Her Story', 'Puteri Raka', 'Di suatu siang di koridor kelas, Aldan Dirgantara tiba-tiba “menembak” Kumala Aruna, membuat Kumala merasa berbunga-bunga—tapi itu semua ternyata hanyalah tantangan Truth or Dare! Setelah kejadian itu, Bara, sosok paling dingin dan pintar dari geng pertemanan Aldan, mulai mendekati Kumala. Kumala jelas menghindar, karena tidak mau mengulangi rasa malu yang sama. Bara tidak peduli dengan penolakan Kumala dan malah terus mendekat. Apa yang membuat Bara terus-terusan mendekatinya?\r\n', 2020, 78200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'tsaniawarda', '$2y$10$xhsbbWOD9bBEeT5NqahoUev1Ai9SO5t7hHuWu1O6p/HvJyeqrTNLG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
