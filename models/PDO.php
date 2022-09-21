<?php


namespace models;


class PDO
{
    static $connection;
    function __construct(){
        $user = 'root';
        $pass = '';
        $dbname = 'crm';
        $host = 'localhost';
        self::$connection = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
}
}