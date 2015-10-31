<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "acca_article".
 *
 * @property integer $id
 * @property integer $article_category_id
 * @property string $title
 * @property string $content
 * @property string $primary_image
 * @property string $created
 * @property integer $created_user_id
 * @property string $modified
 * @property string $alias
 * @property integer $hits
 * @property integer $publish
 * @property string $keyword
 * @property string $description
 */
class Download extends \yii\db\ActiveRecord {

    public static function lists() {
        $dir = dirname(__DIR__) . '/../img/download';
        $scanned_directory = array_diff(scandir($dir), array('..', '.'));
        return $scanned_directory;
    }
}
