<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
?>

<h1>Authors</h1>

<a href="<?php echo Url::to(['create']); ?>" class="btn btn-primary">Create new author</a>

<table class="table table-condensed m-t-10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php foreach ($authorsList as $author) : ?>
    <tr>
      <td><?php echo $author->id; ?></td>
      <td><?php echo Html::encode($author->name); ?></td>
      <td><a href="<?php echo Url::to(['update', 'id' => $author->id]); ?>">Edit</a></td>
      <td><a href="<?php echo Url::to(['delete', 'id' => $author->id]); ?>">Delete</a></td>
      <td></td>
    </tr>
  <?php endforeach; ?>
</table>