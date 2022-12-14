<?php


namespace models;


class Book extends Model
{
    public static $table = 'books';

    function getAuthors()
    {
        $authors = PDO::$connection->query('SELECT authors.* 
FROM authors 
LEFT JOIN book_author 
ON book_author.author_id = authors.id 
WHERE book_author.book_id = ' . $this->id)->fetchAll(\PDO::FETCH_ASSOC);
        $authors = array_map(function ($data)
        {
            $model = new Author();
            foreach ($data as $key => $value)
            {
                $model->$key = $value;
            }
            return $model;
        },$authors);
        return $authors;
    }
    function save(){
        $authors = $this->authors;
        unset($this->authors);
        parent::save();
        foreach ($authors as $author) {
            PDO::$connection->exec('
        INSERT INTO ' . ' book_author ' . '(book_id, author_id) 
        VALUES (' . $this->id . ',' . $author . ')');
        }

    }
}