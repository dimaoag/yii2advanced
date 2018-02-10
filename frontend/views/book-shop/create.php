<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10.02.18
 * Time: 12:01
 */

/* @var $book frontend\models\Book */
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($book, 'name'); ?>

<?php echo $form->field($book, 'isbn'); ?>

<?php echo $form->field($book, 'date_published'); ?>

<?php echo $form->field($book, 'publisher_id'); ?>

<?php echo Html::submitButton('Save', ['class' => 'btn btn-success']); ?>


<?php $form = ActiveForm::end(); ?>

