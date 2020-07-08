<?php

namespace app\models;

use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
  public static function tableName()
  {
    return '{{book}}';
  }

  public static function getAll()
  {
    return self::find()->all();
  }

  public function getBookToAuthorRelations()
  {
    return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
  }

  public function getAuthors()
  {
    return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
  }

  public function rules()
  {
    return [
      [['name'], 'required'],
    ];
  }
}
