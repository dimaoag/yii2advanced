<?php
namespace frontend\models\forms;
use yii\base\Model;
use frontend\models\User;
use Yii;
use frontend\models\events\UserRegisteredEvent;


class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    public function rules()
    {
        return [
            [['username'], 'trim'],
            [['username'], 'required'],
            [['username'], 'string', 'min' => 2, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::className()],

            [['email'], 'trim'],
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::className()],

            [['password'], 'trim'],
            [['password'], 'required'],
            [['password'], 'string', 'min' => 6],
        ];
    }

    public function save(){

        if ($this->validate()){

            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            if ($user->save()){

//                Yii::$app->emailService->notifyUser($user, 'Welcome');  //event
//                Yii::$app->emailService->notifyAdmins($user ,'User registered');  //event

                $event = new UserRegisteredEvent();
                $event->user = $user;
                $event->subject = 'New user registered';
                $user->trigger(User::USER_REGISTERED, $event);

                return $user;
            }
        }

        return false;
    }
}