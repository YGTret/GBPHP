function handle404() {
    header("HTTP/1.0 404 Not Found");
    global $twig;
    echo $twig->render('404.html.twig');
    exit();
}

// Пример использования, если контроллер не найден
$page = $_GET['page'] ?? 'home';

if ($page !== 'home') {
    handle404();
}
