<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<div style="display:flex;justify-content:space-around">
  <a href="<?php echo Url::to(['author/index']); ?>" class="btn btn-primary">CRUD Authors</a>
  <a href="<?php echo Url::to(['books/index']); ?>" class="btn btn-primary">CRUD Books</a>
</div>

<div style="display:flex;justify-content:space-between">
  <div>
    <?php foreach ($books as $book) : ?>
      <ul>
        <li>
          <?php foreach ($book->getAuthors() as $author) : ?>
            <h3>Book: <?php echo $book->name ?> - <span style="font-size: 14px;">Author: <?php echo $author->name; ?></span></h3>
          <?php endforeach; ?>
        </li>
      </ul>
    <?php endforeach ?>
  </div>
  <div>
    <?php foreach ($books as $book) : ?>
      <?php foreach ($book->getAuthors() as $author) : ?>
        <h3><?php echo $author->name ?> - <span style="font-size: 14px;"><?php echo $author->id ?> <?php echo $book->id ?></span></h3> //???
      <?php endforeach; ?>
    <?php endforeach ?>
  </div>
</div>