<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 08.02.18
 * Time: 14:26
 */

/* @var $comments array */

use yii\helpers\Html;

?>

<?php foreach ($comments as $comment): ?>
    <?= Html::tag('h4', Html::encode($comment['author'])); ?>
    <?= Html::tag('p', Html::encode($comment['text'])); ?>
    <hr>
<?php endforeach; ?>

<?php
//
//$string = '<script>alert("Hello alert");</script>';
//echo $string;
//echo Html::encode($string);
//
//?>