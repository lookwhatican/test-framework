<?php

/**
 * Class Request
 */
class Request
{
	function __construct()
	{
		
	}
	

	public function splitPath($path)
	{
		$path = explode('/', $path);
		var_dump($path);
	}
}

$a = new Request;
$a->splitThePath('http://test-php.local/login/form.php');


// $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $pathParts = explode('/', $path);
// $ctrl = (!empty($pathParts[1]) && $pathParts[1] != 'index.php') ? $pathParts[1] : 'News';
// $act = !empty($pathParts[2]) ? $pathParts[2] : 'Index';