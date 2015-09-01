<?php
$this->title = $model->title;
?>
<div class="page_header clearfix page_margin_top">
    <div class="page_header_left">
        <h1 class="page_title"><?php echo $this->title; ?></h1>
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
           data-text="<?= $model->title . ' - BKD Sampang' ?>"
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
        <?= $model->content ?>
    </div>
</div>
