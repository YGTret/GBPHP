<?php

// Создаем экземпляр цифровой книги
$digitalBook = new DigitalBook("PHP Programming", "John Doe", 2020, "http://example.com/download/php");

// Создаем экземпляр бумажной книги
$paperBook = new PaperBook("Mastering PHP", "Jane Smith", 2018, "г. Москва, ул. Ленина, д. 10");

// Получаем цифровую книгу
echo $digitalBook->getOnHands() . "\n"; // Output: Ссылка на скачивание: http://example.com/download/php

// Получаем бумажную книгу
echo $paperBook->getOnHands() . "\n"; // Output: Книга доступна по адресу библиотеки: г. Москва, ул. Ленина, д. 10

// Выводим количество прочтений
echo "Цифровая книга была прочитана " . $digitalBook->getReadCount() . " раз.\n"; // Output: Цифровая книга была прочитана 1 раз.
echo "Бумажная книга была прочитана " . $paperBook->getReadCount() . " раз.\n"; // Output: Бумажная книга была прочитана 1 раз.
