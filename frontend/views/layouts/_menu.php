<?php

use common\models\Article;

$current = $_SERVER['REQUEST_URI'];
?>
<div class="header_top_bar_container clearfix">
    <div class="header_top_bar">
        <form class="search" action="#" method="get">
            <input type="text" name="s" placeholder="Pencarian..." value="Pencarian..." class="search_input hint">
            <input type="submit" class="search_submit" value="">
        </form>
        <ul class="social_icons clearfix">
            <li>
                <a href="mailto:infobkd@sampangkab.go.id" class="social_icon mail" title="mail">
                    &nbsp;
                </a>
            </li>
        </ul>
        <div class="latest_news_scrolling_list_container">
            <ul>
                <li class="category">HEADLINES</li>
                <li class="left"><a href="#"></a></li>
                <li class="right"><a href="#"></a></li>
                <li class="posts" style="width: 500px">
                    <ul class="latest_news_scrolling_list">
                        <?php
                        $top = Article::find()->where(['article_category_id' => [50, 51], 'publish' => 1])->orderBy('RAND()')->limit(3)->all();
                        foreach ($top as $val) {
                            echo '<li><a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">' . $val->title . '</a></li>';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="header_container">
    <div class="header clearfix">
        <div class="logo">
            <img src="<?= Yii::$app->homeUrl ?>img/logo.png"/>
            <h1><a href="<?= Yii::$app->homeUrl ?>" title="BKD Sampang"></a></h1>
            <h4>BADAN KEPEGAWAIAN DAERAH<br/>Kabupaten Sampang</h4>
        </div>
    </div>
</div>
<div class="menu_container clearfix">
    <nav>
        <ul class="sf-menu">
            <li class="<?= ($current == Yii::$app->urlManager->createUrl('home')) ? "selected" : ""; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl('home') ?>" title="Home">
                    Home
                </a>
            </li>
            <li class="submenu">
                <a href="#">
                    Profil
                </a>
                <ul>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/profil-bkd-kabupaten-sampang') ?>" title="About Style 1">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/visi-dan-misi') ?>" title="About Style 2">
                            Visi & Misi
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/struktur-organisasi') ?>" title="Default">
                            Struktur Organisasi
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/sambutan-kepala-bkd') ?>" title="404 Not Found">
                            Kepala BKD
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?= ($current == Yii::$app->urlManager->createUrl('news/persyaratan')) ? "selected" : ""; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl('news/persyaratan') ?>">
                    Persyaratan
                </a>
            </li>
            <li class="submenu">
                <a href="#">
                    Layanan
                </a>
                <ul>
                    <li>
                        <a href="#">
                            Kepala Badan
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/kesekretariatan') ?>">
                            Kesekretariatan
                        </a>
                        <ul>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-umum') ?>" >
                                    Bagian Umum
                                </a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-keuangan') ?>" >
                                    Bagian Keuangan
                                </a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-program') ?>" >
                                    Bagian Program
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pemembangan-karir') ?>">
                            Pengembangan karir
                        </a>
                        <ul>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-formasi') ?>" >
                                    Bidang Formasi
                                </a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pengadaan') ?>" >
                                    Pengembangan Pengadaan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-mutasi') ?>">
                            Bidang Mutasi
                        </a>
                        <ul>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-struktural') ?>" >
                                    Bidang Struktural
                                </a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-fungsional') ?>" >
                                    Bidang Fungsional
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pembinaan-dan-kesejahteraan-pegawai') ?>">
                            Pembinaan dan kesejahteraan pegawai
                        </a>
                        <ul>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pembinaan') ?>">
                                    Bidang Pembinaan
                                </a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-kesejahteraan') ?>" >
                                    Bidang Kesejahteraan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pendidikan-dan-pelatihan') ?>">
                            Bidang pendidikan dan pelatihan
                        </a>
                        <ul>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-diklat-tf') ?>" >
                                    Bidang Diklat TF
                                </a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-diklat-pim') ?>" >
                                    Bidang Diklat PIM
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="<?= ($current == Yii::$app->urlManager->createUrl('news/berita')) ? "selected" : ""; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl('news/berita') ?>" >
                    Berita
                </a>
            </li>
            <li class="<?= ($current == Yii::$app->urlManager->createUrl('download')) ? "selected" : ""; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl('download') ?>">
                    Download
                </a>
            </li>
            <li class="<?= ($current == Yii::$app->urlManager->createUrl('tanya-jawab')) ? "selected" : ""; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl('tanya-jawab') ?>">
                    Tanya Jawab
                </a>
            </li>
            <li class="<?= ($current == Yii::$app->urlManager->createUrl('contact-us')) ? "selected" : ""; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl('contact-us') ?>">
                    Kontak
                </a>
            </li>
        </ul>
    </nav>
    <div class="mobile_menu_container">
        <a href="#" class="mobile-menu-switch">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </a>
        <div class="mobile-menu-divider"></div>
        <nav>
            <ul class="mobile-menu">
                <li class="<?= ($current == Yii::$app->urlManager->createUrl('home')) ? "selected" : ""; ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl('home') ?>" title="Home">
                        Home
                    </a>
                </li>
                <li class="submenu">
                    <a href="#">
                        Profil
                    </a>
                    <ul>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/profil-bkd-kabupaten-sampang') ?>" title="About Style 1">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/visi-dan-misi') ?>" title="About Style 2">
                                Visi & Misi
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/struktur-organisasi') ?>" title="Default">
                                Struktur Organisasi
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/sambutan-kepala-bkd') ?>" title="404 Not Found">
                                Kepala BKD
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($current == Yii::$app->urlManager->createUrl('news/persyaratan')) ? "selected" : ""; ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl('news/persyaratan') ?>">
                        Persyaratan
                    </a>
                </li>
                <li class="submenu">
                    <a href="#">
                        Layanan
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                Kepala Badan
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/kesekretariatan') ?>">
                                Kesekretariatan
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-umum') ?>" >
                                        Bagian Umum
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-keuangan') ?>" >
                                        Bagian Keuangan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-program') ?>" >
                                        Bagian Program
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pemembangan-karir') ?>">
                                Pengembangan karir
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bagian-formasi') ?>" >
                                        Bidang Formasi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pengadaan') ?>" >
                                        Pengembangan Pengadaan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-mutasi') ?>">
                                Bidang Mutasi
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-struktural') ?>" >
                                        Bidang Struktural
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-fungsional') ?>" >
                                        Bidang Fungsional
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pembinaan-dan-kesejahteraan-pegawai') ?>">
                                Pembinaan dan kesejahteraan pegawai
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pembinaan') ?>">
                                        Bidang Pembinaan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-kesejahteraan') ?>" >
                                        Bidang Kesejahteraan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-pendidikan-dan-pelatihan') ?>">
                                Bidang pendidikan dan pelatihan
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-diklat-tf') ?>" >
                                        Bidang Diklat TF
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('article/bidang-diklat-pim') ?>" >
                                        Bidang Diklat PIM
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="<?= ($current == Yii::$app->urlManager->createUrl('news/berita')) ? "selected" : ""; ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl('news/berita') ?>" >
                        Berita
                    </a>
                </li>
                <li class="<?= ($current == Yii::$app->urlManager->createUrl('download')) ? "selected" : ""; ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl('download') ?>">
                        Download
                    </a>
                </li>
                <li class="<?= ($current == Yii::$app->urlManager->createUrl('tanya-jawab')) ? "selected" : ""; ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl('tanya-jawab') ?>">
                        Tanya Jawab
                    </a>
                </li>
                <li class="<?= ($current == Yii::$app->urlManager->createUrl('contact-us')) ? "selected" : ""; ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl('contact-us') ?>">
                        Kontak
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>	