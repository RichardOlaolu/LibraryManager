<?php
namespace Richardolaolu\Libraryapp;

class Book {
    public $title;
    public $author;
    public $year;
    public $genre;

    public function __construct($title, $author, $year, $genre)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
    }
    public function getSummary()
    {
        return "{$this->title} is a {$this->genre} book written by {$this->author} in {$this->year}.";
    }
}