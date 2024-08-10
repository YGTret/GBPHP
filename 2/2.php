function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
        case 'subtract':
            return subtract($arg1, $arg2);
        case 'multiply':
            return multiply($arg1, $arg2);
        case 'divide':
            return divide($arg1, $arg2);
        default:
            return "Неверная операция!";
    }
}

// Пример использования:
echo mathOperation(10, 5, 'add');       // Вывод: 15
echo mathOperation(10, 5, 'subtract');  // Вывод: 5
echo mathOperation(10, 5, 'multiply');  // Вывод: 50
echo mathOperation(10, 5, 'divide');    // Вывод: 2
