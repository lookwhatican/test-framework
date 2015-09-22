<?php

/**
 * Class Application Главный класс приложения.
 * Запускает процес роутинга, вызывает нужный контроллер, отдает респонс
 */
class Application
{
    public function run()
    {
        $router = new Router;
        $arr = $router->parseUrl();
        extract($arr);
        $this->callController($controller, $method, $param);
    }

    public function callController($ctrl, $method, $param = null)
    {
        // создаем контроллер
        if(class_exists($ctrl)) {
            $controller = new $ctrl;
        }

        // вызываем метод если он существует
        if(method_exists($ctrl, $method)) {
            $controller->$method($param);
        }
    }

    public function sendResponse()
    {

    }
}