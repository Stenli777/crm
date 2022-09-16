<?php
class Catalog {
    function index(){
        include './view/catalog.php';
    }
    function listCatalog() {
        echo 'catalog listCatalog';
    }
    function product($id) {
        include './view/product.php';
    }
}