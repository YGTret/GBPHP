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

// Пример использования функции
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
?>
