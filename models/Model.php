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
//        var_dump(PDO::$connection);
//        var_dump('
//        INSERT INTO ' . static::$table . '(' . implode(',', array_keys(get_object_vars($this))) . ')
//        VALUES (' . implode(',', array_map(function ($data) {
//                return "'{$data}'";
//            }, array_values(get_object_vars($this)))) . ')');
        try {
            PDO::$connection->exec('
        INSERT INTO ' . static::$table . '(' . implode(',', array_keys(get_object_vars($this))) . ') 
        VALUES (' . implode(',', array_map(function ($data) {
                    return "'{$data}'";
                }, array_values(get_object_vars($this)))) . ')');
            $this->id = PDO::$connection->lastInsertId(static::$table);
        }
        catch(\Throwable $e) {
            var_dump(PDO::$connection->errorInfo());
            var_dump($e);
        }
        }
}