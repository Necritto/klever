<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Create new author</h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($author, 'name'); ?>

<?php echo Html::submitButton('Save', [
  'class' => 'btn btn-primary'
]); ?>

<?php ActiveForm::end();
