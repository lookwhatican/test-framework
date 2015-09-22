<?php

/**
 * declaration
 */
function render($layoutName, $data = [])
{
    foreach ($data as $key => $value) {

        ob_start();

        $$key = $value;

        include __DIR__ . '/../view /' . $key . '.php';

        $$key = ob_get_clean();
    }

    include __DIR__ . '/../view/layouts/' . $layoutName. '.php';
}

/**
 * use
 */
render('layout.php', array('menu' => Menu::find('all'),
    'categories' => Category::find('all'),
    'posts' => Post::find('all')
));




public function renderPartial($templateName, $data = [])
{
    ob_start();
    extract($data, EXTR_PREFIX_SAME, 'dbl_var');
    include __DIR__ . '/../view/' . $templateName;
    return ob_get_clean();
}


public function render($layoutName, $data = [])
{
    include __DIR__ . '/../view/layouts/' . $layoutName;
}

$categories = renderPartial('categories.php', array('categories' => Category::find('all')));
