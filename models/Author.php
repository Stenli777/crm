<?php
namespace models;

class Author extends Model {
    public static $table = 'authors';
//    public $firstname = '';
//    public $lastname = '';
    public function fullname()
{
    return "{$this->firstname} {$this->lastname}";
}
    function getBooks(){
        $books = PDO::$connection->query('SELECT books.* 
FROM books 
LEFT JOIN book_author 
ON book_author.book_id = books.id 
WHERE book_author.author_id = ' . $this->id)->fetchAll(\PDO::FETCH_ASSOC);
        $books = array_map(function ($data)
        {
            $model = new Book();
            foreach ($data as $key => $value)
            {
                $model->$key = $value;
            }
            return $model;
        },$books);
        return $books;
    }
}