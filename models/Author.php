<?php
namespace models;

class Author extends Model {
    public static $table = 'authors';
//    public $firstname = '';
//    public $lastname = '';
    public function fullname()
{
    return "{$this->firstname} {$this->lastname}";
}
}