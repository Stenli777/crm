<?php


namespace models;


class PDO
{
//    const FETCH_ASSOC = [$key=>$value];
    static $connection;
    function __construct(){
        $user = 'root';
        $pass = '';
        $dbname = 'crm';
        $host = 'localhost';
        self::$connection = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
}
}