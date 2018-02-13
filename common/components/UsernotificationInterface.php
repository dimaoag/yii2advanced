<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 13.02.18
 * Time: 12:22
 */

namespace common\components;


interface UsernotificationInterface
{
    public function getEmail();
    public function getSubject();
}