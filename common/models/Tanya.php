<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tanya".
 *
 * @property integer $id
 * @property string $nip
 * @property string $judul
 * @property string $isi
 * @property integer $created_at
 */
class Tanya extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'tanya';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['nip', 'judul', 'isi'], 'required'],
            [['isi'], 'string'],
            [['created_at'], 'integer'],
            [['nip','ip'], 'string', 'max' => 255],
            [['judul'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'created_at' => 'Created At',
        ];
    }

    public function behaviors() {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }

    public function getPegawai() {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nip']);
    }

}
