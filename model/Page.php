<?php

class Page extends Model
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'pages';
}