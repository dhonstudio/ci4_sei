<?= $this->extend($git_assets . 'ci4_views/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts/topbar'); ?>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Sekolah Ekspor Impor</h6>
                <h2>Inhouse Training</h2>
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
                                        <text style="margin-left: 10px;">KONTAK KAMI</text>
                                    </span>
                                </div>
                                <div class="date">
                                    <h6>Jadwal Tertentu <span></span></h6>
                                </div>
                                <a href="#"><img src="" alt=""></a>
                            </div>
                            <div class="down-content">
                                <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">DESKRIPSI</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-registration-tab" data-bs-toggle="pill" data-bs-target="#pills-registration" type="button" role="tab" aria-controls="pills-registration" aria-selected="false">PENDAFTARAN</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                        <h4>Diklat Ahli Kepabeanan PPJK</h4>
                                        <p>KELAS <text style="color:orange">INHOUSE TRAINING</text></p>
                                        <p>PERIODE <text style="color:orange">KONTAK KAMI</text></p>
                                        <br>
                                        <br>
                                        <h5>PENDAHULUAN</h5>
                                        <hr>
                                        <p style="text-align: justify;">Pemahanan terhadap peraturan kepabeanan sangat diperlukan bagi pihak-pihak yang berkecimpung didalam kegiatan ekspor impor. Dengan pemahanan yang memumpuni dan update perkembangan peraturan kepabeanan yang terkini dapat memberikan kelancaran dalam pengurusan dokumen kepabeanan dan terhindar dari permasalahan di bidang kepabeanan. Sekolah Ekspor Impor menyelenggarakan program In House Training bagi perusahaan atau Lembaga yang membutuhkan tambahan pengetahuan mengenai update peraturan dibidang kepabeanan. Melalui program ini peserta dapat menentukan tempat, waktu, dan materi yang dikehendaki sesuai dengan kebutuhan serta keinginan organisasi perusahaan. Untuk informasi lebih jelas silahkan isi form dan menghubungi kontak kami.</p>
                                        <br>
                                        <br>
                                        <br>
                                        <h5>TUJUAN PELATIHAN</h5>
                                        <hr>
                                        <ol>
                                            <li>Peserta mempunyai Kompetensi dan Pengetahuan Umum yang kuat tentang Kepabeanan.</li>
                                            <li>Peserta mampu menerapkan pengetahuan tentang Kepabeanan dalam bidang kerjanya.</li>
                                        </ol>

                                        <br>
                                        <br>
                                        <h5>FASILITAS PELATIHAN</h5>
                                        <hr>
                                        <p style="text-align: justify;">
                                        <ol>
                                            <li>Materi Kurikulum Pelatihan Terkini dan Sistematis.</li>
                                            <li>Pengajar yang Berpengalaman.</li>
                                        </ol>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
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