<?php
namespace frontend\models\forms;
use yii\base\Model;
use frontend\models\User;
use Yii;
use frontend\models\SearchNews;

class SearchForm extends Model
{
    public $keyword;



    public function rules()
    {
        return [
            [['keyword'], 'trim'],
            [['keyword'], 'required'],
            [['keyword'], 'string', 'min' => 3],
        ];
    }


    public function search(){

        if ($this->validate()){

            $model = new SearchNews();
            return $model->simpleSearch($this->keyword);
        }

    }





}