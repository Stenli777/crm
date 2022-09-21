<?php
namespace controllers;

class Controller {
    function __construct() {

    }

    function render($template) {
        ob_start();
        include "./view/{$template}.php";
        $content = ob_get_clean();
        $title = 'Каталог';
        include './view/layout/default.php';
    }
}
