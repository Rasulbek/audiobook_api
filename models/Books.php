<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property string $name
 * @property string $author
 * @property string $published_year
 * @property string $publisher
 * @property integer $edition
 * @property string $ganre
 * @property string $more
 * @property string $photo
 * @property integer $chapters
 * @property double $raiting
 * @property string $language
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'author', 'published_year', 'publisher', 'edition', 'ganre', 'more', 'photo', 'chapters', 'raiting', 'language'], 'required'],
            [['author', 'publisher', 'more'], 'string'],
            [['published_year'], 'safe'],
            [['edition', 'chapters'], 'integer'],
            [['raiting'], 'number'],
            [['name', 'ganre', 'photo'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'author' => 'Author',
            'published_year' => 'Published Year',
            'publisher' => 'Publisher',
            'edition' => 'Edition',
            'ganre' => 'Ganre',
            'more' => 'More',
            'photo' => 'Photo',
            'chapters' => 'Chapters',
            'raiting' => 'Raiting',
            'language' => 'Language',
        ];
    }
}
