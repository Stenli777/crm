<?php


namespace models;


class Model
{
    public static $table = '';
//    public $query = '';
    static function all()
    {
        return PDO::$connection->query('SELECT * FROM ' . static::$table)->fetchAll();
    }
    static function byId($id)
    {
        $data = PDO::$connection->query('SELECT * FROM ' . static::$table . ' WHERE id = ' . $id, )->fetch(\PDO::FETCH_ASSOC);
        $model = new static;
        foreach ($data as $key => $value)
        {
            $model->$key = $value;
        }
        return $model;
    }
}