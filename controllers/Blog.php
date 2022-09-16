<?php


namespace blog;

use catalog;

class Blog
{
    function index(){
        $this->render('blog');
    }
    function render ($template){
        ob_start();
        include "./view/{$template}.php";
        $content = ob_get_clean();
        $title = 'Каталог';
        include './view/layout/default.php';
    }
}