<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property int $id
 * @property int|null $id_student
 * @property string|null $title_course
 * @property int|null $mark
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'id_student', 'mark'], 'default', 'value' => null],
            [['id', 'id_student', 'mark'], 'integer'],
            [['title_course'], 'string', 'max' => 512],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            //'id_student' => 'Id Student',
            'title_course' => 'Название курса',
            'mark' => 'Отметка',
        ];
    }
}
