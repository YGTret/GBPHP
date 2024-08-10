<?php

function updateUser($id, $name) {
    $file = 'users.txt';
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $updated = false;

    foreach ($users as &$user) {
        list($userId, $userName, $userBirthday) = explode(', ', $user);
        if ($userId == $id) {
            $user = "$id, $name, $userBirthday";
            $updated = true;
            break;
        }
    }

    if ($updated) {
        file_put_contents($file, implode(PHP_EOL, $users) . PHP_EOL);
        return "User $id updated to $name.";
    } else {
        return "User $id not found.";
    }
}

// Пример вызова обновления пользователя
if (isset($_GET['id']) && isset($_GET['name'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $message = updateUser($id, $name);
    echo $twig->render('user_updated.html.twig', ['message' => $message]);
}
