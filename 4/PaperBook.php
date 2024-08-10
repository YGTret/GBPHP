<?php

class PaperBook extends Book {
    private $libraryAddress;

    public function __construct($title, $author, $year, $libraryAddress) {
        parent::__construct($title, $author, $year);
        $this->libraryAddress = $libraryAddress;
    }

    public function getOnHands() {
        $this->increaseReadCount();
        return "Книга доступна по адресу библиотеки: " . $this->libraryAddress;
    }
}
