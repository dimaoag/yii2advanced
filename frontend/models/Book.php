<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 09.02.18
 * Time: 16:45
 */

namespace frontend\models;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property int $id
 * @property string $name
 * @property string $publisher_id
 * @property string $date_published
 * @property int $isbn
 */
class Book extends ActiveRecord
{

    public static function tableName()
    {
        return '{{book}}';
    }


    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
            [['name'], 'string', 'min' => 2],
            [['isbn'], 'safe'],
            [['date_published'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }


    /**
     * @return string
     *
     */

    public function getDatePublished(){

        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : 'Not set';
    }

    /**
     * @return object Publisher
     *
     */

    public function getPublisher(){

        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }

    /**
     * @return string
     *
     */

    public function getPublisherName(){
        if ($publisher = $this->getPublisher()){
            return 'Publisher: ' . $publisher->name;
        }
        return 'Not set';
    }


    /**
     * @return ActiveQuery
     *
     */

    public function getBookToAuthorRelations(){

        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }

    /**
     * @return object Author[] | null
     *
     */

    public function getAuthors(){

        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }



}