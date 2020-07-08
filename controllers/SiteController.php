<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
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

    public function actionAdmin()
    {
        return $this->render('admin');
    }
}
