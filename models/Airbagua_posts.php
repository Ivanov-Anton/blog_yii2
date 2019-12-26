<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "airbagua_posts".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $shortDescription
 * @property string|null $content
 */
class Airbagua_posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'airbagua_posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shortDescription', 'content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'shortDescription' => 'Short Description',
            'content' => 'Content',
        ];
    }
}
