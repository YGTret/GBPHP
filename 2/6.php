function getCurrentTime() {
    $hours = date('H');
    $minutes = date('i');

    $hourWord = getWordForHours($hours);
    $minuteWord = getWordForMinutes($minutes);

    return "$hours $hourWord $minutes $minuteWord";
}

function getWordForHours($hours) {
    if ($hours == 1 || $hours == 21) {
        return "час";
    } elseif (($hours >= 2 && $hours <= 4) || ($hours >= 22 && $hours <= 24)) {
        return "часа";
    } else {
        return "часов";
    }
}

function getWordForMinutes($minutes) {
    $lastDigit = $minutes % 10;
    if ($minutes >= 11 && $minutes <= 14) {
        return "минут";
    } elseif ($lastDigit == 1) {
        return "минута";
    } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
        return "минуты";
    } else {
        return "минут";
    }
}

// Пример использования:
echo getCurrentTime(); // Вывод: например, "22 часа 15 минут"
