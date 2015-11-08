<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Comment}}".
 *
 * @property integer $coment_id
 * @property integer $coment_autor_id
 * @property integer $coment_news_id
 * @property integer $coment_date
 * @property string $coment_text
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coment_autor_id', 'coment_news_id', 'coment_date', 'coment_text'], 'required'],
            [['coment_autor_id', 'coment_news_id', 'coment_date'], 'integer'],
            [['coment_text'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'coment_id' => 'Coment ID',
            'coment_autor_id' => 'Coment Autor ID',
            'coment_news_id' => 'Coment News ID',
            'coment_date' => 'Coment Date',
            'coment_text' => 'Coment Text',
        ];
    }
}
