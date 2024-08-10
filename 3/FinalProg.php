<?php
// Функция для валидации даты
function validateDate($date, $format = 'd-m-Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

// Функция для записи данных в файл
function saveToFile($name, $dateOfBirth) {
    $file = fopen("users.txt", "a");
    fwrite($file, "$name, $dateOfBirth\n");
    fclose($file);
}

// Функция для поиска именинников
function searchBirthdayPeople() {
    $file = fopen("users.txt", "r");
    $today = date('d-m');

    echo "Сегодня именинники:\n";
    while (($line = fgets($file)) !== false) {
        list($name, $dateOfBirth) = explode(',', trim($line));
        $birthday = substr($dateOfBirth, 0, 5);
        if ($birthday == $today) {
            echo "$name\n";
        }
    }

    fclose($file);
}

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

// Главное меню
do {
    echo "\nМеню:\n";
    echo "1. Добавить запись\n";
    echo "2. Найти именинников\n";
    echo "3. Удалить запись\n";
    echo "4. Выход\n";

    $choice = readline("Выберите действие: ");

    switch ($choice) {
        case 1:
            do {
                $name = readline("Введите имя: ");
                if (empty($name)) {
                    echo "Имя не может быть пустым. Попробуйте снова.\n";
                }
            } while (empty($name));

            do {
                $dateOfBirth = readline("Введите дату рождения (dd-mm-yyyy): ");
                if (!validateDate($dateOfBirth)) {
                    echo "Дата введена некорректно. Попробуйте снова.\n";
                }
            } while (!validateDate($dateOfBirth));

            saveToFile($name, $dateOfBirth);
            break;

        case 2:
            searchBirthdayPeople();
            break;

        case 3:
            $searchTerm = readline("Введите имя или дату (dd-mm-yyyy) для удаления: ");
            deleteLine($searchTerm);
            break;

        case 4:
            echo "Выход...\n";
            break;

        default:
            echo "Некорректный выбор. Попробуйте снова.\n";
            break;
    }
} while ($choice != 4);
?>
