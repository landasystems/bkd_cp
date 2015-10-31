<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tanya_det".
 *
 * @property integer $id
 * @property integer $tanya_id
 * @property string $nip
 * @property string $isi
 */
class TanyaDet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanya_det';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanya_id', 'nip', 'isi'], 'required'],
            [['tanya_id'], 'integer'],
            [['isi'], 'string'],
            [['created_at'], 'integer'],
            [['nip'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanya_id' => 'Tanya ID',
            'nip' => 'Nip',
            'isi' => 'Isi',
        ];
    }
    
    public function getTanya() {
        return $this->hasOne(Tanya::className(), ['id' => 'tanya_id']);
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nip']);
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
}
