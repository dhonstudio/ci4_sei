<?= $this->extend($git_assets . 'ci4_views/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts/topbar'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Sekolah Ekspor Impor</h6>
                <h2>Kelas Reguler</h2>
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
                                        <text style="text-decoration:line-through;margin-right: 10px;"><?= $reguler_course_fee ?></text><br>
                                        <text style="margin-left: 10px;"><?= $reguler_course_fee_promo ?></text>
                                    </span>
                                </div>
                                <div class="date">
                                    <h6><?= $batch_start[0] ?> <span><?= $batch_start[1] ?></span></h6>
                                </div>
                                <a href="meeting-details.html"><img src="<?= base_url('assets/templatemo_edu_meeting/') ?>assets/images/single-meeting.jpg" alt=""></a>
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
                                        <p>KELAS <text style="color:orange">REGULER</text></p>
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
                                        <p style="text-align: justify;">Dengan latar belakang tersebut di atas, Sekolah Ekspor Impor berupaya secara rutin menyelenggarakan Diklat Ahli Kepabeanan melalui kelas online guna mempersiapkan para peserta sebaik mungkin untuk dapat mengikuti serta Lulus Ujian Nasional Sertifikasi Kepabeanan yang diselenggarakan oleh Badan Pendidikan dan Pelatihan Keuangan (BPPK), Kementerian Keuangan Republik Indonesia.</p>
                                        <br>
                                        <br>
                                        <br>
                                        <h5>ZOOM MEETING</h5>
                                        <hr>
                                        <p style="text-align: justify;">Kami menggunakan Zoom Meeting untuk Kelas Reguler. Metode belajar jarak jauh “distance learning” interaktif dimana para peserta dan pengajar tidak bertatap muka langsung secara fisik.</p>
                                        <br>
                                        <p style="text-align: justify;">Materi Kurikulum Kelas Online Zoom Meeting sama identik dengan Kelas Offline Eksekutif. Begitu pula dengan jadwal pelatihan, tidak berbeda. Para peserta wajib menggunakan akun Zoom yang terdaftar pada website ini.</p>
                                        <br>
                                        <p style="text-align: justify;">Kelas virtual Zoom Meeting dapat diikuti oleh para peserta dari dan di manapun berada, selama akses internet dimungkinkan. Kendala jarak geografis bukan lagi menjadi hambatan utama dalam mengikuti kegiatan Diklat Ahli Kepabeanan.</p>
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
                                                            <li>Prosedur Impor.</li>
                                                            <li>Prosedur Ekspor.</li>
                                                            <li>Klasifikasi Barang Menurut BTKI.</li>
                                                            <li>Sistem Nilai Pabean.</li>
                                                            <li>Fasilitas Kepabeanan.</li>
                                                            <li>Tempat Penimbunan Berikat.</li>
                                                            <li>Administrasi Perbendaharaan Pabean.</li>
                                                            <li>Sistem EDI Pabean dan Lartas</li>
                                                            <li>INSW.</li>
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
                                                    <li>Membayar Biaya Diklat <text style="text-decoration:line-through"><?= $reguler_course_fee_rp ?></text> <?= $reguler_course_fee_promo_rp ?></li>
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
                                            <li>Materi Kurikulum Pelatihan Terkini dan Sistematis.</li>
                                            <li>Pengajar yang Berpengalaman.</li>
                                            <li>5x Pertemuan Online.</li>
                                            <li>Sertifikat Keikutsertaan Diklat.</li>
                                            <li>150++ jam Video Pembelajaran. Materi Training Ahli Kepabeanan PPJK.</li>
                                            <li>1.000++ Soal Latihan Pilihan Ganda via Aplikasi Classmaker dan Quizziz.</li>
                                            <li>200++ Contoh Soal Ujian Essay dan Pilihan Ganda Ahli Kepabeanan PPJK Terdahulu beserta Pembahasan.</li>
                                            <li>Jaminan Uang Kembali Senilai Rp 1.000.000,- bagi para peserta yang belum lulus Ujian Nasional Sertifikasi Ahli Kepabeanan.</li>
                                        </ol>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-curiculum" role="tabpanel" aria-labelledby="pills-curiculum-tab">
                                        <h4>Kurikulum</h4>
                                        <hr>
                                        <p style="text-align: justify;">
                                        <ol>
                                            <li>International Trade</li>
                                            <li>UU Kepabeanan</li>
                                            <li>Tata Laksana Kepabeanan Impor</li>
                                            <li>Tata Laksana Kepabeanan Ekspor</li>
                                            <li>Sistem Nilai Pabean</li>
                                            <li>Sistem Klasifikasi Barang</li>
                                            <li>Fasilitas Kepabeanan</li>
                                            <li>Tempat Penimbunan Berikat</li>
                                            <li>Penyetoran, Penagihan, Pengembalian, dan Jaminan</li>
                                            <li>Sanksi, Keberatan, dan Banding</li>
                                            <li>Audit Kepabeanan</li>
                                            <li>Larangan dan Pembatasan, BTD, BDN, BMN</li>
                                            <li>Drafting Pemberitahuan Pabean</li>
                                        </ol>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-announcement" role="tabpanel" aria-labelledby="pills-announcement-tab">
                                        <h4>Pendaftaran Peserta Kelas Reguler</h4>
                                        <br>
                                        <h5>Diklat Ahli Kepabeanan PPJK, Periode: <text style="color:orange"><?= $batch ?></text></h5>
                                        <br>
                                        <br>
                                        <ol>
                                            <li>
                                                <b>MASA PENDAFTARAN</b><br>
                                                <text style="text-align: justify;">Pendaftaran dibuka tanggal <?= $batch_open ?> dan akan ditutup pada tanggal <?= $batch_close ?>.
                                                    Peserta dapat mendaftarkan diri dengan cara mengisi Formulir Pendaftaran Online dan langsung melakukan Transaksi Pembayaran Online melalui website SEI ini.</text>
                                            </li>
                                            <br>
                                            <li>
                                                <b>MATERI DIKLAT</b><br>
                                                <text style="text-align: justify;">Materi Diklat berupa soft copy, video pembelajaran, Quiz dan Try Out akan diberikan pada sesi pertemuan.</text>
                                            </li>
                                            <br>
                                            <li>
                                                <b>SERTIFIKAT KEIKUTSERTAAN (<i>CERTIFICATE OF ATTENDANCE</i>)</b><br>
                                                <text style="text-align: justify;">Sertifikat Keikutsertaan Diklat akan diberikan kepada setiap Peserta setelah periode Diklat berakhir.</text>
                                            </li>
                                            <br>
                                            <li>
                                                <b>JAMINAN UANG KEMBALI</b><br>
                                                <text style="text-align: justify;">Peserta Diklat yang belum lulus Ujian Nasional Sertifikasi Ahli Kepabeanan yang diselenggarakan oleh Badan Pendidikan dan Pelatihan Keuangan (BPPK) Kementerian Keuangan Republik Indonesia, berhak atas pengembalian uang sebesar Rp 1.000.000,- dengan syarat:</text>
                                                <ol class="ps-4">
                                                    <li>Terdapat Bukti mengikuti Ujian,</li>
                                                    <li>Kehadiran minimal 90%, dan</li>
                                                    <li>Lulus Try Out 3 kali.</li>
                                                </ol>
                                            </li>
                                            <br>
                                            <li>
                                                <b>BIAYA PELATIHAN</b><br>
                                                <text style="text-align: justify;">Biaya Diklat Ahli Kepabeanan PPJK Kelas Offline Eksekutif adalah <text style="text-decoration:line-through"><?= $reguler_course_fee_rp ?></text> <?= $reguler_course_fee_promo_rp ?> / peserta. Biaya ini belum termasuk Biaya Ujian Sertifikasi Ahli Kepabeanan oleh Pusdiklat Bea Cukai.</text>
                                            </li>
                                            <br>
                                            <li>
                                                <b>PEMBAYARAN SECARA ANGSURAN (CICILAN)</b><br>
                                                <text style="text-align: justify;">
                                                    Pembayaran Biaya Diklat dapat diangsur (dicicil), dengan termin pembayaran sebagai berikut:
                                                    <ol type="a" class="ps-4">
                                                        <li>Pembayaran Pertama: Uang Muka sebesar 50% sebelum Diklat dimulai.</li>
                                                        <li>Pembayaran Kedua: Pelunasan sebesar 50% setelah 3 sesi pertemuan Diklat dimulai.</li>
                                                    </ol>
                                                </text>
                                            </li>
                                            <br>
                                            <li>
                                                <b>METODE PEMBAYARAN</b><br>
                                                <text style="text-align: justify;">
                                                    Transfer Bank.
                                                    <br>
                                                    Jangan lupa untuk melakukan Konfirmasi Pembayaran setelah transfer.
                                                    <br>BRI, Nomer Rekening: 125601000128563, Atas Nama: Surya Eka Internusa
                                                </text>
                                            </li>
                                        </ol>
                                    </div>

                                    <div class="tab-pane fade" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">DAFTAR SEKARANG</button>
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