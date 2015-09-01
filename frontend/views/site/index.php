<?php
$this->title = 'Badan Kepegawaian Daerah - Kabupaten Sampang';

use common\models\Article;
use common\models\Download;
?>
<div class="page_layout clearfix">
    <div class="row page_margin_top">
        <div class="column column_2_3">
            <ul class="small_slider">
                <?php
                $recent = Article::find()->where(['article_category_id' => [50, 51], 'publish' => 1])->orderBy('created DESC')->limit(4)->all();
                foreach ($recent as $val) {
                    echo '<li class="slide">
                    <a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">
                        <img ' . $val->imgSrc . ' alt="img">
                    </a>
                    <div class="slider_content_box">
                        <ul class="post_details simple">
                            <li class="date">
                                ' . date('d F Y', $val->created) . '
                            </li>
                        </ul>
                        <h2><a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">' . $val->title . '</a></h2>
                        <p class="clearfix">' . substr(strip_tags($val->content), 0, 100) . '</p>
                    </div>
                </li>';
                }
                ?>
            </ul>
            <div class='slider_posts_list_container'>
            </div>
            <h4 class="box_header">BERITA POPULER</h4>
            <div class="row">
                <?php
                $top = Article::find()->where(['article_category_id' => [50, 51], 'publish' => 1])->orderBy('hits DESC')->limit(4)->all();
                $i = 1;
                foreach ($top as $val) {
                    if ($i == 1 || $i == 3)
                        echo '<ul class="blog column column_1_2">';
                    echo '<li class="post">
                        <a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">
                            <div style="height:250px;overflow:hidden;" class="polaroid">
                            <img ' . $val->imgSrc . ' alt="img">
                            </div>
                        </a>
                        <h3 class="with_number">
                            <a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">' . $val->title . '</a>
                            <a class="comments_number" href="#" title="2 comments">' . $val->hits . '<span class="arrow_comments"></span></a>
                        </h3>
                        <ul class="post_details">
                            <li class="date">
                                ' . date('d F Y', $val->created) . '
                            </li>
                        </ul>
                        <p>' . substr(strip_tags($val->content), 0, 100) . '</p>
                        <a class="read_more" href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
                    </li>';
                    $i++;
                    if ($i == 3 || $i == 5)
                        echo '</ul>';
                }
                ?>
            </div>
        </div>
        <div class="column column_1_3">
            <h4 class="box_header">Sambutan Kepala BKD</h4>
            <ul class="blog small_margin clearfix">
                <li class="post">
                    <a href="<?= Yii::$app->urlManager->createUrl('article/profil-bkd-kabupaten-sampang') ?>">
                        <img src='img/kepala-bkd-sampang.jpg' alt='img' class="polaroid" style="width:95%">
                    </a>
                    <div class="post_content">
                        <p style="text-align: justify">Pertama-tama kami panjatkan puji syukur kehadirat Tuhan Yang Maha Kuasa, atas rahmat dan karunia-Nya sehingga PROFILE Badan Kepegawaian Daerah Kabupaten Sampang dapat diterbitkan. Sasaran dari suatu kegiatan hanya dapat dicapai dengan efektif dan efisien bila dapat dirumuskan dengan mempertimbangkan dinamika lingkungan.</p>
                        <ul class="post_details simple">
                            <li class="category"><a href="<?= Yii::$app->urlManager->createUrl('article/profil-bkd-kabupaten-sampang') ?>">Read More</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <h4 class="box_header page_margin_top_section">DOKUMEN TERBARU</h4>
            <ul class="list">
                <?php
                $row = Download::lists();
                foreach ($row as $r) {
                    echo '<li class="bullet style_1"><a href="' . Yii::$app->homeUrl . 'img/download/' . $r . '" title="' . $r . '">' . $r . '</a></li>';
                }
                ?>
            </ul>

            <h4 class="box_header page_margin_top_section">PERSYARATAN</h4>
            <div class="vertical_carousel_container clearfix">
                <ul class="blog small">
                    <?php
                    $syarat = Article::find()->where(['article_category_id' => 51, 'publish' => 1])->orderBy('created DESC')->limit(5)->all();
                    foreach ($syarat as $val) {
                        echo '<li class="post">
                        <div class="post_content">
                            <h5>
                                <a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">' . $val->title . '</a>
                            </h5>
                            <ul class="post_details simple">
                                <li class="date">
                                    ' . date('d F Y', $val->created) . '
                                </li>
                            </ul>
                        </div>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>