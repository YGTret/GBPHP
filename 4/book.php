<?php

abstract class Book {
    protected $title;
    protected $author;
    protected $year;
    protected $readCount;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->readCount = 0;
    }

    public function increaseReadCount() {
        $this->readCount++;
    }

    public function getReadCount() {
        return $this->readCount;
    }

    abstract public function getOnHands();
}
