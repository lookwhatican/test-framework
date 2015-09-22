<?php

class AdminController extends Controller
{
    /**
     * @param string $template_name Имя подключаемого шаблона
     * @param array $data Данные для отображения в шаблоне
     */
    public function render($template_name, $data = [])
    {
        extract($data, EXTR_PREFIX_SAME, 'dbl_var');

        ob_start();
        include __DIR__ . '/../view/' . $template_name;
        $content =  ob_get_clean();

        include __DIR__ . '/../view/adm_layout.php';
    }

    /**
     * Задача метода показать главну страницу админ панели
     */
    public function indexAction()
    {
        return $this->render('adm_posts.php', array('posts' => Post::find('all')));
    }

    /**
     * Задача метода показать страницу добавления новой записи
     */
    public function addAction()
    {
        return $this->render('post_add.php', array('categories' => Category::find('all')));
    }

    /**
     * Задача метода показать страницу редактирования записи
     */
    public function editAction()
    {
        return $this->render('_post_edit.php', array('post' => Post::find((int)$id)));
    }


    public function issetCookie(){}

    public function loginAction()
    {
        include __DIR__ . '/../view/_adm_login.php';
    }
}