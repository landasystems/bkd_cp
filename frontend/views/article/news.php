<?php
$this->title = 'Berita BKD Sampang';

use common\models\Article;
use common\models\ArticleCategory;
?>

<div class="page_header clearfix page_margin_top">
    <div class="page_header_left">
        <h2 class="page_title"><?php echo $this->title; ?></h2>
    </div>
    <div class="page_header_right" style="text-align: right">
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=825402027535189";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-share-button" 
             data-href="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" 
             data-layout="button_count">
        </div>

        <a class="twitter-share-button"
           href="https://twitter.com/share"
           data-url="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"
           data-text="<?= 'Berita - BKD Sampang' ?>"
           data-count="horizontal">
            Tweet
        </a>
        <script>
            window.twttr = (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
                t._e = [];
                t.ready = function (f) {
                    t._e.push(f);
                };
                return t;
            }(document, "script", "twitter-wjs"));
        </script>

    </div>
</div>
<div class="page_layout clearfix">
    <div class="divider_block clearfix">
        <hr class="divider first">
        <hr class="divider subheader_arrow">
        <hr class="divider last">
    </div>
    <div class="row page_margin_top">
        <ul class="blog big">
            <?php foreach ($model as $val) { ?>
                <li class="post">
                    <a href="<?= Yii::$app->urlManager->createUrl('article/' . $val->alias) ?>" title="<?= $val->title ?>">
                        <img <?=$val->imgSrc ?> alt="img" style="display: block;" class="polaroid">
                    </a>
                    <div class="post_content">
                        <h2>
                            <a href="<?= Yii::$app->urlManager->createUrl('article/' . $val->alias) ?>" title="<?= $val->title ?>"><?= $val->title ?></a>
                            <a class="comments_number" href="#" title="<?= $val->hits ?> comments"><?= $val->hits ?><span class="arrow_comments"></span></a>
                        </h2>
                        <p><?= substr(strip_tags($val->content), 0, 400) ?></p>
                        <a class="read_more" href="<?= Yii::$app->urlManager->createUrl('article/' . $val->alias) ?>" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <br style="clear: both"/>
        <br/><br/><br/><br/>
        <div>
            <?php
            echo \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
        </div>
    </div>
</div>
