<?php
$this->title = 'Tanya Jawab BKD Sampang';

use yii\bootstrap\ActiveForm;
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
           data-text="Tanya Jawab seputar BKD Sampang"
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
        <?php
        if (isset($_POST['nama'])) {
            echo '<div style="display: block;text-align: center;padding: 20px;background-color: lightgreen;border: solid;margin-bottom: 20px;">Terima kasih telah mengisi form tanya jawab, Admin BKD sampang akan memberikan jawabannya segera.</div>';
        }
        foreach ($model as $arr) {
            $nama = (isset($arr->pegawai->nama)) ? $arr->pegawai->nama : '-';
            echo '<div class="box_header" style="margin-bottom: 3px"><a href="tanya-jawab/'.$arr->id.'/' . Yii::$app->landa->urlParsing($arr->judul) . '.html"><h4>' . $arr->judul . '</h4></a> <div style="font-size:13px;text-align:right;"><b>' . $nama . '</b> (' . $arr->nip . ')<br/> dibuat pada : ' . date('d M Y', $arr->created_at) . '</div></div>';
        }
        ?>
        <hr/><br/>
        <?php $form = ActiveForm::begin(['id' => 'tanya']); ?>
        <span style="float: left;padding: 10px;width: 100px;">NIP</span> <input id="nip" name="nip" type="text" placeholder="Masukkan NIP" maxlength="18" required style="width: 150px;background-color: white"> <span id="errorBlock" style="color: red"></span>
        <br/><span style="float: left;padding: 10px;width: 100px;">Nama</span> <input id="nama" name="nama" type="text" readonly style="width: 400px;">
        <br/><span style="float: left;padding: 10px;width: 100px;">Alamat</span> <input id="alamat" name="alamat" type="text" readonly style="width: 400px;">        
        <div class="clearfix"><br/></div>
        <span style="float: left;padding: 10px;width: 100px;">Judul</span> <input required id="judul" maxlength="50" name="judul" type="text" style="width: 400px;background-color: white">
        <textarea required id="isi" name="isi" placeholder="Tulis pertanyaan kepada kami, Admin kami akan menjawab semua pertanyaan / keluhan Anda via online." style="width: 98%;background-color: white;margin-top:5px"></textarea>
        <div class="clearfix"><br/></div>
        <ol style="float: left;font-size: 10px;">
            <li>1. Portal tanya - jawab ini dipergunakan khusus untuk PNS Kabupaten Sampang<br/> untuk mempercepat & memudahkan pelayanan BKD via Online</li>
            <li>2. Gunakan NIP pribadi anda, penyalahgunaan yang bukan NIP yang bersangkutan<br/> akan kami tindak & hapus postingannya</li>
        </ol>
        <input id="simpan" type="submit" value="Ajukan Pertanyaan" class="more active" style="float: right"/>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("body").on("blur", "#nip", function () {
            $.ajax({
                type: 'post',
                data: $("#tanya").serialize(),
                url: "<?php echo Yii::$app->homeUrl . 'tanya/pns.html'; ?>",
                success: function (data) {
                    if (data == 'err') {
                        $("#errorBlock").html('NIP anda tidak terdaftar! Mohon maaf forum tanya - jawab ini khusus untuk PNS BKD Sampang');
                        $("#nama").val('');
                        $("#alamat").val('');
                    } else {
                        obj = JSON.parse(data);
                        $("#nama").val(obj.nama);
                        $("#alamat").val(obj.alamat);
                        $("#errorBlock").html('');
                    }
                }
            });
        });

        $("#simpan").on("click", function () {
            if ($("#nama").val() == "") {
                return false;
            } else {
                return true;
            }
        });
    })
</script>