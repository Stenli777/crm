<?php
namespace controllers;

class Controller {
    function __construct() {

    }

    function render($template,$params=[]) {
        foreach ($params as $key => $value){
            $$key=$value;
        }
        ob_start();
        include "./view/{$template}.php";
        $content = ob_get_clean();
        $title = 'Каталог';
        include './view/layout/default.php';
    }

    public function redirect($url){
        header("Location: $url");
    }
}
