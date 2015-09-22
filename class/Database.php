<?php

class Database
{
	protected $dbh; // database handler
	protected $className = 'stdClass';

	public function __construct()
	{
		$config = include __DIR__ . '/../config.php';
		$config = $config['database'];

		$this->dbh = new PDO('mysql:dbname=' . $config['db'] . '; host=' . $config['host'], $config['user'], $config['pass']);
	}


	public function setClassName($class)
	{
		$this->className = $class;
	}


	public function query($query, $params=[])
	{
		$sth = $this->dbh->prepare($query);
		$sth->execute($params);
		
		return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
	}
}