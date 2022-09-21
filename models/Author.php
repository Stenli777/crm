<?php
namespace models;

class Author {

    static function all(){
        $table = 'authors';
        return PDO::$connection->query('SELECT * FROM authors')->fetchAll();
    }
    static function byId($id){

    }
}