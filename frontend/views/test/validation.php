<?php
/* @var $model frontend\models\Employee; */

if ($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>


<h1>Test Attribute</h1>
<form method="post">
    <label for="testAttribute">Test Attribute: </label><br>
    <input type="text" name="testAttribute" id="testAttribute"><br><br>

    <input type="submit">
</form>