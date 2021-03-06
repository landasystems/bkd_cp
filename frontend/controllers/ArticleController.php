<?php

namespace frontend\controllers;

use Yii;
use common\models\Article;
use common\models\ArticleCategory;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

class ArticleController extends Controller {

    public function actionView() {
        $this->layout = 'mainSingle';
        $model = Article::findOne(['alias' => $_GET['alias']]);
        if (empty($model)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        } else {
            $this->sel_Arthits($model->id);
            return $this->render('view', [
                        'model' => $model,
            ]);
        }
    }

    public function actionNews() {
        $this->layout = 'mainSingle';
        $alias = strtoupper(str_replace("-", " ", $_GET['alias']));
        $categori = ArticleCategory::findOne(['name' => $alias]);
        $query = Article::find()->where('article_category_id = ' . $categori->id . ' and publish = 1')->orderBy('created DESC');
        $pagination = new Pagination([
            'defaultPageSize' => 7,
            'totalCount' => $query->count(),
        ]);
        $model = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('news', [
                    'model' => $model,
                    'alias' => $alias,
                    'pagination' => $pagination,
        ]);
    }

    public function actionPromotion() {
        $this->layout = 'mainSingle';
        $model = Article::findAll(['article_category_id' => 26, 'publish' => 1]);

        return $this->render('promotion', [
                    'model' => $model,
        ]);
    }

    public function actionGallery() {
        $this->layout = 'mainSingle';
//        $model = Article::findAll(['article_category_id' => 28]);
        return $this->render('gallery');
    }


    public function addHits($model) {
        $model->hits++;
        $model->save();
    }

    public function sel_Arthits($id) {
        $add_hits = Article::findOne([
                    'id' => $id
        ]);
        $this->addHits($add_hits);
    }

}
