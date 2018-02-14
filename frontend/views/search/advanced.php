<?php
/**
 * @var $model frontend\models\forms\SearchForm;
 * @var $results array ;
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;
?>

<h1>Search Advanced</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php $form = ActiveForm::begin(); ?>

            <?php echo $form->field($model, 'keyword')->textInput(); ?>

            <?php echo Html::submitButton('Search', ['class' => 'btn btn-success']) ;?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php if ($results):?>
                <?php foreach ($results as $item):?>
                    <?php echo $item['title']?>
                    <br>
                    <?php echo HighlightHelper::process($model->keyword, $item['content']); ?>
                    <hr>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>

</div>

