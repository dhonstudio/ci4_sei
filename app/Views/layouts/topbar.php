<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Jakarta Timur, DKI, Indonesia 13430
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="far fa-clock marginl-3"></i> Sabtu, 08.00 - 15.15
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="<?= $instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?= $telegramgroup ?>" target="_blank"><i class="fab fa-telegram"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="<?= $telegram ?>" target="_blank"><i class="fab fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$topbar_menus = [
    [
        'title'    => 'PROGRAM',
        'width'    => 250,
        'children'  => [
            [
                'url'    => 'courses/reguler',
                'title'    => 'KELAS REGULER'
            ],
            [
                'url'    => 'courses/index/inhouse',
                'title'    => 'INHOUSE TRAINING'
            ],
        ],
    ],
    [
        'title'    => 'PROFIL',
        'width'    => 200,
        'children'  => [
            [
                'url'    => '#about',
                'title'    => 'TENTANG KAMI'
            ],
            [
                'url'    => '#teacher',
                'title'    => 'PENGAJAR'
            ],
        ],
    ],
    [
        'title' => 'KONTAK',
        'url'    => '#contact'
    ],
    [
        'title'    => 'MASUK',
        'width'    => 200,
        'children'  => [
            [
                'url'    => '#about',
                'title'    => 'MASUK'
            ],
            [
                'url'    => '#teacher',
                'title'    => 'DAFTAR'
            ],
        ],
    ],
]
?>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="<?= $assets . 'sei/img/new_logo.png' ?>" alt="Logo SEI" style="width: 82px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?= base_url('#top') ?>" class="active">Beranda</a></li>
                        <?php foreach ($topbar_menus as $key => $tm) : ?>
                            <?php if (isset($tm['children'])) : ?>
                                <li class="has-sub">
                                    <a href="javascript:void(0)"><?= $tm['title'] ?></a>
                                    <ul class="sub-menu">
                                        <?php foreach ($tm['children'] as $key => $c) : ?>
                                            <li><a href="<?= base_url($c['url']) ?>"><?= $c['title'] ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <li><a href="<?= base_url($tm['url']) ?>"><?= $tm['title'] ?></a></li>
                            <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->