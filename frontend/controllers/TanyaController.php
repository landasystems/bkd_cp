<?php

namespace frontend\controllers;

use Yii;
use common\models\Tanya;
use common\models\TanyaDet;
use common\models\Pegawai;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

class TanyaController extends Controller {

    public function actionIndex() {
        $this->layout = 'mainSingle';
        if (isset($_POST['nama']) && isset($_POST['nama'])) {
            $model = Pegawai::findOne(['nip' => $_POST['nip']]);
            if (!empty($model)) {
                $m = new Tanya();
                $m->nip = $_POST['nip'];
                $m->judul = $_POST['judul'];
                $m->isi = $_POST['isi'];
                $m->ip = Yii::$app->landa->client_ip();
                $m->save();
            }
        }

        $model = Tanya::find()->orderBy('created_at DESC')->all();
        return $this->render('index', [
                    'model' => $model,
        ]);
    }

    public function actionView($id) {
        if (isset($_POST['nip']) && isset($_POST['nama'])) {
            $m = new TanyaDet();
            $m->tanya_id = $_POST['tanya_id'];
            $m->nip = $_POST['nip'];
            $m->isi = $_POST['isi'];
            $m->save();
        }

        $model = Tanya::find()->where(['id' => $id])->one();
        $modelDet = TanyaDet::find()->where(['tanya_id' => $id])->orderBy('created_at ASC')->all();
        return $this->render('view', [
                    'model' => $model,
                    'modelDet' => $modelDet,
        ]);
    }

    public function actionPns() {
        $model = Pegawai::findOne(['nip' => $_POST['nip']]);
        if (empty($model)) {
            echo 'err';
        } else {
            echo json_encode(array('nama' => $model->nama, 'alamat' => $model->alamat));
        }
    }

}
