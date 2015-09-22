<?php

require_once __DIR__ . '/class/Loader.php';

Loader::register();


$app = new Application();

$app->run();
