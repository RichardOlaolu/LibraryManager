<?php

namespace Richardolaolu\Libraryapp;
class Library extends Book {

    public $books = [];
    public $isRead = false;

public function __construct($title, $author, $year, $genre, $books, $isRead) {
        // Call the parent constructor to initialize Book properties
        parent::__construct($title, $author, $year, $genre);

        // Initialize Library-specific property
        $this->books = $books;
        $this->isRead = $isRead;
    }
public function listBooks() {
        $bookList = "Books in the library:\n";
        foreach ($this->books as $book) {
            $bookList .= "- " . $book->getSummary() . "\n";
        }
        return $bookList;
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function removeBook($title) {
        foreach ($this->books as $index => $book) {
            if (strcasecmp($book->title, $title) === 0) {
                unset($this->books[$index]);
                // Reindex the array
                $this->books = array_values($this->books);
                // Return the updated list of books
                return $this->listBooks();
            }
        }
        return false;
    }

    public function findBooksByAuthor($author) {
        $foundBooks = [];
        foreach ($this->books as $book) {
            if (strcasecmp($book->author, $author) === 0) {
                $foundBooks[] = $book;
            }
        }
        // Output summaries of found books as a string
        $summaries = "";
        foreach ($foundBooks as $book) {
            $summaries .= $book->getSummary() . "\n";
        }
        return $summaries;
    }

    public function countBooks() {
        return count($this->books);
    }

    public function getLibrarySummary() {
        return "This library contains " . $this->countBooks() . " books.";
    }


public function isbookread($title, $isRead) {
    foreach ($this->books as $book) {
        if (strcasecmp($book->title, $title) === 0) {
            return $isRead ? "{$title} has been read." : "{$title} has not been read.";
        }
    }
    return "{$title} is not in the library.";
}

    public function getSummary() {
        return parent::getSummary();
    }

}