<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desa Pasir Tanjung | Beranda</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="normalize.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo-lebak-warna.png" alt="" />
                <p>Desa Pasirtanjung</p>
            </div>
            <ul class="nav-links">
                <li><a href="#tentang-desa">Tentang Desa</a></li>
                <li><a href="#data-desa">Data Desa</a></li>
                <li><a href="/wisata">Wisata</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="hero">
        <div class="hero-content">
            <img class="hero-bg" src="pt-hero-blkng.webp" alt="" />
            <div class="text-elements">
                <h1 class="hero-headline">Pasirtanjung</h1>
                <p class="hero-subheadline">Lebak, Rangkasbitung</p>
            </div>
            <img class="hero-fg" src="pt-hero-depan.webp" alt="" />
        </div>
    </section>

    <section id="tentang-desa" class="tentang-desa">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31719.540380992123!2d106.2568114!3d-6.4014044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4213de16857c91%3A0xae154a6e90e00191!2sPasirtanjung%2C%20Kec.%20Rangkasbitung%2C%20Kabupaten%20Lebak%2C%20Banten!5e0!3m2!1sid!2sid!4v1720707728619!5m2!1sid!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="about">
            <h1>Tentang Pasirtanjung</h1>
                <p>
                    Desa Pasirtanjung, terletak di Kecamatan Rangkasbitung, Kabupaten
                    Lebak, Banten, adalah sebuah desa dengan pemandangan alam yang indah,
                    termasuk perbukitan, persawahan, dan sungai yang jernih. Penduduknya
                    yang ramah sebagian besar bekerja sebagai petani, peternak, dan
                    pengrajin, dengan kehidupan sosial yang kuat dalam nuansa gotong
                    royong. Desa ini memiliki potensi pariwisata yang besar, seperti
                    wisata alam, budaya, dan edukasi. Infrastruktur desa, termasuk
                    fasilitas pendidikan dan kesehatan, terus ditingkatkan untuk mendukung
                    kesejahteraan warga. Dengan visi menjadi desa yang mandiri, sejahtera,
                    dan berbudaya, Pasirtanjung berkomitmen untuk berkembang dan menjadi
                    destinasi wisata yang menarik.
                </p>
            <button onclick="window.location.href='#data-desa'">Selengkapnya</button>
        </div>
    </section>

    <section class="wisata">
        <img src="water-border.png" alt="" />
        <div class="wisata-container">
            <div class="produk" onclick="window.location.href='/produk'" style="cursor: pointer">
                <img src="produk unggulan.webp" alt="" />
                <h2>Produk Unggulan Desa</h2>
                <p>
                    Lihat produk-produk industri rumahan hasil kreasi <br />
                    warga Pasirtanjung.
                </p>
            </div>
            <span></span>
            <div class="karian" onclick="window.location.href='/wisata'" style="cursor: pointer">
                <img src="kunjungi-karian.webp" alt="" />
                <h2>
                    Kunjungi Kawasan <br />
                    Wisata Terpadu Karian
                </h2>
                <p>
                    Bendungan Karian adalah proyek untuk irigasi serta <br />
                    berpotensi sebagai objek wisata alam.
                </p>
            </div>
        </div>
    </section>

    <section class="wisata-swiper">
        <div class="carousel-wisata">
            <div class="carousel-wisata-slide">
                <div class="carousel-wisata-item active">
                    <img src="banner-trekking.webp" alt="">
                    <div class="carousel-wisata-text">
                        <p>Jelajahi Pasir Tanjung</p>
                        <h1>Trekking<br/>di Karian</h1>
                    </div>
                </div>
                <div class="carousel-wisata-item">
                    <img src="banner-jelajahi.webp" alt="">
                    <div class="carousel-wisata-text">
                        <p>Jelajahi Pasir Tanjung</p>
                        <h1>Wisata<br/>Perahu</h1>
                    </div>
                </div>
                <div class="carousel-wisata-item">
                    <img src="pasirtanjung web assets banner 2.webp" alt="">
                    <div class="carousel-wisata-text">
                        <p>Jelajahi Pasir Tanjung</p>
                        <h1>Nyantai di<br/>Sore Hari</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="kegiatan-masyarakat">
        <div class="carousel-kegiatan">
            <div class="carousel-kegiatan-slide">
                <div class="carousel-kegiatan-item active">
                    <div class="carousel-kegiatan-text">
                        <br/>
                        <p>Kegiatan Warga</p>
                        <br/>
                        <h2>Pelatihan Marketing Bersama Anggota PKK</h2>
                        <p>
                            Pada tanggal 26 Juni 2024, anggota PKK Pasirtanjung menyelenggarakan
                            pelatihan tentang pengetahuan pemasaran yang dibawakan oleh mahasiswa
                            Universitas Pradita yang sedang melakukan KKN. Pelatihan ini bertujuan
                            untuk meningkatkan pengetahuan anggota PKK tentang pemasaran, sehingga
                            mereka dapat lebih baik dalam menjual produk unggulan desa Pasirtanjung
                            yang dibuat oleh warga. Dengan adanya pelatihan ini, diharapkan anggota
                            PKK dapat mengembangkan strategi pemasaran yang efektif dan mampu
                            meningkatkan ekonomi dan kualitas produk masyarakat desa.
                        </p>
                    </div>
                    <div class="carousel-kegiatan-image">
                        <img src="pelatihan-p2k.webp" alt="">
                    </div>
                </div>
                <div class="carousel-kegiatan-item">
                    <div class="carousel-kegiatan-text">
                        <br/>
                        <p>Kegiatan Warga</p>
                        <br/>
                        <h2>Perawatan Kawasan Wisata<br/>Terpadu Bendungan Karian</h2>
                        <p>
                            Pengurus kawasan wisata terpadu Bendungan Karian secara rutin melakukan<br/>
                            perawatan dan pembukaan jalan yang digunakan untuk trekking. Setidaknya<br/>
                            sekali sebulan, mereka membersihkan dan memperbaiki jalur trekking agar<br/>
                            tetap aman dan nyaman bagi para pengunjung. Upaya ini bertujuan untuk<br/>
                            meningkatkan kenyamanan wisatawan serta menjaga keindahan dan<br/>
                            kelestarian alam di sekitar Bendungan Karian. Dengan demikian, pengunjung<br/>
                            dapat menikmati pengalaman trekking yang lebih baik sambil menikmati<br/>
                            keindahan alam yang terawat dengan baik.
                        </p>
                    </div>
                    <div class="carousel-kegiatan-image">
                        <img src="perawatan-karian.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="data-desa-spanduk">
        <div class="data-desa-banner">
            <img class="data-desa-image" src="bg-header-karian.png" alt="" />
            <div class="data-desa-text">
                <p class="data-desa-subheadline">Data Desa</p>
                <h1 class="data-desa-headline">Pasirtanjung</h1>
            </div>
        </div>
    </section>

    <section id="data-desa" class="data-desa">
        <div class="data-desa-info">
            <h2>Data Desa<br/>Pasirtanjung</h2>
            <p>Kecamatan Rangkasbitung, Kabupaten Lebak, Provinsi Banten, Indonesia.<br/>
            Kantor Pengurus Desa: Pasirtanjung, Kec. Rangkasbitung, Kabupaten Lebak, Banten 42312 </p>
        </div>
    </section>

    <section class="data-desa-card">
        <div class="cardbase">
            <div class="card-left">
                <div class="text-container">
                    <h2>Visi</h2>
                </div>
                <div class="text-container">
                    <h2>Misi</h2>
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="card-right">
                <div class="text-container">
                    <p>Menjadi desa yang mandiri, sejahtera, dan berbudaya dengan mengedepankan partisipasi aktif seluruh warga dalam pembangunan desa.</p>
                </div>
                <div class="text-container">
                    <p>1. Meningkatkan kualitas pendidikan dan kesehatan bagi seluruh warga desa.<br/>
                       2. Mengembangkan potensi ekonomi lokal melalui penguatan sektor pertanian, peternakan, dan kerajinan tangan.<br/>
                       3. Melestarikan nilai-nilai budaya dan tradisi lokal sebagai identitas desa.<br/>
                       4. Meningkatkan infrastruktur dan fasilitas umum untuk mendukung kesejahteraan masyarakat.<br/>
                       5. Mendorong partisipasi aktif masyarakat dalam proses pembangunan dan pengambilan keputusan.<br/>
                       6. Memperkuat sinergi dengan pemerintah, swasta, dan komunitas dalam pengembangan desa.<br/>
                       7. Mengembangkan potensi pariwisata desa untuk meningkatkan perekonomian lokal.<br/>
                       8. Mewujudkan tata kelola pemerintahan desa yang transparan dan akuntabel.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="data-desa-button">
        <button onclick="window.location.href='/about'">Hubungi Kami</button>
    </section>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <section class="potensi-desa">
        <div class="potensi-desa-info">
            <h2>Potensi</h2>
        </div>
    </section>

    <section class="potensi-desa-container">
        <div class="potensi-desa-tabel">
            <div class="kolom-kiri">
                <h3>👥</h3>
                <h4>Jumlah Penduduk</h4>
                <h1>5.422 </h1><p> Jiwa</p>
                <br/>
                <h4>Luas Wilayah</h4>
                <h1>± 5.422 </h1><p> Ha</p>
            </div>
            <span></span>
            <div class="kolom-tengah">
                <h3>🙎‍♂️</h3>
                <h4>Penduduk Laki-laki</h4>
                <h1>2.853 </h1><p> Jiwa</p>
                <br/>
                <h4>Jumlah RW</h4>
                <h1>7</h1>
            </div>
            <span></span>
            <div class="kolom-kanan">
                <h3>🙎‍♀️</h3>
                <h4>Penduduk Perempuan</h4>
                <h1>2.569 </h1><p> Jiwa</p>
                <br/>
                <h4>Jumlah RT</h4>
                <h1>24</h1>
            </div>
        </div>
    </section>
    <br/>
    <br/>
    <section class="batas-wilayah">
        <div class="batas-wilayah-info">
            <h2>Batas Wilayah Desa</h2>
        </div>
    </section>

    <section class="batas-wilayah-card">
        <div class="other-cardbase">
            <div class="other-card-left">
                <div class="other-text-container">
                    <h4>Sebelah Utara</h4>
                </div>
                <div class="other-text-container">
                    <h4>Sebelah Timur</h4>
                </div>
                <div class="other-text-container">
                    <h4>Sebelah Selatan</h4>
                </div>
                <div class="other-text-container">
                    <h4>Sebelah Barat</h4>
                </div>
            </div>
            <div class="other-card-right">
                <div class="other-text-container">
                    <p>Desa Rangkasbitung Timur</p>
                </div>
                <div class="other-text-container">
                    <p>Desa Sindang Mulya</p>
                </div>
                <div class="other-text-container">
                    <p>Desa Tambal</p>
                </div>
                <div class="other-text-container">
                    <p>Desa Sangiang Tanjung</p>
                </div>
            </div>
        </div>
    </section>

    <section class="struktur-desa">
        <div class="struktur-desa-info">
            <h2>Struktur Organisasi Desa</h2>
        </div>
    </section>

    <section class="struktur-desa-card">
        <div class="another-cardbase">
            <div class="another-card-left">
                <div class="another-text-container">
                    <h4>Kepala Desa</h4>
                </div>
                <div class="another-text-container">
                    <h4>Sekretaris Desa</h4>
                </div>
                <div class="another-text-container">
                    <h4>Kaur Keuangan</h4>
                </div>
                <div class="another-text-container">
                    <h4>Kaur Umum</h4>
                </div>
                <div class="another-text-container">
                    <h4>Kasi Pemerintahan</h4>
                </div>
                <div class="another-text-container">
                    <h4>Kasi Ekbang</h4>
                </div>
                <div class="another-text-container">
                    <h4>Staf kependudukan</h4>
                </div>
                <div class="another-text-container">
                    <h4>Staf Jaringan Informasi</h4>
                </div>
                <div class="another-text-container">
                    <h4>Staf Jaga Desa</h4>
                </div>
                <br/>
                <div class="another-text-container">
                    <h4>Mantri Tani Desa</h4>
                </div>
                <div class="another-text-container">
                    <h4>Staff</h4>
                </div>
                <br/>
            </div>
            <div class="another-card-right">
                <div class="another-text-container">
                    <p>Suryana</p>
                </div>
                <div class="another-text-container">
                    <p>Apip</p>
                </div>
                <div class="another-text-container">
                    <p>Maya Puspa Rini</p>
                </div>
                <div class="another-text-container">
                    <p>Ade Kusnadi Ependi</p>
                </div>
                <div class="another-text-container">
                    <p>Ahmad Baeruzi</p>
                </div>
                <div class="another-text-container">
                    <p>Ahmad Fauzi</p>
                </div>
                <div class="another-text-container">
                    <p>Masitoh</p>
                </div>
                <div class="another-text-container">
                    <p>Eneng Romdonah</p>
                </div>
                <div class="another-text-container">
                    <p>Yayat Santika<br/>
                       Eti Juheti</p>
                </div>
                <div class="another-text-container">
                    <p>Jeni Wijayanto</p>
                </div>
                <div class="another-text-container">
                    <p>Dana<br/>
                       Ali</p>
                </div>
            </div>
        </div>
    </section>

    <section class="anggaran-desa-button">
        <button onclick="window.location.href='/about'">Lihat Anggaran Desa</button>
    </section>

    <section class="sarana-desa">
        <div class="sarana-desa-info">
            <h2>Sarana dan Prasarana Desa</h2>
        </div>
    </section>

    <section class="sarana-desa-card">
        <div class="left-section">
            <div class="sarana-cardbase-kiri">
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Pendidikan Umum</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p><b>SD/Sederajat</b></p></td>
                                <td class="tabel-kolom-tengah"><p><b>2</b></p></td>
                                <td class="tabel-kolom-kanan"><p><b>Buah</b></p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Negeri</p></td>
                                <td class="tabel-kolom-tengah"><p>2</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Swasta</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Jumlah Murid</p></td>
                                <td class="tabel-kolom-tengah"><p>724</p></td>
                                <td class="tabel-kolom-kanan"><p>Orang</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><b>SLTP/Sederajat</b></p></td>
                                <td class="tabel-kolom-tengah"><p><b>2</b></p></td>
                                <td class="tabel-kolom-kanan"><p><b>Buah</b></p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Negeri</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Swasta</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Jumlah Murid</p></td>
                                <td class="tabel-kolom-tengah"><p>470</p></td>
                                <td class="tabel-kolom-kanan"><p>Orang</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Peribadatan</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Masjid</p></td>
                                <td class="tabel-kolom-tengah"><p>5</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Mushola</p></td>
                                <td class="tabel-kolom-tengah"><p>12</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Majlis Taklim</p></td>
                                <td class="tabel-kolom-tengah"><p>12</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Kesehatan</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Puskesmas/Pustu</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Posyandu</p></td>
                                <td class="tabel-kolom-tengah"><p>9</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pos Lansia</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Ekonomi</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pasar Desa</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Koperasi</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Warung/Kios</p></td>
                                <td class="tabel-kolom-tengah"><p>39</p></td>
                                <td class="tabel-kolom-kanan"><p>Orang</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Tengkulak Hasil Bumi</p></td>
                                <td class="tabel-kolom-tengah"><p>16</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Toko Bahan Bangunan/Material</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pengelolaan Kayu Jadi (Kusen dll)</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Bengkel Kendaraan Bermotor</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Bengkel Alat-alat Elektronik</p></td>
                                <td class="tabel-kolom-tengah"><p>3</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pengrajin Lio Bata/Genteng</p></td>
                                <td class="tabel-kolom-tengah"><p>8</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pengrajin Anyaman Bambu</p></td>
                                <td class="tabel-kolom-tengah"><p>8</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pengrajin Kue/Home Industry</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Tukang Jahit/Konveksi </p></td>
                                <td class="tabel-kolom-tengah"><p>35</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Heuler/Penggilingan Padi</p></td>
                                <td class="tabel-kolom-tengah"><p>4</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <div class="right-section">
            <div class="sarana-cardbase-kanan">
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Pendidikan Keagamaan</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Madrasah Diniyah</p></td>
                                <td class="tabel-kolom-tengah"><p>2</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Jumlah Murid</p></td>
                                <td class="tabel-kolom-tengah"><p>172</p></td>
                                <td class="tabel-kolom-kanan"><p>Orang</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><b>Pondok Pesantren</b></p></td>
                                <td class="tabel-kolom-tengah"><p><b>5</b></p></td>
                                <td class="tabel-kolom-kanan"><p><b>Buah</b></p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p><tab/>Jumlah Murid</p></td>
                                <td class="tabel-kolom-tengah"><p>120</p></td>
                                <td class="tabel-kolom-kanan"><p>Orang</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Olahraga</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Lapangan Sepak Bola</p></td>
                                <td class="tabel-kolom-tengah"><p>1</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Lapangan Volley</p></td>
                                <td class="tabel-kolom-tengah"><p>2</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Ketertiban</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Polsek / Pos Polisi</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Koramil / Pos Babinsa</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pos Kamling</p></td>
                                <td class="tabel-kolom-tengah"><p>13</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Jumlah Anggota Hansip/Linmas</p></td>
                                <td class="tabel-kolom-tengah"><p>12</p></td>
                                <td class="tabel-kolom-kanan"><p>Orang</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="card-top">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <th colspan="1" class="tabel-kolom-kiri"><h4>Air Bersih dan Sanitasi</h4></th>
                                <th colspan="2" class="tabel-kolom-kanan"><h4>Jumlah</h4></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="sarana-text-container">
                        <table width="100%">
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Sumur Pompa Tangan (SPT)</p></td>
                                <td class="tabel-kolom-tengah"><p>7</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Sumur Gali (SGL)</p></td>
                                <td class="tabel-kolom-tengah"><p>27</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Hidran Umum</p></td>
                                <td class="tabel-kolom-tengah"><p>18</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Mata Air</p></td>
                                <td class="tabel-kolom-tengah"><p>2</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Sumur Perpipaan (Jet Pump)</p></td>
                                <td class="tabel-kolom-tengah"><p>87</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pengelolaan Air Minum</p></td>
                                <td class="tabel-kolom-tengah"><p>18</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pembuangan Air Limbah</p></td>
                                <td class="tabel-kolom-tengah"><p>0</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>MCK Plus Air Bersih</p></td>
                                <td class="tabel-kolom-tengah"><p>19</p></td>
                                <td class="tabel-kolom-kanan"><p>Buah</p></td>
                            </tr>
                            <tr>
                                <td class="tabel-kolom-kiri"><p>Pemilik Jamban Keluarga</p></td>
                                <td class="tabel-kolom-tengah"><p>803</p></td>
                                <td class="tabel-kolom-kanan"><p>Rumah</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </section>

    <section class="back-to-top">
        <a href="#hero"><img src="Group 26.png" alt="back-to-top" /></a>
    </section>

<footer>
    <div class="kontak-desa">
        <h2>Kontak Desa</h2>
        <p>
            desapasirtanjung@gmail.com <br />
            Instagram: @pasirtanjung.lebak <br />
            +62 12345678910
        </p>
    </div>
    <div class="kantor-desa">
        <h2>Kantor Desa</h2>
        <p>
            Pasirtanjung, Kec. Rangkasbitung, <!-- <br/> -->
            Kabupaten Lebak, Banten 42312
            <br /><br />
            Jam Kerja: Senin s.d Sabtu: 09.00-17.00
        </p>
    </div>
    <div class="logo-desa">
        <img src="logo-lebak-warna.png" alt="" />
        <img src="logo-lebak-putih.png" alt="" />
    </div>
</footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
