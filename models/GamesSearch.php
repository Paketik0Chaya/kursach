<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Games;

/**
 * GamesSearch represents the model behind the search form about `app\models\Games`.
 */
class GamesSearch extends Games
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_id'], 'integer'],
            [['game_text', 'game_img'], 'safe'],
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
        $query = Games::find();

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
            'game_id' => $this->game_id,
        ]);

        $query->andFilterWhere(['like', 'game_text', $this->game_text])
            ->andFilterWhere(['like', 'game_img', $this->game_img]);

        return $dataProvider;
    }
}
