<?php

namespace app\models;

use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
  public static function tableName()
  {
    return '{{author}}';
  }

  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'name' => 'Name',
    ];
  }

  public function rules()
  {
    return [
      ['name', 'required'],
      ['name', 'string']
    ];
  }
}
