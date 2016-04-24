<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chapters".
 *
 * @property integer $id
 * @property integer $book_id
 * @property string $name
 * @property integer $num_of_chapter
 * @property double $file_size
 * @property integer $duration
 * @property string $filename
 * @property integer $is_free
 * @property string $more
 */
class Chapters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chapters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id', 'name', 'num_of_chapter', 'file_size', 'duration', 'filename', 'is_free', 'more'], 'required'],
            [['book_id', 'num_of_chapter', 'duration', 'is_free'], 'integer'],
            [['file_size'], 'number'],
            [['more'], 'string'],
            [['name', 'filename'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => 'Book ID',
            'name' => 'Name',
            'num_of_chapter' => 'Num Of Chapter',
            'file_size' => 'File Size',
            'duration' => 'seconds',
            'filename' => 'Filename',
            'is_free' => '0-no;1-for playing;2-free',
            'more' => 'More',
        ];
    }
}
