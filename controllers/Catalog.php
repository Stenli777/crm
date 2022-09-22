<?php
namespace controllers;
use controllers\Controller;

class Catalog extends Controller {
    function index(){
//        var_dump(\models\Author::all());
//        echo "<br>";
        var_dump(\models\Book::byId(2));
        $this->render('catalog');
    }
    function listCatalog() {
        echo 'catalog listCatalog';
    }
    function product($id) {
        include './view/product.php';
    }
    function book($id) {
        $book = \models\Book::byId($id);
        echo $book->name;
        print_r($book->getAuthors());
    }
    function author($id) {
        $author = \models\Author::byId($id);
        echo "{$author->firstname} {$author->lastname}";
    }
}