<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%News}}".
 *
 * @property integer $news_id
 * @property string $news_text
 * @property string $news_img
 * @property integer $news_date
 * @property integer $news_author
 * @property integer $news_game_id
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%News}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_text'], 'string'],
            [['news_date', 'news_author'], 'required'],
            [['news_date', 'news_author', 'news_game_id'], 'integer'],
            [['news_img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_text' => 'News Text',
            'news_img' => 'News Img',
            'news_date' => 'News Date',
            'news_author' => 'News Author',
            'news_game_id' => 'News Game ID',
        ];
    }
}
