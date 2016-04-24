<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Books;

/**
 * BookSearch represents the model behind the search form about `app\models\Books`.
 */
class BookSearch extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'edition', 'chapters'], 'integer'],
            [['name', 'author', 'published_year', 'publisher', 'ganre', 'more', 'photo', 'language'], 'safe'],
            [['raiting'], 'number'],
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
        $query = Books::find();

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
            'published_year' => $this->published_year,
            'edition' => $this->edition,
            'chapters' => $this->chapters,
            'raiting' => $this->raiting,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'publisher', $this->publisher])
            ->andFilterWhere(['like', 'ganre', $this->ganre])
            ->andFilterWhere(['like', 'more', $this->more])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'language', $this->language]);

        return $dataProvider;
    }
}
