<?php
/* @var $model frontend\models\Employee; */

if ($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>


<h1>Welcome to our company!</h1>
<form method="post">
    <label for="">First Name: </label><br><br>
    <input type="text" name="firstName" id="firstName"><br><br>

    <label for="">Last Name: </label><br><br>
    <input type="text" name="lastName" id="lastName"><br><br>

    <label for="">Middle Name: </label><br><br>
    <input type="text" name="middleName" id="middleName"><br><br>

    <label for="">Email: </label><br><br>
    <input type="email" name="email" id="email"><br><br>

    <input type="submit">
</form>