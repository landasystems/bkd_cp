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
                <li class="posts">
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
                <li class="submenu selected">
                    <a href="home.html" title="Home">
                        Home
                    </a>
                    <ul>
                        <li>
                            <a href="home.html" title="Home Style 1">
                                Home Style 1
                            </a>
                        </li>
                        <li>
                            <a href="home_2.html" title="Home Style 2">
                                Home Style 2
                            </a>
                        </li>
                        <li>
                            <a href="home_3.html" title="Home Style 3">
                                Home Style 3
                            </a>
                        </li>
                        <li>
                            <a href="home_4.html" title="Home Style 3">
                                Home Style 4
                            </a>
                        </li>
                        <li>
                            <a href="home_5.html" title="Home Style 5">
                                Home Style 5
                            </a>
                        </li>
                        <li>
                            <a href="home_6.html" title="Home Style 6">
                                Home Style 6
                            </a>
                        </li>
                        <li class="selected">
                            <a href="home_7.html" title="Home Style 7">
                                Home Style 7
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="about.html" title="Pages">
                        Pages
                    </a>
                    <ul>
                        <li>
                            <a href="about.html" title="About Style 1">
                                About Style 1
                            </a>
                        </li>
                        <li>
                            <a href="about_2.html" title="About Style 2">
                                About Style 2
                            </a>
                        </li>
                        <li>
                            <a href="default.html" title="Default">
                                Default
                            </a>
                        </li>
                        <li>
                            <a href="404.html" title="404 Not Found">
                                404 Not Found
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="post.html" title="Post Formats">
                        Post Formats
                    </a>
                    <ul>
                        <li>
                            <a href="post.html">
                                Post Default
                            </a>
                        </li>
                        <li>
                            <a href="post_gallery.html" title="Post Gallery">
                                Post Gallery
                            </a>
                        </li>
                        <li>
                            <a href="post_small_image.html" title="Post Small Image">
                                Post Small Image
                            </a>
                        </li>
                        <li>
                            <a href="post_video.html" title="Post Video YouTube">
                                Post Video Youtube
                            </a>
                        </li>
                        <li>
                            <a href="post_video_2.html" title="Post Video Vimeo">
                                Post Video Vimeo
                            </a>
                        </li>
                        <li>
                            <a href="post_soundcloud.html" title="Post Soundcloud">
                                Post Soundcloud
                            </a>
                        </li>
                        <li>
                            <a href="post_review.html" title="Post Review Style 1">
                                Post Review Style 1
                            </a>
                        </li>
                        <li>
                            <a href="post_review_2.html" title="Post Review Style 2">
                                Post Review Style 2
                            </a>
                        </li>
                        <li>
                            <a href="post_quote.html" title="Post Quote Style 1">
                                Post Quote Style 1
                            </a>
                        </li>
                        <li>
                            <a href="post_quote_2.html" title="Post Quote Style 2">
                                Post Quote Style 2
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="blog.html" >
                        Blog
                    </a>
                    <ul>
                        <li>
                            <a href="blog_small_slider.html" title="Blog Small Slider">
                                Blog Small Slider
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="blog.html" title="Blog 1 column">
                                Blog 1 Column
                            </a>
                            <ul>
                                <li>
                                    <a href="blog.html" >
                                        Blog With Right Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="blog_left_sidebar.html" >
                                        Blog With Left Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="blog_2_columns.html" title="Blog 2 columns">
                                Blog 2 Columns
                            </a>
                            <ul>
                                <li>
                                    <a href="blog_2_columns.html" title="Right Sidebar">
                                        Right Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="blog_2_columns_left_sidebar.html" title="Left Sidebar">
                                        Left Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog_3_columns.html" title="Blog 3 Columns">
                                Blog 3 Columns
                            </a>
                        </li>
                        <li>
                            <a href="search.html?s=Maecenas+Mauris" title="Search Page Template">
                                Search Page Template
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="authors.html" title="Authors">
                        Authors
                    </a>
                    <ul>
                        <li>
                            <a href="authors.html" title="Authors List">
                                Authors List
                            </a>
                        </li>
                        <li>
                            <a href="author.html" title="Author Single">
                                Author Single
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="category_health.html" title="Categories">
                        Categories
                    </a>
                    <ul>
                        <li>
                            <a href="category_health.html" title="Health">
                                Health
                            </a>
                        </li>
                        <li>
                            <a href="category_science.html" title="Science">
                                Science
                            </a>
                        </li>
                        <li>
                            <a href="category_sports.html" title="Sports">
                                Sports
                            </a>
                        </li>
                        <li>
                            <a href="category_world.html" title="World">
                                World
                            </a>
                        </li>
                        <li>
                            <a href="category_lifestyle.html" title="Lifestyle">
                                Lifestyle
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="contact.html" title="Contact">
                        Contact
                    </a>
                    <ul class="expand_left_contact">
                        <li>
                            <a href="contact.html" title="Contact Style 1">
                                Contact Style 1
                            </a>
                        </li>
                        <li>
                            <a href="contact_2.html" title="Contact Style 2">
                                Contact Style 2
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>	