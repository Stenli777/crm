<?php
namespace controllers;
use Controller;

class Blog extends Controller {
    function index(){
        $this->render('blog');
    }
    function article($id) {
        include './view/article.php';
    }
}