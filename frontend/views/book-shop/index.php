<?php
/* @var $this yii\web\View */
/* @var $bookList object frontend\models\Book */

?>

<?php foreach ($bookList as $book): ?>
    <div class="col-md-10">
        <h3><?= $book->name ?></h3>
        <p><?php  echo $book->getDatePublished(); ?></p>
        <p><?php echo $book->getPublisherName(); ?></p>
        <p>Authors:
            <?php foreach($book->getAuthors() as $author){
                echo ' ' . $author->first_name . ' ' . $author->last_name . ',';
            }
            ?>
        </p>
        <hr>
    </div>

<?php endforeach; ?>


