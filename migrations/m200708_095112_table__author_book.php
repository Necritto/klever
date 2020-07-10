<?php

use yii\db\Migration;

/**
 * Class m200708_095112_table__author_book
 */
class m200708_095112_table__author_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createBooks();
        $this->createAuthors();
        $this->createBooksToAuthors();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
        $this->dropTable('author');
        $this->dropTable('book_to_author');
    }

    private function createBooks()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        $this->insert('book', [
            'id' => 1,
            'name' => 'Шантарам',
        ]);

        $this->insert('book', [
            'id' => 2,
            'name' => '1984',
        ]);

        $this->insert('book', [
            'id' => 3,
            'name' => 'Цветы для Элджернона',
        ]);

        $this->insert('book', [
            'id' => 4,
            'name' => 'Один',
        ]);

        $this->insert('book', [
            'id' => 5,
            'name' => 'Тень горы',
        ]);

        $this->insert('book', [
            'id' => 6,
            'name' => 'Паттерны проектирования',
        ]);

        $this->insert('book', [
            'id' => 7,
            'name' => 'Design Patterns',
        ]);
    }

    private function createAuthors()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        $this->insert('author', [
            'id' => 1,
            'name' => 'Джордж',
        ]);

        $this->insert('author', [
            'id' => 2,
            'name' => 'Даниел',
        ]);

        $this->insert('author', [
            'id' => 3,
            'name' => 'Грегори',
        ]);

        $this->insert('author', [
            'id' => 4,
            'name' => 'Элизабет',
        ]);

        $this->insert('author', [
            'id' => 5,
            'name' => 'Эрик',
        ]);

        $this->insert('author', [
            'id' => 6,
            'name' => 'Ричард',
        ]);

        $this->insert('author', [
            'id' => 7,
            'name' => 'Эрих',
        ]);

        $this->insert('author', [
            'id' => 8,
            'name' => 'Ричард',
        ]);

        $this->insert('author', [
            'id' => 9,
            'name' => 'Ральф',
        ]);

        $this->insert('author', [
            'id' => 10,
            'name' => 'Джон',
        ]);
    }

    private function createBooksToAuthors()
    {
        $this->createTable('book_to_author', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'author_id' => $this->integer(),
        ]);

        $this->insert('book_to_author', [
            'id' => 1,
            'book_id' => 1,
            'author_id' => 3,
        ]);

        $this->insert('book_to_author', [
            'id' => 2,
            'book_id' => 2,
            'author_id' => 1,
        ]);

        $this->insert('book_to_author', [
            'id' => 3,
            'book_id' => 3,
            'author_id' => 2,
        ]);

        $this->insert('book_to_author', [
            'id' => 4,
            'book_id' => 4,
            'author_id' => 6,
        ]);

        $this->insert('book_to_author', [
            'id' => 5,
            'book_id' => 5,
            'author_id' => 3,
        ]);

        $this->insert('book_to_author', [
            'id' => 6,
            'book_id' => 6,
            'author_id' => 4,
        ]);

        $this->insert('book_to_author', [
            'id' => 7,
            'book_id' => 6,
            'author_id' => 5,
        ]);

        $this->insert('book_to_author', [
            'id' => 8,
            'book_id' => 7,
            'author_id' => 7,
        ]);

        $this->insert('book_to_author', [
            'id' => 9,
            'book_id' => 7,
            'author_id' => 8,
        ]);

        $this->insert('book_to_author', [
            'id' => 10,
            'book_id' => 7,
            'author_id' => 9,
        ]);

        $this->insert('book_to_author', [
            'id' => 11,
            'book_id' => 7,
            'author_id' => 10,
        ]);
    }
}
