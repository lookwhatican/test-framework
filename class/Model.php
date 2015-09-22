<?php

abstract class Model
{
	/**
	 * @param string || integer $param
	 * @return object Должен вернуть либо все записи (массив обьектов) либо одну запись
	 */
	public static function find($param)
	{
		$db = new DataBase;
		$class = get_called_class(); // получили имя класса который будет этот метод использовать
		$db->setClassName($class);

		if(is_string($param)) {
			$query = 'SELECT * FROM ' . static::$table;
			return $db->query($query);
		}

		$query = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		return $db->query($query, [':id' => $param]);
	}

    public static function findByCategory($id)
    {
        $db = new DataBase;
        $class = get_called_class();
        $db->setClassName($class);

        $query = 'SELECT * FROM ' . static::$table . ' WHERE category_id=:id';
        return $db->query($query, [':id' => $id]);
    }

	public function update($id)
    {

    }
}