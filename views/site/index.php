<?php

/* @var $this yii\web\View */

$this->title = 'Test task Klever Lab';
?>

<div class="site-index">

  <div class="jumbotron">
    <h1>Authors & books!</h1>
  </div>

  <div class="body-content">
    <?php foreach ($books as $book) : ?>
      <ul>
        <li>
          <?php foreach ($book->getAuthors() as $author) : ?>
            <h3><?php echo $author->name ?></h3>
          <?php endforeach; ?>
          <p><?php echo $book->name; ?></p>
        </li>
      </ul>
    <?php endforeach ?>
  </div>
</div>