<?php

require_once 'Render.php'; // Подключаем файл с классом Render
require_once 'user_functions.php'; // Подключаем файл с функциями для работы с пользователями

try {
    $app = new Application();
    echo $app->run();
} catch (Exception $e) {
    echo Render::renderExceptionPage($e);
}
