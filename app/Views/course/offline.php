<?= $this->extend($git_assets . 'ci4_views/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts/topbar'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Sekolah Ekspor Impor</h6>
                <h2>Offline Class</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>
                                        <!-- <text style="text-decoration:line-through;margin-right: 10px;"><?= $reguler_course_fee ?></text><br> -->
                                        <text style="margin-left: 10px;"><?= $offline_course_fee_promo ?></text>
                                    </span>
                                </div>
                                <div class="date">
                                    <h6><?= $batch_start[0] ?> <span><?= $batch_start[1] ?></span></h6>
                                </div>
                                <a href="#"><img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/single-meeting.jpg" alt=""></a>
                            </div>
                            <div class="down-content">
                                <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">DESKRIPSI</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-curiculum-tab" data-bs-toggle="pill" data-bs-target="#pills-curiculum" type="button" role="tab" aria-controls="pills-curiculum" aria-selected="false">KURIKULUM</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-announcement-tab" data-bs-toggle="pill" data-bs-target="#pills-announcement" type="button" role="tab" aria-controls="pills-announcement" aria-selected="false">PENGUMUMAN</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-registration-tab" data-bs-toggle="pill" data-bs-target="#pills-registration" type="button" role="tab" aria-controls="pills-registration" aria-selected="false">PENDAFTARAN</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                        <h4>Diklat Ahli Kepabeanan PPJK</h4>
                                        <p>KELAS <text style="color:orange">OFFLINE</text></p>
                                        <p>PERIODE <text style="color:orange"><?= $batch ?></text></p>
                                        <br>
                                        <br>
                                        <h5>PENDAHULUAN</h5>
                                        <hr>
                                        <p style="text-align: justify;">Ahli Kepabeanan adalah seseorang yang memiliki pengetahuan dan pemahaman tentang kepabeanan dan memiliki Sertifikat Ahli Kepabeanan yang dikeluarkan oleh Badan Pendidikan dan Pelatihan Keuangan (BPPK), Kementerian Keuangan. Untuk memperoleh Sertifikat Ahli Kepabeanan maka seseorang harus lulus dalam Ujian Nasional Sertifikasi Ahli Kepabeanan yang diselenggarakan 3 kali setiap tahunnya, yaitu pada bulan Februari, Juni dan Oktober.</p>
                                        <br>
                                        <p style="text-align: justify;">Dasar Hukum mengenai penyelenggaraan Ujian Sertifikasi Ahli Kepabeanan sesuai dengan amanat Pasal 29 UU No.10 Tahun 1995 tentang Kepabeanan sebagaimana telah diubah dengan UU No.17 Tahun 2006. Dalam pasal 29 menyebutkan bahwa dalam hal importir tidak dapat melakukan pengurusan dokumen di kantor Pelayanan Bea dan Cukai, mereka dapat menguasakannya kepada Pengusaha Pengurusan Jasa Kepabeanan (PPJK).</p>
                                        <br>
                                        <p style="text-align: justify;">Di dalam Peraturan Menteri Keuangan RI Nomer 59/PMK.04/2014 tentang Registrasi Kepabeanan menyebutkan bahwa untuk dapat melakukan pemenuhan semua kewajiban kepabeanan, maka setiap pengguna jasa wajib melakukan registrasi Kepabeanan kepada Direktorat Jenderal Bea dan Cukai. Salah satu persyaratan dalam pengajuan registrasi Kepabeanan maka pengguna jasa (khususnya PPJK) harus memiliki pegawai yang berkualifikasi sebagai Ahli Pabean yang dibuktikan dengan bukti pendukung berupa Sertifikat Ahli Kepabeanan. Dengan demikian keberadaan Ahli Kepabeanan menjadi sangat penting dan mutlak diperlukan oleh seluruh pengguna jasa kepabeanan, khususnya PPJK.</p>
                                        <br>
                                        <p style="text-align: justify;">Dengan latar belakang tersebut di atas, Sekolah Ekspor Impor berupaya secara rutin menyelenggarakan Diklat Ahli Kepabeanan melalui kelas offline guna mempersiapkan para peserta sebaik mungkin untuk dapat mengikuti serta Lulus Ujian Nasional Sertifikasi Kepabeanan yang diselenggarakan oleh Badan Pendidikan dan Pelatihan Keuangan (BPPK), Kementerian Keuangan Republik Indonesia.</p>
                                        <br>
                                        <br>
                                        <br>
                                        <h5>LOKASI: RAWAMANGUN, JAKARTA TIMUR</h5>
                                        <hr>
                                        <p style="text-align: justify;">
                                            Kami menggunakan Lokasi Rawamangun untuk Offline Class.
                                            Metode belajar interaktif dimana para peserta dan pengajar bertatap muka langsung secara fisik.
                                            Materi Kurikulum Kelas Offline Zoom Meeting sama identik dengan Kelas Offline Eksekutif.
                                            Begitu pula dengan jadwal pelatihan, tidak berbeda.
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="w3-row">
                                            <div class="w3-col s6 w3-padding-small">
                                                <h5>TUJUAN PELATIHAN</h5>
                                                <hr>
                                                <ol>
                                                    <li>Peserta mempunyai Kompetensi dan Pengetahuan Umum yang kuat tentang:
                                                        <ul type="-" class="ps-4">
                                                            <li>Undang-Undang Kepabeanan.</li>
                                                            <li>Tatalaksana Impor.</li>
                                                            <li>Tatalaksana Ekspor.</li>
                                                            <li>Fasilitas Kepabeanan.</li>
                                                            <li>Fasilitas Kawasan (TPB, FTZ, KEK).</li>
                                                            <li>Perbendaharaan Pabean.</li>
                                                            <li>Sanksi Administrasi.</li>
                                                            <li>Keberatan dan Banding.</li>
                                                            <li>Ketentuan Larangan dan Pembatasan.</li>
                                                            <li>BTD, BDN, dan BMN.</li>
                                                            <li>Sistem Klasifikasi Barang.</li>
                                                            <li>Sistem Nilai Pabean.</li>
                                                        </ul>
                                                    </li>
                                                    <li>Drilling Latihan Soal dan pembahasannya. Simulasi Tryout Ujian Ahli Kepabeanan melalui Quiz Online.</li>
                                                    <li>Peserta memiliki Strategi Khusus untuk dapat Lulus Ujian Nasional Sertifikasi Ahli Kepabeanan yang diselenggarakan oleh BPPK Kementerian Keuangan RI dengan hasil yang optimal.</li>
                                                </ol>
                                            </div>
                                            <div class="w3-col s6 w3-padding-small">
                                                <h5>SYARAT PENDAFTARAN</h5>
                                                <hr>
                                                <p style="text-align: justify;">
                                                <ol>
                                                    <li>Usia minimal 18 tahun.</li>
                                                    <li>Minimal lulusan SMA/SMU atau sederajat.</li>
                                                    <li>Melampirkan salinan asli KTP dan Ijasah Terakhir.</li>
                                                    <li>Melampirkan pas foto 4×6 terbaru.</li>
                                                    <li>Melampirkan Surat Tugas dari Perusahaan ( jika dibiayai oleh perusahaan )</li>
                                                    <li>Membayar Biaya Diklat
                                                        <!-- <text style="text-decoration:line-through"><?= $reguler_course_fee_rp ?></text>  -->
                                                        <?= $offline_course_fee_promo_rp ?>
                                                    </li>
                                                </ol>
                                                </p>
                                            </div>
                                        </div>

                                        <br>
                                        <br>
                                        <h5>FASILITAS PELATIHAN</h5>
                                        <hr>
                                        <p style="text-align: justify;">
                                        <ol>
                                            <li>E-Book Materi Kurikulum Pelatihan Terkini dan Sistematis.</li>
                                            <li>Pengajar yang Berpengalaman.</li>
                                            <li>7x Pertemuan Kelas Pembahasan Materi (@ 6 jam).</li>
                                            <li>3x Tryout Komprehensif dan Pembahasan.</li>
                                            <li>6x Pertemuan Kelas Drilling Ujian (@ 3 jam).</li>
                                            <li>E-Certificate Keikutsertaan Diklat.</li>
                                        </ol>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-curiculum" role="tabpanel" aria-labelledby="pills-curiculum-tab">
                                        <h4>Kurikulum</h4>
                                        <hr>
                                        <p style="text-align: justify;">
                                        <ol>
                                            <li>Undang-Undang Kepabeanan.</li>
                                            <li>Tatalaksana Impor.</li>
                                            <li>Tatalaksana Ekspor.</li>
                                            <li>Fasilitas Kepabeanan.</li>
                                            <li>Fasilitas Kawasan (TPB, FTZ, KEK).</li>
                                            <li>Perbendaharaan Pabean.</li>
                                            <li>Sanksi Administrasi.</li>
                                            <li>Keberatan dan Banding.</li>
                                            <li>Ketentuan Larangan dan Pembatasan.</li>
                                            <li>BTD, BDN, dan BMN.</li>
                                            <li>Sistem Klasifikasi Barang.</li>
                                            <li>Sistem Nilai Pabean.</li>
                                        </ol>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-announcement" role="tabpanel" aria-labelledby="pills-announcement-tab">
                                        <h4>Pendaftaran Peserta Offline Class</h4>
                                        <br>
                                        <h5>Diklat Ahli Kepabeanan PPJK, Periode: <text style="color:orange"><?= $batch ?></text></h5>
                                        <br>
                                        <br>
                                        <ol>
                                            <li>
                                                <b>MASA PENDAFTARAN</b><br>
                                                <p style="text-align: justify;">Pendaftaran dibuka tanggal <?= $batch_open ?> dan akan ditutup pada tanggal <?= $batch_close ?>.
                                                    Peserta dapat mendaftarkan diri dengan cara mengisi Formulir Pendaftaran Online dan langsung melakukan Transaksi Pembayaran Online melalui website SEI ini.</p>
                                            </li>
                                            <br>
                                            <li>
                                                <b>MATERI DIKLAT</b><br>
                                                <p style="text-align: justify;">Materi Diklat berupa soft copy, video pembelajaran, Quiz dan Try Out akan diberikan pada sesi pertemuan.</p>
                                            </li>
                                            <br>
                                            <li>
                                                <b>SERTIFIKAT KEIKUTSERTAAN (<i>CERTIFICATE OF ATTENDANCE</i>)</b><br>
                                                <p style="text-align: justify;">Sertifikat Keikutsertaan Diklat akan diberikan kepada setiap Peserta setelah periode Diklat berakhir.</p>
                                            </li>
                                            <br>
                                            <!-- <li>
                                                <b>JAMINAN UANG KEMBALI</b><br>
                                                <p style="text-align: justify;">Peserta Diklat yang belum lulus Ujian Nasional Sertifikasi Ahli Kepabeanan yang diselenggarakan oleh Badan Pendidikan dan Pelatihan Keuangan (BPPK) Kementerian Keuangan Republik Indonesia, berhak atas pengembalian uang sebesar Rp 1.000.000,- dengan syarat:</p>
                                                <ol class="ps-4">
                                                    <li>Terdapat Bukti mengikuti Ujian,</li>
                                                    <li>Kehadiran minimal 90%, dan</li>
                                                    <li>Lulus Try Out 3 kali.</li>
                                                </ol>
                                            </li>
                                            <br> -->
                                            <li>
                                                <b>BIAYA PELATIHAN</b><br>
                                                <p style="text-align: justify;">Biaya Diklat Ahli Kepabeanan PPJK Kelas Offline Eksekutif adalah
                                                    <!-- <text style="text-decoration:line-through"><?= $reguler_course_fee_rp ?></text>  -->
                                                    <?= $offline_course_fee_promo_rp ?> / peserta. Biaya ini belum termasuk Biaya Ujian Sertifikasi Ahli Kepabeanan oleh Pusdiklat Bea Cukai.
                                                </p>
                                            </li>
                                            <br>
                                            <li>
                                                <b>PEMBAYARAN SECARA ANGSURAN (CICILAN)</b><br>
                                                <p style="text-align: justify;">
                                                    Pembayaran Biaya Diklat dapat diangsur (dicicil), dengan termin pembayaran sebagai berikut:
                                                <ol type="a" class="ps-4">
                                                    <li>Pembayaran Pertama: Rp 2.800.000 paling lambat sebelum sesi 1 Pembelajaran.</li>
                                                    <li>Pembayaran Kedua: Rp 2.500.000 paling lambat 28 April 2023.</li>
                                                    <li>Pembayaran Ketiga: Rp 2.000.000 paling lambat 19 Mei 2023.</li>
                                                </ol>
                                                </p>
                                            </li>
                                            <br>
                                            <li>
                                                <b>METODE PEMBAYARAN</b><br>
                                                <p style="text-align: justify;">
                                                    Transfer Bank.
                                                    <br>
                                                    Jangan lupa untuk melakukan Konfirmasi Pembayaran setelah transfer.
                                                    <br>BRI, Nomer Rekening: 125601000128563, Atas Nama: Surya Eka Internusa
                                                </p>
                                            </li>
                                        </ol>
                                    </div>

                                    <div class="tab-pane fade" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
                                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">DAFTAR SEKARANG</button> -->
                                        <a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp ?>" target="_blank" class="btn btn-primary">DAFTAR SEKARANG</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="<?= base_url() ?>">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layouts/footer'); ?>

    <?= $this->endSection(); ?>