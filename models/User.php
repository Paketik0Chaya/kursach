<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%User}}".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property integer $user_date_regestration
 * @property integer $user_date_birth
 * @property string $user_male
 * @property string $user_avatar
 * @property string $user_town
 * @property integer $user_status
 * @property string $user_email
 * @property string $user_password
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%User}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_date_regestration'], 'required'],
            [['user_date_regestration', 'user_date_birth', 'user_status'], 'integer'],
            [['user_name'], 'string', 'max' => 20],
            [['user_male'], 'string', 'max' => 4],
            [['user_avatar', 'user_email', 'user_password'], 'string', 'max' => 255],
            [['user_town'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_date_regestration' => 'User Date Regestration',
            'user_date_birth' => 'User Date Birth',
            'user_male' => 'User Male',
            'user_avatar' => 'User Avatar',
            'user_town' => 'User Town',
            'user_status' => 'User Status',
            'user_email' => 'User Email',
            'user_password' => 'User Password',
        ];
    }
}
