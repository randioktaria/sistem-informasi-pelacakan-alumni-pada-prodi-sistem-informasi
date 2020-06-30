-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 07:00 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Administrator', 'admin@gmai.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Randi Oktaria Rinanda', 'randi@mail.com', 'randi', 'ec1a08ca25857e260784856b3556804d');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nobp` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `bulan_lulus` varchar(20) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nobp`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `telepon`, `alamat`, `angkatan`, `bulan_lulus`, `tahun_lulus`, `pekerjaan`, `username`, `password`) VALUES
(44, '15101152610430', 'DINDA ANNISA PUTRI', 'BUKITTINGGI', '05/01/1997', '\r\nWanita', 'dinda@gmail.com', '082388781865', 'BUKITTINGGI', '2015', 'April', '2019', '-', '15101152610430', '86a3b11d9f9cbcc1abc9df7bf768d9e8'),
(45, '15101152610431', 'DWI RAHMAWATI', 'PAYAKUMBUH', '12/01/1996', '\r\nWanita', 'dwi@gmail.com', '082388781845', 'PAYAKUMBUH', '2015', 'April', '2019', '-', '15101152610431', '86a3b11d9f9cbcc1abc9df7bf768d9e8'),
(46, '15101152610446', 'MELFI MERISKA', 'KOTA SOLOK', '15/11/1996', '\r\nWanita', 'melfi@gmail.com', '082388781855', 'KOTA SOLOK', '2015', 'April', '2019', '-', '15101152610446', '86a3b11d9f9cbcc1abc9df7bf768d9e8'),
(47, '15101152610452', 'NURFAJRI MEIZA', 'PARIAMAN', '20/03/1997', '\r\nWanita', 'nufajri@gmail.com', '082388781856', 'PARIAMAN', '2015', 'April', '2019', '-', '15101152610452', '86a3b11d9f9cbcc1abc9df7bf768d9e8'),
(48, '15101152610464', 'SRI DEWI', 'KOTA SOLOK', '08/02/1997', '\r\nWanita', 'sri@gmail.com', '082388781857', 'KOTA SOLOK', '2015', 'April', '2019', '-', '15101152610464', '86a3b11d9f9cbcc1abc9df7bf768d9e8'),
(49, '15101152610476', 'ALGIFAHRI DINULHAQ', 'KABUPATEN SOLOK', '12/02/1996', 'Pria', 'algifahri@gmail.com', '082388781858', 'KABUPATEN SOLOK', '2015', 'April', '2019', 'Sistem Analis', '15101152610476', '86a3b11d9f9cbcc1abc9df7bf768d9e8'),
(50, '15101152610445', 'M TAUFIK IKRAM', 'BATUSANGKAR', '20/11/1996', 'Pria', 'taufik@gmail.com', '082388781859', 'TANJUNG BALAI KARIMUN, KEPULAUAN RIAU', '2015', 'April', '2019', 'Programer', '15101152610445', '86a3b11d9f9cbcc1abc9df7bf768d9e8');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_alumni`, `judul`, `isi`, `foto`, `status`, `tgl_post`) VALUES
(29, NULL, 'Wakil Rektor IV Buka Sekolah Pasar Modal', 'Rabu, 13 September 2017. Galeri investasi bursa efek Indonesia UPI YPTK Padang kembali mengelar sekolah pasar modal untuk mahasiswa. Kegiatan yang digelar di UPI Comvention Center tersebut diikuti lebih dari 100 orang peserta dari berbagai fakultas, dan program studi yang terdapat di lingkungan universitas putra Indonesia YPTK Padang. <br /><br />\r\nPara peserta akan dibekali pengetahuan dasar mengenai pasar modal, dan pengenalan aplikasi trading yang akan digunakan oleh investor untuk bertransaksi di lantai saham. Pada kegiatan tersebut hadir Kepala Kantor Perwakilan Bursa Efek Indonesia Cabang Padang, Reza Shadat, MM. beserta perusahaan sekuritas Amrin Tarigan, dari First Asia Capital. <br /><br />\r\nDalam sambutannya, wakil rektor IV Univeristas Putra Indonesia YPTK Padang Muhammad Ridwan, SE.,MM. mengajak mahasiswa untuk peka dengan berbagai isu ekonomi yang berkembang di masyarakat, karena orang-orang yang menguasai informasilah yang akan menguasai pasar. Selanjutnya, Wakil rektor mengajak mahasiswa untuk terlibat sebagai pemilik perusahaan-perusahaan yang melantai di bursa. Sehingga mahasiswa UPI YPTK Padang terlibat langsung sebagai pelaku industri keuangan ini. <br /><br />\r\nSelanjutnya, wakil rektor menyampaikan apresiasi kepada galeri investasi bursa efek Indonesia (GIBEI) UPI YPTK Padang yang terus menorehkan berbagai prestasi. Tahun 2015 sebagai pemecah rekor MURI sebagai investor terbanyak, beberapa waktu lalu GIBEI UPI YPTK Padang juga masuk dalam 10 galeri investasi terbaik di Indonesia. Tidak hanya itu, Kompetisi Nasional Stocklab Games juga dimenangkan oleh mahasiswa Fakultas Ekonomi UPI YPTK Padang, Riza Hendriyanti wakili Sumatera Barat ke tingkat Nasional dan berhasil memperoleh Juara II Nasional dalam kompetisi yang diikuti oleh mahasiswa se Indonesia tersebut. <br /><br />\r\nKegiatan sekolah pasar modal yang digelar GIBEI UPI YPTK Padang, diselenggarakan dengan melibatkan Kelompok Studi Pasar Modal (KSPM) UPI YPTK Padang yang terdiri dari mahasiswa Fakultas Ekonomi UPI YPTK Padang. KSPM Fakultas Ekonomi ini juga aktif melakukan berbagai kajian, dan studi mengenai pasar modal. [Humas UPI]\"\"', 'WhatsApp Image 2017-09-13 at 10.34.56 AM.jpeg', 'P', '2019-07-24 10:10:28'),
(30, NULL, 'UPI YPTK Padang Lantik Lulusan Berkarakter: Wisuda Periode I Tahun 2017/2018', 'adang, 15 Oktober 2017 Universitas Putra Indonesia YPTK Padang mengelar upacara wisuda periode I tahun akademik 2017/2018 dalam sidang terbuka senat UPI YPTK Padang, Sabtu 14 Oktober 2017, dan Minggu 15 Oktober di UPI Convention Center, kampus Universitas Putra Indonesia YPTK Padang, Lubuk Begalung â€“ Padang.<br /><br />\r\nSidang senat yang dimpimpin oleh Rektor Universitas Putra Indonesia YPTK Padang, Prof. Dr. Sarjon Defit, M.Sc melantik 1.243 wisudawan dari program diploma, sarjana, dan magister dari berbagai program studi. Dalam sambutannya, Rektor menyampaikan selamat kepada seluruh wisudawan yang telah menyelesaikan studi tepat pada waktunya, kepada seluruh wisudawan diharapkan dapat terus menjaga 12 prinsip dasar dan karakter yang telah ditanamankan selama mengikuti perkuliahan di kampus UPI YPTK Padang, kampus IT yang berbasis spiritual.<br /><br />\r\nDalam rangkaian wisuda tersebut dihadapan Ketua Kopertis Wilayah X, Prof. Herri, Ketua Yayasan Perguruan Tinggi Komputer Padang, H. Herman Nawas, Senat, dan seluuh hadirin yang hadir Rektor UPI YPTK Padang menyampaikan hasil Akreditasi Instusi yang telah di assessment oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), dengan hasil B. Sementara itu, program studi yang ada dilingkungan UPI YPTK Padang semua sudah terakreditasi B.<br /><br />\r\nSelanjutnya, Ketua YPTK Padang, H. Herman Nawas mengucapkan terima kasih kepada para guru besar, dosen, dan pimpinan universitas yang telah bekerjasama untuk menyelenggarakan tri dharma perguruan tinggi. Pada kesempatan tersebut H Herman Nawas juga menyampaikan terima kasih kepada orang tua wisudawan, dan masyarakat yang telah mempercayakan pendidikan putra-putri mereka di Universitas Putra Indonesia YPTK Padang.<br /><br />\r\nDalam sambutannya, H. Herman Nawas menyampaikan komitmennya dalam terus mendukung perubahan untuk kemanjuan UPI YPTK Padang, dalam beberapa waktu lagi akan lagi guru besar baru, dan sejumlah doktor dalam beberapa bidang dari UPI YPTK Padang. Pada saat ini yayasan sedang mengirim sejumlah dosen untuk tugas belajar di dalam dan ke luar negeri. Berbagai kerjasama dengan universitas luar negeri terus ditingkatkan, dan akvitas kolaborasi sudah berjalan dengan lancar.<br /><br />\r\nPada kesempatan tersebut, H. Herman Nawas menyerahkan hadiah khusus kepada wisudawan terrbaik pada masing-masin program studi. Rasa haru terlihat dalam prosesi ini, karena wisudawan menjemput orang tua masing-masing dan membawanya naik ke panggung. H. Herman Nawas mengingatkan kepada seluruh yang hadir dalam ruangan, bahwa kita dapat hadir dan berdiri seperti saat sekarang ini karena kedua orang tua yang telah mendidik kita dengan penuh kasih sayang semenjak kita kecil.\"', 'UPI-YPTK-14102017-10203.jpg', 'P', '2019-07-24 10:11:13'),
(31, NULL, 'Otoritas Jasa Keuangan Gelar Sosialisasi pada mahasiswa UPI YPTK Padang', 'Padang, 20 Maret 2018. Kantor perwakilan Otoritas Jasa Keuangan Sumatera Barat menggelar sosialisasi mengenai fungsi OJK kepada sivitas akademika Universitas Putra Indonesia YPTK Padang. Kegiatan tersebut berlangsung di UPI exhibition hall kampus UPI YPTK Padang.<br /><br />\r\nKerjasama antara Otoritas Jasa Keuangan dengan Universitas Putra Indonesia YPTK Padang telah digelar semenjak tahun 2016 ditandai dengan peresmian galeri investasi Bursa Efek Indonesia UPI YPTK Padang, berselang 3 bulan setelah itu GIBEI UPI YPTK Padang memecahkan rekor Muri menciptakan investor terbanyak dalam satu perguruan tinggi. Selanjutnya pada tahun 2017 Universitas Putra Indonesia YPTK Padang memperoleh penghargaan dari Otoritas Jasa Keuangan sebagai pelopor inklusi keuangan yang diserahkan langsung oleh Presiden Republik Indonesia Joko Widodo.<br /><br />\r\nBob Haspian selaku pengawas senior Otoritas Jasa Keuangan kantor perwakilan Sumatera Barat memaparkan pentingnya edukasi mengenai literasi keuangan kepada masyarakat dalam berhubungan dengan industri keuangan. Rendahnya pemahaman masyarakat mengenai literasi keuangan memicu berbagai kendala dan permasalahan-permasalahan yang terjadi, yang saat ini ditangani oleh OJK. Dalam upaya perolehan dana kredit misalnya, nasabah cenderung tidak membaca poin per poin akad kredit yang dikeluarkan oleh industri keuangan sehingga, dalam waktu berjalan ada yang merasa dirugikan dan melaporkan ke OJK.<br /><br />\r\nRektor Universitas Putra Indonesia YPTK Padang Prof. Dr Sarjon Defit, M.Sc menyambut baik kegiatan ini. Dalam acara pembukaan sosialisasi tersebut Rektor Universitas Putra Indonesia YPTK Padang mengucapkan terima kasih kepada otoritas jasa keuangan kantor perwakilan Sumatera barat atas dipilihnya universitas Putra Indonesia YPTK Padang sebagai tempat sosialisasi pengetahuan mengenai literasi keuangan.<br /><br />\r\nDalam kesempatan tersebut tampak hadir Wakil Rektor 4 Universitas Putra Indonesia YPTK Padang Muhammad Ridwan S.E, MM., Dekan Fakultas Ekonomi UPI YPTK Padang Dr. Efiswandi, sejumlah dosen dan para peneliti yang fokus dalam bidang keuangan.<br /><br />\r\nSosialisasi yang berlangsung diikuti oleh peserta yang sangat antusias dengan Informasi yang disampaikan oleh para narasumber. Forum diskusi yang dibuka setelah presentasi terlihat aktif, berbagai permasalahan dibahas pada diskusi tersebut mulai dari hilangnya uang nasabah secara mendadak di salah satu bank, informasi mengenai debitur, dan berbagai industri jasa keuangan lainnya.\"', 'UPI-YPTK-22032018-35793.jpg', 'P', '2019-07-24 10:12:05'),
(32, NULL, 'Mahasiswa berprestasi UPI YPTK Padang Berangkat studi komparatif ke Malaysia dan Singapura', 'Padang, 12 Maret 2018. Sejumlah mahasiswa beserta studi komparatif dilepas secara resmi oleh ketua Yayasan Perguruan Tinggi Komputer Padang H. Herman Nawas selesai salat subuh berjamaah di Masjid Rahmatan lil alamin UPI YPTK Padang. Dalam sambutannya H Herman Nawas menyampaikan kepada seluruh orang tua mahasiswa, mahasiswa yang diberangkatkan pada tahun ini merupakan mahasiswa yang berprestasi memperoleh nilai terbaik secara berturut-turut selama 2 semester. Disamping dibebaskan dari biaya uang kuliah mereka juga diberangkatkan selama satu minggu ke Malaysia dan Singapura untuk mengunjungi beberapa universitas yang sudah bekerja sama dengan UPI YPTK Padang. Seluruh biaya akomodasi transportasi dan pembuatan paspor ditanggung penuh oleh Yayasan Perguruan Tinggi Komputer Padang. Hal ini merupakan wujud reward yang diberikan oleh Yayasan Perguruan Tinggi Komputer Padang kepada mahasiswa berprestasi, diharapkan dapat memberikan wawasan baru, semangat dalam menyelesaikan pendidikan, serta dapat membuat inovasi-inovasi baru dalam pengembangan teknologi dan riset riset terkini. Universitas Putra Indonesia YPTK Padang sudah bekerja sama dengan beberapa universitas terbaik di Malaysia dan Singapura diantaranya, Universiti kebangsaan Malaysia, Universiti teknologi Mara Melaka Malaysia, Universiti Malaya, Universiti Teknologi Malaysia, Universiti Kuala Lumpur, dan beberapa Universitas lainnya. Rombongan study comparative tahun 2018 ini dipimpin langsung oleh Rektor Universitas Putra Indonesia YPTK Padang Prof. Dr. Sarjon Defit. Disamping itu diikuti oleh Dekan Fakultas Ilmu komputer Dr. Julius Santoni, Dekan Fakultas Ilmu pendidikan, Jhon Very, MM. Serta dosen dari berbagai fakultas, tim dokter klinik Yayasan Perguruan Tinggi Komputer Padang, dan karyawan. Kunjungan studi komparatif yang berlangsung selama satu minggu akan mengunjungi beberapa universitas universitas di Malaysia dan Singapura. Kegiatan tersebut berupa pertunjukan kebudayaan antara Indonesia dan Malaysia, mahasiswa UPI YPTK Padang menampilkan beberapa tarian tradisional seperti tari pasambahan dan tari piring diatas kaca. Selanjutnya dalam rangkaian kunjungan studi komparatif jika akan digelar simposium ilmu komputer dengan menghadirkan 2 orang narasumber dari mahasiswa UPI YPTK Padang, yang memaparkan kajian terkini ilmu komputer di masing-masing negara mereka akan memaparkan materi satu panggung dengan mahasiswa UITM Melaka. Rombongan akan melawat ke KLCC, pusat pemerintahan negara Malaysia di Putrajaya, serta beberapa objek lainnya di Malaysia. Sebelum bertolak ke Singapura rombongan mengunjungi Universiti Teknologi Malaysia di Johor Baru, dengan jadwal lawatan University mahasiswa UPI YPTK Padang akan mengunjungi dan melihat berbagai fasilitas yang terdapat di UTM Johor Baru. Mahasiswa studi komparatif yang berangkat pada tahun 2018 ini sangat terlihat antusias mempersiapkan berbagai kegiatan kunjungan mereka mulai dari pertunjukan seni, simposium kebudayaan hingga diskusi diskusi ilmiah yang digelar di berbagai kampus di Malaysia. Para peserta mengucapkan terima kasih kepada Yayasan Perguruan Tinggi Komputer Padang atas support full akomodasi dan transportasi hingga pembuatan paspor, hal ini menjadi pengalaman yang sangat berharga bagi mereka dalam aktivitas akademik internasional. Wakil Rektor 4 Bidang kerjasama dan inovasi UPI YPTK Padang Muhammad Ridwan, SE, MM. menyampaikan ini merupakan salah satu agenda dari kantor urusan internasional UPI YPTK Padang. Kita sudah memiliki beberapa kerjasama dengan perguruan tinggi luar negeri seperti Korea, Jepang, Australia, Turki, Usbekistan dan Kazakhstan. Ke depan program serupa akan terus dikembangkan dalam tingkat yang lebih tinggi seperti student mobility atau student exchange.\"', 'UPI-YPTK-23032018-52258.jpg', 'P', '2019-07-24 10:12:27'),
(33, NULL, 'UPI YPTK PADANG FOKUS CERDASKAN ANAK BANGSA', 'Padang, 13 April 2018 Universitas Putra Indonesia YPTK Padang menggelar acara wisuda periode II tahun akademik 2017-2018. Acara wisuda dilaksanakan 2 hari dalam sidang terbuka senat UPI YPTK Padang, Selasa 10 April 2018 dan Rabu 11 April 2018 di UPI Convention Center, kampus Universitas Putra Indonesia YPTK Padang. Sidang senat langsung dipimpin oleh Rektor Universitas Putra Indonesia YPTK Padang, Prof. Dr. H Sarjon Desit, S. Kom, M. Sc. Universitas Putra Indonesia ï¿½YPTKï¿½ meluluskan 1,287 orang lulusan kepada masyarakat, bangsa dan negara. Ini berarti, sampai saat ini, Universitas Putra Indonesia ï¿½YPTKï¿½ telah meluluskan 39.546 orang alumni yang saat ini telah bekerja di berbagai instansi perusahaan baik dalam maupun luar negeri. Rektor juga menyampaikan kepada seluruh wisudawan diharapkan dapat terus menjaga 12 prinsip dasar dan karakter yang telah diterapkan selama mengikuti perkuliahan di kampus UPI YPTK Padang, kampus IT yang berbasis spiritual. Selanjutnya, Ketua Yayasan Perguruan Tinggi Komputer Padang menyampaikan selamat kepada seluruh wisudawan dan wisudawati yang telah menyelesaikan proses pembelajaran tepat pada waktunya. Herman Nawas menyampaikan bahwa kesuksesan para wisudawan ini merupakan pertolongan dari Allah SWT dan ridho dari orang tua. Pada kesempatan tersebut H, Herman Nawas menyampaikan bahwa untuk mencapai kesuksesan ada 4 hal yang harus dilakukan oleh wisudawan. Pertama keyakinan atas pertolongan Allah SWT, kedua semangat yang mengebu-gebu, ketiga Fokus dan terakhir Patuh. Inshaallah dengan 4 hal ini wisudawan/wati dapat mencapai kesuksesan dunia dan akhirat. Selanjutnya, Prof. Herry Koordinator Kopertis Wilayah X menyampaikan selamat dan sukses kepada seluruh wisudawan/wati serta apresiasi atas prestasi dan perkembangan UPI YPTK Padang yang kian pesat. Prof Herry sebagai perwakilan Kemenristekdikti menyampaikan ucapan terimakasih atas peranan UPI YPTK Padang dalam mencerdaskan anak bangsa semoga kedepannya UPI YPTK semakin berkembang dan bisa bersaing secara global. Pada kesempatan ini juga dilaksanakan penandatanganan MOU antara UPI YPTK dengan IMA (Indonesia Marketing Association) Chapter Padang tentang kerjasama dalam pelatihan marketing dan magang bagi mahasiswa UPI YPTK Padang. Penandatanganan dilakukan langsung oleh Rektor UPI YPTK Padang dan Darmawi Ketua IMA chapter Padang.\"', 'UPI-YPTK-13042018-18715.jpg', 'P', '2019-07-24 10:12:22'),
(34, NULL, 'UPI YPTK MENJADI TUAN RUMAH SEMINAR NASIONAL APTISI WILAYAH X-A', 'APTISI Wilayah X-A Sumbar Gelar Seminar Nasional Revolusi Industri 4.0: Tantangan atau Ancaman Bagi Perguruan Tinggi Indonesia<br /><br />\r\nPadang, Asosiasi Perguruan Tinggi Swasta Indonesia (APTSI) Wilayah X-A Sumatera Barat menggelar Seminar Nasional Revolusi Industri 4.0: Tantangan atau Ancaman Bagi Perguruan Tinggi Indonesia di gedung UPI Convention Center Universitas Putra Indonesia (UPI) YPTK Padang, Sabtu (26/1) kemarin.<br /><br />\r\nHadir pada Seminar Nasional tersebut Ketua Yayasan Perguruan Tinggi Komputer (YPTK) sekaligus Ketua APTISI wilayah X-A Sumbar Herman Nawas beserta istri Dr. Zerni Melmusi, Ketua Panitia sekaligus Sekretaris APTISI Wilayah X A Sumbar Prof. Dr. Novirman Jamarun, M.Sc., Rektor UPI YPTK Padang Prof. Dr. Sarjon Defit, S.Kom, M.Sc., Wakil Rektor UPI YPTK Padang, Dekan se-Fakultas UPI YPTK Padang, dan Dosen UPI YPTK Padang.<br /><br />\r\nPemateri Seminar Nasional berbagai akademisi mulai dari Direktur Pengembangan Kelembagaan Perguruan Tinggi KemenristekDikti Dr. Ir. Ridwan M.Sc, Kepala LLDIKTI Wilayah X Prof. Herri, MBA, dan Ketua Umum APTIKOM Pusat Prof. Ir. Zaenal A. Hasibuan, MLS, Ph.D.<br /><br />\r\nDirektur Pengembangan Kelembagaan Perguruan Tinggi KemenristekDikti Dr. Ir. Ridwan M.Sc, menyampaikan seminar nasional yang digelar membahas tentang langkah dan upaya Perguruan Tinggi Swasta Indonesia dalam menghadapi era Revolusi Industri 4.0<br /><br />\r\n\"Seminar Nasional yang kita gelar bertujuan untuk membahas bagaimana langkah dan upaya perguruan tinggi terutama swasta ke depan agar tetap eksis dalam menghadapi era Revolusi Industri 4.0 ini,\" ujarnya.<br /><br />\r\nRidwan menambahkan perguruan tinggi swasta dalam menghadapi tantangan atau ancaman era Revolusi Industri 4.0, mesti melakukan berbagai perubahan agar tetap eksis.<br /><br />\r\n\"Jika ingin tetap eksis perguruan tinggi swata harus melakukan perubahan-perubahan di perguruan tinggi swasta tersebut, seperti metode mengajar dosen harus lebih berbasis IT, dan kualitas dosen mesti ditingkatkan, jika tidak, perguruan tinggi tersebut bisa mengalami colaps. Oleh karena itu, mudah-mudahan dengan adanya Seminar Nasional ini, perguruan tinggi swasta yang ada di wilayah X-A Sumbar bisa tetap eksis dalam menghadapi era Revolusi Industri 4.0 ini,\" imbuhnya.<br /><br />\r\nSenada dengan hal tersebut, Kepala LLDIKTI wilayah X, Prof. Herri, MBA, menambahkan bahwa revolusi industri merupakan sebuah proses perubahan menuju kehidupan yang lebih cepat, tepat, nyaman sekaligus memerlukan penyesuaian.<br /><br />\r\n\"Terjadinya perubahan karena Revolusi Industri 4.0 dengan segala instrumen yang ada seperti internet of think, artificial intelligent, dan lain sebagainya itu sehingga menuntut perguruan tinggi untuk melakukan penyesuaian diantaranya penyesuaian lecturer spesification (spesifikasi dosen) untuk membentuk kompetensi mahasiswa. Selanjutnya, manajemen dan leadership sebuah perguruan tinggi juga harus disesuaikan dengan adanya perubahan teknologi,\" jelasnya.<br /><br />\r\nSementara itu, Ketua Yayasan Perguruan Tinggi Komputer(YPTK) sekaligus Ketua APTISI Wilayah X-A Sumbar, Herman Nawas menyatakan bahwa Seminar Nasional Revolusi Industri 4.0: Tantangan atau Ancaman bagi Perguruan Tinggi Indonesia ini diikuti oleh 200 orang peserta dari berbagai perguruan tinggi swasta di wilayah Sumbar, Riau, Kepri, dan Jambi.<br /><br />\r\n\"Peserta Seminar Nasional ini dari berbagai pimpinan dan dosen perguruan tinggi swasta yang ada di wilayah provinsi Sumbar, Riau, Kepulauan Riau, dan Jambi sebanyak 200 peserta,\" ungkapnya.<br /><br />\r\nLebih lanjut, ia menyampaikan bahwa APTISI Wilayah X-A Sumbar pada tahun 2019 ini akan menggelar lima kegiatan lagi. \"Terutama untuk meningkatkan mutu perguruan tinggi terutama swasta di Wilayah X-A Sumbar,\" pungkas Herman. (cr29/Indra)\"\"\"\"', 'UPI-YPTK-29012019-60994.jpg', 'P', '2019-07-24 10:12:51'),
(35, 50, 'UPI-YPTK HADIR DI PAMERAN GEBYAR PENDIDIKAN 2018 DI HALAMAN DINAS PENDIDIKAN PROVINSI SUMATERA BARAT', 'HUMAS UPI YPTK,  Universitas Putra Indonesia YPTK Padang hadir di Pameran Gebyar Pendidikan 2018 di halaman Dinas Pendidikan Provinsi Sumatera Barat dari tanggal 26-28 September 2018, pada pameran ini Universitas Putra Indonesia YPTK Padang menampilkan banyak karya mahasiswa UPI YPTK yang mana dalam pameran tersebut turut hadir beberapa staf dosen UPI YPTK untuk turut memberikan dukungan dan semangat kepada masyarakat dalam menginformasikan tentang lingkungan kampus Universitas Putra Indonesia YPTK Padang, baik itu dari segi fasilitas, proses pembelajaran, karya ilmiah, pengabdian masyarakat serata hubungan kerja sama Universitas Putra Indonesia YPTK Padang dengan beberapa instansi dan berbagai universitas baik di pulau sumatra dan manca negara, serta apresiasi yang diberikan oleh Bapak H. Herman Nawas kepada mahasiswa yang berprestasi setiap tahunya untuk di ajak studi komperatif ke luar negeri Singapura dan Malaysia, untuk info lebih lengkapnya tentang Universitas Putra Indonesia YPTK Padang silahkan datang langsung ke kampus Universitas Putra Indonesia YPTK Padang \"', 'UPI-YPTK-27092018-58810.jpg', NULL, '2019-07-24 10:14:43'),
(36, 50, 'UPI YPTK Padang Jalin MOU Bersama University of Malaya', 'Padang, Universitas Putra Indonesia (UPI) YPTK Padang bersama University of Malaya Malaysia melakukan penandatanganan Memorandum of Understanding (MoU) sekaligus menggelar International Seminar Strategies to Face Industrial Revolution 4.0 di UPI Convention Center, Jumat (18/1) kemarin.<br /><br />\r\nHadir pada acara tersebut, Ketua Yayasan Perguruan Tinggi Komputer (YPTK) Padang Herman Nawas beserta Istri Dr. Zerni Melmusi, Rektor UPI YPTK Padang Prof. Dr. Sarjon Defit, S.Kom, M.Sc., Wakil Rektor I Dr. Sumijan, Wakil Rektor IV Muhammad Ridwan, S.E., M.M., Dekan se-Fakultas UPI YPTK Padang, Direktur UPI Center Yuhandri, Kepala LPPM UPI YPTK Padang Abulwafa Muhammad, dan Pemateri Seminar Internasional Billy Hendrik, serta seluruh mahasiswa S1 dan mahasiswa Program Pascasarjana UPI YPTK Padang.<br /><br />\r\nSementara itu dari pihak University of Malaya Malaysia hadir Assoc. Prof. Sri Devi Ravana, Kepala Jabatan Departement of Information System Faculty of Computer Science and Information Technology Universiti Malaya Assoc. Prof. Salimah Binti Mochtar, Dr. Suraya Binti Hamid, dan Dr. Moch Khalid Bin Othman.<br /><br />\r\nRektor UPI YPTK Padang, Prof. Sarjon Defit dalam pidato sambutan mengucapkan terima kasih kepada University of Malaya Malaysia yang telah hadir di Universitas Putra Indonesia (UPI) YPTK Padang. Selanjutnya, ia menyampaikan dengan MoU ini,UPI YPTK Padang dan University of Malaya Malaysia bisa mengadakan kerjasama berbagai kegiatan.<br /><br />\r\n\"Mudah-mudahan ke depan banyak program-program lain yang bisa kami kerjakan, sehingga UPI YPTK Padang bersama University of Malaya bisa berkolaborasi dalam berbagai bidang, khususnya untuk kegiatan-kegiatan Tri Darma Perguruan Tinggi,\" ungkap Defit.<br /><br />\r\nDia menambahkan, selain melakukan penandatanganan MoU, juga digelar International Seminar Strategies to Face Industrial Revolution 4.0 sebagai bentuk awal kerjasama yang telah dijalin.<br /><br />\r\n\"Pada Seminar Internasional ini banyak topik-topik yang menarik dibidang teknologi dan informasi yang dibahas diantaranya Paving the Pathway: Research Endeavors in the Era of IR 4.0, Big Data in Information Retrieval: Issues and Chalengges, dan The Robot Application Effect in Industrial Revolution 4.0 Era. Tujuannya agar menambah ilmu dan membuka wawasan mahasiswa-mahasiswi UPI YPTK Padang tentang bagaimana perkembangan teknologi informasi dan komunikasi pada saat ini,\" imbuhnya.<br /><br />\r\nSelain itu, dia katakan Seminar Internasional ini merupakan rangkaian dari International Conference Computer Science and Engineering 2019 (IC2SE 2019) yang akan diadakan di UPI YPTK Padang pada April 2019 mendatang.<br /><br />\r\nLebih lanjut, Defit mengatakan saat ini UPI YPTK Padang telah menjalin kerjasama dengan universitas-universitas lain yang ada di Malaysia yaitu Universitas Teknologi Malaysia, Universitas Teknologi MARA, Universitas Sains Malaysia, dan Universitas Kebangsaan Malaysia. \"Oleh karena itu, UPI YPTK Padang setiap tahun selalu mengirim mahasiswa-mahasiswi berprestasi ke universitas-universitas yang ada di Malaysia untuk studi banding,\" imbuhnya.<br /><br />\r\nKetua Yayasan Perguruan Tinggi Komputer (YPTK) Padang, Herman Nawas, dalam sambutannya berharap bahwa penandatanganan MoU dan terjalinnya hubungan kerjasama antara UPI YPTK dengan University of Malaya Malaysia semakin menunjukkan kualitas UPI YPTK Padang sebagai universitas swasta terbaik di Sumbar.<br /><br />\r\nSementara itu, Senior Lecturer & PIC MoU University of Malaya dan UPI UPTK, Dr. Suraya Binti Hamid menyampaikan dengan adanya MoU ini mampu menjalin hubungan yang baik antara UPI YPTK dengan University of Malaya. Tidak hanya itu, lebih jauh ia juga berharap dengan adanya MoU ini hubungan antar Indonesia dan Malaysia bisa lebih harmonis, tidak hanya dalam bidang akademik, tetapi juga dalam berbagai aspek.<br /><br />\r\n\"From this MoU we hope get a good collaboration between UPI YPTK Padang and University of Malaya. Especially in doing research, seminar, join collaboration for sharing supervision for students, and also we want to have a good relationship between our country not only for the academic and other aspect (Dari MoU ini kami berharap terjalin kolaborasi yang baik antara UPI YPTK Padang dan University of Malaya. Terutama dalam bidang penelitian, seminar, kolaborasi untuk sharing supervisi mahasiswa. Selain itu, kami juga berharap terjalin hubungan yang baik antar kedua negara yakni Indonesia dan Malaysia, bukan hanya dalam bidang akademik, tetapi juga berbagai aspek lain),\" tukas Suraya.\"', 'UPI-YPTK-22012019-65070.jpg', NULL, '2019-07-24 14:08:42'),
(37, 50, 'PEMIMPIN SEJATI TIDAK BUTUH MEMIMPIN IA LEBIH SENANG MENUNJUKKAN ARAH', 'Perkenalkan kami dari Fakultas Psikologi UPI YPTK Padang (17\'A)<br />\r\nSedang mengadakan kegiatan Pengabdian Kepada Masyarakat (PKM) yang bertema : \"GP-NESIA\" (Generasi Pemimpin for Indonesia)<br />\r\n\"Pemimpin adalah orang yang memiliki keterampilan kepemimpinan dan mampu untuk memimpin anggotanya\"<br />\r\nâ€œPemimpin besar hampir selalu menjadi penyederhana yang besar, yang dapat menyederhanakan melalui argumen, debat dan keraguan semata-mata untuk menawarkan kepada semua orang agar bisa dan mengerti solusi.â€<br />\r\nâ€œPemimpin terbaik dalam sejarah memahami pentingnya memberikan motivasi dan arah yang jelas untuk mencapai tujuan yang lebih besarâ€.<br />\r\nMenjadi pemimpin yang baik harus :<br />\r\n1. menjunjung tinggi nilai agama dan Pancasila<br />\r\n2. Membuat orang lain menjadi lebih baik<br />\r\n3. memiliki kecerdasan emosional<br />\r\n4. Menggunakan logika, dan fokus pada solusi bukan masalah<br />\r\n5. lebih banyak mendengar dari pada berbicara<br />\r\n6. berkomunikasi secara efektif, percaya diri dan bertanggung jawab<br />\r\n7. Penuh Cinta dan kasih sayang<br />\r\n8. Berani mengakui kesalahan dan minta maaf<br />\r\n9. tidak takut mengambil keputusan besar<br />\r\nAyo jadilah Generasi pemimpin for Indonesia. InsyaAllah Indonesia menjadi lebih baik.<br />\r\nPemimpin yang berakhlakulkarimah!<br />\r\nHidup Indonesia! Merdeka!\"\"', 'UPI-YPTK-06062018-25062.jpg', NULL, '2019-07-24 10:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_pertanyaan` varchar(4) NOT NULL,
  `_jawaban` varchar(255) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_alumni`, `id_pertanyaan`, `_jawaban`, `tgl_post`) VALUES
(57, 50, 'A1', 'M TAUFIK IKRAM', '2019-07-24 15:24:51'),
(58, 50, 'A2', 'Pria', '2019-07-24 15:24:51'),
(59, 50, 'A3', 'SMKN 1 TANJUNG BALAI KARIMUN', '2019-07-24 15:24:51'),
(60, 50, 'A4', 'BATUSANGKAR', '2019-07-24 15:24:51'),
(61, 50, 'A5', '20/11/1996', '2019-07-24 15:24:51'),
(62, 50, 'A6', '-', '2019-07-24 15:24:51'),
(63, 50, 'A7', 'TANJUNG BALAI KARIMUN, KEPULAUAN RIAU', '2019-07-24 15:24:51'),
(64, 50, 'A8', 'taufik@gmail.com', '2019-07-24 15:24:51'),
(65, 50, 'A9', '082388781859', '2019-07-24 15:24:51'),
(66, 50, 'B1', '2015', '2019-07-24 15:24:51'),
(67, 50, 'B2', 'April', '2019-07-24 15:24:51'),
(68, 50, 'B3', '2019', '2019-07-24 15:24:51'),
(69, 50, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:24:51'),
(70, 50, 'B5', '\r\nSistem Informasi', '2019-07-24 15:24:51'),
(71, 50, 'B6', '\r\nInstitusi Pemerintah', '2019-07-24 15:24:51'),
(72, 50, 'B7', 'Ya', '2019-07-24 15:24:51'),
(73, 50, 'B8', '3.70', '2019-07-24 15:24:51'),
(74, 50, 'C1', 'Kantor Perikanan Tanjung Balai Karimun', '2019-07-24 15:24:51'),
(75, 50, 'C10', '\r\nmendapatkan pengalaman', '2019-07-24 15:24:51'),
(76, 50, 'C11', '\r\n> Rp. 1.500.000 - Rp. 2.500.000', '2019-07-24 15:24:51'),
(77, 50, 'C12', '< Rp. 3.000.000', '2019-07-24 15:24:51'),
(78, 50, 'C2', 'Programer', '2019-07-24 15:24:51'),
(79, 50, 'C3', '\r\nInstitusi Pemerintah', '2019-07-24 15:24:51'),
(80, 50, 'C4', 'Juni 2019', '2019-07-24 15:24:51'),
(81, 50, 'C5', 'Aktif (mencari sendiri)', '2019-07-24 15:24:51'),
(82, 50, 'C6', '\r\n1 - 6 bulan', '2019-07-24 15:24:51'),
(83, 50, 'C7', '\r\nkoneksi dengan teman teman dan dosen', '2019-07-24 15:24:51'),
(84, 50, 'C8', '\r\nsangat diterapkan', '2019-07-24 15:24:51'),
(85, 50, 'C9', '\r\nPuas', '2019-07-24 15:24:51'),
(86, 50, 'D1', 'Ya', '2019-07-24 15:24:51'),
(87, 50, 'D2', '-', '2019-07-24 15:24:51'),
(88, 49, 'A1', 'ALGIFAHRI DINULHAQ', '2019-07-24 15:29:11'),
(89, 49, 'A2', 'Pria', '2019-07-24 15:29:11'),
(90, 49, 'A3', 'SMAN 1 SOLOK', '2019-07-24 15:29:11'),
(91, 49, 'A4', 'KABUPATEN SOLOK', '2019-07-24 15:29:11'),
(92, 49, 'A5', '12/02/1996', '2019-07-24 15:29:11'),
(93, 49, 'A6', '-', '2019-07-24 15:29:11'),
(94, 49, 'A7', 'KABUPATEN SOLOK', '2019-07-24 15:29:11'),
(95, 49, 'A8', 'algifahri@gmail.com', '2019-07-24 15:29:11'),
(96, 49, 'A9', '082388781858', '2019-07-24 15:29:11'),
(97, 49, 'B1', '2015', '2019-07-24 15:29:11'),
(98, 49, 'B2', 'April', '2019-07-24 15:29:11'),
(99, 49, 'B3', '2019', '2019-07-24 15:29:11'),
(100, 49, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:29:11'),
(101, 49, 'B5', '\r\nSistem Informasi', '2019-07-24 15:29:11'),
(102, 49, 'B6', ' \r\nSwasta', '2019-07-24 15:29:11'),
(103, 49, 'B7', 'Ya', '2019-07-24 15:29:11'),
(104, 49, 'B8', '3.50', '2019-07-24 15:29:11'),
(105, 49, 'C1', 'Kantor Kecamatan', '2019-07-24 15:29:11'),
(106, 49, 'C10', 'gaji memadai', '2019-07-24 15:29:11'),
(107, 49, 'C11', '\r\n> Rp. 1.500.000 - Rp. 2.500.000', '2019-07-24 15:29:11'),
(108, 49, 'C12', '< Rp. 3.000.000', '2019-07-24 15:29:11'),
(109, 49, 'C2', 'Sistem Analis', '2019-07-24 15:29:11'),
(110, 49, 'C3', '\r\nInstitusi Pemerintah', '2019-07-24 15:29:11'),
(111, 49, 'C4', 'Mei 2019', '2019-07-24 15:29:11'),
(112, 49, 'C5', 'Aktif (mencari sendiri)', '2019-07-24 15:29:11'),
(113, 49, 'C6', '\r\n1 - 6 bulan', '2019-07-24 15:29:11'),
(114, 49, 'C7', '\r\ninternet', '2019-07-24 15:29:11'),
(115, 49, 'C8', '\r\nsangat diterapkan', '2019-07-24 15:29:11'),
(116, 49, 'C9', '\r\nPuas', '2019-07-24 15:29:11'),
(117, 48, 'A1', 'SRI DEWI', '2019-07-24 15:31:32'),
(118, 48, 'A2', '\r\nWanita', '2019-07-24 15:31:32'),
(119, 48, 'A3', 'SMAN 1 SOLOK', '2019-07-24 15:31:32'),
(120, 48, 'A4', 'KOTA SOLOK', '2019-07-24 15:31:32'),
(121, 48, 'A5', '08/02/1997', '2019-07-24 15:31:32'),
(122, 48, 'A6', '-', '2019-07-24 15:31:32'),
(123, 48, 'A7', 'KOTA SOLOK', '2019-07-24 15:31:32'),
(124, 48, 'A8', 'sri@gmail.com', '2019-07-24 15:31:32'),
(125, 48, 'A9', '082388781857', '2019-07-24 15:31:32'),
(126, 48, 'B1', '2015', '2019-07-24 15:31:32'),
(127, 48, 'B2', 'April', '2019-07-24 15:31:32'),
(128, 48, 'B3', '2019', '2019-07-24 15:31:32'),
(129, 48, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:31:32'),
(130, 48, 'B5', '\r\nSistem Informasi', '2019-07-24 15:31:32'),
(131, 48, 'B6', '\r\nBUMN', '2019-07-24 15:31:32'),
(132, 48, 'B7', 'Ya', '2019-07-24 15:31:32'),
(133, 48, 'B8', '3.80', '2019-07-24 15:31:32'),
(134, 47, 'A1', 'NURFAJRI MEIZA', '2019-07-24 15:34:13'),
(135, 47, 'A2', '\r\nWanita', '2019-07-24 15:34:13'),
(136, 47, 'A3', 'SMAN1 PARIAMAN', '2019-07-24 15:34:13'),
(137, 47, 'A4', 'PARIAMAN', '2019-07-24 15:34:13'),
(138, 47, 'A5', '20/03/1997', '2019-07-24 15:34:13'),
(139, 47, 'A6', '-', '2019-07-24 15:34:13'),
(140, 47, 'A7', 'PARIAMAN', '2019-07-24 15:34:13'),
(141, 47, 'A8', 'nufajri@gmail.com', '2019-07-24 15:34:13'),
(142, 47, 'A9', '082388781856', '2019-07-24 15:34:13'),
(143, 47, 'B1', '2015', '2019-07-24 15:34:13'),
(144, 47, 'B2', 'April', '2019-07-24 15:34:13'),
(145, 47, 'B3', '2019', '2019-07-24 15:34:13'),
(146, 47, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:34:13'),
(147, 47, 'B5', '\r\nSistem Informasi', '2019-07-24 15:34:13'),
(148, 47, 'B6', '\r\nInstitusi Pemerintah', '2019-07-24 15:34:13'),
(149, 47, 'B7', '\r\nTidak', '2019-07-24 15:34:13'),
(150, 47, 'B8', '3.20', '2019-07-24 15:34:13'),
(151, 46, 'A1', 'MELFI MERISKA', '2019-07-24 15:37:21'),
(152, 46, 'A2', '\r\nWanita', '2019-07-24 15:37:21'),
(153, 46, 'A3', 'SMAN 1 SOLOK', '2019-07-24 15:37:21'),
(154, 46, 'A4', 'KOTA SOLOK', '2019-07-24 15:37:21'),
(155, 46, 'A5', '15/11/1996', '2019-07-24 15:37:21'),
(156, 46, 'A6', '-', '2019-07-24 15:37:21'),
(157, 46, 'A7', 'KOTA SOLOK', '2019-07-24 15:37:21'),
(158, 46, 'A8', 'melfi@gmail.com', '2019-07-24 15:37:21'),
(159, 46, 'A9', '082388781855', '2019-07-24 15:37:21'),
(160, 46, 'B1', '2015', '2019-07-24 15:37:21'),
(161, 46, 'B2', 'April', '2019-07-24 15:37:21'),
(162, 46, 'B3', '2019', '2019-07-24 15:37:21'),
(163, 46, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:37:21'),
(164, 46, 'B5', '\r\nSistem Informasi', '2019-07-24 15:37:21'),
(165, 46, 'B6', 'Institusi Pendidikan', '2019-07-24 15:37:21'),
(166, 46, 'B7', 'Ya', '2019-07-24 15:37:21'),
(167, 46, 'B8', '3.80', '2019-07-24 15:37:21'),
(168, 45, 'A1', 'DWI RAHMAWATI', '2019-07-24 15:40:22'),
(169, 45, 'A2', '\r\nWanita', '2019-07-24 15:40:22'),
(170, 45, 'A3', 'SMAN 2 PAYAKUMBUH', '2019-07-24 15:40:22'),
(171, 45, 'A4', 'PAYAKUMBUH', '2019-07-24 15:40:22'),
(172, 45, 'A5', '12/01/1996', '2019-07-24 15:40:22'),
(173, 45, 'A6', '-', '2019-07-24 15:40:22'),
(174, 45, 'A7', 'PAYAKUMBUH', '2019-07-24 15:40:22'),
(175, 45, 'A8', 'dwi@gmail.com', '2019-07-24 15:40:22'),
(176, 45, 'A9', '082388781845', '2019-07-24 15:40:22'),
(177, 45, 'B1', '2015', '2019-07-24 15:40:22'),
(178, 45, 'B2', 'April', '2019-07-24 15:40:22'),
(179, 45, 'B3', '2019', '2019-07-24 15:40:22'),
(180, 45, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:40:22'),
(181, 45, 'B5', '\r\nSistem Informasi', '2019-07-24 15:40:22'),
(182, 45, 'B6', '\r\nInstitusi Pemerintah', '2019-07-24 15:40:22'),
(183, 45, 'B7', 'Ya', '2019-07-24 15:40:22'),
(184, 45, 'B8', '3.20', '2019-07-24 15:40:22'),
(185, 44, 'A1', 'DINDA ANNISA PUTRI', '2019-07-24 15:42:52'),
(186, 44, 'A2', '\r\nWanita', '2019-07-24 15:42:52'),
(187, 44, 'A3', 'SMAN 3 BUKITTINGGI', '2019-07-24 15:42:52'),
(188, 44, 'A4', 'BUKITTINGGI', '2019-07-24 15:42:52'),
(189, 44, 'A5', '05/01/1997', '2019-07-24 15:42:52'),
(190, 44, 'A6', '-', '2019-07-24 15:42:52'),
(191, 44, 'A7', 'BUKITTINGGI', '2019-07-24 15:42:52'),
(192, 44, 'A8', 'dinda@gmail.com', '2019-07-24 15:42:52'),
(193, 44, 'A9', '082388781865', '2019-07-24 15:42:52'),
(194, 44, 'B1', '2015', '2019-07-24 15:42:52'),
(195, 44, 'B2', 'April', '2019-07-24 15:42:52'),
(196, 44, 'B3', '2019', '2019-07-24 15:42:52'),
(197, 44, 'B4', 'Fakultas Ilmu Komputer', '2019-07-24 15:42:52'),
(198, 44, 'B5', '\r\nSistem Informasi', '2019-07-24 15:42:52'),
(199, 44, 'B6', '\r\nBUMN', '2019-07-24 15:42:52'),
(200, 44, 'B7', 'Ya', '2019-07-24 15:42:52'),
(201, 44, 'B8', '3.70', '2019-07-24 15:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `_komentar` text NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` char(1) NOT NULL,
  `_kuisioner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `_kuisioner`) VALUES
('A', 'Data Pribadi'),
('B', 'Riwayat Pendidikan'),
('C', 'Riwayat Pekerjaan'),
('D', 'Relevasi Pendidikan dangan Pekerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `posisi` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `persyaratan` text NOT NULL,
  `lokasi` text NOT NULL,
  `carapendaftaran` text NOT NULL,
  `status` varchar(1) DEFAULT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `id_alumni`, `posisi`, `perusahaan`, `deskripsi`, `persyaratan`, `lokasi`, `carapendaftaran`, `status`, `tgl_post`) VALUES
(5, NULL, 'Web Design', 'PT Bukalapak Indonesia', 'Mendesain aplikasi mobile atau web', '1. Minimal S1<br/>\r\n2. Bisa Photoshop<br/>\r\n3. Mengerti CSS3, HTML 5 dan JavaScript<br/>\r\n4. Mengerti Framework Bootstrap<br/>\r\n5. Mengerti React js, Angula js dan Vue js<br/>', 'Jakarta Pusat, Indonesia', 'Kirim CV Lewat E-mail resmi Bukalapak', 'P', '2019-07-24 10:21:58'),
(6, NULL, 'Mobile Aplication (Android)', 'PT Bukalapak Indonesia', 'Mengembangkan Aplikasi Mobile Berbasi Android', '1. Minimal S1<br />\r\n2. Mengerti bahasa Pemrograman Java, Kotlin<br />\r\n3. Mengerti Android Studio', 'Jakarta Pusat, Indonesia', 'Kirim CV lewat E-mail resmi Bukalapak', 'P', '2019-07-24 10:22:21'),
(7, NULL, 'Mobile Aplication (iOS)', 'PT Gojek Indonesia', 'Mengembangkan aplikasi berbasis iOS', '1. Minimal S1<br />\r\n2. Mengerti Bahasa Pemrograman Swift, Objective-C<br />\r\n3. Mengerti Database MySQL, MongoDB dll', 'Jakarta Pusat, Indonesia', 'Kirim CV Lewat E-mail resmi Gojek Indonesia', 'P', '2019-07-24 10:22:30'),
(8, 41, 'Data Scientist', 'PT Telkom Indonesia', 'Melakukan analisis data', '1. Minimal S1<br />\r\n2. Mengerti Ilmu Matematika (Statistika)<br />\r\n3. Bisa Bahasa Pemrograman Python, R<br />\r\n4. Mengerti Database MySQL, SQLite, PostgreSQL, MongoDB', 'Medan, Sumatra Utara, Indonesia', 'Kirim CV ke E-mail resmi PT Telkom Indonesia', 'P', '2019-07-24 10:22:35'),
(9, 41, 'Web Programing', 'PT Tokopedia', 'Melakukan Pengembangan sebuah website Marketplace', '1. Minimal S1<br />\r\n2. Bisa Bahasa Pemrograman Perl, PHP, Python<br />\r\n3. Mengerti Database MongoDB<br />\r\n4. Bisa Framework Laravel, Django dll', 'Jakarta Pusat, Indonesia', 'Kirim CV ke E-mail resmi PT Tokopedia', 'P', '2019-07-24 10:22:40'),
(10, 41, 'Sistem Analis', 'PT Semen padang Indonesia', 'Melakukan analisis untuk membangun sistem yang baru', '1. Minimal S1<br />\r\n2. Mengerti UML<br />\r\n3. Mengerti database MySQL<br />\r\n4. Bisa Bahasa Inggris', 'Padang, Sumatra Barat, Indonesia', 'Kirim CV Ke E-mail resmi PT Semen Padang', 'P', '2019-07-24 10:22:45'),
(11, 41, 'Game Developer', 'PT Game Nusantara', 'Membangun Aplikasi Game Untuk Mobile', '1. Minimal S1<br />\r\n2. Menguasai Bahasa Pemrograman C++<br />\r\n3. Mengerti Unity', 'Jakarta Pusat', 'Kirim CV ke E-mail Perusahaan ', 'P', '2019-07-24 10:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `id_alumni`, `judul`, `isi`, `status`, `tgl_post`) VALUES
(1, NULL, 'Reunian Alumni UPI ', 'Diumumkan kepada seluruh alumni UPI \"YPTK\" Padang angkatan 2014 diharapkan untuk hadir dalam acara reunian pada tanggal 20 Desember 2018 digedung UPI CC jam 08:00 WIB ', 'P', '2019-07-24 14:12:32'),
(3, 50, 'Reunian Alumni UPI Angkatan 2015', 'Diumumkan kepada seluruh alumni UPI \"YPTK\" Padang angkatan 2014 diharapkan untuk hadir dalam acara reunian pada tanggal 22 Desember 2018 digedung UPI CC jam 08:00 WIB ', NULL, '2019-07-24 14:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` varchar(4) NOT NULL,
  `id_kuisioner` varchar(1) NOT NULL,
  `_pertanyaan` varchar(255) NOT NULL,
  `pilihan` text,
  `tgl_post` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_kuisioner`, `_pertanyaan`, `pilihan`, `tgl_post`) VALUES
('A1', 'A', 'Nama Lengkap', '', '2019-04-28 21:11:25'),
('A2', 'A', 'Jenis Kelamin', 'Pria,\r\nWanita', '2019-04-28 21:12:03'),
('A3', 'A', 'Asal SMA', '', '2019-04-28 21:12:47'),
('A4', 'A', 'Tempat Lahir', '', '2019-04-28 21:13:07'),
('A5', 'A', 'Tanggal Lahir (dd/mm/yyyy)', '', '2019-04-28 21:13:36'),
('A6', 'A', 'Alamat Kantor', '', '2019-04-28 21:14:09'),
('A7', 'A', 'Alamat Rumah', '', '2019-04-28 21:14:27'),
('A8', 'A', 'Email', '', '2019-04-28 21:14:43'),
('A9', 'A', 'Telepon (No hp)', '', '2019-04-28 21:37:25'),
('B1', 'B', 'Tahun Masuk', '', '2019-04-28 21:16:19'),
('B2', 'B', 'Bulan Lulus', '', '2019-04-28 21:16:33'),
('B3', 'B', 'Tahun Lulus', '', '2019-04-28 21:16:41'),
('B4', 'B', 'Fakultas', 'Fakultas Ilmu Komputer,\r\nFakultas Ekonomi,\r\nFakultas Keguruan dan Ilmu Pendidikan,\r\nFakultas Teknik,\r\nFakultas Desain Komunikasi Visual,\r\nFakultas Psikologi,\r\nPascasarjana\r\n', '2019-07-24 15:40:50'),
('B5', 'B', 'Program Studi', 'Manajemen Informatika (DIII),\r\nSistem Informasi,\r\nSistem Komputer,\r\nTeknik Informatika,\r\nManajemen ,\r\nAkuntansi,\r\nTeknologi Informatika Pendidikan,\r\nTeknik Sipil,\r\nTeknik Industri,\r\nDesan Komunikasi Visual,\r\nPsikologi,\r\nMagister Manajemen (S2),\r\nMagsiter Ilmu Komputer (S2)', '2019-04-30 09:38:14'),
('B6', 'B', 'Pada saat baru lulus, sebenarnya di mana Saudara ingin bekerja?', 'Institusi Pendidikan,\r\nInstitusi Pemerintah, \r\nSwasta,\r\nBUMN,\r\nWirausaha\r\n', '2019-04-30 09:39:50'),
('B7', 'B', 'Pada saat baru lulus, apakah Saudara mengetahui cara/prosedur melamar pekerjaan?', 'Ya,\r\nTidak', '2019-04-30 09:40:54'),
('B8', 'B', 'Berapa IPK terakhir Saudara?', '', '2019-04-30 09:41:33'),
('C1', 'C', 'Tempat Bekerja', '', '2019-04-28 21:55:40'),
('C10', 'C', 'Secara umum, apa pertimbangan utama Saudara dalam memilih pekerjaan yang terakhir/sekarang?', 'gaji memadai,\r\nsesuai bidang keilmuan,\r\nmendapatkan pengalaman,\r\nmendapatkan ilmu pengetahuan,\r\nmendapatkan ketrampilan\r\n', '2019-04-30 10:12:07'),
('C11', 'C', 'Besar Gaji Pertama', '< Rp. 1.500.000,\r\n> Rp. 1.500.000 - Rp. 2.500.000,\r\n> Rp. 2.500.000 - Rp. 3.500.000,\r\n> Rp. 3.500.000 - Rp. 4.500.000,\r\n> Rp. 4.500.000 \r\n', '2019-04-30 10:20:30'),
('C12', 'C', 'Besar Gaji Sekarang ', '< Rp. 3.000.000,\r\n> Rp. 3.000.000 - Rp. 6.000.000,\r\n> Rp. 6.000.000 - Rp. 9.000.000 ,\r\n> Rp. 9.000.000 - Rp. 12.000.000,\r\n> Rp. 12.000.000\r\n', '2019-04-30 10:21:22'),
('C2', 'C', 'jabatan/ Posisi', '', '2019-04-28 21:55:58'),
('C3', 'C', 'Jenis instansi/ bidang usaha/ industri:', 'Institusi Pendidikan,\r\nInstitusi Pemerintah,\r\nSwasta,\r\nBUMN,\r\nWirausaha \r\n', '2019-04-30 09:45:03'),
('C4', 'C', 'Bulan dan tahun mulai bekerja', '', '2019-04-30 09:48:37'),
('C5', 'C', 'Bagaimana proses Saudara mendapatkan pekerjaan ini?', 'Aktif (mencari sendiri),\r\nPasif (ditawari pekerjaan)', '2019-04-30 09:49:31'),
('C6', 'C', 'Masa tunggu  setelah tamat sampai mendapatkan pekerjaan', '< 1 bulan,\r\n1 - 6 bulan,\r\n7 - 12 bulan,\r\n> 12 bulan\r\n', '2019-04-30 09:50:49'),
('C7', 'C', 'Darimana Saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan pertama ini? ', 'iklan,\r\ninternet,\r\npengumuman di kampus,\r\nkoneksi dengan teman teman dan dosen,\r\nPKMA (Pengembangan Karir Mahasiswa dan Alumni) UPI-YPTK\r\n', '2019-04-30 10:00:21'),
('C8', 'C', 'Sejauh mana penerapan bidang ilmu yang saudara pelajari semasa kuliah diterapkan', 'Diterapkan,\r\nkurang diterapkan,\r\nsangat diterapkan,\r\ntidak diterapkan sama sekali,\r\nsangat tidak diterapkan\r\n', '2019-04-30 10:01:35'),
('C9', 'C', 'Apakah Saudara puas dengan pekerjaan pertama Saudara?', 'Sangat puas,\r\nPuas,\r\nKurang puas,\r\nTidak puas\r\n', '2019-04-30 10:05:21'),
('D1', 'D', 'Apakah pendidikan yang Saudara dapat di UPI-YPTK relevan dengan pekerjaan Saudara?', 'Ya,\r\nTidak', '2019-04-30 09:56:20'),
('D2', 'D', 'Dari pengalaman Saudara bekerja, apa saran praktis Saudara untuk pendidikan di UPI-YPTK dalam rangka meningkatkan kesesuaian antara pendidikan dengan lapangan pekerjaan?', '', '2019-04-30 09:57:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
