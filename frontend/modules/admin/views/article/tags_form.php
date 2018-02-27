<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var $this yii\web\View */
/** @var $form yii\widgets\ActiveForm */
/** @var $selectedTags array frontend\models\Tag */
/** @var $tags array frontend\models\Tag */

?>


<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= Html::dropDownList('tags', $selectedTags, $tags, ['class' => 'form-control', 'multiple' => true]); ?>

    <div class="form-group">

        <?= Html::submitButton('Select', ['class' => 'btn btn-success']); ?>

    </div>

    <?php ActiveForm::end() ?>



</div>


