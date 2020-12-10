<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "email".
 *
 * @property int $id
 * @property string $reciverName
 * @property string $email
 * @property string $subject
 * @property int $content
 * @property string $attachment
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reciverName', 'email', 'subject', 'content', 'attachment'], 'required'],
            [['content'], 'integer'],
            [['reciverName', 'email', 'subject', 'attachment'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reciverName' => 'Reciver Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'content' => 'Content',
            'attachment' => 'Attachment',
        ];
    }
}
