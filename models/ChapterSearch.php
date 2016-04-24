<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chapters;

/**
 * ChapterSearch represents the model behind the search form about `app\models\Chapters`.
 */
class ChapterSearch extends Chapters
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'book_id', 'num_of_chapter', 'duration', 'is_free'], 'integer'],
            [['name', 'filename', 'more'], 'safe'],
            [['file_size'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Chapters::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'book_id' => $this->book_id,
            'num_of_chapter' => $this->num_of_chapter,
            'file_size' => $this->file_size,
            'duration' => $this->duration,
            'is_free' => $this->is_free,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filename', $this->filename])
            ->andFilterWhere(['like', 'more', $this->more]);

        return $dataProvider;
    }
}
