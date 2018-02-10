<?php
/* @var $this yii\web\View */
/* @var $bookList object frontend\models\Book */
?>

<?php foreach ($bookList as $book): ?>
    <div class="col-md-10">
        <h3><?= $book->name ?></h3>
        <p><?php  echo $book->getDatePublished(); ?></p>
    </div>

<?php endforeach; ?>


