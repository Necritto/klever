<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Book;
use app\models\Author;

class SiteController extends Controller
{
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionIndex()
  {
    $book = new Book();

    if (
      $book->load(Yii::$app->request->post()) && $book->save()
    ) {
      Yii::$app->session->setFlash('success', 'Saved');
      return $this->refresh();
    }

    return $this->render('index', [
      'book' => $book,
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

  public function actionCreate()
  {
    $author = new Author();

    if ($author->load(Yii::$app->request->post()) && $author->save()) {
      Yii::$app->session->setFlash('success', 'Author added');
      return $this->redirect(['admin']);
    }

    return $this->render('create', ['author' => $author]);
  }

  public function actionUpdate($id)
  {
    $author = Author::findOne($id);

    if ($author->load(Yii::$app->request->post()) && $author->save()) {
      Yii::$app->session->setFlash('success', 'Author has been updated');
      return $this->redirect(['admin']);
    }

    return $this->render('update', ['author' => $author]);
  }

  public function actionAdmin()
  {
    return $this->render('admin', ['authorsList' => Author::find()->all()]);
  }
}
