<?php
namespace controllers;
use controllers\Controller;

class Catalog extends Controller {
    function index(){
        var_dump(\models\Author::all());
        $this->render('catalog');
    }
    function listCatalog() {
        echo 'catalog listCatalog';
    }
    function product($id) {
        include './view/product.php';
    }
}