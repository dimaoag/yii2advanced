<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.02.18
 * Time: 10:51
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Employee;



class EmployeeController extends Controller
{

    public function actionIndex(){

        $employee1 = new Employee();

        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = 1000;

//        echo $employee1['salary'];
//        echo '<br>';
//
//        foreach ($employee1 as $attribute => $value){
//            echo "$attribute: $value <br>";
//        }
//
//        echo '<br>';
//
//        $array = $employee1->toArray();
//        echo '<pre>';
//        print_r($array);
//        echo '</pre>';
//
//        /*
//       Array
//       (
//           [firstName] => Alex
//           [lastName] => Smith
//           [middleName] => John
//           [salary] => 1000
//       )
//        */
//
//        echo '<hr>';
//
//        echo '<pre>';
//        print_r($employee1->getAttributes());
//        print_r($employee1->attributes);
//        echo '</pre>';
//
//        /*
//        Array
//        (
//            [firstName] => Alex
//            [lastName] => Smith
//            [middleName] => John
//            [salary] => 1000
//        )
//         */
//
//
//        echo '<hr>';
//
//        echo '<pre>';
//        print_r($employee1->attributes());
//        echo '</pre>';
//
//        /*
//        Array
//        (
//            [0] => firstName
//            [1] => lastName
//            [2] => middleName
//            [3] => salary
//        )
//         */






    }


    public function actionRegister(){

        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;


        if ($model->load(Yii::$app->request->post())){

            if ($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Success:)');
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate(){

        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){

            $model->attributes = $formData; //присваиваются только те атрибуты которые вказаны в сценарию;

            if ($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Success:)');

            }

        }


        return $this->render('update', [
            'model' => $model,
        ]);
    }


}