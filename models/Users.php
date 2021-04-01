<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $email
 *
 * @property UsersIntegrationsJivositeApi $usersIntegrationsJivositeApi
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[UsersIntegrationsJivositeApi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersIntegrationsJivositeApi()
    {
        return $this->hasOne(UsersIntegrationsJivositeApi::className(), ['user_id' => 'id']);
    }
}
