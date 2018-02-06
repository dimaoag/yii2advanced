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
    <label for="firstName">First Name: </label><br>
    <input type="text" name="firstName" id="firstName"><br><br>

    <label for="lastName">Last Name: </label><br>
    <input type="text" name="lastName" id="lastName"><br><br>

    <label for="middleName">Middle Name: </label><br>
    <input type="text" name="middleName" id="middleName"><br><br>

    <label for="email">Email: </label><br>
    <input type="email" name="email" id="email"><br><br>

    <label for="birthday">Birthday: </label><br>
    <input type="text" name="birthday" id="birthday" placeholder="01.01.2000"><br><br>

    <label for="dateWorkStart">Birthday: </label><br>
    <input type="text" name="dateWorkStart" id="dateWorkStart" placeholder="01.01.2000"><br><br>

    <label for="city">City: </label><br>
    <select name="city" id="city">
        <option disabled>Choose city</option>
        <option value="1">New York</option>
        <option selected value="2">London</option>
        <option value="3">Paris</option>
        <option value="4">Berlin</option>
    </select><br><br>

    <label for="position">Position: </label><br>
    <input type="text" name="position" id="position"><br><br>

    <label for="userId">User ID: </label><br>
    <input type="text" name="userId" id="userId" placeholder="10 numbers" maxlength="10"><br><br>

    <input type="submit">
</form>