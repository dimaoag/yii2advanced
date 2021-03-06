<?php
/* @var $this yii\web\View */
/* @var $authorsList[] frontend\models\Author */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Authors</h1>
<a href="<?= Url::to(['author/create']); ?>" class="btn btn-success">Create new author</a>
<br><br>
<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($authorsList as $author): ?>
        <tr>
            <td><?= Html::encode($author->id); ?></td>
            <td><?= Html::encode($author->first_name); ?></td>
            <td><?= Html::encode($author->last_name); ?></td>
            <td><a href="<?php echo Url::to(['author/update', 'id' => $author->id]); ?>" class="btn btn-warning"> Edit</a></td>
            <td><a href="<?php echo Url::to(['author/delete', 'id' => $author->id]); ?>" class="btn btn-danger"> Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>