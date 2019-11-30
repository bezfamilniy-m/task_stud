<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $family
 * @property string|null $patronymic
 * @property int|null $year_stud
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year_stud'], 'default', 'value' => null],
            [['year_stud'], 'integer'],
            [['name', 'family', 'patronymic'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'name' => 'Имя',
            'family' => 'Фамилия',
            'patronymic' => 'Отчество',
            'year_stud' => 'Год обучения',
        ];
    }
}
