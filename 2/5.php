function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    if ($pow < 0) {
        return 1 / power($val, -$pow);
    }
    return $val * power($val, $pow - 1);
}

// Пример использования:
echo power(2, 3); // Вывод: 8
