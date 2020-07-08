<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<div style="display:flex;justify-content:space-around">
  <a href="<?php echo Url::to(['author/index']); ?>" class="btn btn-primary">CRUD Authors</a>
  <a href="<?php echo Url::to(['books/index']); ?>" class="btn btn-primary">CRUD Books</a>
</div>