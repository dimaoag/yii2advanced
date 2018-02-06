<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.02.18
 * Time: 10:51
 */

namespace frontend\models;
use yii\base\Model;

class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;


    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'email', 'middleName'],
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
        ];
    }

    public function save(){

        return true;
    }


}