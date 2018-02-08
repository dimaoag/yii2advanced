<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.02.18
 * Time: 10:51
 */

namespace frontend\models;
use yii\base\Model;
use Yii;
use yii\helpers\ArrayHelper;

class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birthday;
    public $dateWorkStart;
    public $city;
    public $position;
    public $userId;




    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'email', 'middleName', 'birthday'
                , 'dateWorkStart', 'city', 'position', 'userId'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }


    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email'], 'required'],
            [['email'], 'email'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birthday'], 'date', 'format' => 'php:Y-m-d'],
            [['dateWorkStart'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'safe'],
            //[['city'], 'in', 'range' => $this->cities],
            [['position'], 'required'],
            [['position'], 'string'],
            [['userId'], 'required'],
            [['userId'], 'string' , 'length' => 10],
        ];
    }

    public function save(){

        $sql = "INSERT INTO `employee` (firstName, lastName, middleName, email, birthday, dateWorkStart,
            city, `position`, userId) VALUES ('{$this->firstName}','{$this->lastName}', '{$this->middleName}'
            , '{$this->email}', '{$this->birthday}', '{$this->dateWorkStart}', '{$this->city}', '{$this->position}'
            , '{$this->userId}')";
        return Yii::$app->db->createCommand($sql)->execute();

    }


    public static function find(){

        $sql = 'SELECT * FROM `employee`';


        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getCitiesList(){

        $sql = 'SELECT * FROM `city`';


        $result =  Yii::$app->db->createCommand($sql)->queryAll();

        return ArrayHelper::map($result, 'id', 'name');

    }


}