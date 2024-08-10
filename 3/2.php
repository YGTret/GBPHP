<?php
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

searchBirthdayPeople();
?>
