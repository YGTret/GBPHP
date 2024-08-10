<?php

function deleteUser($id) {
    $file = 'users.txt';
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $updated = false;

    foreach ($users as $key => $user) {
        list($userId, $userName, $userBirthday) = explode(', ', $user);
        if ($userId == $id) {
            unset($users[$key]);
            $updated = true;
            break;
        }
    }

    if ($updated) {
        file_put_contents($file, implode(PHP_EOL, $users) . PHP_EOL);
        return "User $id deleted.";
    } else {
        return "User $id not found.";
    }
}

// Пример вызова удаления пользователя
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $message = deleteUser($id);
    echo $twig->render('user_deleted.html.twig', ['message' => $message]);
}
