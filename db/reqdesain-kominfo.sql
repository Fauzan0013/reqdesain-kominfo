-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Agu 2024 pada 10.17
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reqdesain-kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `url` text NOT NULL,
  `sumber_berita` varchar(40) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tgl_berita` date NOT NULL,
  `ringkasan` text NOT NULL,
  `keterangan` text NOT NULL,
  `pemilah` varchar(25) NOT NULL,
  `verifikasi` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `url`, `sumber_berita`, `tema`, `tgl_berita`, `ringkasan`, `keterangan`, `pemilah`, `verifikasi`) VALUES
(1, 'https://www.kominfo.go.id/content/detail/37866/hoaks-kasus-pembegalan-di-wilayah-hukum-polsek-banjarbaru-barat-kalsel/0/laporan_isu_hoaks', 'Kominfo KALSEL', 'Kriminal', '2021-11-01', '[HOAKS] Kasus Pembegalan di Wilayah Hukum Polsek Banjarbaru Barat Kalsel', 'Penjelasan :\r\n\r\nBeredar sebuah informasi melalui pesan WhatsApp yang menyebutkan sedang banyak terjadi kejahatan begal di wilayah hukum Polsek Banjarbaru Barat, Kalimantan Selatan. Informasi tersebut mengklaim telah terjadi tindakan pembegalan dan terdapat korban, yang di antara korbannya mengalami luka serius di bagian mata.\r\n\r\n', 'Hoax', 'Verif'),
(2, 'https://banjarmasin.tribunnews.com/2023/06/09/kabar-gembira-kalsel-dapat-tambahan-kuota-haji-113-orang-jch-diberi-waktu-3-hari-melunasi-bipih', 'Tribun News', 'Kuota Haji', '2023-06-09', 'Kabar Gembira Kalsel Dapat Tambahan Kuota Haji 113 Orang, JCH Diberi Waktu 3 Hari Melunasi Bipih\r\n\r\n\r\nArtikel ini telah tayang di BanjarmasinPost.co.id dengan judul Kabar Gembira Kalsel Dapat Tambahan Kuota Haji 113 Orang, JCH Diberi Waktu 3 Hari Melunasi Bipih, https://banjarmasin.tribunnews.com/2023/06/09/kabar-gembira-kalsel-dapat-tambahan-kuota-haji-113-orang-jch-diberi-waktu-3-hari-melunasi-bipih.\r\n', 'Kesempatan bagi jemaah calon haji (JCH) asal Kalimantan Selatan (Kalsel) untuk menunaikan ibadah di Tanah Suci makin terbuka lebar. Di saat sebagian jemaah sudah berada di Makkah, Indonesia kembali mendapatkan tambahan kuota haji dari Arab Saudi sebesar 8.000 orang jemaah.\r\n\r\nMenyusul penambahan kuota tersebut, pelunasan Biaya Perjalanan Ibadah Haji (Bipih) untuk 8.000 ribu kuota haji tambahan Indonesia dibuka selama tiga hari kerja, mulai Kamis (8/6) sampai Senin (12/6) mendatang.\r\n\r\n\r\n\r\nArtikel ini telah tayang di BanjarmasinPost.co.id dengan judul Kabar Gembira Kalsel Dapat Tambahan Kuota Haji 113 Orang, JCH Diberi Waktu 3 Hari Melunasi Bipih, https://banjarmasin.tribunnews.com/2023/06/09/kabar-gembira-kalsel-dapat-tambahan-kuota-haji-113-orang-jch-diberi-waktu-3-hari-melunasi-bipih.\r\n', 'Positif', 'Verif'),
(4, 'https://kalsel.inews.id/berita/bendahara-bawa-kabur-honor-kpps-di-balangan-pakai-uang-rp45-juta-untuk-prostitusi-online-michat', 'inews', 'Prostitusi Online Mi Chat', '2024-03-05', 'Bendahara berinisial MH alias D (23) membawa kabur honor KPPS Kelurahan Batu Piring, Kecamatan Paringin Selatan, di Kabupaten Balangan, Kalimantan Selatan (Kalsel). MH bahkan memakai uang senilai Rp4,5 juta prostitusi online MiChat.\r\n', 'Bendahara berinisial MH alias D (23) membawa kabur honor KPPS Kelurahan Batu Piring, Kecamatan Paringin Selatan, di Kabupaten Balangan, Kalimantan Selatan (Kalsel). MH bahkan memakai uang senilai Rp4,5 juta prostitusi online MiChat.\r\n“MH alias D (23) juga menggunakan dana untuk membayar pemesanan prostitusi online via aplikasi Michat sebesar Rp4,5 juta,” kata Kapolres Balangan, AKBP Riza Muttaqin, Senin (19/2/2024).\r\n\r\nSebelumnya, kabar honor KPPS ini dibawa kabur ini viral di media sosial. Saat itu 126 petugas KPPS dari 18 TPS se-Batu Piring mengeluhkan honor mereka yang tak kunjung cair.\r\n', 'Negatif', 'Verif'),
(5, 'https://banjarmasin.tribunnews.com/2024/03/05/viral-video-sepak-bola-ricuh-diduga-terjadi-di-tanah-bumbu-wasit-dikeroyok-massa', 'tribun tanah bumbu.com', 'Sepak Bola', '2024-03-05', 'Ramai beredar di media sosial video kericuhan saat pertandingan sepak bola diduga terjadi di Pagatan, Tanah Bumbu.\r\n\r\nDalam video tersebut, tampak wasit yang sedang mengawal jalannya pertandingan diserang serta dikeroyok oleh sejumlah massa dengan menerobos masuk ke lapangan.\r\n', 'Ramai beredar di media sosial video kericuhan saat pertandingan sepak bola diduga terjadi di Pagatan, Tanah Bumbu.\r\n\r\nDalam video tersebut, tampak wasit yang sedang mengawal jalannya pertandingan diserang serta dikeroyok oleh sejumlah massa dengan menerobos masuk ke lapangan.\r\n\r\nKetika pertandingan sedang berjalan, tiba-tiba sejumlah pria dengan mengenakan baju bebas menerobos masuk ke lapangan dan menyerang salah satu wasit.\r\n\r\nDiduga pria-pria tersebut merupakan pendukung salah satu tim yang tak terima dengan keputusan wasit.\r\n\r\nSembari ketakutan, wasit yang mengenakan seragam kuning itu pun berlari menjauhi lapangan.\r\n\r\nNamun massa yang mengejar justru kian semakin banyak dan mengepung wasit tersebut dari pinggir lapangan.\r\n\r\nAlhasil wasit itu pun sempat mendapat pukulan di bagian kepala.\r\n\r\n', 'Negatif', 'Verif'),
(6, 'https://kalsel.inews.id/berita/ketua-kpps-di-tabalong-dibacok-warga-hingga-tangan-luka', 'inews', 'Ketua kpps di bacok warga hingga luka', '2024-03-05', 'Ketua KPPS di TPS 07 kelurahan Tanjung, Tabalong, Kalimantan Selatan (Kalsel) dibacok warga saat bertugas, Rabu (14/2/2024). Korban berinisial KS (53) pun mengalami luka di bagian tangan.\r\n\r\nPS Kasi Humas Polres Tabalong Iptu Joko Sutrisno menjelaskan pelaku MS (22) diamankan terkait tindak pidana penganiayaan. Kronologi kejadian tersebut berawal saat pelaku mendatangi korban di TPS 07 kelurahan Tanjung yang sedang melakukan penghitungan suara bersama anggota KPPS 07 Tanjung.\r\n', 'Ketua KPPS di TPS 07 kelurahan Tanjung, Tabalong, Kalimantan Selatan (Kalsel) dibacok warga saat bertugas, Rabu (14/2/2024). Korban berinisial KS (53) pun mengalami luka di bagian tangan.\r\n\r\nPS Kasi Humas Polres Tabalong Iptu Joko Sutrisno menjelaskan pelaku MS (22) diamankan terkait tindak pidana penganiayaan. Kronologi kejadian tersebut berawal saat pelaku mendatangi korban di TPS 07 kelurahan Tanjung yang sedang melakukan penghitungan suara bersama anggota KPPS 07 Tanjung.\r\n\r\nSaat itu, pelaku menanyakan janji pemberian uang disaat pelaksanaan pemungutan suara senilai Rp100.000 yang dijanjikan korban. Namun, korban menanggapi dengan nada tinggi.\r\n\r\n\"Karena merasa dipermalukan dan tersinggung, pelaku pulang ke rumah untuk mengambil senjata tajam jenis pisau dapur kemudian kembali ke TPS 07 untuk mendatangi korban,\" ucapnya.\r\n\r\nMelihat pelaku membawa senjata Tajam kearahnya, korban berlari menjauhi pelaku namun terjatuh saat dikejar. Saat korban terjatuh pelaku melukai korban dengan menggunakan senjata tajam yang menyebabkan korban mengalami luka sobek pada bagian tangan kanan.\r\n', 'Negatif', 'Verif'),
(7, 'https://kalsel.inews.id/berita/identitas-korban-tewas-tabrakan-fortuner-dengan-elf-di-banjarbaru-mirza-dan-hamidah', 'inews', 'kecelakaan', '2024-03-05', 'Kecelakaan di kawasan Ahmad Yani Km 29, Keluruhan Guntung Payung, Banjarbaru, Kalimantan Selatan menyebabkan dua orang tewas, Kamis (18/1/2024). Tabrakan tersebut melibatkan Toyota Fortuner dengan Isuzu Elf.\r\n', 'Kecelakaan di kawasan Ahmad Yani Km 29, Keluruhan Guntung Payung, Banjarbaru, Kalimantan Selatan menyebabkan dua orang tewas, Kamis (18/1/2024). Tabrakan tersebut melibatkan Toyota Fortuner dengan Isuzu Elf.\r\nKasubdit Lantas Polres Banjarbaru Aipda Nyoman di Mapolres Banjarbaru menyampaikan, identitas kedua korban tewas bernama Mirza Febrianto merupakan sopir Isuzu Elf. Korban tewas lainnya, kata dia perempuan bernama Hamidah penumpang Elf yang terpental keluar akibat ditabrak dengan kecepatan tinggi dari arah berlawanan.\r\n\"Ada juga penumpang yang luka-luka dirawat di rumah sakit,\" ujar Aipda Nyoman di Mapolres Banjarbaru, Kamis (18/1/2024).\r\n', 'Negatif', 'Verif'),
(8, 'https://www.liputan6.com/regional/read/5536063/6-polisi-aniaya-tahanan-hingga-patah-kaki-ini-perintah-tegas-kapolda-kalsel', 'Liputan 6', 'Penganiayaan', '2024-03-05', 'Polda Kalimantan Selatan (Kalsel) menindaklanjuti atas kasus penganiayaan yang terjadi di Direktorat Tahanan dan Titipan (Dit TAHTI) Polda Kalsel di Banjarmasin pada Minggu 11 Februari 2024 lalu. FA salah satu tahanan, tersangka kasus narkotika diduga kerap menghadapi aksi tidak manusiawi.', 'Polda Kalimantan Selatan (Kalsel) menindaklanjuti atas kasus penganiayaan yang terjadi di Direktorat Tahanan dan Titipan (Dit TAHTI) Polda Kalsel di Banjarmasin pada Minggu 11 Februari 2024 lalu. FA salah satu tahanan, tersangka kasus narkotika diduga kerap menghadapi aksi tidak manusiawi.\r\nSelain FA, penganiayaan itu ternyata juga dialami oleh enam tahanan lainnya. Satu tahanan berinisial RFP yang merupakan tahanan Ditreskrimsus Polda Kalsel mengalami patah kaki kanan.\r\nAdapun para anggota polisi yang diduga melakukan pemukulan itu adalah Briptu AP, Bripda SF, Bripda NA, Bripda FL, Bripda AG dan Bripda DP.\r\nMenyikapi kejadian tersebut, Kabid Humas Polda Kalsel Kombes Pol Adam Erwindi menegaskan, keenam polisi tersebut ditindak tegas. Mereka sekarang sudah ditempatkan di tempat khusus dan dalam penanganan khusus di Mako Brimob Polda Kalsel, sambil melengkapi berkas untuk proses.\r\n\r\nAdapun kronologi terjadinya pemukulan tersebut, dijelaskan Kabid Humas, Minggu 11 Februari 2024 salah satu keluarga dari tersangka mengirim makanan di Dit Tahti Polda Kalsel, berupa 3 nasi goreng, 3 susu kotak, dan 3 makanan ringan.\r\n\r\n\"Barang tersebut saat dititipkan di penjagaan dilakukan pemeriksaan oleh anggota, akhirnya ditemukan 2 paket sabu di dalam bungkus makanan ringan yang akan dititipkan kepada salah satu tersangka,\" katanya saat konferensi pers, Minggu (25/2/2024).\r\n', 'Negatif', 'Verif'),
(9, 'https://www.liputan6.com/regional/read/5532781/wali-kota-banjarbaru-raih-anugerah-hpn-2024-aditya-ini-vitamin-motivasi-kami', 'Liputan 6', 'Wali Kota Banjarbaru Raih Anugerah HPN 2024', '2024-03-05', 'Wali Kota Banjarbaru, H. M. Aditya Mufti Ariffin menerima penghargaan sekaligus menjadi satu-satunya kepala daerah di Kalimantan yang meraih penghargaan dari PWI tahun 2024. Penyerahan tersebut diberikan pada puncak peringatan Hari Pers Nasional (HPN) ke-78 di Ancol, Jakarta Utara, Selasa (20/02).\r\n\r\nPada puncak HPN tersebut dihadiri oleh Presiden RI Joko Widodo, Wali Kota Banjarbaru Aditya meraih penghargaan atas komitmennya memajukan sektor UMKM di Ibu kota Kalimantan Selatan (Kalsel).', 'Wali Kota Banjarbaru, H. M. Aditya Mufti Ariffin menerima penghargaan sekaligus menjadi satu-satunya kepala daerah di Kalimantan yang meraih penghargaan dari PWI tahun 2024. Penyerahan tersebut diberikan pada puncak peringatan Hari Pers Nasional (HPN) ke-78 di Ancol, Jakarta Utara, Selasa (20/02).\r\n\r\nPada puncak HPN tersebut dihadiri oleh Presiden RI Joko Widodo, Wali Kota Banjarbaru Aditya meraih penghargaan atas komitmennya memajukan sektor UMKM di Ibu kota Kalimantan Selatan (Kalsel).\r\n\r\nPeran Aditya dalam mendorong UMKM dapat terlihat dari berbagai inovasinya, serta dukungan tersebut juga datang dari sang istri Vivi Zubedi yang berhasil membawa produk UMKM Kota Banjarbaru melejit ke kancah internasional.\r\n\r\nPresiden RI, dalam sambutannya mengatakan jika jurnalisme berkualitas menjadi perhatian penting pemerintah. Salah satunya setelah melalui perdebatan panjang, Presiden Jokowi akhirnya menandatangani Perpres Publisher Right.\r\n\r\n\"Saya berpesan kepada pers, terus menjaga demokrasi, beritakan fakta bukan mengada-ada atau asumsi saja, pesan kedua perusahaan pers juga harus berfikir ke depan, adaptif dalam menjawab tantangan zaman, serta harus bisa mandiri,\" sebut Joko Widodo atau Jokowi.', 'Positif', 'Verif'),
(10, 'https://www.liputan6.com/regional/read/5537824/dukung-program-peduli-anak-pama-dapatkan-penghargaan-dari-pemkot-balikpapan', 'Liputan 6', 'Dukung Program Peduli Anak, PAMA Dapatkan Penghargaan dari Pemkot Balikpapan', '2024-03-05', 'Komitmen menjalankan Program Corporate Social Resposibilty oleh PT Pamapersada Nusantara (PAMA) di Balikpapan berbuah manis. Pemerintah Kota (Pemkot) Balikpapan mengganjar PAMA dengan penghargaan di HUT ke-127 Kota Balikpapan. PAMA dinilai berjasa dalam mendukung Program Peduli Anak yang digencarkan Pemkot Balikpapan.', 'Komitmen menjalankan Program Corporate Social Resposibilty oleh PT Pamapersada Nusantara (PAMA) di Balikpapan berbuah manis. Pemerintah Kota (Pemkot) Balikpapan mengganjar PAMA dengan penghargaan di HUT ke-127 Kota Balikpapan. PAMA dinilai berjasa dalam mendukung Program Peduli Anak yang digencarkan Pemkot Balikpapan.\r\nPenyerahan penghargaan tersebut diberikan langsung oleh Wali Kota Balikpapan Rahmad Mas’ud dan unsur pimpinan DPRD Balikpapan. Mulai dari Ketua DPRD Balikpapan Abdulloh, Wakil Ketua DPRD Budiono, Sabaruddin Panrecalle, dan Laisa Hamisah. Mewakili PAMA yakni HCGS Departement Head M. Banuarto Adhisaputro di Hotel Grand Tjokro, Kamis (8/2/2024) lalu.\r\n\r\n“Terima kasih kepada Pemkot Balikpapan dan DPRD Balikpapan atas penghargaan ini. Ini menjadi spirit baru kami sebagai perusahaan untuk terus berkontribusi dan meningkatkan kepedulian serta dukungan terhadap program-program pemerintah,” ungkap Banuarto usai menerima penghargaan didampingi CSR Officer PAMA Aziz Kusuma Aji.', 'Positif', 'Verif'),
(11, 'https://www.liputan6.com/regional/read/5538703/jokowi-resmikan-terminal-samarinda-seberang', 'Liputan 6', 'Jokowi Resmikan Terminal Samarinda Seberang', '2024-03-05', 'Presiden Republik Indonesia (RI), Joko Widodo kembali melakukan kunjungan ke wilayah Kalimantan Timur (Kaltim). Dalam kunjungan kerjanya yang di mulai sejak Rabu (28/2/2024) sore hingga Jumat (1/3/2024), presiden mengunjungi sejumlah tempat.\r\n\r\nAgendanya antara lain meresmikan terminal bus penumpang tipe A Samarinda Seberang, peresmian pabrik Kaltim Amonium Nitrat yang berlokasi di Kota Bontang dan groundebreaking sejumlah bank yang akan dibangun di Ibu Kota Nusantara (IKN).', 'Presiden Republik Indonesia (RI), Joko Widodo kembali melakukan kunjungan ke wilayah Kalimantan Timur (Kaltim). Dalam kunjungan kerjanya yang di mulai sejak Rabu (28/2/2024) sore hingga Jumat (1/3/2024), presiden mengunjungi sejumlah tempat.\r\n\r\nAgendanya antara lain meresmikan terminal bus penumpang tipe A Samarinda Seberang, peresmian pabrik Kaltim Amonium Nitrat yang berlokasi di Kota Bontang dan groundebreaking sejumlah bank yang akan dibangun di Ibu Kota Nusantara (IKN). \r\n\r\nSaat tiba pada Rabu (28/2/2024) sore melalui bandara APT Pranoto Samarinda, Jokowi langsung menuju Samarinda Seberang untuk melakukan peresmian terminal penumpang tipe A.\r\nDalam sambutannya, Jokowi menyampaikan bahwa sekarang ini macet hampir di semua kota. Hal itu karena semua orang menggunakan kendaraan pribadi yang semakin banyak.\r\n\r\n\"Kalau kita lihat dari kota ke kota di mana pun sekarang ini macet. Termasuk saya lihat di Samarinda, di Balikpapan, dan di Banjarmasin,\" ujarnya.\r\n\r\nDengan begitu, peresmian ini sebagai bentuk upaya yang diambil oleh pemerintah dalam mendorong transportasi massal agar penggunaan kendaraan pribadi terus berkurang.', 'Positif', 'Verif'),
(12, 'https://www.liputan6.com/regional/read/5532503/kodim-1016-palangka-raya-bantu-warga-desa-bangun-sari-nikmati-air-bersih', 'Liputan 6', 'Kodim 1016 Palangka Raya, Bantu Warga Desa Bangun Sari Nikmati Air Bersih', '2024-03-05', 'Demi membantu warga yang mengalami kesulitan air bersih, Komando Distrik Militer (Kodim) 1016 Palangka Raya membuat sumur bor di Desa Bangun Sari, Kecamatan Manunging , Kabupaten Gunung Mas, Kalimantan Tengah. Upaya tersebut merupakan bagian dari program TNI Manunggal Membangun Desa (TMMD) ke-119.', 'Demi membantu warga yang mengalami kesulitan air bersih, Komando Distrik Militer (Kodim) 1016 Palangka Raya membuat sumur bor di Desa Bangun Sari, Kecamatan Manunging , Kabupaten Gunung Mas, Kalimantan Tengah. Upaya tersebut merupakan bagian dari program TNI Manunggal Membangun Desa (TMMD) ke-119.\r\nKomandan Kodim 1016 Palangka Raya, Kolonel Czi Wiwid Wahyu Hidayat mengatakan, pembuatan sumur dilakukan karena warga kerap kesulitan mendapatkan akses air bersih, terutama pada musim kemarau. Mereka harus berjuang mendatangkan air dari luar Desa Bangun Sari menggunakan tangki. \"Sumur bor kami buat di sini karena di musim kemarau, masyarakatnya mendatangkan air menggunakan tangki,\" ungkap Wiwid, Selasa (20/2/2024).', 'Positif', 'Verif'),
(13, 'https://www.kompas.com/cekfakta/read/2024/03/01/100100382/-hoaks-video-xi-jinping-minta-jokowi-serahkan-tanah-di-kalimantan', 'kompas.com', '[HOAKS] Video Xi Jinping Minta Jokowi Serahkan Tanah di Kalimantan sebagai Jaminan ', '2024-03-05', 'Beredar video disertai narasi bahwa Presiden China Xi Jinping meminta Presiden Joko Widodo menyerahkan tanah di Kalimantan sebagai jaminan utang. Namun, berdasarkan penelusuran Tim Cek Fakta Kompas.com, narasi tersebut hoaks. Video pidato Xi Jinping disebarkan dengan konteks yang keliru.\r\n', 'Narasi soal Xi Jinping meminta Jokowi menyerahkan tanah di Kalimantan sebagai jaminan utang dibagikan oleh akun Facebook ini, ini, dan ini. Akun tersebut membagikan video Xi Jinping berpidato dalam bahasa Mandarin. Dalam video terdapat takarir demikian: DALAM KUNJUNGAN INI SAYA INGIN MEMINTA PRESIDEN JOKO WIDODO MENGEMBALIKAN UTANG NEGARANYA KEPADA CHINA. DALAM WAKTU YANG SUDAH DISEPAKATI DALAM NOTA KESEPAKATAN YANG SUDAH KITA BUAT BERSAMA DALAM PERJANJIAN INVESTASI CHINA KEPADA INDONESIA. DALAM PEMENANGAN JOKOWI DODO PADA PEMILU KEMARIN SERTA MODAL PEMBANGUNAN INFRASTRUTUR. Vidoe tersebut diberikan keterangan demikian: PRESIDEN CHINA MEMINTA MEPADA BPK JOKOWI MENYERAHKAN TANAH KALIMANTAN SEBAGAI JAMINAN ASTAGFIRULLAH !!\r\n', 'Hoax', 'Verif'),
(14, 'https://www.antaranews.com/berita/1953892/hoaks-video-mobil-terseret-banjir-di-kalimantan-selatan', 'antara', 'Hoaks, video mobil terseret banjir di Kalimantan Selatan', '2024-03-05', 'Seorang pengguna Twitter membagikan sebuah video yang diklaim sebagai peristiwa banjir di Kalimantan Selatan dan telah ditonton hingga 568.000 kali sampai Senin (18/1).', 'Seorang pengguna Twitter membagikan sebuah video yang diklaim sebagai peristiwa banjir di Kalimantan Selatan dan telah ditonton hingga 568.000 kali sampai Senin (18/1).\r\nVideo itu memperlihatkan sejumlah mobil terendam banjir hingga hampir mencapai kaca jendela. Adapula, beberapa kendaraan roda dua yang hanya menampakkan kaca spion.  Tidak jauh dari kumpulan mobil dan motor tersebut, tampak puluhan warga berkerumun di sebuah bangunan kayu, menyaksikan peristiwa banjir itu.\r\nPada detik ke-8 video tersebut, mobil-mobil terlihat mulai terseret arus banjir.', 'Hoax', 'Verif'),
(15, 'https://www.beritasatu.com/news/1024127/hoax-rekaman-percobaan-penculikan-anak-beredar-di-whatsapp', 'Berita satu', 'Hoax, Rekaman Percobaan Penculikan Anak Beredar di WhatsApp', '2024-03-05', 'Beredar sebuah pesan audio berantai tentang percobaan penculikan anak. Dalam rekaman tersebut seorang ibu menceritakan kronologi tentang percobaan penculikan anak SD pada saat jam olah raga berlangsung di SDN Kepatihan 01, Jember Resah.', 'Beredar sebuah pesan audio berantai tentang percobaan penculikan anak. Dalam rekaman tersebut seorang ibu menceritakan kronologi tentang percobaan penculikan anak SD pada saat jam olah raga berlangsung di SDN Kepatihan 01, Jember Resah.\r\nPesan itu telah beredar luas di grup WhatsApp, termasuk grup wali murid orang tua yang anaknya bersekolah di SDN Kepatihan 01.\r\nPesan audio seakan-akan menakuti ibu wali murid yang menerima pesan itu. \r\nDalam pesan bercerita bahwa seorang anak bernama Zaskia saat jam olahraga akan diculik seseorang dengan ciri-ciri berjilbab dengan perawakan seperti waria. ', 'Hoax', 'Verif'),
(20, 'https://banjarmasin.tribunnews.com/2024/08/08/berita-populer-kalsel-satu-asn-hst-jadi-tersangka-korupsi-guru-paud-banjarmasin-divonis-9-bulan', 'banjarmasin.tribunnews.com', 'Satu ASN HST Jadi Tersangka Korupsi, Guru PAUD Banjarmasin Divonis 9 Bulan   Artikel ini telah tayang di BanjarmasinPost.co.id dengan judul Berita Populer Kalsel: Satu ASN HST Jadi Tersangka Korupsi, Guru PAUD Banjarmasin Divonis 9 Bulan', '2024-08-12', 'Satu Aparatur Sipil Negara (ASN) di lingkup Dinas PUPR HST inisial HB bersama seorang pegawai swasta insial DN ditetapkan jadi tersangka oleh Kejaksaan Negeri Hulu Sungai Tengah.\r\nKedua tersangka inisial HB dan DN ini ditetapkan jadi tersangka karena diduga kuat terlibat kasus korupsi yang mengakibatkan ditemukan adanya kerugian negara ratusan juta Rupiah.\r\n', 'Satu Aparatur Sipil Negara (ASN) di lingkup Dinas PUPR HST inisial HB bersama seorang pegawai swasta insial DN ditetapkan jadi tersangka oleh Kejaksaan Negeri Hulu Sungai Tengah.\r\nKedua tersangka inisial HB dan DN ini ditetapkan jadi tersangka karena diduga kuat terlibat kasus korupsi yang mengakibatkan ditemukan adanya kerugian negara ratusan juta Rupiah.\r\n', 'Positif', 'Verif'),
(21, 'https://banjarmasin.tribunnews.com/2024/08/17/momen-kemerdekaan-bupati-balangan-beri-penghargaan-kepada-veteran-skpd-dan-atlet', 'Tribunkalsel', 'Momen Kemerdekaan, Bupati Balangan Beri Penghargaan kepada Veteran, SKPD dan Atlet   ', '2024-08-17', 'Sejumlah penghargaan kepada SKPD Kabupaten Balangan dan atlet berprestasi diserahkan pada acara peringatan HUT ke-79  Kemerdekaan RI di Kabupaten Balangan, Jumat (17/8/2024).\r\n', 'Sejumlah penghargaan kepada SKPD Kabupaten Balangan dan atlet berprestasi diserahkan pada acara peringatan HUT ke-79  Kemerdekaan RI di Kabupaten Balangan, Jumat (17/8/2024).\r\nBupati Balangan, Abdul Hadi secara langsung menyerahkan penghargaan tersebut bersamaan dengan penyerahan hadiah secara simbolis.\r\nUtamanya penghargaan diberikan kepada sosok veteran di Kabupaten Balangan yang akrab disapa Kai Musa, dari Desa Timbun Tulang, Kecamatan Batumandi, Kabupaten Balangan.', 'Positif', 'Verif'),
(22, 'https://banjarmasin.tribunnews.com/2024/08/17/perceraian-tinggi-janda-di-hst-capai-belasan-ribu-kecamatan-barabai-terbanyak', 'banjarmasin.tribunnews.com', 'Perceraian Tinggi, Janda di HST Capai Belasan Ribu, Kecamatan Barabai Terbanyak  ', '2024-08-17', 'Dinas Kependudukan dan Catatan Sipil (Disdukcapil) Kabupaten Hulu Sungai Tengah (HST) Kalimantan Selatan mencatat, hingga Agustus 2024, total perempuan berstatus janda di HST mencapai belasan ribu, Sabtu, (17/08/2024). ', 'Dinas Kependudukan dan Catatan Sipil (Disdukcapil) Kabupaten Hulu Sungai Tengah (HST) Kalimantan Selatan mencatat, hingga Agustus 2024, total perempuan berstatus janda di HST mencapai belasan ribu, Sabtu, (17/08/2024). \r\nBerdasarkan Data Konsolidasi Bersih (DKB) Semester I Tahun 2024 menunjukkan, jumlah warga yang berstatus cerai mati dan cerai hidup di HST cukup tinggi.', 'Negatif', 'Verif'),
(23, 'https://diskominfomc.kalselprov.go.id/2024/08/17/17-agustus-gubernur-kalsel-gratiskan-layanan-bts-dan-brt-banjarbakula/', 'Diskominfo Kalsel', '17 Agustus, Gubernur Kalsel Gratiskan Layanan BTS dan BRT Banjarbakula', '2024-08-17', 'Gubernur Kalimantan Selatan (Kalsel) Sahbirin Noor dengan bersama Ketua TP PKK Provinsi Kalsel Raudatul Jannah pada peringatan HUT ke-79 memberikan fasilitas gratis untuk angkutan layanan BTS Banjarbakula dan BRT disemua koridor selama 1 hari penuh.', 'Gubernur Kalimantan Selatan (Kalsel) Sahbirin Noor dengan bersama Ketua TP PKK Provinsi Kalsel Raudatul Jannah pada peringatan HUT ke-79 memberikan fasilitas gratis untuk angkutan layanan BTS Banjarbakula dan BRT disemua koridor selama 1 hari penuh.\r\nKepala Dinas Perhubungan (Dishub) Provinsi Kalsel, M Fitri Hernadi mengatakan, ini merupakan bentuk kepedulian Gubernur Kalsel pada masyarakat Kalsel untuk memaknai hari kemerdekaan.', 'Positif', 'Verif'),
(24, 'https://kalsel.inews.id/berita/kenali-bahaya-buah-kecubung-bisa-bikin-mabuk-sampai-gila-berujung-kematian', 'inews kalsel', 'Kenali Bahaya Buah Kecubung, Bisa Bikin Mabuk sampai Gila Berujung Kematian', '2024-08-18', 'Fenomena remaja mabuk kecubung menghebohkan warga Kalimantan Selatan (Kalsel) dalam beberapa hari terakhir. Dua orang tercatat meninggal dunia dan 47 lainnya dirawat di rumah sakit jiwa akibat mengonsumsi buah tersebut hingga Jumat (12/7/2024).', 'Mereka kini dirawat di Rumah Sakit Jiwa (RSJ) Sambang Lihum, Kabupaten Banjar, Kalsel. Pasien terbanyak berasal dari Kota Banjarmasin sebanyak 26 orang. Kemudian Banjarbaru 3 orang, Banjar 7 orang, Hulu Sungai Selatan 1 orang, Kapuas 3 orang, Batola 6 orang dan Kota Baru 1 orang.', 'Positif', 'Verif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desain`
--

CREATE TABLE `desain` (
  `id_desain` int NOT NULL,
  `id_pegawai` int NOT NULL,
  `jenis_desain` varchar(50) NOT NULL,
  `deskripsi_desain` varchar(255) NOT NULL,
  `tanggal_permintaan` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `kendala` varchar(255) DEFAULT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `desain`
--

INSERT INTO `desain` (`id_desain`, `id_pegawai`, `jenis_desain`, `deskripsi_desain`, `tanggal_permintaan`, `tanggal_selesai`, `status`, `kendala`, `url`) VALUES
(14, 8, 'Banner', 'Peringatan 17 agustus , 79 Dirgahayu Indonesia', '2024-08-14', '2024-08-16', 'Selesai', NULL, 'https://drive.google.com/file/d/10kUbrHul1P0MhDq20TZmMbFfuF9TIVck/view?usp=sharing'),
(15, 8, 'Banner', 'Ucapan Selamat ulang tahun untuk ketua TP PKK PROVINSI KALIMNTAN SELATAN', '2024-08-13', '2024-08-14', 'Selesai', NULL, 'https://drive.google.com/file/d/11ks1LnYbOPWwZHbnW8b_BLquk2cgl36g/view?usp=sharing'),
(16, 8, 'Banner', 'Untuk Upacara hut-79 RI', '2024-08-14', '2024-08-16', 'Selesai', NULL, 'https://drive.google.com/file/d/17XnAsLQVuBbmV0cvc8JLz2FhsA6wwzyA/view?usp=sharing'),
(17, 8, 'Banner', 'Banner untuk penutupan prodi pendidikan peryama tamtama TNI AD GELOMBANG 2024', '2024-08-12', '2024-08-16', 'Selesai', NULL, 'https://drive.google.com/file/d/11lv9ym5EZ4W_yJ_iClituXnmE3d0R5YG/view?usp=sharing'),
(18, 8, 'Spanduk Besar', 'Maulid nabi Muhammad Saw', '2024-08-16', NULL, 'Belum Selesai', 'Masih Pengerjaan', NULL),
(19, 8, 'Banner', 'Hari Kesaktian Pancasila', '2024-08-18', NULL, 'Belum Selesai', 'Masih pengerjaan', NULL),
(20, 8, 'Banner', 'Hari Batik Nasional', '2024-08-18', NULL, 'Belum Selesai', 'Masih pengerjaan', NULL),
(21, 8, 'Banner', 'banner testing', '2024-08-16', '2024-08-18', 'Selesai', 'Desainer sedang sibuk', 'https://drive.google.com/file/d/1hLJKhdzSBhtok2Tt4f8qnCBYRsAXHr5f/view?usp=sharing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int NOT NULL,
  `nip` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nm_pegawai` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `jk` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `tmp_lahir` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `tugas` varchar(28) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nm_pegawai`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `tugas`, `email`, `id_user`) VALUES
(7, '2010010013', 'Fauzan', 'Laki - Laki', 'Hulu Sungai Selatan', '2001-08-28', 'Jl.Perwira', 'Tenaga Kerja', 'fwzanzan@gmail.com', 10),
(8, '19820819200501014', 'Agustin Qamariah,ST,MM', 'Perempuan', 'Tamban', '1982-08-19', 'Komp. Pesona cempaka indah blok f no12 kel cempaka bjb', 'Tenaga Kerja', 'thiton_aq@yahoo.com', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nm_user` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(28) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `pekerjaan`, `email`, `username`, `password`, `id_role`) VALUES
(1, 'Admin', 'Laki - Laki', 'Indonesia', '2024-01-03', 'Indonesia', 'Administrator', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'Miftah Farid', 'Laki - Laki', 'Banjarbaru', '1991-09-16', 'Jl. Ratu zaleha gang. H. Asnawi 1 Banjarmasin', 'Desainer', 'andikakabad@gmail.com', 'miftah farid', '1af375b0342242fda6306852214e4d22', 1),
(9, 'Yasinta Indah Nurlaily, S.I.Kom', 'Perempuan', 'Banjarmasin', '1999-03-03', 'Jl. Ratu zaleha gang. H. Asnawi 1 Banjarmasin', 'Pemilah Berita', 'yasintaindahnurlaily@gmail.com', 'yasinta', '4205475077c1ec24d6224301639e508e', 1),
(10, 'Fauzan', 'Laki - Laki', 'Hulu Sungai Selatan', '2001-08-28', 'Jl.Perwira', 'Tenaga Kerja', 'fwzanzan@gmail.com', 'fauzan', 'd3a33788c755ebcef244fd61c04f408a', 2),
(11, 'Agustin Qamariah,ST,MM', 'Perempuan', 'Tamban', '1982-08-19', 'Komp. Pesona cempaka indah blok f no12 kel cempaka bjb', 'Tenaga Kerja', 'thiton_aq@yahoo.com', 'agustin', 'b374772a435122d6f03f0978d0d94473', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id_desain`),
  ADD KEY `nama_pegawai` (`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `desain`
--
ALTER TABLE `desain`
  MODIFY `id_desain` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
