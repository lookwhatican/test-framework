<?php

class Post extends Model
{
    public $title;
    public $description;
    public $text;
    public $date;
    public $author = 'admin';
    public $category_id;

	protected static $table = 'posts';

    public function save()
    {
        $db = new DataBase;
        $query = 'INSERT INTO ' . static::$table . ' (title, description, text, date, author)
                    VALUES (:title, :description, :text, :date, :author)';
        $db->query($query, [':title' => $this->title,
                            ':description' => $this->description,
                            ':text' => $this->text,
                            ':date' => $this->date,
                            ':author' => $this->author]);
        return true;
    }
}