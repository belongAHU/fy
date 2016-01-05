<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "injury".
 *
 * @property integer $id
 * @property integer $type
 * @property string $desc
 * @property integer $level
 * @property integer $delete
 */
class Injury extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'injury';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'level', 'delete'], 'integer'],
            [['desc'], 'required'],
            [['desc'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'desc' => 'Desc',
            'level' => 'Level',
            'delete' => 'Delete',
        ];
    }
}
