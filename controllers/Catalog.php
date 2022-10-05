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
        echo "{$author->firstname} {$author->lastname}";
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
    }
    function author_form(){
        $this->render('author_form');

    }
}