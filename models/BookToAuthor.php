<?php

namespace app\models;

use yii\db\ActiveRecord;

class BookToAuthor extends ActiveRecord
{
  public static function tableName()
  {
    return '{{book_to_author}}';
  }

  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'book_id' => 'Book ID',
      'author_id' => 'Author ID',
    ];
  }
}
