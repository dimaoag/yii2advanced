<?php
use yii\helpers\Url;
?>

<?php echo "<h1>Количество записей в таблице news: $count</h1>"?>

<a href="<?= Url::to(['site/index']); ?>" class="btn btn-success">Main</a>