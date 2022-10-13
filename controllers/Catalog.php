<?php
namespace controllers;
use controllers\Controller;

class Catalog extends Controller {
    function index(){
        $books = \models\Book::all();
//        echo "<br>";
//        var_dump(\models\Book::byId(2));
        $this->render('catalog',['books' => $books]);
    }
    function listCatalog() {
        echo 'catalog listCatalog';
    }
    function product($id) {
        include './view/product.php';
    }
    function book($id) {
        $book = \models\Book::byId($id);
//      echo $book->name;
        $this->render('book',['book' => $book]);
    }
    function author($id) {
        $author = \models\Author::byId($id);
        $this->render('author',['author' => $author]);
//        echo "{$author->firstname} {$author->lastname}";
//        echo"<br>";
//        $books = $author->getBooks();
//        print_r($books);
    }
    function newbook() {
        $data = $_POST;
        if (count($data) == 0) {
            return;
        }
        $model = new \models\Book();
        foreach ($data as $key => $value)
        {
            $model->$key = $value;
//            var_dump($model);
        }
        $model->save();
        $this->redirect("/catalog/books");
    }
    function book_form(){
        $this->render('book_form',['authors'=>\models\Author::all()]);

    }
    function newauthor() {
        $data = $_POST;
        if (count($data) == 0) {
            return;
        }
        $model = new \models\Author();
        foreach ($data as $key => $value)
        {
            $model->$key = $value;
//            var_dump($model);
        }
        $model->save();

        $this->redirect("/catalog/authors");
    }
    function author_form(){
        $this->render('author_form');

    }
    public function authors(){
        $authors = \models\Author::all();
        $this->render('catalog-authors',['authors' => $authors]);
    }
    public function books(){
        $books = \models\Book::all();
        $this->render('catalog-books',['books' => $books]);
    }
}