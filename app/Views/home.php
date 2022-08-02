<?= $this->extend($git_assets . 'ci4_views/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts/topbar'); ?>

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>Lembaga Pendidikan dan Pelatihan</h6>
                        <h2>Ahli Kepabeanan</h2>
                        <p>Pelatihan Ahli Kepabeanan Sekolah Ekspor Impor disertai pembahasan materi ekspor impor, tugas, latihan soal yang dinilai secara otomatis dan ditinjau oleh tim pengajar, webinar, dan forum diskusi tanya jawab masalah Ekspor, Impor dan Kepabeanan.</p>
                        <div class="main-button-red">
                            <div class="scroll-to-section"><a href="#contact">Daftar Sekarang</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">

                    <div class="item">
                        <div class="icon">
                            <img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/service-icon-01.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Education</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Teachers</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Students</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Online Meeting</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Networking</h4>
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Pilihan Program</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Kurikulum</h4>
                    <ul>
                        <li><a href="#">International Trade</a></li>
                        <li><a href="#">UU Kepabeanan</a></li>
                        <li><a href="#">Prosedur Impor</a></li>
                        <li><a href="#">Prosedur Ekspor</a></li>
                        <li><a href="#">Sistem Nilai Pabean</a></li>
                    </ul>
                    <div class="main-button-red">
                        <a href="meetings.html">Lihat Seluruh Kurikulum</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>
                                        <text style="text-decoration:line-through;margin-right: 10px;"><?= $reguler_course_fee ?></text><br>
                                        <text style="margin-left: 10px;"><?= $reguler_course_fee_promo ?></text>
                                    </span>
                                </div>
                                <a href="<?= base_url('courses/reguler') ?>"><img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Sabtu <span></span></h6>
                                </div>
                                <br>
                                <a href="<?= base_url('courses/reguler') ?>">
                                    <h4>Kelas Reguler (1 Bulan)</h4>
                                </a>
                                <p>Kelas Persiapan Ahli Kepabeanan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Kontak Kami</span>
                                </div>
                                <a href="meeting-details.html"><img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Jadwal Tertentu <span></span></h6>
                                </div>
                                <br>
                                <a href="meeting-details.html">
                                    <h4>Inhouse Training</h4>
                                </a>
                                <p>Kelas Spesialisasi Perusahaan.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="apply-now" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="col-lg-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?= $assets . 'sei/img/testimonial_photos/' . $testimonials[$i]['photo'] ?>" alt="<?= $testimonials[$i]['name'] ?>" style="width:82px" class="w3-circle w3-hover-opacity">
                                    </div>
                                    <div class="col-8">
                                        <h3><?= $testimonials[$i]['name'] ?></h3>
                                        <p><?= $testimonials[$i]['testimonial'] ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Tentang Kami</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Sekolah Ekspor Impor adalah lembaga pendidikan private yang menyediakan jasa berupa Kelas Persiapan Ujian Sertifikasi Ahli Kepabeanan dan juga In House Training di bidang Kepabeanan Ekspor dan Impor.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Visi Kami</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Visi Sekolah Ekspor Impor adalah “Menciptakan Ahli Kepabeanan yang Berkualitas Untuk Membantu Kelancaran Arus Logistik Lintas Negara”</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Mandatory Knowledge: Apa Itu Ahli Kepabeanan</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ahli Kepabeanan adalah orang yang memiliki pengetahuan dan pemahaman tentang kepabeanan yang telah diberikan Sertifikat Ahli Kepabeanan yang dikeluarkan oleh Badan Pendidikan dan Pelatihan Kementerian Keuangan. Sederhananya, Ahli Kepabeanan adalah individu di luar Direktorat Jenderal Bea dan Cukai yang memiliki pengetahuan dan pemahaman dasar yang wajib dimiliki oleh pegawai Direktorat Jenderal Bea dan Cukai.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion last-accordion">
                        <div class="accordion-head">
                            <span>Mandatory Knowledge: Ujian Sertifikasi Ahli Kepabeanan</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ujian Sertifikasi Ahli Kepabeanan dilaksanakan 3 (tiga) periode dalam satu tahun yaitu pada bulan Februari, Juni, dan Oktober. Dalam kondisi-kondisi tertentu seperti pada masa Pandemi COVID-19, jadwal Ujian Sertifikasi Ahli Kepabeanan bisa berbeda dari biasanya. Ujian dapat dilaksanakan secara daring atau luring, dengan Lokasi pelaksanaan ujian luring adalah di Pusat Pendidikan dan Pelatihan Bea dan Cukai untuk wilayah Jakarta.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pengajar = [
    [
        'img'   => 'iqbal.jpg',
        'name'  => 'Muhammad Iqbal',
        'as'    => '<p class="w3-opacity w3-center">Praktisi Kepabeanan, Ekspor & Impor</p>',
        'description' => '<p style="min-height: 270px;">Lulusan kampus STAN dan S2 Manajemen di salah satu kampus ternama dengan predikat Cumlaude. Berpengalaman dalam dunia kepabeanan yang dibuktikan dengan menduduki berbagai jabatan penting di Direktorat Jenderal Bea dan Cukai dan juga aktif menjadi trainer di pelatihan-pelatihan ekspor dan impor hingga saat ini. Mempunyai pengalaman mengajar dan narasumber di Pusdiklat Bea dan Cukai dan salah satu Perguruan Tinggi Ternama di Indonesia. Memiliki spesialisasi di klasifikasi barang, fasilitas kepabeanan, tata laksana ekspor dan impor, hingga kegiatan pengawasan di bidang Kepabeanan.</p>'
    ],
    [
        'img'   => 'rikpan.jpg',
        'name'  => 'Rikpan Sitompul',
        'as'    => '<p class="w3-opacity w3-center">Praktisi Kepabeanan, Ekspor & Impor</p>',
        'description' => '<p style="min-height: 270px;">Lulusan Kampus STAN. Dengan predikat Cumlaude. Saat ini bertugas pada Direktorat Jenderal Bea dan Cukai, Kementerian Keuangan Republik Indonesia. Berpengalaman dan aktif dalam mengajar kepabeanan di berbagai Lembaga pelatihan dan perusahaan. Memiliki spesialisasi di klasifikasi barang, fasilitas kepabeanan, serta tata laksana ekspor dan impor.</p>'
    ],
    [
        'img'   => 'pracoyo.jpg',
        'name'  => 'Pracoyo Dwi W',
        'as'    => '<p class="w3-opacity w3-center">Praktisi Kepabeanan, Ekspor & Impor</p>',
        'description'    => '<p style="min-height: 270px;">Lulusan Kampus STAN. Saat ini bertugas pada Direktorat Jenderal Bea dan Cukai, Kementerian Keuangan Republik Indonesia. Berpengalaman dan aktif dalam mengajar kepabeanan di berbagai Lembaga pelatihan dan perusahaan. Pernah menjadi narasumber terkait teknis kepabeanan di salah satu Perguruan Tinggi Negeri Ternama di Indonesia. Memiliki spesialisasi di nilai pabean serta tata laksana ekspor dan impor.</p>'
    ],
    [
        'img'   => 'mramadhon.jpg',
        'name'  => 'Muhammad Ramadhon',
        'as'    => '<p class="w3-opacity w3-center">Praktisi Kepabeanan, Ekspor & Impor</p>',
        'description'    => '<p style="min-height: 270px;">Lulusan S1 Manajemen Universitas Indonesia dan Kampus STAN. Berpengalaman dalam dunia kepabeanan yang dibuktikan dengan keterlibatan di dalam beberapa tim penyusunan Peraturan Menteri Keuangan dan Peraturan Direktur Jenderal di Direktorat Jenderal Bea dan Cukai serta aktif menjadi trainer di berbagai lembaga pelatihan ekspor dan impor hingga saat ini. Memiliki spesialisasi di klasifikasi barang, tata laksana ekspor dan impor, hingga fasilitas kepabeanan.</p>'
    ],
    [
        'img'   => 'august.jpg',
        'name'  => 'August F Sebastian P',
        'as'    => '<p class="w3-opacity w3-center">Praktisi Kepabeanan, Ekspor & Impor</p>',
        'description'    => '<p style="min-height: 270px;">Lulusan Kampus STAN dengan predikat Cumlaude. Berpengalaman bekerja di Direktorat Jenderal Bea dan Cukai sebagai Auditor dan saat ini bekerja di salah satu perusahaan swasta ternama di Indonesia. Berpengalaman dan aktif mengajar kepabeanan dan juga sebagai pelaku ekspor. Memiliki spesialisasi di audit kepabeanan.</p>'
    ]
];
?>

<section class="our-courses" id="teacher">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Pengajar
                        <p class="text-secondary">Selama kurun waktu beberapa tahun terakhir, para Instruktur Pengajar Sekolah Ekspor Impor telah memberikan serangkaian materi kursus Ahli Kepabeanan PPJK dengan sistem pengajaran yang mampu membuat peserta menjadi lebih memahami kepabeanan.</p>
                    </h2>

                </div>

            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    <?php foreach ($pengajar as $key => $p) : ?>
                        <div class="item">
                            <img src="<?= $assets . 'sei/img/teachers/' . $p['img'] ?>" alt="Course One">
                            <div class="down-content">
                                <h4><?= $p['name'] ?></h4>
                                <div style="padding: 0 25px 25px 25px;" class="text-center">
                                    <?= $p['as'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Tentang Pengalaman Pengajar</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div><text class="count-digit">200</text> <text style="color:#f5a425;margin: 5px 0px;font-weight: 700;font-size: 36px;">++</text></div>
                                    <div class="count-title">Peserta Pengajaran</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div><text class="count-digit">5</text> <text style="color:#f5a425;margin: 5px 0px;font-weight: 700;font-size: 36px;">+</text></div>
                                    <div class="count-title">Lembaga Pengajaran</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content new-students">
                                    <div><text class="count-digit">30</text> <text style="color:#f5a425;margin: 5px 0px;font-weight: 700;font-size: 36px;">++</text></div>
                                    <div class="count-title">Modul, Soal, dan Materi Presentasi</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div><text class="count-digit">10</text> <text style="color:#f5a425;margin: 5px 0px;font-weight: 700;font-size: 36px;">+</text></div>
                                    <div class="count-title">Keikutsertaan Penyusunan Peraturan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="video" style="background-image: url(<?= $assets . "sei/img/video-item-bg.png" ?>);">
                    <a href="https://youtu.be/Cju4R76HFuk" target="_blank">
                        <img src="<?= $assets . 'vendor/templatemo_edu_meeting/' ?>assets/images/play-icon.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Hubungi Kami</h2>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="NAMA...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="EMAIL...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="PESAN..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">KIRIM</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Whatsapp</h6>
                            <a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp ?>" target="_blank"><span><?= $whatsapp_ ?></span></a>
                        </li>
                        <li>
                            <h6>Email</h6>
                            <a href="mailto:<?= $email ?>"><span><?= $email ?></span></a>
                        </li>
                        <li>
                            <h6></h6>
                            <span><?= $address ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layouts/footer'); ?>

    <?= $this->endSection(); ?>