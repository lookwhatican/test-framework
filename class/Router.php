<?php

/**
 * Class Router Должен:
 * Получить и распарсить пришедщий url
 * Опрелелить параметры и какой контроллер и метод запустить
 * Вернуть имена контроллера и метода
 */
class Router
{
	/**
	 * Хранит конфигурацию маршрутов
	 */
	protected  $routes = [];


	/**
	 * Получаем конфигурацию из файла
     */
	function __construct()
	{
		$this->routes = include __DIR__ . '/../routes.php';
	}


	/**
	 * Получаем запрос пользователя
	 */
	protected function getRequest()
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}


	/**
	 * Получаем параметр с запроса пользователя
	 * @return array элемент массива с параметром
     */
	protected function getParam()
	{
		$expl_res = explode('/', $this->getRequest());
		return $expl_res[2];
	}


	/**
	 * Определяет контроллер и его метод
	 * @return array
     */
	public function parseUrl()
	{
		foreach ($this->routes as $key => $value) {
			$temp = str_replace('/', '\/' , $value['pattern']);
			$temp = '/' . $temp . '/';

			if ($value['_requirements']['id']) {
				$temp = str_replace('{id}', $value['_requirements']['id'], $temp);
			}

			if (preg_match($temp, $this->getRequest())) {
				$controller = $value['controller'];
				$action = $value['action'] . 'Action';
			}
		}

		$parsed_url['controller'] = $controller;
		$parsed_url['method'] = $action;
		$parsed_url['param'] = $this->getParam();

		return $parsed_url;
	}
}