<?php
/* @var $model frontend\models\Subscribe; */

//if (Yii::$app->session->hasFlash('subscribeStatus')){
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}

if ($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="email">Email: </label><br>
    <input type="email" name="email" id="email">
    <br><br>
    <input type="submit">
</form>
</body>
</html>