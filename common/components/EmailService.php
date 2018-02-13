<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 13.02.18
 * Time: 11:58
 */

namespace common\components;
use yii\base\Component;
use Yii;
use common\components\UsernotificationInterface;

class EmailService extends Component
{
    /**
     * @param \common\components\UsernotificationInterface $event
     * @return bool
     */

    public function notifyUser(UsernotificationInterface $event){

        return Yii::$app->mailer->compose()
            ->setFrom('testingoda@gmail.com')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }

    /**
     * @param \common\components\UsernotificationInterface $event
     * @return bool
     *
     */

    public function notifyAdmins(UsernotificationInterface $event){

        return Yii::$app->mailer->compose()
            ->setFrom('testingoda@gmail.com')
            ->setTo(Yii::$app->params['adminEmail'])
            ->setSubject($event->getSubject())
            ->send();
    }


}