<?php


namespace models;


class Model
{
    public static $table = '';
//    public $query = '';
    static function all()
    {
        $all = PDO::$connection->query('SELECT * FROM ' . static::$table)->fetchAll();
        $all = array_map(function ($data)
        {
            $model = new static();
            foreach ($data as $key => $value)
            {
                $model->$key = $value;
            }
            return $model;
        },$all);
        return $all;
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
    public function save(){
        PDO::$connection->query('
        INSERT INTO ' . $this->table . '(' . implode(',',array_keys(get_object_vars($this))) . ') 
        VALUES (' . implode(',',array_map(function ($data){return "'${$data}'"},array_values(get_object_vars($this)))) . ')' )->fetch(\PDO::FETCH_ASSOC);
    }
}