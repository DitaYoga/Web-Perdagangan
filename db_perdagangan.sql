-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 11.04
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perdagangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jam`
--

INSERT INTO `tb_jam` (`id`, `nama`, `gambar`, `deskripsi`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(7, 'g-shock GST-S120L-1BDR', '2020-11-03_Gambar1.jpg', 'G-Shock sebenarnya adalah jam tangan yang dibuat oleh Casio, namun didesain dengan model yang lebih kasual dan sporty. Buat kamu para pria yang suka jalan-jalan jauh, menyelam ke laut, naik gunung, dan aktivitas-aktivitas berat lainnya, G-Shock adalah merk jam tangan terkenal buat kamu.', 3417000, 5, '2020-11-02 21:30:10', '2020-11-02 21:30:10'),
(8, 'Fossil FS5381 Neutra Chronograph Black', '2020-11-03_Gambar2.jpg', 'Fossil adalah merk jam tangan buat kamu yang ingin tampil elegan dan berkelas dengan sentuhan klasik yang tentu saja menambah kesan vintage pada diri kamu. Terutama jam tangan Fossil yang terbuat dari kulit asli berwarna cokelat. Kalau kamu memakai jam tangan Fossil yang talinya terbuat dari kulit, dijamin, seiring menuanya kulit jam tangan kamu, kamu akan terlihat lebih elegan, karena aksesori apapun yang terbuat dari kulit asli cenderung membuat kaum pria terlihat lebih manly', 2260000, 11, '2020-11-02 21:31:25', '2020-11-02 22:07:56'),
(9, 'Daniel Wellington Classic Cambridge Silver', '2020-11-03_Gambar3.jpg', 'Buat kamu yang ingin tampil dengan jam tangan yang lebih mencolok, ada merk jam tangan pria bernama Daniel Wellington atau yang lebih dikenal dengan sebutan DW. Jam tangan pria keren ini merupakan salah satu jam tangan yang talinya terbuat dari bahan yang halus serta berwarna-warni, seperti kombinasi merah, putih dan biru atau satu warna saja.', 3050000, 100, '2020-11-02 22:30:16', '2020-11-02 22:30:16'),
(10, 'Victorinox Swiss Army Maverick 241602', '2020-11-03_Gambar4.jpg', 'Siapa yang tidak mengenal Victorinox Swiss Army? Merek jam tangan yang awalnya memproduksi pisau kini merambah hingga produksi jam tangan keren. Salah satu produk Victorinox Swiss Army yang bisa kamu kenakan untuk aktivitas outdoor adalah I.N.O.X Professional Diver. Jam tangan ini mampu bertahan dalam medan air yang berat dengan fitur water-resistant mencapai 200 meter, sehingga sangat aman untuk kamu pencinta diving', 5670000, 30, '2020-11-03 02:28:01', '2020-11-03 02:28:01'),
(11, 'Seiko 5 Sports seri SNZG13K1', '2020-11-03_Gambar5.jpg', 'Jam tangan mewah dengan harga terjangkau yang cocok untuk outfit ke kantor, adalah Seiko. Jam ini merupakan salah satu merek jam tangan mewah yang paling terkenal dengan kualitas mesinnya yang tangguh dan tahan lama. Meski pilihan desain jam ini terkesan tempo dulu dibanding jam tangan dari merek lain, namun jam tangan Seiko menawarkan tampilan yang lebih klasik dan timeless.\r\nBagi kamu yang ingin terlihat lebih profesional dan memiliki jabatan yang cukup strategis di kantor, ada baiknya kamu mulai beralih ke jam tangan Seiko 5 Sports seri SNZG13K1 ini.', 1845000, 30, '2020-11-03 02:29:28', '2020-11-03 02:29:28'),
(12, 'Police Avondale 15523JSR/02', '2020-11-03_Gambar6.jpg', 'Brand Police terkenal sebagai produsen kacamata, namun sejak tahun 2013 Police mulai dikenal sebagai produsen jam tangan pria. Karena Police termasuk fashion brand, jam tangan pria yang dibuat Police selalu keren. Buat kamu pria urban yang memerhatikan penampilan, merk jam tangan pria terbaru dari Police patut kamu pertimbangkan.\r\nSeperti seri Police Avondale, jam tangan mewah ini terbuat dari stainless steel dengan ukuran case 48 mm. Avondale terdiri dari 6 pilihan strap kulit dan 6 warna yang bisa kamu sesuaikan dengan kepribadian kamu. Wah, 2019 jam tangan baru nih!', 2378000, 30, '2020-11-03 02:30:17', '2020-11-03 02:30:17'),
(13, 'Expedition 6769 Silver Blue MCLTUBU', '2020-11-03_Gambar7.jpg', 'Tidak banyak yang tahu kalau merk jam tangan outdoor yang elegan ini berasal dari Indonesia. Produknya sudah dipasarkan di beberapa Negara seperti Turki, Singapura, Turmekistan, Myanmar, Filipina hingga Hong Kong. Jam berkualitas dari jepang ini didesain dengan gaya klasik modern, seperti S. Epson, Miyota, dan Seiko.\r\nMekanika jamnya pun menghadirkan fitur-fitur penunjuk waktu dengan detail yang rumit. Expedition adalah merk jam tangan pria yang tidak kalah dibanding merek jam tangan internasional lainnya.', 1611500, 30, '2020-11-03 02:30:58', '2020-11-03 02:30:58'),
(14, 'Alexandre Christie AC 6486 MC LSSBA', '2020-11-03_Gambar8.jpg', 'Pasti kamu tidak asing dengan brand Alexandre Christie. Merk jam tangan yang sudah berumur 50 tahun ini terkenal dengan jam tangan keren yang terbuat dari bahan stainless steel. Desain jam tangan mewah ini dapat membuat penampilan kamu lebih berwibawa. Apalagi harganya yang murah, kamu bisa dapat jam tangan pria keren dengan harga yang tidak membuat kamu boros.', 2100000, 30, '2020-11-03 02:31:50', '2020-11-03 02:31:50'),
(15, 'Citizen Seri AT8020-03L Blue Angels', '2020-11-03_Gambar9.jpg', 'Untuk kamu yang tetap menginginkan tampilan keren dan terlihat mewah saat beraktivitas outdoor, Citizen adalah jam tangan pria yang harus kamu pakai. Jam tangan yang mengedepankan teknologi eco-drive ini mampu beroperasi secara otomatis untuk menunjukkan waktu, sehingga tidak lagi memerlukan baterai sebagai sumber utamanya.\r\nProduk yang jadi rekomendasi dari Citizen adalah Seri AT8020-03L Blue Angels World A-T. Kenapa? Karena merk jam tangan ini merupakan jam tangan yang eksklusif dengan seri edisi terbatas alias limited edition, yaitu sebanyak 2500 di seluruh dunia. Jadi sangat direkomendasikan untuk kamu yang menginginkan jam tangan keren dengan tampilan eksklusif ini.', 6587267, 30, '2020-11-03 02:33:00', '2020-11-03 02:33:00'),
(16, 'Timex Original Waterbury Classic - Tw2R69700', '2020-11-03_Gambar10.jpg', 'Merek jam tangan lain yang tidak kalah terkenalnya adalah Timex. Merek jam tangan pria ini sudah eksis selama beberapa dekade dengan memproduksi jam tangan yang berkualitas sangat baik. Untuk kamu para pria yang memiliki hobi kegiatan adventure, sebaiknya gunakan seri Expedition dari Timex.\r\nJam tangan keren ini mampu bertahan dalam berbagai kondisi bahkan yang paling sulit sekalipun, jadi pas banget untuk menemani petualanganmu dan juga bisa digunakan untuk sehari-hari. Jam yang dilengkapi dengan water resistant 10 bar ini menghadirkan desain klasik namun tetap', 2150000, 30, '2020-11-03 02:34:25', '2020-11-03 02:34:25'),
(17, 'Nixon 51-30 Chrono', '2020-11-03_Gambar11.jpg', 'Merk jam tangan satu ini sudah terkenal di dunia dan sangat berkelas. Brand asal Amerika ini merupakan produsen jam tangan keren yang banyak dilirik oleh peselancar dan hadir dengan desain yang cocok untuk gaya anak muda. Untuk aktivitas outdoor, rekomendasi jam tangan dari Nixon adalah 51-30 Chrono, yang merupakan jam tangan analog dengan ketahanan terhadap tekanan air hingga 30 ATM, sehingga dapat digunakan mulai dari kegiatan keseharian, kegiatan di air, di gunung, sampai kegiatan scuba diving.', 4972500, 30, '2020-11-03 02:34:58', '2020-11-03 02:34:58'),
(18, 'Swatch Nitespeed SUSB402', '2020-11-03_Gambar12.jpg', 'Merek jam tangan terkenal satu ini tentu sudah tidak terdengar asing lagi. Tapi tahukah kamu, bahwa nama Swatch berasal dari kata ‘second watch’, dikarenakan jam ini menghadirkan konsep yang santai, menyenangkan dan relatif sebagai aksesori pelengkap. Meski begitu, bukan berarti merk jam tangan ini tidak bisa dipakai untuk ke kantor.\r\nCoba saja kamu pakai Swatch seri Nitespeed SUSB402. Dengan desain yang kasual, jam ini sangat cocok untuk kamu yang baru memulai karier di kantor. Tidak terlalu tua, namun tetap menghadirkan karisma untuk pemakainya', 1560000, 30, '2020-11-03 02:35:53', '2020-11-03 02:35:53'),
(19, 'Eiger Aviator 1989', '2020-11-03_Gambar13.jpg', 'Brand satu ini lebih dikenal sebagai produsen alat-alat kegiatan outdoor. Tapi jangan salah, selain tas, sepatu dan pakaian, mereka juga membuat jam tangan outdoor yang kualitasnya tak kalah keren.\r\nDari segi desain dan fitur,jam tangan merk asal Bandung ini mengerti banget deh, kebutuhan para penghobi kegiatan outdoor. Misalnya, fitur touch pad, mekanik yang anti-air, stopwatch, dll. Desainnya pun sporty dan dibuat dari material yang kuat gesekan serta asyik untuk dipakai bergerak.', 699000, 30, '2020-11-03 02:37:47', '2020-11-03 02:37:47'),
(20, 'Ted Baker Oscar Watch', '2020-11-03_Gambar14.jpg', 'Dan terakhir, merek terkenal dengan koleksi jam tangan yang cocok digunakan ke kantor, adalah Ted’s Oscar Watch dari Ted Baker. Jam tangan elegan dengan fokus utama pada kualitas material, serta desain talinya yang terbuat dari kulit dan dipoles oleh warna cokelat lembut, akan membuat penampilanmu ke kantor semakin stylish.\r\nDengan look simpel dan elegan, sangat pas untuk kamu yang saat ini menempati jabatan cukup tinggi di kantor. Selain itu, jam ini juga cocok untuk kamu yang ingin berpenampilan layaknya eksekutif muda.', 2025000, 30, '2020-11-03 02:38:57', '2020-11-03 02:38:57'),
(21, 'Eiger Riding Vanquish Analog', '2020-11-03_Gambar15.jpg', 'EIGER Vanquish Watch didesain untuk kamu yang suka berpetualang sambil berkendara di alam bebas. Jam ini memiliki diameter cukup lebar yakni 44 mm.\r\nDengan bentuk yang lebar akan membuat kamu mudah untuk melihat waktu pada saat kamu mengendalikan kendaraan kamu.\r\nEIGER Vanquish Watch diproduksi secara spesial bagi para pengendara. Aluminium plate alloy adalah material yang dipakai untuk membuat case jam tangan ini. Tentu saja dengan bahan tahan karat tersebut, kita bisa menyakini jam tangan ini cukup tangguh di berbagai kondisi', 399000, 30, '2020-11-03 02:39:33', '2020-11-03 02:39:33'),
(22, 'Eiger Riding Torque Watch', '2020-11-03_Gambar16.jpg', 'Eiger Riding Torque dibuat dengan mempertimbangkan presisi atau ketepatan waktu yang ditampilkan pada dial-nya. Jam tangan ini menggunakan case yang dibuat dengan bahan aluminium plate alloy. Strap nya dari bahan kulit yang membuat kamu tetap bisa tampil stylish di perjalanan.\r\nFitur water resistant 5 ATM membuat kamu tidak khawatir jika terjadi hujan secara tiba-tiba di perjalanan. Sedangkan diameter nya lebar mencapai 44 mm sangat cocok digunakan oleh pengendara.', 915000, 30, '2020-11-03 02:40:29', '2020-11-03 02:40:29'),
(24, 'Michael Kors MK3221', '2020-11-03_Gambar 17.jpg', 'Jam tangan super ramping berbahan material metal ini sejatinya lebih diutamakan sebagai aksesori gelang bagi pria, karena mudah diaplikasikan di berbagai penampilan. Meskipun begitu, keakuratan kinerja jam tangan Michael Kors Slim Runway Bracelet Watch tidak perlu diragukan karena didesain oleh salah satu firma horologi ternama di Swiss', 1936000, 30, '2020-11-03 02:42:04', '2020-11-03 02:42:04'),
(25, 'Sullivan Sport Chronograph Watch', '2020-11-03_Gambar18.jpg', 'Mungkin kamu akan mengira Coach adalah fashion brand yang identik dengan perempuan. Hilangkan persepsi tersebut. Coach juga memiliki koleksi jam tangan, salah satunya Sullivan Sport Chronograph Watch. Sederhana, pintar, dan efektif. Tiga kata tersebut sangat tepat menggambarkan bagaimana jam tangan chronograph asal New York ini tampil sebagai sebuah aksesori horologi yang dapat diandalkan di beragam suasana', 3350000, 30, '2020-11-03 02:44:10', '2020-11-03 02:44:10'),
(26, 'Alba Automatic AL4139X1', '2020-11-03_Gambar19.jpg', 'Alba termasuk “anak buah” brand jam tangan Seiko yang telah berdiri sejak tahun 1979. Movement yang digunakan Alba juga sama dengan Seiko, lho. Jadi tidak perlu ragu lagi dengan kualitasnya. Yang membedakan jam tangan Alba dengan Seiko, koleksi Alba lebih modern dan sangat “anak muda”\r\nHarga(900,000)', 900000, 30, '2020-11-03 02:44:38', '2020-11-03 02:44:38'),
(27, 'Longines Master Collection', '2020-11-03_Gambar20.jpg', 'jam tangan ini memiliki bentuk yang klasik dan elegan khas Longines. Dial-nya tergolong besar untuk ukuran jam tangan pria. Selain itu, notasi angkanya menggunakan tulisan berjenis Arabic numerals dengan ukuran besar dan warna yang kontras. Jika Anda mencari jam tangan yang memberi kemudahan dan kenyamanan membaca waktu, produk ini sempurna bagi Anda.', 35260000, 30, '2020-11-03 02:45:28', '2020-11-03 02:45:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
