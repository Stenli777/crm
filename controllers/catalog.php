<?php

namespace Catalog;

class Catalog {
    function index(){
        $this->render('catalog');
    }
    function listCatalog() {
        echo 'catalog listCatalog';
    }
    function product($id) {
        include './view/product.php';
    }
    function render ($template){
        ob_start();
        include "./view/{$template}.php";
        $content = ob_get_clean();
        $title = 'Каталог';
        include './view/layout/default.php';
    }
}