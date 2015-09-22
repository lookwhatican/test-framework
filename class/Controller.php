<?php

/**
 * Class Controller
 */
abstract class Controller
{
    private $_pageTitle;

    /**
     * @param string $template_name Имя подключаемого шаблона
     * @param array $data Данные для отображения в шаблоне
     * @param boolean $category Параметр указывает отображать категории или нет
     */
    public function render($template_name, $data = [], $category = true)
    {
        extract($data, EXTR_PREFIX_SAME, 'dbl_var');

        ob_start();
        include __DIR__ . '/../view/' . $template_name;
        $content = ob_get_clean();

        if ($category == true) {
            ob_start();
            $categories = Category::find('all');
            include __DIR__ . '/../view/categories.php';
            $categories = ob_get_clean();
        }

        include __DIR__ . '/../view/layouts/layout.php';
    }

    /**
     * Генерирует маршрут по имени маршрута
     * @param string $route Имя маршрута
     * @return boolean
     * где хранить base_path + как правильно достать роут с файла route.php?
     */
    public function generateRoute($route)
    {
        $routes = include __DIR__ . '/../routes.php';
        foreach ($routes as $route_name => $route_data) {
            if ($route_name == $route) {
                return 'http://test-blog.local' . $route_data['pattern'];
            }
        }
        return false;
    }


//public function getRequest()
//{
// return $this;
//}

    /**
     * Проверяет, что пришли данные Post методом
     */
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }

    /**
     * Достает нужные данные из массива Post
     */
    public function post($param)
    {
        return $_POST[$param];
    }

    /**
     * header — Отправка HTTP заголовка
     * @param string $path
     */
	public function redirect($path)
	{
		header('Location:' . $path);
	}


    /**
     * @return string the page title. Defaults to the controller name and the action name.
     */
    public function getPageTitle()
    {
        if($this->_pageTitle!==null)
            return $this->_pageTitle;
        else
        {
            $name=ucfirst(basename($this->getId()));
            if($this->getAction()!==null && strcasecmp($this->getAction()->getId(),$this->defaultAction))
                return $this->_pageTitle=Yii::app()->name.' - '.ucfirst($this->getAction()->getId()).' '.$name;
            else
                return $this->_pageTitle=Yii::app()->name.' - '.$name;
        }
    }

    /**
     * @param string $value the page title.
     */
    public function setPageTitle($value)
    {
        $this->_pageTitle=$value;
    }
}