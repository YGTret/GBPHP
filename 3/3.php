<?php
// Функция для удаления строки по имени или дате
function deleteLine($searchTerm) {
    $file = file("users.txt");
    $found = false;
    $newContent = "";

    foreach ($file as $line) {
        if (strpos($line, $searchTerm) === false) {
            $newContent .= $line;
        } else {
            $found = true;
        }
    }

    if ($found) {
        file_put_contents("users.txt", $newContent);
        echo "Строка с '$searchTerm' успешно удалена.\n";
    } else {
        echo "Строка с '$searchTerm' не найдена.\n";
    }
}

// Пример использования функции
$searchTerm = readline("Введите имя или дату (dd-mm-yyyy) для удаления: ");
deleteLine($searchTerm);
?>
