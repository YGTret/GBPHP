<?php

require_once 'vendor/autoload.php';

class Render {
    private static $twig;

    public static function initializeTwig() {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        self::$twig = new \Twig\Environment($loader);
    }

    public static function renderExceptionPage(Exception $e) {
        // Отправляем HTTP статус 500 для внутренних ошибок
        header("HTTP/1.1 500 Internal Server Error");
        return self::$twig->render('error.html.twig', ['exception' => $e]);
    }
}

// Инициализация Twig
Render::initializeTwig();
