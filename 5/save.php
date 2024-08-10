<?php
// Пример сохранения пользователя в файл
function saveUser($name, $birthday) {
    $data = "$name, $birthday\n";
    file_put_contents('users.txt', $data, FILE_APPEND);
    return "User $name with birthday $birthday has been saved.";
}

if (isset($_GET['name']) && isset($_GET['birthday'])) {
    $name = $_GET['name'];
    $birthday = $_GET['birthday'];

    $message = saveUser($name, $birthday);
    echo $twig->render('user_saved.html.twig', ['message' => $message]);
}
