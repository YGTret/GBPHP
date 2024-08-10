<?php

class DigitalBook extends Book {
    private $downloadLink;

    public function __construct($title, $author, $year, $downloadLink) {
        parent::__construct($title, $author, $year);
        $this->downloadLink = $downloadLink;
    }

    public function getOnHands() {
        $this->increaseReadCount();
        return "Ссылка на скачивание: " . $this->downloadLink;
    }
}
