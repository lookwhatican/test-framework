<?php

class Loader
{
	public static function register()
	{
		spl_autoload_register(array(self, 'loadClass'));
	}


	public static function loadClass($className)
	{
		$classFile = __DIR__ . '/../class/' . $className . '.php';
		$controllerFile = __DIR__ . '/../controller/' . $className . '.php';
		$modelFile = __DIR__ . '/../model/' . $className . '.php';

		if (file_exists($classFile)) {
			require $classFile;
		} else if(file_exists($controllerFile)) {
			require $controllerFile;
		} else if(file_exists($modelFile)) {
			require $modelFile;
		}
	}
}