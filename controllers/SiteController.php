<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Book;
use app\models\BookToAuthor;

class SiteController extends Controller
{
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionIndex()
  {
    return $this->render('index', [
      'book' => new Book(),
      'books' => Book::getAll(),
    ]);
  }

  /**
   * Displays errors.
   *
   * @return string
   */
  public function actionError()
  {
    return $this->render('error');
  }

  public function actionAdmin()
  {
    return $this->render('admin', ['books' => Book::getAll(),]);
  }
}
