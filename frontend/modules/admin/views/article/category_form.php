<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var $this yii\web\View */
/** @var $article frontend\models\Article */
/** @var $form yii\widgets\ActiveForm */
/** @var $selectedCategory integer */
/** @var $categories array frontend\models\Category */

?>


<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= Html::dropDownList('category', $selectedCategory, $categories, ['class' => 'form-control']); ?>

    <div class="form-group">

        <?= Html::submitButton('Select', ['class' => 'btn btn-success']); ?>

    </div>

    <?php ActiveForm::end() ?>



</div>


